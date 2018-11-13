<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
class aboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('about')->insert([
        [
          'deskripsi'	=>	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley ',
          'image'	=>	'default.png',
          'deskripsi_mission'	=>	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley ',
          'image_mission'	=>	'default2.png',
          'created_at'	=>	Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at'	=>	Carbon::now()->format('Y-m-d H:i:s')
        ]
      ]);
    }
}
