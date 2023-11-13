<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
        return view('profile',compact('profile'));
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
}
