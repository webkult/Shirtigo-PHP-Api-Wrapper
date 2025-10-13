<?php

namespace Webkult\Api\Shirtigo;

use Saloon\Http\Connector;
use Webkult\Api\Shirtigo\Resource\BrandingApi;
use Webkult\Api\Shirtigo\Resource\CatalogApi;
use Webkult\Api\Shirtigo\Resource\DesignApi;
use Webkult\Api\Shirtigo\Resource\ImageApi;
use Webkult\Api\Shirtigo\Resource\IntegrationApi;
use Webkult\Api\Shirtigo\Resource\Oauth;
use Webkult\Api\Shirtigo\Resource\OrderApi;
use Webkult\Api\Shirtigo\Resource\Other;
use Webkult\Api\Shirtigo\Resource\ProductApi;
use Webkult\Api\Shirtigo\Resource\ProjectApi;
use Webkult\Api\Shirtigo\Resource\UserApi;
use Webkult\Api\Shirtigo\Resource\WarehousingApi;
use Webkult\Api\Shirtigo\Resource\WebhookApi;

/**
 * Shirtigo Cockpit API
 *
 * API for the Shirtigo Cockpit application.
 *            The API supports API-Key as well as OAuth2 authentication.
 *            The API-key / access token has to be presented in the `Authentication` header such as `Authentication: Bearer [key]`.
 *            Additionally, it is recommended to set the `Accept: application/json` header.
 *            API Clients for several languages are available on github: https://github.com/shirtigo
 */
class WebkultApiShirtigo extends Connector
{
	public function resolveBaseUrl(): string
	{
		return 'https://cockpit.shirtigo.com/api/';
	}


	public function brandingApi(): BrandingApi
	{
		return new BrandingApi($this);
	}


	public function catalogApi(): CatalogApi
	{
		return new CatalogApi($this);
	}


	public function designApi(): DesignApi
	{
		return new DesignApi($this);
	}


	public function imageApi(): ImageApi
	{
		return new ImageApi($this);
	}


	public function integrationApi(): IntegrationApi
	{
		return new IntegrationApi($this);
	}


	public function oauth(): Oauth
	{
		return new Oauth($this);
	}


	public function orderApi(): OrderApi
	{
		return new OrderApi($this);
	}


	public function other(): Other
	{
		return new Other($this);
	}


	public function productApi(): ProductApi
	{
		return new ProductApi($this);
	}


	public function projectApi(): ProjectApi
	{
		return new ProjectApi($this);
	}


	public function userApi(): UserApi
	{
		return new UserApi($this);
	}


	public function warehousingApi(): WarehousingApi
	{
		return new WarehousingApi($this);
	}


	public function webhookApi(): WebhookApi
	{
		return new WebhookApi($this);
	}
}
