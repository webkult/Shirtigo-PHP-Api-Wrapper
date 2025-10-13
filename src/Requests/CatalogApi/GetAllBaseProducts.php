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
	 * @param null|mixed $category Filter by category identifier (default: any)
	 * @param null|mixed $userProductsOnly Include user specific products
	 * @param null|mixed $sku Filter products with a variant which contains a variant where either the sku or internal_sku contains the passed value
	 */
	public function __construct(
		protected mixed $category = null,
		protected mixed $userProductsOnly = null,
		protected mixed $sku = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['category' => $this->category, 'user_products_only' => $this->userProductsOnly, 'sku' => $this->sku]);
	}
}
