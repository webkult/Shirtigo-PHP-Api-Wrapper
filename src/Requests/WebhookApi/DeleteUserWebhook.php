<?php

namespace Webkult\Api\Shirtigo\Requests\WebhookApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteUserWebhook
 *
 * Delete a webhook by its reference.
 */
class DeleteUserWebhook extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/webhooks/{$this->id}";
	}


	/**
	 * @param mixed $id Reference of the webhook to delete.
	 */
	public function __construct(
		protected mixed $id,
	) {
	}
}
