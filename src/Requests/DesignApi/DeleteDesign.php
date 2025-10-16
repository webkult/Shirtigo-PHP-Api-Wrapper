<?php

namespace Webkult\Api\Shirtigo\Requests\DesignApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete design
 *
 * Only designs by the currently authenticated user may be deleted.
 */
class DeleteDesign extends Request
{
	protected Method $method = Method::DELETE;


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
