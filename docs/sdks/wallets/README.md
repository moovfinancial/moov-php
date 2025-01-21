# Wallets
(*wallets*)

## Overview

### Available Operations

* [getWallet](#getwallet) - Get information on a specific wallet (e.g., the available balance). Read our [Moov wallets guide](https://docs.moov.io/guides/sources/wallets/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/wallets.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listWallets](#listwallets) - List the wallets associated with a Moov account. Read our [Moov wallets guide](https://docs.moov.io/guides/sources/wallets/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/wallets.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

## getWallet

Get information on a specific wallet (e.g., the available balance). Read our [Moov wallets guide](https://docs.moov.io/guides/sources/wallets/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/wallets.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetWalletSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->wallets->getWallet(
    security: $requestSecurity,
    accountID: '499bec36-0099-43cb-884f-620887342259',
    walletID: 'bc779af6-b7d5-464a-ad1f-f6476fa72706',
    xMoovVersion: Components\Versions::Latest

);

if ($response->wallet !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `security`                                                                   | [Operations\GetWalletSecurity](../../Models/Operations/GetWalletSecurity.md) | :heavy_check_mark:                                                           | The security requirements to use for the request.                            |
| `accountID`                                                                  | *string*                                                                     | :heavy_check_mark:                                                           | N/A                                                                          |
| `walletID`                                                                   | *string*                                                                     | :heavy_check_mark:                                                           | N/A                                                                          |
| `xMoovVersion`                                                               | [?Components\Versions](../../Models/Components/Versions.md)                  | :heavy_minus_sign:                                                           | Specify an API version.                                                      |

### Response

**[?Operations\GetWalletResponse](../../Models/Operations/GetWalletResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listWallets

List the wallets associated with a Moov account. Read our [Moov wallets guide](https://docs.moov.io/guides/sources/wallets/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/wallets.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListWalletsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->wallets->listWallets(
    security: $requestSecurity,
    accountID: '60acf390-dc7f-4510-9b9b-ec968d375f0c',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->wallets !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `security`                                                                       | [Operations\ListWalletsSecurity](../../Models/Operations/ListWalletsSecurity.md) | :heavy_check_mark:                                                               | The security requirements to use for the request.                                |
| `accountID`                                                                      | *string*                                                                         | :heavy_check_mark:                                                               | N/A                                                                              |
| `xMoovVersion`                                                                   | [?Components\Versions](../../Models/Components/Versions.md)                      | :heavy_minus_sign:                                                               | Specify an API version.                                                          |

### Response

**[?Operations\ListWalletsResponse](../../Models/Operations/ListWalletsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |