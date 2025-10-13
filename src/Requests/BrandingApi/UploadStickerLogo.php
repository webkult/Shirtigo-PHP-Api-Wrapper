<?php

namespace Webkult\Api\Shirtigo\Requests\BrandingApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Upload sticker logo
 *
 * Upload a sticker to your user account which is printed on packaging for your customers to increase
 * the branding of your fulfillment
 *
 * The file needs to be a png with 560px x 560px (width x
 * height).
 *
 * The endpoint returns an empty array with exit code 200.
 */
class UploadStickerLogo extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/user/sticker";
	}
}
