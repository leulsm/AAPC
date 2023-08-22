<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function Dashboard()
    {

        return view('admin.dashboard');
    }

    public function ContactMessage()
    {
        return view('admin.messages');
    }
    public function ViewRequest()
    {
        return view('admin.viewrequest');
    }
    public function RequestNetwork()
    {
        return view('admin.requestsnetwork');
    }
    public function DatabaseRequests()
    {
        return view('admin.databaserequests');
    }
    public function Director()
    {
        return view('admin.director');
    }
    public function Employee()
    {
        return view('admin.employee');
    }
    public function Expert()
    {
        return view('admin.expert');
    }
    public function User()
    {
        return view('admin.userforms');
    }
    public function ForgotPassword()
    {
        return view('admin.forgotpassword');
    }
    public function ResetPassword()
    {
        return view('admin.resetpassword');
    }
    public function StaffInfoTable()
    {
        return view('admin.staffinfotable');
    }
    public function ExportTable()
    {
        return view('admin.exporttable');
    }
    public function Report()
    {
        return view('admin.report');
    }
    public function Chats()
    {
        return view('admin.chats');
    }
    public function Charts()
    {
        $users = User::all();
        $roles = $users->pluck('role')->unique();

        // Count the number of users per role
        $roleCounts = [];
        foreach ($roles as $role) {
            $roleCounts[$role] = $users->where('role', $role)->count();
        }

        return view('admin.charts', compact('roleCounts'));
    }
    public function register()
    {
        return view('admin.director');
    }
    public function Profile()
    {
        return view('admin.profile');
    }
    public function index()
    {
        return view('admin.index');
    }
    public function RolePermission()
    {
        return view('admin.rolePermission');
    }
}
