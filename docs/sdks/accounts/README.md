# Accounts
(*accounts*)

## Overview

### Available Operations

* [assignAccountCountries](#assignaccountcountries) - Assign the countries of operation for an account.

This endpoint will always overwrite the previously assigned values. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/profile.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [createAccount](#createaccount) - You can create **business** or **individual** accounts for your users (i.e., customers, merchants) by passing the required
information to Moov. Requirements differ per account type and requested [capabilities](https://docs.moov.io/guides/accounts/capabilities/requirements/).

If you're requesting the `wallet`, `send-funds`, `collect-funds`, or `card-issuing` capabilities, you'll need to:
  + Send Moov the user [platform terms of service agreement](https://docs.moov.io/guides/accounts/requirements/platform-agreement/) acceptance.
    This can be done upon account creation, or by [patching](https://docs.moov.io/api/moov-accounts/accounts/patch/) the account using the `termsOfService` field.
If you're creating a business account with the business type `llc`, `partnership`, or `privateCorporation`, you'll need to:
  + Provide [business representatives](https://docs.moov.io/api/moov-accounts/representatives/) after creating the account.
  + [Patch](https://docs.moov.io/api/moov-accounts/accounts/patch/) the account to indicate that business representative ownership information is complete.

Visit our documentation to read more about [creating accounts](https://docs.moov.io/guides/accounts/create-accounts/) and [verification requirements](https://docs.moov.io/guides/accounts/requirements/identity-verification/).
Note that the `mode` field (for production or sandbox) is only required when creating a _facilitator_ account. All non-facilitator account requests will ignore the mode field and be set to the calling facilitator's mode.
* [disconnectAccount](#disconnectaccount) -   This will sever the connection between you and the account specified and it will no longer be listed as active in the list of accounts. 
  This also means you'll only have read-only access to the account going forward for reporting purposes.

  To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/profile.disconnect` scope when generating 
  a [token](https://docs.moov.io/api/authentication/access-tokens/), and provide the changed information.
* [getAccount](#getaccount) - Retrieves details for the account with the specified ID.
* [getAccountCountries](#getaccountcountries) - Retrieve the specified countries of operation for an account. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/profile.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getMerchantProcessingAgreement](#getmerchantprocessingagreement) - Retrieve a merchant account's processing agreement.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.
* [getTermsOfServiceToken](#gettermsofservicetoken) -   Generates a non-expiring token that can then be used to accept Moov’s terms of service. 

  This token can only be generated via API. Any Moov account requesting the collect funds, send funds, wallet, or card issuing capabilities 
  must accept Moov’s terms of service, then have the generated terms of service token patched to the account. Read more in our [documentation](https://docs.moov.io/guides/accounts/requirements/platform-agreement/).
* [listAccounts](#listaccounts) - List or search accounts to which the caller is connected.

All supported query parameters are optional. If none are provided the response will include all connected accounts.
Pagination is supported via the `skip` and `count` query parameters.
Searching by name and email will overlap and return results based on relevance.
* [patchAccount](#patchaccount) - When **can** profile data be updated:
  + For unverified accounts, all profile data can be edited.
  + During the verification process, missing or incomplete profile data can be edited.
  + Verified accounts can only add missing profile data.

  When **can't** profile data be updated:
  + Verified accounts cannot change any existing profile data.

If you need to update information in a locked state, please contact Moov support.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/profile.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/), and provide the changed information.

## assignAccountCountries

Assign the countries of operation for an account.

This endpoint will always overwrite the previously assigned values. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/profile.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$accountCountries = new Components\AccountCountries(
    countries: [
        'United States',
    ],
);
$requestSecurity = new Operations\AssignAccountCountriesSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->accounts->assignAccountCountries(
    security: $requestSecurity,
    accountID: '9ba3f09c-c93c-4ca1-b68f-1dbb0841a40a',
    accountCountries: $accountCountries,
    xMoovVersion: Components\Versions::Latest

);

if ($response->accountCountries !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `security`                                                                                             | [Operations\AssignAccountCountriesSecurity](../../Models/Operations/AssignAccountCountriesSecurity.md) | :heavy_check_mark:                                                                                     | The security requirements to use for the request.                                                      |
| `accountID`                                                                                            | *string*                                                                                               | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `accountCountries`                                                                                     | [Components\AccountCountries](../../Models/Components/AccountCountries.md)                             | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `xMoovVersion`                                                                                         | [?Components\Versions](../../Models/Components/Versions.md)                                            | :heavy_minus_sign:                                                                                     | Specify an API version.                                                                                |

### Response

**[?Operations\AssignAccountCountriesResponse](../../Models/Operations/AssignAccountCountriesResponse.md)**

### Errors

| Error Type                  | Status Code                 | Content Type                |
| --------------------------- | --------------------------- | --------------------------- |
| Errors\GenericError         | 400, 409                    | application/json            |
| Errors\AssignCountriesError | 422                         | application/json            |
| Errors\APIException         | 4XX, 5XX                    | \*/\*                       |

## createAccount

You can create **business** or **individual** accounts for your users (i.e., customers, merchants) by passing the required
information to Moov. Requirements differ per account type and requested [capabilities](https://docs.moov.io/guides/accounts/capabilities/requirements/).

If you're requesting the `wallet`, `send-funds`, `collect-funds`, or `card-issuing` capabilities, you'll need to:
  + Send Moov the user [platform terms of service agreement](https://docs.moov.io/guides/accounts/requirements/platform-agreement/) acceptance.
    This can be done upon account creation, or by [patching](https://docs.moov.io/api/moov-accounts/accounts/patch/) the account using the `termsOfService` field.
If you're creating a business account with the business type `llc`, `partnership`, or `privateCorporation`, you'll need to:
  + Provide [business representatives](https://docs.moov.io/api/moov-accounts/representatives/) after creating the account.
  + [Patch](https://docs.moov.io/api/moov-accounts/accounts/patch/) the account to indicate that business representative ownership information is complete.

Visit our documentation to read more about [creating accounts](https://docs.moov.io/guides/accounts/create-accounts/) and [verification requirements](https://docs.moov.io/guides/accounts/requirements/identity-verification/).
Note that the `mode` field (for production or sandbox) is only required when creating a _facilitator_ account. All non-facilitator account requests will ignore the mode field and be set to the calling facilitator's mode.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$createAccount = new Components\CreateAccount(
    accountType: Components\AccountType::Business,
    profile: new Components\CreateProfile(
        business: new Components\CreateBusinessProfile(
            legalBusinessName: 'Whole Body Fitness LLC',
        ),
    ),
);
$requestSecurity = new Operations\CreateAccountSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->accounts->createAccount(
    security: $requestSecurity,
    createAccount: $createAccount,
    xMoovVersion: Components\Versions::Latest,
    xWaitFor: Components\AccountWaitFor::Connection

);

if ($response->account !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 | Example                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                  | [Operations\CreateAccountSecurity](../../Models/Operations/CreateAccountSecurity.md)                                        | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |                                                                                                                             |
| `createAccount`                                                                                                             | [Components\CreateAccount](../../Models/Components/CreateAccount.md)                                                        | :heavy_check_mark:                                                                                                          | N/A                                                                                                                         | {<br/>"accountType": "business",<br/>"profile": {<br/>"business": {<br/>"legalBusinessName": "Whole Body Fitness LLC"<br/>}<br/>}<br/>} |
| `xMoovVersion`                                                                                                              | [?Components\Versions](../../Models/Components/Versions.md)                                                                 | :heavy_minus_sign:                                                                                                          | Specify an API version.                                                                                                     |                                                                                                                             |
| `xWaitFor`                                                                                                                  | [?Components\AccountWaitFor](../../Models/Components/AccountWaitFor.md)                                                     | :heavy_minus_sign:                                                                                                          | Optional header that indicates whether to wait for the connection to be created before returning from the account creation. |                                                                                                                             |

### Response

**[?Operations\CreateAccountResponse](../../Models/Operations/CreateAccountResponse.md)**

### Errors

| Error Type                       | Status Code                      | Content Type                     |
| -------------------------------- | -------------------------------- | -------------------------------- |
| Errors\GenericError              | 400, 409                         | application/json                 |
| Errors\CreateAccountResponseBody | 422                              | application/json                 |
| Errors\APIException              | 4XX, 5XX                         | \*/\*                            |

## disconnectAccount

  This will sever the connection between you and the account specified and it will no longer be listed as active in the list of accounts. 
  This also means you'll only have read-only access to the account going forward for reporting purposes.

  To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/profile.disconnect` scope when generating 
  a [token](https://docs.moov.io/api/authentication/access-tokens/), and provide the changed information.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\DisconnectAccountSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->accounts->disconnectAccount(
    security: $requestSecurity,
    accountID: '97814a93-ba26-470e-bb15-3cb32711e8ea',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `security`                                                                                   | [Operations\DisconnectAccountSecurity](../../Models/Operations/DisconnectAccountSecurity.md) | :heavy_check_mark:                                                                           | The security requirements to use for the request.                                            |
| `accountID`                                                                                  | *string*                                                                                     | :heavy_check_mark:                                                                           | N/A                                                                                          |
| `xMoovVersion`                                                                               | [?Components\Versions](../../Models/Components/Versions.md)                                  | :heavy_minus_sign:                                                                           | Specify an API version.                                                                      |

### Response

**[?Operations\DisconnectAccountResponse](../../Models/Operations/DisconnectAccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getAccount

Retrieves details for the account with the specified ID.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetAccountSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->accounts->getAccount(
    security: $requestSecurity,
    accountID: '45ce7519-7f28-40c8-94bf-6edae7a38315',
    xMoovVersion: Components\Versions::Latest

);

if ($response->account !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `security`                                                                     | [Operations\GetAccountSecurity](../../Models/Operations/GetAccountSecurity.md) | :heavy_check_mark:                                                             | The security requirements to use for the request.                              |
| `accountID`                                                                    | *string*                                                                       | :heavy_check_mark:                                                             | N/A                                                                            |
| `xMoovVersion`                                                                 | [?Components\Versions](../../Models/Components/Versions.md)                    | :heavy_minus_sign:                                                             | Specify an API version.                                                        |

### Response

**[?Operations\GetAccountResponse](../../Models/Operations/GetAccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getAccountCountries

Retrieve the specified countries of operation for an account. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/profile.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetAccountCountriesSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->accounts->getAccountCountries(
    security: $requestSecurity,
    accountID: 'df471fd8-7bb3-4db3-bf74-52fe588b8d2b',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->accountCountries !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `security`                                                                                       | [Operations\GetAccountCountriesSecurity](../../Models/Operations/GetAccountCountriesSecurity.md) | :heavy_check_mark:                                                                               | The security requirements to use for the request.                                                |
| `accountID`                                                                                      | *string*                                                                                         | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `xMoovVersion`                                                                                   | [?Components\Versions](../../Models/Components/Versions.md)                                      | :heavy_minus_sign:                                                                               | Specify an API version.                                                                          |

### Response

**[?Operations\GetAccountCountriesResponse](../../Models/Operations/GetAccountCountriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getMerchantProcessingAgreement

Retrieve a merchant account's processing agreement.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetMerchantProcessingAgreementSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->accounts->getMerchantProcessingAgreement(
    security: $requestSecurity,
    accountID: 'd2cfd0d3-6efb-4bc4-a193-53f35dd0d912',
    xMoovVersion: Components\Versions::Latest

);

if ($response->bytes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                             | [Operations\GetMerchantProcessingAgreementSecurity](../../Models/Operations/GetMerchantProcessingAgreementSecurity.md) | :heavy_check_mark:                                                                                                     | The security requirements to use for the request.                                                                      |
| `accountID`                                                                                                            | *string*                                                                                                               | :heavy_check_mark:                                                                                                     | N/A                                                                                                                    |
| `xMoovVersion`                                                                                                         | [?Components\Versions](../../Models/Components/Versions.md)                                                            | :heavy_minus_sign:                                                                                                     | Specify an API version.                                                                                                |

### Response

**[?Operations\GetMerchantProcessingAgreementResponse](../../Models/Operations/GetMerchantProcessingAgreementResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getTermsOfServiceToken

  Generates a non-expiring token that can then be used to accept Moov’s terms of service. 

  This token can only be generated via API. Any Moov account requesting the collect funds, send funds, wallet, or card issuing capabilities 
  must accept Moov’s terms of service, then have the generated terms of service token patched to the account. Read more in our [documentation](https://docs.moov.io/guides/accounts/requirements/platform-agreement/).

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



$response = $sdk->accounts->getTermsOfServiceToken(
    xMoovVersion: Components\Versions::Latest,
    origin: '<value>',
    referer: 'powerless-humidity.org'

);

if ($response->termsOfServiceToken !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `xMoovVersion`                                                                                                 | [?Components\Versions](../../Models/Components/Versions.md)                                                    | :heavy_minus_sign:                                                                                             | Specify an API version.                                                                                        |
| `origin`                                                                                                       | *?string*                                                                                                      | :heavy_minus_sign:                                                                                             | Indicates the domain from which the request originated. Required if referer header is not present.             |
| `referer`                                                                                                      | *?string*                                                                                                      | :heavy_minus_sign:                                                                                             | Specifies the URL of the resource from which the request originated. Required if origin header is not present. |

### Response

**[?Operations\GetTermsOfServiceTokenResponse](../../Models/Operations/GetTermsOfServiceTokenResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listAccounts

List or search accounts to which the caller is connected.

All supported query parameters are optional. If none are provided the response will include all connected accounts.
Pagination is supported via the `skip` and `count` query parameters.
Searching by name and email will overlap and return results based on relevance.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$request = new Operations\ListAccountsRequest(
    type: Components\AccountType::Business,
    skip: 60,
    count: 20,
);
$requestSecurity = new Operations\ListAccountsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->accounts->listAccounts(
    request: $request,
    security: $requestSecurity
);

if ($response->accounts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListAccountsRequest](../../Models/Operations/ListAccountsRequest.md)   | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |
| `security`                                                                         | [Operations\ListAccountsSecurity](../../Models/Operations/ListAccountsSecurity.md) | :heavy_check_mark:                                                                 | The security requirements to use for the request.                                  |

### Response

**[?Operations\ListAccountsResponse](../../Models/Operations/ListAccountsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## patchAccount

When **can** profile data be updated:
  + For unverified accounts, all profile data can be edited.
  + During the verification process, missing or incomplete profile data can be edited.
  + Verified accounts can only add missing profile data.

  When **can't** profile data be updated:
  + Verified accounts cannot change any existing profile data.

If you need to update information in a locked state, please contact Moov support.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/profile.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/), and provide the changed information.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$createAccountUpdate = new Components\CreateAccountUpdate(
    accountType: Components\AccountType::Business,
    profile: new Components\CreateProfileUpdate(
        business: new Components\CreateBusinessProfileUpdate(
            legalBusinessName: 'Whole Body Fitness LLC',
        ),
    ),
);
$requestSecurity = new Operations\PatchAccountSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->accounts->patchAccount(
    security: $requestSecurity,
    accountID: '7909eaa5-21eb-4fc4-bc91-9f7385408829',
    createAccountUpdate: $createAccountUpdate,
    xMoovVersion: Components\Versions::V20240000

);

if ($response->account !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 | Example                                                                                                     |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                  | [Operations\PatchAccountSecurity](../../Models/Operations/PatchAccountSecurity.md)                          | :heavy_check_mark:                                                                                          | The security requirements to use for the request.                                                           |                                                                                                             |
| `accountID`                                                                                                 | *string*                                                                                                    | :heavy_check_mark:                                                                                          | N/A                                                                                                         |                                                                                                             |
| `createAccountUpdate`                                                                                       | [Components\CreateAccountUpdate](../../Models/Components/CreateAccountUpdate.md)                            | :heavy_check_mark:                                                                                          | N/A                                                                                                         | {<br/>"accountType": "business",<br/>"profile": {<br/>"business": {<br/>"legalBusinessName": "Whole Body Fitness LLC"<br/>}<br/>}<br/>} |
| `xMoovVersion`                                                                                              | [?Components\Versions](../../Models/Components/Versions.md)                                                 | :heavy_minus_sign:                                                                                          | Specify an API version.                                                                                     |                                                                                                             |

### Response

**[?Operations\PatchAccountResponse](../../Models/Operations/PatchAccountResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\GenericError             | 400, 409                        | application/json                |
| Errors\PatchAccountResponseBody | 422                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |