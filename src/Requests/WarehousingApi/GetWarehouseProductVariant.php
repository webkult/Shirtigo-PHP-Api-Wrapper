<?php

namespace Webkult\Api\Shirtigo\Requests\WarehousingApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get WarehouseProductVariant
 *
 * Returns the list of WarehouseProductVariants assiciated with the particular User.
 */
class GetWarehouseProductVariant extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/warehousing/inventory";
	}


	/**
	 * @param null|mixed $include Which linked entities you want to include into the response, separated by comma. Available includes are Image and Product
	 * @param null|mixed $search Search in in variants by the name
	 * @param null|mixed $page Current page
	 * @param null|mixed $items Number of items per page
	 * @param null|mixed $sort Column used to sort the results. You can sort by: name, reference, created_at, updated_at
	 * @param null|mixed $order Direction for sorting
	 * @param null|mixed $type Type of the products to query. Options are warehouse, return and all.
	 */
	public function __construct(
		protected mixed $include = null,
		protected mixed $search = null,
		protected mixed $page = null,
		protected mixed $items = null,
		protected mixed $sort = null,
		protected mixed $order = null,
		protected mixed $type = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'include' => $this->include,
			'search' => $this->search,
			'page' => $this->page,
			'items' => $this->items,
			'sort' => $this->sort,
			'order' => $this->order,
			'type' => $this->type,
		]);
	}
}
