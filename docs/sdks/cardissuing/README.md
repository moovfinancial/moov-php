# CardIssuing

## Overview

### Available Operations

* [request](#request) - Request a virtual card be issued.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.write` scope.
* [list](#list) - List Moov issued cards existing for the account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.
* [get](#get) - Retrieve a single issued card associated with a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.
* [update](#update) - Update a Moov issued card.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/issued-cards.write` scope.
* [getFull](#getfull) - Get issued card with PAN, CVV, and expiration. 

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read-secure` scope.

## request

Request a virtual card be issued.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="requestCard" method="post" path="/issuing/{accountID}/cards" -->
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

$requestCard = new Components\RequestCard(
    metadata: [
        'optional' => 'metadata',
    ],
    billingAddress: new Components\Address(
        addressLine1: '123 Main Street',
        addressLine2: 'Apt 302',
        city: 'Boulder',
        stateOrProvince: 'CO',
        postalCode: '80301',
        country: 'US',
    ),
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

$response = $sdk->cardIssuing->request(
    accountID: 'd9ac71ae-fccb-4dfc-9fed-710ca654e3ed',
    requestCard: $requestCard

);

if ($response->issuedCard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                        | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `accountID`                                                      | *string*                                                         | :heavy_check_mark:                                               | The Moov business account for which the card is to be issued.    |
| `requestCard`                                                    | [Components\RequestCard](../../Models/Components/RequestCard.md) | :heavy_check_mark:                                               | N/A                                                              |

### Response

**[?Operations\RequestCardResponse](../../Models/Operations/RequestCardResponse.md)**

### Errors

| Error Type              | Status Code             | Content Type            |
| ----------------------- | ----------------------- | ----------------------- |
| Errors\GenericError     | 400                     | application/json        |
| Errors\RequestCardError | 422                     | application/json        |
| Errors\APIException     | 4XX, 5XX                | \*/\*                   |

## list

List Moov issued cards existing for the account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="listIssuedCards" method="get" path="/issuing/{accountID}/cards" -->
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



$response = $sdk->cardIssuing->list(
    accountID: '17c958e0-3abe-46e5-8afb-98742f1fb8ac',
    skip: 60,
    count: 20

);

if ($response->issuedCards !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               | Example                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                               | *string*                                                                                                                  | :heavy_check_mark:                                                                                                        | The Moov business account for which the cards have been issued.                                                           |                                                                                                                           |
| `skip`                                                                                                                    | *?int*                                                                                                                    | :heavy_minus_sign:                                                                                                        | N/A                                                                                                                       | 60                                                                                                                        |
| `count`                                                                                                                   | *?int*                                                                                                                    | :heavy_minus_sign:                                                                                                        | N/A                                                                                                                       | 20                                                                                                                        |
| `states`                                                                                                                  | array<[Components\IssuedCardState](../../Models/Components/IssuedCardState.md)>                                           | :heavy_minus_sign:                                                                                                        | Optional, comma-separated states to filter the Moov list issued cards response. For example `active,pending-verification` |                                                                                                                           |

### Response

**[?Operations\ListIssuedCardsResponse](../../Models/Operations/ListIssuedCardsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## get

Retrieve a single issued card associated with a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getIssuedCard" method="get" path="/issuing/{accountID}/cards/{issuedCardID}" -->
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



$response = $sdk->cardIssuing->get(
    accountID: '4fde8da4-b6c5-4379-82a2-4ff6a742e41a',
    issuedCardID: 'd04885c9-ea6b-43a7-9186-63d9fbd57716'

);

if ($response->issuedCard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                | Type                                                     | Required                                                 | Description                                              |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| `accountID`                                              | *string*                                                 | :heavy_check_mark:                                       | The Moov business account for which the card was issued. |
| `issuedCardID`                                           | *string*                                                 | :heavy_check_mark:                                       | N/A                                                      |

### Response

**[?Operations\GetIssuedCardResponse](../../Models/Operations/GetIssuedCardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## update

Update a Moov issued card.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/issued-cards.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateIssuedCard" method="patch" path="/issuing/{accountID}/cards/{issuedCardID}" -->
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

$updateIssuedCard = new Components\UpdateIssuedCard(
    metadata: [
        'optional' => 'metadata',
    ],
    billingAddress: new Components\BillingAddress(
        addressLine1: '123 Main Street',
        addressLine2: 'Apt 302',
        city: 'Boulder',
        stateOrProvince: 'CO',
        postalCode: '80301',
        country: 'US',
    ),
);

$response = $sdk->cardIssuing->update(
    accountID: '44db31bc-2813-424b-9b8c-2d3f5f1300e3',
    issuedCardID: '69ca2a7e-7bbc-4176-9d0c-2a1aa7143006',
    updateIssuedCard: $updateIssuedCard

);

if ($response->issuedCard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `accountID`                                                                | *string*                                                                   | :heavy_check_mark:                                                         | The Moov business account for which the card was issued.                   |
| `issuedCardID`                                                             | *string*                                                                   | :heavy_check_mark:                                                         | N/A                                                                        |
| `updateIssuedCard`                                                         | [Components\UpdateIssuedCard](../../Models/Components/UpdateIssuedCard.md) | :heavy_check_mark:                                                         | N/A                                                                        |

### Response

**[?Operations\UpdateIssuedCardResponse](../../Models/Operations/UpdateIssuedCardResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\GenericError          | 400, 409                     | application/json             |
| Errors\UpdateIssuedCardError | 422                          | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |

## getFull

Get issued card with PAN, CVV, and expiration. 

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read-secure` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getFullIssuedCard" method="get" path="/issuing/{accountID}/cards/{issuedCardID}/details" -->
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



$response = $sdk->cardIssuing->getFull(
    accountID: '512052fb-5e2c-4d24-98dd-fa893c9d8a03',
    issuedCardID: '087ecc51-11fe-4471-a3bb-44f20c1e87a9'

);

if ($response->fullIssuedCard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                | Type                                                     | Required                                                 | Description                                              |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| `accountID`                                              | *string*                                                 | :heavy_check_mark:                                       | The Moov business account for which the card was issued. |
| `issuedCardID`                                           | *string*                                                 | :heavy_check_mark:                                       | N/A                                                      |

### Response

**[?Operations\GetFullIssuedCardResponse](../../Models/Operations/GetFullIssuedCardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |