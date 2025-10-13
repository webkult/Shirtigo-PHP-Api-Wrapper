<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Release onhold
 *
 * Orders with Flag Onhold will not be send to production until flag is released.
 * Only Orders having
 * completely rendered Images can be released.
 */
class ReleaseOnhold extends Request
{
	public $reference;
    protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/order/{$this->reference}/release-onhold";
	}
}
