<?php

namespace Database\Seeders;
use App\Models\pasien;
use Illuminate\Database\Seeder;

class pasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $psn1 =  new pasien();
        $psn1->id = "1";
        $psn1->nama = "arif";
        $psn1->alamat = "Sidoarjo";
        $psn1->save(); 

        $psn2 =  new pasien();
        $psn2->id = "2";
        $psn2->nama = "ade";
        $psn2->alamat = "Surabaya";
        $psn2->save(); 
    }
}
