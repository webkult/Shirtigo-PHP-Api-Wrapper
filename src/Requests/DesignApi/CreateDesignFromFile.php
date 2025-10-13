<?php

namespace Webkult\Api\Shirtigo\Requests\DesignApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create design from file
 *
 * Create a new design from the submitted file.
 *
 * The file must be at least 1000px in width or height
 * and must be formatted either as PNG- or JPEG raster image.
 *
 * The endpoint returns the created design.
 */
class CreateDesignFromFile extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/designs/file";
	}
}
