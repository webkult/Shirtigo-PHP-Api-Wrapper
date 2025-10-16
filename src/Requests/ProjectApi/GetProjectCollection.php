<?php

namespace Webkult\Api\Shirtigo\Requests\ProjectApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get project / collection
 *
 * Some of the listed resources are available as optional includes (add to the query
 * ?include=firstInclude,secondInclude.subInclude). The available includes for this endpoint are:
 * products, productInfo
 */
class GetProjectCollection extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/projects/{$this->projectReference}";
	}


	/**
	 * @param string $projectReference Unique project identifier
	 * @param null|bool $includeStock Include stock information for the products
	 */
	public function __construct(
		protected string $projectReference,
		protected ?bool $includeStock = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include_stock' => $this->includeStock]);
	}
}
