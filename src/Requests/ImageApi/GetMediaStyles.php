<?php

namespace Webkult\Api\Shirtigo\Requests\ImageApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getMediaStyles
 */
class GetMediaStyles extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/ai/media-styles";
	}
}
