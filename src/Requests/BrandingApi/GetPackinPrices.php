<?php

namespace Webkult\Api\Shirtigo\Requests\BrandingApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get packin prices
 *
 * Retrieve current pricing information for different types of packings.
 * Prices are returned with and
 * without VAT for cost calculation purposes.
 */
class GetPackinPrices extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/user/packings/prices";
	}
}
