<?php

namespace Webkult\Api\Shirtigo\Requests\WarehousingApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create WarehouseProduct
 *
 * Creates WarehouseProduct with default Variant and associated Variants
 */
class CreateWarehouseProduct extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/warehousing/products";
	}
}
