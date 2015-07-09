<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'name'  =>  'helei',
            'email' =>  'helei5200@126.com',
            'password'  =>  bcrypt('123456'),
        ]);
    }
}