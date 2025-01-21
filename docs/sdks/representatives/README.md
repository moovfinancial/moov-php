# Representatives
(*representatives*)

## Overview

### Available Operations

* [createRepresentative](#createrepresentative) - Moov accounts associated with businesses require information regarding individuals who represent the business. 
You can provide this information by creating a representative. Each account is allowed a maximum of 7 representatives. 
Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [deleteRepresentative](#deleterepresentative) - Deletes a business representative associated with a Moov account. Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getRepresentative](#getrepresentative) - Retrieve a specific representative associated with a given Moov account. Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listRepresentatives](#listrepresentatives) - A Moov account may have multiple representatives depending on the associated business’s ownership and management structure. 
You can use this method to list all the representatives for a given Moov account. 
Note that Moov accounts associated with an individual do not have representatives. 
Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [updateRepresentative](#updaterepresentative) - If a representative’s information has changed you can patch the information associated with a specific representative ID. 
Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

When **can** profile data be updated:

- For unverified representatives, all profile data can be edited.
- During the verification process, missing or incomplete profile data can be edited.
- Verified representatives can only add missing profile data.

When **can’t** profile data be updated:

- Verified representatives cannot change any existing profile data.

If you need to update information in a locked state, please contact Moov support.

## createRepresentative

Moov accounts associated with businesses require information regarding individuals who represent the business. 
You can provide this information by creating a representative. Each account is allowed a maximum of 7 representatives. 
Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$createRepresentative = new Components\CreateRepresentative(
    name: new Components\IndividualName(
        firstName: 'Jordan',
        lastName: 'Lee',
        middleName: 'Reese',
        suffix: 'Jr',
    ),
    phone: new Components\PhoneNumber(
        number: '8185551212',
        countryCode: '1',
    ),
    email: 'jordan.lee@classbooker.dev',
    address: new Components\Address(
        addressLine1: '123 Main Street',
        city: 'Boulder',
        stateOrProvince: 'CO',
        postalCode: '80301',
        country: 'US',
        addressLine2: 'Apt 302',
    ),
    birthDate: new Components\BirthDate(
        day: 9,
        month: 11,
        year: 1989,
    ),
    responsibilities: new Components\RepresentativeResponsibilities(
        ownershipPercentage: 38,
        jobTitle: 'CEO',
    ),
);
$requestSecurity = new Operations\CreateRepresentativeSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->representatives->createRepresentative(
    security: $requestSecurity,
    accountID: '602bcb92-e33e-47e9-874b-f8c8cdea8a6e',
    createRepresentative: $createRepresentative,
    xMoovVersion: Components\Versions::Latest

);

if ($response->representative !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `security`                                                                                         | [Operations\CreateRepresentativeSecurity](../../Models/Operations/CreateRepresentativeSecurity.md) | :heavy_check_mark:                                                                                 | The security requirements to use for the request.                                                  |
| `accountID`                                                                                        | *string*                                                                                           | :heavy_check_mark:                                                                                 | ID of the account.                                                                                 |
| `createRepresentative`                                                                             | [Components\CreateRepresentative](../../Models/Components/CreateRepresentative.md)                 | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `xMoovVersion`                                                                                     | [?Components\Versions](../../Models/Components/Versions.md)                                        | :heavy_minus_sign:                                                                                 | Specify an API version.                                                                            |

### Response

**[?Operations\CreateRepresentativeResponse](../../Models/Operations/CreateRepresentativeResponse.md)**

### Errors

| Error Type                           | Status Code                          | Content Type                         |
| ------------------------------------ | ------------------------------------ | ------------------------------------ |
| Errors\GenericError                  | 400, 409                             | application/json                     |
| Errors\RepresentativeValidationError | 422                                  | application/json                     |
| Errors\APIException                  | 4XX, 5XX                             | \*/\*                                |

## deleteRepresentative

Deletes a business representative associated with a Moov account. Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\DeleteRepresentativeSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->representatives->deleteRepresentative(
    security: $requestSecurity,
    accountID: '8c15ae30-39cc-45a6-a9b1-f96dfd44efa8',
    representativeID: '302eff0a-1b46-4437-bfa0-532d4401ffcd',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `security`                                                                                         | [Operations\DeleteRepresentativeSecurity](../../Models/Operations/DeleteRepresentativeSecurity.md) | :heavy_check_mark:                                                                                 | The security requirements to use for the request.                                                  |
| `accountID`                                                                                        | *string*                                                                                           | :heavy_check_mark:                                                                                 | ID of the account.                                                                                 |
| `representativeID`                                                                                 | *string*                                                                                           | :heavy_check_mark:                                                                                 | ID of the representative.                                                                          |
| `xMoovVersion`                                                                                     | [?Components\Versions](../../Models/Components/Versions.md)                                        | :heavy_minus_sign:                                                                                 | Specify an API version.                                                                            |

### Response

**[?Operations\DeleteRepresentativeResponse](../../Models/Operations/DeleteRepresentativeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getRepresentative

Retrieve a specific representative associated with a given Moov account. Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetRepresentativeSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->representatives->getRepresentative(
    security: $requestSecurity,
    accountID: '64980616-9a3a-476e-b482-151eb6571b76',
    representativeID: '7b611595-93d0-48cc-9da4-3aac709d069a',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->representative !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `security`                                                                                   | [Operations\GetRepresentativeSecurity](../../Models/Operations/GetRepresentativeSecurity.md) | :heavy_check_mark:                                                                           | The security requirements to use for the request.                                            |
| `accountID`                                                                                  | *string*                                                                                     | :heavy_check_mark:                                                                           | ID of the account.                                                                           |
| `representativeID`                                                                           | *string*                                                                                     | :heavy_check_mark:                                                                           | ID of the representative.                                                                    |
| `xMoovVersion`                                                                               | [?Components\Versions](../../Models/Components/Versions.md)                                  | :heavy_minus_sign:                                                                           | Specify an API version.                                                                      |

### Response

**[?Operations\GetRepresentativeResponse](../../Models/Operations/GetRepresentativeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listRepresentatives

A Moov account may have multiple representatives depending on the associated business’s ownership and management structure. 
You can use this method to list all the representatives for a given Moov account. 
Note that Moov accounts associated with an individual do not have representatives. 
Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListRepresentativesSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->representatives->listRepresentatives(
    security: $requestSecurity,
    accountID: '33c72fc5-9781-4400-9547-0fa6966c8791',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->representatives !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `security`                                                                                       | [Operations\ListRepresentativesSecurity](../../Models/Operations/ListRepresentativesSecurity.md) | :heavy_check_mark:                                                                               | The security requirements to use for the request.                                                |
| `accountID`                                                                                      | *string*                                                                                         | :heavy_check_mark:                                                                               | ID of the account.                                                                               |
| `xMoovVersion`                                                                                   | [?Components\Versions](../../Models/Components/Versions.md)                                      | :heavy_minus_sign:                                                                               | Specify an API version.                                                                          |

### Response

**[?Operations\ListRepresentativesResponse](../../Models/Operations/ListRepresentativesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## updateRepresentative

If a representative’s information has changed you can patch the information associated with a specific representative ID. 
Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

When **can** profile data be updated:

- For unverified representatives, all profile data can be edited.
- During the verification process, missing or incomplete profile data can be edited.
- Verified representatives can only add missing profile data.

When **can’t** profile data be updated:

- Verified representatives cannot change any existing profile data.

If you need to update information in a locked state, please contact Moov support.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$updateRepresentative = new Components\UpdateRepresentative(
    name: new Components\IndividualNameUpdate(
        firstName: 'Jordan',
        middleName: 'Reese',
        lastName: 'Lee',
        suffix: 'Jr',
    ),
    phone: new Components\Phone(
        number: '8185551212',
        countryCode: '1',
    ),
    address: new Components\UpdateRepresentativeAddress(
        addressLine1: '123 Main Street',
        addressLine2: 'Apt 302',
        city: 'Boulder',
        stateOrProvince: 'CO',
        postalCode: '80301',
        country: 'US',
    ),
    birthDate: new Components\UpdateRepresentativeBirthDate(
        day: 9,
        month: 11,
        year: 1989,
    ),
    responsibilities: new Components\Responsibilities(
        ownershipPercentage: 38,
        jobTitle: 'CEO',
    ),
);
$requestSecurity = new Operations\UpdateRepresentativeSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->representatives->updateRepresentative(
    security: $requestSecurity,
    accountID: '377d9553-179a-45f6-8ed4-c92810fbb4d0',
    representativeID: '54619159-548e-45ed-b917-271fb71fc438',
    updateRepresentative: $updateRepresentative,
    xMoovVersion: Components\Versions::Latest

);

if ($response->representative !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `security`                                                                                         | [Operations\UpdateRepresentativeSecurity](../../Models/Operations/UpdateRepresentativeSecurity.md) | :heavy_check_mark:                                                                                 | The security requirements to use for the request.                                                  |
| `accountID`                                                                                        | *string*                                                                                           | :heavy_check_mark:                                                                                 | ID of the account.                                                                                 |
| `representativeID`                                                                                 | *string*                                                                                           | :heavy_check_mark:                                                                                 | ID of the representative.                                                                          |
| `updateRepresentative`                                                                             | [Components\UpdateRepresentative](../../Models/Components/UpdateRepresentative.md)                 | :heavy_check_mark:                                                                                 | N/A                                                                                                |
| `xMoovVersion`                                                                                     | [?Components\Versions](../../Models/Components/Versions.md)                                        | :heavy_minus_sign:                                                                                 | Specify an API version.                                                                            |

### Response

**[?Operations\UpdateRepresentativeResponse](../../Models/Operations/UpdateRepresentativeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |