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
	 * @param null|int $page Page number
	 * @param null|int $items Items per page
	 * @param null|string $search Search query
	 * @param null|string $sortCol Property to order by
	 * @param null|string $sortDir Order direction
	 * @param null|int $period Days to show (default: all)
	 * @param null|string $action Action to filter for (default: none)
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $items = null,
		protected ?string $search = null,
		protected ?string $sortCol = null,
		protected ?string $sortDir = null,
		protected ?int $period = null,
		protected ?string $action = null,
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
