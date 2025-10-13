<?php

namespace Webkult\Api\Shirtigo\Requests\ProjectApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create project / collection
 *
 * Create a new project and return the inserted information.
 * Associate the project with the currently
 * authenticated user.
 */
class CreateProjectCollection extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/projects";
	}
}
