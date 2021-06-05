<?php

namespace Database\Seeders;
use App\Models\dokter;
use Illuminate\Database\Seeder;

class dokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dkt1 =  new dokter();
        $dkt1->id = "1";
        $dkt1->nama = "zam";
        $dkt1->jabatan = "dokter umum";
        $dkt1->save();
    }
}
