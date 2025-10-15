<?php

namespace Webkult\Api\Shirtigo\Requests\ProjectApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Synchronize integrations
 *
 * Trigger synchronization with all integrations defined for this campaign.
 * The synchronization is
 * performed in the background. Its status can be observed by querying for the attribute "status".
 * It
 * has the following enum-values:
 * - 'is_queuing',
 * - 'is_syncing',
 * - 'is_completed'
 * - 'has_errors'
 */
class SynchronizeIntegrations extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/projects/{$this->projectReference}/sync";
	}


	/**
	 * @param string $projectReference Unique project identifier
	 */
	public function __construct(
		protected string $projectReference,
	) {
	}
}
