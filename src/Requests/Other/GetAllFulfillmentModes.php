<?php

namespace Webkult\Api\Shirtigo\Requests\Other;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all fulfillment_modes
 *
 * Retrieve a list of available fulfillment_modes, which are available to authenticated user.
 */
class GetAllFulfillmentModes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/fulfillment-modes";
	}
}
