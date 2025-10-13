<?php

namespace Webkult\Api\Shirtigo\Requests\WarehousingApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update WarehouseProductVariant by Reference
 *
 * Updates WarehouseProductVariant
 */
class UpdateWarehouseProductVariantByReference extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/warehousing/variants/{$this->reference}";
	}


	/**
	 * @param mixed $reference Reference of the Variant to be updated
	 */
	public function __construct(
		protected mixed $reference,
	) {
	}
}
