<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update OrderProduct
 *
 * Update an existing OrderProducts size or/and color for the currently authenticated user.
 */
class UpdateOrderProduct extends Request
{
	public $reference;
    protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/orderproduct/{$this->reference}";
	}


	/**
	 * @param null|int $colorId ID for new color
	 * @param null|int $sizeId ID for new size
	 * @param null|bool $replacementRequested Use replacement product in case current Product is not available
	 */
	public function __construct(
		protected ?int $colorId = null,
		protected ?int $sizeId = null,
		protected ?bool $replacementRequested = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['color_id' => $this->colorId, 'size_id' => $this->sizeId, 'replacement_requested' => $this->replacementRequested]);
	}
}
