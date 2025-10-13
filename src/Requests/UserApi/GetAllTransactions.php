<?php

namespace Webkult\Api\Shirtigo\Requests\UserApi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all transactions
 *
 * Retrieve all accounting transactions issued by the currently authenticated user.
 * The result will be
 * paginated, meta information is included in the response.
 */
class GetAllTransactions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/transactions";
	}


	/**
	 * @param null|mixed $page Page number
	 * @param null|mixed $items Items per page
	 * @param null|mixed $search Search query
	 * @param null|mixed $sortCol Property to order by
	 * @param null|mixed $sortDir Order direction
	 * @param null|mixed $period Days to show (default: all)
	 * @param null|mixed $action Action to filter for (default: none)
	 */
	public function __construct(
		protected mixed $page = null,
		protected mixed $items = null,
		protected mixed $search = null,
		protected mixed $sortCol = null,
		protected mixed $sortDir = null,
		protected mixed $period = null,
		protected mixed $action = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'items' => $this->items,
			'search' => $this->search,
			'sort_col' => $this->sortCol,
			'sort_dir' => $this->sortDir,
			'period' => $this->period,
			'action' => $this->action,
		]);
	}
}
