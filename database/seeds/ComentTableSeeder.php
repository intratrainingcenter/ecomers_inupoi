<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ComentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coments')->insert([
        	[
        		'id'			=>	'1',
        		'kode_user'		=>	'USR001',
        		'kode_produk'	=>	'BRG001',
        		'deskripsi'		=>	'Barang ini sangat bagus',
        		'created_at'	=>	Carbon::now()->format('Y-m-d H:i:s'),
        		'updated_at'	=>	Carbon::now()->format('Y-m-d H:i:s')
        	]
        ]);
    }
}
