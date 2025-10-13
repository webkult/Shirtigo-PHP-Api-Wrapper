<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Upload Merchant Invoice
 *
 * For orders shipped to non-eu states in some cases a customs invoice needs to be added. You can
 * either submit it as an order document with the POST /orders call or react to the webhook after order
 * was placed and use this endpoint.
 */
class UploadMerchantInvoice extends Request implements HasBody
{
	public $orderReference;
    use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/orders/{$this->orderReference}/merchant-invoice";
	}
}
