# Branding
(*branding*)

## Overview

### Available Operations

* [getBrand](#getbrand) - Gets the brand properties for the specified account.
* [postBrand](#postbrand) - Creates the brand properties for the specified account.
* [updateBrand](#updatebrand) - Updates the brand properties for the specified account.

## getBrand

Gets the brand properties for the specified account.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetBrandSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->branding->getBrand(
    security: $requestSecurity,
    accountID: '07eb5173-1869-4649-9aa6-f399787a2751',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->brand !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `security`                                                                 | [Operations\GetBrandSecurity](../../Models/Operations/GetBrandSecurity.md) | :heavy_check_mark:                                                         | The security requirements to use for the request.                          |
| `accountID`                                                                | *string*                                                                   | :heavy_check_mark:                                                         | N/A                                                                        |
| `xMoovVersion`                                                             | [?Components\Versions](../../Models/Components/Versions.md)                | :heavy_minus_sign:                                                         | Specify an API version.                                                    |

### Response

**[?Operations\GetBrandResponse](../../Models/Operations/GetBrandResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## postBrand

Creates the brand properties for the specified account.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$brand = new Components\Brand(
    colors: new Components\Colors(
        dark: new Components\BrandColor(
            accent: '#111111',
        ),
        light: new Components\BrandColor(
            accent: '#111111',
        ),
    ),
);
$requestSecurity = new Operations\PostBrandSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->branding->postBrand(
    security: $requestSecurity,
    accountID: 'e0ae5cc2-d23b-44c7-b778-06f786dadb4b',
    brand: $brand,
    xMoovVersion: Components\Versions::Latest

);

if ($response->brand !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `security`                                                                   | [Operations\PostBrandSecurity](../../Models/Operations/PostBrandSecurity.md) | :heavy_check_mark:                                                           | The security requirements to use for the request.                            |
| `accountID`                                                                  | *string*                                                                     | :heavy_check_mark:                                                           | N/A                                                                          |
| `brand`                                                                      | [Components\Brand](../../Models/Components/Brand.md)                         | :heavy_check_mark:                                                           | N/A                                                                          |
| `xMoovVersion`                                                               | [?Components\Versions](../../Models/Components/Versions.md)                  | :heavy_minus_sign:                                                           | Specify an API version.                                                      |

### Response

**[?Operations\PostBrandResponse](../../Models/Operations/PostBrandResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\GenericError         | 400, 409                    | application/json            |
| Errors\BrandValidationError | 422                         | application/json            |
| Errors\APIException         | 4XX, 5XX                    | \*/\*                       |

## updateBrand

Updates the brand properties for the specified account.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$updateBrand = new Components\UpdateBrand();
$requestSecurity = new Operations\UpdateBrandSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->branding->updateBrand(
    security: $requestSecurity,
    accountID: '6c1f5632-7f37-4b3d-861e-10e31b8853de',
    updateBrand: $updateBrand,
    xMoovVersion: Components\Versions::V20240000

);

if ($response->brand !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `security`                                                                       | [Operations\UpdateBrandSecurity](../../Models/Operations/UpdateBrandSecurity.md) | :heavy_check_mark:                                                               | The security requirements to use for the request.                                |
| `accountID`                                                                      | *string*                                                                         | :heavy_check_mark:                                                               | N/A                                                                              |
| `updateBrand`                                                                    | [Components\UpdateBrand](../../Models/Components/UpdateBrand.md)                 | :heavy_check_mark:                                                               | N/A                                                                              |
| `xMoovVersion`                                                                   | [?Components\Versions](../../Models/Components/Versions.md)                      | :heavy_minus_sign:                                                               | Specify an API version.                                                          |

### Response

**[?Operations\UpdateBrandResponse](../../Models/Operations/UpdateBrandResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\GenericError         | 400, 409                    | application/json            |
| Errors\BrandValidationError | 422                         | application/json            |
| Errors\APIException         | 4XX, 5XX                    | \*/\*                       |