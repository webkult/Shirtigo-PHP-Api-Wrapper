<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Calculate price
 *
 * Calculate the full price (incl. shipping and taxes) for the selected order candidate.
 * This can be
 * done *before* ordering. The parameters are the same as to the "Create Order" endpoint.
 */
class CalculatePrice extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/orders/predict-price";
	}
}
