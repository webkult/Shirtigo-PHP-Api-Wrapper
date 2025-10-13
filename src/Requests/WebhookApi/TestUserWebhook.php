<?php

namespace Webkult\Api\Shirtigo\Requests\WebhookApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * testUserWebhook
 *
 * Test a webhook for a given resource.
 */
class TestUserWebhook extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/webhooks/{$this->id}/test";
	}


	/**
	 * @param mixed $id Reference of the webhook to delete.
	 */
	public function __construct(
		protected mixed $id,
	) {
	}
}
