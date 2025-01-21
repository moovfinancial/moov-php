# Adjustments
(*adjustments*)

## Overview

### Available Operations

* [getAdjustment](#getadjustment) - Retrieve a specific adjustment associated with a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/wallets.read` scope.
* [listAdjustments](#listadjustments) - List adjustments associated with a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/wallets.read` scope.

## getAdjustment

Retrieve a specific adjustment associated with a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/wallets.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetAdjustmentSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->adjustments->getAdjustment(
    security: $requestSecurity,
    accountID: '7c43cb4c-5944-40f9-9bef-7925774b06b4',
    adjustmentID: '244e9b18-1d97-4344-8a69-abf3c48078bc',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->adjustment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `security`                                                                           | [Operations\GetAdjustmentSecurity](../../Models/Operations/GetAdjustmentSecurity.md) | :heavy_check_mark:                                                                   | The security requirements to use for the request.                                    |
| `accountID`                                                                          | *string*                                                                             | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `adjustmentID`                                                                       | *string*                                                                             | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `xMoovVersion`                                                                       | [?Components\Versions](../../Models/Components/Versions.md)                          | :heavy_minus_sign:                                                                   | Specify an API version.                                                              |

### Response

**[?Operations\GetAdjustmentResponse](../../Models/Operations/GetAdjustmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listAdjustments

List adjustments associated with a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/wallets.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListAdjustmentsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->adjustments->listAdjustments(
    security: $requestSecurity,
    accountID: '27396e19-5d2d-4fba-876d-423579b4f37e',
    xMoovVersion: Components\Versions::Latest,
    walletID: '96b97f3f-0d80-4009-b359-c402faa37813'

);

if ($response->adjustments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `security`                                                                               | [Operations\ListAdjustmentsSecurity](../../Models/Operations/ListAdjustmentsSecurity.md) | :heavy_check_mark:                                                                       | The security requirements to use for the request.                                        |
| `accountID`                                                                              | *string*                                                                                 | :heavy_check_mark:                                                                       | N/A                                                                                      |
| `xMoovVersion`                                                                           | [?Components\Versions](../../Models/Components/Versions.md)                              | :heavy_minus_sign:                                                                       | Specify an API version.                                                                  |
| `walletID`                                                                               | *?string*                                                                                | :heavy_minus_sign:                                                                       | A wallet ID to filter adjustments by.                                                    |

### Response

**[?Operations\ListAdjustmentsResponse](../../Models/Operations/ListAdjustmentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |