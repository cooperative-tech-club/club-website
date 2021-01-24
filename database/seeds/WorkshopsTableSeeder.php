<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class WorkshopsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('workshops')->insert([
      'id' => 1,
      'title' => 'First Virtual Meetup',
      'slug' => 'first-virtual-meetup',
      'excerpt' => 'At this first virtual meetup, we went through Introduction to æternity, Introduction to Smart Contracts and Getting Started with State Channels',
      'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet nulla nulla. Donec luctus lorem justo, ut ullamcorper eros pellentesque ut. Etiam scelerisque dapibus lorem, vitae maximus ante condimentum quis. Maecenas ac arcu a lacus aliquet elementum posuere id nunc. Curabitur sem lorem, faucibus ac enim ut, vestibulum feugiat ante. Fusce hendrerit leo nibh, nec consectetur nulla venenatis et. Nulla tincidunt neque quam, sit amet tincidunt quam blandit in. Nunc fringilla rutrum tortor, sit amet bibendum augue convallis a. Etiam mauris orci, sollicitudin eu condimentum sed, dictum ut odio. Sed vel ligula in lectus scelerisque ornare.</p><p>Mauris dolor nisl, finibus eget sem in, ultrices semper libero. Nullam accumsan suscipit tortor, a vestibulum sapien imperdiet quis. Donec pretium mauris quis lectus sodales accumsan. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec tincidunt semper orci eu molestie. Vivamus fermentum enim vitae magna elementum, quis iaculis augue tincidunt. Donec fermentum quam facilisis sem dictum rutrum. Nunc nec urna lectus. Nulla nec ultrices lorem. Integer ac ante massa.</p>',
      'venue_id' => 5,
      'status' => 'past',
      'mode' => 'offline',
      'start_date' => date('2019/07/06 11:00:00'),
      'end_date' => date('2019/07/06 12:00:00'),
      'youtube' => 'https://www.youtube.com/embed/fJQb97D3WFY',
      'slide' => 'https://docs.google.com/presentation/d/e/2PACX-1vSLwVNxEcl2bddjwv7yKvrQPcCHh4bD7s9SWaVZYkpna71DBO9r5I6HG3wfrCfUumc9ZS74VkTmiq5C/embed?start=false&loop=false&delayms=3000',
      'created_at' => date('2019/07/06 11:00:00'),
      'updated_at' => date('2019/07/06 11:00:00')
    ]);

    DB::table('workshops')->insert([
      'id' => 2,
      'title' => 'Blockchain Road Trip',
      'slug' => 'blockchain-road-trip',
      'excerpt' => 'An outreach program, to promote awareness on the issue of digital asset technology and provide a platform for discussing the crypto asset space',
      'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet nulla nulla. Donec luctus lorem justo, ut ullamcorper eros pellentesque ut. Etiam scelerisque dapibus lorem, vitae maximus ante condimentum quis. Maecenas ac arcu a lacus aliquet elementum posuere id nunc. Curabitur sem lorem, faucibus ac enim ut, vestibulum feugiat ante. Fusce hendrerit leo nibh, nec consectetur nulla venenatis et. Nulla tincidunt neque quam, sit amet tincidunt quam blandit in. Nunc fringilla rutrum tortor, sit amet bibendum augue convallis a. Etiam mauris orci, sollicitudin eu condimentum sed, dictum ut odio. Sed vel ligula in lectus scelerisque ornare.</p><p>Mauris dolor nisl, finibus eget sem in, ultrices semper libero. Nullam accumsan suscipit tortor, a vestibulum sapien imperdiet quis. Donec pretium mauris quis lectus sodales accumsan. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec tincidunt semper orci eu molestie. Vivamus fermentum enim vitae magna elementum, quis iaculis augue tincidunt. Donec fermentum quam facilisis sem dictum rutrum. Nunc nec urna lectus. Nulla nec ultrices lorem. Integer ac ante massa.</p>',
      'venue_id' => 4,
      'status' => 'past',
      'mode' => 'offline_multiple',
      'start_date' => date('2019/09/20 00:00:00'),
      'end_date' => date('2019/09/27 23:59:00'),
      'youtube' => 'https://www.youtube.com/embed/kvcyprm_fzU',
      'photo' => 'https://photos.app.goo.gl/4n1vQiuz9d2SdrXEA',
      'created_at' => date('2019/09/20 00:00:00'),
      'updated_at' => date('2019/09/20 00:00:00')
    ]);

    DB::table('workshops')->insert([
      'id' => 3,
      'title' => 'Study Jæm - Ekiti State',
      'slug' => 'study-jaem-ekiti-state',
      'excerpt' => 'Developer Study Jæm(Ekiti State) is aimed at gathering developers from Ekiti State, Nigeria to introduce and facilitate the teaching of æternity technologies',
      'description' => '<div><p><b>Developer Study Jæm - Ekiti State</b> is aimed at gathering developers from the various tech community like:</p><ul><li> Developer Student Club, </li><li>Google Developer Group, </li><li>Women In Tech, </li><li>Facebook Developer Circle and many more in Ekiti State, Nigeria.</li></ul><p>This is unlike any regular workshops, ækiti team would help in tutoring these web developers æternity technologies, encouraging them to collaborate and compete amidst themselves to develop remarkable solutions using æternity technologies.</p><p>Other developers worldwide can also join the workshop series online by filling the registration form to get invited to the Zoom sessions.</p><p>After the workshop, be sure you would be transformed into an æternity developer and that possibility is limitless. You would be able to participate in æternity hæckathons(plus ækiti hæckathons) and win prizes. You can probably launch your own token sale on æternity or join <a href="https://www.aeternitystarfleet.com/" target="_blank">æternitys Starfleet incubator program</a>.</p><p><a href="https://twitter.com/search?q=%23devstudyjaem" target="_blank">#devstudyjaem</a></p></div>',
      'venue_id' => 1,
      'status' => 'past',
      'mode' => 'offline_multiple',
      'start_date' => date('2020/01/14 15:00:00'),
      'end_date' => date('2020/03/19 20:00:00'),
      'link' => 'https://docs.google.com/forms/d/e/1FAIpQLScN5KMKr-e1fP3RigiwHdiVW1Yidi_4eSJh7nzJ37n2IZaNYA/viewform',
      'youtube' => 'https://www.youtube.com/embed/QuV3Q426b2Q',
      'slide' => 'https://docs.google.com/presentation/d/e/2PACX-1vQbjscPnL7gzgox9HBMZCEeY7-0xKg4LMejLjxDrK9K1gQ-pIfMlCK0_YmB7vRM3eINOC22_uxo1mNk/embed?start=false&loop=false&delayms=3000',
      'photo' => 'https://photos.app.goo.gl/afgz25nDqSRvAtVKA',
      'created_at' => date('2020/01/14 15:00:00'),
      'updated_at' => date('2020/01/14 15:00:00')
    ]);

    DB::table('workshops')->insert([
      'id' => 4,
      'title' => 'Study Jæm - Ondo State',
      'slug' => 'study-jaem-ondo-state',
      'excerpt' => 'Developer Study Jæm(Ondo State) is aimed at gathering developers from Ondo State, Nigeria to introduce and facilitate the teaching of æternity technologies',
      'description' => '<div><p><b>Developer Study Jæm - Ondo State</b> is aimed at gathering developers from the various tech community like:</p><ul><li> Developer Student Club, </li><li>Google Developer Group, </li><li>Women In Tech, </li><li>Facebook Developer Circle and many more in Ondo State, Nigeria.</li></ul><p>This is unlike any regular workshops, ækiti team would help in tutoring these web developers æternity technologies, encouraging them to collaborate and compete amidst themselves to develop remarkable solutions using æternity technologies.</p><p>Other developers worldwide can also join the workshop series online by filling the registration form to get invited to the Zoom sessions.</p><p>After the workshop, be sure you would be transformed into an æternity developer and that possibility is limitless. You would be able to participate in æternity hæckathons(plus ækiti hæckathons) and win prizes. You can probably launch your own token sale on æternity or join <a href="https://www.aeternitystarfleet.com/" target="_blank">æternitys Starfleet incubator program</a>.</p><p><a href="https://twitter.com/search?q=%23devstudyjaem" target="_blank">#devstudyjaem</a></p></div>',
      'venue_id' => 2,
      'status' => 'postponed',
      'mode' => 'offline_multiple',
      'start_date' => date('2020/05/11 15:00:00'),
      'end_date' => date('2020/07/31 20:00:00'),
      'created_at' => date('2020/05/11 15:00:00'),
      'updated_at' => date('2020/05/11 15:00:00')
    ]);

    DB::table('workshops')->insert([
      'id' => 5,
      'title' => 'Study Jæm Hackæthon',
      'slug' => 'study-jaem-haeckathon',
      'excerpt' => 'Mauris sodales leo erat, at vehicula tellus molestie fringilla.',
      'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet nulla nulla. Donec luctus lorem justo, ut ullamcorper eros pellentesque ut. Etiam scelerisque dapibus lorem, vitae maximus ante condimentum quis. Maecenas ac arcu a lacus aliquet elementum posuere id nunc. Curabitur sem lorem, faucibus ac enim ut, vestibulum feugiat ante. Fusce hendrerit leo nibh, nec consectetur nulla venenatis et. Nulla tincidunt neque quam, sit amet tincidunt quam blandit in. Nunc fringilla rutrum tortor, sit amet bibendum augue convallis a. Etiam mauris orci, sollicitudin eu condimentum sed, dictum ut odio. Sed vel ligula in lectus scelerisque ornare.</p><p>Mauris dolor nisl, finibus eget sem in, ultrices semper libero. Nullam accumsan suscipit tortor, a vestibulum sapien imperdiet quis. Donec pretium mauris quis lectus sodales accumsan. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec tincidunt semper orci eu molestie. Vivamus fermentum enim vitae magna elementum, quis iaculis augue tincidunt. Donec fermentum quam facilisis sem dictum rutrum. Nunc nec urna lectus. Nulla nec ultrices lorem. Integer ac ante massa.</p>',
      'venue_id' => 3,
      'status' => 'postponed',
      'mode' => 'offline',
      'start_date' => date('2020/08/10 10:00:00'),
      'end_date' => date('2020/08/15 14:00:00'),
      'created_at' => now(),
      'updated_at' => now()
    ]);

    for ($i=1; $i<=4; $i++) {
      DB::table('tag_workshop')->insert(
        [
          'workshop_id' => $i,
          'tag_id' => 6,
        ]
      );
    }

    DB::table('tag_workshop')->insert(
      [
        'workshop_id' => 5,
        'tag_id' => 7,
      ]
    );
  }
}
