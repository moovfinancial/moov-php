# Avatars
(*avatars*)

## Overview

### Available Operations

* [getAvatar](#getavatar) - Get avatar image for an account using a unique ID.    

To use this endpoint from the browser, you'll need to specify the `/profile-enrichment.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

## getAvatar

Get avatar image for an account using a unique ID.    

To use this endpoint from the browser, you'll need to specify the `/profile-enrichment.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetAvatarSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->avatars->getAvatar(
    security: $requestSecurity,
    uniqueID: '<id>',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->twoHundredImagePngBytes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `security`                                                                                               | [Operations\GetAvatarSecurity](../../Models/Operations/GetAvatarSecurity.md)                             | :heavy_check_mark:                                                                                       | The security requirements to use for the request.                                                        |
| `uniqueID`                                                                                               | *string*                                                                                                 | :heavy_check_mark:                                                                                       | Any unique ID associated with an account such as accountID, representativeID, routing number, or userID. |
| `xMoovVersion`                                                                                           | [?Components\Versions](../../Models/Components/Versions.md)                                              | :heavy_minus_sign:                                                                                       | Specify an API version.                                                                                  |

### Response

**[?Operations\GetAvatarResponse](../../Models/Operations/GetAvatarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |