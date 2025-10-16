<?php

namespace Webkult\Api\Shirtigo\Resource;

use Saloon\Contracts\Response;
use Webkult\Api\Shirtigo\Requests\BrandingApi\CreateUserPackin;
use Webkult\Api\Shirtigo\Requests\BrandingApi\DeleteDeliveryReceiptLogo;
use Webkult\Api\Shirtigo\Requests\BrandingApi\DeleteStickerLogo;
use Webkult\Api\Shirtigo\Requests\BrandingApi\DeleteUserPackin;
use Webkult\Api\Shirtigo\Requests\BrandingApi\GetPackinPrices;
use Webkult\Api\Shirtigo\Requests\BrandingApi\GetSingleUserPackin;
use Webkult\Api\Shirtigo\Requests\BrandingApi\GetUserPackings;
use Webkult\Api\Shirtigo\Requests\BrandingApi\UpdateUserPackin;
use Webkult\Api\Shirtigo\Requests\BrandingApi\UploadDeliveryReceiptLogo;
use Webkult\Api\Shirtigo\Requests\BrandingApi\UploadStickerLogo;
use Webkult\Api\Shirtigo\Resource;

class BrandingApi extends Resource
{
	public function uploadDeliveryReceiptLogo(): Response
	{
		return $this->connector->send(new UploadDeliveryReceiptLogo());
	}


	/**
	 * @param int $integrationId Unique integration identifier
	 */
	public function deleteDeliveryReceiptLogo(int $integrationId): Response
	{
		return $this->connector->send(new DeleteDeliveryReceiptLogo($integrationId));
	}


	public function uploadStickerLogo(): Response
	{
		return $this->connector->send(new UploadStickerLogo());
	}


	/**
	 * @param int $integrationId Unique integration identifier
	 */
	public function deleteStickerLogo(int $integrationId): Response
	{
		return $this->connector->send(new DeleteStickerLogo($integrationId));
	}


	public function updateUserPackin(): Response
	{
		return $this->connector->send(new UpdateUserPackin());
	}


	public function createUserPackin(): Response
	{
		return $this->connector->send(new CreateUserPackin());
	}


	public function deleteUserPackin(): Response
	{
		return $this->connector->send(new DeleteUserPackin());
	}


	/**
	 * @param string $reference Unique packin reference identifier
	 */
	public function getSingleUserPackin(string $reference): Response
	{
		return $this->connector->send(new GetSingleUserPackin($reference));
	}


	public function getUserPackings(): Response
	{
		return $this->connector->send(new GetUserPackings());
	}


	public function getPackinPrices(): Response
	{
		return $this->connector->send(new GetPackinPrices());
	}
}
