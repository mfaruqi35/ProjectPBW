<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User; // Import model User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Untuk hashing password
use Illuminate\Support\Facades\Validator; // Untuk validasi input
use Illuminate\Support\Facades\Auth; // Untuk login otomatis setelah register

class RegisterController extends Controller
{
    /**
     * Tampilkan form registrasi.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('register'); // Mengarahkan ke resources/views/pages/register.blade.php
    }

    /**
     * Tangani proses registrasi user baru.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // 1. Validasi Input
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], // 'unique:users' memastikan email belum terdaftar
            'password' => ['required', 'string', 'min:8', 'confirmed'], // 'confirmed' butuh field password_confirmation
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput(); // Mengembalikan input lama agar tidak perlu ketik ulang
        }

        // 2. Buat User Baru
        $user = User::create([
            'name' => $request->username, // Sesuaikan dengan nama field 'name' di tabel users
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password untuk keamanan
        ]);

        // 3. Login User Otomatis Setelah Register
        Auth::login($user);

        // 4. Redirect ke halaman Notudo setelah register berhasil
        return redirect()->route('notudo')->with('success', 'Registrasi berhasil! Selamat datang di Notudo.');
    }
}