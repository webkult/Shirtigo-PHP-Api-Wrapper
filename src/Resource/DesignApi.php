<?php

namespace Webkult\Api\Shirtigo\Resource;

use Saloon\Contracts\Response;
use Webkult\Api\Shirtigo\Requests\DesignApi\CreateDesignFromBase64EncodedData;
use Webkult\Api\Shirtigo\Requests\DesignApi\CreateDesignFromFile;
use Webkult\Api\Shirtigo\Requests\DesignApi\CreateDesignFromUrl;
use Webkult\Api\Shirtigo\Requests\DesignApi\DeleteDesign;
use Webkult\Api\Shirtigo\Requests\DesignApi\GetAllDesigns;
use Webkult\Api\Shirtigo\Requests\DesignApi\GetDesign;
use Webkult\Api\Shirtigo\Requests\DesignApi\UpdateDesign;
use Webkult\Api\Shirtigo\Resource;

class DesignApi extends Resource
{
	public function getAllDesigns(): Response
	{
		return $this->connector->send(new GetAllDesigns());
	}


	/**
	 * @param mixed $designReference Unique design identifier
	 */
	public function getDesign(mixed $designReference): Response
	{
		return $this->connector->send(new GetDesign($designReference));
	}


	/**
	 * @param mixed $designReference Unique design identifier
	 */
	public function updateDesign(mixed $designReference): Response
	{
		return $this->connector->send(new UpdateDesign($designReference));
	}


	/**
	 * @param mixed $designReference Unique design identifier
	 */
	public function deleteDesign(mixed $designReference): Response
	{
		return $this->connector->send(new DeleteDesign($designReference));
	}


	public function createDesignFromFile(): Response
	{
		return $this->connector->send(new CreateDesignFromFile());
	}


	public function createDesignFromBase64encodedData(): Response
	{
		return $this->connector->send(new CreateDesignFromBase64EncodedData());
	}


	public function createDesignFromUrl(): Response
	{
		return $this->connector->send(new CreateDesignFromUrl());
	}
}
