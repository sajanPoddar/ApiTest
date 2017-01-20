<?php

use App\Role;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
// use Laracasts\TestDummy\Factory as TestDummy;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $owner = new Role();
        $owner->name = 'owner';
        $owner->display_name = 'Project Owner';
        $owner->description = 'User is the owner ';
        $owner->save();

         $owner = new Role();
        $owner->name = 'admin';
        $owner->display_name = 'admin user';
        $owner->description = 'User is the owner ';
        $owner->save();
    }
}
