<?php

use Illuminate\Database\Seeder;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
        	[
        		'id'				=>	'1',
        		'kode_kategori'		=>	'63',
        		'kode_produk'		=>	'BR001',
        		'kode_diskon'		=>	'teting',
        		'nama_produk'		=>	'celana pendek',
        		'harga'				=>	'120000',
        		'ukuran'			=>	'L',
        		'stok'				=>	'20',
        		'rating'			=>	'0',
        		'favorite'			=>	'0',
        		'gambar'			=>	'topi.jpg',
        		'gambar_belakang'	=>	'topi.jpg',
        		'deskripsi_produk'	=>	'barang sangant nice'
        	],
        	[
        		'id'				=>	'2',
        		'kode_kategori'		=>	'63',
        		'kode_produk'		=>	'BR002',
        		'kode_diskon'		=>	'teting2',
        		'nama_produk'		=>	'kaos polo',
        		'harga'				=>	'90000',
        		'ukuran'			=>	'L',
        		'stok'				=>	'12',
        		'rating'			=>	'0',
        		'favorite'			=>	'0',
        		'gambar'			=>	'topi.jpg',
        		'gambar_belakang'	=>	'topi.jpg',
        		'deskripsi_produk'	=>	'barang sangant nice'
        	]
        ]);
    }
}
