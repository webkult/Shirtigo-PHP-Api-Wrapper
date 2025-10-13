<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Retry payment
 *
 * Set the order payment method to the current user's payment method and retry credit card capture.
 */
class RetryPayment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderReference}/repay";
	}


	/**
	 * @param mixed $orderReference The unique reference identifier of the order
	 */
	public function __construct(
		protected mixed $orderReference,
	) {
	}
}
