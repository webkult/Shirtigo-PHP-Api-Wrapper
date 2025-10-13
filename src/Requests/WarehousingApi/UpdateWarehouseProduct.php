<?php

namespace Webkult\Api\Shirtigo\Requests\WarehousingApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update WarehouseProduct
 *
 * Updates WarehouseProduct with default Variant and associated Variants
 */
class UpdateWarehouseProduct extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/warehousing/products/{$this->reference}";
	}


	/**
	 * @param null|mixed $reference Reference of the WarehouseProduct to be updated
	 */
	public function __construct(
		protected mixed $reference = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['reference' => $this->reference]);
	}
}
