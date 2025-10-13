<?php

namespace Webkult\Api\Shirtigo\Requests\UserApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get user verifications
 *
 * Retrieve all verification records for the currently authenticated user.
 */
class GetUserVerifications extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/verifications";
	}


	/**
	 * @param null|mixed $include Comma-separated values to include additional resources
	 */
	public function __construct(
		protected mixed $include = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include' => $this->include]);
	}
}
