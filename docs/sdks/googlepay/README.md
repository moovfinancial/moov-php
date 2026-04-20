# GooglePay

## Overview

### Available Operations

* [linkToken](#linktoken) - Connect a Google Pay token to the specified account.

The `token` data is defined by Google Pay and should be passed through from Google Pay's response unmodified.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/cards.write` scope.

## linkToken

Connect a Google Pay token to the specified account.

The `token` data is defined by Google Pay and should be passed through from Google Pay's response unmodified.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/cards.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="linkGooglePayToken" method="post" path="/accounts/{accountID}/google-pay/tokens" -->
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

$linkGooglePay = new Components\LinkGooglePay(
    token: new Components\GooglePayToken(
        protocolVersion: 'ECv2',
        signature: '<value>',
        intermediateSigningKey: new Components\GooglePayIntermediateSigningKey(
            signedKey: '<value>',
            signatures: [
                '<value 1>',
                '<value 2>',
                '<value 3>',
            ],
        ),
        signedMessage: '<value>',
    ),
);

$response = $sdk->googlePay->linkToken(
    accountID: '<id>',
    linkGooglePay: $linkGooglePay

);

if ($response->linkedGooglePayPaymentMethods !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                            | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `accountID`                                                          | *string*                                                             | :heavy_check_mark:                                                   | ID of the Moov account representing the cardholder.                  |
| `linkGooglePay`                                                      | [Components\LinkGooglePay](../../Models/Components/LinkGooglePay.md) | :heavy_check_mark:                                                   | N/A                                                                  |

### Response

**[?Operations\LinkGooglePayTokenResponse](../../Models/Operations/LinkGooglePayTokenResponse.md)**

### Errors

| Error Type                | Status Code               | Content Type              |
| ------------------------- | ------------------------- | ------------------------- |
| Errors\GenericError       | 400, 409                  | application/json          |
| Errors\LinkGooglePayError | 422                       | application/json          |
| Errors\APIException       | 4XX, 5XX                  | \*/\*                     |