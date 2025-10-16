<?php

namespace Webkult\Api\Shirtigo\Resource;

use Saloon\Http\Response;
use Webkult\Api\Shirtigo\Requests\ProductApi\AddImageForProductColor;
use Webkult\Api\Shirtigo\Requests\ProductApi\CreateProduct;
use Webkult\Api\Shirtigo\Requests\ProductApi\DeleteProduct;
use Webkult\Api\Shirtigo\Requests\ProductApi\GetAllProducts;
use Webkult\Api\Shirtigo\Requests\ProductApi\GetProduct;
use Webkult\Api\Shirtigo\Requests\ProductApi\SynchronizeIntegrations;
use Webkult\Api\Shirtigo\Requests\ProductApi\SynchronizeOnlyProductImages;
use Webkult\Api\Shirtigo\Requests\ProductApi\UpdateProduct;
use Webkult\Api\Shirtigo\Requests\ProductApi\UpdateProductColors;
use Webkult\Api\Shirtigo\Requests\ProductApi\UpdateProductMockups;
use Webkult\Api\Shirtigo\Resource;

class ProductApi extends Resource
{
    /**
     * @param bool $finished Only return products where rendering is finished.
     * @param string $search A search term used to filter on the product and product group (collection) names.
     * @param string $projectId Return only products for a given campaign
     * @param string $designId Return only products which contain a processingarea where the design for the given design_id is used
     * @param int $baseProductId Return which are based on the given base product id
     * @param array $tags Filter for products containing a given tag
     */
    public function getAllProducts(
        ?bool $finished = null,
        ?string $search = null,
        ?string $projectId = null,
        ?string $designId = null,
        ?int $baseProductId = null,
        ?array $tags = null,
    ): Response {
        return $this->connector->send(new GetAllProducts($finished, $search, $projectId, $designId, $baseProductId, $tags));
    }


    /**
     * @param int $productId Numerical product identifier
     * @param bool $includeStock Include stock information for the product
     */
    public function getProduct(int $productId, bool $includeStock): Response
    {
        return $this->connector->send(new GetProduct($productId, $includeStock));
    }


    /**
     * @param int $productId ID of the product to update
     */
    public function updateProduct(int $productId): Response
    {
        return $this->connector->send(new UpdateProduct($productId));
    }


    /**
     * @param int $productId ID of the product to delete
     */
    public function deleteProduct(int $productId): Response
    {
        return $this->connector->send(new DeleteProduct($productId));
    }


    /**
     * @param int $productId Numerical product identifier
     */
    public function synchronizeIntegrations(int $productId): Response
    {
        return $this->connector->send(new SynchronizeIntegrations($productId));
    }


    /**
     * @param int $productId Numerical product identifier
     */
    public function synchronizeOnlyProductImages(int $productId): Response
    {
        return $this->connector->send(new SynchronizeOnlyProductImages($productId));
    }


    public function createProduct(): Response
    {
        return $this->connector->send(new CreateProduct());
    }


    public function updateProductColors(): Response
    {
        return $this->connector->send(new UpdateProductColors());
    }


    /**
     * @param int $productId ID of the product to add image to
     * @param string $url Url
     * @param string $style Style
     * @param int $procesingareaType Processing Area type
     * @param string $name Name
     * @param int $sortWeight Sort weight
     */
    public function addImageForProductColor(
        int $productId,
        string $url,
        string $style,
        int $procesingareaType,
        string $name,
        int $sortWeight,
    ): Response {
        return $this->connector->send(new AddImageForProductColor($productId, $url, $style, $procesingareaType, $name, $sortWeight));
    }


    /**
     * @param int $projectProductId The unique identifier of the project product
     */
    public function updateProductMockups(int $projectProductId): Response
    {
        return $this->connector->send(new UpdateProductMockups($projectProductId));
    }
}
