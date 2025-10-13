<?php

namespace Webkult\Api\Shirtigo\Requests\Other;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get delivery targets
 *
 * Retrieve a list of valid delivery target countries.
 * The result is presented as associative array:
 * The array keys consist of upper-case
 * two-letter country codes, the corresponding values are the
 * human readable country names.
 */
class GetDeliveryTargets extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/delivery-countries";
	}
}
