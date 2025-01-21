# Transfers
(*transfers*)

## Overview

### Available Operations

* [createTransfer](#createtransfer) - Move money by providing the source, destination, and amount in the request body.

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.write` 
scope.
* [createTransferOptions](#createtransferoptions) - Generate available payment method options for one or multiple transfer participants depending on the accountID or paymentMethodID you 
supply in the request. 

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{yourAccountID}/transfers.read` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/). The accountID included must be your accountID. You can find your 
accountID on the [Business details](https://dashboard.moov.io/settings/business) page.
* [getRefund](#getrefund) - Get details of a refund for a card transfer.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.read` 
scope.
* [getTransfer](#gettransfer) - Retrieve full transfer details for an individual transfer of a particular Moov account. 

Payment rail-specific details are included in the source and destination. Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) 
to learn more.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.read` 
scope.
* [listRefunds](#listrefunds) - Get a list of refunds for a card transfer.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.read` 
scope.
* [listTransfers](#listtransfers) - List all the transfers associated with a particular Moov account. 

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more. 

When you run this request, you retrieve 200 transfers at a time. You can advance past a results set of 200 transfers by using the `skip` parameter (for example, 
if you set `skip`= 10, you will see a results set of 200 transfers after the first 2000). If you are searching a high volume of transfers, the request will likely 
process very slowly. To achieve faster performance, restrict the data as much as you can by using the `StartDateTime` and `EndDateTime` parameters for a limited 
period of time. You can run multiple requests in smaller time window increments until you've retrieved all the transfers you need.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.read` 
scope.
* [patchTransfer](#patchtransfer) - Update the metadata contained on a transfer. 

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.write` 
scope.
* [refundTransfer](#refundtransfer) - Initiate a refund for a card transfer.

**Use the [Cancel or refund a card transfer](https://docs.moov.io/api/money-movement/refunds/cancel/) endpoint for more comprehensive cancel and refund options.**    
See the [reversals](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/reversals/) guide for more information. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.write` 
scope.
* [reverseTransfer](#reversetransfer) - Reverses a card transfer by initiating a cancellation or refund depending on the transaction status. 
Read our [reversals guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/reversals/) 
to learn more.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.

## createTransfer

Move money by providing the source, destination, and amount in the request body.

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.write` 
scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$request = new Operations\CreateTransferRequest(
    xIdempotencyKey: 'c60bdee4-f270-4df8-a5e1-0460745a118e',
    accountID: 'b1f9d459-c664-42bb-90f6-422a074eb6b5',
    createTransfer: new Components\CreateTransfer(
        source: new Components\CreateTransferSource(
            cardDetails: new Components\CreateTransferSourceCard(
                dynamicDescriptor: 'WhlBdy *Yoga 11-12',
            ),
            achDetails: new Components\CreateTransferSourceACH(
                companyEntryDescription: 'Gym dues',
                originatingCompanyName: 'Whole Body Fit',
                debitHoldPeriod: Components\DebitHoldPeriod::TwoDays,
            ),
        ),
        destination: new Components\CreateTransferDestination(
            paymentMethodID: '<id>',
            cardDetails: new Components\CreateTransferDestinationCard(
                dynamicDescriptor: 'WhlBdy *Yoga 11-12',
            ),
            achDetails: new Components\CreateTransferDestinationACH(
                companyEntryDescription: 'Gym dues',
                originatingCompanyName: 'Whole Body Fit',
            ),
        ),
        amount: new Components\Amount(
            currency: 'Pa\'anga',
            value: 583391,
        ),
        facilitatorFee: new Components\FacilitatorFee(
            totalDecimal: '12.987654321',
            markupDecimal: '0.987654321',
        ),
        description: 'Pay Instructor for May 15 Class',
        metadata: [
            'optional' => 'metadata',
        ],
    ),
);
$requestSecurity = new Operations\CreateTransferSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->transfers->createTransfer(
    request: $request,
    security: $requestSecurity
);

if ($response->oneOf !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateTransferRequest](../../Models/Operations/CreateTransferRequest.md)   | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |
| `security`                                                                             | [Operations\CreateTransferSecurity](../../Models/Operations/CreateTransferSecurity.md) | :heavy_check_mark:                                                                     | The security requirements to use for the request.                                      |

### Response

**[?Operations\CreateTransferResponse](../../Models/Operations/CreateTransferResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\GenericError            | 400                            | application/json               |
| Errors\Transfer                | 409                            | application/json               |
| Errors\TransferValidationError | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## createTransferOptions

Generate available payment method options for one or multiple transfer participants depending on the accountID or paymentMethodID you 
supply in the request. 

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{yourAccountID}/transfers.read` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/). The accountID included must be your accountID. You can find your 
accountID on the [Business details](https://dashboard.moov.io/settings/business) page.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\CreateTransferOptionsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->transfers->createTransferOptions(
    security: $requestSecurity,
    xMoovVersion: Components\Versions::Latest

);

if ($response->transferOptions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `security`                                                                                           | [Operations\CreateTransferOptionsSecurity](../../Models/Operations/CreateTransferOptionsSecurity.md) | :heavy_check_mark:                                                                                   | The security requirements to use for the request.                                                    |
| `xMoovVersion`                                                                                       | [?Components\Versions](../../Models/Components/Versions.md)                                          | :heavy_minus_sign:                                                                                   | Specify an API version.                                                                              |

### Response

**[?Operations\CreateTransferOptionsResponse](../../Models/Operations/CreateTransferOptionsResponse.md)**

### Errors

| Error Type                            | Status Code                           | Content Type                          |
| ------------------------------------- | ------------------------------------- | ------------------------------------- |
| Errors\GenericError                   | 400                                   | application/json                      |
| Errors\TransferOptionsValidationError | 422                                   | application/json                      |
| Errors\APIException                   | 4XX, 5XX                              | \*/\*                                 |

## getRefund

Get details of a refund for a card transfer.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.read` 
scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetRefundSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->transfers->getRefund(
    security: $requestSecurity,
    transferID: 'dbc09cb2-ef99-4553-8501-94323f377dbf',
    accountID: '7f90bf73-6fb7-41e7-90aa-a9133e7d92c2',
    refundID: '0f86fa43-1a9b-4a5d-8227-f253063f7fb1',
    xMoovVersion: Components\Versions::Latest

);

if ($response->cardAcquiringRefund !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `security`                                                                   | [Operations\GetRefundSecurity](../../Models/Operations/GetRefundSecurity.md) | :heavy_check_mark:                                                           | The security requirements to use for the request.                            |
| `transferID`                                                                 | *string*                                                                     | :heavy_check_mark:                                                           | Identifier for the transfer.                                                 |
| `accountID`                                                                  | *string*                                                                     | :heavy_check_mark:                                                           | N/A                                                                          |
| `refundID`                                                                   | *string*                                                                     | :heavy_check_mark:                                                           | Identifier for the refund.                                                   |
| `xMoovVersion`                                                               | [?Components\Versions](../../Models/Components/Versions.md)                  | :heavy_minus_sign:                                                           | Specify an API version.                                                      |

### Response

**[?Operations\GetRefundResponse](../../Models/Operations/GetRefundResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getTransfer

Retrieve full transfer details for an individual transfer of a particular Moov account. 

Payment rail-specific details are included in the source and destination. Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) 
to learn more.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.read` 
scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetTransferSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->transfers->getTransfer(
    security: $requestSecurity,
    transferID: '64607ba5-82d4-4278-93b5-c5c5ca5c9cd8',
    accountID: 'cb1b48c3-1c11-4648-aa00-691b74c9ea1b',
    xMoovVersion: Components\Versions::Latest

);

if ($response->transfer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `security`                                                                       | [Operations\GetTransferSecurity](../../Models/Operations/GetTransferSecurity.md) | :heavy_check_mark:                                                               | The security requirements to use for the request.                                |
| `transferID`                                                                     | *string*                                                                         | :heavy_check_mark:                                                               | Identifier for the transfer.                                                     |
| `accountID`                                                                      | *string*                                                                         | :heavy_check_mark:                                                               | N/A                                                                              |
| `xMoovVersion`                                                                   | [?Components\Versions](../../Models/Components/Versions.md)                      | :heavy_minus_sign:                                                               | Specify an API version.                                                          |

### Response

**[?Operations\GetTransferResponse](../../Models/Operations/GetTransferResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listRefunds

Get a list of refunds for a card transfer.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.read` 
scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListRefundsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->transfers->listRefunds(
    security: $requestSecurity,
    accountID: '7d74a845-fe17-4ebe-a05e-71847ef8c510',
    transferID: 'd081988f-448f-492c-8c60-836126fa0dfb',
    xMoovVersion: Components\Versions::Latest

);

if ($response->cardAcquiringRefunds !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `security`                                                                       | [Operations\ListRefundsSecurity](../../Models/Operations/ListRefundsSecurity.md) | :heavy_check_mark:                                                               | The security requirements to use for the request.                                |
| `accountID`                                                                      | *string*                                                                         | :heavy_check_mark:                                                               | N/A                                                                              |
| `transferID`                                                                     | *string*                                                                         | :heavy_check_mark:                                                               | Identifier for the transfer.                                                     |
| `xMoovVersion`                                                                   | [?Components\Versions](../../Models/Components/Versions.md)                      | :heavy_minus_sign:                                                               | Specify an API version.                                                          |

### Response

**[?Operations\ListRefundsResponse](../../Models/Operations/ListRefundsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listTransfers

List all the transfers associated with a particular Moov account. 

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more. 

When you run this request, you retrieve 200 transfers at a time. You can advance past a results set of 200 transfers by using the `skip` parameter (for example, 
if you set `skip`= 10, you will see a results set of 200 transfers after the first 2000). If you are searching a high volume of transfers, the request will likely 
process very slowly. To achieve faster performance, restrict the data as much as you can by using the `StartDateTime` and `EndDateTime` parameters for a limited 
period of time. You can run multiple requests in smaller time window increments until you've retrieved all the transfers you need.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.read` 
scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$request = new Operations\ListTransfersRequest(
    accountID: 'a7b433e5-531c-406b-bf40-4cde3c83fab5',
    skip: 60,
    count: 20,
);
$requestSecurity = new Operations\ListTransfersSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->transfers->listTransfers(
    request: $request,
    security: $requestSecurity
);

if ($response->transfers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListTransfersRequest](../../Models/Operations/ListTransfersRequest.md)   | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |
| `security`                                                                           | [Operations\ListTransfersSecurity](../../Models/Operations/ListTransfersSecurity.md) | :heavy_check_mark:                                                                   | The security requirements to use for the request.                                    |

### Response

**[?Operations\ListTransfersResponse](../../Models/Operations/ListTransfersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## patchTransfer

Update the metadata contained on a transfer. 

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.write` 
scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\PatchTransferSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->transfers->patchTransfer(
    security: $requestSecurity,
    transferID: '9cc2093a-b55d-4f3f-b8e9-e13ac2df16ab',
    accountID: 'f0dfbcc6-c1a2-42ff-b3f9-a41de383cabc',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->transfer !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `security`                                                                           | [Operations\PatchTransferSecurity](../../Models/Operations/PatchTransferSecurity.md) | :heavy_check_mark:                                                                   | The security requirements to use for the request.                                    |
| `transferID`                                                                         | *string*                                                                             | :heavy_check_mark:                                                                   | Identifier for the transfer.                                                         |
| `accountID`                                                                          | *string*                                                                             | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `xMoovVersion`                                                                       | [?Components\Versions](../../Models/Components/Versions.md)                          | :heavy_minus_sign:                                                                   | Specify an API version.                                                              |

### Response

**[?Operations\PatchTransferResponse](../../Models/Operations/PatchTransferResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## refundTransfer

Initiate a refund for a card transfer.

**Use the [Cancel or refund a card transfer](https://docs.moov.io/api/money-movement/refunds/cancel/) endpoint for more comprehensive cancel and refund options.**    
See the [reversals](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/reversals/) guide for more information. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.write` 
scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$request = new Operations\RefundTransferRequest(
    xIdempotencyKey: 'fcf8bc06-0dab-429a-b25f-0547cda2b142',
    accountID: '9032ecd3-7cf8-4760-a23e-09456a22dfb6',
    transferID: '3ba7635c-ceda-4c22-b383-46b4447b555b',
    createRefund: new Components\CreateRefund(
        amount: 1000,
    ),
);
$requestSecurity = new Operations\RefundTransferSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->transfers->refundTransfer(
    request: $request,
    security: $requestSecurity
);

if ($response->createRefundResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RefundTransferRequest](../../Models/Operations/RefundTransferRequest.md)   | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |
| `security`                                                                             | [Operations\RefundTransferSecurity](../../Models/Operations/RefundTransferSecurity.md) | :heavy_check_mark:                                                                     | The security requirements to use for the request.                                      |

### Response

**[?Operations\RefundTransferResponse](../../Models/Operations/RefundTransferResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\GenericError          | 400                          | application/json             |
| Errors\CardAcquiringRefund   | 409                          | application/json             |
| Errors\RefundValidationError | 422                          | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |

## reverseTransfer

Reverses a card transfer by initiating a cancellation or refund depending on the transaction status. 
Read our [reversals guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/reversals/) 
to learn more.

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

$request = new Operations\ReverseTransferRequest(
    xIdempotencyKey: '47d7634a-2772-4a99-a0bc-2bb960cea7e2',
    accountID: 'c39f87ae-8349-4b5b-9f87-1669f5d784aa',
    transferID: '16ad771b-54f6-4f38-86a5-09d5f907e897',
    createReversal: new Components\CreateReversal(
        amount: 1000,
    ),
);
$requestSecurity = new Operations\ReverseTransferSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->transfers->reverseTransfer(
    request: $request,
    security: $requestSecurity
);

if ($response->reversal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ReverseTransferRequest](../../Models/Operations/ReverseTransferRequest.md)   | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |
| `security`                                                                               | [Operations\ReverseTransferSecurity](../../Models/Operations/ReverseTransferSecurity.md) | :heavy_check_mark:                                                                       | The security requirements to use for the request.                                        |

### Response

**[?Operations\ReverseTransferResponse](../../Models/Operations/ReverseTransferResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\GenericError            | 400, 409                       | application/json               |
| Errors\ReversalValidationError | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |