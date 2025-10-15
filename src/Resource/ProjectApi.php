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
	 * @param int $page Current page
	 * @param int $items Number of items per page
	 * @param string $sortCol Column used to sort the results. You can sort by: name, reference, url, default_preview_position, created_at, updated_at
	 * @param string $sortDir Direction for sorting
	 */
	public function getAllProjectsCollections(int $page, int $items, string $sortCol, string $sortDir): Response
	{
		return $this->connector->send(new GetAllProjectsCollections($page, $items, $sortCol, $sortDir));
	}


	public function createProjectCollection(): Response
	{
		return $this->connector->send(new CreateProjectCollection());
	}


	/**
	 * @param string $projectReference Unique project identifier
	 * @param bool $includeStock Include stock information for the products
	 */
	public function getProjectCollection(string $projectReference, bool $includeStock): Response
	{
		return $this->connector->send(new GetProjectCollection($projectReference, $includeStock));
	}


	/**
	 * @param string $projectReference Unique project identifier
	 */
	public function updateProjectCollection(string $projectReference): Response
	{
		return $this->connector->send(new UpdateProjectCollection($projectReference));
	}


	/**
	 * @param string $projectReference Unique project identifier
	 */
	public function deleteProjectCollection(string $projectReference): Response
	{
		return $this->connector->send(new DeleteProjectCollection($projectReference));
	}


	/**
	 * @param string $projectReference Unique project identifier
	 */
	public function getProductsForProjectCollection(string $projectReference): Response
	{
		return $this->connector->send(new GetProductsForProjectCollection($projectReference));
	}


	/**
	 * @param string $projectReference Unique project identifier
	 */
	public function synchronizeIntegrations(string $projectReference): Response
	{
		return $this->connector->send(new SynchronizeIntegrations($projectReference));
	}
}
