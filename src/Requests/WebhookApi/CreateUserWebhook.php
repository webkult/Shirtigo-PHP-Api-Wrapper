<?php

namespace Webkult\Api\Shirtigo\Requests\WebhookApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createUserWebhook
 *
 * Create a new webhook based on the provided data
 */
class CreateUserWebhook extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/webhooks";
	}
}
