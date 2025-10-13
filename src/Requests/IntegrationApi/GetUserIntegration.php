<?php

namespace Webkult\Api\Shirtigo\Requests\IntegrationApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get UserIntegration
 *
 * Some of the listed resources are available as optional includes (add to the query
 * ?include=firstInclude,secondInclude.subInclude). The available includes for this endpoint are:
 * colors, base_product, active_integration_syncs, integration_sync_log, integration_products,
 * projectProductColors
 */
class GetUserIntegration extends Request
{
	public $integrationId;
    protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/integrations/{$this->integrationId}/products";
	}
}
