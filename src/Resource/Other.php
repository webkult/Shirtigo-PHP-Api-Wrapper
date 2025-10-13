<?php

namespace Webkult\Api\Shirtigo\Resource;

use Saloon\Contracts\Response;
use Webkult\Api\Shirtigo\Requests\Other\CalculateProductionCost;
use Webkult\Api\Shirtigo\Requests\Other\GetAllFulfillmentModes;
use Webkult\Api\Shirtigo\Requests\Other\GetDeliveryTargets;
use Webkult\Api\Shirtigo\Requests\Other\GetOrderStatistics;
use Webkult\Api\Shirtigo\Requests\Other\GetSellingStatistics;
use Webkult\Api\Shirtigo\Resource;

class Other extends Resource
{
	public function calculateProductionCost(): Response
	{
		return $this->connector->send(new CalculateProductionCost());
	}


	public function getDeliveryTargets(): Response
	{
		return $this->connector->send(new GetDeliveryTargets());
	}


	public function getSellingStatistics(): Response
	{
		return $this->connector->send(new GetSellingStatistics());
	}


	public function getOrderStatistics(): Response
	{
		return $this->connector->send(new GetOrderStatistics());
	}


	public function getAllFulfillmentModes(): Response
	{
		return $this->connector->send(new GetAllFulfillmentModes());
	}
}
