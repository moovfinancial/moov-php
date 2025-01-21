# CardIssuing
(*cardIssuing*)

## Overview

### Available Operations

* [getFullIssuedCard](#getfullissuedcard) - Get issued card with PAN, CVV, and expiration. 

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.read-secure` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getIssuedCard](#getissuedcard) - Retrieve a single issued card associated with a Moov account.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listIssuedCards](#listissuedcards) - List Moov issued cards existing for the account.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [requestCard](#requestcard) - Request a virtual card be issued.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [updateIssuedCard](#updateissuedcard) - Update a Moov issued card.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

## getFullIssuedCard

Get issued card with PAN, CVV, and expiration. 

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.read-secure` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetFullIssuedCardSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cardIssuing->getFullIssuedCard(
    security: $requestSecurity,
    accountID: 'f03c4c3e-2685-44e6-8d4b-0d5bd082a301',
    issuedCardID: '1da6b593-679e-44ab-a9e4-6db6db4b8f46',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->fullIssuedCard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `security`                                                                                   | [Operations\GetFullIssuedCardSecurity](../../Models/Operations/GetFullIssuedCardSecurity.md) | :heavy_check_mark:                                                                           | The security requirements to use for the request.                                            |
| `accountID`                                                                                  | *string*                                                                                     | :heavy_check_mark:                                                                           | The Moov business account for which the card was issued.                                     |
| `issuedCardID`                                                                               | *string*                                                                                     | :heavy_check_mark:                                                                           | N/A                                                                                          |
| `xMoovVersion`                                                                               | [?Components\Versions](../../Models/Components/Versions.md)                                  | :heavy_minus_sign:                                                                           | Specify an API version.                                                                      |

### Response

**[?Operations\GetFullIssuedCardResponse](../../Models/Operations/GetFullIssuedCardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getIssuedCard

Retrieve a single issued card associated with a Moov account.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetIssuedCardSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cardIssuing->getIssuedCard(
    security: $requestSecurity,
    accountID: 'c63d9bae-2097-4bfa-8ac7-e9e8dff6e9ae',
    issuedCardID: 'aa0c86df-7f7d-4200-9ee4-24ba8870a7d4',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->issuedCard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `security`                                                                           | [Operations\GetIssuedCardSecurity](../../Models/Operations/GetIssuedCardSecurity.md) | :heavy_check_mark:                                                                   | The security requirements to use for the request.                                    |
| `accountID`                                                                          | *string*                                                                             | :heavy_check_mark:                                                                   | The Moov business account for which the card was issued.                             |
| `issuedCardID`                                                                       | *string*                                                                             | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `xMoovVersion`                                                                       | [?Components\Versions](../../Models/Components/Versions.md)                          | :heavy_minus_sign:                                                                   | Specify an API version.                                                              |

### Response

**[?Operations\GetIssuedCardResponse](../../Models/Operations/GetIssuedCardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listIssuedCards

List Moov issued cards existing for the account.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$request = new Operations\ListIssuedCardsRequest(
    accountID: '33bbd03b-931d-4e6d-b831-8698f4aee791',
    skip: 60,
    count: 20,
);
$requestSecurity = new Operations\ListIssuedCardsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cardIssuing->listIssuedCards(
    request: $request,
    security: $requestSecurity
);

if ($response->issuedCards !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListIssuedCardsRequest](../../Models/Operations/ListIssuedCardsRequest.md)   | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |
| `security`                                                                               | [Operations\ListIssuedCardsSecurity](../../Models/Operations/ListIssuedCardsSecurity.md) | :heavy_check_mark:                                                                       | The security requirements to use for the request.                                        |

### Response

**[?Operations\ListIssuedCardsResponse](../../Models/Operations/ListIssuedCardsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## requestCard

Request a virtual card be issued.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$requestCard = new Components\RequestCard(
    fundingWalletID: 'df7610a6-b14e-4eee-9a55-1890b6b3207c',
    authorizedUser: new Components\CreateAuthorizedUser(
        firstName: 'Tanya',
        lastName: 'Flatley',
        birthDate: new Components\BirthDate(
            day: 9,
            month: 11,
            year: 1989,
        ),
    ),
    formFactor: Components\IssuedCardFormFactor::Virtual,
    expiration: new Components\CardExpiration(
        month: '01',
        year: '21',
    ),
    controls: new Components\IssuingControls(
        velocityLimits: [
            new Components\IssuingVelocityLimit(
                amount: 10000,
                interval: Components\IssuingIntervalLimit::PerTransaction,
            ),
        ],
    ),
);
$requestSecurity = new Operations\RequestCardSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cardIssuing->requestCard(
    security: $requestSecurity,
    accountID: 'a9c0ff49-b9aa-4f81-b54a-43e412558f6b',
    requestCard: $requestCard,
    xMoovVersion: Components\Versions::Latest

);

if ($response->issuedCard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `security`                                                                       | [Operations\RequestCardSecurity](../../Models/Operations/RequestCardSecurity.md) | :heavy_check_mark:                                                               | The security requirements to use for the request.                                |
| `accountID`                                                                      | *string*                                                                         | :heavy_check_mark:                                                               | The Moov business account for which the card is to be issued.                    |
| `requestCard`                                                                    | [Components\RequestCard](../../Models/Components/RequestCard.md)                 | :heavy_check_mark:                                                               | N/A                                                                              |
| `xMoovVersion`                                                                   | [?Components\Versions](../../Models/Components/Versions.md)                      | :heavy_minus_sign:                                                               | Specify an API version.                                                          |

### Response

**[?Operations\RequestCardResponse](../../Models/Operations/RequestCardResponse.md)**

### Errors

| Error Type              | Status Code             | Content Type            |
| ----------------------- | ----------------------- | ----------------------- |
| Errors\GenericError     | 400                     | application/json        |
| Errors\RequestCardError | 422                     | application/json        |
| Errors\APIException     | 4XX, 5XX                | \*/\*                   |

## updateIssuedCard

Update a Moov issued card.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$updateIssuedCard = new Components\UpdateIssuedCard(
    authorizedUser: new Components\CreateAuthorizedUserUpdate(
        birthDate: new Components\BirthDateUpdate(
            day: 9,
            month: 11,
            year: 1989,
        ),
    ),
);
$requestSecurity = new Operations\UpdateIssuedCardSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cardIssuing->updateIssuedCard(
    security: $requestSecurity,
    accountID: 'fc445a8c-5b64-4ab9-ba30-5bdb0ffc02b0',
    issuedCardID: '064f9e03-fc5f-4a7d-83d2-2ec946f77ff2',
    updateIssuedCard: $updateIssuedCard,
    xMoovVersion: Components\Versions::Latest

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `security`                                                                                 | [Operations\UpdateIssuedCardSecurity](../../Models/Operations/UpdateIssuedCardSecurity.md) | :heavy_check_mark:                                                                         | The security requirements to use for the request.                                          |
| `accountID`                                                                                | *string*                                                                                   | :heavy_check_mark:                                                                         | The Moov business account for which the card was issued.                                   |
| `issuedCardID`                                                                             | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `updateIssuedCard`                                                                         | [Components\UpdateIssuedCard](../../Models/Components/UpdateIssuedCard.md)                 | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `xMoovVersion`                                                                             | [?Components\Versions](../../Models/Components/Versions.md)                                | :heavy_minus_sign:                                                                         | Specify an API version.                                                                    |

### Response

**[?Operations\UpdateIssuedCardResponse](../../Models/Operations/UpdateIssuedCardResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\GenericError          | 400, 409                     | application/json             |
| Errors\UpdateIssuedCardError | 422                          | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |