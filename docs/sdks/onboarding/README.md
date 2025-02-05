# Onboarding
(*onboarding*)

## Overview

### Available Operations

* [createInvite](#createinvite) - Create an invitation containing a unique link that allows the recipient to onboard their organization with Moov.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.write` scope.
* [getInvite](#getinvite) - Retrieve details about an onboarding invite.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.read` scope.
* [listInvites](#listinvites) - List all the onboarding invites created by the caller's account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.read` scope.
* [revokeInvite](#revokeinvite) - Revoke an onboarding invite, rendering the invitation link unusable.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.write` scope.

## createInvite

Create an invitation containing a unique link that allows the recipient to onboard their organization with Moov.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.write` scope.

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

$response = $sdk->onboarding->createInvite(
    onboardingInviteRequest: $onboardingInviteRequest,
    xMoovVersion: 'v2024.01'

);

if ($response->onboardingInvite !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `onboardingInviteRequest`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | [Components\OnboardingInviteRequest](../../Models/Components/OnboardingInviteRequest.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\CreateOnboardingInviteResponse](../../Models/Operations/CreateOnboardingInviteResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\GenericError          | 400, 409                     | application/json             |
| Errors\OnboardingInviteError | 422                          | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |

## getInvite

Retrieve details about an onboarding invite.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.read` scope.

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



$response = $sdk->onboarding->getInvite(
    code: 'N1IA5eWYNh',
    xMoovVersion: 'v2024.01'

);

if ($response->onboardingInvite !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | Example                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `code`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | N1IA5eWYNh                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |

### Response

**[?Operations\GetOnboardingInviteResponse](../../Models/Operations/GetOnboardingInviteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listInvites

List all the onboarding invites created by the caller's account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.read` scope.

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



$response = $sdk->onboarding->listInvites(
    xMoovVersion: 'v2024.01'
);

if ($response->onboardingInvites !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\ListOnboardingInvitesResponse](../../Models/Operations/ListOnboardingInvitesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## revokeInvite

Revoke an onboarding invite, rendering the invitation link unusable.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.write` scope.

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



$response = $sdk->onboarding->revokeInvite(
    code: 'N1IA5eWYNh',
    xMoovVersion: 'v2024.01'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | Example                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `code`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | N1IA5eWYNh                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |

### Response

**[?Operations\RevokeOnboardingInviteResponse](../../Models/Operations/RevokeOnboardingInviteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |