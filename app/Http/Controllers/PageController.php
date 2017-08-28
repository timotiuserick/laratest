<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;

class PagesController extends Controller
{
    public function welcome() {

    	$user = user::find(5);
    	if ($user) {
    		$user = $user->passport;
    	} else {
    		$user = new user;
    		$user->number = 'none';
    	}
    	return view('welcome', ['user' => $user]);
    }

    public function about() {
    	$websites = ['kaskus', 'traveloka', 'ahloo', 'pasarwarga'];
    	return view('about', ['websites' => $websites]);
    }
}
