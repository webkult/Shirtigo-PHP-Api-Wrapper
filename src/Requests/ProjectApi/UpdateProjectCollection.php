<?php

namespace Webkult\Api\Shirtigo\Requests\ProjectApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update project / Collection
 *
 * Change information about a project
 */
class UpdateProjectCollection extends Request
{
	protected Method $method = Method::PUT;


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
