# OnboardingInvites

## Overview

### Available Operations

* [create](#create) - Create an invitation containing a unique link that allows the recipient to onboard their organization with Moov.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.write` scope.

## create

Create an invitation containing a unique link that allows the recipient to onboard their organization with Moov.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="createOnboardingInvite" method="post" path="/onboarding-invites" -->
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

$request = new Components\OnboardingInviteRequest(
    scopes: [
        Components\ApplicationScope::AccountsRead,
    ],
    grantScopes: [
        Components\ApplicationScope::TransfersWrite,
    ],
    capabilities: [
        Components\CapabilityID::Transfers,
    ],
    feePlanCodes: [
        'merchant-direct',
    ],
    prefill: new Components\CreateAccount(
        accountType: Components\CreateAccountType::Business,
        profile: new Components\CreateProfile(
            business: new Components\CreateBusinessProfile(
                legalBusinessName: 'Whole Body Fitness LLC',
            ),
        ),
    ),
);

$response = $sdk->onboardingInvites->create(
    request: $request
);

if ($response->onboardingInvite !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Components\OnboardingInviteRequest](../../Models/Components/OnboardingInviteRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateOnboardingInviteResponse](../../Models/Operations/CreateOnboardingInviteResponse.md)**

### Errors

| Error Type                   | Status Code                  | Content Type                 |
| ---------------------------- | ---------------------------- | ---------------------------- |
| Errors\GenericError          | 400, 409                     | application/json             |
| Errors\OnboardingInviteError | 422                          | application/json             |
| Errors\APIException          | 4XX, 5XX                     | \*/\*                        |