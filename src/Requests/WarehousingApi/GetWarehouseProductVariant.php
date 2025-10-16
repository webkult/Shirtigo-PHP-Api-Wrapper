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
	 * @param null|string $include Which linked entities you want to include into the response, separated by comma. Available includes are Image and Product
	 * @param null|string $search Search in in variants by the name
	 * @param null|int $page Current page
	 * @param null|int $items Number of items per page
	 * @param null|string $sort Column used to sort the results. You can sort by: name, reference, created_at, updated_at
	 * @param null|string $order Direction for sorting
	 * @param null|string $type Type of the products to query. Options are warehouse, return and all.
	 */
	public function __construct(
		protected ?string $include = null,
		protected ?string $search = null,
		protected ?int $page = null,
		protected ?int $items = null,
		protected ?string $sort = null,
		protected ?string $order = null,
		protected ?string $type = null,
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
