<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('roles')->insert([
      'id' => 1,
      'name' => 'Lead',
      'description' => 'This is the lead role',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('roles')->insert([
      'id' => 2,
      'name' => 'Facilitator',
      'description' => 'This is the facilitator role',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('roles')->insert([
      'id' => 3,
      'name' => 'Creator',
      'description' => 'This is the creator role',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('roles')->insert([
      'id' => 4,
      'name' => 'Member',
      'description' => 'This is the member role',
      'created_at' => now(),
      'updated_at' => now()
    ]);
  }
}
