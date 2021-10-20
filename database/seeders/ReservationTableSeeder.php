<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'reservation_date' => '1000-01-01 00:00:00.000000',
            'phone_number' => '09022222222',
            'email'=> 'kaisei@kaisei',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
        ];

        DB::table('reservations')->insert($param);

        $param = [
            'user_id' => 2,
            'reservation_date' => '2021-10-01 00:00:00.000000',
            'phone_number' => '09044552222',
            'email'=> 'kawada@kawada',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
        ];

        DB::table('reservations')->insert($param);

        $param = [
            'user_id' => 3,
            'reservation_date' => '2021-09-01 00:00:00.000000',
            'phone_number' => '09033225661',
            'email'=> 'seto@seto',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
        ];

        DB::table('reservations')->insert($param);
    }
}
