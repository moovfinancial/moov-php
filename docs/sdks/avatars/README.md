# Avatars

## Overview

### Available Operations

* [get](#get) - Get avatar image for an account using a unique ID.    

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/profile-enrichment.read` scope.
* [upload](#upload) - Upload a user avatar image for an account.

The image will be normalized to 512x512 PNG format and stored separately from
automatically discovered logos. User-uploaded avatars take precedence over enriched avatars at read time.

This endpoint only accepts accountID values for the uniqueID parameter.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts.write` scope.
* [delete](#delete) - Delete a user-uploaded avatar for an account.

After deletion, the avatar endpoint will fall back to the enriched avatar
or an account-type-aware fallback icon.

This endpoint only accepts accountID values for the uniqueID parameter.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts.write` scope.

## get

Get avatar image for an account using a unique ID.    

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/profile-enrichment.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAvatar" method="get" path="/avatars/{uniqueID}" -->
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



$response = $sdk->avatars->get(
    uniqueID: '<id>'
);

if ($response->bytes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `uniqueID`                                                                                               | *string*                                                                                                 | :heavy_check_mark:                                                                                       | Any unique ID associated with an account such as accountID, representativeID, routing number, or userID. |

### Response

**[?Operations\GetAvatarResponse](../../Models/Operations/GetAvatarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## upload

Upload a user avatar image for an account.

The image will be normalized to 512x512 PNG format and stored separately from
automatically discovered logos. User-uploaded avatars take precedence over enriched avatars at read time.

This endpoint only accepts accountID values for the uniqueID parameter.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="uploadAvatar" method="put" path="/avatars/{uniqueID}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Models\Operations;

$sdk = MoovPhp\Moov::builder()->build();

$avatarUploadRequest = new Components\AvatarUploadRequest(
    file: new Components\AvatarUploadRequestFile(
        fileName: 'example.file',
        content: file_get_contents('example.file');,
    ),
);
$requestSecurity = new Operations\UploadAvatarSecurity(
    username: '',
);

$response = $sdk->avatars->upload(
    security: $requestSecurity,
    uniqueID: '<id>',
    avatarUploadRequest: $avatarUploadRequest

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `security`                                                                             | [Operations\UploadAvatarSecurity](../../Models/Operations/UploadAvatarSecurity.md)     | :heavy_check_mark:                                                                     | The security requirements to use for the request.                                      |
| `uniqueID`                                                                             | *string*                                                                               | :heavy_check_mark:                                                                     | The accountID to upload the avatar for. Only accountID values are accepted for writes. |
| `avatarUploadRequest`                                                                  | [Components\AvatarUploadRequest](../../Models/Components/AvatarUploadRequest.md)       | :heavy_check_mark:                                                                     | N/A                                                                                    |

### Response

**[?Operations\UploadAvatarResponse](../../Models/Operations/UploadAvatarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## delete

Delete a user-uploaded avatar for an account.

After deletion, the avatar endpoint will fall back to the enriched avatar
or an account-type-aware fallback icon.

This endpoint only accepts accountID values for the uniqueID parameter.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="deleteAvatar" method="delete" path="/avatars/{uniqueID}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Operations;

$sdk = MoovPhp\Moov::builder()->build();


$requestSecurity = new Operations\DeleteAvatarSecurity(
    username: '',
);

$response = $sdk->avatars->delete(
    security: $requestSecurity,
    uniqueID: '<id>'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `security`                                                                             | [Operations\DeleteAvatarSecurity](../../Models/Operations/DeleteAvatarSecurity.md)     | :heavy_check_mark:                                                                     | The security requirements to use for the request.                                      |
| `uniqueID`                                                                             | *string*                                                                               | :heavy_check_mark:                                                                     | The accountID to delete the avatar for. Only accountID values are accepted for writes. |

### Response

**[?Operations\DeleteAvatarResponse](../../Models/Operations/DeleteAvatarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |