<?php

namespace Webkult\Api\Shirtigo\Resource;

use Saloon\Contracts\Response;
use Webkult\Api\Shirtigo\Requests\Oauth\ObtainAuthorizationFromUser;
use Webkult\Api\Shirtigo\Requests\Oauth\RequestAccessToken;
use Webkult\Api\Shirtigo\Resource;

class Oauth extends Resource
{
	/**
	 * @param mixed $responseType Response type
	 * @param mixed $redirectUrl Redirect URL. Must match registered redirect URL.
	 * @param mixed $clientId Client ID (from registration)
	 * @param mixed $clientSecret Client Secret (from registration)
	 */
	public function obtainAuthorizationFromUser(
		mixed $responseType,
		mixed $redirectUrl,
		mixed $clientId,
		mixed $clientSecret,
	): Response
	{
		return $this->connector->send(new ObtainAuthorizationFromUser($responseType, $redirectUrl, $clientId, $clientSecret));
	}


	public function requestAccessToken(): Response
	{
		return $this->connector->send(new RequestAccessToken());
	}
}
