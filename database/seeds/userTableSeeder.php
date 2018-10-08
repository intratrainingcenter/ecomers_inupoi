<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
       'name'=> 'admin',
       'email'=> 'admin24@gmail.com',
       'password' => bcrypt('root123'),
       'jabatan'=> 'owner',
       'foto'=> 'User.png',
   ]);
    }
}
