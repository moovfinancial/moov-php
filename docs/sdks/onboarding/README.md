# Onboarding

## Overview

### Available Operations

* [listInvites](#listinvites) - List all the onboarding invites created by the caller's account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.read` scope.
* [getInvite](#getinvite) - Retrieve details about an onboarding invite.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.read` scope.
* [revokeInvite](#revokeinvite) - Revoke an onboarding invite, rendering the invitation link unusable.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.write` scope.

## listInvites

List all the onboarding invites created by the caller's account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="listOnboardingInvites" method="get" path="/onboarding-invites" -->
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



$response = $sdk->onboarding->listInvites(

);

if ($response->onboardingInvites !== null) {
    // handle response
}
```

### Response

**[?Operations\ListOnboardingInvitesResponse](../../Models/Operations/ListOnboardingInvitesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getInvite

Retrieve details about an onboarding invite.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getOnboardingInvite" method="get" path="/onboarding-invites/{code}" -->
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



$response = $sdk->onboarding->getInvite(
    code: 'N1IA5eWYNh'
);

if ($response->onboardingInvite !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        | Example            |
| ------------------ | ------------------ | ------------------ | ------------------ | ------------------ |
| `code`             | *string*           | :heavy_check_mark: | N/A                | N1IA5eWYNh         |

### Response

**[?Operations\GetOnboardingInviteResponse](../../Models/Operations/GetOnboardingInviteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## revokeInvite

Revoke an onboarding invite, rendering the invitation link unusable.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="revokeOnboardingInvite" method="delete" path="/onboarding-invites/{code}" -->
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



$response = $sdk->onboarding->revokeInvite(
    code: 'N1IA5eWYNh'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        | Example            |
| ------------------ | ------------------ | ------------------ | ------------------ | ------------------ |
| `code`             | *string*           | :heavy_check_mark: | N/A                | N1IA5eWYNh         |

### Response

**[?Operations\RevokeOnboardingInviteResponse](../../Models/Operations/RevokeOnboardingInviteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |