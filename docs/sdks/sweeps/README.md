# Sweeps
(*sweeps*)

## Overview

### Available Operations

* [createSweepConfig](#createsweepconfig) - Create a sweep config for a wallet.
* [getSweep](#getsweep) - Get details on a specific sweep.
* [getSweepConfig](#getsweepconfig) - Get a sweep config associated with a wallet.
* [listSweepConfigs](#listsweepconfigs) - List sweep configs associated with an account.
* [listSweeps](#listsweeps) - List sweeps associated with a wallet.
* [patchSweepConfig](#patchsweepconfig) - Update settings on a sweep config.

## createSweepConfig

Create a sweep config for a wallet.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$createSweepConfig = new Components\CreateSweepConfig(
    walletID: '3a373e85-2777-40fe-aacd-52d6fc641d76',
    status: Components\SweepConfigStatus::Enabled,
    pushPaymentMethodID: '7700de6d-52ba-448a-bc5e-4fb3ac0c36dc',
    pullPaymentMethodID: 'ff2b2192-12d9-44d2-a1d0-896a3f051bc1',
);
$requestSecurity = new Operations\CreateSweepConfigSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->sweeps->createSweepConfig(
    security: $requestSecurity,
    accountID: '2fab36c9-7372-4a02-ae9b-91527690a55e',
    createSweepConfig: $createSweepConfig,
    xMoovVersion: Components\Versions::V20240000

);

if ($response->sweepConfig !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `security`                                                                                   | [Operations\CreateSweepConfigSecurity](../../Models/Operations/CreateSweepConfigSecurity.md) | :heavy_check_mark:                                                                           | The security requirements to use for the request.                                            |
| `accountID`                                                                                  | *string*                                                                                     | :heavy_check_mark:                                                                           | N/A                                                                                          |
| `createSweepConfig`                                                                          | [Components\CreateSweepConfig](../../Models/Components/CreateSweepConfig.md)                 | :heavy_check_mark:                                                                           | N/A                                                                                          |
| `xMoovVersion`                                                                               | [?Components\Versions](../../Models/Components/Versions.md)                                  | :heavy_minus_sign:                                                                           | Specify an API version.                                                                      |

### Response

**[?Operations\CreateSweepConfigResponse](../../Models/Operations/CreateSweepConfigResponse.md)**

### Errors

| Error Type                    | Status Code                   | Content Type                  |
| ----------------------------- | ----------------------------- | ----------------------------- |
| Errors\GenericError           | 400, 409                      | application/json              |
| Errors\CreateSweepConfigError | 422                           | application/json              |
| Errors\APIException           | 4XX, 5XX                      | \*/\*                         |

## getSweep

Get details on a specific sweep.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetSweepSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->sweeps->getSweep(
    security: $requestSecurity,
    accountID: 'adb697e6-2888-48b9-b2c5-f2c3d487add5',
    walletID: '9f00e2b3-9dfb-48a3-9a25-a08e80f9cf36',
    sweepID: 'a5324f55-fbec-4323-94e4-c512608bb175',
    xMoovVersion: Components\Versions::Latest

);

if ($response->sweep !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `security`                                                                 | [Operations\GetSweepSecurity](../../Models/Operations/GetSweepSecurity.md) | :heavy_check_mark:                                                         | The security requirements to use for the request.                          |
| `accountID`                                                                | *string*                                                                   | :heavy_check_mark:                                                         | N/A                                                                        |
| `walletID`                                                                 | *string*                                                                   | :heavy_check_mark:                                                         | N/A                                                                        |
| `sweepID`                                                                  | *string*                                                                   | :heavy_check_mark:                                                         | N/A                                                                        |
| `xMoovVersion`                                                             | [?Components\Versions](../../Models/Components/Versions.md)                | :heavy_minus_sign:                                                         | Specify an API version.                                                    |

### Response

**[?Operations\GetSweepResponse](../../Models/Operations/GetSweepResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getSweepConfig

Get a sweep config associated with a wallet.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetSweepConfigSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->sweeps->getSweepConfig(
    security: $requestSecurity,
    accountID: '1f4428ca-3d11-441b-93d5-3fada6a5db01',
    sweepConfigID: 'acef9550-4b7b-4675-807b-71755d182b2f',
    xMoovVersion: Components\Versions::Latest

);

if ($response->sweepConfig !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `security`                                                                             | [Operations\GetSweepConfigSecurity](../../Models/Operations/GetSweepConfigSecurity.md) | :heavy_check_mark:                                                                     | The security requirements to use for the request.                                      |
| `accountID`                                                                            | *string*                                                                               | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `sweepConfigID`                                                                        | *string*                                                                               | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `xMoovVersion`                                                                         | [?Components\Versions](../../Models/Components/Versions.md)                            | :heavy_minus_sign:                                                                     | Specify an API version.                                                                |

### Response

**[?Operations\GetSweepConfigResponse](../../Models/Operations/GetSweepConfigResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listSweepConfigs

List sweep configs associated with an account.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListSweepConfigsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->sweeps->listSweepConfigs(
    security: $requestSecurity,
    accountID: 'b06d7726-4020-4fef-9035-75779c0fc48c',
    xMoovVersion: Components\Versions::Latest

);

if ($response->sweepConfigs !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `security`                                                                                 | [Operations\ListSweepConfigsSecurity](../../Models/Operations/ListSweepConfigsSecurity.md) | :heavy_check_mark:                                                                         | The security requirements to use for the request.                                          |
| `accountID`                                                                                | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `xMoovVersion`                                                                             | [?Components\Versions](../../Models/Components/Versions.md)                                | :heavy_minus_sign:                                                                         | Specify an API version.                                                                    |

### Response

**[?Operations\ListSweepConfigsResponse](../../Models/Operations/ListSweepConfigsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listSweeps

List sweeps associated with a wallet.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$request = new Operations\ListSweepsRequest(
    accountID: '0fe45272-ee0d-401f-a10e-21e396676598',
    walletID: '5f738f67-1989-4589-beb1-3d2f5c53a821',
    skip: 60,
    count: 20,
);
$requestSecurity = new Operations\ListSweepsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->sweeps->listSweeps(
    request: $request,
    security: $requestSecurity
);

if ($response->sweeps !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\ListSweepsRequest](../../Models/Operations/ListSweepsRequest.md)   | :heavy_check_mark:                                                             | The request object to use for the request.                                     |
| `security`                                                                     | [Operations\ListSweepsSecurity](../../Models/Operations/ListSweepsSecurity.md) | :heavy_check_mark:                                                             | The security requirements to use for the request.                              |

### Response

**[?Operations\ListSweepsResponse](../../Models/Operations/ListSweepsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## patchSweepConfig

Update settings on a sweep config.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$patchSweepConfig = new Components\PatchSweepConfig();
$requestSecurity = new Operations\PatchSweepConfigSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->sweeps->patchSweepConfig(
    security: $requestSecurity,
    accountID: 'c0ee091a-5b72-49c9-9c8b-7cb99d7f9309',
    sweepConfigID: 'c1f1c60c-cb13-4bc6-891c-f34d96682f06',
    patchSweepConfig: $patchSweepConfig,
    xMoovVersion: Components\Versions::V20240000

);

if ($response->sweepConfig !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `security`                                                                                 | [Operations\PatchSweepConfigSecurity](../../Models/Operations/PatchSweepConfigSecurity.md) | :heavy_check_mark:                                                                         | The security requirements to use for the request.                                          |
| `accountID`                                                                                | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `sweepConfigID`                                                                            | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `patchSweepConfig`                                                                         | [Components\PatchSweepConfig](../../Models/Components/PatchSweepConfig.md)                 | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `xMoovVersion`                                                                             | [?Components\Versions](../../Models/Components/Versions.md)                                | :heavy_minus_sign:                                                                         | Specify an API version.                                                                    |

### Response

**[?Operations\PatchSweepConfigResponse](../../Models/Operations/PatchSweepConfigResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\GenericError          | 400, 409                     | application/json             |
| Errors\PatchSweepConfigError | 422                          | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |