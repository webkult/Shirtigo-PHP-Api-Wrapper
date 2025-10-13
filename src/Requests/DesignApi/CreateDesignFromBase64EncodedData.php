<?php

namespace Webkult\Api\Shirtigo\Requests\DesignApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create design from base64-encoded data
 *
 * Create a new design from the base64-encoded data
 *
 * The endpoint returns the created design.
 */
class CreateDesignFromBase64EncodedData extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/designs/base64";
	}
}
