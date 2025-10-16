# Shirtigo PHP API Wrapper

A modern PHP wrapper for the Shirtigo Cockpit API, built with [Saloon](https://saloon.dev/) for clean, maintainable HTTP client interactions.

## Features

- 🚀 **Modern PHP 8.0+** - Built with the latest PHP features and PSR-12 standards
- 🔧 **Saloon Integration** - Leverages Saloon's powerful HTTP client capabilities
- 🏗️ **Clean Architecture** - Well-structured, maintainable code following SOLID principles
- 📚 **Comprehensive API Coverage** - Full support for all Shirtigo Cockpit API endpoints
- 🔐 **Authentication Support** - Both API Key and OAuth2 authentication methods
- 🎯 **Type Safety** - Strong typing throughout the codebase

## Installation

Install via Composer:

```bash
composer require webkult/shirtigo-php-api-wrapper
```

## Quick Start

### Basic Usage

```php
<?php

use Webkult\Api\Shirtigo\WebkultApiShirtigo;

// Initialize the API client
$api = new WebkultApiShirtigo();

// Set your API key
$api->withTokenAuth('your-api-key-here');

// Access different API resources
$catalogApi = $api->catalogApi();
$orderApi = $api->orderApi();
$designApi = $api->designApi();
```

### OAuth2 Authentication

```php
<?php

use Webkult\Api\Shirtigo\WebkultApiShirtigo;

$api = new WebkultApiShirtigo();

// OAuth2 flow
$oauth = $api->oauth();
$accessToken = $oauth->requestAccessToken([
    'client_id' => 'your-client-id',
    'client_secret' => 'your-client-secret',
    'grant_type' => 'client_credentials'
]);

// Use the access token
$api->withTokenAuth($accessToken);
```

## Available API Resources

The wrapper provides access to all Shirtigo Cockpit API endpoints through organized resource classes:

### Core Resources

- **`catalogApi()`** - Browse base products and categories
- **`orderApi()`** - Manage orders and order operations
- **`productApi()`** - Handle customized products
- **`designApi()`** - Create and manage designs
- **`projectApi()`** - Organize products into projects

### Additional Resources

- **`brandingApi()`** - Custom branding and logos
- **`imageApi()`** - Image processing and mockups
- **`integrationApi()`** - Third-party integrations
- **`userApi()`** - User management
- **`warehousingApi()`** - Inventory management
- **`webhookApi()`** - Webhook configuration
- **`other()`** - Additional utilities and statistics

## Usage Examples

### Browse Catalog

```php
<?php

$catalogApi = $api->catalogApi();

// Get all base products
$products = $catalogApi->getAllBaseProducts();

// Get a specific product
$product = $catalogApi->getBaseProduct('product-id');

// List available categories
$categories = $catalogApi->listAvailableCategories();
```

### Manage Orders

```php
<?php

$orderApi = $api->orderApi();

// Create a new order
$order = $orderApi->createOrder([
    'products' => [
        [
            'product_id' => 'base-product-id',
            'quantity' => 1,
            'customizations' => [
                // Customization options
            ]
        ]
    ],
    'shipping_address' => [
        // Address details
    ]
]);

// Get order details
$orderDetails = $orderApi->getOrder($order['id']);

// Calculate order price
$price = $orderApi->calculatePrice([
    'products' => $order['products']
]);
```

### Work with Designs

```php
<?php

$designApi = $api->designApi();

// Create design from file
$design = $designApi->createDesignFromFile([
    'file' => '/path/to/design.png',
    'name' => 'My Design'
]);

// Create design from URL
$design = $designApi->createDesignFromUrl([
    'url' => 'https://example.com/design.png',
    'name' => 'Design from URL'
]);

// Get all designs
$designs = $designApi->getAllDesigns();

// Update design
$designApi->updateDesign($design['id'], [
    'name' => 'Updated Design Name'
]);
```

### Image Processing

```php
<?php

$imageApi = $api->imageApi();

// Generate mockup images
$mockups = $imageApi->generateMockupImages([
    'design_id' => 'design-id',
    'product_id' => 'product-id',
    'variations' => ['front', 'back']
]);

// Remove background from image
$processedImage = $imageApi->removeBackground([
    'image_url' => 'https://example.com/image.png'
]);

// Upscale design
$upscaledDesign = $imageApi->upscaleDesign([
    'design_id' => 'design-id',
    'scale_factor' => 2
]);
```

## Error Handling

The wrapper uses Saloon's built-in error handling mechanisms:

```php
<?php

try {
    $products = $catalogApi->getAllBaseProducts();
} catch (\Saloon\Exceptions\RequestException $e) {
    // Handle HTTP errors
    echo "Request failed: " . $e->getMessage();
} catch (\Exception $e) {
    // Handle other errors
    echo "Error: " . $e->getMessage();
}
```

## Configuration

### Base URL

The API client is configured to use the official Shirtigo Cockpit API endpoint:

```
https://cockpit.shirtigo.com/api/
```

### Headers

The client automatically sets the following headers:
- `Accept: application/json`
- `Authentication: Bearer [your-token]`

## Requirements

- PHP 8.0 or higher
- Composer
- Saloon 3.0+

## Development

### Code Quality

This package follows strict coding standards:

- **PSR-12** - PHP coding standard
- **SOLID Principles** - Clean architecture design
- **Type Declarations** - Full type safety
- **Modern PHP** - Uses PHP 8.0+ features

### Testing

```bash
# Run tests
composer test

# Run code quality checks
composer check
```

### Code Style

```bash
# Fix code style issues
composer fix
```

## License

This project is licensed under the GNU General Public License v3.0. See the [LICENSE](LICENSE) file for details.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## Support

For support and questions:

- **Author**: Benjamin Klein
- **Email**: b.klein@webkult.de
- **GitHub**: [webkult/shirtigo-php-api-wrapper](https://github.com/webkult/shirtigo-php-api-wrapper)

## Related Projects

- [Shirtigo API Documentation](https://github.com/shirtigo)
- [Saloon HTTP Client](https://saloon.dev/)

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for a list of changes and version history.