<?php namespace ee_api\request;
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

class Request
{
	private $type;
	private $params;

	public function __construct(string $type, array $params)
	{
		switch($type)
		{
			case RequestType::API_INFO:
			case RequestType::MARKET_INFO:
			case RequestType::MARKET_TX:
			case RequestType::NEWS:
			case RequestType::RANKS:
			case RequestType::RESET_INFO:
				$this->type = $type;
				break;

			default:
				throw new \InvalidArgumentException("Invalid request type");
				break;
		}

		$this->params = $params;
	}

	public function getType() : string
	{
		return $this->type;
	}

	public function getParams() : array
	{
		return $this->params;
	}
}