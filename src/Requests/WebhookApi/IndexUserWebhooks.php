<?php

namespace Webkult\Api\Shirtigo\Requests\WebhookApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * indexUserWebhooks
 *
 * Returns a list of webhooks with pagination and optional filtering. The following events are
 * available: Order (.created, .updated, .shipped, .canceled, .clarification), Design (.created,
 * .updated, .rendering-failed, .deleted), Product (.created, .updated, .deleted),
 * OrderProductItem.updated, OrderWarehouseProductItem.updated
 */
class IndexUserWebhooks extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/webhooks";
	}


	/**
	 * @param null|int $items Number of items per page
	 * @param null|string $sortCol Column to sort by
	 * @param null|string $sortDir Sort direction (asc or desc)
	 * @param null|string $resource Filter by resource. See WebhookTypes objects for available options.
	 * @param null|string $action Filter by action. See WebhookTypes objects for available options.
	 * @param null|bool $isActive Filter by active status
	 * @param null|string $include Comma-separated list of related resources to include in the response. Available resources: type, calls
	 * @param null|int $loadedWebhookCalls Number of loaded webhook calls when the calls include is used
	 */
	public function __construct(
		protected ?int $items = null,
		protected ?string $sortCol = null,
		protected ?string $sortDir = null,
		protected ?string $resource = null,
		protected ?string $action = null,
		protected ?bool $isActive = null,
		protected ?string $include = null,
		protected ?int $loadedWebhookCalls = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'items' => $this->items,
			'sort_col' => $this->sortCol,
			'sort_dir' => $this->sortDir,
			'resource' => $this->resource,
			'action' => $this->action,
			'is_active' => $this->isActive,
			'include' => $this->include,
			'loaded_webhook_calls' => $this->loadedWebhookCalls,
		]);
	}
}
