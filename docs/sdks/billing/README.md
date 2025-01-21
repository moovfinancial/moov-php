# Billing
(*billing*)

## Overview

### Available Operations

* [createFeePlanAgreements](#createfeeplanagreements) - Creates the subscription of a fee plan to a merchant account. Merchants are required to accept the fee plan terms prior to activation.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.write` scope.
* [listFeePlanAgreements](#listfeeplanagreements) - List all fee plan agreements associated with an account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.
* [listFeePlans](#listfeeplans) - List all fee plans available for use by an account. This is intended to be used by an account when 
selecting a fee plan to apply to a connected account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.
* [listPartnerPricing](#listpartnerpricing) - List all partner pricing plans available for use by an account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.
* [listPartnerPricingAgreements](#listpartnerpricingagreements) - List all partner pricing agreements associated with an account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.

## createFeePlanAgreements

Creates the subscription of a fee plan to a merchant account. Merchants are required to accept the fee plan terms prior to activation.

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

$createFeePlanAgreement = new Components\CreateFeePlanAgreement(
    planID: 'b97c2d59-80c5-49ac-b1fc-40e3a81d8daf',
);
$requestSecurity = new Operations\CreateFeePlanAgreementsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->billing->createFeePlanAgreements(
    security: $requestSecurity,
    accountID: '19962eb8-00cd-44e5-8a66-a1ebaf88c2fe',
    createFeePlanAgreement: $createFeePlanAgreement,
    xMoovVersion: Components\Versions::V20240000

);

if ($response->feePlanAgreement !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `security`                                                                                               | [Operations\CreateFeePlanAgreementsSecurity](../../Models/Operations/CreateFeePlanAgreementsSecurity.md) | :heavy_check_mark:                                                                                       | The security requirements to use for the request.                                                        |
| `accountID`                                                                                              | *string*                                                                                                 | :heavy_check_mark:                                                                                       | N/A                                                                                                      |
| `createFeePlanAgreement`                                                                                 | [Components\CreateFeePlanAgreement](../../Models/Components/CreateFeePlanAgreement.md)                   | :heavy_check_mark:                                                                                       | N/A                                                                                                      |
| `xMoovVersion`                                                                                           | [?Components\Versions](../../Models/Components/Versions.md)                                              | :heavy_minus_sign:                                                                                       | Specify an API version.                                                                                  |

### Response

**[?Operations\CreateFeePlanAgreementsResponse](../../Models/Operations/CreateFeePlanAgreementsResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\GenericError          | 400, 409                     | application/json             |
| Errors\FeePlanAgreementError | 422                          | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |

## listFeePlanAgreements

List all fee plan agreements associated with an account.

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


$requestSecurity = new Operations\ListFeePlanAgreementsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->billing->listFeePlanAgreements(
    security: $requestSecurity,
    accountID: '4c49ae91-2b32-4a4d-91bf-f062f3c2f38d',
    xMoovVersion: Components\Versions::Latest,
    agreementID: [
        '<id>',
    ],
    status: [
        Components\FeePlanAgreementStatus::Terminated,
    ]

);

if ($response->feePlanAgreements !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `security`                                                                                           | [Operations\ListFeePlanAgreementsSecurity](../../Models/Operations/ListFeePlanAgreementsSecurity.md) | :heavy_check_mark:                                                                                   | The security requirements to use for the request.                                                    |
| `accountID`                                                                                          | *string*                                                                                             | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `xMoovVersion`                                                                                       | [?Components\Versions](../../Models/Components/Versions.md)                                          | :heavy_minus_sign:                                                                                   | Specify an API version.                                                                              |
| `agreementID`                                                                                        | array<*string*>                                                                                      | :heavy_minus_sign:                                                                                   | A comma-separated list of agreement IDs to filter the results by.                                    |
| `status`                                                                                             | array<[Components\FeePlanAgreementStatus](../../Models/Components/FeePlanAgreementStatus.md)>        | :heavy_minus_sign:                                                                                   | A comma-separated list of statuses to filter the results by.                                         |

### Response

**[?Operations\ListFeePlanAgreementsResponse](../../Models/Operations/ListFeePlanAgreementsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listFeePlans

List all fee plans available for use by an account. This is intended to be used by an account when 
selecting a fee plan to apply to a connected account.

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


$requestSecurity = new Operations\ListFeePlansSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->billing->listFeePlans(
    security: $requestSecurity,
    accountID: 'ac8fa716-4b75-4902-b296-d734524ca45c',
    xMoovVersion: Components\Versions::Latest,
    planIDs: [
        '<value>',
    ]

);

if ($response->feePlans !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `security`                                                                         | [Operations\ListFeePlansSecurity](../../Models/Operations/ListFeePlansSecurity.md) | :heavy_check_mark:                                                                 | The security requirements to use for the request.                                  |
| `accountID`                                                                        | *string*                                                                           | :heavy_check_mark:                                                                 | N/A                                                                                |
| `xMoovVersion`                                                                     | [?Components\Versions](../../Models/Components/Versions.md)                        | :heavy_minus_sign:                                                                 | Specify an API version.                                                            |
| `planIDs`                                                                          | array<*string*>                                                                    | :heavy_minus_sign:                                                                 | A comma-separated list of plan IDs to filter the results by.                       |

### Response

**[?Operations\ListFeePlansResponse](../../Models/Operations/ListFeePlansResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listPartnerPricing

List all partner pricing plans available for use by an account.

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


$requestSecurity = new Operations\ListPartnerPricingSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->billing->listPartnerPricing(
    security: $requestSecurity,
    accountID: '85f15b07-5c44-4302-ab6f-d22f8d45b7f4',
    xMoovVersion: Components\Versions::Latest,
    planIDs: [
        '<value>',
    ]

);

if ($response->partnerPricings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `security`                                                                                     | [Operations\ListPartnerPricingSecurity](../../Models/Operations/ListPartnerPricingSecurity.md) | :heavy_check_mark:                                                                             | The security requirements to use for the request.                                              |
| `accountID`                                                                                    | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `xMoovVersion`                                                                                 | [?Components\Versions](../../Models/Components/Versions.md)                                    | :heavy_minus_sign:                                                                             | Specify an API version.                                                                        |
| `planIDs`                                                                                      | array<*string*>                                                                                | :heavy_minus_sign:                                                                             | A comma-separated list of plan IDs to filter the results by.                                   |

### Response

**[?Operations\ListPartnerPricingResponse](../../Models/Operations/ListPartnerPricingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listPartnerPricingAgreements

List all partner pricing agreements associated with an account.

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


$requestSecurity = new Operations\ListPartnerPricingAgreementsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->billing->listPartnerPricingAgreements(
    security: $requestSecurity,
    accountID: '9366921a-25de-4c52-8ec6-4cd4ef557223',
    xMoovVersion: Components\Versions::V20240000,
    agreementID: [
        '<id>',
    ],
    status: [
        Components\FeePlanAgreementStatus::Active,
    ]

);

if ($response->partnerPricingAgreements !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `security`                                                                                                         | [Operations\ListPartnerPricingAgreementsSecurity](../../Models/Operations/ListPartnerPricingAgreementsSecurity.md) | :heavy_check_mark:                                                                                                 | The security requirements to use for the request.                                                                  |
| `accountID`                                                                                                        | *string*                                                                                                           | :heavy_check_mark:                                                                                                 | N/A                                                                                                                |
| `xMoovVersion`                                                                                                     | [?Components\Versions](../../Models/Components/Versions.md)                                                        | :heavy_minus_sign:                                                                                                 | Specify an API version.                                                                                            |
| `agreementID`                                                                                                      | array<*string*>                                                                                                    | :heavy_minus_sign:                                                                                                 | A comma-separated list of agreement IDs to filter the results by.                                                  |
| `status`                                                                                                           | array<[Components\FeePlanAgreementStatus](../../Models/Components/FeePlanAgreementStatus.md)>                      | :heavy_minus_sign:                                                                                                 | A comma-separated list of statuses to filter the results by.                                                       |

### Response

**[?Operations\ListPartnerPricingAgreementsResponse](../../Models/Operations/ListPartnerPricingAgreementsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |