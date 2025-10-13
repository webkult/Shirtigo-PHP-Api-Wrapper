<?php

namespace Webkult\Api\Shirtigo\Requests\DesignApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get design
 *
 * Retrieve information about a single design.
 * Only searches designs that are available to the
 * currently authenticated user.
 */
class GetDesign extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/designs/{$this->designReference}";
	}


	/**
	 * @param mixed $designReference Unique design identifier
	 */
	public function __construct(
		protected mixed $designReference,
	) {
	}
}
