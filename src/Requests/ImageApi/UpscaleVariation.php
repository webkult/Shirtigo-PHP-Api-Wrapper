<?php

namespace Webkult\Api\Shirtigo\Requests\ImageApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * upscaleVariation
 */
class UpscaleVariation extends Request implements HasBody
{
	public $reference;
    use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/ai/variations/{$this->reference}/upscale";
	}
}
