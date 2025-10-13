<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Add order comment
 *
 * Creates a new comment for a given order. Expects the comment text.
 */
class AddOrderComment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderReference}/comments";
	}


	/**
	 * @param mixed $orderReference The unique reference identifier of the order
	 */
	public function __construct(
		protected mixed $orderReference,
	) {
	}
}
