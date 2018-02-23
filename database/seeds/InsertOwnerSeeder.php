<?php

use Illuminate\Database\Seeder;

class InsertOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        ['first_name' => 'Jesus',
        'last_name' => 'Crisologo',
        'user_type' => 3,
        'email' => 'owner@merg.com',
        'password' => bcrypt('likeaboss')],
      ['first_name' => 'Customer',
      'last_name' => 'User',
      'user_type' => 1,
      'email' => 'customer@merg.com',
      'password' => bcrypt('customer')],
      ['first_name' => 'Sales',
      'last_name' => 'Agent',
      'user_type' => 2,
      'email' => 'agent@merg.com',
      'password' => bcrypt('salesagent')]
    ]);
    }
}
