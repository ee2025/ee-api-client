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

abstract class RequestType
{
	const RANKS = "ranks_feed";
	const NEWS = "news_feed";
	const MARKET_INFO = "market_feed";
	const MARKET_TX = "mtrans_feed";
	const API_INFO = "apicode_info";
	const RESET_INFO = "reset_feed";
}