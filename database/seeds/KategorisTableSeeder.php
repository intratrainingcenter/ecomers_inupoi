<?php

use Illuminate\Database\Seeder;

class KategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('Kategoris')->insert([
       'kode_kategori'=> '63',
       'nama_kategori'=> 'Remaja',
       'created_at' => Carbon::now(),
       'updated_at' => Carbon::now(),
     ]);
    }
}
