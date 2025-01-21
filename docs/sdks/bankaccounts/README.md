# BankAccounts
(*bankAccounts*)

## Overview

### Available Operations

* [completeBankAccountVerification](#completebankaccountverification) - Finalize the instant micro-deposit verification by submitting the verification code displayed in the user’s bank account. 

Upon successful verification, the bank account status will be updated to `verified` and eligible for ACH debit transactions.

The following formats are accepted:
- `MV0000`
- `mv0000`
- `0000`

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope when 
generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [completeMicroDeposits](#completemicrodeposits) - Complete the micro-deposit validation process by passing the amounts of the two transfers within three tries.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/).
* [disableBankAccount](#disablebankaccount) - Discontinue using a specified bank account linked to a Moov account. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope 
when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getBankAccount](#getbankaccount) - Retrieve bank account details (i.e. routing number or account type) associated with a specific Moov account. 

Read our [bank accounts guide](https://docs.moov.io/guides/sources/bank-accounts/) to learn more. To use this 
endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.read` scope when 
generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getBankAccountVerification](#getbankaccountverification) - Retrieve the current status and details of an instant verification, including whether the verification method was instant or same-day 
ACH. This helps track the verification process in real-time and provides details in case of exceptions.

The status will indicate the following:

- `new`: Verification initiated, credit pending to the payment network
- `sent-credit`: Credit sent, available for verification
- `failed`: Verification failed, description provided, user needs to add a new bank account
- `expired`: Verification expired after 14 days, initiate another verification
- `max-attempts-exceeded`: Five incorrect code attempts exhausted, initiate another verification

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.read` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/).
* [initiateBankAccountVerification](#initiatebankaccountverification) - Instant micro-deposit verification offers a quick and efficient way to verify bank account ownership. 

Send a $0.01 credit with a unique verification code via RTP or same-day ACH, depending on the receiving bank’s capabilities. This
feature provides a faster alternative to traditional methods, allowing verification in a single session.

It is recommended to use the `X-Wait-For: rail-response` header to synchronously receive the outcome of the instant credit in the
 response payload.

Possible verification methods:
  - `instant`: Real-time verification credit sent via RTP
  - `ach`: Verification credit sent via same-day ACH

Possible statuses:
  - `new`: Verification initiated, credit pending
  - `sent-credit`: Credit sent, available for verification in the external bank account
  - `failed`: Verification failed due to credit rejection/return, details in `exceptionDetails`

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/).
* [initiateMicroDeposits](#initiatemicrodeposits) - Micro-deposits help confirm bank account ownership, helping reduce fraud and the risk of unauthorized activity. Use this method to initiate the micro-deposit verification, sending two small credit transfers to the bank account you want to confirm.

If you request micro-deposits before 4:15PM ET, they will appear that same day. If you request micro-deposits any time after 4:15PM ET, they will appear the next banking day. When the two credits are initiated, Moov simultaneously initiates a debit to recoup the micro-deposits. 

`sandbox` - Micro-deposits initiated for a `sandbox` bank account will always be `$0.00` / `$0.00` and instantly verifiable once initiated.

You can simulate micro-deposit verification in test mode. See our [test mode](https://docs.moov.io/guides/get-started/test-mode/#micro-deposits) guide for more information.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [linkBankAccount](#linkbankaccount) - Link a bank account to an existing Moov account. Read our [bank accounts guide](https://docs.moov.io/guides/sources/bank-accounts/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

It is strongly recommended that callers include the `X-Wait-For` header, set to `payment-method`, if the newly linked
bank-account is intended to be used right away. If this header is not included, the caller will need to poll the [List Payment
Methods](https://docs.moov.io/api/sources/payment-methods/list/)
endpoint to wait for the new payment methods to be available for use.
* [listBankAccounts](#listbankaccounts) - List all the bank accounts associated with a particular Moov account. 

Read our [bank accounts guide](https://docs.moov.io/guides/sources/bank-accounts/) to learn more. To use this endpoint 
from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.read` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/).

## completeBankAccountVerification

Finalize the instant micro-deposit verification by submitting the verification code displayed in the user’s bank account. 

Upon successful verification, the bank account status will be updated to `verified` and eligible for ACH debit transactions.

The following formats are accepted:
- `MV0000`
- `mv0000`
- `0000`

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope when 
generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$completeBankAccountVerification = new Components\CompleteBankAccountVerification(
    code: 'MV1234',
);
$requestSecurity = new Operations\CompleteBankAccountVerificationSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->bankAccounts->completeBankAccountVerification(
    security: $requestSecurity,
    accountID: '88cf5aa5-bf76-406e-a986-eb33cd8890e3',
    bankAccountID: '0157260f-ae3c-496c-a9d8-24de5fbc6b31',
    completeBankAccountVerification: $completeBankAccountVerification,
    xMoovVersion: Components\Versions::Latest

);

if ($response->bankAccountVerification !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `security`                                                                                                               | [Operations\CompleteBankAccountVerificationSecurity](../../Models/Operations/CompleteBankAccountVerificationSecurity.md) | :heavy_check_mark:                                                                                                       | The security requirements to use for the request.                                                                        |
| `accountID`                                                                                                              | *string*                                                                                                                 | :heavy_check_mark:                                                                                                       | N/A                                                                                                                      |
| `bankAccountID`                                                                                                          | *string*                                                                                                                 | :heavy_check_mark:                                                                                                       | N/A                                                                                                                      |
| `completeBankAccountVerification`                                                                                        | [Components\CompleteBankAccountVerification](../../Models/Components/CompleteBankAccountVerification.md)                 | :heavy_check_mark:                                                                                                       | N/A                                                                                                                      |
| `xMoovVersion`                                                                                                           | [?Components\Versions](../../Models/Components/Versions.md)                                                              | :heavy_minus_sign:                                                                                                       | Specify an API version.                                                                                                  |

### Response

**[?Operations\CompleteBankAccountVerificationResponse](../../Models/Operations/CompleteBankAccountVerificationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409, 422       | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## completeMicroDeposits

Complete the micro-deposit validation process by passing the amounts of the two transfers within three tries.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$completeMicroDeposits = new Components\CompleteMicroDeposits(
    amounts: [
        18,
        21,
    ],
);
$requestSecurity = new Operations\CompleteMicroDepositsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->bankAccounts->completeMicroDeposits(
    security: $requestSecurity,
    accountID: 'ebfc273d-980b-4a92-8dd9-bf9996f2a16e',
    bankAccountID: '3e6af61e-a5cb-4281-b0e6-e7e3d39edf65',
    completeMicroDeposits: $completeMicroDeposits,
    xMoovVersion: Components\Versions::Latest

);

if ($response->completedMicroDeposits !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `security`                                                                                           | [Operations\CompleteMicroDepositsSecurity](../../Models/Operations/CompleteMicroDepositsSecurity.md) | :heavy_check_mark:                                                                                   | The security requirements to use for the request.                                                    |
| `accountID`                                                                                          | *string*                                                                                             | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `bankAccountID`                                                                                      | *string*                                                                                             | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `completeMicroDeposits`                                                                              | [Components\CompleteMicroDeposits](../../Models/Components/CompleteMicroDeposits.md)                 | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `xMoovVersion`                                                                                       | [?Components\Versions](../../Models/Components/Versions.md)                                          | :heavy_minus_sign:                                                                                   | Specify an API version.                                                                              |

### Response

**[?Operations\CompleteMicroDepositsResponse](../../Models/Operations/CompleteMicroDepositsResponse.md)**

### Errors

| Error Type                         | Status Code                        | Content Type                       |
| ---------------------------------- | ---------------------------------- | ---------------------------------- |
| Errors\GenericError                | 400, 409                           | application/json                   |
| Errors\MicroDepositValidationError | 422                                | application/json                   |
| Errors\APIException                | 4XX, 5XX                           | \*/\*                              |

## disableBankAccount

Discontinue using a specified bank account linked to a Moov account. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope 
when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\DisableBankAccountSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->bankAccounts->disableBankAccount(
    security: $requestSecurity,
    accountID: 'd01209e7-2701-46cc-b0ba-56eabf4e1ec7',
    bankAccountID: '0ae3f56a-e391-4a80-962d-9fe4c7a45b97',
    xMoovVersion: Components\Versions::Latest

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `security`                                                                                     | [Operations\DisableBankAccountSecurity](../../Models/Operations/DisableBankAccountSecurity.md) | :heavy_check_mark:                                                                             | The security requirements to use for the request.                                              |
| `accountID`                                                                                    | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `bankAccountID`                                                                                | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `xMoovVersion`                                                                                 | [?Components\Versions](../../Models/Components/Versions.md)                                    | :heavy_minus_sign:                                                                             | Specify an API version.                                                                        |

### Response

**[?Operations\DisableBankAccountResponse](../../Models/Operations/DisableBankAccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getBankAccount

Retrieve bank account details (i.e. routing number or account type) associated with a specific Moov account. 

Read our [bank accounts guide](https://docs.moov.io/guides/sources/bank-accounts/) to learn more. To use this 
endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.read` scope when 
generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetBankAccountSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->bankAccounts->getBankAccount(
    security: $requestSecurity,
    accountID: '30085225-d87e-47cd-8f08-001465f8cd22',
    bankAccountID: '6c5a7be6-792b-4628-af28-a852f8c9de5b',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->bankAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `security`                                                                             | [Operations\GetBankAccountSecurity](../../Models/Operations/GetBankAccountSecurity.md) | :heavy_check_mark:                                                                     | The security requirements to use for the request.                                      |
| `accountID`                                                                            | *string*                                                                               | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `bankAccountID`                                                                        | *string*                                                                               | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `xMoovVersion`                                                                         | [?Components\Versions](../../Models/Components/Versions.md)                            | :heavy_minus_sign:                                                                     | Specify an API version.                                                                |

### Response

**[?Operations\GetBankAccountResponse](../../Models/Operations/GetBankAccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getBankAccountVerification

Retrieve the current status and details of an instant verification, including whether the verification method was instant or same-day 
ACH. This helps track the verification process in real-time and provides details in case of exceptions.

The status will indicate the following:

- `new`: Verification initiated, credit pending to the payment network
- `sent-credit`: Credit sent, available for verification
- `failed`: Verification failed, description provided, user needs to add a new bank account
- `expired`: Verification expired after 14 days, initiate another verification
- `max-attempts-exceeded`: Five incorrect code attempts exhausted, initiate another verification

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.read` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetBankAccountVerificationSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->bankAccounts->getBankAccountVerification(
    security: $requestSecurity,
    accountID: '0102058c-a936-482a-a3ca-2355850903d7',
    bankAccountID: 'ee6888ef-544e-4146-bab7-ea04e31b2274',
    xMoovVersion: Components\Versions::Latest

);

if ($response->bankAccountVerification !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                     | [Operations\GetBankAccountVerificationSecurity](../../Models/Operations/GetBankAccountVerificationSecurity.md) | :heavy_check_mark:                                                                                             | The security requirements to use for the request.                                                              |
| `accountID`                                                                                                    | *string*                                                                                                       | :heavy_check_mark:                                                                                             | N/A                                                                                                            |
| `bankAccountID`                                                                                                | *string*                                                                                                       | :heavy_check_mark:                                                                                             | N/A                                                                                                            |
| `xMoovVersion`                                                                                                 | [?Components\Versions](../../Models/Components/Versions.md)                                                    | :heavy_minus_sign:                                                                                             | Specify an API version.                                                                                        |

### Response

**[?Operations\GetBankAccountVerificationResponse](../../Models/Operations/GetBankAccountVerificationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## initiateBankAccountVerification

Instant micro-deposit verification offers a quick and efficient way to verify bank account ownership. 

Send a $0.01 credit with a unique verification code via RTP or same-day ACH, depending on the receiving bank’s capabilities. This
feature provides a faster alternative to traditional methods, allowing verification in a single session.

It is recommended to use the `X-Wait-For: rail-response` header to synchronously receive the outcome of the instant credit in the
 response payload.

Possible verification methods:
  - `instant`: Real-time verification credit sent via RTP
  - `ach`: Verification credit sent via same-day ACH

Possible statuses:
  - `new`: Verification initiated, credit pending
  - `sent-credit`: Credit sent, available for verification in the external bank account
  - `failed`: Verification failed due to credit rejection/return, details in `exceptionDetails`

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\InitiateBankAccountVerificationSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->bankAccounts->initiateBankAccountVerification(
    security: $requestSecurity,
    xWaitFor: Components\BankAccountWaitFor::RailResponse,
    accountID: '2b4967e8-6a57-44e7-b8ef-013315f7dcc9',
    bankAccountID: '648f8f37-641e-440a-899c-08de14889c82',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->bankAccountVerificationCreated !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                  | Type                                                                                                                                                                                                                                       | Required                                                                                                                                                                                                                                   | Description                                                                                                                                                                                                                                |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `security`                                                                                                                                                                                                                                 | [Operations\InitiateBankAccountVerificationSecurity](../../Models/Operations/InitiateBankAccountVerificationSecurity.md)                                                                                                                   | :heavy_check_mark:                                                                                                                                                                                                                         | The security requirements to use for the request.                                                                                                                                                                                          |
| `xWaitFor`                                                                                                                                                                                                                                 | [Components\BankAccountWaitFor](../../Models/Components/BankAccountWaitFor.md)                                                                                                                                                             | :heavy_check_mark:                                                                                                                                                                                                                         | Optional header to wait for certain events, such as the rail response, to occur before returning a response.<br/><br/>When this header is set to `rail-response`, the endpoint will wait for a sent-credit or failed status from the payment rail. |
| `accountID`                                                                                                                                                                                                                                | *string*                                                                                                                                                                                                                                   | :heavy_check_mark:                                                                                                                                                                                                                         | N/A                                                                                                                                                                                                                                        |
| `bankAccountID`                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                   | :heavy_check_mark:                                                                                                                                                                                                                         | N/A                                                                                                                                                                                                                                        |
| `xMoovVersion`                                                                                                                                                                                                                             | [?Components\Versions](../../Models/Components/Versions.md)                                                                                                                                                                                | :heavy_minus_sign:                                                                                                                                                                                                                         | Specify an API version.                                                                                                                                                                                                                    |

### Response

**[?Operations\InitiateBankAccountVerificationResponse](../../Models/Operations/InitiateBankAccountVerificationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## initiateMicroDeposits

Micro-deposits help confirm bank account ownership, helping reduce fraud and the risk of unauthorized activity. Use this method to initiate the micro-deposit verification, sending two small credit transfers to the bank account you want to confirm.

If you request micro-deposits before 4:15PM ET, they will appear that same day. If you request micro-deposits any time after 4:15PM ET, they will appear the next banking day. When the two credits are initiated, Moov simultaneously initiates a debit to recoup the micro-deposits. 

`sandbox` - Micro-deposits initiated for a `sandbox` bank account will always be `$0.00` / `$0.00` and instantly verifiable once initiated.

You can simulate micro-deposit verification in test mode. See our [test mode](https://docs.moov.io/guides/get-started/test-mode/#micro-deposits) guide for more information.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\InitiateMicroDepositsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->bankAccounts->initiateMicroDeposits(
    security: $requestSecurity,
    accountID: 'ff04d5ff-8ad2-4d87-baf2-0c9dcb6d3e2a',
    bankAccountID: '10ed8688-d7e2-4a70-827d-af795759945d',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `security`                                                                                           | [Operations\InitiateMicroDepositsSecurity](../../Models/Operations/InitiateMicroDepositsSecurity.md) | :heavy_check_mark:                                                                                   | The security requirements to use for the request.                                                    |
| `accountID`                                                                                          | *string*                                                                                             | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `bankAccountID`                                                                                      | *string*                                                                                             | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `xMoovVersion`                                                                                       | [?Components\Versions](../../Models/Components/Versions.md)                                          | :heavy_minus_sign:                                                                                   | Specify an API version.                                                                              |

### Response

**[?Operations\InitiateMicroDepositsResponse](../../Models/Operations/InitiateMicroDepositsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## linkBankAccount

Link a bank account to an existing Moov account. Read our [bank accounts guide](https://docs.moov.io/guides/sources/bank-accounts/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

It is strongly recommended that callers include the `X-Wait-For` header, set to `payment-method`, if the newly linked
bank-account is intended to be used right away. If this header is not included, the caller will need to poll the [List Payment
Methods](https://docs.moov.io/api/sources/payment-methods/list/)
endpoint to wait for the new payment methods to be available for use.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\LinkBankAccountSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->bankAccounts->linkBankAccount(
    security: $requestSecurity,
    accountID: '45049418-db6d-4ca6-af28-5091c0e15dc6',
    linkBankAccount: new Components\PlaidLinkPayload(
        plaidLink: new Components\PlaidLinkIntegration(
            publicToken: '<value>',
        ),
    ),
    xMoovVersion: Components\Versions::V20240000,
    xWaitFor: Components\BankAccountWaitFor::RailResponse

);

if ($response->bankAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                   | Type                                                                                                                                                                                                                                                                                                                                                                        | Required                                                                                                                                                                                                                                                                                                                                                                    | Description                                                                                                                                                                                                                                                                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                                                                                                                                                                                                                                                                  | [Operations\LinkBankAccountSecurity](../../Models/Operations/LinkBankAccountSecurity.md)                                                                                                                                                                                                                                                                                    | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                          | The security requirements to use for the request.                                                                                                                                                                                                                                                                                                                           |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                 | *string*                                                                                                                                                                                                                                                                                                                                                                    | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                          | N/A                                                                                                                                                                                                                                                                                                                                                                         |
| `linkBankAccount`                                                                                                                                                                                                                                                                                                                                                           | [Components\BankAccountPayload\|Components\PlaidPayload\|Components\PlaidLinkPayload\|Components\MxPayload](../../Models/Components/LinkBankAccount.md)                                                                                                                                                                                                                     | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                          | N/A                                                                                                                                                                                                                                                                                                                                                                         |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                              | [?Components\Versions](../../Models/Components/Versions.md)                                                                                                                                                                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                          | Specify an API version.                                                                                                                                                                                                                                                                                                                                                     |
| `xWaitFor`                                                                                                                                                                                                                                                                                                                                                                  | [?Components\BankAccountWaitFor](../../Models/Components/BankAccountWaitFor.md)                                                                                                                                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                          | Optional header to wait for certain events, such as the creation of a payment method, to occur before returning a response.<br/><br/>When this header is set to `payment-method`, the response will include any payment methods that were created for the newly<br/>linked card in the `paymentMethods` field. Otherwise, the `paymentMethods` field will be omitted from the response. |

### Response

**[?Operations\LinkBankAccountResponse](../../Models/Operations/LinkBankAccountResponse.md)**

### Errors

| Error Type                        | Status Code                       | Content Type                      |
| --------------------------------- | --------------------------------- | --------------------------------- |
| Errors\GenericError               | 400, 409                          | application/json                  |
| Errors\BankAccountValidationError | 422                               | application/json                  |
| Errors\APIException               | 4XX, 5XX                          | \*/\*                             |

## listBankAccounts

List all the bank accounts associated with a particular Moov account. 

Read our [bank accounts guide](https://docs.moov.io/guides/sources/bank-accounts/) to learn more. To use this endpoint 
from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.read` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListBankAccountsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->bankAccounts->listBankAccounts(
    security: $requestSecurity,
    accountID: '91095bec-ade2-4a8c-9f46-ae7f07234fee',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->bankAccounts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `security`                                                                                 | [Operations\ListBankAccountsSecurity](../../Models/Operations/ListBankAccountsSecurity.md) | :heavy_check_mark:                                                                         | The security requirements to use for the request.                                          |
| `accountID`                                                                                | *string*                                                                                   | :heavy_check_mark:                                                                         | N/A                                                                                        |
| `xMoovVersion`                                                                             | [?Components\Versions](../../Models/Components/Versions.md)                                | :heavy_minus_sign:                                                                         | Specify an API version.                                                                    |

### Response

**[?Operations\ListBankAccountsResponse](../../Models/Operations/ListBankAccountsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |