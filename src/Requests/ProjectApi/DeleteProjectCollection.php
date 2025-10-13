<?php

namespace Webkult\Api\Shirtigo\Requests\ProjectApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete project / collection
 *
 * Delete the selected project.
 */
class DeleteProjectCollection extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/projects/{$this->projectReference}";
	}


	/**
	 * @param mixed $projectReference Unique project identifier
	 */
	public function __construct(
		protected mixed $projectReference,
	) {
	}
}
