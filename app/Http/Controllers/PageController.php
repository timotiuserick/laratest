<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function welcome() {
    	return view('welcome');
    }

    public function about() {
    	$websites = ['kaskus', 'traveloka', 'ahloo', 'pasarwarga'];
    	return view('about', ['websites' => $websites]);
    }
}
