# Authentication
(*authentication*)

## Overview

### Available Operations

* [createAuthToken](#createauthtoken) - Create or refresh an access token.
* [revokeAuthToken](#revokeauthtoken) - Revoke an auth token.

Allows clients to notify the authorization server that a previously obtained refresh or access token is no longer needed.

## createAuthToken

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
    grantType: Components\GrantType::RefreshToken,
    clientId: '5clTR_MdVrrkgxw2',
    clientSecret: 'dNC-hg7sVm22jc3g_Eogtyu0_1Mqh_4-',
    scope: '/accounts.read /accounts.write',
    refreshToken: 'eyJhbGc0eSI6TQSIsImN0kpXVCIsImtp6IkpXVsImtpZC0a...',
);

$response = $sdk->authentication->createAuthToken(
    authTokenRequest: $authTokenRequest,
    xMoovVersion: Components\Versions::V20240000

);

if ($response->authToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `authTokenRequest`                                                         | [Components\AuthTokenRequest](../../Models/Components/AuthTokenRequest.md) | :heavy_check_mark:                                                         | N/A                                                                        |
| `xMoovVersion`                                                             | [?Components\Versions](../../Models/Components/Versions.md)                | :heavy_minus_sign:                                                         | Specify an API version.                                                    |

### Response

**[?Operations\CreateAuthTokenResponse](../../Models/Operations/CreateAuthTokenResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\GenericError          | 400                          | application/json             |
| Errors\AuthTokenRequestError | 422                          | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |

## revokeAuthToken

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

$response = $sdk->authentication->revokeAuthToken(
    revokeTokenRequest: $revokeTokenRequest,
    xMoovVersion: Components\Versions::Latest

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `revokeTokenRequest`                                                           | [Components\RevokeTokenRequest](../../Models/Components/RevokeTokenRequest.md) | :heavy_check_mark:                                                             | N/A                                                                            |
| `xMoovVersion`                                                                 | [?Components\Versions](../../Models/Components/Versions.md)                    | :heavy_minus_sign:                                                             | Specify an API version.                                                        |

### Response

**[?Operations\RevokeAuthTokenResponse](../../Models/Operations/RevokeAuthTokenResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\GenericError            | 400                            | application/json               |
| Errors\RevokeTokenRequestError | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |