# IssuingTransactions
(*issuingTransactions*)

## Overview

### Available Operations

* [listAuthorizations](#listauthorizations) - List issued card authorizations associated with a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.
* [getAuthorization](#getauthorization) - Retrieves details of an authorization associated with a specific Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.
* [listAuthorizationEvents](#listauthorizationevents) - List card network and Moov platform events that affect the authorization and its hold on a wallet balance.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.
* [list](#list) - List issued card transactions associated with a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.

## listAuthorizations

List issued card authorizations associated with a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="listIssuedCardAuthorizations" method="get" path="/issuing/{accountID}/authorizations" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Models\Operations;

$sdk = MoovPhp\Moov::builder()
    ->setXMoovVersion('v2024.01.00')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Operations\ListIssuedCardAuthorizationsRequest(
    accountID: '6465d95a-e945-4a49-8983-d74faa135bb4',
    skip: 60,
    count: 20,
);

$response = $sdk->issuingTransactions->listAuthorizations(
    request: $request
);

if ($response->issuedCardAuthorizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\ListIssuedCardAuthorizationsRequest](../../Models/Operations/ListIssuedCardAuthorizationsRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\ListIssuedCardAuthorizationsResponse](../../Models/Operations/ListIssuedCardAuthorizationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getAuthorization

Retrieves details of an authorization associated with a specific Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getIssuedCardAuthorization" method="get" path="/issuing/{accountID}/authorizations/{authorizationID}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;

$sdk = MoovPhp\Moov::builder()
    ->setXMoovVersion('v2024.01.00')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();



$response = $sdk->issuingTransactions->getAuthorization(
    accountID: '0ccac2cc-6692-44a9-b0d1-35a1892c2db2',
    authorizationID: 'd9ee8dde-b1eb-492f-bea1-d8e09bccbc52'

);

if ($response->issuedCardAuthorization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | The Moov business account for which cards have been issued.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| `authorizationID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release.<br/>When no version is specified, the API defaults to `v2024.01.00`. |

### Response

**[?Operations\GetIssuedCardAuthorizationResponse](../../Models/Operations/GetIssuedCardAuthorizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listAuthorizationEvents

List card network and Moov platform events that affect the authorization and its hold on a wallet balance.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="listIssuedCardAuthorizationEvents" method="get" path="/issuing/{accountID}/authorizations/{authorizationID}/events" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Models\Operations;

$sdk = MoovPhp\Moov::builder()
    ->setXMoovVersion('v2024.01.00')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Operations\ListIssuedCardAuthorizationEventsRequest(
    accountID: 'f30f8cb3-64d8-4a5f-a427-965317fa559a',
    authorizationID: 'e6a0946d-f3d8-451e-9b1c-5bc346a95dd6',
    skip: 60,
    count: 20,
);

$response = $sdk->issuingTransactions->listAuthorizationEvents(
    request: $request
);

if ($response->issuedCardAuthorizationEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                  | Type                                                                                                                       | Required                                                                                                                   | Description                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                 | [Operations\ListIssuedCardAuthorizationEventsRequest](../../Models/Operations/ListIssuedCardAuthorizationEventsRequest.md) | :heavy_check_mark:                                                                                                         | The request object to use for the request.                                                                                 |

### Response

**[?Operations\ListIssuedCardAuthorizationEventsResponse](../../Models/Operations/ListIssuedCardAuthorizationEventsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## list

List issued card transactions associated with a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="listIssuedCardTransactions" method="get" path="/issuing/{accountID}/card-transactions" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Models\Operations;

$sdk = MoovPhp\Moov::builder()
    ->setXMoovVersion('v2024.01.00')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Operations\ListIssuedCardTransactionsRequest(
    accountID: '4efcb497-f915-4b6e-b973-e5e5bcc1fd34',
    skip: 60,
    count: 20,
);

$response = $sdk->issuingTransactions->list(
    request: $request
);

if ($response->issuedCardTransactions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListIssuedCardTransactionsRequest](../../Models/Operations/ListIssuedCardTransactionsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListIssuedCardTransactionsResponse](../../Models/Operations/ListIssuedCardTransactionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |