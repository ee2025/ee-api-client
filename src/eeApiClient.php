<?php namespace ee_api;
/*
 * Copyright 2019 Sean McKeown
 *
 * Licensed under the Non-Profit Open Software License version 3.0
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of this license at
 *
 *   https://opensource.org/licenses/NPOSL-3.0
 *
 * Unless required by applicable law, software distributed under
 * the License is distributed on an "AS IS" basis WITHOUT WARRANTIES
 * OR CONDITIONS OF ANY KIND, either expressed or implied.
 */

use GuzzleHttp\Client as HttpClient;
use ee_api\request\Request;

class EeApiClient
{
	const API_BASE_URL = "http://api.earthempires.com/";
	const NEWS_MAX_RESULTS = 10000;
	const MARKET_TX_MAX_RESULTS = 10000;

	private $httpClient;
	private $apiKey;

	function __construct(string $apiKey)
	{
		$this->httpClient = new HttpClient();
		$this->apiKey = $apiKey;
	}

	/*
	private function parseCsv()
	{
		//todo
	}
	*/

	public function getCsv(Request $request)
	{
		$params = $request->getParams();
		$params["apicode"] = $this->apiKey;

		$response = $this->httpClient->request("GET",
			self::API_BASE_URL.$request->getType(),
			[
				"headers" => ['Accept-Encoding' => 'gzip'],
				"query" => $params,
				"decode_content" => true
			]
		);
		$body = $response->getBody();

		return $body->getContents();

	}

	/*
	public function getJson(Request $request, int $options) : string
	{
		return json_encode($this->getObjectArray($request));
	}

	public function getObjectArray(Request $request) : array
	{
		$result = $this->getCsv($request);

		return $this->parseCsv($result);
	}*/
}