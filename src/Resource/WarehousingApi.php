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
	 * @param string $reference Reference of the Variant to be updated
	 * @param string $include Which linked entities you want to include into the response, separated by comma. Available includes are Items
	 */
	public function getInboundShipping(string $reference, string $include): Response
	{
		return $this->connector->send(new GetInboundShipping($reference, $include));
	}


	/**
	 * @param string $reference Reference of the InboundShipment to be deleted
	 */
	public function deleteInboundShipping(string $reference): Response
	{
		return $this->connector->send(new DeleteInboundShipping($reference));
	}


	/**
	 * @param string $include Which linked entities you want to include into the response, separated by comma. Available includes are Image and Product
	 * @param string $search Search in in variants by the name
	 * @param int $page Current page
	 * @param int $items Number of items per page
	 * @param string $sort Column used to sort the results. You can sort by: name, reference, created_at, updated_at
	 * @param string $order Direction for sorting
	 * @param string $type Type of the products to query. Options are warehouse, return and all.
	 */
	public function getWarehouseProductVariant(
		string $include,
		string $search,
		int $page,
		int $items,
		string $sort,
		string $order,
		string $type,
	): Response
	{
		return $this->connector->send(new GetWarehouseProductVariant($include, $search, $page, $items, $sort, $order, $type));
	}


	/**
	 * @param string $reference Reference of the Variant to be updated
	 * @param string $include Which linked entities you want to include into the response, separated by comma. Available includes are Variant and Variants
	 */
	public function getWarehouseProduct(string $reference, string $include): Response
	{
		return $this->connector->send(new GetWarehouseProduct($reference, $include));
	}


	/**
	 * @param string $reference Reference of the WarehouseProduct to be updated
	 */
	public function updateWarehouseProduct(string $reference): Response
	{
		return $this->connector->send(new UpdateWarehouseProduct($reference));
	}


	public function createWarehouseProduct(): Response
	{
		return $this->connector->send(new CreateWarehouseProduct());
	}


	/**
	 * @param string $productReference Reference of the WarehouseProduct to which the updated Variant belongs to
	 * @param string $reference Reference of the Variant to be updated
	 */
	public function updateWarehouseProductVariant(string $productReference, string $reference): Response
	{
		return $this->connector->send(new UpdateWarehouseProductVariant($productReference, $reference));
	}


	/**
	 * @param string $productReference Reference of the WarehouseProduct to which the deleted Variant belongs to
	 * @param string $reference Reference of the Variant to be deleted
	 */
	public function deleteWarehouseProductVariant(string $productReference, string $reference): Response
	{
		return $this->connector->send(new DeleteWarehouseProductVariant($productReference, $reference));
	}


	/**
	 * @param string $reference Reference of the Variant to be updated
	 */
	public function updateWarehouseProductVariantByReference(string $reference): Response
	{
		return $this->connector->send(new UpdateWarehouseProductVariantByReference($reference));
	}
}
