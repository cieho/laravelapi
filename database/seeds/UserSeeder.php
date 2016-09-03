<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'email' => 'user1@mail.com',
          'password' => Hash::make('12345')
        ]);
      
        /*DB::table('users')->insert([
            'email' => 'user1@mail.com',
            'password' => '12345'
        ]);*/
    }
}
