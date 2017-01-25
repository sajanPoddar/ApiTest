<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;
use App\User;
use App\Role;
use App\Permission;
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
    public function getUserRole($userId)
    {
        return User::find($userId)->roles;
    }
    public function attachPermission(Request $request)
    {
        $parameters = $request->only('permission','role');
        $permissionParam = $parameters['permission'];
        $roleParam = $parameters['role'];
        $role = Role::where('name', $roleParam)->first();
        $permission = Permission::where('name', $permissionParam)->first();
        $role->attachPermission($permission);
        return $this->response->created();
    }
    public function getPermissions($roleParam)
    {
        $role = Role::where('name', $roleParam)->first();
        // return $role->perms;
        return $this->response->array($role->perms);
    }
}
