<?php

namespace Webkult\Api\Shirtigo\Requests\ProductApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update product
 *
 * Update names, descriptions, prices and add/delete a product of the authenticated user.
 */
class UpdateProduct extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/products/{$this->productId}";
	}


	/**
	 * @param int $productId ID of the product to update
	 */
	public function __construct(
		protected int $productId,
	) {
	}
}
