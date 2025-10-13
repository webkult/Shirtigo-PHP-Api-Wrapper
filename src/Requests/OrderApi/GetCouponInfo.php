<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get coupon info
 *
 * Retrieve information about a single order coupon.
 */
class GetCouponInfo extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/coupons/{$this->couponCode}";
	}


	/**
	 * @param mixed $couponCode Alphanumerical coupon identifier as provided to the customer
	 */
	public function __construct(
		protected mixed $couponCode,
	) {
	}
}
