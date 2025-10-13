<?php

namespace Webkult\Api\Shirtigo\Requests\UserApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Update GPSR Addresses
 *
 * Updates the GPSR manufacturer and representative address fields for the authenticated user.
 *      *
 * If the country requires a representative address (VAT_TYPE_WORLD), both addresses must be provided.
 */
class UpdateGpsrAddresses extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/user/gpsr-address";
	}
}
