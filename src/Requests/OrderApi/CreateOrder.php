<?php

namespace Webkult\Api\Shirtigo\Requests\OrderApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create order
 *
 * Submit a new order for the currently authenticated user.
 * The user must have at least one registered
 * and active billing method.
 * A delivery address is required. The billing address is taken from the
 * account data.
 * The sender information is optional; if not provided, the current user information will
 * be used.
 * Our complete base product catalog can be downloaded as an XLSX file in the Cockpit
 * dashboard (Import -> Download -> Product Catalog).
 *
 * You can either:
 * 1. Order existing products using
 * their SKU (including warehouse products starting with "WV-")
 * 2. Order custom base products using
 * base_product_sku with custom processings
 */
class CreateOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/orders";
	}
}
