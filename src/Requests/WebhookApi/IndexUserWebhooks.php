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
	 * @param null|mixed $items Number of items per page
	 * @param null|mixed $sortCol Column to sort by
	 * @param null|mixed $sortDir Sort direction (asc or desc)
	 * @param null|mixed $resource Filter by resource. See WebhookTypes objects for available options.
	 * @param null|mixed $action Filter by action. See WebhookTypes objects for available options.
	 * @param null|mixed $isActive Filter by active status
	 * @param null|mixed $include Comma-separated list of related resources to include in the response. Available resources: type, calls
	 * @param null|mixed $loadedWebhookCalls Number of loaded webhook calls when the calls include is used
	 */
	public function __construct(
		protected mixed $items = null,
		protected mixed $sortCol = null,
		protected mixed $sortDir = null,
		protected mixed $resource = null,
		protected mixed $action = null,
		protected mixed $isActive = null,
		protected mixed $include = null,
		protected mixed $loadedWebhookCalls = null,
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
