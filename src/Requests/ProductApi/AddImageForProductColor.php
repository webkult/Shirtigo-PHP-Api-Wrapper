<?php

namespace Webkult\Api\Shirtigo\Requests\ProductApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Add Image for ProductColor
 */
class AddImageForProductColor extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/products/{$this->productId}/images";
	}


	/**
	 * @param mixed $productId ID of the product to add image to
	 * @param null|mixed $url Url
	 * @param null|mixed $style Style
	 * @param null|mixed $procesingareaType Processing Area type
	 * @param null|mixed $name Name
	 * @param null|mixed $sortWeight Sort weight
	 */
	public function __construct(
		protected mixed $productId,
		protected mixed $url = null,
		protected mixed $style = null,
		protected mixed $procesingareaType = null,
		protected mixed $name = null,
		protected mixed $sortWeight = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'url' => $this->url,
			'style' => $this->style,
			'procesingarea_type' => $this->procesingareaType,
			'name' => $this->name,
			'sort_weight' => $this->sortWeight,
		]);
	}
}
