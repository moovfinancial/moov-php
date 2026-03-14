# ResolutionLinks

## Overview

### Available Operations

* [create](#create) - Create a resolution link for the specified account. Resolution links are temporary, secure links
sent to merchants to resolve account requirements such as KYC verification or document uploads.  Only one active resolution link
is allowed per connected account. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/profile.write`, `/accounts/{accountID}/representatives.write` and `/accounts/{accountID}/files.write` scopes.
* [list](#list) - List resolution links for the specified account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/profile.read` scope.
* [get](#get) - Get a resolution link by code.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/profile.read` scope.
* [disable](#disable) - Disable a resolution link. Disabled resolution links can no longer be used by merchants.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/profile.write` scope.

## create

Create a resolution link for the specified account. Resolution links are temporary, secure links
sent to merchants to resolve account requirements such as KYC verification or document uploads.  Only one active resolution link
is allowed per connected account. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/profile.write`, `/accounts/{accountID}/representatives.write` and `/accounts/{accountID}/files.write` scopes.

### Example Usage

<!-- UsageSnippet language="php" operationID="createResolutionLink" method="post" path="/accounts/{accountID}/resolution-links" -->
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

$createResolutionLink = new Components\CreateResolutionLink(
    recipient: new Components\ResolutionLinkRecipient(
        phone: new Components\PhoneNumber(
            number: '5555555555',
            countryCode: '1',
        ),
    ),
);

$response = $sdk->resolutionLinks->create(
    accountID: '<id>',
    createResolutionLink: $createResolutionLink

);

if ($response->resolutionLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        | Example                                                                            |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `accountID`                                                                        | *string*                                                                           | :heavy_check_mark:                                                                 | N/A                                                                                |                                                                                    |
| `createResolutionLink`                                                             | [Components\CreateResolutionLink](../../Models/Components/CreateResolutionLink.md) | :heavy_check_mark:                                                                 | N/A                                                                                | {<br/>"recipient": {<br/>"phone": {<br/>"number": "5555555555",<br/>"countryCode": "1"<br/>}<br/>}<br/>} |

### Response

**[?Operations\CreateResolutionLinkResponse](../../Models/Operations/CreateResolutionLinkResponse.md)**

### Errors

| Error Type                       | Status Code                      | Content Type                     |
| -------------------------------- | -------------------------------- | -------------------------------- |
| Errors\GenericError              | 400, 409                         | application/json                 |
| Errors\CreateResolutionLinkError | 422                              | application/json                 |
| Errors\APIException              | 4XX, 5XX                         | \*/\*                            |

## list

List resolution links for the specified account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/profile.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="listResolutionLinks" method="get" path="/accounts/{accountID}/resolution-links" -->
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



$response = $sdk->resolutionLinks->list(
    accountID: '<id>'
);

if ($response->resolutionLinks !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `accountID`        | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\ListResolutionLinksResponse](../../Models/Operations/ListResolutionLinksResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## get

Get a resolution link by code.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/profile.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getResolutionLink" method="get" path="/accounts/{accountID}/resolution-links/{resolutionLinkCode}" -->
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



$response = $sdk->resolutionLinks->get(
    accountID: '<id>',
    resolutionLinkCode: '<value>'

);

if ($response->resolutionLink !== null) {
    // handle response
}
```

### Parameters

| Parameter            | Type                 | Required             | Description          |
| -------------------- | -------------------- | -------------------- | -------------------- |
| `accountID`          | *string*             | :heavy_check_mark:   | N/A                  |
| `resolutionLinkCode` | *string*             | :heavy_check_mark:   | N/A                  |

### Response

**[?Operations\GetResolutionLinkResponse](../../Models/Operations/GetResolutionLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## disable

Disable a resolution link. Disabled resolution links can no longer be used by merchants.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/profile.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="disableResolutionLink" method="delete" path="/accounts/{accountID}/resolution-links/{resolutionLinkCode}" -->
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



$response = $sdk->resolutionLinks->disable(
    accountID: '<id>',
    resolutionLinkCode: '<value>'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter            | Type                 | Required             | Description          |
| -------------------- | -------------------- | -------------------- | -------------------- |
| `accountID`          | *string*             | :heavy_check_mark:   | N/A                  |
| `resolutionLinkCode` | *string*             | :heavy_check_mark:   | N/A                  |

### Response

**[?Operations\DisableResolutionLinkResponse](../../Models/Operations/DisableResolutionLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |