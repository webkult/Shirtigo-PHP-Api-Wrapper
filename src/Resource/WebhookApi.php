<?php

namespace Webkult\Api\Shirtigo\Resource;

use Saloon\Contracts\Response;
use Webkult\Api\Shirtigo\Requests\WebhookApi\CreateUserWebhook;
use Webkult\Api\Shirtigo\Requests\WebhookApi\DeleteUserWebhook;
use Webkult\Api\Shirtigo\Requests\WebhookApi\GetSingleWebhookById;
use Webkult\Api\Shirtigo\Requests\WebhookApi\GetTypes;
use Webkult\Api\Shirtigo\Requests\WebhookApi\IndexUserWebhooks;
use Webkult\Api\Shirtigo\Requests\WebhookApi\TestUserWebhook;
use Webkult\Api\Shirtigo\Requests\WebhookApi\UpdateUserWebhook;
use Webkult\Api\Shirtigo\Resource;

class WebhookApi extends Resource
{
	/**
	 * @param int $items Number of items per page
	 * @param string $sortCol Column to sort by
	 * @param string $sortDir Sort direction (asc or desc)
	 * @param string $resource Filter by resource. See WebhookTypes objects for available options.
	 * @param string $action Filter by action. See WebhookTypes objects for available options.
	 * @param bool $isActive Filter by active status
	 * @param string $include Comma-separated list of related resources to include in the response. Available resources: type, calls
	 * @param int $loadedWebhookCalls Number of loaded webhook calls when the calls include is used
	 */
	public function indexUserWebhooks(
		int $items,
		string $sortCol,
		string $sortDir,
		string $resource,
		string $action,
		bool $isActive,
		string $include,
		int $loadedWebhookCalls,
	): Response
	{
		return $this->connector->send(new IndexUserWebhooks($items, $sortCol, $sortDir, $resource, $action, $isActive, $include, $loadedWebhookCalls));
	}


	public function createUserWebhook(): Response
	{
		return $this->connector->send(new CreateUserWebhook());
	}


	/**
	 * @param string $id The reference ID of the webhook.
	 * @param string $include Comma-separated list of related resources to include in the response. Available resources: type, calls
	 */
	public function getSingleWebhookById(string $id, string $include): Response
	{
		return $this->connector->send(new GetSingleWebhookById($id, $include));
	}


	/**
	 * @param string $id webhook reference
	 */
	public function updateUserWebhook(string $id): Response
	{
		return $this->connector->send(new UpdateUserWebhook($id));
	}


	/**
	 * @param string $id Reference of the webhook to delete.
	 */
	public function deleteUserWebhook(string $id): Response
	{
		return $this->connector->send(new DeleteUserWebhook($id));
	}


	/**
	 * @todo Fix duplicated method name
	 */
	public function updateUserWebhookDuplicate1(): Response
	{
		return $this->connector->send(new UpdateUserWebhook());
	}


	/**
	 * @param string $id Reference of the webhook to delete.
	 */
	public function testUserWebhook(string $id): Response
	{
		return $this->connector->send(new TestUserWebhook($id));
	}


	public function getTypes(): Response
	{
		return $this->connector->send(new GetTypes());
	}
}
