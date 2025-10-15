<?php

namespace Webkult\Api\Shirtigo\Resource;

use Saloon\Contracts\Response;
use Webkult\Api\Shirtigo\Requests\ImageApi\GenerateMedia;
use Webkult\Api\Shirtigo\Requests\ImageApi\GenerateMockupImages;
use Webkult\Api\Shirtigo\Requests\ImageApi\GetGeneratedMediaDetails;
use Webkult\Api\Shirtigo\Requests\ImageApi\GetGeneratedMediaList;
use Webkult\Api\Shirtigo\Requests\ImageApi\GetMediaStyles;
use Webkult\Api\Shirtigo\Requests\ImageApi\GetRenderingTaskByReference;
use Webkult\Api\Shirtigo\Requests\ImageApi\GetRenderingTasks;
use Webkult\Api\Shirtigo\Requests\ImageApi\RemoveBackground;
use Webkult\Api\Shirtigo\Requests\ImageApi\UpscaleDesign;
use Webkult\Api\Shirtigo\Requests\ImageApi\UpscaleVariation;
use Webkult\Api\Shirtigo\Resource;

class ImageApi extends Resource
{
	/**
	 * @param int $nImages Number of images to generate
	 * @param string $prompt Prompt for image generation
	 * @param int $styleId ID of prefered MediaStyle
	 */
	public function generateMedia(int $nImages, string $prompt, int $styleId): Response
	{
		return $this->connector->send(new GenerateMedia($nImages, $prompt, $styleId));
	}


	public function upscaleVariation(): Response
	{
		return $this->connector->send(new UpscaleVariation());
	}


	public function upscaleDesign(): Response
	{
		return $this->connector->send(new UpscaleDesign());
	}


	public function removeBackground(): Response
	{
		return $this->connector->send(new RemoveBackground());
	}


	/**
	 * @param string $sortCol Column to sort by (default: created_at)
	 * @param string $sortDir Sort direction (default: desc)
	 * @param string $filteredStatus Comma-separated list of filtered statuses
	 */
	public function getGeneratedMediaList(string $sortCol, string $sortDir, string $filteredStatus): Response
	{
		return $this->connector->send(new GetGeneratedMediaList($sortCol, $sortDir, $filteredStatus));
	}


	/**
	 * @param string $reference Reference of the generated media
	 */
	public function getGeneratedMediaDetails(string $reference): Response
	{
		return $this->connector->send(new GetGeneratedMediaDetails($reference));
	}


	public function getMediaStyles(): Response
	{
		return $this->connector->send(new GetMediaStyles());
	}


	public function generateMockupImages(): Response
	{
		return $this->connector->send(new GenerateMockupImages());
	}


	public function getRenderingTasks(): Response
	{
		return $this->connector->send(new GetRenderingTasks());
	}


	/**
	 * @param string $reference Unique reference of the rendering task
	 */
	public function getRenderingTaskByReference(string $reference): Response
	{
		return $this->connector->send(new GetRenderingTaskByReference($reference));
	}
}
