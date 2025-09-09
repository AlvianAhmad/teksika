<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('login.menu_login'); // atau view khusus admin jika ada
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $admin = Admin::where('email', $email)->first();
        if (!$admin) {
            // Akun admin belum terdaftar
            return back()->with('login_error', 'notfound');
        }
        if (!Hash::check($password, $admin->password)) {
            // Password salah
            return back()->with('login_error', 'wrong');
        }

        Auth::guard('admin')->login($admin);
        session(['role' => 'admin']);
        return redirect()->route('dashboard_admin');
    }

    public function index()
    {
        // jumlah booking semua
        $bookingCount = Booking::count();

        // jumlah worker yang status = aktif
        $workerActiveCount = Worker::where('status', 'aktif')->count();

        return view('admin.dashboard', compact('bookingCount', 'workerActiveCount'));
    }

    public function dashboard()
    {
        return view('dashboard_admin');
    }
}