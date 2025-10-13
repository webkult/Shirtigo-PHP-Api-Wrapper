<?php

namespace Webkult\Api\Shirtigo\Requests\UserApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get user information
 *
 * Some of the listed resources are available as optional includes (add to the query
 * ?include=firstInclude,secondInclude.subInclude). The available includes for this endpoint are:
 * integrations, billingMethod, availableBillingMethods
 */
class GetUserInformation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/user";
	}
}
