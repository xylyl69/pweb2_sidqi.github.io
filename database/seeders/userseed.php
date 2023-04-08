<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class userseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id'=>'2',
            'name'=>'user',
            'email'=>'user@gmail.com',
            'password'=>'$2y$10$6vR5V4eKZ6Sf6JjttndBruSNV7YOkgj.ZXfLVaZKW3.L5Fs6Kffua',
            'role_id'=>'0',

        ]);
    }
}
