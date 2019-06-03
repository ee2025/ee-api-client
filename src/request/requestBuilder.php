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

abstract class RequestBuilder implements Builder
{
	protected $params;

	function __construct()
	{
		$this->params = [];
	}

	public function setServerId(int $server_id) : void
	{
		switch($server_id)
		{
			case Server::EXPRESS;
			case Server::ALLIANCE;
			case Server::TEAM;
			case Server::PRIMARY;
			case Server::FFA;
				$this->params["server_id"] = $server_id;
				return;

			default:
				throw new \InvalidArgumentException("Invalid server_id");
				break;
		}
	}
}