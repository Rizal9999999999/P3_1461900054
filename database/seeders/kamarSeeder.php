<?php

namespace Database\Seeders;
use App\Models\kamar;
use Illuminate\Database\Seeder;

class kamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kmr1 =  new kamar();
        $kmr1->id = "1";
        $kmr1->id_pasien = "2";
        $kmr11->id_dokter = "1";
        $kmr1->save();

        $dkt2 =  new dokter();
        $dkt2->id = "2";
        $dkt2->nama = "1";
        $dkt2->jabatan = "1";
        $dkt2->save();
    }
}
