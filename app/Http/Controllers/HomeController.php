<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class HomeController extends Controller
{
    public function home(){
        $locations = Location::all();
        return view('home', ['locations' => $locations]);
    }
}
