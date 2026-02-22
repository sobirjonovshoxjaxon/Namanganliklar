<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function admin(){

        return view('admin.index');
    }

    public function logout(){

        Auth::logout();
        return to_route('login');
    }

    
}
