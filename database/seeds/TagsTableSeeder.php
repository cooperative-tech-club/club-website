<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('tags')->insert([
      'id' => 1,
      'name' => 'New',
      'slug' => 'new',
      'color' => '#11cdef',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('tags')->insert([
      'id' => 2,
      'name' => 'DevStudyJæm',
      'slug' => 'devstudyjaem',
      'color' => '#11cdef',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('tags')->insert([
      'id' => 3,
      'name' => 'Sophia',
      'slug' => 'sophia',
      'color' => '#155724',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('tags')->insert([
      'id' => 4,
      'name' => 'AEproject',
      'slug' => 'aeproject',
      'color' => '#004085',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('tags')->insert([
      'id' => 5,
      'name' => 'IPFS',
      'slug' => 'ipfs',
      'color' => '#383d41',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('tags')->insert([
      'id' => 6,
      'name' => 'Beginner',
      'slug' => 'beginner',
      'color' => '#004085',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('tags')->insert([
      'id' => 7,
      'name' => 'Jæmer',
      'slug' => 'jaemer',
      'color' => '#383d41',
      'created_at' => now(),
      'updated_at' => now()
    ]);
  }
}
