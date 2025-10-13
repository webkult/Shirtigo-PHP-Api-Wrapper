<?php

namespace Webkult\Api\Shirtigo\Requests\CatalogApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List available categories
 */
class ListAvailableCategories extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/base-categories";
	}
}
