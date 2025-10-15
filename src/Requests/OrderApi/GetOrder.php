<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get order
 *
 * Some of the listed resources are available as optional includes (add to the query
 * ?include=firstInclude,secondInclude.subInclude). The available includes for this endpoint are:
 * parent, children, comments, products, warehouseProducts, payments, orderStatusEntries, shipping,
 * packins
 */
class GetOrder extends Request
{
	protected Method $method = Method::GET;


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
