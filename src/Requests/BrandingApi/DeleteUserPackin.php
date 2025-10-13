<?php

namespace Webkult\Api\Shirtigo\Requests\BrandingApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete user packin
 *
 * Delete an existing packin (packaging insert) for the authenticated user.
 * Only inactive packings can
 * be deleted - warehoused (active) packings must be handled by customer support.
 */
class DeleteUserPackin extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/user/packin";
	}
}
