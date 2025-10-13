<?php

namespace Webkult\Api\Shirtigo\Requests\BrandingApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Upload delivery receipt logo
 *
 * Upload a logo to your user account which is printed on the delivery receipt for your customers to
 * increase the branding of your fulfillment
 *
 * The file needs to be a png with 900px x 385px (width x
 * height).
 *
 * The endpoint returns an empty array with exit code 200.
 */
class UploadDeliveryReceiptLogo extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/user/delivery-receipt-logo";
	}
}
