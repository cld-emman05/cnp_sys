<?php

use Illuminate\Database\Seeder;

class BindingTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('binding_types')->insert([
            [
                'name' => '--', 
                'description' => 'null',
            ],
            [
                'name' => 'Perfect Bound', 
                'description' => 'perfect',
            ],
            [
                'name' => 'Hard Bound', 
                'description' => 'hard',
            ],
            [
                'name' => 'Soft Bound', 
                'description' => 'soft',
  
            ]
        ]);
    }
}
