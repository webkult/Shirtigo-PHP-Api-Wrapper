<?php

namespace Webkult\Api\Shirtigo\Requests\ProductApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all products
 *
 * Some of the listed resources are available as optional includes (add to the query
 * ?include=firstInclude,secondInclude.subInclude). The available includes for this endpoint are:
 * colors, base_product, active_integration_syncs, integration_sync_log, integration_products,
 * projectProductColors
 */
class GetAllProducts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/products";
	}


	/**
	 * @param null|mixed $finished Only return products where rendering is finished.
	 * @param null|mixed $search A search term used to filter on the product and product group (collection) names.
	 * @param null|mixed $projectId Return only products for a given campaign
	 * @param null|mixed $designId Return only products which contain a processingarea where the design for the given design_id is used
	 * @param null|mixed $baseProductId Return which are based on the given base product id
	 * @param null|mixed $tags Filter for products containing a given tag
	 */
	public function __construct(
		protected ?bool $finished = null,
		protected ?string $search = null,
		protected ?string $projectId = null,
		protected ?string $designId = null,
		protected ?int $baseProductId = null,
		protected ?array $tags = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'finished' => $this->finished,
			'search' => $this->search,
			'project_id' => $this->projectId,
			'design_id' => $this->designId,
			'base_product_id' => $this->baseProductId,
			'tags' => $this->tags,
		]);
	}
}
