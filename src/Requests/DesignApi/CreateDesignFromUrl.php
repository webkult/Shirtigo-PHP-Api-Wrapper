<?php

namespace Webkult\Api\Shirtigo\Requests\DesignApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create design from URL
 *
 * Create a new design from the submitted URL.
 *
 * The endpoint returns the created design.
 */
class CreateDesignFromUrl extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/designs/url";
	}
}
