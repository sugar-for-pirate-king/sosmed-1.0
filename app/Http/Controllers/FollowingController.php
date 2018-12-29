<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Follower;
use Auth;

class FollowingController extends Controller
{
    public function allUsers()
    {
    	$allUsers = User::where('id','!=', Auth::user()->id)->get();

    	return view('user.allUsers', compact('allUsers'));
    }

    public function following($id)
    {
    	$follow = new Follower;
    	$follow->user_id = Auth::user()->id;
    	$follow->follow_id = $id;
    	$follow->save();

    	return back();
    }
}
