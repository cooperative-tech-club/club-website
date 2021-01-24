<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('teams')->insert([
      'id' => 1,
      'user_id' => 1,
      'title' => 'Lead & æmbassador',
      'description' => 'Software & Blockchain Developer, Open source enthusiast, Community Mentor',
      'twitter' => 'https://twitter.com/emmanuelJet_',
      'github' => 'https://github.com/emmanuelJet',
      'telegram' => 'https://t.me/emmanueljet',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('teams')->insert([
      'id' => 2,
      'user_id' => 2,
      'title' => 'Co-Lead',
      'description' => 'Android and Web developer, Open source enthusiast, Community Mentor',
      'twitter' => 'https://twitter.com/nimi_software',
      'github' => 'https://github.com/Jesulonimi21',
      'telegram' => 'https://t.me/jesulonimi',
      'created_at' => now(),
      'updated_at' => now()
    ]);
  }
}
