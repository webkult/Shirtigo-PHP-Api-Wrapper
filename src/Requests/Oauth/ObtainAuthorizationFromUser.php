<?php

namespace Webkult\Api\Shirtigo\Requests\Oauth;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Obtain authorization from user
 *
 * As part of the OAuth2 authorization-code flow, users have to be directed to this endpoint, with the
 * query parameters filled in. If applicable, the user will then be prompted to log into their account
 * and confirm that their data may be used by a third party client. For security reasons, the redirect
 * URL has to be registered beforehand, the client ID and client secrets are also issued during
 * registration.
 */
class ObtainAuthorizationFromUser extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/oauth/authorize";
	}


	/**
	 * @param mixed $responseType Response type
	 * @param mixed $redirectUrl Redirect URL. Must match registered redirect URL.
	 * @param mixed $clientId Client ID (from registration)
	 * @param mixed $clientSecret Client Secret (from registration)
	 */
	public function __construct(
		protected mixed $responseType,
		protected mixed $redirectUrl,
		protected mixed $clientId,
		protected mixed $clientSecret,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'response_type' => $this->responseType,
			'redirect_url' => $this->redirectUrl,
			'client_id' => $this->clientId,
			'client_secret' => $this->clientSecret,
		]);
	}
}
