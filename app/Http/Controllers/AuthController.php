<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(User::where('email', $request->email)->value('google_id') != null){
            $request->session()->put('authError', 'Please login using google!');
            return redirect()->back();
        }

        if(Auth::attempt($request->only('email', 'password'), $request->filled('remember'))){
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        $request->session()->put('authError', 'Invalid email or password!');
        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function signup(Request $request){
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:255',
            'tnc' => 'required',
        ]);
        User::factory()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('login');
    }

    public function google(){
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(){
        $googleUser = Socialite::driver('google')->user();
        // $user = User::updateOrCreate([
        //     'google_id' => $googleUser->getId(),
        // ], [
        //     'name' => $googleUser->getName(),
        //     'email' => $googleUser->getEmail(),
        //     'password' => '',
        // ]);
        $user;
        if(User::where('google_id', $googleUser->getId())->exists()){
            $user = User::where('google_id', $googleUser->getId())->first();
        }else{
            $user = User::factory()->create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'password' => '',
            ]);
        }
        Auth::login($user);
        return redirect()->route('home');
    }
}