# Branding

## Overview

### Available Operations

* [create](#create) - Create brand properties for the specified account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/branding.write` scope.
* [upsert](#upsert) - Create or replace brand properties for the specified account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/branding.write` scope.
* [get](#get) - Get brand properties for the specified account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/branding.read` scope.

## create

Create brand properties for the specified account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/branding.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="createBrand" method="post" path="/accounts/{accountID}/branding" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;

$sdk = MoovPhp\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$brandProperties = new Components\BrandProperties(
    colors: new Components\BrandColors(
        dark: new Components\BrandColor(
            accent: '#111111',
        ),
        light: new Components\BrandColor(
            accent: '#111111',
        ),
    ),
);

$response = $sdk->branding->create(
    accountID: '0a6ae927-b52b-4ef4-86d0-288f27479817',
    brandProperties: $brandProperties

);

if ($response->brandProperties !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `accountID`                                                              | *string*                                                                 | :heavy_check_mark:                                                       | N/A                                                                      |
| `brandProperties`                                                        | [Components\BrandProperties](../../Models/Components/BrandProperties.md) | :heavy_check_mark:                                                       | N/A                                                                      |

### Response

**[?Operations\CreateBrandResponse](../../Models/Operations/CreateBrandResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\GenericError         | 400, 409                    | application/json            |
| Errors\BrandValidationError | 422                         | application/json            |
| Errors\APIException         | 4XX, 5XX                    | \*/\*                       |

## upsert

Create or replace brand properties for the specified account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/branding.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="upsertBrand" method="put" path="/accounts/{accountID}/branding" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;

$sdk = MoovPhp\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$brandProperties = new Components\BrandProperties(
    colors: new Components\BrandColors(
        dark: new Components\BrandColor(
            accent: '#111111',
        ),
        light: new Components\BrandColor(
            accent: '#111111',
        ),
    ),
);

$response = $sdk->branding->upsert(
    accountID: '0cd408b1-a57d-477b-825b-12331c2ed00a',
    brandProperties: $brandProperties

);

if ($response->brandProperties !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `accountID`                                                              | *string*                                                                 | :heavy_check_mark:                                                       | N/A                                                                      |
| `brandProperties`                                                        | [Components\BrandProperties](../../Models/Components/BrandProperties.md) | :heavy_check_mark:                                                       | N/A                                                                      |

### Response

**[?Operations\UpsertBrandResponse](../../Models/Operations/UpsertBrandResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\GenericError         | 400, 409                    | application/json            |
| Errors\BrandValidationError | 422                         | application/json            |
| Errors\APIException         | 4XX, 5XX                    | \*/\*                       |

## get

Get brand properties for the specified account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/branding.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getBrand" method="get" path="/accounts/{accountID}/branding" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;

$sdk = MoovPhp\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();



$response = $sdk->branding->get(
    accountID: '8a4ec43e-d45f-481d-a291-683cb221e3cc'
);

if ($response->brandProperties !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `accountID`        | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\GetBrandResponse](../../Models/Operations/GetBrandResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |