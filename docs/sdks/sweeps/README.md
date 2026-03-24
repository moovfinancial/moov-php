# Sweeps

## Overview

### Available Operations

* [createConfig](#createconfig) - Create a sweep config for a wallet.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.write` scope.
* [listConfigs](#listconfigs) - List sweep configs associated with an account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.
* [getConfig](#getconfig) - Get a sweep config associated with a wallet.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.
* [updateConfig](#updateconfig) - Update settings on a sweep config.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/wallets.write` scope.
* [list](#list) - List sweeps associated with a wallet.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.
* [get](#get) - Get details on a specific sweep.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.

## createConfig

Create a sweep config for a wallet.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="createSweepConfig" method="post" path="/accounts/{accountID}/sweep-configs" -->
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

$createSweepConfig = new Components\CreateSweepConfig(
    walletID: '01234567-89ab-cdef-0123-456789abcdef',
    status: Components\SweepConfigStatus::Enabled,
    pushPaymentMethodID: '01234567-89ab-cdef-0123-456789abcdef',
    pullPaymentMethodID: '01234567-89ab-cdef-0123-456789abcdef',
);

$response = $sdk->sweeps->createConfig(
    accountID: 'cd0ec32e-bd84-418c-90d3-fffbc5465f8b',
    createSweepConfig: $createSweepConfig

);

if ($response->sweepConfig !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `accountID`                                                                  | *string*                                                                     | :heavy_check_mark:                                                           | N/A                                                                          |
| `createSweepConfig`                                                          | [Components\CreateSweepConfig](../../Models/Components/CreateSweepConfig.md) | :heavy_check_mark:                                                           | N/A                                                                          |

### Response

**[?Operations\CreateSweepConfigResponse](../../Models/Operations/CreateSweepConfigResponse.md)**

### Errors

| Error Type                    | Status Code                   | Content Type                  |
| ----------------------------- | ----------------------------- | ----------------------------- |
| Errors\GenericError           | 400, 409                      | application/json              |
| Errors\CreateSweepConfigError | 422                           | application/json              |
| Errors\APIException           | 4XX, 5XX                      | \*/\*                         |

## listConfigs

List sweep configs associated with an account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="listSweepConfigs" method="get" path="/accounts/{accountID}/sweep-configs" -->
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



$response = $sdk->sweeps->listConfigs(
    accountID: 'ed67e4c8-03d3-4d88-ba38-fcd87de45a92'
);

if ($response->sweepConfigs !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `accountID`        | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\ListSweepConfigsResponse](../../Models/Operations/ListSweepConfigsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getConfig

Get a sweep config associated with a wallet.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getSweepConfig" method="get" path="/accounts/{accountID}/sweep-configs/{sweepConfigID}" -->
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



$response = $sdk->sweeps->getConfig(
    accountID: 'ae1c2e76-3195-4fc8-b922-b7af6dcf1aad',
    sweepConfigID: 'bfddff28-5291-4d9b-a0f8-22a0895e8486'

);

if ($response->sweepConfig !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `accountID`        | *string*           | :heavy_check_mark: | N/A                |
| `sweepConfigID`    | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\GetSweepConfigResponse](../../Models/Operations/GetSweepConfigResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## updateConfig

Update settings on a sweep config.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/wallets.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateSweepConfig" method="patch" path="/accounts/{accountID}/sweep-configs/{sweepConfigID}" -->
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

$patchSweepConfig = new Components\PatchSweepConfig(
    status: Components\Status::Disabled,
);

$response = $sdk->sweeps->updateConfig(
    accountID: 'c16d0264-3e93-4d13-b8d8-6e8e98122631',
    sweepConfigID: 'f7943244-882b-4a3a-837a-a58418358399',
    patchSweepConfig: $patchSweepConfig

);

if ($response->sweepConfig !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `accountID`                                                                | *string*                                                                   | :heavy_check_mark:                                                         | N/A                                                                        |
| `sweepConfigID`                                                            | *string*                                                                   | :heavy_check_mark:                                                         | N/A                                                                        |
| `patchSweepConfig`                                                         | [Components\PatchSweepConfig](../../Models/Components/PatchSweepConfig.md) | :heavy_check_mark:                                                         | N/A                                                                        |

### Response

**[?Operations\UpdateSweepConfigResponse](../../Models/Operations/UpdateSweepConfigResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\GenericError          | 400, 409                     | application/json             |
| Errors\PatchSweepConfigError | 422                          | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |

## list

List sweeps associated with a wallet.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="listSweeps" method="get" path="/accounts/{accountID}/wallets/{walletID}/sweeps" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Models\Operations;

$sdk = MoovPhp\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Operations\ListSweepsRequest(
    accountID: 'a227b50c-035d-4b7f-932c-a4b7e02aaf5c',
    walletID: 'd01e5b34-b207-4a5c-b249-6e049be6a841',
    skip: 60,
    count: 20,
);

$response = $sdk->sweeps->list(
    request: $request
);

if ($response->sweeps !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\ListSweepsRequest](../../Models/Operations/ListSweepsRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\ListSweepsResponse](../../Models/Operations/ListSweepsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## get

Get details on a specific sweep.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.

### Example Usage: Accrued sweep

<!-- UsageSnippet language="php" operationID="getSweep" method="get" path="/accounts/{accountID}/wallets/{walletID}/sweeps/{sweepID}" example="Accrued sweep" -->
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



$response = $sdk->sweeps->get(
    accountID: 'ca23b553-56f5-4cce-9f4b-bd7043749aa5',
    walletID: 'db4f5a49-2f21-46bf-8723-3ecf930091f6',
    sweepID: '0d89f082-405d-49ed-9a20-e47891c11c8a'

);

if ($response->sweep !== null) {
    // handle response
}
```
### Example Usage: Paid sweep

<!-- UsageSnippet language="php" operationID="getSweep" method="get" path="/accounts/{accountID}/wallets/{walletID}/sweeps/{sweepID}" example="Paid sweep" -->
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



$response = $sdk->sweeps->get(
    accountID: '481bc941-34a2-4c2a-a4f8-feaa9a25d630',
    walletID: 'e63a4638-ad67-44fb-9b59-ed7311023602',
    sweepID: 'c88c9731-06c2-4b4a-a7d2-34c8b936d9ae'

);

if ($response->sweep !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `accountID`        | *string*           | :heavy_check_mark: | N/A                |
| `walletID`         | *string*           | :heavy_check_mark: | N/A                |
| `sweepID`          | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\GetSweepResponse](../../Models/Operations/GetSweepResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |