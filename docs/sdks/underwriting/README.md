# Underwriting

## Overview

### Available Operations

* [get](#get) - Retrieve underwriting associated with a given Moov account. 

Read our [underwriting guide](https://docs.moov.io/guides/accounts/requirements/underwriting/) to learn more. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.
* [upsert](#upsert) - Create or update the account's underwriting.

Read our [underwriting guide](https://docs.moov.io/guides/accounts/requirements/underwriting/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.write` scope.

## get

Retrieve underwriting associated with a given Moov account. 

Read our [underwriting guide](https://docs.moov.io/guides/accounts/requirements/underwriting/) to learn more. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getUnderwriting" method="get" path="/accounts/{accountID}/underwriting" -->
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



$response = $sdk->underwriting->get(
    accountID: 'efe07546-f697-4da5-bf73-d9987efd4cdd'
);

if ($response->underwriting !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `accountID`        | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\GetUnderwritingResponse](../../Models/Operations/GetUnderwritingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## upsert

Create or update the account's underwriting.

Read our [underwriting guide](https://docs.moov.io/guides/accounts/requirements/underwriting/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="upsertUnderwriting" method="put" path="/accounts/{accountID}/underwriting" -->
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

$updateUnderwriting = new Components\UpdateUnderwriting(
    averageTransactionSize: 622191,
    maxTransactionSize: 123692,
    averageMonthlyTransactionVolume: 438164,
    volumeByCustomerType: new Components\VolumeByCustomerType(
        businessToBusinessPercentage: 671399,
        consumerToBusinessPercentage: 482010,
    ),
    cardVolumeDistribution: new Components\CardVolumeDistribution(
        ecommercePercentage: 47450,
        cardPresentPercentage: 146275,
        mailOrPhonePercentage: 309315,
        debtRepaymentPercentage: 990303,
    ),
    fulfillment: new Components\FulfillmentDetails(
        hasPhysicalGoods: true,
        isShippingProduct: true,
        shipmentDurationDays: 388451,
        returnPolicy: Components\ReturnPolicyType::Other,
    ),
);

$response = $sdk->underwriting->upsert(
    accountID: '371bf394-45df-4ba8-a615-ad5483b1f963',
    updateUnderwriting: $updateUnderwriting

);

if ($response->underwriting !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `accountID`                                                                    | *string*                                                                       | :heavy_check_mark:                                                             | N/A                                                                            |
| `updateUnderwriting`                                                           | [Components\UpdateUnderwriting](../../Models/Components/UpdateUnderwriting.md) | :heavy_check_mark:                                                             | N/A                                                                            |

### Response

**[?Operations\UpsertUnderwritingResponse](../../Models/Operations/UpsertUnderwritingResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\GenericError            | 400, 409                       | application/json               |
| Errors\UpdateUnderwritingError | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |