<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserAuthController extends Controller
{
    public function showLogin()
    {
        return view('login.menu_login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();
        if (!$user) {
            // Akun belum terdaftar
            return back()->with('login_error', 'notfound');
        }
        if (!Hash::check($password, $user->password)) {
            // Password salah
            return back()->with('login_error', 'wrong');
        }

        Auth::login($user);
        session(['role' => 'customer']);
        return redirect()->route('dashboard_user');
    }

    public function showRegister()
    {
        return view('login.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'customer'
        ]);

        Auth::login($user);
        session(['role' => 'customer']);
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login dengan akun Anda.');
    }

    public function dashboard()
    {
        $user = auth()->user(); // atau Auth::user()
        return view('dashboard_user', compact('user'));
    }

    public function bookinguser()
    {
        $user = auth()->user(); // Ambil data user yang sedang login
        return view('user.bookinguser', compact('user'));
    }

    public function chatuser()
    {
        $user = auth()->user();
        return view('user.chatuser', compact('user'));
    }

    public function request()
    {
        $user = auth()->user();
        return view('user.request', compact('user'));
    }

    public function transaksi_user()
    {
        $user = auth()->user();
        return view('user.transaksi_user', compact('user'));
    }
    
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'avatar' => 'nullable|image|max:5120', // max 5MB
        ]);
        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->hasFile('avatar')) {
            // Hapus avatar lama jika ada
            if (!empty($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }
            $path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $path; // simpan path relatif
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diupdate!');
    }
}
