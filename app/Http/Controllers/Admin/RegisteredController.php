<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RegisteredController extends Controller
{
    public function index()
    {
        $users = User::all();
        $users->load('roles');
        $roleNames = $users->flatMap(function ($user) {
            return $user->roles->pluck('name')->toArray();
        });

        $paginatedUsers = User::paginate(10);
        return view('admin.index', compact('users', 'roleNames', 'paginatedUsers'));
    }
    public function edit($id)
    {
        $user = User::with('roles')->find($id);
        $user_roles = $user->roles;

        return view('admin.users.edit', compact('user', 'user_roles'));
    }
    public function updaterole(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Update user name
        $user->name = $request->input('name');
        $user->isban = $request->input('isban');
        $user->save();

        // Update user role
        $roleName = $request->input('roles');
        $role = Role::where('name', $roleName)->first();

        if ($role) {
            $user->detachAllRoles(); // Detach existing roles
            $user->attachRole($role); // Assign new role
        }

        return redirect()->back()->with('status', 'User Information has been updated successfully.');
    }
    public function delete($id)
    {
        // Retrieve the user record
        $user = User::find($id);

        if ($user) {
            // Perform the deletion
            $user->delete();

            // Redirect or perform any additional actions
            return redirect()->back()->with('success', 'User deleted successfully.');
        }

        // User not found, handle accordingly
        return redirect()->back()->with('error', 'User not found.');
    }
}
