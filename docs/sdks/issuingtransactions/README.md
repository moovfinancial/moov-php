# IssuingTransactions
(*issuingTransactions*)

## Overview

### Available Operations

* [getIssuedCardAuthorization](#getissuedcardauthorization) - Retrieves details of an authorization associated with a specific Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.
* [getIssuedCardTransaction](#getissuedcardtransaction) - Retrieves details of an issued card transaction associated with a specific Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.
* [listIssuedCardAuthorizationEvents](#listissuedcardauthorizationevents) - List card network and Moov platform events that affect the authorization and its hold on a wallet balance.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.
* [listIssuedCardAuthorizations](#listissuedcardauthorizations) - List issued card authorizations associated with a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.
* [listIssuedCardTransactions](#listissuedcardtransactions) - List issued card transactions associated with a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.

## getIssuedCardAuthorization

Retrieves details of an authorization associated with a specific Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetIssuedCardAuthorizationSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->issuingTransactions->getIssuedCardAuthorization(
    security: $requestSecurity,
    accountID: '8c490d50-8951-4810-9506-ecd5648c2a39',
    authorizationID: 'f037a459-fbd3-47b9-8181-09847ea9f557',
    xMoovVersion: Components\Versions::Latest

);

if ($response->issuedCardAuthorization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                     | [Operations\GetIssuedCardAuthorizationSecurity](../../Models/Operations/GetIssuedCardAuthorizationSecurity.md) | :heavy_check_mark:                                                                                             | The security requirements to use for the request.                                                              |
| `accountID`                                                                                                    | *string*                                                                                                       | :heavy_check_mark:                                                                                             | The Moov business account for which cards have been issued.                                                    |
| `authorizationID`                                                                                              | *string*                                                                                                       | :heavy_check_mark:                                                                                             | N/A                                                                                                            |
| `xMoovVersion`                                                                                                 | [?Components\Versions](../../Models/Components/Versions.md)                                                    | :heavy_minus_sign:                                                                                             | Specify an API version.                                                                                        |

### Response

**[?Operations\GetIssuedCardAuthorizationResponse](../../Models/Operations/GetIssuedCardAuthorizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getIssuedCardTransaction

Retrieves details of an issued card transaction associated with a specific Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetIssuedCardTransactionSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->issuingTransactions->getIssuedCardTransaction(
    security: $requestSecurity,
    accountID: '4bebfda4-7627-4fb8-9945-5ef57c25a867',
    cardTransactionID: '33615eaf-e358-4f62-ac49-f7cca27d44ba',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->issuedCardTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                 | [Operations\GetIssuedCardTransactionSecurity](../../Models/Operations/GetIssuedCardTransactionSecurity.md) | :heavy_check_mark:                                                                                         | The security requirements to use for the request.                                                          |
| `accountID`                                                                                                | *string*                                                                                                   | :heavy_check_mark:                                                                                         | The Moov business account for which cards have been issued.                                                |
| `cardTransactionID`                                                                                        | *string*                                                                                                   | :heavy_check_mark:                                                                                         | N/A                                                                                                        |
| `xMoovVersion`                                                                                             | [?Components\Versions](../../Models/Components/Versions.md)                                                | :heavy_minus_sign:                                                                                         | Specify an API version.                                                                                    |

### Response

**[?Operations\GetIssuedCardTransactionResponse](../../Models/Operations/GetIssuedCardTransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listIssuedCardAuthorizationEvents

List card network and Moov platform events that affect the authorization and its hold on a wallet balance.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$request = new Operations\ListIssuedCardAuthorizationEventsRequest(
    accountID: '78666549-e9e4-4769-8bd4-1456f277ddce',
    authorizationID: 'fcc21f8e-61f5-4554-a253-362fd57052bb',
    skip: 60,
    count: 20,
);
$requestSecurity = new Operations\ListIssuedCardAuthorizationEventsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->issuingTransactions->listIssuedCardAuthorizationEvents(
    request: $request,
    security: $requestSecurity
);

if ($response->issuedCardAuthorizationEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [Operations\ListIssuedCardAuthorizationEventsRequest](../../Models/Operations/ListIssuedCardAuthorizationEventsRequest.md)   | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |
| `security`                                                                                                                   | [Operations\ListIssuedCardAuthorizationEventsSecurity](../../Models/Operations/ListIssuedCardAuthorizationEventsSecurity.md) | :heavy_check_mark:                                                                                                           | The security requirements to use for the request.                                                                            |

### Response

**[?Operations\ListIssuedCardAuthorizationEventsResponse](../../Models/Operations/ListIssuedCardAuthorizationEventsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listIssuedCardAuthorizations

List issued card authorizations associated with a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$request = new Operations\ListIssuedCardAuthorizationsRequest(
    accountID: '8b15de20-a7c4-4720-a646-88309ab5093d',
    skip: 60,
    count: 20,
);
$requestSecurity = new Operations\ListIssuedCardAuthorizationsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->issuingTransactions->listIssuedCardAuthorizations(
    request: $request,
    security: $requestSecurity
);

if ($response->issuedCardAuthorizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\ListIssuedCardAuthorizationsRequest](../../Models/Operations/ListIssuedCardAuthorizationsRequest.md)   | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |
| `security`                                                                                                         | [Operations\ListIssuedCardAuthorizationsSecurity](../../Models/Operations/ListIssuedCardAuthorizationsSecurity.md) | :heavy_check_mark:                                                                                                 | The security requirements to use for the request.                                                                  |

### Response

**[?Operations\ListIssuedCardAuthorizationsResponse](../../Models/Operations/ListIssuedCardAuthorizationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listIssuedCardTransactions

List issued card transactions associated with a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$request = new Operations\ListIssuedCardTransactionsRequest(
    accountID: 'b137f097-2f49-4fc7-afb4-b59a6fe762cd',
    skip: 60,
    count: 20,
);
$requestSecurity = new Operations\ListIssuedCardTransactionsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->issuingTransactions->listIssuedCardTransactions(
    request: $request,
    security: $requestSecurity
);

if ($response->issuedCardTransactions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListIssuedCardTransactionsRequest](../../Models/Operations/ListIssuedCardTransactionsRequest.md)   | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |
| `security`                                                                                                     | [Operations\ListIssuedCardTransactionsSecurity](../../Models/Operations/ListIssuedCardTransactionsSecurity.md) | :heavy_check_mark:                                                                                             | The security requirements to use for the request.                                                              |

### Response

**[?Operations\ListIssuedCardTransactionsResponse](../../Models/Operations/ListIssuedCardTransactionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |