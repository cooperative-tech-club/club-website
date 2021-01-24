<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TracksTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('tracks')->insert([
      'id' => 1,
      'name' => 'Introduction to Blockchain',
      'description' => 'Learn the fundamentals of Blockchain technologies. Understand in which cases, other than digital money...',
      'source' => '	dacade',
      'link' => 'https://dacade.org/intro-to-blockchain/introduction/?utm_source=aembassador-emmanueljet',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('tracks')->insert([
      'id' => 2,
      'name' => 'Web Development 101',
      'description' => 'This course is designed to make you understand the basics of HTML, CSS and Bootstrap by building your own professional looking, responsive website...',
      'source' => 'dacade',
      'link' => 'https://dacade.org/web-dev-101/introduction/?utm_source=aembassador-emmanueljet',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('tracks')->insert([
      'id' => 3,
      'name' => 'æternity Development 101',
      'description' => 'Build a voting æpp with æternity technology, learning key features of the Sophia programming language...',
      'source' => 'dacade',
      'link' => 'https://dacade.org/ae-dev-101/introduction/?utm_source=aembassador-emmanueljet',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('tracks')->insert([
      'id' => 4,
      'name' => 'Version Control with Git',
      'description' => 'This course covers the essentials of using the version control system Git....',
      'source' => 'Udacity',
      'link' => 'https://www.udacity.com/course/version-control-with-git--ud123',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('tracks')->insert([
      'id' => 5,
      'name' => 'Firebase Web Codelab',
      'description' => 'You\'ll learn how to easily create web applications by implementing and....',
      'source' => 'Google Developers',
      'link' => 'https://codelabs.developers.google.com/codelabs/firebase-web',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('tracks')->insert([
      'id' => 6,
      'name' => 'React JS 101',
      'description' => 'Build powerful interactive applications with React, a popular JavaScript library....',
      'source' => 'Codecademy',
      'link' => 'https://www.codecademy.com/learn/react-101',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    for ($i=1; $i<=6; $i++) {
      DB::table('tag_track')->insert(
        [
          'track_id' => $i,
          'tag_id' => 6,
        ]
      );
    }
  }
}
