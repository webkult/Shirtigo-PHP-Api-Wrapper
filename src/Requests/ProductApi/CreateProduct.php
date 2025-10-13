<?php

namespace Webkult\Api\Shirtigo\Requests\ProductApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create product
 *
 * Use this endpoint to a create a product based on a specific baseProduct. The product can be
 * customized on the baseProduct color level. This allows you to have a different design, size and
 * positioning for each baseProduct color. Each processing can be associated to one or many colorIds.
 * Multiple processings can be added. Workflow: create project, add customized-products
 */
class CreateProduct extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/customized-product";
	}
}
