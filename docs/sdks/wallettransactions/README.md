# WalletTransactions
(*walletTransactions*)

## Overview

### Available Operations

* [get](#get) - Get details on a specific wallet transaction. 

Read our [wallet transactions guide](https://docs.moov.io/guides/sources/wallets/transactions/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.
* [list](#list) - List all the transactions associated with a particular Moov wallet. 

Read our [wallet transactions guide](https://docs.moov.io/guides/sources/wallets/transactions/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.

## get

Get details on a specific wallet transaction. 

Read our [wallet transactions guide](https://docs.moov.io/guides/sources/wallets/transactions/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;

$sdk = OpenAPI\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();



$response = $sdk->walletTransactions->get(
    accountID: 'b888f774-3e7c-4135-a18c-6b985523c4bc',
    walletID: 'e50f7622-81da-484b-9c66-1c8a99c6b71b',
    transactionID: 'ecd62b8f-7112-4aaf-90ab-4e43b4cca371',
    xMoovVersion: 'v2024.01'

);

if ($response->walletTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `walletID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `transactionID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\GetWalletTransactionResponse](../../Models/Operations/GetWalletTransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## list

List all the transactions associated with a particular Moov wallet. 

Read our [wallet transactions guide](https://docs.moov.io/guides/sources/wallets/transactions/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Operations\ListWalletTransactionsRequest(
    accountID: 'c8a232aa-0b11-4b8a-b005-71e9e705d0e6',
    walletID: '21e27667-18d6-4d46-812e-0aee1b9ddf12',
    skip: 60,
    count: 20,
);

$response = $sdk->walletTransactions->list(
    request: $request
);

if ($response->walletTransactions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListWalletTransactionsRequest](../../Models/Operations/ListWalletTransactionsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListWalletTransactionsResponse](../../Models/Operations/ListWalletTransactionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |