<?php

namespace Webkult\Api\Shirtigo\Requests\WarehousingApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update WarehouseProductVariant
 *
 * Updates WarehouseProductVariant
 */
class UpdateWarehouseProductVariant extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/warehousing/products/{$this->productReference}/variants/{$this->reference}";
	}


	/**
	 * @param null|mixed $productReference Reference of the WarehouseProduct to which the updated Variant belongs to
	 * @param null|mixed $reference Reference of the Variant to be updated
	 */
	public function __construct(
		protected mixed $productReference = null,
		protected mixed $reference = null,
	) {
	}
}
