<?php

namespace Webkult\Api\Shirtigo\Requests\ImageApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getGeneratedMediaList
 */
class GetGeneratedMediaList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/ai/media";
	}


	/**
	 * @param null|string $sortCol Column to sort by (default: created_at)
	 * @param null|string $sortDir Sort direction (default: desc)
	 * @param null|string $filteredStatus Comma-separated list of filtered statuses
	 */
	public function __construct(
		protected ?string $sortCol = null,
		protected ?string $sortDir = null,
		protected ?string $filteredStatus = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['sort_col' => $this->sortCol, 'sort_dir' => $this->sortDir, 'filtered_status' => $this->filteredStatus]);
	}
}
