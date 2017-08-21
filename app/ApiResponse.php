<?php

namespace App;

use GuzzleHttp\Client;

class ApiResponse
{
	public function foursquare() {
		$client = new Client(['base_uri' => 'https://api.foursquare.com/v2/']);
		$response = $client->request('GET', 'events/categories', [
				'query' => [
					'v' => '20131016',
					'client_id' => 'WESFKASNOINYZH151OQNUTMDD2PGEWSPSS45OMCFNTS2USRD',
					'client_secret' => 'B0VASHXUNRNQ15PY4DKFIE15O1HTBZTJOZQYGAVZGBJW2S4L'
				]
			]);

		return json_decode($response->getBody());
	}
    
	public function dota() {
		$client = new Client(['base_uri' => 'https://api.opendota.com/api/']);
		$response = $client->request('GET', 'matches/3392208700');

		return json_decode($response->getBody());
	}
}
