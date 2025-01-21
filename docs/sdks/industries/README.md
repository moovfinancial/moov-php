# Industries
(*industries*)

## Overview

### Available Operations

* [listIndustries](#listindustries) -   Returns a list of all industry titles and their corresponding MCC/SIC/NAICS codes. Results are ordered by title.    
  
  To use this endpoint from the browser, you'll need to specify the `/profile-enrichment.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

## listIndustries

  Returns a list of all industry titles and their corresponding MCC/SIC/NAICS codes. Results are ordered by title.    
  
  To use this endpoint from the browser, you'll need to specify the `/profile-enrichment.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListIndustriesSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->industries->listIndustries(
    security: $requestSecurity,
    xMoovVersion: Components\Versions::Latest

);

if ($response->enrichedIndustries !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `security`                                                                             | [Operations\ListIndustriesSecurity](../../Models/Operations/ListIndustriesSecurity.md) | :heavy_check_mark:                                                                     | The security requirements to use for the request.                                      |
| `xMoovVersion`                                                                         | [?Components\Versions](../../Models/Components/Versions.md)                            | :heavy_minus_sign:                                                                     | Specify an API version.                                                                |

### Response

**[?Operations\ListIndustriesResponse](../../Models/Operations/ListIndustriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |