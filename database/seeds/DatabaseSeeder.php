<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(KategoriTableSeeder::class);
        $this->call(DiskonTableSeeder::class);
        $this->call(LapKeuanganTableSeeder::class);
        $this->call(ComentTableSeeder::class);
    }
}
