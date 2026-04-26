# GooglePay

## Overview

### Available Operations

* [linkToken](#linktoken) - Connect a Google Pay token to the specified account.

The `paymentMethodData` field should contain the `paymentMethodData` property from Google Pay's
[PaymentData](https://developers.google.com/pay/api/web/reference/response-objects#PaymentData) response,
passed through unmodified.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/cards.write` scope.

## linkToken

Connect a Google Pay token to the specified account.

The `paymentMethodData` field should contain the `paymentMethodData` property from Google Pay's
[PaymentData](https://developers.google.com/pay/api/web/reference/response-objects#PaymentData) response,
passed through unmodified.

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
    merchantAccountID: 'c5f78a7e-2fb0-4e4a-bcf0-9e1f8b0e5c7a',
    paymentMethodData: new Components\GooglePayPaymentMethodData(
        type: Components\Type::Card,
        info: new Components\GooglePayCardInfo(
            cardNetwork: Components\CardNetwork::Visa,
            cardDetails: '1234',
            cardFundingSource: Components\CardFundingSource::Debit,
            billingAddress: new Components\GooglePayBillingAddress(
                countryCode: 'US',
            ),
        ),
        tokenizationData: new Components\GooglePayTokenizationData(
            type: Components\GooglePayTokenizationDataType::PaymentGateway,
            token: '<value>',
        ),
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