<?php

namespace Webkult\Api\Shirtigo\Data;

readonly class Address
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public string $street,
        public string $houseNumber,
        public string $zipCode,
        public string $city,
        public string $country,
        public ?string $company = null,
        public ?string $additionalInfo = null,
    ) {
    }
}