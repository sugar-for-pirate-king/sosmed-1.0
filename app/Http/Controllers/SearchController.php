<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SearchController extends Controller
{
    public function search(Request $request)
    {
    	$serachInput = $request->input('search');
    	$key = User::where('name','Like','%'.$serachInput.'%')->get();
    	return view('search.result', compact('key'));
    }
}
