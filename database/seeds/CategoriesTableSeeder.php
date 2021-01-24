<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('categories')->insert([
      'id' => 1,
      'name' => 'æternity',
      'slug' => 'aeternity',
      'description' => 'æternity category',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('categories')->insert([
      'id' => 2,
      'name' => 'ækiti',
      'slug' => 'aekiti',
      'description' => 'ækiti category',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('categories')->insert([
      'id' => 3,
      'name' => 'Jæmer',
      'slug' => 'jaemer',
      'description' => 'Jæmer Category',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('categories')->insert([
      'id' => 4,
      'name' => 'Other',
      'slug' => 'other',
      'description' => 'other Category',
      'created_at' => now(),
      'updated_at' => now()
    ]);
  }
}
