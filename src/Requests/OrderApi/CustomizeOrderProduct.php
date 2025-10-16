<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Customize OrderProduct
 *
 * Customize an existing OrderProduct for the currently authenticated user.
 */
class CustomizeOrderProduct extends Request
{
	public $reference;
    protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/orderproduct/{$this->reference}/customize";
	}


	/**
	 * @param null|string $designReference Reference of design
	 * @param null|int $processingareaTypeId Processingarea to be customized. 1 = front, 2 = back
	 * @param null|float $width Width of design in millimeter
	 * @param null|float $offsetTop Offset to collar in millimeter
	 * @param null|float $offsetCenter x-shift to centerline in millimeter
	 */
	public function __construct(
		protected ?string $designReference = null,
		protected ?int $processingareaTypeId = null,
		protected ?float $width = null,
		protected ?float $offsetTop = null,
		protected ?float $offsetCenter = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'design_reference' => $this->designReference,
			'processingarea_type_id' => $this->processingareaTypeId,
			'width' => $this->width,
			'offset_top' => $this->offsetTop,
			'offset_center' => $this->offsetCenter,
		]);
	}
}
