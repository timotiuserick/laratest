<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;

class PagesController extends Controller
{
    public function welcome() {
    	// $user = user::find(5)->passport;
    	return view('welcome');
    }

    public function about() {
    	$websites = ['kaskus', 'traveloka', 'ahloo', 'pasarwarga'];
    	return view('about', ['websites' => $websites]);
    }
}
