<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call([RolesTableSeeder::class, UsersTableSeeder::class, TeamsTableSeeder::class]);
    $this->call([TagsTableSeeder::class, CategoriesTableSeeder::class]);
    $this->call([VenuesTableSeeder::class, WorkshopsTableSeeder::class]);
    $this->call([TracksTableSeeder::class]);
    $this->call([ProjectsTableSeeder::class,StoriesTableSeeder::class]);
  }
}
