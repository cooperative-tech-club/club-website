<?php

use App\Model\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'id' => 1,
      'name' => 'Jeremih',
      'email' => 'lead@gmail.com',
      'role_id' => 1,
      'email_verified_at' => now(),
      'password' => bcrypt('password'),
      'created_at' => now(),
      'updated_at' => now()
    ]);

    User::create([
      'id' => 2,
      'name' => 'khaligraph',
      'email' => 'khaligraph@gmail.com',
      'role_id' => 2,
      'email_verified_at' => now(),
      'password' => bcrypt('password'),
      'created_at' => now(),
      'updated_at' => now()
    ]);

    // User::create([
    //   'id' => 3,
    //   'name' => 'Creator',
    //   'email' => 'creator@aekiti.com',
    //   'role_id' => 3,
    //   'email_verified_at' => now(),
    //   'password' => bcrypt('password'),
    //   'created_at' => now(),
    //   'updated_at' => now()
    // ]);

    // User::create([
    //   'id' => 4,
    //   'name' => 'Member',
    //   'email' => 'member@aekiti.com',
    //   'role_id' => 4,
    //   'email_verified_at' => now(),
    //   'password' => bcrypt('password'),
    //   'created_at' => now(),
    //   'updated_at' => now()
    // ]);
  }
}
