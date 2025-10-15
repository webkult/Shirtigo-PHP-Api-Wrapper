<?php

namespace Webkult\Api\Shirtigo\Requests\BrandingApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a delivery receipt logo
 *
 * The endpoint returns an empty array with exit code 200.
 */
class DeleteDeliveryReceiptLogo extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/user/delivery-receipt-logo/{$this->integrationId}";
	}


	/**
	 * @param null|int $integrationId Unique integration identifier
	 */
	public function __construct(
		protected ?int $integrationId = null,
	) {
	}
}
