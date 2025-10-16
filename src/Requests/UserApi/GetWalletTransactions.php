<?php

namespace Webkult\Api\Shirtigo\Requests\UserApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getWalletTransactions
 */
class GetWalletTransactions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/wallet/transactions";
	}


	/**
	 * @param null|int $items Number of items per page
	 * @param null|string $search Search term
	 * @param null|string $sortCol
	 * @param null|string $sortDir
	 */
	public function __construct(
		protected ?int $items = null,
		protected ?string $search = null,
		protected ?string $sortCol = null,
		protected ?string $sortDir = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['items' => $this->items, 'search' => $this->search, 'sort_col' => $this->sortCol, 'sort_dir' => $this->sortDir]);
	}
}
