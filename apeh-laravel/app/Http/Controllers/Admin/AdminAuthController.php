<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        if (Session::get('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $admin = DB::table('admin')
            ->where('username', $request->username)
            ->first();

        if ($admin && password_verify($request->password, $admin->password_hash)) {
            Session::put('admin_logged_in', true);
            Session::put('admin_username', $admin->username);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['login' => 'Identifiants incorrects.'])->withInput();
    }

    public function logout()
    {
        Session::forget(['admin_logged_in', 'admin_username']);
        return redirect()->route('admin.login');
    }
}
