<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class FollowingController extends Controller
{
    public function allUsers()
    {
    	$allUsers = User::where('id','!=', Auth::user()->id)->get();

    	return view('user.allUsers', compact('allUsers'));
    }
}
