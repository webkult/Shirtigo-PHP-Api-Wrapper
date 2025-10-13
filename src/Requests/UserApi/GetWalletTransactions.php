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
	 * @param null|mixed $items Number of items per page
	 * @param null|mixed $search Search term
	 * @param null|mixed $sortCol
	 * @param null|mixed $sortDir
	 */
	public function __construct(
		protected mixed $items = null,
		protected mixed $search = null,
		protected mixed $sortCol = null,
		protected mixed $sortDir = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['items' => $this->items, 'search' => $this->search, 'sort_col' => $this->sortCol, 'sort_dir' => $this->sortDir]);
	}
}
