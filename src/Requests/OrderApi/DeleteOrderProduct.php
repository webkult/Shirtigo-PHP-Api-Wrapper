<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete OrderProduct
 *
 * Delete an existing OrderProducts for the currently authenticated user.
 */
class DeleteOrderProduct extends Request
{
	public $reference;
    protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/orderproduct/{$this->reference}";
	}
}
