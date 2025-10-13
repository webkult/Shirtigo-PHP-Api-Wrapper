<?php

namespace Webkult\Api\Shirtigo\Requests\BrandingApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create user packin
 *
 * Create a new custom packin (packaging insert) for the user account.
 * Packings include items like
 * hangtags, labels, stickers, and custom packaging materials.
 */
class CreateUserPackin extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/user/packin";
	}
}
