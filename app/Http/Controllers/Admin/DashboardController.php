<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $role = Auth::user()->role;
        $user_name = Auth::user()->name;

        if ($role == 'admin')
        {
            $users = User::all();
            $total_users = count($users);

            return view('admin.dashboard.dashboard',compact('user_name'), [
                'users' => $users,
                'total_users' => $total_users,
            ]);
        }
        elseif($role == 'user')
        {
            return view('website.dashboard.dashboard.dashboard',compact('user_name'));
        }
        else
        {
            return view('auth.login');
        }

    }
}
