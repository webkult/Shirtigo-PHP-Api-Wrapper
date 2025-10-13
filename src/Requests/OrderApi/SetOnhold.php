<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Set onhold
 *
 * Orders with Flag Onhold will not be send to production until flag is released.
 * Orders can be set to
 * onhold until they are pushed to production
 */
class SetOnhold extends Request
{
	public $reference;
    protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/order/{$this->reference}/set-onhold";
	}
}
