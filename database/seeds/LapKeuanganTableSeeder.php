<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class LapKeuanganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laporan_keuangans')->insert([
        	[
        		'id'				=>		'1',
        		'kode_transaksi'	=>		'TR001',
        		'tgl_transaksi'		=>		'2018-06-17',
        		'total_biaya'		=>		'50000',
        		'created_at'		=>		Carbon::now()->format('Y-m-d H:i:s'),
        		'updated_at'		=>		Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
        		'id'				=>		'2',
        		'kode_transaksi'	=>		'TR002',
        		'tgl_transaksi'		=>		'2018-06-20',
        		'total_biaya'		=>		'50000',
        		'created_at'		=>		Carbon::now()->format('Y-m-d H:i:s'),
        		'updated_at'		=>		Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
        		'id'				=>		'3',
        		'kode_transaksi'	=>		'TR003',
        		'tgl_transaksi'		=>		'2018-07-5',
        		'total_biaya'		=>		'50000',
        		'created_at'		=>		Carbon::now()->format('Y-m-d H:i:s'),
        		'updated_at'		=>		Carbon::now()->format('Y-m-d H:i:s')
        	]
        ]);
    }
}
