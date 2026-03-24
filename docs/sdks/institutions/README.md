# Institutions

## Overview

### Available Operations

* [searchInstitutions](#searchinstitutions) - Search for financial institutions by name or routing number.

This endpoint returns metadata about each matched institution, including basic identifying details (such as name, routing number, and address) and information about which payment services they support (e.g., ACH, RTP, and Wire).

This can be used to validate a financial institution before initiating payment activity, or to check which payment rails are available for a given routing number.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/institutions.read` scope.
* [~~search~~](#search) - This endpoint has been deprecated and will be removed in a future release. Use [/institutions](https://docs.moov.io/api/enrichment/form-shortening/institutions/get/).

Search for institutions by either their name or routing number.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/fed.read` scope. :warning: **Deprecated**

## searchInstitutions

Search for financial institutions by name or routing number.

This endpoint returns metadata about each matched institution, including basic identifying details (such as name, routing number, and address) and information about which payment services they support (e.g., ACH, RTP, and Wire).

This can be used to validate a financial institution before initiating payment activity, or to check which payment rails are available for a given routing number.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/institutions.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="searchInstitutions" method="get" path="/institutions" -->
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



$response = $sdk->institutions->searchInstitutions(

);

if ($response->institutionsSearchResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `name`                                                                                    | *?string*                                                                                 | :heavy_minus_sign:                                                                        | Name of the financial institution. Either `name` or `routingNumber` is required.          |
| `routingNumber`                                                                           | *?string*                                                                                 | :heavy_minus_sign:                                                                        | Routing number for a financial institution. Either `routingNumber` or `name` is required. |
| `limit`                                                                                   | *?int*                                                                                    | :heavy_minus_sign:                                                                        | Maximum results returned by a search.                                                     |

### Response

**[?Operations\SearchInstitutionsResponse](../../Models/Operations/SearchInstitutionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## ~~search~~

This endpoint has been deprecated and will be removed in a future release. Use [/institutions](https://docs.moov.io/api/enrichment/form-shortening/institutions/get/).

Search for institutions by either their name or routing number.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/fed.read` scope.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="listInstitutions" method="get" path="/institutions/ach/search" -->
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



$response = $sdk->institutions->search(

);

if ($response->financialInstitutions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `name`                                                                                    | *?string*                                                                                 | :heavy_minus_sign:                                                                        | Name of the financial institution. Either `name` or `routingNumber` is required.          |
| `routingNumber`                                                                           | *?string*                                                                                 | :heavy_minus_sign:                                                                        | Routing number for a financial institution. Either `routingNumber` or `name` is required. |
| `state`                                                                                   | *?string*                                                                                 | :heavy_minus_sign:                                                                        | The state where a financial institution is based.                                         |
| `limit`                                                                                   | *?int*                                                                                    | :heavy_minus_sign:                                                                        | Maximum results returned by a search.                                                     |

### Response

**[?Operations\ListInstitutionsResponse](../../Models/Operations/ListInstitutionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |