<?php

namespace Webkult\Api\Shirtigo\Requests\BrandingApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get user packings
 *
 * Retrieve all packings (packaging inserts) available to the authenticated user.
 * This includes both
 * user-created packings and global packings available to all users.
 */
class GetUserPackings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/user/packings";
	}
}
