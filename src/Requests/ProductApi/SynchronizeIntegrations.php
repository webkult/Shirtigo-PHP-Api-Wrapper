<?php

namespace Webkult\Api\Shirtigo\Requests\ProductApi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Synchronize integrations
 *
 * Trigger synchronization for all requested integrations for this product.
 * The synchronization is
 * performed in the background. Its status can be observed by querying the
 * active_integration_syncs
 * field in the product response.
 */
class SynchronizeIntegrations extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/products/{$this->productId}/sync";
	}


	/**
	 * @param int $productId Numerical product identifier
	 */
	public function __construct(
		protected int $productId,
	) {
	}
}
