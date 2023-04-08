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
            'name'=>'siswa',
            'email'=>'siswa@gmail.com',
            'password'=>'$2y$10$DPyC3cNxjE6mrvnzkQ/MlOBEnQ71aU5suFt4uYUnwyzjZE73rvkl2',
            'role_id'=>'0',

        ]);
    }
}
