<?php

namespace Pinasen\SzunetNapok;

use Illuminate\Support\Facades\Http;

class SzunetNapok {
	public static function getYear($year = null) {
		$apiKey = env('SZUNETNAPOK_API_KEY');

		if (!$apiKey) {
			return response()->json(["error" => "Api kulcs megadása kötelező"]);
		}

		if (!$year) {
			$year = date("Y");
		}

		$response = Http::get("https://szunetnapok.hu/api/$apiKey/$year/");

		return response()->json($response->json());
	}
}