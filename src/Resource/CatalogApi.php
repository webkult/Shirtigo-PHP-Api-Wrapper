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
	 * @param int $category Filter by category identifier (default: any)
	 * @param bool $userProductsOnly Include user specific products
	 * @param string $sku Filter products with a variant which contains a variant where either the sku or internal_sku contains the passed value
	 */
	public function getAllBaseProducts(int $category, bool $userProductsOnly, string $sku): Response
	{
		return $this->connector->send(new GetAllBaseProducts($category, $userProductsOnly, $sku));
	}


	/**
	 * @param int $baseProductId Numerical base product identifier
	 * @param bool $includeStock Include stock information for the product
	 */
	public function getBaseProduct(int $baseProductId, bool $includeStock): Response
	{
		return $this->connector->send(new GetBaseProduct($baseProductId, $includeStock));
	}


	public function listAvailableCategories(): Response
	{
		return $this->connector->send(new ListAvailableCategories());
	}
}
