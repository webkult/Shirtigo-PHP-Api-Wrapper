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
	 * @param null|mixed $page Page number
	 * @param null|mixed $filter Filter by order status id
	 * @param null|mixed $items Items per page
	 * @param null|mixed $search Search query
	 * @param null|mixed $sortCol Property to order by
	 * @param null|mixed $sortDir Order direction
	 * @param null|mixed $period Days to show (default: all)
	 * @param null|mixed $secondaryFilter Secondary filter level (e.g. filter reprint orders)
	 */
	public function __construct(
		protected mixed $page = null,
		protected mixed $filter = null,
		protected mixed $items = null,
		protected mixed $search = null,
		protected mixed $sortCol = null,
		protected mixed $sortDir = null,
		protected mixed $period = null,
		protected mixed $secondaryFilter = null,
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
