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
     * @param mixed $finished Only return products where rendering is finished.
     * @param mixed $search A search term used to filter on the product and product group (collection) names.
     * @param mixed $projectId Return only products for a given campaign
     * @param mixed $designId Return only products which contain a processingarea where the design for the given design_id is used
     * @param mixed $baseProductId Return which are based on the given base product id
     * @param mixed $tags Filter for products containing a given tag
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
     * @param mixed $productId Numerical product identifier
     * @param mixed $includeStock Include stock information for the product
     */
    public function getProduct(mixed $productId, mixed $includeStock): Response
    {
        return $this->connector->send(new GetProduct($productId, $includeStock));
    }


    /**
     * @param mixed $productId ID of the product to update
     */
    public function updateProduct(mixed $productId): Response
    {
        return $this->connector->send(new UpdateProduct($productId));
    }


    /**
     * @param mixed $productId ID of the product to delete
     */
    public function deleteProduct(mixed $productId): Response
    {
        return $this->connector->send(new DeleteProduct($productId));
    }


    /**
     * @param mixed $productId Numerical product identifier
     */
    public function synchronizeIntegrations(mixed $productId): Response
    {
        return $this->connector->send(new SynchronizeIntegrations($productId));
    }


    /**
     * @param mixed $productId Numerical product identifier
     */
    public function synchronizeOnlyProductImages(mixed $productId): Response
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
     * @param mixed $productId ID of the product to add image to
     * @param mixed $url Url
     * @param mixed $style Style
     * @param mixed $procesingareaType Processing Area type
     * @param mixed $name Name
     * @param mixed $sortWeight Sort weight
     */
    public function addImageForProductColor(
        mixed $productId,
        mixed $url,
        mixed $style,
        mixed $procesingareaType,
        mixed $name,
        mixed $sortWeight,
    ): Response {
        return $this->connector->send(new AddImageForProductColor($productId, $url, $style, $procesingareaType, $name, $sortWeight));
    }


    /**
     * @param mixed $projectProductId The unique identifier of the project product
     */
    public function updateProductMockups(mixed $projectProductId): Response
    {
        return $this->connector->send(new UpdateProductMockups($projectProductId));
    }
}
