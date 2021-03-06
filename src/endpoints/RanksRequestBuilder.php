<?php namespace ee_api\endpoints;
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

use ee_api\interfaces\Builder;
use ee_api\request\{Request, RequestBuilder, RequestType};

class RanksRequestBuilder extends RequestBuilder implements Builder
{
	protected $params;

	public function setFinalResetId(int $id) : void
	{
		if($id < 0)
		{
			throw new \InvalidArgumentException("ID must be a positive integer, but is negative");
		}
	}

	public function build() : Request
	{
		// Always request CSV style
		$this->params["style"] = 0;

		// Suppress no update available message
		$this->params["suppress"] = 1;

		return new Request(RequestType::RANKS, $this->params);
	}
}