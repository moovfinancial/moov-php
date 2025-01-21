# Institutions
(*institutions*)

## Overview

### Available Operations

* [listInstitutions](#listinstitutions) -   Search for institutions by either their name or routing number.
  
  To use this endpoint from the browser, you'll need to specify the `/fed.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

## listInstitutions

  Search for institutions by either their name or routing number.
  
  To use this endpoint from the browser, you'll need to specify the `/fed.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$request = new Operations\ListInstitutionsRequest();
$requestSecurity = new Operations\ListInstitutionsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->institutions->listInstitutions(
    request: $request,
    security: $requestSecurity
);

if ($response->financialInstitutions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListInstitutionsRequest](../../Models/Operations/ListInstitutionsRequest.md)   | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |
| `security`                                                                                 | [Operations\ListInstitutionsSecurity](../../Models/Operations/ListInstitutionsSecurity.md) | :heavy_check_mark:                                                                         | The security requirements to use for the request.                                          |

### Response

**[?Operations\ListInstitutionsResponse](../../Models/Operations/ListInstitutionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |