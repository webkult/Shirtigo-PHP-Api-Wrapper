<?php

namespace Webkult\Api\Shirtigo\Requests\IntegrationApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update UserIntegration
 *
 * Update settings for a single user integration.
 *
 * The endpoint returns the updated integration.
 */
class UpdateUserIntegration extends Request
{
	public $integrationId;
    protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/integrations/{$this->integrationId}";
	}
}
