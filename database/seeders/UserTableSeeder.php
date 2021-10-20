<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'first_name' => '開成',
            'last_name' => '太田',
            'email'=> 'kaisei@kaisei',
            'password' => 'kaibonjin',
            'age' => 36,
            'phone_number' => '09072933923',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
        ];

        DB::table('users')->insert($param);

        $param = [
            'first_name' => '新之助',
            'last_name' => '川田',
            'email'=> 'kawada@kawada',
            'password' => 'kawada',
            'age' => 35,
            'phone_number' => '09022222222',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
        ];

        DB::table('users')->insert($param);

        $param = [
            'first_name' => 'こうじ',
            'last_name' => 'せと',
            'email'=> 'seto@seto',
            'password' => 'seto',
            'age' => 41,
            'phone_number' => '09044442111',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
        ];

        DB::table('users')->insert($param);


    }
}
