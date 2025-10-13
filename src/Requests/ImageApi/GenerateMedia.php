<?php

namespace Webkult\Api\Shirtigo\Requests\ImageApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * generateMedia
 */
class GenerateMedia extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/ai/generate-image";
	}


	/**
	 * @param null|mixed $nImages Number of images to generate
	 * @param null|mixed $prompt Prompt for image generation
	 * @param null|mixed $styleId ID of prefered MediaStyle
	 */
	public function __construct(
		protected mixed $nImages = null,
		protected mixed $prompt = null,
		protected mixed $styleId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['n_images' => $this->nImages, 'prompt' => $this->prompt, 'style_id' => $this->styleId]);
	}
}
