<?php

namespace Webkult\Api\Shirtigo\Requests\Other;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get order statistics
 *
 * Retrieve statistics about the current user's order status distribution.
 * This endpoint reports the
 * number of open orders (non-shipped, non-canceled) per status (open, preparation, production,
 * clarification)
 */
class GetOrderStatistics extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders-statistics";
	}
}
