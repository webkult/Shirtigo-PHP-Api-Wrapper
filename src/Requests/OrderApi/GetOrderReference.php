<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get OrderReference
 *
 * Get shirtigo order reference for given integrationId and integration orderId
 */
class GetOrderReference extends Request
{
	public $integrationreference;
    public $integrationOrderId;
    protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/integration/{$this->integrationreference}/{$this->integrationOrderId}/reference";
	}
}
