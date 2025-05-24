# Cards
(*cards*)

## Overview

### Available Operations

* [link](#link) - Link a card to an existing Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/#link-a-card) to learn more.

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance. 

During card linking, the provided data will be verified by submitting a $0 authorization (account verification) request. 
If `merchantAccountID` is provided, the authorization request will contain that account's statement descriptor and address. 
Otherwise, the platform account's profile will be used. If no statement descriptor has been set, the authorization will 
use the account's name instead.

It is strongly recommended that callers include the `X-Wait-For` header, set to `payment-method`, if the newly linked 
card is intended to be used right away. If this header is not included, the caller will need to poll the [List Payment 
Methods](https://docs.moov.io/api/sources/payment-methods/list/)
endpoint to wait for the new payment methods to be available for use.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.write` scope.
* [list](#list) - List all the active cards associated with a Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.read` scope.
* [get](#get) - Fetch a specific card associated with a Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.read` scope.
* [update](#update) - Update a linked card and/or resubmit it for verification. 

If a value is provided for CVV, a new verification ($0 authorization) will be submitted for the card. Updating the expiration 
date or 
address will update the information stored on file for the card but will not be verified.

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/#reverify-a-card) to learn 
more.

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.write` scope.
* [disable](#disable) - Disables a card associated with a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.write` scope.

## link

Link a card to an existing Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/#link-a-card) to learn more.

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance. 

During card linking, the provided data will be verified by submitting a $0 authorization (account verification) request. 
If `merchantAccountID` is provided, the authorization request will contain that account's statement descriptor and address. 
Otherwise, the platform account's profile will be used. If no statement descriptor has been set, the authorization will 
use the account's name instead.

It is strongly recommended that callers include the `X-Wait-For` header, set to `payment-method`, if the newly linked 
card is intended to be used right away. If this header is not included, the caller will need to poll the [List Payment 
Methods](https://docs.moov.io/api/sources/payment-methods/list/)
endpoint to wait for the new payment methods to be available for use.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.write` scope.

### Example Usage

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

$linkCard = new Components\LinkCard(
    cardNumber: '4111111111111111',
    cardCvv: '123',
    expiration: new Components\CardExpiration(
        month: '01',
        year: '21',
    ),
    holderName: 'Jules Jackson',
    billingAddress: new Components\CardAddress(
        postalCode: '80301',
    ),
);

$response = $sdk->cards->link(
    accountID: '5593e46f-7936-474b-a52b-96f1da46867b',
    linkCard: $linkCard,
    xMoovVersion: 'v2024.01.00',
    xWaitFor: Components\LinkCardWaitFor::PaymentMethod

);

if ($response->card !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | Example                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| `linkCard`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | [Components\LinkCard](../../Models/Components/LinkCard.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | {<br/>"cardNumber": "4111111111111111",<br/>"cardCvv": "123",<br/>"expiration": {<br/>"month": "01",<br/>"year": "21"<br/>},<br/>"holderName": "Jules Jackson",<br/>"billingAddress": {<br/>"postalCode": "80301"<br/>}<br/>}                                                                                                                                                                                                                                                                                                     |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| `xWaitFor`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        | [?Components\LinkCardWaitFor](../../Models/Components/LinkCardWaitFor.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | Optional header to wait for certain events, such as the creation of a payment method, to occur before returning a response.<br/><br/>When this header is set to `payment-method`, the response will include any payment methods that were created for the newly <br/>linked card in the `paymentMethods` field. Otherwise, the `paymentMethods` field will be omitted from the response.                                                                                                                                          | payment-method                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |

### Response

**[?Operations\LinkCardResponse](../../Models/Operations/LinkCardResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\GenericError  | 400                  | application/json     |
| Errors\LinkCardError | 422                  | application/json     |
| Errors\APIException  | 4XX, 5XX             | \*/\*                |

## list

List all the active cards associated with a Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.read` scope.

### Example Usage

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



$response = $sdk->cards->list(
    accountID: 'b902712f-8ab9-47ba-b39f-5ccfbcac528c',
    xMoovVersion: 'v2024.01.00'

);

if ($response->cards !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\ListCardsResponse](../../Models/Operations/ListCardsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## get

Fetch a specific card associated with a Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.read` scope.

### Example Usage

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



$response = $sdk->cards->get(
    accountID: '1f590cf9-4db9-4241-8818-30f9c26362e8',
    cardID: '01234567-89ab-cdef-0123-456789abcdef',
    xMoovVersion: 'v2024.01.00'

);

if ($response->card !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | Example                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| `cardID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | 01234567-89ab-cdef-0123-456789abcdef                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |

### Response

**[?Operations\GetCardResponse](../../Models/Operations/GetCardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## update

Update a linked card and/or resubmit it for verification. 

If a value is provided for CVV, a new verification ($0 authorization) will be submitted for the card. Updating the expiration 
date or 
address will update the information stored on file for the card but will not be verified.

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/#reverify-a-card) to learn 
more.

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.write` scope.

### Example Usage

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

$updateCard = new Components\UpdateCard(
    cardCvv: '456',
);

$response = $sdk->cards->update(
    accountID: '7104688e-8434-482e-9556-4784be3ad3fe',
    cardID: '01234567-89ab-cdef-0123-456789abcdef',
    updateCard: $updateCard,
    xMoovVersion: 'v2024.01.00'

);

if ($response->card !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | Example                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| `cardID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | 01234567-89ab-cdef-0123-456789abcdef                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| `updateCard`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      | [Components\UpdateCard](../../Models/Components/UpdateCard.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | {<br/>"cardCvv": "456"<br/>}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |

### Response

**[?Operations\UpdateCardResponse](../../Models/Operations/UpdateCardResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\GenericError    | 400, 409               | application/json       |
| Errors\UpdateCardError | 422                    | application/json       |
| Errors\APIException    | 4XX, 5XX               | \*/\*                  |

## disable

Disables a card associated with a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.write` scope.

### Example Usage

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



$response = $sdk->cards->disable(
    accountID: 'bbd12cb2-58f4-46e5-861d-1e6c4617c0c2',
    cardID: '01234567-89ab-cdef-0123-456789abcdef',
    xMoovVersion: 'v2024.01.00'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | Example                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| `cardID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | 01234567-89ab-cdef-0123-456789abcdef                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |

### Response

**[?Operations\DisableCardResponse](../../Models/Operations/DisableCardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |