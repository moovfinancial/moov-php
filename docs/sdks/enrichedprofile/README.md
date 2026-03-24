# EnrichedProfile

## Overview

### Available Operations

* [get](#get) - Fetch enriched profile data. Requires a valid email address. This service is offered in collaboration with Clearbit. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/profile-enrichment.read` scope.

## get

Fetch enriched profile data. Requires a valid email address. This service is offered in collaboration with Clearbit. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/profile-enrichment.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getEnrichmentProfile" method="get" path="/enrichment/profile" -->
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



$response = $sdk->enrichedProfile->get(
    email: 'Thaddeus.Welch@gmail.com'
);

if ($response->enrichedBusinessResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `email`            | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\GetEnrichmentProfileResponse](../../Models/Operations/GetEnrichmentProfileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |