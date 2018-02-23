<?php

use Illuminate\Database\Seeder;

class LaminationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lamination_types')->insert([
            [
                'name' => '--', 
                'description' => 'null',

            ],
            [
                'name' => 'Scoring Cover Lamination', 
                'description' => 'scoring',
             
            ]
        ]);
    }
}
