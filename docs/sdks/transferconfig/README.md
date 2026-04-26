# TransferConfig

## Overview

### Available Operations

* [create](#create) - Create a transfer config for an account.
* [get](#get) - Get the transfer config for an account.
* [update](#update) - Update the transfer config for an account.

## create

Create a transfer config for an account.

### Example Usage: Fixed amount tip config created

<!-- UsageSnippet language="php" operationID="createTransferConfig" method="post" path="/accounts/{accountID}/transfer-config" example="Fixed amount tip config created" -->
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

$createTransferConfig = new Components\CreateTransferConfig(
    tipPresets: new Components\CreateTipPresets(
        fixedAmountOptions: [
            new Components\AmountDecimal(
                currency: 'USD',
                valueDecimal: '12.987654321',
            ),
        ],
    ),
);

$response = $sdk->transferConfig->create(
    accountID: '<id>',
    createTransferConfig: $createTransferConfig

);

if ($response->transferConfig !== null) {
    // handle response
}
```
### Example Usage: Percentage tip config created

<!-- UsageSnippet language="php" operationID="createTransferConfig" method="post" path="/accounts/{accountID}/transfer-config" example="Percentage tip config created" -->
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

$createTransferConfig = new Components\CreateTransferConfig(
    tipPresets: new Components\CreateTipPresets(
        fixedAmountOptions: [
            new Components\AmountDecimal(
                currency: 'USD',
                valueDecimal: '12.987654321',
            ),
        ],
    ),
);

$response = $sdk->transferConfig->create(
    accountID: '<id>',
    createTransferConfig: $createTransferConfig

);

if ($response->transferConfig !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `accountID`                                                                        | *string*                                                                           | :heavy_check_mark:                                                                 | Your Moov account ID.                                                              |
| `createTransferConfig`                                                             | [Components\CreateTransferConfig](../../Models/Components/CreateTransferConfig.md) | :heavy_check_mark:                                                                 | N/A                                                                                |

### Response

**[?Operations\CreateTransferConfigResponse](../../Models/Operations/CreateTransferConfigResponse.md)**

### Errors

| Error Type                           | Status Code                          | Content Type                         |
| ------------------------------------ | ------------------------------------ | ------------------------------------ |
| Errors\GenericError                  | 400                                  | application/json                     |
| Errors\TransferConfigValidationError | 422                                  | application/json                     |
| Errors\APIException                  | 4XX, 5XX                             | \*/\*                                |

## get

Get the transfer config for an account.

### Example Usage: Fixed amount tip config

<!-- UsageSnippet language="php" operationID="getTransferConfig" method="get" path="/accounts/{accountID}/transfer-config" example="Fixed amount tip config" -->
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



$response = $sdk->transferConfig->get(
    accountID: '<id>'
);

if ($response->transferConfig !== null) {
    // handle response
}
```
### Example Usage: Percentage tip config

<!-- UsageSnippet language="php" operationID="getTransferConfig" method="get" path="/accounts/{accountID}/transfer-config" example="Percentage tip config" -->
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



$response = $sdk->transferConfig->get(
    accountID: '<id>'
);

if ($response->transferConfig !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `accountID`        | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\GetTransferConfigResponse](../../Models/Operations/GetTransferConfigResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## update

Update the transfer config for an account.

### Example Usage: Updated fixed amount tip config

<!-- UsageSnippet language="php" operationID="updateTransferConfig" method="put" path="/accounts/{accountID}/transfer-config" example="Updated fixed amount tip config" -->
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

$putTransferConfig = new Components\PutTransferConfig(
    tipPresets: new Components\PutTipPresets(
        fixedAmountOptions: [
            new Components\AmountDecimal(
                currency: 'USD',
                valueDecimal: '12.987654321',
            ),
        ],
    ),
);

$response = $sdk->transferConfig->update(
    accountID: '<id>',
    putTransferConfig: $putTransferConfig

);

if ($response->transferConfig !== null) {
    // handle response
}
```
### Example Usage: Updated percentage tip config

<!-- UsageSnippet language="php" operationID="updateTransferConfig" method="put" path="/accounts/{accountID}/transfer-config" example="Updated percentage tip config" -->
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

$putTransferConfig = new Components\PutTransferConfig(
    tipPresets: new Components\PutTipPresets(
        fixedAmountOptions: [
            new Components\AmountDecimal(
                currency: 'USD',
                valueDecimal: '12.987654321',
            ),
        ],
    ),
);

$response = $sdk->transferConfig->update(
    accountID: '<id>',
    putTransferConfig: $putTransferConfig

);

if ($response->transferConfig !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `accountID`                                                                  | *string*                                                                     | :heavy_check_mark:                                                           | N/A                                                                          |
| `putTransferConfig`                                                          | [Components\PutTransferConfig](../../Models/Components/PutTransferConfig.md) | :heavy_check_mark:                                                           | N/A                                                                          |

### Response

**[?Operations\UpdateTransferConfigResponse](../../Models/Operations/UpdateTransferConfigResponse.md)**

### Errors

| Error Type                           | Status Code                          | Content Type                         |
| ------------------------------------ | ------------------------------------ | ------------------------------------ |
| Errors\GenericError                  | 400                                  | application/json                     |
| Errors\TransferConfigValidationError | 422                                  | application/json                     |
| Errors\APIException                  | 4XX, 5XX                             | \*/\*                                |