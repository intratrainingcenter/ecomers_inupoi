<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DiskonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diskons')->insert([
        	[
        		'id'			=>	'1',
        		'kode_diskon'	=>	'DS50',
        		'nominal'		=>	'5000',
        		'created_at'	=>	Carbon::now()->format('Y-m-d H:i:s'),
        		'updated_at'	=>	Carbon::now()->format('Y-m-d H:i:s')
        	]
        ]);
    }
}
