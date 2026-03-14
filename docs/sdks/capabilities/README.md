# Capabilities

## Overview

### Available Operations

* [list](#list) - Retrieve all the capabilities an account has requested.

Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/capabilities.read` scope.
* [request](#request) - Request capabilities for a specific account. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/capabilities.write` scope.
* [get](#get) - Retrieve a specific capability that an account has requested. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/capabilities.read` scope.
* [disable](#disable) - Disable a specific capability that an account has requested. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

  To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/capabilities.write` scope.

## list

Retrieve all the capabilities an account has requested.

Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/capabilities.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCapabilities" method="get" path="/accounts/{accountID}/capabilities" -->
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



$response = $sdk->capabilities->list(
    accountID: '1a50ab1c-1714-49e7-a016-cea17b33511a'
);

if ($response->capabilities !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `accountID`        | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\ListCapabilitiesResponse](../../Models/Operations/ListCapabilitiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## request

Request capabilities for a specific account. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/capabilities.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="requestCapabilities" method="post" path="/accounts/{accountID}/capabilities" -->
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

$addCapabilities = new Components\AddCapabilities(
    capabilities: [
        Components\CapabilityID::CollectFunds,
    ],
);

$response = $sdk->capabilities->request(
    accountID: '0de140d5-cc78-4eeb-ab00-1f51aaf6c814',
    addCapabilities: $addCapabilities

);

if ($response->capabilities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `accountID`                                                              | *string*                                                                 | :heavy_check_mark:                                                       | N/A                                                                      |
| `addCapabilities`                                                        | [Components\AddCapabilities](../../Models/Components/AddCapabilities.md) | :heavy_check_mark:                                                       | N/A                                                                      |

### Response

**[?Operations\RequestCapabilitiesResponse](../../Models/Operations/RequestCapabilitiesResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\GenericError         | 400, 409                    | application/json            |
| Errors\AddCapabilitiesError | 422                         | application/json            |
| Errors\APIException         | 4XX, 5XX                    | \*/\*                       |

## get

Retrieve a specific capability that an account has requested. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/capabilities.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCapability" method="get" path="/accounts/{accountID}/capabilities/{capabilityID}" -->
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



$response = $sdk->capabilities->get(
    accountID: 'c1697ea6-c984-4ba1-9b81-93e5e18660af',
    capabilityID: Components\CapabilityID::SendFunds

);

if ($response->capability !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                       | Type                                                                                                                                                                                                                                                                                                                                            | Required                                                                                                                                                                                                                                                                                                                                        | Description                                                                                                                                                                                                                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                     | *string*                                                                                                                                                                                                                                                                                                                                        | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                              | N/A                                                                                                                                                                                                                                                                                                                                             |
| `capabilityID`                                                                                                                                                                                                                                                                                                                                  | [Components\CapabilityID](../../Models/Components/CapabilityID.md)                                                                                                                                                                                                                                                                              | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                              | Moov account capabilities.<br/><br/>The `production-app`, `platform.production-app`, and / or `platform.wallet-transfers` capabilities might appear in your list. These are read-only capabilities that Moov requests and uses for account verification purposes. These capabilities remains active with your account and require no additional action. |

### Response

**[?Operations\GetCapabilityResponse](../../Models/Operations/GetCapabilityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## disable

Disable a specific capability that an account has requested. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

  To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/capabilities.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="disableCapability" method="delete" path="/accounts/{accountID}/capabilities/{capabilityID}" -->
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



$response = $sdk->capabilities->disable(
    accountID: '2be80c4e-d409-49ea-8a8a-76dfa4006d69',
    capabilityID: Components\CapabilityID::Transfers

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                       | Type                                                                                                                                                                                                                                                                                                                                            | Required                                                                                                                                                                                                                                                                                                                                        | Description                                                                                                                                                                                                                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                     | *string*                                                                                                                                                                                                                                                                                                                                        | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                              | N/A                                                                                                                                                                                                                                                                                                                                             |
| `capabilityID`                                                                                                                                                                                                                                                                                                                                  | [Components\CapabilityID](../../Models/Components/CapabilityID.md)                                                                                                                                                                                                                                                                              | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                              | Moov account capabilities.<br/><br/>The `production-app`, `platform.production-app`, and / or `platform.wallet-transfers` capabilities might appear in your list. These are read-only capabilities that Moov requests and uses for account verification purposes. These capabilities remains active with your account and require no additional action. |

### Response

**[?Operations\DisableCapabilityResponse](../../Models/Operations/DisableCapabilityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |