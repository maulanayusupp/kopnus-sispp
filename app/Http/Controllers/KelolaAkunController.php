<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class KelolaAkunController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->get('q');
        if (isset($q)) {
            $users = User::where('id', $q)->orderBy('role','asc')->paginate(10);
        }else{
            $users = User::where('id', 'LIKE', '%'.$q.'%')->orderBy('role','asc')->paginate(10);    
        }
        
        return view('pages.kelola-akun.kelola-akun', compact('users','q'));
    }

    public function daftarMember()
    {
        $users = User::where('role', 'member')->orderBy('id','desc')->paginate(10);
        return view('pages.kelola-akun.daftar-member', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kelola-akun.tambah-akun');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');
        $user->status = 'aktif';    
        $user->save();        
        
        \Flash::success($request->get('email') . ' Akun ditambahkan.');
        return redirect()->route('kelola.akun.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.kelola-akun.ubah-akun', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
        ]);

        $user->update($request->all());
        \Flash::success($request->get('name') . ' berhasil diubah.');
        return redirect()->route('kelola.akun.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        \Flash::success('Akun berhasil dihapus.');
        return redirect()->route('kelola.akun.index');
    }
}
