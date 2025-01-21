# EnrichedAddress
(*enrichedAddress*)

## Overview

### Available Operations

* [getEnrichmentAddress](#getenrichmentaddress) -   Fetch enriched address suggestions. Requires a partial address. 
  
  To use this endpoint from the browser, you'll need to specify the `/profile-enrichment.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

## getEnrichmentAddress

  Fetch enriched address suggestions. Requires a partial address. 
  
  To use this endpoint from the browser, you'll need to specify the `/profile-enrichment.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$request = new Operations\GetEnrichmentAddressRequest(
    search: '<value>',
);
$requestSecurity = new Operations\GetEnrichmentAddressSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->enrichedAddress->getEnrichmentAddress(
    request: $request,
    security: $requestSecurity
);

if ($response->enrichedAddressResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetEnrichmentAddressRequest](../../Models/Operations/GetEnrichmentAddressRequest.md)   | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |
| `security`                                                                                         | [Operations\GetEnrichmentAddressSecurity](../../Models/Operations/GetEnrichmentAddressSecurity.md) | :heavy_check_mark:                                                                                 | The security requirements to use for the request.                                                  |

### Response

**[?Operations\GetEnrichmentAddressResponse](../../Models/Operations/GetEnrichmentAddressResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |