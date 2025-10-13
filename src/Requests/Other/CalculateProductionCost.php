<?php

namespace Webkult\Api\Shirtigo\Requests\Other;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Calculate production cost
 *
 * Calculate the net production cost for a given product, set of print areas and color information. The
 * VAT rate
 * rate is preliminary, the final rate depends on the shipping target, involvement of business
 * customers and other factors.
 */
class CalculateProductionCost extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/calculation";
	}
}
