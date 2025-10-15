<?php

namespace Webkult\Api\Shirtigo\Requests\ProductApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateProductMockups
 *
 * Updates the mockups associated with a project product. It allows adding new mockups and removing
 * existing ones based on provided mockup IDs.
 * Ensures that at least one mockup remains after updates
 * to prevent product mockup configurations from being empty.
 */
class UpdateProductMockups extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/products/{$this->projectProductId}/mockups";
	}


	/**
	 * @param int $projectProductId The unique identifier of the project product
	 */
	public function __construct(
		protected int $projectProductId,
	) {
	}
}
