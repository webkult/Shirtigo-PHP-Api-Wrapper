<?php

namespace Webkult\Api\Shirtigo\Data;

readonly class ProductImage
{
    public function __construct(
        public string $url,
        public ?string $style = null,
        public ?int $processingareaType = null,
        public ?string $name = null,
        public ?int $sortWeight = null,
    ) {
    }
}