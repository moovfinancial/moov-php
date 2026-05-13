# PaymentLinks

## Overview

### Available Operations

* [create](#create) - Create a payment link that allows an end user to make a payment on Moov's hosted payment link page.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [list](#list) - List all the payment links created under a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [get](#get) - Retrieve a payment link by code.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [update](#update) - Update a payment link.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [disable](#disable) - Disable a payment link.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [getQrCode](#getqrcode) - Retrieve the payment link encoded in a QR code. 

Use the `Accept` header to specify the format of the response. Supported formats are `application/json` and `image/png`.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

## create

Create a payment link that allows an end user to make a payment on Moov's hosted payment link page.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPaymentLink" method="post" path="/accounts/{accountID}/payment-links" -->
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

$createPaymentLink = new Components\CreatePaymentLink(
    partnerAccountID: 'd290f1ee-6c54-4b01-90e6-d701748f0851',
    merchantPaymentMethodID: '4c4e7f8e-81f4-4f3d-8f6f-6f6e7f8e4c4e',
    amount: new Components\Amount(
        currency: 'USD',
        value: 10000,
    ),
    display: new Components\PaymentLinkDisplayOptions(
        title: 'Example Payment Link',
        description: 'This is an example payment link.',
        callToAction: Components\CallToAction::Pay,
    ),
    customer: new Components\PaymentLinkCustomerOptions(
        requirePhone: true,
        tippingEnabled: true,
    ),
    payment: new Components\PaymentLinkPaymentDetails(
        allowedMethods: [
            Components\CollectionPaymentMethodType::CardPayment,
            Components\CollectionPaymentMethodType::AchDebitCollect,
        ],
    ),
    amountDetails: new Components\CreatePaymentLinkAmountDetails(
        tax: new Components\AmountDecimal(
            currency: 'USD',
            valueDecimal: '8.25',
        ),
    ),
);

$response = $sdk->paymentLinks->create(
    accountID: 'cc1d04a8-03b1-4600-b675-e6180d574074',
    createPaymentLink: $createPaymentLink

);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Example                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | The merchant account ID.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| `createPaymentLink`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             | [Components\CreatePaymentLink](../../Models/Components/CreatePaymentLink.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                    | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             | {<br/>"partnerAccountID": "d290f1ee-6c54-4b01-90e6-d701748f0851",<br/>"merchantPaymentMethodID": "4c4e7f8e-81f4-4f3d-8f6f-6f6e7f8e4c4e",<br/>"amount": {<br/>"currency": "USD",<br/>"value": 10000<br/>},<br/>"amountDetails": {<br/>"tax": {<br/>"currency": "USD",<br/>"valueDecimal": "8.25"<br/>}<br/>},<br/>"display": {<br/>"title": "Example Payment Link",<br/>"description": "This is an example payment link.",<br/>"callToAction": "pay"<br/>},<br/>"customer": {<br/>"requirePhone": true,<br/>"tippingEnabled": true<br/>},<br/>"payment": {<br/>"allowedMethods": [<br/>"card-payment",<br/>"ach-debit-collect"<br/>]<br/>}<br/>} |

### Response

**[?Operations\CreatePaymentLinkResponse](../../Models/Operations/CreatePaymentLinkResponse.md)**

### Errors

| Error Type                    | Status Code                   | Content Type                  |
| ----------------------------- | ----------------------------- | ----------------------------- |
| Errors\GenericError           | 400, 409                      | application/json              |
| Errors\CreatePaymentLinkError | 422                           | application/json              |
| Errors\APIException           | 4XX, 5XX                      | \*/\*                         |

## list

List all the payment links created under a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentLinks" method="get" path="/accounts/{accountID}/payment-links" -->
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



$response = $sdk->paymentLinks->list(
    accountID: 'd1039e6d-21ee-4a29-8adf-1dd2a6625a0d',
    skip: 60,
    count: 20

);

if ($response->paymentLinks !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                       | Type                                                                            | Required                                                                        | Description                                                                     | Example                                                                         |
| ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- |
| `accountID`                                                                     | *string*                                                                        | :heavy_check_mark:                                                              | The merchant account ID.                                                        |                                                                                 |
| `skip`                                                                          | *?int*                                                                          | :heavy_minus_sign:                                                              | N/A                                                                             | 60                                                                              |
| `count`                                                                         | *?int*                                                                          | :heavy_minus_sign:                                                              | N/A                                                                             | 20                                                                              |
| `types`                                                                         | array<[Components\PaymentLinkType](../../Models/Components/PaymentLinkType.md)> | :heavy_minus_sign:                                                              | A comma-separated list of payment link types to filter results.                 |                                                                                 |

### Response

**[?Operations\ListPaymentLinksResponse](../../Models/Operations/ListPaymentLinksResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## get

Retrieve a payment link by code.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentLink" method="get" path="/accounts/{accountID}/payment-links/{paymentLinkCode}" -->
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



$response = $sdk->paymentLinks->get(
    accountID: '323f95b1-3798-4203-8a73-5c8668a9226e',
    paymentLinkCode: 'uc7ZYKrMhi'

);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                | Type                     | Required                 | Description              | Example                  |
| ------------------------ | ------------------------ | ------------------------ | ------------------------ | ------------------------ |
| `accountID`              | *string*                 | :heavy_check_mark:       | The merchant account ID. |                          |
| `paymentLinkCode`        | *string*                 | :heavy_check_mark:       | N/A                      | uc7ZYKrMhi               |

### Response

**[?Operations\GetPaymentLinkResponse](../../Models/Operations/GetPaymentLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## update

Update a payment link.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePaymentLink" method="patch" path="/accounts/{accountID}/payment-links/{paymentLinkCode}" -->
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

$updatePaymentLink = new Components\UpdatePaymentLink(
    amount: new Components\AmountUpdate(
        currency: 'USD',
        value: 12099,
    ),
    customer: new Components\PaymentLinkCustomerOptions(
        requireAddress: true,
        requirePhone: true,
    ),
    amountDetails: new Components\UpdatePaymentLinkAmountDetails(
        tax: new Components\AmountDecimalUpdate(
            currency: 'USD',
            valueDecimal: '9.25',
        ),
    ),
);

$response = $sdk->paymentLinks->update(
    accountID: 'ddad6613-2350-446a-883b-f76abb2cd4ea',
    paymentLinkCode: 'uc7ZYKrMhi',
    updatePaymentLink: $updatePaymentLink

);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                    | Type                                                                                                                                                                                         | Required                                                                                                                                                                                     | Description                                                                                                                                                                                  | Example                                                                                                                                                                                      |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                  | *string*                                                                                                                                                                                     | :heavy_check_mark:                                                                                                                                                                           | The merchant account ID.                                                                                                                                                                     |                                                                                                                                                                                              |
| `paymentLinkCode`                                                                                                                                                                            | *string*                                                                                                                                                                                     | :heavy_check_mark:                                                                                                                                                                           | N/A                                                                                                                                                                                          | uc7ZYKrMhi                                                                                                                                                                                   |
| `updatePaymentLink`                                                                                                                                                                          | [Components\UpdatePaymentLink](../../Models/Components/UpdatePaymentLink.md)                                                                                                                 | :heavy_check_mark:                                                                                                                                                                           | N/A                                                                                                                                                                                          | {<br/>"amount": {<br/>"currency": "USD",<br/>"value": 12099<br/>},<br/>"amountDetails": {<br/>"tax": {<br/>"currency": "USD",<br/>"valueDecimal": "9.25"<br/>}<br/>},<br/>"customer": {<br/>"requirePhone": true,<br/>"requireAddress": true<br/>}<br/>} |

### Response

**[?Operations\UpdatePaymentLinkResponse](../../Models/Operations/UpdatePaymentLinkResponse.md)**

### Errors

| Error Type                    | Status Code                   | Content Type                  |
| ----------------------------- | ----------------------------- | ----------------------------- |
| Errors\GenericError           | 400, 409                      | application/json              |
| Errors\UpdatePaymentLinkError | 422                           | application/json              |
| Errors\APIException           | 4XX, 5XX                      | \*/\*                         |

## disable

Disable a payment link.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="disablePaymentLink" method="delete" path="/accounts/{accountID}/payment-links/{paymentLinkCode}" -->
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



$response = $sdk->paymentLinks->disable(
    accountID: 'c1cf000d-0dd9-4dec-bd5e-a88e135adf82',
    paymentLinkCode: 'uc7ZYKrMhi'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                | Type                     | Required                 | Description              | Example                  |
| ------------------------ | ------------------------ | ------------------------ | ------------------------ | ------------------------ |
| `accountID`              | *string*                 | :heavy_check_mark:       | The merchant account ID. |                          |
| `paymentLinkCode`        | *string*                 | :heavy_check_mark:       | N/A                      | uc7ZYKrMhi               |

### Response

**[?Operations\DisablePaymentLinkResponse](../../Models/Operations/DisablePaymentLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getQrCode

Retrieve the payment link encoded in a QR code. 

Use the `Accept` header to specify the format of the response. Supported formats are `application/json` and `image/png`.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentLinkQRCode" method="get" path="/accounts/{accountID}/payment-links/{paymentLinkCode}/qrcode" -->
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



$response = $sdk->paymentLinks->getQrCode(
    accountID: '2f01a42a-aa5a-424f-9f47-6f8999ed05dc',
    paymentLinkCode: 'uc7ZYKrMhi'

);

if ($response->qrCode !== null) {
    // handle response
}
```

### Parameters

| Parameter                | Type                     | Required                 | Description              | Example                  |
| ------------------------ | ------------------------ | ------------------------ | ------------------------ | ------------------------ |
| `accountID`              | *string*                 | :heavy_check_mark:       | The merchant account ID. |                          |
| `paymentLinkCode`        | *string*                 | :heavy_check_mark:       | N/A                      | uc7ZYKrMhi               |

### Response

**[?Operations\GetPaymentLinkQRCodeResponse](../../Models/Operations/GetPaymentLinkQRCodeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |