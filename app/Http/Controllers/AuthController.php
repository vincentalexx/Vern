<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

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
            if (Auth::user()->role == 1) {
                return redirect()->intended('admin_home');
            }
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

    public function googleCallback(Request $request){
        $googleUser = Socialite::driver('google')->user();
        $user;
        if(User::where('email', $googleUser->getEmail())->exists()){
            $user = User::where('google_id', $googleUser->getId())->first();
            if($user == NULL){
                $request->session()->put('authError', 'Please login using email!');
                return redirect()->route('login');
            }
        } else {
            $user = User::factory()->create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
            ]);
        }
        Auth::login($user);
        return redirect()->intended('home');
    }

    public function forgotPassword(){
        return view('forgot_password');
    }

    public function forgotPasswordRequest(Request $request){
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function forgotPasswordReset($token) {
        return view('forgot_password_reset', ['token' => $token]);
    }

    public function forgotPasswordUpdate (Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]
    );

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
