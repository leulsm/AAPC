<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    //
    public function staffuserindex()
    {
        return view('stuffuser.index');
    }
    public function statustable()
    {
        return view('stuffuser.statustable');
    }
    public function staffrequest()
    {
        return view('stuffuser.request');
    }
    public function singlerequestpage()
    {
        return view('stuffuser.singlerequestpage');
    }
    public function viewrequest()
    {
        return view('stuffuser.viewrequest');
    }
    public function editrequest()
    {
        return view('stuffuser.editrequest');
    }
    public function userprofile()
    {
        return view('stuffuser.userprofile');
    }
    public function setting()
    {
        return view('stuffuser.setting');
    }
    public function userOnlineStatus()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    public function updatepassword()
    {
        // $users = User::all();
        return view('stuffuser.change-password');
}
    public function registeredUsers(Request $request)
    {
        $query = User::query();

        // Check if a role is provided in the search form
        if ($request->has('role')) {
            $role = $request->input('role');
            // Join the roles table and filter by the role name
            $query->join('roles', 'users.role_id', '=', 'roles.id')
                ->where('roles.name', 'LIKE', '%' . $role . '%');
        }

        // Continue with the existing logic to paginate the users

        $paginatedUsers = $query->paginate(10);

        return view('admin.registered-users', compact('users'));
    }
}
