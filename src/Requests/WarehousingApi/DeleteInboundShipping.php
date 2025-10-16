<?php

namespace Webkult\Api\Shirtigo\Requests\WarehousingApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete InboundShipping
 *
 * Deletes WarehouseInboundShipment
 */
class DeleteInboundShipping extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/inbound/{$this->reference}";
	}


	/**
	 * @param null|string $reference Reference of the InboundShipment to be deleted
	 */
	public function __construct(
		protected ?string $reference = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['reference' => $this->reference]);
	}
}
