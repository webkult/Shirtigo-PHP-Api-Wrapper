<?php

namespace Webkult\Api\Shirtigo\Requests\ProductApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update product colors
 *
 * Use this endpoint to update an existing product. The product can be customized on the baseProduct
 * color level similar to the create endpoint.
 * Each processing can be associated to one or many
 * colorIds. Multiple processings can be added.
 * Instead of the complete processing information (design,
 * width, position info) it is possible to pass a baseProduct color id as a referenceColorId.
 * In this
 * case all processing information is created based on the existing processings for the reference
 * color.
 */
class UpdateProductColors extends Request
{
	public $productId;
    protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/customized-product/{$this->productId}";
	}
}
