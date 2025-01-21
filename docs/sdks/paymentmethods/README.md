# PaymentMethods
(*paymentMethods*)

## Overview

### Available Operations

* [getPaymentMethod](#getpaymentmethod) - Get the specified payment method associated with a Moov account. Read our [payment methods guide](https://docs.moov.io/guides/money-movement/payment-methods/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/payment-methods.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listPaymentMethods](#listpaymentmethods) - Retrieve a list of payment methods associated with a Moov account. Read our [payment methods guide](https://docs.moov.io/guides/money-movement/payment-methods/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/payment-methods.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

## getPaymentMethod

Get the specified payment method associated with a Moov account. Read our [payment methods guide](https://docs.moov.io/guides/money-movement/payment-methods/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/payment-methods.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetPaymentMethodSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->paymentMethods->getPaymentMethod(
    security: $requestSecurity,
    accountID: 'dec1e9d0-b795-4449-824a-127444ae0d75',
    paymentMethodID: 'e4f6d969-b108-405e-b95a-d71e917fb15e',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->paymentMethod !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `security`                                                                                 | [Operations\GetPaymentMethodSecurity](../../Models/Operations/GetPaymentMethodSecurity.md) | :heavy_check_mark:                                                                         | The security requirements to use for the request.                                          |
| `accountID`                                                                                | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `paymentMethodID`                                                                          | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `xMoovVersion`                                                                             | [?Components\Versions](../../Models/Components/Versions.md)                                | :heavy_minus_sign:                                                                         | Specify an API version.                                                                    |

### Response

**[?Operations\GetPaymentMethodResponse](../../Models/Operations/GetPaymentMethodResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listPaymentMethods

Retrieve a list of payment methods associated with a Moov account. Read our [payment methods guide](https://docs.moov.io/guides/money-movement/payment-methods/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/payment-methods.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListPaymentMethodsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->paymentMethods->listPaymentMethods(
    security: $requestSecurity,
    accountID: '062d9768-0375-4e19-a48f-00ae75251086',
    xMoovVersion: Components\Versions::Latest,
    sourceID: 'db3ee6bf-8ab5-4880-956c-18f73e61983c',
    paymentMethodType: Components\PaymentMethodType::AchCreditSameDay

);

if ($response->paymentMethods !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                   | Type                                                                                                                                                                                                                                                                                        | Required                                                                                                                                                                                                                                                                                    | Description                                                                                                                                                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                                                                                                                                                                                  | [Operations\ListPaymentMethodsSecurity](../../Models/Operations/ListPaymentMethodsSecurity.md)                                                                                                                                                                                              | :heavy_check_mark:                                                                                                                                                                                                                                                                          | The security requirements to use for the request.                                                                                                                                                                                                                                           |
| `accountID`                                                                                                                                                                                                                                                                                 | *string*                                                                                                                                                                                                                                                                                    | :heavy_check_mark:                                                                                                                                                                                                                                                                          | N/A                                                                                                                                                                                                                                                                                         |
| `xMoovVersion`                                                                                                                                                                                                                                                                              | [?Components\Versions](../../Models/Components/Versions.md)                                                                                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                                                                                                          | Specify an API version.                                                                                                                                                                                                                                                                     |
| `sourceID`                                                                                                                                                                                                                                                                                  | *?string*                                                                                                                                                                                                                                                                                   | :heavy_minus_sign:                                                                                                                                                                                                                                                                          | Optional parameter to filter the account's payment methods by source ID. A source ID can be a [walletID](https://docs.moov.io/api/sources/wallets/list/), [cardID](https://docs.moov.io/api/sources/cards/list/), or [bankAccountID](https://docs.moov.io/api/sources/bank-accounts/list/). |
| `paymentMethodType`                                                                                                                                                                                                                                                                         | [?Components\PaymentMethodType](../../Models/Components/PaymentMethodType.md)                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                                                          | Optional parameter to filter the account's payment methods by payment method type.                                                                                                                                                                                                          |

### Response

**[?Operations\ListPaymentMethodsResponse](../../Models/Operations/ListPaymentMethodsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |