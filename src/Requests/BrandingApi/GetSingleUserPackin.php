<?php

namespace Webkult\Api\Shirtigo\Requests\BrandingApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get single user packin
 *
 * Retrieve details of a specific packin (packaging insert) by reference for the authenticated user.
 */
class GetSingleUserPackin extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/user/packin/{$this->reference}";
	}


	/**
	 * @param mixed $reference Unique packin reference identifier
	 */
	public function __construct(
		protected mixed $reference,
	) {
	}
}
