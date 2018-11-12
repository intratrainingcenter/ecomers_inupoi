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
        		'id_user'			=>		'1',
        		'grandtotal'		=>		'200000',
        		'created_at'		=>		Carbon::now()->format('Y-m-d H:i:s'),
        		'updated_at'		=>		Carbon::now()->format('Y-m-d H:i:s')
        	],
            [
                'id'                =>      '2',
                'kode_transaksi'    =>      'TRS0123458',
                'id_user'           =>      '4',
                'grandtotal'        =>      '200000',
                'created_at'        =>      Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'        =>      Carbon::now()->format('Y-m-d H:i:s')
            ],
        	[
        		'id'				=>		'3',
        		'kode_transaksi'	=>		'TRS789589568',
        		'id_user'			=>		'2',
        		'grandtotal'		=>		'140000',
        		'created_at'		=>		Carbon::now()->format('Y-m-d H:i:s'),
        		'updated_at'		=>		Carbon::now()->format('Y-m-d H:i:s')
        	]
        ]);
    }
}
