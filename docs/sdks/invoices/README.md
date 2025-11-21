# Invoices
(*invoices*)

## Overview

### Available Operations

* [createInvoice](#createinvoice) - Create an invoice for a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/invoices.write` scope.
* [listInvoices](#listinvoices) - List all the invoices created under a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/invoices.read` scope.
* [getInvoice](#getinvoice) - Retrieve an invoice by ID.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/invoices.read` scope.
* [updateInvoice](#updateinvoice) - Updates an invoice.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/invoices.write` scope.
* [markPaidInvoice](#markpaidinvoice) - Marks an invoice as paid outside of the Moov platform.
If a payment link was created, the corresponding payment link is canceled, but a receipt is still sent.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/invoices.write` scope.

## createInvoice

Create an invoice for a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/invoices.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="createInvoice" method="post" path="/accounts/{accountID}/invoices" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;

$sdk = MoovPhp\Moov::builder()
    ->setXMoovVersion('<value>')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$createInvoice = new Components\CreateInvoice(
    customerAccountID: '<id>',
    description: 'austere gah under ew failing provided repeatedly pick onto',
    lineItems: new Components\InvoiceLineItems(
        items: [],
    ),
    taxAmount: new Components\AmountDecimal(
        currency: 'USD',
        valueDecimal: '12.987654321',
    ),
);

$response = $sdk->invoices->createInvoice(
    accountID: '241bf524-e777-4941-a5e4-d7f3f34d7a00',
    createInvoice: $createInvoice

);

if ($response->invoice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| `createInvoice`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | [Components\CreateInvoice](../../Models/Components/CreateInvoice.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release.<br/>When no version is specified, the API defaults to `v2024.01.00`. |

### Response

**[?Operations\CreateInvoiceResponse](../../Models/Operations/CreateInvoiceResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\GenericError       | 400, 409                  | application/json          |
| Errors\CreateInvoiceError | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## listInvoices

List all the invoices created under a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/invoices.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="listInvoices" method="get" path="/accounts/{accountID}/invoices" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Models\Operations;

$sdk = MoovPhp\Moov::builder()
    ->setXMoovVersion('<value>')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Operations\ListInvoicesRequest(
    skip: 60,
    count: 20,
    accountID: '114b02db-e4ca-47de-acc9-5624f4afccb5',
);

$response = $sdk->invoices->listInvoices(
    request: $request
);

if ($response->invoices !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListInvoicesRequest](../../Models/Operations/ListInvoicesRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListInvoicesResponse](../../Models/Operations/ListInvoicesResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\ListInvoicesValidationError | 422                                | application/json                   |
| Errors\APIException                | 4XX, 5XX                           | \*/\*                              |

## getInvoice

Retrieve an invoice by ID.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/invoices.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getInvoice" method="get" path="/accounts/{accountID}/invoices/{invoiceID}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;

$sdk = MoovPhp\Moov::builder()
    ->setXMoovVersion('<value>')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();



$response = $sdk->invoices->getInvoice(
    accountID: '3ecce96f-a052-4c96-b389-98e880af1ab4',
    invoiceID: 'fc90d016-39ea-4110-b77a-2e1c95827f46'

);

if ($response->invoice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| `invoiceID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release.<br/>When no version is specified, the API defaults to `v2024.01.00`. |

### Response

**[?Operations\GetInvoiceResponse](../../Models/Operations/GetInvoiceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## updateInvoice

Updates an invoice.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/invoices.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateInvoice" method="patch" path="/accounts/{accountID}/invoices/{invoiceID}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;

$sdk = MoovPhp\Moov::builder()
    ->setXMoovVersion('<value>')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$updateInvoice = new Components\UpdateInvoice(
    lineItems: new Components\InvoiceLineItemsUpdate(
        items: [
            new Components\InvoiceLineItem(
                name: '<value>',
                basePrice: new Components\AmountDecimal(
                    currency: 'USD',
                    valueDecimal: '12.987654321',
                ),
                quantity: 984515,
                options: [
                    new Components\InvoiceLineItemOption(
                        name: '<value>',
                        quantity: 761923,
                        priceModifier: new Components\AmountDecimal(
                            currency: 'USD',
                            valueDecimal: '12.987654321',
                        ),
                    ),
                ],
            ),
        ],
    ),
    taxAmount: new Components\AmountDecimalUpdate(
        currency: 'USD',
        valueDecimal: '12.987654321',
    ),
);

$response = $sdk->invoices->updateInvoice(
    accountID: 'ce46d65a-8504-4afa-b3f7-303401bd08b3',
    invoiceID: 'ef510999-370a-4350-87d5-bc81fc02a2ea',
    updateInvoice: $updateInvoice

);

if ($response->invoice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| `invoiceID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| `updateInvoice`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | [Components\UpdateInvoice](../../Models/Components/UpdateInvoice.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release.<br/>When no version is specified, the API defaults to `v2024.01.00`. |

### Response

**[?Operations\UpdateInvoiceResponse](../../Models/Operations/UpdateInvoiceResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\GenericError       | 400, 409                  | application/json          |
| Errors\UpdateInvoiceError | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |

## markPaidInvoice

Marks an invoice as paid outside of the Moov platform.
If a payment link was created, the corresponding payment link is canceled, but a receipt is still sent.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/invoices.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="markPaidInvoice" method="put" path="/accounts/{accountID}/invoices/{invoiceID}/mark-paid" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;

$sdk = MoovPhp\Moov::builder()
    ->setXMoovVersion('<value>')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$markInvoicePaid = new Components\MarkInvoicePaid();

$response = $sdk->invoices->markPaidInvoice(
    accountID: 'e270fffe-637f-4828-ace1-3813031d3274',
    invoiceID: '9a08a44d-da9a-4385-8870-bb488c363e91',
    markInvoicePaid: $markInvoicePaid

);

if ($response->invoice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| `invoiceID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| `markInvoicePaid`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  | [Components\MarkInvoicePaid](../../Models/Components/MarkInvoicePaid.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release.<br/>When no version is specified, the API defaults to `v2024.01.00`. |

### Response

**[?Operations\MarkPaidInvoiceResponse](../../Models/Operations/MarkPaidInvoiceResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\GenericError         | 400, 409                    | application/json            |
| Errors\MarkInvoicePaidError | 422                         | application/json            |
| Errors\APIException         | 4XX, 5XX                    | \*/\*                       |