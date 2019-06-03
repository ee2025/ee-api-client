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
use ee_api\AttackType;

class NewsRequestBuilder extends RequestBuilder implements Builder
{
	protected $params;

	public function setAttackType(int $attack_type) : void
	{
		switch($attack_type)
		{
			case AttackType::STANDARD_STRIKE:
			case AttackType::SS:
			case AttackType::PLANNED_STRIKE:
			case AttackType::PS:
			case AttackType::GUERILLA_STRIKE:
			case AttackType::GS:
			case AttackType::BOMBING_RUN:
			case AttackType::BR:
			case AttackType::ARTILLERY_BARRAGE:
			case AttackType::AB:
			case AttackType::NUCLEAR_MISSILE:
			case AttackType::NM:
			case AttackType::CHEMICAL_MISSILE:
			case AttackType::EM:
			case AttackType::CRUISE_MISSILE:
			case AttackType::CM:
				$this->params["attack_type"] = $attack_type;
				return;

			default:
				throw new \InvalidArgumentException("Invalid attack_type");
				break;
		}
	}

	public function setTesting(bool $enabled) : void
	{
		$this->params["testing"] = (int) $enabled;
	}

	public function setStartId(int $id) : void
	{
		if($id < 0)
		{
			throw new \InvalidArgumentException("ID must be a positive integer, but is negative");
		}

		$this->params["startid"] = $id;
	}

	public function setStartTime(int $timestamp) : void
	{
		$this->params["starttime"] = $timestamp;
	}

	public function build() : Request
	{
		return new Request(RequestType::NEWS, $this->params);
	}
}