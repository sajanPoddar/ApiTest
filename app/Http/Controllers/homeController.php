<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index()
    {
    	return User::all();
    }
    public function attachUserRole($userId, $role)
    {
    	$user = User::find($userId);
    	$roleId = Role::where('name', $role)->first();
    	$user->roles()->attach($roleId);
    	return $user;
    }
}
