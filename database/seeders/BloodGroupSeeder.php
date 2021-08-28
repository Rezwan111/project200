<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blood_groups')->insert(array(
            0 => array(
                'name' => 'A+'
            ),
            1 => array(
                'name' => 'A-'
            ),
            2 => array(
                'name' => 'B+'
            ),
            3 => array(
                'name' => 'B-'
            ),
            4 => array(
                'name' => 'O+'
            ),
            5 => array(
                'name' => 'O-'
            ),
            6 => array(
                'name' => 'AB-'
            ),
            7 => array(
                'name' => 'AB+'
            )
        ));
    }
}
