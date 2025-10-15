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
	 * @param int $productId ID of the product to add image to
	 * @param null|string $url Url
	 * @param null|string $style Style
	 * @param null|int $procesingareaType Processing Area type
	 * @param null|string $name Name
	 * @param null|int $sortWeight Sort weight
	 */
	public function __construct(
		protected int $productId,
		protected ?string $url = null,
		protected ?string $style = null,
		protected ?int $procesingareaType = null,
		protected ?string $name = null,
		protected ?int $sortWeight = null,
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
