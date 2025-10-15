<?php

namespace Webkult\Api\Shirtigo\Resource;

use Saloon\Contracts\Response;
use Webkult\Api\Shirtigo\Requests\IntegrationApi\DeleteUserIntegration;
use Webkult\Api\Shirtigo\Requests\IntegrationApi\GetUserIntegration;
use Webkult\Api\Shirtigo\Requests\IntegrationApi\TranslateUserIntegrationSyncError;
use Webkult\Api\Shirtigo\Requests\IntegrationApi\UpdateUserIntegration;
use Webkult\Api\Shirtigo\Resource;

class IntegrationApi extends Resource
{
	public function getUserIntegration(): Response
	{
		return $this->connector->send(new GetUserIntegration());
	}


	public function updateUserIntegration(): Response
	{
		return $this->connector->send(new UpdateUserIntegration());
	}


	/**
	 * @param string $designReference Unique design identifier
	 */
	public function deleteUserIntegration(string $designReference): Response
	{
		return $this->connector->send(new DeleteUserIntegration($designReference));
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function getUserIntegrationDuplicate1(): Response
	{
		return $this->connector->send(new GetUserIntegration());
	}


	/**
	 * @param int $syncId ID of the campaign product integration sync
	 */
	public function translateUserIntegrationSyncError(int $syncId): Response
	{
		return $this->connector->send(new TranslateUserIntegrationSyncError($syncId));
	}
}
