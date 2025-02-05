# Authentication
(*authentication*)

## Overview

### Available Operations

* [createAccessToken](#createaccesstoken) - Create or refresh an access token.
* [revokeAccessToken](#revokeaccesstoken) - Revoke an auth token.

Allows clients to notify the authorization server that a previously obtained refresh or access token is no longer needed.

## createAccessToken

Create or refresh an access token.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;

$sdk = OpenAPI\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$authTokenRequest = new Components\AuthTokenRequest(
    grantType: Components\GrantType::ClientCredentials,
    clientId: '5clTR_MdVrrkgxw2',
    clientSecret: 'dNC-hg7sVm22jc3g_Eogtyu0_1Mqh_4-',
    scope: '/accounts.read /accounts.write',
    refreshToken: 'eyJhbGc0eSI6TQSIsImN0kpXVCIsImtp6IkpXVsImtpZC0a...',
);

$response = $sdk->authentication->createAccessToken(
    authTokenRequest: $authTokenRequest,
    xMoovVersion: 'v2024.01'

);

if ($response->authToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `authTokenRequest`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | [Components\AuthTokenRequest](../../Models/Components/AuthTokenRequest.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                                             | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\CreateAccessTokenResponse](../../Models/Operations/CreateAccessTokenResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\GenericError          | 400                          | application/json             |
| Errors\AuthTokenRequestError | 422                          | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |

## revokeAccessToken

Revoke an auth token.

Allows clients to notify the authorization server that a previously obtained refresh or access token is no longer needed.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;

$sdk = OpenAPI\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$revokeTokenRequest = new Components\RevokeTokenRequest(
    token: '<value>',
    clientId: '5clTR_MdVrrkgxw2',
    clientSecret: 'dNC-hg7sVm22jc3g_Eogtyu0_1Mqh_4-',
);

$response = $sdk->authentication->revokeAccessToken(
    revokeTokenRequest: $revokeTokenRequest,
    xMoovVersion: 'v2024.01'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `revokeTokenRequest`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | [Components\RevokeTokenRequest](../../Models/Components/RevokeTokenRequest.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\RevokeAccessTokenResponse](../../Models/Operations/RevokeAccessTokenResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\GenericError            | 400                            | application/json               |
| Errors\RevokeTokenRequestError | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |