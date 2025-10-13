<?php

namespace Webkult\Api\Shirtigo\Requests\Other;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get selling statistics
 *
 * Retrieve statistics about the current user's sales.
 * This endpoint reports the number of sales and
 * the total net amount for four different reporting periods: Last 24 hours, last 7 days, last 30 days
 * and total.
 */
class GetSellingStatistics extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/selling-statistics";
	}
}
