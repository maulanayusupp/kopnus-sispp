<?php

use Illuminate\Database\Seeder;

class BungaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->makroSendiriMppKurang70();
        $this->makroSendiriMppLebih70();
        $this->makroBaruJdAtauDdKurang70();
        $this->makroBaruJdAtauDdLebih70();
        $this->bungaTopUpPensSendiri();
        $this->bungaTopUpJdAtauDd();
        $this->bungaMikroPensSendiri();
        $this->bungaMikroJdAtauDd();
    }

    public function makroSendiriMppKurang70(){
        $tahun = 15;
        for ($i=1; $i <= $tahun ; $i++){ 
            if ($i == 1){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 0.99,
                    'tahun_bunga' => 1,
                    'bulan_bunga' => 12,
                ]);
            }elseif($i == 2){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 0.99,
                    'tahun_bunga' => 2,
                    'bulan_bunga' => 24,
                ]);
            }elseif($i == 3){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 0.99,
                    'tahun_bunga' => 3,
                    'bulan_bunga' => 36,
                ]);
            }elseif($i == 4){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 0.99,
                    'tahun_bunga' => 4,
                    'bulan_bunga' => 48,
                ]);
            }elseif($i == 5){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 0.99,
                    'tahun_bunga' => 5,
                    'bulan_bunga' => 60,
                ]);
            }elseif($i == 6){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 0.99,
                    'tahun_bunga' => 6,
                    'bulan_bunga' => 72,
                ]);
            }elseif($i == 7){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 0.99,
                    'tahun_bunga' => 7,
                    'bulan_bunga' => 84,
                ]);
            }elseif($i == 8){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 0.99,
                    'tahun_bunga' => 8,
                    'bulan_bunga' => 96,
                ]);
            }elseif($i == 9){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 0.99,
                    'tahun_bunga' => 9,
                    'bulan_bunga' => 108,
                ]);
            }elseif($i == 10){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 0.99,
                    'tahun_bunga' => 10,
                    'bulan_bunga' => 120,
                ]);
            }elseif($i == 11){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 1.20,
                    'tahun_bunga' => 11,
                    'bulan_bunga' => 132,
                ]);
            }elseif($i == 12){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 1.24,
                    'tahun_bunga' => 12,
                    'bulan_bunga' => 144,
                ]);
            }elseif($i == 13){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 1.24,
                    'tahun_bunga' => 13,
                    'bulan_bunga' => 156,
                ]);
            }elseif($i == 14){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 1.24,
                    'tahun_bunga' => 14,
                    'bulan_bunga' => 168,
                ]);
            }elseif($i == 15){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt < 70',
                    'bunga' => 1.24,
                    'tahun_bunga' => 15,
                    'bulan_bunga' => 180,
                ]);
            }
        }
    }
    public function makroSendiriMppLebih70(){
        $tahun = 15;
        for ($i=1; $i <= $tahun ; $i++){ 
            if ($i == 1){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 0.99,
                    'tahun_bunga' => 1,
                    'bulan_bunga' => 12,
                ]);
            }elseif($i == 2){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 1.15,
                    'tahun_bunga' => 2,
                    'bulan_bunga' => 24,
                ]);
            }elseif($i == 3){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 1.15,
                    'tahun_bunga' => 3,
                    'bulan_bunga' => 36,
                ]);
            }elseif($i == 4){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 1.25,
                    'tahun_bunga' => 4,
                    'bulan_bunga' => 48,
                ]);
            }elseif($i == 5){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 1.25,
                    'tahun_bunga' => 5,
                    'bulan_bunga' => 60,
                ]);
            }elseif($i == 6){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 1.34,
                    'tahun_bunga' => 6,
                    'bulan_bunga' => 72,
                ]);
            }elseif($i == 7){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 1.34,
                    'tahun_bunga' => 7,
                    'bulan_bunga' => 84,
                ]);
            }elseif($i == 8){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 1.34,
                    'tahun_bunga' => 8,
                    'bulan_bunga' => 96,
                ]);
            }elseif($i == 9){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 1.34,
                    'tahun_bunga' => 9,
                    'bulan_bunga' => 108,
                ]);
            }elseif($i == 10){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 1.34,
                    'tahun_bunga' => 10,
                    'bulan_bunga' => 120,
                ]);
            }elseif($i == 11){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 1.39,
                    'tahun_bunga' => 11,
                    'bulan_bunga' => 132,
                ]);
            }elseif($i == 12){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 1.39,
                    'tahun_bunga' => 12,
                    'bulan_bunga' => 144,
                ]);
            }elseif($i == 13){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 1.39,
                    'tahun_bunga' => 13,
                    'bulan_bunga' => 156,
                ]);
            }elseif($i == 14){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 1.39,
                    'tahun_bunga' => 14,
                    'bulan_bunga' => 168,
                ]);
            }elseif($i == 15){
                App\Bunga::create([
                    'nama' => 'Makro Sendiri dan MPP Jt > 70',
                    'bunga' => 1.39,
                    'tahun_bunga' => 15,
                    'bulan_bunga' => 180,
                ]);
            }
        }
    }
    public function makroBaruJdAtauDdKurang70(){
        $tahun = 15;
        for ($i=1; $i <= $tahun ; $i++){ 
            if ($i == 1){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 0.85,
                    'tahun_bunga' => 1,
                    'bulan_bunga' => 12,
                ]);
            }elseif($i == 2){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 0.85,
                    'tahun_bunga' => 2,
                    'bulan_bunga' => 24,
                ]);
            }elseif($i == 3){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 1.20,
                    'tahun_bunga' => 3,
                    'bulan_bunga' => 36,
                ]);
            }elseif($i == 4){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 1.20,
                    'tahun_bunga' => 4,
                    'bulan_bunga' => 48,
                ]);
            }elseif($i == 5){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 1.20,
                    'tahun_bunga' => 5,
                    'bulan_bunga' => 60,
                ]);
            }elseif($i == 6){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 1.25,
                    'tahun_bunga' => 6,
                    'bulan_bunga' => 72,
                ]);
            }elseif($i == 7){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 1.25,
                    'tahun_bunga' => 7,
                    'bulan_bunga' => 84,
                ]);
            }elseif($i == 8){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 1.30,
                    'tahun_bunga' => 8,
                    'bulan_bunga' => 96,
                ]);
            }elseif($i == 9){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 1.30,
                    'tahun_bunga' => 9,
                    'bulan_bunga' => 108,
                ]);
            }elseif($i == 10){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 1.30,
                    'tahun_bunga' => 10,
                    'bulan_bunga' => 120,
                ]);
            }elseif($i == 11){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 1.30,
                    'tahun_bunga' => 11,
                    'bulan_bunga' => 132,
                ]);
            }elseif($i == 12){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 1.34,
                    'tahun_bunga' => 12,
                    'bulan_bunga' => 144,
                ]);
            }elseif($i == 13){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 1.34,
                    'tahun_bunga' => 13,
                    'bulan_bunga' => 156,
                ]);
            }elseif($i == 14){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 1.34,
                    'tahun_bunga' => 14,
                    'bulan_bunga' => 168,
                ]);
            }elseif($i == 15){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd < 70',
                    'bunga' => 1.34,
                    'tahun_bunga' => 15,
                    'bulan_bunga' => 180,
                ]);
            }
        }
    }
    public function makroBaruJdAtauDdLebih70(){
        $tahun = 15;
        for ($i=1; $i <= $tahun ; $i++){ 
            if ($i == 1){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 0.99,
                    'tahun_bunga' => 1,
                    'bulan_bunga' => 12,
                ]);
            }elseif($i == 2){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 1.25,
                    'tahun_bunga' => 2,
                    'bulan_bunga' => 24,
                ]);
            }elseif($i == 3){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 1.25,
                    'tahun_bunga' => 3,
                    'bulan_bunga' => 36,
                ]);
            }elseif($i == 4){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 1.35,
                    'tahun_bunga' => 4,
                    'bulan_bunga' => 48,
                ]);
            }elseif($i == 5){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 1.35,
                    'tahun_bunga' => 5,
                    'bulan_bunga' => 60,
                ]);
            }elseif($i == 6){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 1.44,
                    'tahun_bunga' => 6,
                    'bulan_bunga' => 72,
                ]);
            }elseif($i == 7){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 1.44,
                    'tahun_bunga' => 7,
                    'bulan_bunga' => 84,
                ]);
            }elseif($i == 8){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 1.44,
                    'tahun_bunga' => 8,
                    'bulan_bunga' => 96,
                ]);
            }elseif($i == 9){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 1.44,
                    'tahun_bunga' => 9,
                    'bulan_bunga' => 108,
                ]);
            }elseif($i == 10){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 1.44,
                    'tahun_bunga' => 10,
                    'bulan_bunga' => 120,
                ]);
            }elseif($i == 11){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 1.49,
                    'tahun_bunga' => 11,
                    'bulan_bunga' => 132,
                ]);
            }elseif($i == 12){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 1.49,
                    'tahun_bunga' => 12,
                    'bulan_bunga' => 144,
                ]);
            }elseif($i == 13){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 1.49,
                    'tahun_bunga' => 13,
                    'bulan_bunga' => 156,
                ]);
            }elseif($i == 14){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 1.49,
                    'tahun_bunga' => 14,
                    'bulan_bunga' => 168,
                ]);
            }elseif($i == 15){
                App\Bunga::create([
                    'nama' => 'Makro Baru Jd/Dd > 70',
                    'bunga' => 1.49,
                    'tahun_bunga' => 15,
                    'bulan_bunga' => 180,
                ]);
            }
        }
    }
    public function bungaTopUpPensSendiri(){
        $tahun = 15;
        for ($i=1; $i <= $tahun ; $i++){ 
            if ($i == 1){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 0.85,
                    'tahun_bunga' => 1,
                    'bulan_bunga' => 12,
                ]);
            }elseif($i == 2){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 0.85,
                    'tahun_bunga' => 2,
                    'bulan_bunga' => 24,
                ]);
            }elseif($i == 3){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 1.14,
                    'tahun_bunga' => 3,
                    'bulan_bunga' => 36,
                ]);
            }elseif($i == 4){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 1.14,
                    'tahun_bunga' => 4,
                    'bulan_bunga' => 48,
                ]);
            }elseif($i == 5){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 1.14,
                    'tahun_bunga' => 5,
                    'bulan_bunga' => 60,
                ]);
            }elseif($i == 6){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 1.15,
                    'tahun_bunga' => 6,
                    'bulan_bunga' => 72,
                ]);
            }elseif($i == 7){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 1.15,
                    'tahun_bunga' => 7,
                    'bulan_bunga' => 84,
                ]);
            }elseif($i == 8){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 1.22,
                    'tahun_bunga' => 8,
                    'bulan_bunga' => 96,
                ]);
            }elseif($i == 9){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 1.22,
                    'tahun_bunga' => 9,
                    'bulan_bunga' => 108,
                ]);
            }elseif($i == 10){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 1.22,
                    'tahun_bunga' => 10,
                    'bulan_bunga' => 120,
                ]);
            }elseif($i == 11){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 1.25,
                    'tahun_bunga' => 11,
                    'bulan_bunga' => 132,
                ]);
            }elseif($i == 12){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 1.25,
                    'tahun_bunga' => 12,
                    'bulan_bunga' => 144,
                ]);
            }elseif($i == 13){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 1.25,
                    'tahun_bunga' => 13,
                    'bulan_bunga' => 156,
                ]);
            }elseif($i == 14){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 1.25,
                    'tahun_bunga' => 14,
                    'bulan_bunga' => 168,
                ]);
            }elseif($i == 15){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Pens Sendiri',
                    'bunga' => 1.25,
                    'tahun_bunga' => 15,
                    'bulan_bunga' => 180,
                ]);
            }
        }
    }
    public function bungaTopUpJdAtauDd(){
        $tahun = 15;
        for ($i=1; $i <= $tahun ; $i++){ 
            if ($i == 1){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 0.85,
                    'tahun_bunga' => 1,
                    'bulan_bunga' => 12,
                ]);
            }elseif($i == 2){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 0.85,
                    'tahun_bunga' => 2,
                    'bulan_bunga' => 24,
                ]);
            }elseif($i == 3){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 1.24,
                    'tahun_bunga' => 3,
                    'bulan_bunga' => 36,
                ]);
            }elseif($i == 4){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 1.24,
                    'tahun_bunga' => 4,
                    'bulan_bunga' => 48,
                ]);
            }elseif($i == 5){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 1.24,
                    'tahun_bunga' => 5,
                    'bulan_bunga' => 60,
                ]);
            }elseif($i == 6){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 1.25,
                    'tahun_bunga' => 6,
                    'bulan_bunga' => 72,
                ]);
            }elseif($i == 7){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 1.25,
                    'tahun_bunga' => 7,
                    'bulan_bunga' => 84,
                ]);
            }elseif($i == 8){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 1.32,
                    'tahun_bunga' => 8,
                    'bulan_bunga' => 96,
                ]);
            }elseif($i == 9){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 1.32,
                    'tahun_bunga' => 9,
                    'bulan_bunga' => 108,
                ]);
            }elseif($i == 10){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 1.32,
                    'tahun_bunga' => 10,
                    'bulan_bunga' => 120,
                ]);
            }elseif($i == 11){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 1.35,
                    'tahun_bunga' => 11,
                    'bulan_bunga' => 132,
                ]);
            }elseif($i == 12){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 1.35,
                    'tahun_bunga' => 12,
                    'bulan_bunga' => 144,
                ]);
            }elseif($i == 13){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 1.35,
                    'tahun_bunga' => 13,
                    'bulan_bunga' => 156,
                ]);
            }elseif($i == 14){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 1.35,
                    'tahun_bunga' => 14,
                    'bulan_bunga' => 168,
                ]);
            }elseif($i == 15){
                App\Bunga::create([
                    'nama' => 'Bunga Top Up Janda / Duda',
                    'bunga' => 1.35,
                    'tahun_bunga' => 15,
                    'bulan_bunga' => 180,
                ]);
            }
        }
    }
    public function bungaMikroPensSendiri(){
        $tahun = 5;
        for ($i=1; $i <= $tahun ; $i++){ 
            if ($i == 1){
                App\Bunga::create([
                    'nama' => 'Bunga Mikro Pens Sendiri',
                    'bunga' => 1.15,
                    'tahun_bunga' => 1,
                    'bulan_bunga' => 12,
                ]);
            }elseif($i == 2){
                App\Bunga::create([
                    'nama' => 'Bunga Mikro Pens Sendiri',
                    'bunga' => 1.15,
                    'tahun_bunga' => 2,
                    'bulan_bunga' => 24,
                ]);
            }elseif($i == 3){
                App\Bunga::create([
                    'nama' => 'Bunga Mikro Pens Sendiri',
                    'bunga' => 1.15,
                    'tahun_bunga' => 3,
                    'bulan_bunga' => 36,
                ]);
            }elseif($i == 4){
                App\Bunga::create([
                    'nama' => 'Bunga Mikro Pens Sendiri',
                    'bunga' => 1.19,
                    'tahun_bunga' => 4,
                    'bulan_bunga' => 48,
                ]);
            }elseif($i == 5){
                App\Bunga::create([
                    'nama' => 'Bunga Mikro Pens Sendiri',
                    'bunga' => 1.25,
                    'tahun_bunga' => 5,
                    'bulan_bunga' => 60,
                ]);
            }
        }
    }
    public function bungaMikroJdAtauDd(){
        $tahun = 4;
        for ($i=1; $i <= $tahun ; $i++){ 
            if ($i == 1){
                App\Bunga::create([
                    'nama' => 'Bunga Mikro Janda atau Duda',
                    'bunga' => 1.35,
                    'tahun_bunga' => 1,
                    'bulan_bunga' => 12,
                ]);
            }elseif($i == 2){
                App\Bunga::create([
                    'nama' => 'Bunga Mikro Janda atau Duda',
                    'bunga' => 1.35,
                    'tahun_bunga' => 2,
                    'bulan_bunga' => 24,
                ]);
            }elseif($i == 3){
                App\Bunga::create([
                    'nama' => 'Bunga Mikro Janda atau Duda',
                    'bunga' => 1.35,
                    'tahun_bunga' => 3,
                    'bulan_bunga' => 36,
                ]);
            }elseif($i == 4){
                App\Bunga::create([
                    'nama' => 'Bunga Mikro Janda atau Duda',
                    'bunga' => 1.39,
                    'tahun_bunga' => 4,
                    'bulan_bunga' => 48,
                ]);
            }
        }
    }
}