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
	 * @param null|int $nImages Number of images to generate
	 * @param null|string $prompt Prompt for image generation
	 * @param null|int $styleId ID of prefered MediaStyle
	 */
	public function __construct(
		protected ?int $nImages = null,
		protected ?string $prompt = null,
		protected ?int $styleId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['n_images' => $this->nImages, 'prompt' => $this->prompt, 'style_id' => $this->styleId]);
	}
}
