<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Cancel order
 *
 * Set the order status to canceled.
 */
class CancelOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderReference}/cancel";
	}


	/**
	 * @param string $orderReference The unique reference identifier of the order
	 */
	public function __construct(
		protected string $orderReference,
	) {
	}
}
