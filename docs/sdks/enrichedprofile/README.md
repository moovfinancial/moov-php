# EnrichedProfile
(*enrichedProfile*)

## Overview

### Available Operations

* [getEnrichmentProfile](#getenrichmentprofile) -   Fetch enriched profile data. Requires a valid email address. This service is offered in collaboration with Clearbit. 

  To use this endpoint from the browser, you'll need to specify the `/profile-enrichment.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

## getEnrichmentProfile

  Fetch enriched profile data. Requires a valid email address. This service is offered in collaboration with Clearbit. 

  To use this endpoint from the browser, you'll need to specify the `/profile-enrichment.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetEnrichmentProfileSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->enrichedProfile->getEnrichmentProfile(
    security: $requestSecurity,
    email: 'Sheldon.Effertz@gmail.com',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->enrichedBusinessProfile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `security`                                                                                         | [Operations\GetEnrichmentProfileSecurity](../../Models/Operations/GetEnrichmentProfileSecurity.md) | :heavy_check_mark:                                                                                 | The security requirements to use for the request.                                                  |
| `email`                                                                                            | *string*                                                                                           | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `xMoovVersion`                                                                                     | [?Components\Versions](../../Models/Components/Versions.md)                                        | :heavy_minus_sign:                                                                                 | Specify an API version.                                                                            |

### Response

**[?Operations\GetEnrichmentProfileResponse](../../Models/Operations/GetEnrichmentProfileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |