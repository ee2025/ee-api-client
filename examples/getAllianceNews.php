<?php
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

use ee_api\{EeApiClient, Server, NewsRequestBuilder};

$api_key = "foobar"; // change this to your API key

$Builder = new NewsRequestBuilder();
$Builder->setServerId(Server::ALLIANCE);
$Builder->setAttackType(AttackType::GS);
$Request = $Builder->build();

$ApiClient = new EeApiClient($api_key);
$result = $ApiClient->getJson($Request, JSON_PRETTY_PRINT);

echo $result;