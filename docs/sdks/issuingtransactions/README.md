# IssuingTransactions

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

| Parameter                                                   | Type                                                        | Required                                                    | Description                                                 |
| ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- |
| `accountID`                                                 | *string*                                                    | :heavy_check_mark:                                          | The Moov business account for which cards have been issued. |
| `authorizationID`                                           | *string*                                                    | :heavy_check_mark:                                          | N/A                                                         |

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

$sdk = MoovPhp\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();



$response = $sdk->issuingTransactions->listAuthorizationEvents(
    accountID: 'f30f8cb3-64d8-4a5f-a427-965317fa559a',
    authorizationID: 'e6a0946d-f3d8-451e-9b1c-5bc346a95dd6',
    skip: 60,
    count: 20

);

if ($response->issuedCardAuthorizationEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                   | Type                                                        | Required                                                    | Description                                                 | Example                                                     |
| ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- |
| `accountID`                                                 | *string*                                                    | :heavy_check_mark:                                          | The Moov business account for which cards have been issued. |                                                             |
| `authorizationID`                                           | *string*                                                    | :heavy_check_mark:                                          | N/A                                                         |                                                             |
| `skip`                                                      | *?int*                                                      | :heavy_minus_sign:                                          | N/A                                                         | 60                                                          |
| `count`                                                     | *?int*                                                      | :heavy_minus_sign:                                          | N/A                                                         | 20                                                          |

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