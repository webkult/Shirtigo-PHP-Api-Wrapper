<?php

namespace Webkult\Api\Shirtigo\Requests\WebhookApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateUserWebhook
 *
 * Updates the specified webhooks for the given URL with the provided information.
 */
class UpdateUserWebhook extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/webhooks";
	}
}
