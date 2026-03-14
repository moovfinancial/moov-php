# Authentication

## Overview

### Available Operations

* [revokeToken](#revoketoken) - Revoke an auth token.

Allows clients to notify the authorization server that a previously obtained refresh or access token is no longer needed.
* [createToken](#createtoken) - Create or refresh an access token.

## revokeToken

Revoke an auth token.

Allows clients to notify the authorization server that a previously obtained refresh or access token is no longer needed.

### Example Usage

<!-- UsageSnippet language="php" operationID="revokeAccessToken" method="post" path="/oauth2/revoke" -->
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

$request = new Components\RevokeTokenRequest(
    token: '<value>',
    clientId: '5clTR_MdVrrkgxw2',
    clientSecret: 'dNC-hg7sVm22jc3g_Eogtyu0_1Mqh_4-',
);

$response = $sdk->authentication->revokeToken(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Components\RevokeTokenRequest](../../Models/Components/RevokeTokenRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\RevokeAccessTokenResponse](../../Models/Operations/RevokeAccessTokenResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\GenericError            | 400                            | application/json               |
| Errors\RevokeTokenRequestError | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## createToken

Create or refresh an access token.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccessToken" method="post" path="/oauth2/token" -->
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

$request = new Components\AuthTokenRequest(
    grantType: Components\GrantType::ClientCredentials,
    clientId: '5clTR_MdVrrkgxw2',
    clientSecret: 'dNC-hg7sVm22jc3g_Eogtyu0_1Mqh_4-',
    scope: '/accounts.read /accounts.write',
    refreshToken: 'eyJhbGc0eSI6TQSIsImN0kpXVCIsImtp6IkpXVsImtpZC0a...',
);

$response = $sdk->authentication->createToken(
    request: $request
);

if ($response->authToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Components\AuthTokenRequest](../../Models/Components/AuthTokenRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\CreateAccessTokenResponse](../../Models/Operations/CreateAccessTokenResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\GenericError          | 400                          | application/json             |
| Errors\AuthTokenRequestError | 422                          | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |