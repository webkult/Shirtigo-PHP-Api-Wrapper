<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Get available fulfillment modes
 *
 * Get a list of all fulfillment modes which can be used for this order. This endpoint can be used to
 * collect
 * the available options in a checkout process.
 */
class GetAvailableFulfillmentModes extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/orders/available-fulfillment-modes";
	}
}
