<?php

namespace Webkult\Api\Shirtigo\Requests\ImageApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getGeneratedMediaDetails
 */
class GetGeneratedMediaDetails extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/ai/media/{$this->reference}";
	}


	/**
	 * @param mixed $reference Reference of the generated media
	 */
	public function __construct(
		protected mixed $reference,
	) {
	}
}
