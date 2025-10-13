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
	 * @param mixed $items Number of items per page
	 * @param mixed $sortCol Column to sort by
	 * @param mixed $sortDir Sort direction (asc or desc)
	 * @param mixed $resource Filter by resource. See WebhookTypes objects for available options.
	 * @param mixed $action Filter by action. See WebhookTypes objects for available options.
	 * @param mixed $isActive Filter by active status
	 * @param mixed $include Comma-separated list of related resources to include in the response. Available resources: type, calls
	 * @param mixed $loadedWebhookCalls Number of loaded webhook calls when the calls include is used
	 */
	public function indexUserWebhooks(
		mixed $items,
		mixed $sortCol,
		mixed $sortDir,
		mixed $resource,
		mixed $action,
		mixed $isActive,
		mixed $include,
		mixed $loadedWebhookCalls,
	): Response
	{
		return $this->connector->send(new IndexUserWebhooks($items, $sortCol, $sortDir, $resource, $action, $isActive, $include, $loadedWebhookCalls));
	}


	public function createUserWebhook(): Response
	{
		return $this->connector->send(new CreateUserWebhook());
	}


	/**
	 * @param mixed $id The reference ID of the webhook.
	 * @param mixed $include Comma-separated list of related resources to include in the response. Available resources: type, calls
	 */
	public function getSingleWebhookById(mixed $id, mixed $include): Response
	{
		return $this->connector->send(new GetSingleWebhookById($id, $include));
	}


	/**
	 * @param mixed $id webhook reference
	 */
	public function updateUserWebhook(mixed $id): Response
	{
		return $this->connector->send(new UpdateUserWebhook($id));
	}


	/**
	 * @param mixed $id Reference of the webhook to delete.
	 */
	public function deleteUserWebhook(mixed $id): Response
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
	 * @param mixed $id Reference of the webhook to delete.
	 */
	public function testUserWebhook(mixed $id): Response
	{
		return $this->connector->send(new TestUserWebhook($id));
	}


	public function getTypes(): Response
	{
		return $this->connector->send(new GetTypes());
	}
}
