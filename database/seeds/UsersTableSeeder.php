<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Admin',
        	
        	'email' => 'j.a.y@list.ru',
        	'password' => Hash::make('998118787a'),
        	
            'avatar' => 'uploads/1579784693.png',
        ]);
    }
}
