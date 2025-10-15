<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Update delivery address
 *
 * Updates the delivery address of an existing order. Only orders in certain states can be edited.
 * The
 * order must not be in production.
 */
class UpdateDeliveryAddress extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderReference}";
	}


	/**
	 * @param string $orderReference The unique reference identifier of the order
	 */
	public function __construct(
		protected string $orderReference,
	) {
	}
}
