<?php

namespace Webkult\Api\Shirtigo\Requests\CatalogApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all base products
 *
 * Retrieve a list of available base products.
 * Optionally, a category can be passed for filtering.
 */
class GetAllBaseProducts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/base-products";
	}


	/**
	 * @param null|int $category Filter by category identifier (default: any)
	 * @param null|bool $userProductsOnly Include user specific products
	 * @param null|string $sku Filter products with a variant which contains a variant where either the sku or internal_sku contains the passed value
	 */
	public function __construct(
		protected ?int $category = null,
		protected ?bool $userProductsOnly = null,
		protected ?string $sku = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['category' => $this->category, 'user_products_only' => $this->userProductsOnly, 'sku' => $this->sku]);
	}
}
