<?php

namespace App\Http\Controllers;

use App\Models\User;

use Exception;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class AuthController extends Controller
{

    public function login_page()
    {
        if (Auth::check()) {
            return redirect('/home');
        }
        return view('auth/auth');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            // Membuat koneksi ke driver google
            $googleuser = Socialite::driver('google')->stateless()->user();

            // Mencari data atau membuat data baru jika belum ada
            $user = User::updateOrCreate([
                'email' => $googleuser->getEmail(),
            ], [
                'name' => $googleuser->getName(), // Mendapatkan nama
                'google_id' => $googleuser->getId(), // Mendapatkan id google
                'avatar' => $googleuser->getAvatar(), // Mendapatkan avatar
                'password' => bcrypt(Str::random(16))
            ]);

            Auth::login($user);
            return redirect('/home');
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Login Failed' . $e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
