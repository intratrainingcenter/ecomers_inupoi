<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DetailTransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_transaksis')->insert([
        	[
        		'id'				=>	'1',
        		'kode_transaksi'	=>	'TRS0123456',
        		'kode_barang'		=>	'BR001',
        		'nama_barang'		=>	'celana pendek',
        		'harga'				=>	'120000',
        		'qty'				=>	'2',
        		'sub_total'			=>	'240000',
        		'nominal_diskon'	=>	'0',
        		'created_at'		=>	Carbon::now()->format('Y-m-d H:i:s'),
        		'updated_at'		=>	Carbon::now()->format('Y-m-d H:i:s')
        	],
            [
                'id'                =>  '2',
                'kode_transaksi'    =>  'TRS0123458',
                'kode_barang'       =>  'BR001',
                'nama_barang'       =>  'celana pendek',
                'harga'             =>  '120000',
                'qty'               =>  '3',
                'sub_total'         =>  '360000',
                'nominal_diskon'    =>  '0',
                'created_at'        =>  Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'        =>  Carbon::now()->format('Y-m-d H:i:s')
            ],
        	[
        		'id'				=>	'3',
        		'kode_transaksi'	=>	'TRS789589568',
        		'kode_barang'		=>	'BR002',
        		'nama_barang'		=>	'kaos polo',
        		'harga'				=>	'90000',
        		'qty'				=>	'1',
        		'sub_total'			=>	'90000',
        		'nominal_diskon'	=>	'0',
        		'created_at'		=>	Carbon::now()->format('Y-m-d H:i:s'),
        		'updated_at'		=>	Carbon::now()->format('Y-m-d H:i:s')
        	]
        ]);
    }
}
