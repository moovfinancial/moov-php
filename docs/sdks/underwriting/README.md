# Underwriting
(*underwriting*)

## Overview

### Available Operations

* [getUnderwriting](#getunderwriting) - Retrieve underwriting associated with a given Moov account. 

Read our [underwriting guide](https://docs.moov.io/guides/accounts/requirements/underwriting/) to learn more. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.
* [updateUnderwriting](#updateunderwriting) - Update the account's underwriting by passing new values for one or more of the fields. 

Read our [underwriting guide](https://docs.moov.io/guides/accounts/requirements/underwriting/) to learn more.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.write` scope.

## getUnderwriting

Retrieve underwriting associated with a given Moov account. 

Read our [underwriting guide](https://docs.moov.io/guides/accounts/requirements/underwriting/) to learn more. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetUnderwritingSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->underwriting->getUnderwriting(
    security: $requestSecurity,
    accountID: '32ccafba-5d99-40e5-a8af-d05cc5d73a4e',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->underwriting !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `security`                                                                               | [Operations\GetUnderwritingSecurity](../../Models/Operations/GetUnderwritingSecurity.md) | :heavy_check_mark:                                                                       | The security requirements to use for the request.                                        |
| `accountID`                                                                              | *string*                                                                                 | :heavy_check_mark:                                                                       | N/A                                                                                      |
| `xMoovVersion`                                                                           | [?Components\Versions](../../Models/Components/Versions.md)                              | :heavy_minus_sign:                                                                       | Specify an API version.                                                                  |

### Response

**[?Operations\GetUnderwritingResponse](../../Models/Operations/GetUnderwritingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## updateUnderwriting

Update the account's underwriting by passing new values for one or more of the fields. 

Read our [underwriting guide](https://docs.moov.io/guides/accounts/requirements/underwriting/) to learn more.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.write` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$updateUnderwriting = new Components\UpdateUnderwriting(
    averageTransactionSize: 686,
    maxTransactionSize: 927778,
    averageMonthlyTransactionVolume: 363635,
    volumeByCustomerType: new Components\VolumeByCustomerType(
        businessToBusinessPercentage: 103054,
        consumerToBusinessPercentage: 891201,
    ),
    cardVolumeDistribution: new Components\CardVolumeDistribution(
        ecommercePercentage: 139066,
        cardPresentPercentage: 457019,
        mailOrPhonePercentage: 477438,
        debtRepaymentPercentage: 372012,
    ),
    fulfillment: new Components\FulfillmentDetails(
        hasPhysicalGoods: false,
        isShippingProduct: false,
        shipmentDurationDays: 806698,
        returnPolicy: Components\ReturnPolicyType::None,
    ),
);
$requestSecurity = new Operations\UpdateUnderwritingSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->underwriting->updateUnderwriting(
    security: $requestSecurity,
    accountID: '9f455b16-9816-457c-a754-4b57db42578d',
    updateUnderwriting: $updateUnderwriting,
    xMoovVersion: Components\Versions::V20240000

);

if ($response->underwriting !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `security`                                                                                     | [Operations\UpdateUnderwritingSecurity](../../Models/Operations/UpdateUnderwritingSecurity.md) | :heavy_check_mark:                                                                             | The security requirements to use for the request.                                              |
| `accountID`                                                                                    | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `updateUnderwriting`                                                                           | [Components\UpdateUnderwriting](../../Models/Components/UpdateUnderwriting.md)                 | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `xMoovVersion`                                                                                 | [?Components\Versions](../../Models/Components/Versions.md)                                    | :heavy_minus_sign:                                                                             | Specify an API version.                                                                        |

### Response

**[?Operations\UpdateUnderwritingResponse](../../Models/Operations/UpdateUnderwritingResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\GenericError            | 400, 409                       | application/json               |
| Errors\UpdateUnderwritingError | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |