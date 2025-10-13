<?php

namespace Webkult\Api\Shirtigo;

use Saloon\Http\Connector;

class Resource
{
	public function __construct(
		protected Connector $connector,
	) {
	}
}
