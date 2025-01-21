# Capabilities
(*capabilities*)

## Overview

### Available Operations

* [addCapabilities](#addcapabilities) - Request capabilities for a specific account. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/capabilities.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [disableCapability](#disablecapability) - Disable a specific capability that an account has requested. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/capabilities.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getCapability](#getcapability) - Retrieve a specific capability that an account has requested. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/capabilities.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listCapabilities](#listcapabilities) - Retrieve all the capabilities an account has requested.

Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

## addCapabilities

Request capabilities for a specific account. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/capabilities.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$addCapabilities = new Components\AddCapabilities(
    capabilities: [
        Components\CapabilityID::Transfers,
    ],
);
$requestSecurity = new Operations\AddCapabilitiesSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->capabilities->addCapabilities(
    security: $requestSecurity,
    accountID: 'f48b82c3-158f-4a65-9070-bd22afd441ea',
    addCapabilities: $addCapabilities,
    xMoovVersion: Components\Versions::V20240000

);

if ($response->capabilities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `security`                                                                               | [Operations\AddCapabilitiesSecurity](../../Models/Operations/AddCapabilitiesSecurity.md) | :heavy_check_mark:                                                                       | The security requirements to use for the request.                                        |
| `accountID`                                                                              | *string*                                                                                 | :heavy_check_mark:                                                                       | N/A                                                                                      |
| `addCapabilities`                                                                        | [Components\AddCapabilities](../../Models/Components/AddCapabilities.md)                 | :heavy_check_mark:                                                                       | N/A                                                                                      |
| `xMoovVersion`                                                                           | [?Components\Versions](../../Models/Components/Versions.md)                              | :heavy_minus_sign:                                                                       | Specify an API version.                                                                  |

### Response

**[?Operations\AddCapabilitiesResponse](../../Models/Operations/AddCapabilitiesResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\GenericError         | 400, 409                    | application/json            |
| Errors\AddCapabilitiesError | 422                         | application/json            |
| Errors\APIException         | 4XX, 5XX                    | \*/\*                       |

## disableCapability

Disable a specific capability that an account has requested. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/capabilities.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\DisableCapabilitySecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->capabilities->disableCapability(
    security: $requestSecurity,
    accountID: 'c57b48d7-4182-4632-a345-eeed5a742b0d',
    capabilityID: Components\CapabilityID::CardIssuing,
    xMoovVersion: Components\Versions::Latest

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `security`                                                                                   | [Operations\DisableCapabilitySecurity](../../Models/Operations/DisableCapabilitySecurity.md) | :heavy_check_mark:                                                                           | The security requirements to use for the request.                                            |
| `accountID`                                                                                  | *string*                                                                                     | :heavy_check_mark:                                                                           | N/A                                                                                          |
| `capabilityID`                                                                               | [Components\CapabilityID](../../Models/Components/CapabilityID.md)                           | :heavy_check_mark:                                                                           | Moov account capabilities.                                                                   |
| `xMoovVersion`                                                                               | [?Components\Versions](../../Models/Components/Versions.md)                                  | :heavy_minus_sign:                                                                           | Specify an API version.                                                                      |

### Response

**[?Operations\DisableCapabilityResponse](../../Models/Operations/DisableCapabilityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getCapability

Retrieve a specific capability that an account has requested. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/capabilities.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetCapabilitySecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->capabilities->getCapability(
    security: $requestSecurity,
    accountID: '15fbc94d-721f-44a3-b5fb-77f58657305f',
    capabilityID: Components\CapabilityID::Transfers,
    xMoovVersion: Components\Versions::Latest

);

if ($response->capability !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `security`                                                                           | [Operations\GetCapabilitySecurity](../../Models/Operations/GetCapabilitySecurity.md) | :heavy_check_mark:                                                                   | The security requirements to use for the request.                                    |
| `accountID`                                                                          | *string*                                                                             | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `capabilityID`                                                                       | [Components\CapabilityID](../../Models/Components/CapabilityID.md)                   | :heavy_check_mark:                                                                   | Moov account capabilities.                                                           |
| `xMoovVersion`                                                                       | [?Components\Versions](../../Models/Components/Versions.md)                          | :heavy_minus_sign:                                                                   | Specify an API version.                                                              |

### Response

**[?Operations\GetCapabilityResponse](../../Models/Operations/GetCapabilityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listCapabilities

Retrieve all the capabilities an account has requested.

Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListCapabilitiesSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->capabilities->listCapabilities(
    security: $requestSecurity,
    accountID: 'c236a258-0a99-455d-9fbb-2312bc028cd2',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->capabilities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `security`                                                                                 | [Operations\ListCapabilitiesSecurity](../../Models/Operations/ListCapabilitiesSecurity.md) | :heavy_check_mark:                                                                         | The security requirements to use for the request.                                          |
| `accountID`                                                                                | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `xMoovVersion`                                                                             | [?Components\Versions](../../Models/Components/Versions.md)                                | :heavy_minus_sign:                                                                         | Specify an API version.                                                                    |

### Response

**[?Operations\ListCapabilitiesResponse](../../Models/Operations/ListCapabilitiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |