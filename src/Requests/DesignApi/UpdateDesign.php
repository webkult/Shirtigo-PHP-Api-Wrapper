<?php

namespace Webkult\Api\Shirtigo\Requests\DesignApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update design
 *
 * Update a single design based on the parameters given in the form body.
 */
class UpdateDesign extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/designs/{$this->designReference}";
	}


	/**
	 * @param string $designReference Unique design identifier
	 */
	public function __construct(
		protected string $designReference,
	) {
	}
}
