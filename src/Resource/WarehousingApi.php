<?php

namespace Webkult\Api\Shirtigo\Resource;

use Saloon\Contracts\Response;
use Webkult\Api\Shirtigo\Requests\WarehousingApi\CreateWarehouseProduct;
use Webkult\Api\Shirtigo\Requests\WarehousingApi\DeleteInboundShipping;
use Webkult\Api\Shirtigo\Requests\WarehousingApi\DeleteWarehouseProductVariant;
use Webkult\Api\Shirtigo\Requests\WarehousingApi\GetInboundShipping;
use Webkult\Api\Shirtigo\Requests\WarehousingApi\GetWarehouseProduct;
use Webkult\Api\Shirtigo\Requests\WarehousingApi\GetWarehouseProductVariant;
use Webkult\Api\Shirtigo\Requests\WarehousingApi\UpdateWarehouseProduct;
use Webkult\Api\Shirtigo\Requests\WarehousingApi\UpdateWarehouseProductVariant;
use Webkult\Api\Shirtigo\Requests\WarehousingApi\UpdateWarehouseProductVariantByReference;
use Webkult\Api\Shirtigo\Resource;

class WarehousingApi extends Resource
{
	/**
	 * @param mixed $reference Reference of the Variant to be updated
	 * @param mixed $include Which linked entities you want to include into the response, separated by comma. Available includes are Items
	 */
	public function getInboundShipping(mixed $reference, mixed $include): Response
	{
		return $this->connector->send(new GetInboundShipping($reference, $include));
	}


	/**
	 * @param mixed $reference Reference of the InboundShipment to be deleted
	 */
	public function deleteInboundShipping(mixed $reference): Response
	{
		return $this->connector->send(new DeleteInboundShipping($reference));
	}


	/**
	 * @param mixed $include Which linked entities you want to include into the response, separated by comma. Available includes are Image and Product
	 * @param mixed $search Search in in variants by the name
	 * @param mixed $page Current page
	 * @param mixed $items Number of items per page
	 * @param mixed $sort Column used to sort the results. You can sort by: name, reference, created_at, updated_at
	 * @param mixed $order Direction for sorting
	 * @param mixed $type Type of the products to query. Options are warehouse, return and all.
	 */
	public function getWarehouseProductVariant(
		mixed $include,
		mixed $search,
		mixed $page,
		mixed $items,
		mixed $sort,
		mixed $order,
		mixed $type,
	): Response
	{
		return $this->connector->send(new GetWarehouseProductVariant($include, $search, $page, $items, $sort, $order, $type));
	}


	/**
	 * @param mixed $reference Reference of the Variant to be updated
	 * @param mixed $include Which linked entities you want to include into the response, separated by comma. Available includes are Variant and Variants
	 */
	public function getWarehouseProduct(mixed $reference, mixed $include): Response
	{
		return $this->connector->send(new GetWarehouseProduct($reference, $include));
	}


	/**
	 * @param mixed $reference Reference of the WarehouseProduct to be updated
	 */
	public function updateWarehouseProduct(mixed $reference): Response
	{
		return $this->connector->send(new UpdateWarehouseProduct($reference));
	}


	public function createWarehouseProduct(): Response
	{
		return $this->connector->send(new CreateWarehouseProduct());
	}


	/**
	 * @param mixed $productReference Reference of the WarehouseProduct to which the updated Variant belongs to
	 * @param mixed $reference Reference of the Variant to be updated
	 */
	public function updateWarehouseProductVariant(mixed $productReference, mixed $reference): Response
	{
		return $this->connector->send(new UpdateWarehouseProductVariant($productReference, $reference));
	}


	/**
	 * @param mixed $productReference Reference of the WarehouseProduct to which the deleted Variant belongs to
	 * @param mixed $reference Reference of the Variant to be deleted
	 */
	public function deleteWarehouseProductVariant(mixed $productReference, mixed $reference): Response
	{
		return $this->connector->send(new DeleteWarehouseProductVariant($productReference, $reference));
	}


	/**
	 * @param mixed $reference Reference of the Variant to be updated
	 */
	public function updateWarehouseProductVariantByReference(mixed $reference): Response
	{
		return $this->connector->send(new UpdateWarehouseProductVariantByReference($reference));
	}
}
