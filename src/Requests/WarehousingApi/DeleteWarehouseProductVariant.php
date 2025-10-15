<?php

namespace Webkult\Api\Shirtigo\Requests\WarehousingApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete WarehouseProductVariant
 *
 * Deletes WarehouseProductVariant
 */
class DeleteWarehouseProductVariant extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/warehousing/products/{$this->productReference}/variants/{$this->reference}";
	}


	/**
	 * @param null|string $productReference Reference of the WarehouseProduct to which the deleted Variant belongs to
	 * @param null|string $reference Reference of the Variant to be deleted
	 */
	public function __construct(
		protected ?string $productReference = null,
		protected ?string $reference = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['product_reference' => $this->productReference, 'reference' => $this->reference]);
	}
}
