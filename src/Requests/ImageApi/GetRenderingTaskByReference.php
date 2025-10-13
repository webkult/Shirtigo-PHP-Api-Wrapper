<?php

namespace Webkult\Api\Shirtigo\Requests\ImageApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get Rendering Task by Reference
 *
 * Retrieves detailed information about a specific mockup-factory rendering task associated with the
 * given reference
 * identifier. This endpoint is intended for users to fetch detailed information about
 * a specific task, including
 * its variations and current status.
 */
class GetRenderingTaskByReference extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/mockup-factory/rendering-tasks/{$this->reference}";
	}


	/**
	 * @param mixed $reference Unique reference of the rendering task
	 */
	public function __construct(
		protected mixed $reference,
	) {
	}
}
