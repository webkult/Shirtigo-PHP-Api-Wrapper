<?php

namespace Webkult\Api\Shirtigo\Requests\Oauth;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Request access token
 *
 * This endpoint constitutes the second step of the OAuth2 authorization flow, obtaining an access
 * token from the access code. This is done on the client side and does not require any user
 * interaction.
 */
class RequestAccessToken extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/oauth/token";
	}
}
