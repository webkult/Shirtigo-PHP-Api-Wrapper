<?php

namespace Webkult\Api\Shirtigo\Requests\IntegrationApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete UserIntegration
 *
 * Uninstall this integration from your 3rd party store and delete the integration. IMPORTANT: all
 * synchronized products will be deleted as well in the 3rd party store.
 */
class DeleteUserIntegration extends Request
{
	public $integrationId;
    protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/integrations/{$this->integrationId}";
	}


	/**
	 * @param string $designReference Unique design identifier
	 */
	public function __construct(
		protected string $designReference,
	) {
	}
}
