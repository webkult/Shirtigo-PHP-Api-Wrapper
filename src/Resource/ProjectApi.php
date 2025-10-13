<?php

namespace Webkult\Api\Shirtigo\Resource;

use Saloon\Contracts\Response;
use Webkult\Api\Shirtigo\Requests\ProjectApi\CreateProjectCollection;
use Webkult\Api\Shirtigo\Requests\ProjectApi\DeleteProjectCollection;
use Webkult\Api\Shirtigo\Requests\ProjectApi\GetAllProjectsCollections;
use Webkult\Api\Shirtigo\Requests\ProjectApi\GetProductsForProjectCollection;
use Webkult\Api\Shirtigo\Requests\ProjectApi\GetProjectCollection;
use Webkult\Api\Shirtigo\Requests\ProjectApi\SynchronizeIntegrations;
use Webkult\Api\Shirtigo\Requests\ProjectApi\UpdateProjectCollection;
use Webkult\Api\Shirtigo\Resource;

class ProjectApi extends Resource
{
	/**
	 * @param mixed $page Current page
	 * @param mixed $items Number of items per page
	 * @param mixed $sortCol Column used to sort the results. You can sort by: name, reference, url, default_preview_position, created_at, updated_at
	 * @param mixed $sortDir Direction for sorting
	 */
	public function getAllProjectsCollections(mixed $page, mixed $items, mixed $sortCol, mixed $sortDir): Response
	{
		return $this->connector->send(new GetAllProjectsCollections($page, $items, $sortCol, $sortDir));
	}


	public function createProjectCollection(): Response
	{
		return $this->connector->send(new CreateProjectCollection());
	}


	/**
	 * @param mixed $projectReference Unique project identifier
	 * @param mixed $includeStock Include stock information for the products
	 */
	public function getProjectCollection(mixed $projectReference, mixed $includeStock): Response
	{
		return $this->connector->send(new GetProjectCollection($projectReference, $includeStock));
	}


	/**
	 * @param mixed $projectReference Unique project identifier
	 */
	public function updateProjectCollection(mixed $projectReference): Response
	{
		return $this->connector->send(new UpdateProjectCollection($projectReference));
	}


	/**
	 * @param mixed $projectReference Unique project identifier
	 */
	public function deleteProjectCollection(mixed $projectReference): Response
	{
		return $this->connector->send(new DeleteProjectCollection($projectReference));
	}


	/**
	 * @param mixed $projectReference Unique project identifier
	 */
	public function getProductsForProjectCollection(mixed $projectReference): Response
	{
		return $this->connector->send(new GetProductsForProjectCollection($projectReference));
	}


	/**
	 * @param mixed $projectReference Unique project identifier
	 */
	public function synchronizeIntegrations(mixed $projectReference): Response
	{
		return $this->connector->send(new SynchronizeIntegrations($projectReference));
	}
}
