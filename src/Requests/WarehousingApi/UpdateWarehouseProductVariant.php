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
	 * @param null|string $productReference Reference of the WarehouseProduct to which the updated Variant belongs to
	 * @param null|string $reference Reference of the Variant to be updated
	 */
	public function __construct(
		protected ?string $productReference = null,
		protected ?string $reference = null,
	) {
	}
}
