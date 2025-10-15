<?php

namespace Webkult\Api\Shirtigo\Resource;

use Saloon\Contracts\Response;
use Webkult\Api\Shirtigo\Requests\Oauth\ObtainAuthorizationFromUser;
use Webkult\Api\Shirtigo\Requests\Oauth\RequestAccessToken;
use Webkult\Api\Shirtigo\Resource;

class Oauth extends Resource
{
	/**
	 * @param string $responseType Response type
	 * @param string $redirectUrl Redirect URL. Must match registered redirect URL.
	 * @param string $clientId Client ID (from registration)
	 * @param string $clientSecret Client Secret (from registration)
	 */
	public function obtainAuthorizationFromUser(
		string $responseType,
		string $redirectUrl,
		string $clientId,
		string $clientSecret,
	): Response
	{
		return $this->connector->send(new ObtainAuthorizationFromUser($responseType, $redirectUrl, $clientId, $clientSecret));
	}


	public function requestAccessToken(): Response
	{
		return $this->connector->send(new RequestAccessToken());
	}
}
