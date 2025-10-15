<?php

namespace Webkult\Api\Shirtigo\Data;

readonly class Processing
{
    public function __construct(
        public string $designId,
        public int $processingareaTypeId,
        public float $width,
        public float $offsetTop,
        public float $offsetCenter,
        public ?array $colorIds = null,
    ) {
    }
}