<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VenuesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('venues')->insert([
      'id' => 1,
      'name' => 'TechHub EKSU',
      'address' => 'Beside Heritage Bank, EKSU',
      'locality' => 'Ado-Ekiti',
      'postal' => '360001',
      'region' => 'EK',
      'country' => 'NG',
      'link' => 'https://goo.gl/maps/hLr3sZat6Wg3ur7w5',
      'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7907.4431744032745!2d5.250127!3d7.712994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d1ec3fff45f7254!2sGDG%20EKSU%20Hub%20(Ekiti%20State%20University)!5e0!3m2!1sen!2sng!4v1588116168471!5m2!1sen!2sng',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('venues')->insert([
      'id' => 2,
      'name' => 'Premier Hub',
      'address' => 'Block O, Ilesha-Owo Express Way',
      'locality' => 'Akure',
      'postal' => '340271',
      'region' => 'ON',
      'country' => 'NG',
      'link' => 'https://goo.gl/maps/QZuDmsK3sRfhLBf3A',
      'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.59088046466!2d5.162148614451643!3d7.287301515834903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10478f1a82cceb79%3A0x48cfd7685e3d7186!2sPremier%20Hub%20Innovation%20Center!5e0!3m2!1sen!2sng!4v1588116377454!5m2!1sen!2sng',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('venues')->insert([
      'id' => 3,
      'name' => 'Delight Hotel and Suites',
      'address' => 'Ilawe Road Ado',
      'locality' => 'Ilawe',
      'postal' => '360001',
      'region' => 'EK',
      'country' => 'NG',
      'link' => 'https://goo.gl/maps/k2QXWGFs1UJBPgga8',
      'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.613240991001!2d5.1763271432887485!3d7.616993644345763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1047fafbd8647721%3A0x4ec83a9980ac5a98!2sDelight%20Hotel%20and%20Suites!5e0!3m2!1sen!2sng!4v1588116679372!5m2!1sen!2sng',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('venues')->insert([
      'id' => 4,
      'name' => 'Western Region',
      'address' => 'Edo, Ekiti, Kwara, Lagos, Ogun, Ondo, Osun, and Oyo State',
      'locality' => 'West State, Nigeria',
      'postal' => '100001',
      'region' => 'WR',
      'country' => 'NG',
      'link' => 'https://goo.gl/maps/aTujGEu4PF9CFVCN8',
      'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1012564.0546021!2d3.994773684513965!3d7.539124343221643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10381b1492f19919%3A0x4444a9d7e31afcd3!2sOsun!5e0!3m2!1sen!2sng!4v1589583868423!5m2!1sen!2sng',
      'created_at' => now(),
      'updated_at' => now()
    ]);

    DB::table('venues')->insert([
      'id' => 5,
      'name' => 'Zoom.us',
      'address' => 'https://us04web.zoom.us/j/5700104405',
      'locality' => 'zoom',
      'postal' => '360001',
      'region' => 'EK',
      'country' => 'NG',
      'link' => 'https://goo.gl/maps/hLr3sZat6Wg3ur7w5',
      'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7907.4431744032745!2d5.250127!3d7.712994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d1ec3fff45f7254!2sGDG%20EKSU%20Hub%20(Ekiti%20State%20University)!5e0!3m2!1sen!2sng!4v1588116168471!5m2!1sen!2sng',
      'created_at' => now(),
      'updated_at' => now()
    ]);
  }
}
