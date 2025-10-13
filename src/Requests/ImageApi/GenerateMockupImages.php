<?php

namespace Webkult\Api\Shirtigo\Requests\ImageApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Generate Mockup Images
 *
 * Generates custom mockup images based on the specifications provided.
 */
class GenerateMockupImages extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/mockup-factory/generate-image";
	}
}
