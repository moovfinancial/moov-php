# Ping
(*ping*)

## Overview

### Available Operations

* [ping](#ping) - A simple endpoint to check auth.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/ping.read` scope.

## ping

A simple endpoint to check auth.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/ping.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\PingSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->ping->ping(
    security: $requestSecurity,
    xMoovVersion: Components\Versions::Latest

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                          | Type                                                               | Required                                                           | Description                                                        |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `security`                                                         | [Operations\PingSecurity](../../Models/Operations/PingSecurity.md) | :heavy_check_mark:                                                 | The security requirements to use for the request.                  |
| `xMoovVersion`                                                     | [?Components\Versions](../../Models/Components/Versions.md)        | :heavy_minus_sign:                                                 | Specify an API version.                                            |

### Response

**[?Operations\PingResponse](../../Models/Operations/PingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |