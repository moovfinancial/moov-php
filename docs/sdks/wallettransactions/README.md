# WalletTransactions
(*walletTransactions*)

## Overview

### Available Operations

* [getWalletTransaction](#getwallettransaction) - Get details on a specific wallet transaction. Read our [wallet transactions guide](https://docs.moov.io/guides/sources/wallets/transactions/) to learn more.

To use this endpoint from a browser, you'll need to specify the `/accounts/{accountID}/wallets.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listWalletTransactions](#listwallettransactions) - List all the transactions associated with a particular Moov wallet. Read our [wallet transactions guide](https://docs.moov.io/guides/sources/wallets/transactions/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/wallets.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

## getWalletTransaction

Get details on a specific wallet transaction. Read our [wallet transactions guide](https://docs.moov.io/guides/sources/wallets/transactions/) to learn more.

To use this endpoint from a browser, you'll need to specify the `/accounts/{accountID}/wallets.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetWalletTransactionSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->walletTransactions->getWalletTransaction(
    security: $requestSecurity,
    accountID: 'a5040923-7566-4f60-af63-86465493f971',
    walletID: 'a49156a6-65e8-4c24-a71a-eca54c2c3855',
    transactionID: '8b5c4f2a-2bb8-4145-b0ea-69212338b5a1',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->walletTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `security`                                                                                         | [Operations\GetWalletTransactionSecurity](../../Models/Operations/GetWalletTransactionSecurity.md) | :heavy_check_mark:                                                                                 | The security requirements to use for the request.                                                  |
| `accountID`                                                                                        | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `walletID`                                                                                         | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `transactionID`                                                                                    | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `xMoovVersion`                                                                                     | [?Components\Versions](../../Models/Components/Versions.md)                                        | :heavy_minus_sign:                                                                                 | Specify an API version.                                                                            |

### Response

**[?Operations\GetWalletTransactionResponse](../../Models/Operations/GetWalletTransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listWalletTransactions

List all the transactions associated with a particular Moov wallet. Read our [wallet transactions guide](https://docs.moov.io/guides/sources/wallets/transactions/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/wallets.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$request = new Operations\ListWalletTransactionsRequest(
    accountID: '2d736837-1618-4c4a-9e51-aa9dd394b389',
    walletID: '99432d06-8ac3-4c17-afc1-a12a328564ac',
    skip: 60,
    count: 20,
);
$requestSecurity = new Operations\ListWalletTransactionsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->walletTransactions->listWalletTransactions(
    request: $request,
    security: $requestSecurity
);

if ($response->walletTransactions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListWalletTransactionsRequest](../../Models/Operations/ListWalletTransactionsRequest.md)   | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |
| `security`                                                                                             | [Operations\ListWalletTransactionsSecurity](../../Models/Operations/ListWalletTransactionsSecurity.md) | :heavy_check_mark:                                                                                     | The security requirements to use for the request.                                                      |

### Response

**[?Operations\ListWalletTransactionsResponse](../../Models/Operations/ListWalletTransactionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |