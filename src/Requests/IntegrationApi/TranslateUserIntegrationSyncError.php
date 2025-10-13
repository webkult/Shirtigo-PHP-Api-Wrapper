<?php

namespace Webkult\Api\Shirtigo\Requests\IntegrationApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Translate User Integration Sync Error
 *
 * Translate technical integration sync errors into user-friendly explanations
 */
class TranslateUserIntegrationSyncError extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/integrations/sync-errors/{$this->syncId}/translate";
	}


	/**
	 * @param mixed $syncId ID of the campaign product integration sync
	 */
	public function __construct(
		protected mixed $syncId,
	) {
	}
}
