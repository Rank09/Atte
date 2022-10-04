<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ( $id = 1; $id <= 50; $id++){
            $start_time = '15:23:35';
            $end_time = '15:23:35';

            $param = [
                'attendance_id' => $id,
                'start_time' => $start_time,
                'end_time' => $end_time
            ];
            DB::table('rests')->insert($param);
        }
    }
}
