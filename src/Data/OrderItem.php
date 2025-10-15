<?php

namespace Webkult\Api\Shirtigo\Data;

readonly class OrderItem
{
    public function __construct(
        public string $sku,
        public int $quantity,
        public ?string $sizeId = null,
        public ?string $colorId = null,
        public ?string $baseProductSku = null,
        public ?array $processings = null,
    ) {
    }
}