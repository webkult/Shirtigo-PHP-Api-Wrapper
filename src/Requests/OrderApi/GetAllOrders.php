<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all orders
 *
 * Some of the listed resources are available as optional includes (add to the query
 * ?include=firstInclude,secondInclude.subInclude). The available includes for this endpoint are:
 * parent, children, comments, products, warehouseProducts, payments, orderStatusEntries, shipping,
 * packins
 */
class GetAllOrders extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders";
	}


	/**
	 * @param null|int $page Page number
	 * @param null|int $filter Filter by order status id
	 * @param null|int $items Items per page
	 * @param null|string $search Search query
	 * @param null|string $sortCol Property to order by
	 * @param null|string $sortDir Order direction
	 * @param null|int $period Days to show (default: all)
	 * @param null|string $secondaryFilter Secondary filter level (e.g. filter reprint orders)
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $filter = null,
		protected ?int $items = null,
		protected ?string $search = null,
		protected ?string $sortCol = null,
		protected ?string $sortDir = null,
		protected ?int $period = null,
		protected ?string $secondaryFilter = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'filter' => $this->filter,
			'items' => $this->items,
			'search' => $this->search,
			'sort_col' => $this->sortCol,
			'sort_dir' => $this->sortDir,
			'period' => $this->period,
			'secondary_filter' => $this->secondaryFilter,
		]);
	}
}
