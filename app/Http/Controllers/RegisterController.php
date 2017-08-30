<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;
use GuzzleHttp\Client;

class RegisterController extends Controller
{
    public function register(Request $request) {

    	$this->validate($request, [
    		'username' => 'required',
    		'password' => 'required|min:6',
    		'email' => 'required|email|unique:users'
    	]);

    	$hashedPassword = bcrypt(request('password'));
    	$user = User::create([
    		'username' => request('username'),
    		'password' => $hashedPassword,
    		'email' => request('email')
    	]);

    	$params = [
    		'grant_type' => 'password',
    		'client_id' => 1,
    		'client_secret' => 'uAGesg9AZzIVkFeJJ1SMrwlr4VwnTtnOd2jGknAA',
    		'username' => request('email'),
    		'password' => request('password'),
    		'scope' => '*'
    	];

    	$request->request->add($params);

    	$proxy = Request::create('oauth/token', 'POST');
    	return Route::dispatch($proxy);
    }
}
