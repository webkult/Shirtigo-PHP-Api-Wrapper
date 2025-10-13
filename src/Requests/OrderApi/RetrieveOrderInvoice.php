<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Retrieve order invoice
 *
 * Fetches and returns the invoice for a given order as a PDF file.
 */
class RetrieveOrderInvoice extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderReference}/invoice";
	}


	/**
	 * @param mixed $orderReference Unique identifier of the order for which to retrieve the invoice
	 */
	public function __construct(
		protected mixed $orderReference,
	) {
	}
}
