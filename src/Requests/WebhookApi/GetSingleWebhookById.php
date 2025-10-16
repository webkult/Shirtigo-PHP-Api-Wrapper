<?php

namespace Webkult\Api\Shirtigo\Requests\WebhookApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a single webhook by ID
 *
 * Retrieve a single webhook by its reference ID.
 */
class GetSingleWebhookById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/webhooks/{$this->id}";
	}


	/**
	 * @param string $id The reference ID of the webhook.
	 * @param null|string $include Comma-separated list of related resources to include in the response. Available resources: type, calls
	 */
	public function __construct(
		protected string $id,
		protected ?string $include = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include' => $this->include]);
	}
}
