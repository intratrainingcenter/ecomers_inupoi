<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksis')->insert([
        	[
        		'id'				=>		'1',
        		'kode_transaksi'	=>		'TRS0123456',
        		'kode_user'			=>		'USR0589582',
        		'kode_barang'		=>		'BRG748784',
        		'biaya'				=>		'200000',
        		'kode_diskon'		=>		'-',
        		'potongan'			=>		'0',
        		'total_biaya'		=>		'200000',
        		'created_at'		=>		Carbon::now()->format('Y-m-d H:i:s'),
        		'updated_at'		=>		Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
        		'id'				=>		'2',
        		'kode_transaksi'	=>		'TRS789589568',
        		'kode_user'			=>		'USR089008896',
        		'kode_barang'		=>		'BRG76859684',
        		'biaya'				=>		'150000',
        		'kode_diskon'		=>		'DS38483',
        		'potongan'			=>		'10000',
        		'total_biaya'		=>		'140000',
        		'created_at'		=>		Carbon::now()->format('Y-m-d H:i:s'),
        		'updated_at'		=>		Carbon::now()->format('Y-m-d H:i:s')
        	]
        ]);
    }
}
