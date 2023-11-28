<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class UserProfileController extends Controller
{

    public function create(): View
    {
        return view('profile');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'=>'required|max:100',
            'dob'=>'required|max:100',
            'gender'=>'required|max:100',
            'address'=>'required|max:100',
            'phone'=>'required|max:13',
            'email'=>'required|email|max:100',
            'password'=>'required|max:100'
        ]);

        UserProfileController::create($request->all());

        return redirect()->route('profile');
    }

    public function edit(UserProfileController $profile): View
    {
        return view('profile', compact('profile'));
    }

    public function update(Request $request, UserProfileController $profile): RedirectResponse
    {
        $request->validate([
            'name'=>'required|max:100',
            'dob'=>'required|max:100',
            'gender'=>'required|max:100',
            'address'=>'required|max:100',
            'phone'=>'required|max:13',
            'email'=>'required|email|max:100',
            'password'=>'required|max:100'
        ]);

        return redirect()->route('profile');
    }
    public function updateProfile(Request $request): RedirectResponse
    {
        $user = User::find(Auth::user()->id);

        $request->validate([
            'name' => 'required|max:100',
            'dob' => 'max:100',
            'gender' => 'max:100',
            'address' => 'max:100',
            'phone' => 'max:13',
            'email' => 'required|email|max:100|unique:users,email,'.$user->id,
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user->name = $request->input('name');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->dob = $request->input('dob');
        $user->gender = $request->input('gender');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $subdirectory = 'images';

            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }

            $path = $file->storeAs($subdirectory, $filename, 'public');

            $user->image = $path;
        }

        $user->save();
        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }





}
