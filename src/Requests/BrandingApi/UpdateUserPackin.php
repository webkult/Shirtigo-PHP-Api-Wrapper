<?php

namespace Webkult\Api\Shirtigo\Requests\BrandingApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update user packin
 *
 * Update an existing packin (packaging insert) name for the authenticated user.
 */
class UpdateUserPackin extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/user/packin";
	}
}
