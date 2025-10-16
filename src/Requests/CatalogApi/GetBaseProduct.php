<?php

namespace Webkult\Api\Shirtigo\Requests\CatalogApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get base product
 *
 * Retrieve information on a single base product.
 * To get stock level and end of life information please
 * add ?include_stock=true to the request
 * To get the actual print dimensions per variant add
 * ?include_print_dimensions=true to the request
 */
class GetBaseProduct extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/base-products/{$this->baseProductId}";
	}


	/**
	 * @param int $baseProductId Numerical base product identifier
	 * @param null|bool $includeStock Include stock information for the product
	 */
	public function __construct(
		protected int $baseProductId,
		protected ?bool $includeStock = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include_stock' => $this->includeStock]);
	}
}
