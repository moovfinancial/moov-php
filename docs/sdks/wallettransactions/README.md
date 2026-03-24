# WalletTransactions

## Overview

### Available Operations

* [get](#get) - Get details on a specific wallet transaction. 

Read our [wallet transactions guide](https://docs.moov.io/guides/sources/wallets/transactions/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.

## get

Get details on a specific wallet transaction. 

Read our [wallet transactions guide](https://docs.moov.io/guides/sources/wallets/transactions/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getWalletTransaction" method="get" path="/accounts/{accountID}/wallets/{walletID}/transactions/{transactionID}" -->
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



$response = $sdk->walletTransactions->get(
    accountID: 'f0b02d73-10dc-42e6-8030-fd78fcbc114f',
    walletID: '03db97f6-c308-4595-8f43-fd247f1bd3f2',
    transactionID: 'e0a32cf5-5758-49ba-83da-75bf02c9c6d7'

);

if ($response->walletTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `accountID`        | *string*           | :heavy_check_mark: | N/A                |
| `walletID`         | *string*           | :heavy_check_mark: | N/A                |
| `transactionID`    | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\GetWalletTransactionResponse](../../Models/Operations/GetWalletTransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |