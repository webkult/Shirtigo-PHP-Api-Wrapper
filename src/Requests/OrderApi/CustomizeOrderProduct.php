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
	 * @param null|mixed $designReference Reference of design
	 * @param null|mixed $processingareaTypeId Processingarea to be customized. 1 = front, 2 = back
	 * @param null|mixed $width Width of design in millimeter
	 * @param null|mixed $offsetTop Offset to collar in millimeter
	 * @param null|mixed $offsetCenter x-shift to centerline in millimeter
	 */
	public function __construct(
		protected mixed $designReference = null,
		protected mixed $processingareaTypeId = null,
		protected mixed $width = null,
		protected mixed $offsetTop = null,
		protected mixed $offsetCenter = null,
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
