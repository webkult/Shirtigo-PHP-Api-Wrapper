<?php

namespace Webkult\Api\Shirtigo\Requests\ProjectApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all projects / collections
 *
 * Some of the listed resources are available as optional includes (add to the query
 * ?include=firstInclude,secondInclude.subInclude). The available includes for this endpoint are:
 * products, productInfo
 */
class GetAllProjectsCollections extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/projects";
	}


	/**
	 * @param null|mixed $page Current page
	 * @param null|mixed $items Number of items per page
	 * @param null|mixed $sortCol Column used to sort the results. You can sort by: name, reference, url, default_preview_position, created_at, updated_at
	 * @param null|mixed $sortDir Direction for sorting
	 */
	public function __construct(
		protected mixed $page = null,
		protected mixed $items = null,
		protected mixed $sortCol = null,
		protected mixed $sortDir = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'items' => $this->items, 'sort_col' => $this->sortCol, 'sort_dir' => $this->sortDir]);
	}
}
