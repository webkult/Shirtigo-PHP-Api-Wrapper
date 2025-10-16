<?php

namespace Webkult\Api\Shirtigo\Requests\ProductApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get product
 *
 * Some of the listed resources are available as optional includes (add to the query
 * ?include=firstInclude,secondInclude.subInclude). The available includes for this endpoint are:
 * colors, base_product, active_integration_syncs, integration_sync_log, integration_products,
 * projectProductColors
 */
class GetProduct extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/products/{$this->productId}";
	}


	/**
	 * @param int $productId Numerical product identifier
	 * @param null|bool $includeStock Include stock information for the product
	 */
	public function __construct(
		protected int $productId,
		protected ?bool $includeStock = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include_stock' => $this->includeStock]);
	}
}
