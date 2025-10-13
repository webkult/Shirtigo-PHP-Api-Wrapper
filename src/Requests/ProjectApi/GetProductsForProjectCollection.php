<?php

namespace Webkult\Api\Shirtigo\Requests\ProjectApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get products for a project / collection
 *
 * Some of the listed resources are available as optional includes (add to the query
 * ?include=firstInclude,secondInclude.subInclude). The available includes for this endpoint are:
 * colors, base_product, active_integration_syncs, integration_sync_log, integration_products,
 * projectProductColors
 */
class GetProductsForProjectCollection extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/projects/{$this->projectReference}/products";
	}


	/**
	 * @param mixed $projectReference Unique project identifier
	 */
	public function __construct(
		protected mixed $projectReference,
	) {
	}
}
