<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;

class PagesController extends Controller
{
    public function welcome() {
    	$user = user::find(1)->passport;
    	return view('welcome', ['user' => $user]);
    }

    public function about() {
    	$websites = ['kaskus', 'traveloka', 'ahloo', 'pasarwarga'];
    	return view('about', ['websites' => $websites]);
    }
}
