# Cards
(*cards*)

## Overview

### Available Operations

* [createApplePaySession](#createapplepaysession) - Create a session with Apple Pay to facilitate a payment. 

Read our [Apple Pay tutorial](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) to learn more. 
A successful response from this endpoint should be passed through to Apple Pay unchanged. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/apple-pay.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [disableCard](#disablecard) - Disables a card associated with a Moov account.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getApplePayMerchantDomains](#getapplepaymerchantdomains) -   Get domains registered with Apple Pay. 
  
  Read our [Apple Pay tutorial](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) to learn more. 
  
  To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/apple-pay.read` scope when generating a 
  [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getCard](#getcard) - Fetch a specific card associated with a Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [linkApplePayToken](#linkapplepaytoken) - Connect an Apple Pay token to the specified account. 

Read our [Apple Pay tutorial](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) to learn more. 
The `token` data is defined by Apple Pay and should be passed through from Apple Pay's response unmodified.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [linkCard](#linkcard) - Link a card to an existing Moov account. 

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

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.write` scope
when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listCards](#listcards) - List all the active cards associated with a Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [registerApplePayMerchantDomains](#registerapplepaymerchantdomains) - Add domains to be registered with Apple Pay.

Any domains that will be used to accept payments must first be [verified](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) 
with Apple.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/apple-pay.write` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/).
* [updateApplePayMerchantDomains](#updateapplepaymerchantdomains) -   Add or remove domains to be registered with Apple Pay. 

  Any domains that will be used to accept payments must first be [verified](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) 
  with Apple.
  
  To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/apple-pay.write` scope when generating a 
  [token](https://docs.moov.io/api/authentication/access-tokens/).
* [updateCard](#updatecard) - Update a linked card and/or resubmit it for verification. 

If a value is provided for CVV, a new verification ($0 authorization) will be submitted for the card. Updating the expiration 
date or 
address will update the information stored on file for the card but will not be verified.

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/#reverify-a-card) to learn 
more.

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

## createApplePaySession

Create a session with Apple Pay to facilitate a payment. 

Read our [Apple Pay tutorial](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) to learn more. 
A successful response from this endpoint should be passed through to Apple Pay unchanged. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/apple-pay.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$createApplePaySession = new Components\CreateApplePaySession(
    domain: 'checkout.classbooker.dev',
    displayName: 'Lillie.Abbott74',
);
$requestSecurity = new Operations\CreateApplePaySessionSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cards->createApplePaySession(
    security: $requestSecurity,
    accountID: '1d911f27-36e5-4497-8e9e-c3ecff1a8ae0',
    createApplePaySession: $createApplePaySession,
    xMoovVersion: Components\Versions::Latest

);

if ($response->applePaySession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `security`                                                                                           | [Operations\CreateApplePaySessionSecurity](../../Models/Operations/CreateApplePaySessionSecurity.md) | :heavy_check_mark:                                                                                   | The security requirements to use for the request.                                                    |
| `accountID`                                                                                          | *string*                                                                                             | :heavy_check_mark:                                                                                   | ID of the Moov account representing the merchant.                                                    |
| `createApplePaySession`                                                                              | [Components\CreateApplePaySession](../../Models/Components/CreateApplePaySession.md)                 | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `xMoovVersion`                                                                                       | [?Components\Versions](../../Models/Components/Versions.md)                                          | :heavy_minus_sign:                                                                                   | Specify an API version.                                                                              |

### Response

**[?Operations\CreateApplePaySessionResponse](../../Models/Operations/CreateApplePaySessionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409, 422       | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## disableCard

Disables a card associated with a Moov account.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\DisableCardSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cards->disableCard(
    security: $requestSecurity,
    accountID: 'a6b47d56-0b54-4dd8-9692-efad0ab1ebb4',
    cardID: '01234567-89ab-cdef-0123-456789abcdef',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      | Example                                                                          |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `security`                                                                       | [Operations\DisableCardSecurity](../../Models/Operations/DisableCardSecurity.md) | :heavy_check_mark:                                                               | The security requirements to use for the request.                                |                                                                                  |
| `accountID`                                                                      | *string*                                                                         | :heavy_check_mark:                                                               | N/A                                                                              |                                                                                  |
| `cardID`                                                                         | *string*                                                                         | :heavy_check_mark:                                                               | N/A                                                                              | 01234567-89ab-cdef-0123-456789abcdef                                             |
| `xMoovVersion`                                                                   | [?Components\Versions](../../Models/Components/Versions.md)                      | :heavy_minus_sign:                                                               | Specify an API version.                                                          |                                                                                  |

### Response

**[?Operations\DisableCardResponse](../../Models/Operations/DisableCardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getApplePayMerchantDomains

  Get domains registered with Apple Pay. 
  
  Read our [Apple Pay tutorial](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) to learn more. 
  
  To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/apple-pay.read` scope when generating a 
  [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetApplePayMerchantDomainsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cards->getApplePayMerchantDomains(
    security: $requestSecurity,
    accountID: 'cd0931b0-e02f-47b3-87fc-0789a05479e9',
    xMoovVersion: Components\Versions::Latest

);

if ($response->applePayMerchantDomains !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                     | [Operations\GetApplePayMerchantDomainsSecurity](../../Models/Operations/GetApplePayMerchantDomainsSecurity.md) | :heavy_check_mark:                                                                                             | The security requirements to use for the request.                                                              |
| `accountID`                                                                                                    | *string*                                                                                                       | :heavy_check_mark:                                                                                             | ID of the Moov account representing the merchant.                                                              |
| `xMoovVersion`                                                                                                 | [?Components\Versions](../../Models/Components/Versions.md)                                                    | :heavy_minus_sign:                                                                                             | Specify an API version.                                                                                        |

### Response

**[?Operations\GetApplePayMerchantDomainsResponse](../../Models/Operations/GetApplePayMerchantDomainsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getCard

Fetch a specific card associated with a Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetCardSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cards->getCard(
    security: $requestSecurity,
    accountID: '21f0d82e-dc9b-4e80-ac2a-99b6babfebd7',
    cardID: '01234567-89ab-cdef-0123-456789abcdef',
    xMoovVersion: Components\Versions::Latest

);

if ($response->card !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              | Example                                                                  |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `security`                                                               | [Operations\GetCardSecurity](../../Models/Operations/GetCardSecurity.md) | :heavy_check_mark:                                                       | The security requirements to use for the request.                        |                                                                          |
| `accountID`                                                              | *string*                                                                 | :heavy_check_mark:                                                       | N/A                                                                      |                                                                          |
| `cardID`                                                                 | *string*                                                                 | :heavy_check_mark:                                                       | N/A                                                                      | 01234567-89ab-cdef-0123-456789abcdef                                     |
| `xMoovVersion`                                                           | [?Components\Versions](../../Models/Components/Versions.md)              | :heavy_minus_sign:                                                       | Specify an API version.                                                  |                                                                          |

### Response

**[?Operations\GetCardResponse](../../Models/Operations/GetCardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## linkApplePayToken

Connect an Apple Pay token to the specified account. 

Read our [Apple Pay tutorial](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) to learn more. 
The `token` data is defined by Apple Pay and should be passed through from Apple Pay's response unmodified.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$linkApplePay = new Components\LinkApplePay(
    token: new Components\LinkApplePayToken(
        paymentData: new Components\LinkApplePaymentData(
            version: 'EC_v1',
            data: '3+f4oOTwPa6f1UZ6tG...CE=',
            signature: 'MIAGCSqGSIb3DQ.AAAA==',
            header: new Components\ApplePayHeader(
                publicKeyHash: 'l0CnXdMv...D1I=',
                transactionId: '32b...4f3',
                ephemeralPublicKey: 'MFkwEK...Md==',
            ),
        ),
        paymentMethod: new Components\LinkApplePaymentMethod(
            displayName: 'Visa 1234',
            network: 'Visa',
            type: 'debit',
        ),
        transactionIdentifier: '32b...4f3',
    ),
    billingContact: new Components\AppleBillingContact(
        addressLines: [
            '123 Sesame Street',
        ],
        locality: 'Phoenix',
        postalCode: '30345',
        administrativeArea: 'AZ',
        countryCode: 'US',
    ),
);
$requestSecurity = new Operations\LinkApplePayTokenSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cards->linkApplePayToken(
    security: $requestSecurity,
    accountID: 'f4d3b593-6370-42f3-acf5-eab4393e2a01',
    linkApplePay: $linkApplePay,
    xMoovVersion: Components\Versions::Latest

);

if ($response->linkedApplePayPaymentMethod !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `security`                                                                                   | [Operations\LinkApplePayTokenSecurity](../../Models/Operations/LinkApplePayTokenSecurity.md) | :heavy_check_mark:                                                                           | The security requirements to use for the request.                                            |
| `accountID`                                                                                  | *string*                                                                                     | :heavy_check_mark:                                                                           | ID of the Moov account representing the cardholder.                                          |
| `linkApplePay`                                                                               | [Components\LinkApplePay](../../Models/Components/LinkApplePay.md)                           | :heavy_check_mark:                                                                           | N/A                                                                                          |
| `xMoovVersion`                                                                               | [?Components\Versions](../../Models/Components/Versions.md)                                  | :heavy_minus_sign:                                                                           | Specify an API version.                                                                      |

### Response

**[?Operations\LinkApplePayTokenResponse](../../Models/Operations/LinkApplePayTokenResponse.md)**

### Errors

| Error Type               | Status Code              | Content Type             |
| ------------------------ | ------------------------ | ------------------------ |
| Errors\GenericError      | 400, 409                 | application/json         |
| Errors\LinkApplePayError | 422                      | application/json         |
| Errors\APIException      | 4XX, 5XX                 | \*/\*                    |

## linkCard

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

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.write` scope
when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$linkCard = new Components\LinkCard(
    cardNumber: '4111111111111111',
    cardCvv: '123',
    expiration: new Components\CardExpiration(
        month: '01',
        year: '21',
    ),
    billingAddress: new Components\CardAddress(
        postalCode: '80301',
        addressLine1: '123 Main Street',
        addressLine2: 'Apt 302',
        city: 'Boulder',
        stateOrProvince: 'CO',
        country: 'US',
    ),
    holderName: 'Jules Jackson',
    cardOnFile: true,
    merchantAccountID: '01234567-89ab-cdef-0123-456789abcdef',
    verifyName: true,
);
$requestSecurity = new Operations\LinkCardSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cards->linkCard(
    security: $requestSecurity,
    accountID: '500c4473-7f7b-4a70-8a8c-d5cb2e08e0e4',
    linkCard: $linkCard,
    xMoovVersion: Components\Versions::V20240000,
    xWaitFor: Components\LinkCardWaitFor::PaymentMethod

);

if ($response->card !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                         | Type                                                                                                                                                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                                                                                                                                                       | Example                                                                                                                                                                                                                                                                                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                                                                                                                                                                                                                                                                                                        | [Operations\LinkCardSecurity](../../Models/Operations/LinkCardSecurity.md)                                                                                                                                                                                                                                                                                                                                        | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                | The security requirements to use for the request.                                                                                                                                                                                                                                                                                                                                                                 |                                                                                                                                                                                                                                                                                                                                                                                                                   |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                       | *string*                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                               |                                                                                                                                                                                                                                                                                                                                                                                                                   |
| `linkCard`                                                                                                                                                                                                                                                                                                                                                                                                        | [Components\LinkCard](../../Models/Components/LinkCard.md)                                                                                                                                                                                                                                                                                                                                                        | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                               | {<br/>"cardNumber": "4111111111111111",<br/>"cardCvv": "123",<br/>"expiration": {<br/>"month": "01",<br/>"year": "21"<br/>},<br/>"holderName": "Jules Jackson",<br/>"billingAddress": {<br/>"addressLine1": "123 Main Street",<br/>"addressLine2": "Apt 302",<br/>"city": "Boulder",<br/>"stateOrProvince": "CO",<br/>"postalCode": "80301",<br/>"country": "US"<br/>},<br/>"cardOnFile": true,<br/>"merchantAccountID": "01234567-89ab-cdef-0123-456789abcdef",<br/>"verifyName": true<br/>} |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                    | [?Components\Versions](../../Models/Components/Versions.md)                                                                                                                                                                                                                                                                                                                                                       | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                | Specify an API version.                                                                                                                                                                                                                                                                                                                                                                                           |                                                                                                                                                                                                                                                                                                                                                                                                                   |
| `xWaitFor`                                                                                                                                                                                                                                                                                                                                                                                                        | [?Components\LinkCardWaitFor](../../Models/Components/LinkCardWaitFor.md)                                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                | Optional header to wait for certain events, such as the creation of a payment method, to occur before returning a response.<br/><br/>When this header is set to `payment-method`, the response will include any payment methods that were created for the newly <br/>linked card in the `paymentMethods` field. Otherwise, the `paymentMethods` field will be omitted from the response.                          | payment-method                                                                                                                                                                                                                                                                                                                                                                                                    |

### Response

**[?Operations\LinkCardResponse](../../Models/Operations/LinkCardResponse.md)**

### Errors

| Error Type           | Status Code          | Content Type         |
| -------------------- | -------------------- | -------------------- |
| Errors\GenericError  | 400, 409             | application/json     |
| Errors\LinkCardError | 422                  | application/json     |
| Errors\APIException  | 4XX, 5XX             | \*/\*                |

## listCards

List all the active cards associated with a Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListCardsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cards->listCards(
    security: $requestSecurity,
    accountID: '5881119b-63c7-492b-8c20-09d0fca99676',
    xMoovVersion: Components\Versions::Latest

);

if ($response->cards !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `security`                                                                   | [Operations\ListCardsSecurity](../../Models/Operations/ListCardsSecurity.md) | :heavy_check_mark:                                                           | The security requirements to use for the request.                            |
| `accountID`                                                                  | *string*                                                                     | :heavy_check_mark:                                                           | N/A                                                                          |
| `xMoovVersion`                                                               | [?Components\Versions](../../Models/Components/Versions.md)                  | :heavy_minus_sign:                                                           | Specify an API version.                                                      |

### Response

**[?Operations\ListCardsResponse](../../Models/Operations/ListCardsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## registerApplePayMerchantDomains

Add domains to be registered with Apple Pay.

Any domains that will be used to accept payments must first be [verified](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) 
with Apple.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/apple-pay.write` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$registerApplePayMerchantDomains = new Components\RegisterApplePayMerchantDomains(
    domains: [
        'checkout.classbooker.dev',
    ],
);
$requestSecurity = new Operations\RegisterApplePayMerchantDomainsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cards->registerApplePayMerchantDomains(
    security: $requestSecurity,
    accountID: '133fed79-519d-4b63-99ec-26b95076a45b',
    registerApplePayMerchantDomains: $registerApplePayMerchantDomains,
    xMoovVersion: Components\Versions::Latest

);

if ($response->applePayMerchantDomains !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `security`                                                                                                               | [Operations\RegisterApplePayMerchantDomainsSecurity](../../Models/Operations/RegisterApplePayMerchantDomainsSecurity.md) | :heavy_check_mark:                                                                                                       | The security requirements to use for the request.                                                                        |
| `accountID`                                                                                                              | *string*                                                                                                                 | :heavy_check_mark:                                                                                                       | ID of the Moov account representing the merchant.                                                                        |
| `registerApplePayMerchantDomains`                                                                                        | [Components\RegisterApplePayMerchantDomains](../../Models/Components/RegisterApplePayMerchantDomains.md)                 | :heavy_check_mark:                                                                                                       | N/A                                                                                                                      |
| `xMoovVersion`                                                                                                           | [?Components\Versions](../../Models/Components/Versions.md)                                                              | :heavy_minus_sign:                                                                                                       | Specify an API version.                                                                                                  |

### Response

**[?Operations\RegisterApplePayMerchantDomainsResponse](../../Models/Operations/RegisterApplePayMerchantDomainsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## updateApplePayMerchantDomains

  Add or remove domains to be registered with Apple Pay. 

  Any domains that will be used to accept payments must first be [verified](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) 
  with Apple.
  
  To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/apple-pay.write` scope when generating a 
  [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$updateApplePayMerchantDomains = new Components\UpdateApplePayMerchantDomains(
    addDomains: [
        'pay.classbooker.dev',
    ],
    removeDomains: [
        'checkout.classbooker.dev',
    ],
);
$requestSecurity = new Operations\UpdateApplePayMerchantDomainsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cards->updateApplePayMerchantDomains(
    security: $requestSecurity,
    accountID: 'b7d68fce-1dbc-4562-93aa-d9ad030c78e6',
    updateApplePayMerchantDomains: $updateApplePayMerchantDomains,
    xMoovVersion: Components\Versions::Latest

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                           | [Operations\UpdateApplePayMerchantDomainsSecurity](../../Models/Operations/UpdateApplePayMerchantDomainsSecurity.md) | :heavy_check_mark:                                                                                                   | The security requirements to use for the request.                                                                    |
| `accountID`                                                                                                          | *string*                                                                                                             | :heavy_check_mark:                                                                                                   | ID of the Moov account representing the merchant.                                                                    |
| `updateApplePayMerchantDomains`                                                                                      | [Components\UpdateApplePayMerchantDomains](../../Models/Components/UpdateApplePayMerchantDomains.md)                 | :heavy_check_mark:                                                                                                   | N/A                                                                                                                  |
| `xMoovVersion`                                                                                                       | [?Components\Versions](../../Models/Components/Versions.md)                                                          | :heavy_minus_sign:                                                                                                   | Specify an API version.                                                                                              |

### Response

**[?Operations\UpdateApplePayMerchantDomainsResponse](../../Models/Operations/UpdateApplePayMerchantDomainsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## updateCard

Update a linked card and/or resubmit it for verification. 

If a value is provided for CVV, a new verification ($0 authorization) will be submitted for the card. Updating the expiration 
date or 
address will update the information stored on file for the card but will not be verified.

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/#reverify-a-card) to learn 
more.

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$updateCard = new Components\UpdateCard(
    cardCvv: '456',
);
$requestSecurity = new Operations\UpdateCardSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->cards->updateCard(
    security: $requestSecurity,
    accountID: 'a960061d-fb6d-4929-99b5-c96c672840f6',
    cardID: '01234567-89ab-cdef-0123-456789abcdef',
    updateCard: $updateCard,
    xMoovVersion: Components\Versions::Latest

);

if ($response->card !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    | Example                                                                        |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `security`                                                                     | [Operations\UpdateCardSecurity](../../Models/Operations/UpdateCardSecurity.md) | :heavy_check_mark:                                                             | The security requirements to use for the request.                              |                                                                                |
| `accountID`                                                                    | *string*                                                                       | :heavy_check_mark:                                                             | N/A                                                                            |                                                                                |
| `cardID`                                                                       | *string*                                                                       | :heavy_check_mark:                                                             | N/A                                                                            | 01234567-89ab-cdef-0123-456789abcdef                                           |
| `updateCard`                                                                   | [Components\UpdateCard](../../Models/Components/UpdateCard.md)                 | :heavy_check_mark:                                                             | N/A                                                                            | {<br/>"cardCvv": "456"<br/>}                                                   |
| `xMoovVersion`                                                                 | [?Components\Versions](../../Models/Components/Versions.md)                    | :heavy_minus_sign:                                                             | Specify an API version.                                                        |                                                                                |

### Response

**[?Operations\UpdateCardResponse](../../Models/Operations/UpdateCardResponse.md)**

### Errors

| Error Type             | Status Code            | Content Type           |
| ---------------------- | ---------------------- | ---------------------- |
| Errors\GenericError    | 400, 409               | application/json       |
| Errors\UpdateCardError | 422                    | application/json       |
| Errors\APIException    | 4XX, 5XX               | \*/\*                  |