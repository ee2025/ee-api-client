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

class EeApiClient
{
	const NEWS_MAX_RESULTS = 10000;

	private $httpClient;
	private $apiKey;

	function __construct()
	{
		$this->httpClient = new HttpClient();
	}

	public function getCsv(Request $request) : string
	{

	}

	public function getJson(Request $request) : string
	{

	}

	public function getObjectArray(Request $request) : array
	{

	}
}