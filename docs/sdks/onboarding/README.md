# Onboarding
(*onboarding*)

## Overview

### Available Operations

* [createOnboardingInvite](#createonboardinginvite) - Create an invitation containing a unique link that allows the recipient to onboard their organization with Moov.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.write` scope.
* [getOnboardingInvite](#getonboardinginvite) - Retrieve details about an onboarding invite.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.read` scope.
* [listOnboardingInvites](#listonboardinginvites) - List all the onboarding invites created by the caller's account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.read` scope.
* [revokeOnboardingInvite](#revokeonboardinginvite) - Revoke an onboarding invite, rendering the invitation link unusable.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.write` scope.

## createOnboardingInvite

Create an invitation containing a unique link that allows the recipient to onboard their organization with Moov.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.write` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$onboardingInviteRequest = new Components\OnboardingInviteRequest(
    scopes: [
        Components\ApplicationScope::AccountsRead,
    ],
    capabilities: [
        Components\CapabilityID::Transfers,
    ],
    feePlanCodes: [
        'merchant-direct',
    ],
    prefill: new Components\CreateAccount(
        accountType: Components\AccountType::Business,
        profile: new Components\CreateProfile(
            business: new Components\CreateBusinessProfile(
                legalBusinessName: 'Whole Body Fitness LLC',
            ),
        ),
    ),
);
$requestSecurity = new Operations\CreateOnboardingInviteSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->onboarding->createOnboardingInvite(
    security: $requestSecurity,
    onboardingInviteRequest: $onboardingInviteRequest,
    xMoovVersion: Components\Versions::Latest

);

if ($response->onboardingInvite !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `security`                                                                                             | [Operations\CreateOnboardingInviteSecurity](../../Models/Operations/CreateOnboardingInviteSecurity.md) | :heavy_check_mark:                                                                                     | The security requirements to use for the request.                                                      |
| `onboardingInviteRequest`                                                                              | [Components\OnboardingInviteRequest](../../Models/Components/OnboardingInviteRequest.md)               | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `xMoovVersion`                                                                                         | [?Components\Versions](../../Models/Components/Versions.md)                                            | :heavy_minus_sign:                                                                                     | Specify an API version.                                                                                |

### Response

**[?Operations\CreateOnboardingInviteResponse](../../Models/Operations/CreateOnboardingInviteResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\GenericError          | 400, 409                     | application/json             |
| Errors\OnboardingInviteError | 422                          | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |

## getOnboardingInvite

Retrieve details about an onboarding invite.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetOnboardingInviteSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->onboarding->getOnboardingInvite(
    security: $requestSecurity,
    code: 'N1IA5eWYNh',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->onboardingInvite !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      | Example                                                                                          |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `security`                                                                                       | [Operations\GetOnboardingInviteSecurity](../../Models/Operations/GetOnboardingInviteSecurity.md) | :heavy_check_mark:                                                                               | The security requirements to use for the request.                                                |                                                                                                  |
| `code`                                                                                           | *string*                                                                                         | :heavy_check_mark:                                                                               | N/A                                                                                              | N1IA5eWYNh                                                                                       |
| `xMoovVersion`                                                                                   | [?Components\Versions](../../Models/Components/Versions.md)                                      | :heavy_minus_sign:                                                                               | Specify an API version.                                                                          |                                                                                                  |

### Response

**[?Operations\GetOnboardingInviteResponse](../../Models/Operations/GetOnboardingInviteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listOnboardingInvites

List all the onboarding invites created by the caller's account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListOnboardingInvitesSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->onboarding->listOnboardingInvites(
    security: $requestSecurity,
    xMoovVersion: Components\Versions::V20240000

);

if ($response->onboardingInvites !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `security`                                                                                           | [Operations\ListOnboardingInvitesSecurity](../../Models/Operations/ListOnboardingInvitesSecurity.md) | :heavy_check_mark:                                                                                   | The security requirements to use for the request.                                                    |
| `xMoovVersion`                                                                                       | [?Components\Versions](../../Models/Components/Versions.md)                                          | :heavy_minus_sign:                                                                                   | Specify an API version.                                                                              |

### Response

**[?Operations\ListOnboardingInvitesResponse](../../Models/Operations/ListOnboardingInvitesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## revokeOnboardingInvite

Revoke an onboarding invite, rendering the invitation link unusable.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.write` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\RevokeOnboardingInviteSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->onboarding->revokeOnboardingInvite(
    security: $requestSecurity,
    code: 'N1IA5eWYNh',
    xMoovVersion: Components\Versions::Latest

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            | Example                                                                                                |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `security`                                                                                             | [Operations\RevokeOnboardingInviteSecurity](../../Models/Operations/RevokeOnboardingInviteSecurity.md) | :heavy_check_mark:                                                                                     | The security requirements to use for the request.                                                      |                                                                                                        |
| `code`                                                                                                 | *string*                                                                                               | :heavy_check_mark:                                                                                     | N/A                                                                                                    | N1IA5eWYNh                                                                                             |
| `xMoovVersion`                                                                                         | [?Components\Versions](../../Models/Components/Versions.md)                                            | :heavy_minus_sign:                                                                                     | Specify an API version.                                                                                |                                                                                                        |

### Response

**[?Operations\RevokeOnboardingInviteResponse](../../Models/Operations/RevokeOnboardingInviteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |