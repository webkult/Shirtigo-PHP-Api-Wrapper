<?php

namespace Webkult\Api\Shirtigo\Requests\WebhookApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getTypes
 *
 * Retrieve a list of all available User Webhook Types
 */
class GetTypes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/webhook-types";
	}
}
