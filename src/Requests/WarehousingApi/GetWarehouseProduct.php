<?php

namespace Webkult\Api\Shirtigo\Requests\WarehousingApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get WarehouseProduct
 *
 * Return the WarehouseProduct. Some of the listed resources are available as optional includes (add to
 * the query ?include=firstInclude,secondInclude.subInclude). The available includes for this endpoint
 * are: variant, variants
 */
class GetWarehouseProduct extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/warehousing/products/{$this->reference}";
	}


	/**
	 * @param null|string $reference Reference of the Variant to be updated
	 * @param null|string $include Which linked entities you want to include into the response, separated by comma. Available includes are Variant and Variants
	 */
	public function __construct(
		protected ?string $reference = null,
		protected ?string $include = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['reference' => $this->reference, 'include' => $this->include]);
	}
}
