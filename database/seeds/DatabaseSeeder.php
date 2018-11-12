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
        $this->call(UserTableSeeder::class);
        $this->call(KategoriTableSeeder::class);
        $this->call(aboutTableSeeder::class);
        $this->call(DiskonTableSeeder::class);
        $this->call(LapKeuanganTableSeeder::class);
        $this->call(ComentTableSeeder::class);
    }
}
