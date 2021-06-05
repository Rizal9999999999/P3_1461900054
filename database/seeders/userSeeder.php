<?php

namespace Database\Seeders;
use App\Models\user;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 =  new user();
        $user1->id = "1";
        $user1->nama = "admin";
        $user1->username = "admin";
        $user1->password = "admin";
        $user1->save();
    }
}
