# PaymentLinks
(*paymentLinks*)

## Overview

### Available Operations

* [createPaymentLink](#createpaymentlink) - Create a payment link that allows an end user to make a payment on Moov's hosted payment link page.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.
* [disablePaymentLink](#disablepaymentlink) - Disable a payment link.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.
* [getPaymentLink](#getpaymentlink) - Retrieve a payment link by code.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.read` scope.
* [getPaymentLinkQRCode](#getpaymentlinkqrcode) - Retrieve the payment link encoded in a QR code. 

Use the `Accept` header to specify the format of the response. Supported formats are `application/json` and `image/png`.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.
* [listPaymentLinks](#listpaymentlinks) - List all the payment links created under a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.read` scope.
* [updatePaymentLink](#updatepaymentlink) - Update a payment link.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.

## createPaymentLink

Create a payment link that allows an end user to make a payment on Moov's hosted payment link page.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$createPaymentLink = new Components\CreatePaymentLink(
    partnerAccountID: 'd0d0cf2f-fdd4-483d-957a-f12f86d9640f',
    merchantPaymentMethodID: '0d21fbfd-baa7-4dcc-ac61-71c5130ab376',
    amount: new Components\Amount(
        currency: 'Iranian Rial',
        value: 335397,
    ),
    display: new Components\PaymentLinkDisplayOptions(
        title: '<value>',
        description: 'platypus resource lest ugh',
        callToAction: Components\CallToAction::Book,
    ),
    payment: new Components\PaymentLinkPaymentDetails(
        allowedMethods: [
            Components\CollectionPaymentMethodType::CardPayment,
        ],
        cardDetails: new Components\CardPaymentDetails(
            dynamicDescriptor: 'WhlBdy *Yoga 11-12',
        ),
        achDetails: new Components\ACHPaymentDetails(
            companyEntryDescription: 'Gym dues',
            originatingCompanyName: 'Whole Body Fit',
        ),
    ),
    payout: new Components\PaymentLinkPayoutDetails(
        allowedMethods: [
            Components\DisbursementPaymentMethodType::AchCreditStandard,
        ],
        recipient: new Components\PayoutRecipient(
            email: 'jordan.lee@classbooker.dev',
        ),
    ),
);
$requestSecurity = new Operations\CreatePaymentLinkSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->paymentLinks->createPaymentLink(
    security: $requestSecurity,
    accountID: '540831ce-9894-44b7-ad2f-990b0ab3c903',
    createPaymentLink: $createPaymentLink,
    xMoovVersion: Components\Versions::V20240000

);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `security`                                                                                   | [Operations\CreatePaymentLinkSecurity](../../Models/Operations/CreatePaymentLinkSecurity.md) | :heavy_check_mark:                                                                           | The security requirements to use for the request.                                            |
| `accountID`                                                                                  | *string*                                                                                     | :heavy_check_mark:                                                                           | N/A                                                                                          |
| `createPaymentLink`                                                                          | [Components\CreatePaymentLink](../../Models/Components/CreatePaymentLink.md)                 | :heavy_check_mark:                                                                           | N/A                                                                                          |
| `xMoovVersion`                                                                               | [?Components\Versions](../../Models/Components/Versions.md)                                  | :heavy_minus_sign:                                                                           | Specify an API version.                                                                      |

### Response

**[?Operations\CreatePaymentLinkResponse](../../Models/Operations/CreatePaymentLinkResponse.md)**

### Errors

| Error Type                    | Status Code                   | Content Type                  |
| ----------------------------- | ----------------------------- | ----------------------------- |
| Errors\GenericError           | 400, 409                      | application/json              |
| Errors\CreatePaymentLinkError | 422                           | application/json              |
| Errors\APIException           | 4XX, 5XX                      | \*/\*                         |

## disablePaymentLink

Disable a payment link.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\DisablePaymentLinkSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->paymentLinks->disablePaymentLink(
    security: $requestSecurity,
    accountID: 'edc2775b-a4a3-4513-8870-3bdf4aaaed8e',
    paymentLinkCode: 'uc7ZYKrMhi',
    xMoovVersion: Components\Versions::Latest

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    | Example                                                                                        |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `security`                                                                                     | [Operations\DisablePaymentLinkSecurity](../../Models/Operations/DisablePaymentLinkSecurity.md) | :heavy_check_mark:                                                                             | The security requirements to use for the request.                                              |                                                                                                |
| `accountID`                                                                                    | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |                                                                                                |
| `paymentLinkCode`                                                                              | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            | uc7ZYKrMhi                                                                                     |
| `xMoovVersion`                                                                                 | [?Components\Versions](../../Models/Components/Versions.md)                                    | :heavy_minus_sign:                                                                             | Specify an API version.                                                                        |                                                                                                |

### Response

**[?Operations\DisablePaymentLinkResponse](../../Models/Operations/DisablePaymentLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getPaymentLink

Retrieve a payment link by code.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetPaymentLinkSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->paymentLinks->getPaymentLink(
    security: $requestSecurity,
    accountID: '34a1451d-384e-4fff-a7ce-e90c2bb61969',
    paymentLinkCode: 'uc7ZYKrMhi',
    xMoovVersion: Components\Versions::Latest

);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            | Example                                                                                |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `security`                                                                             | [Operations\GetPaymentLinkSecurity](../../Models/Operations/GetPaymentLinkSecurity.md) | :heavy_check_mark:                                                                     | The security requirements to use for the request.                                      |                                                                                        |
| `accountID`                                                                            | *string*                                                                               | :heavy_check_mark:                                                                     | N/A                                                                                    |                                                                                        |
| `paymentLinkCode`                                                                      | *string*                                                                               | :heavy_check_mark:                                                                     | N/A                                                                                    | uc7ZYKrMhi                                                                             |
| `xMoovVersion`                                                                         | [?Components\Versions](../../Models/Components/Versions.md)                            | :heavy_minus_sign:                                                                     | Specify an API version.                                                                |                                                                                        |

### Response

**[?Operations\GetPaymentLinkResponse](../../Models/Operations/GetPaymentLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getPaymentLinkQRCode

Retrieve the payment link encoded in a QR code. 

Use the `Accept` header to specify the format of the response. Supported formats are `application/json` and `image/png`.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetPaymentLinkQRCodeSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->paymentLinks->getPaymentLinkQRCode(
    security: $requestSecurity,
    accountID: '248ffcf9-c53a-4e8e-a8b8-8c5014496a79',
    paymentLinkCode: 'uc7ZYKrMhi',
    xMoovVersion: Components\Versions::Latest

);

if ($response->qrCode !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        | Example                                                                                            |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `security`                                                                                         | [Operations\GetPaymentLinkQRCodeSecurity](../../Models/Operations/GetPaymentLinkQRCodeSecurity.md) | :heavy_check_mark:                                                                                 | The security requirements to use for the request.                                                  |                                                                                                    |
| `accountID`                                                                                        | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |                                                                                                    |
| `paymentLinkCode`                                                                                  | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                | uc7ZYKrMhi                                                                                         |
| `xMoovVersion`                                                                                     | [?Components\Versions](../../Models/Components/Versions.md)                                        | :heavy_minus_sign:                                                                                 | Specify an API version.                                                                            |                                                                                                    |

### Response

**[?Operations\GetPaymentLinkQRCodeResponse](../../Models/Operations/GetPaymentLinkQRCodeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listPaymentLinks

List all the payment links created under a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListPaymentLinksSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->paymentLinks->listPaymentLinks(
    security: $requestSecurity,
    accountID: '9f728868-b3c8-409c-9aa0-282a13d8ddc8',
    xMoovVersion: Components\Versions::Latest

);

if ($response->paymentLinks !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `security`                                                                                 | [Operations\ListPaymentLinksSecurity](../../Models/Operations/ListPaymentLinksSecurity.md) | :heavy_check_mark:                                                                         | The security requirements to use for the request.                                          |
| `accountID`                                                                                | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `xMoovVersion`                                                                             | [?Components\Versions](../../Models/Components/Versions.md)                                | :heavy_minus_sign:                                                                         | Specify an API version.                                                                    |

### Response

**[?Operations\ListPaymentLinksResponse](../../Models/Operations/ListPaymentLinksResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## updatePaymentLink

Update a payment link.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$updatePaymentLink = new Components\UpdatePaymentLink(
    payment: new Components\PaymentLinkPaymentDetailsUpdate(
        cardDetails: new Components\CardPaymentDetails(
            dynamicDescriptor: 'WhlBdy *Yoga 11-12',
        ),
        achDetails: new Components\ACHPaymentDetails(
            companyEntryDescription: 'Gym dues',
            originatingCompanyName: 'Whole Body Fit',
        ),
    ),
    payout: new Components\PaymentLinkPayoutDetailsUpdate(
        recipient: new Components\PayoutRecipientUpdate(
            email: 'jordan.lee@classbooker.dev',
        ),
    ),
);
$requestSecurity = new Operations\UpdatePaymentLinkSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->paymentLinks->updatePaymentLink(
    security: $requestSecurity,
    accountID: '94fe6aeb-a005-4850-b45d-bb0fa580425d',
    paymentLinkCode: 'uc7ZYKrMhi',
    updatePaymentLink: $updatePaymentLink,
    xMoovVersion: Components\Versions::V20240000

);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  | Example                                                                                      |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `security`                                                                                   | [Operations\UpdatePaymentLinkSecurity](../../Models/Operations/UpdatePaymentLinkSecurity.md) | :heavy_check_mark:                                                                           | The security requirements to use for the request.                                            |                                                                                              |
| `accountID`                                                                                  | *string*                                                                                     | :heavy_check_mark:                                                                           | N/A                                                                                          |                                                                                              |
| `paymentLinkCode`                                                                            | *string*                                                                                     | :heavy_check_mark:                                                                           | N/A                                                                                          | uc7ZYKrMhi                                                                                   |
| `updatePaymentLink`                                                                          | [Components\UpdatePaymentLink](../../Models/Components/UpdatePaymentLink.md)                 | :heavy_check_mark:                                                                           | N/A                                                                                          |                                                                                              |
| `xMoovVersion`                                                                               | [?Components\Versions](../../Models/Components/Versions.md)                                  | :heavy_minus_sign:                                                                           | Specify an API version.                                                                      |                                                                                              |

### Response

**[?Operations\UpdatePaymentLinkResponse](../../Models/Operations/UpdatePaymentLinkResponse.md)**

### Errors

| Error Type                    | Status Code                   | Content Type                  |
| ----------------------------- | ----------------------------- | ----------------------------- |
| Errors\GenericError           | 400, 409                      | application/json              |
| Errors\UpdatePaymentLinkError | 422                           | application/json              |
| Errors\APIException           | 4XX, 5XX                      | \*/\*                         |