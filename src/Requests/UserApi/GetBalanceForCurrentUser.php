<?php

namespace Webkult\Api\Shirtigo\Requests\UserApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Get balance for current user
 *
 * Return a Money object for the users current balance
 */
class GetBalanceForCurrentUser extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/user/balance";
	}
}
