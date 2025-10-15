<?php

namespace Webkult\Api\Shirtigo\Requests\ProductApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Synchronize only product images
 *
 * Trigger image synchronization for the specified integration for this product.
 * Only images will be
 * updated, other product data remains unchanged.
 */
class SynchronizeOnlyProductImages extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/products/{$this->productId}/sync-images";
	}


	/**
	 * @param int $productId Numerical product identifier
	 */
	public function __construct(
		protected int $productId,
	) {
	}
}
