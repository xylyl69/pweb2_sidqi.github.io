<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id'=>'1',
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>'$2y$10$0jqGpw3qqha1Pf9x6V.YvuWTjVy1lwtqpPKXEaZJ7lf.MsNXTcV4G',
            'role_id'=>'1',

        ]);
    }
    
}
