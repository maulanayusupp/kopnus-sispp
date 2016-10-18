<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Http\Requests;
use App\Pinjaman;
use App\Pembayaran;
use App\Simpanan;

class LaporanController extends Controller
{
    public function laporanPinjaman(Request $request, $type)
	{
		$data = Pinjaman::get()->toArray();
		return Excel::create('Pinjaman - SISPP - '.date('Y-m-d'), function($excel) use ($data) {
			$excel->sheet('Laporan', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}

	public function laporanPembayaran(Request $request, $type)
	{
		$data = Pembayaran::get()->toArray();
		return Excel::create('Pembayaran - SISPP - '.date('Y-m-d'), function($excel) use ($data) {
			$excel->sheet('Laporan', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}

	public function laporanSimpanan(Request $request, $type)
	{
		$data = Simpanan::get()->toArray();
		return Excel::create('Simpanan - SISPP - '.date('Y-m-d'), function($excel) use ($data) {
			$excel->sheet('Laporan', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
}

