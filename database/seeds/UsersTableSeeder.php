<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
// use Laracasts\TestDummy\Factory as TestDummy;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        \App\User::create(['email' => 'admin@email.com',
        	'phone' => '017212321',
        	'password' => Hash::make('1234')
        	]);
    }
}
