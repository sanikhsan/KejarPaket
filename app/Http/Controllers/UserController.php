<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    public function login () {
        return view('auth.user.login');
    }

    public function google () {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback () {
        $date = Carbon::now();
        $callback = Socialite::driver('google')->user();

        $data = [
            'name' => $callback->getName(),
            'email' => $callback->getEmail(),
            'avatar' => $callback->getAvatar(),
            'email_verified_at' => $date
        ];

        $user = User::firstOrCreate(['email' => $data['email']], $data);
        Auth::login($user);

        return redirect(route('welcome'));
    }
}
