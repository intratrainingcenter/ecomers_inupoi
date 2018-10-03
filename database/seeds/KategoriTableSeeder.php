<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
        	[
        		'id'			=>	'1',
        		'kode_kategori'	=>	'BRG001',
        		'nama_kategori'	=>	'Blood',
        		'created_at'	=>	Carbon::now()->format('Y-m-d H:i:s'),
        		'updated_at'	=>	Carbon::now()->format('Y-m-d H:i:s')
        	]
        ]);
    }
}
