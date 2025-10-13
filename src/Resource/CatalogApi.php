<?php

namespace Webkult\Api\Shirtigo\Resource;

use Saloon\Contracts\Response;
use Webkult\Api\Shirtigo\Requests\CatalogApi\GetAllBaseProducts;
use Webkult\Api\Shirtigo\Requests\CatalogApi\GetBaseProduct;
use Webkult\Api\Shirtigo\Requests\CatalogApi\ListAvailableCategories;
use Webkult\Api\Shirtigo\Resource;

class CatalogApi extends Resource
{
	/**
	 * @param mixed $category Filter by category identifier (default: any)
	 * @param mixed $userProductsOnly Include user specific products
	 * @param mixed $sku Filter products with a variant which contains a variant where either the sku or internal_sku contains the passed value
	 */
	public function getAllBaseProducts(mixed $category, mixed $userProductsOnly, mixed $sku): Response
	{
		return $this->connector->send(new GetAllBaseProducts($category, $userProductsOnly, $sku));
	}


	/**
	 * @param mixed $baseProductId Numerical base product identifier
	 * @param mixed $includeStock Include stock information for the product
	 */
	public function getBaseProduct(mixed $baseProductId, mixed $includeStock): Response
	{
		return $this->connector->send(new GetBaseProduct($baseProductId, $includeStock));
	}


	public function listAvailableCategories(): Response
	{
		return $this->connector->send(new ListAvailableCategories());
	}
}
