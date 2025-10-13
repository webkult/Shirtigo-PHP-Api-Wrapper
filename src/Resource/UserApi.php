<?php

namespace Webkult\Api\Shirtigo\Resource;

use Saloon\Contracts\Response;
use Webkult\Api\Shirtigo\Requests\UserApi\CreateNewUserVerification;
use Webkult\Api\Shirtigo\Requests\UserApi\GetAllTransactions;
use Webkult\Api\Shirtigo\Requests\UserApi\GetBalanceForCurrentUser;
use Webkult\Api\Shirtigo\Requests\UserApi\GetUserInformation;
use Webkult\Api\Shirtigo\Requests\UserApi\GetUserVerifications;
use Webkult\Api\Shirtigo\Requests\UserApi\GetWalletTransactions;
use Webkult\Api\Shirtigo\Requests\UserApi\UpdateGpsrAddresses;
use Webkult\Api\Shirtigo\Requests\UserApi\UpdateSenderAddress;
use Webkult\Api\Shirtigo\Requests\UserApi\UpdateUserAdvanced;
use Webkult\Api\Shirtigo\Requests\UserApi\UpdateUserInformation;
use Webkult\Api\Shirtigo\Resource;

class UserApi extends Resource
{
	/**
	 * @param mixed $page Page number
	 * @param mixed $items Items per page
	 * @param mixed $search Search query
	 * @param mixed $sortCol Property to order by
	 * @param mixed $sortDir Order direction
	 * @param mixed $period Days to show (default: all)
	 * @param mixed $action Action to filter for (default: none)
	 */
	public function getAllTransactions(
		mixed $page,
		mixed $items,
		mixed $search,
		mixed $sortCol,
		mixed $sortDir,
		mixed $period,
		mixed $action,
	): Response
	{
		return $this->connector->send(new GetAllTransactions($page, $items, $search, $sortCol, $sortDir, $period, $action));
	}


	/**
     * @param mixed $items Number of items per page
     * @param mixed $search Search term
     */
    public function getWalletTransactions(mixed $items, mixed $search, mixed $sortCol, mixed $sortDir): Response
	{
		return $this->connector->send(new GetWalletTransactions($items, $search, $sortCol, $sortDir));
	}


	public function getBalanceForCurrentUser(): Response
	{
		return $this->connector->send(new GetBalanceForCurrentUser());
	}


	public function getUserInformation(): Response
	{
		return $this->connector->send(new GetUserInformation());
	}


	public function updateUserInformation(): Response
	{
		return $this->connector->send(new UpdateUserInformation());
	}


	public function updateSenderAddress(): Response
	{
		return $this->connector->send(new UpdateSenderAddress());
	}


	public function updateGpsrAddresses(): Response
	{
		return $this->connector->send(new UpdateGpsrAddresses());
	}


	public function updateUserAdvanced(): Response
	{
		return $this->connector->send(new UpdateUserAdvanced());
	}


	/**
	 * @param mixed $include Comma-separated values to include additional resources
	 */
	public function getUserVerifications(mixed $include): Response
	{
		return $this->connector->send(new GetUserVerifications($include));
	}


	public function createNewUserVerification(): Response
	{
		return $this->connector->send(new CreateNewUserVerification());
	}
}
