<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('projects')->insert([
      'id' => 1,
      'name' => 'AEchat',
      'description' => 'AEchat is a web chat aepp on aeternity blockchain that utilized the use of IPFS, ReactJS, Google and aeternity technoloies',
      'category_id' => 2,
      'date' => '2020-04-20',
      'show_on_homepage' => 1,
      'link' => 'https://aechat-aekiti.web.app',
      'youtube' => 'https://www.youtube.com/playlist?list=PLVz98HTQCJzTdFvQcMbpfWpO3WiKcD-Ed',
      'github' => 'https://github.com/aekiti/AEchat',
      'created_at' => date('2020/04/20 12:00:00'),
      'updated_at' => date('2020/04/20 12:00:00')
    ]);

    DB::table('projects')->insert([
      'id' => 2,
      'name' => 'AeTwaet',
      'description' => 'AeTwaet is a streamlined version of Twitter where users can twæt and receive tips',
      'category_id' => 3,
      'date' => '2020-02-25',
      'show_on_homepage' => 1,
      'link' => 'https://aekiti.github.io/aepps/aetwaet',
      'youtube' => 'https://www.youtube.com/watch?v=3Jf6UiTEF5Y&list=PLVz98HTQCJzTKkOWbmmhw79L5Bf6QrHrJ',
      'created_at' => date('2020/02/25 12:00:00'),
      'updated_at' => date('2020/02/25 12:00:00')
    ]);

    DB::table('projects')->insert([
      'id' => 3,
      'name' => 'RideArt',
      'description' => 'RideArt is an æpp that helps users get to their destination with absolute ease',
      'category_id' => 3,
      'date' => '2020-03-19',
      'show_on_homepage' => 1,
      'link' => 'https://aekiti.github.io/aepps/rideart',
      'youtube' => 'https://www.youtube.com/watch?v=2D-UHp2v58I&list=PLVz98HTQCJzTKkOWbmmhw79L5Bf6QrHrJ',
      'created_at' => date('2020/03/19 12:00:00'),
      'updated_at' => date('2020/03/19 12:00:00')
    ]);

    DB::table('projects')->insert([
      'id' => 4,
      'name' => 'Stherfix',
      'description' => 'This æpp helps to create personalized booking experiences for Dental check-ups',
      'category_id' => 3,
      'date' => '2020-03-20',
      'show_on_homepage' => 1,
      'link' => 'https://aekiti.github.io/aepps/rideart',
      'youtube' => 'https://www.youtube.com/watch?v=STkpfk1qmxQ&list=PLVz98HTQCJzTKkOWbmmhw79L5Bf6QrHrJ',
      'created_at' => date('2020/03/20 12:00:00'),
      'updated_at' => date('2020/03/20 12:00:00')
    ]);

    DB::table('projects')->insert([
      'id' => 5,
      'name' => 'GeoHostel',
      'description' => 'An æpp that solves the problem or difficulty of getting hotels on campus',
      'category_id' => 3,
      'date' => '2020-03-25',
      'show_on_homepage' => 1,
      'link' => 'https://aekiti.github.io/aepps/geohostel',
      'youtube' => 'https://www.youtube.com/watch?v=Ycy3Lsi78Ro&list=PLVz98HTQCJzTKkOWbmmhw79L5Bf6QrHrJ',
      'created_at' => date('2020/03/25 12:00:00'),
      'updated_at' => date('2020/03/25 12:00:00')
    ]);

    DB::table('projects')->insert([
      'id' => 6,
      'name' => 'AePhotos',
      'description' => 'A decentralized easy way for users to store images on the internet',
      'category_id' => 3,
      'date' => '2020-03-26',
      'show_on_homepage' => 1,
      'link' => 'https://aekiti.github.io/aepps/AePhotos',
      'youtube' => 'https://www.youtube.com/watch?v=yR7ugovNE-w&list=PLVz98HTQCJzTKkOWbmmhw79L5Bf6QrHrJ',
      'created_at' => date('2020/03/26 12:00:00'),
      'updated_at' => date('2020/03/26 12:00:00')
    ]);

    DB::table('projects')->insert([
      'id' => 7,
      'name' => 'H.M.S',
      'description' => "Hospital Management System helps to track patient's medical records",
      'category_id' => 3,
      'date' => '2020-04-02',
      'show_on_homepage' => 1,
      'link' => 'https://aekiti.github.io/aepps/hms',
      'youtube' => 'https://www.youtube.com/watch?v=cPi5g9CEUFM&list=PLVz98HTQCJzTKkOWbmmhw79L5Bf6QrHrJ',
      'created_at' => date('2020/04/02 12:00:00'),
      'updated_at' => date('2020/04/02 12:00:00')
    ]);

    DB::table('projects')->insert([
      'id' => 8,
      'name' => 'Jænet',
      'description' => 'A portfolio site that showcases paperwork designs up for sale',
      'category_id' => 3,
      'date' => '2020-04-03',
      'show_on_homepage' => 1,
      'link' => 'https://aekiti.github.io/aepps/jaenet',
      'youtube' => 'https://www.youtube.com/watch?v=ivpbnsVtmIc&list=PLVz98HTQCJzTKkOWbmmhw79L5Bf6QrHrJ',
      'created_at' => date('2020/04/03 12:00:00'),
      'updated_at' => date('2020/04/03 12:00:00')
    ]);

    DB::table('projects')->insert([
      'id' => 9,
      'name' => 'CrimRec',
      'description' => 'This is an effective system that helps register and store information about criminals',
      'category_id' => 3,
      'date' => '2020-04-04',
      'show_on_homepage' => 1,
      'link' => 'https://aekiti.github.io/aepps/CrimRec',
      'youtube' => 'https://www.youtube.com/watch?v=99DlMKG2zV8&list=PLVz98HTQCJzTKkOWbmmhw79L5Bf6QrHrJ',
      'created_at' => date('2020/04/04 12:00:00'),
      'updated_at' => date('2020/04/04 12:00:00')
    ]);

    DB::table('projects')->insert([
      'id' => 10,
      'name' => 'S.R.R',
      'description' => 'Student Result Recorder helps students track their immutable grades',
      'category_id' => 3,
      'date' => '2020-04-05',
      'show_on_homepage' => 1,
      'link' => 'https://aekiti.github.io/aepps/srr',
      'youtube' => 'https://www.youtube.com/watch?v=ywqWNaoTzPo&list=PLVz98HTQCJzTKkOWbmmhw79L5Bf6QrHrJ',
      'created_at' => date('2020/04/05 12:00:00'),
      'updated_at' => date('2020/04/05 12:00:00')
    ]);

    DB::table('projects')->insert([
      'id' => 11,
      'name' => 'AEQuiz',
      'description' => 'AEQuiz is a web æpp that engages the audience in unique and fun ways',
      'category_id' => 3,
      'date' => '2020-04-07',
      'show_on_homepage' => 1,
      'link' => 'https://aekiti.github.io/aepps/aequiz',
      'youtube' => 'https://www.youtube.com/watch?v=pfp6MaWdN9E&list=PLVz98HTQCJzTKkOWbmmhw79L5Bf6QrHrJ',
      'created_at' => date('2020/04/07 12:00:00'),
      'updated_at' => date('2020/04/07 12:00:00')
    ]);

    DB::table('projects')->insert([
      'id' => 12,
      'name' => 'Nimi Blog',
      'description' => 'A blog æpp with firebase authentication system and nodejs technology',
      'category_id' => 4,
      'date' => '2019-08-15',
      'show_on_homepage' => 1,
      'link' => 'https://jesulonimi21.github.io/Nimi-Blog',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('projects')->insert([
      'id' => 13,
      'name' => 'AE EKSU',
      'description' => 'A payment system making changes to EKSU methods of payment',
      'category_id' => 4,
      'date' => '2019-06-03',
      'show_on_homepage' => 1,
      'link' => 'https://emmanueljet.github.io/Aeternity-Development-101',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('projects')->insert([
      'id' => 14,
      'name' => 'Royalty Store',
      'description' => 'A clothing store æpp that accepts æ for payment while users can upload designs to get tips from other users',
      'category_id' => 4,
      'date' => '2019-08-30',
      'show_on_homepage' => 1,
      'link' => 'https://emilian0prime.github.io/Royalty-Store',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('projects')->insert([
      'id' => 15,
      'name' => 'BBNaija 2019',
      'description' => 'An æpp that support voting your favorite housemate(BBNaija 2019)',
      'category_id' => 4,
      'date' => '2019-08-26',
      'show_on_homepage' => 1,
      'link' => 'https://kaynetpc.github.io/bbnaija-voting-app',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('projects')->insert([
      'id' => 16,
      'name' => 'AECOMMERCE',
      'description' => 'AECOMMERCE was built which has higher advantages than the normal e-commerce platforms',
      'category_id' => 4,
      'date' => '2019-11-07',
      'show_on_homepage' => 1,
      'link' => 'https://calebisco.github.io/aecommerce',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('project_tag')->insert(
      [
        'project_id' => 1,
        'tag_id' => 3,
      ]
    );

    DB::table('project_tag')->insert(
      [
        'project_id' => 1,
        'tag_id' => 4,
      ]
    );

    DB::table('project_tag')->insert(
      [
        'project_id' => 1,
        'tag_id' => 5,
      ]
    );

    for ($i=2; $i<=16; $i++) {
      DB::table('project_tag')->insert(
        [
          'project_id' => $i,
          'tag_id' => 3,
        ]
      );
    }
  }
}
