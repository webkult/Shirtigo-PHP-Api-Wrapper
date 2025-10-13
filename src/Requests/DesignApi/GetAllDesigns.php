<?php

namespace Webkult\Api\Shirtigo\Requests\DesignApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all designs
 *
 * Retrieve a paginated list of available designs of the currently authenticated user.
 */
class GetAllDesigns extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/designs";
	}
}
