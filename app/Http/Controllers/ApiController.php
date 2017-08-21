<?php

namespace App\Http\Controllers;

use App\ApiResponse;
use Illuminate\Http\Request;

class ApiController extends Controller
{
	public function foursquare() {
		$response = new ApiResponse();
		$response = $response->foursquare();
		return $response->response->categories;
	}
    
    public function dota() {
		$response = new ApiResponse();
		$response = $response->dota();
		return json_encode($response);
	}
}
