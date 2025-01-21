# moov/openapi

Developer-friendly & type-safe Php SDK specifically catered to leverage *moov/openapi* API.

<div align="left">
    <a href="https://www.speakeasy.com/?utm_source=moov/openapi&utm_campaign=php"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg" style="width: 100px; height: 28px;" />
    </a>
</div>


<br /><br />
> [!IMPORTANT]
> This SDK is not yet ready for production use. To complete setup please follow the steps outlined in your [workspace](https://app.speakeasy.com/org/moov/moov). Delete this section before > publishing to a package manager.

<!-- Start Summary [summary] -->
## Summary

Moov API: Moov is a platform that enables developers to integrate all aspects of money movement with ease and speed.
The Moov API makes it simple for platforms to send, receive, and store money. Our API is based upon REST
principles, returns JSON responses, and uses standard HTTP response codes. To learn more about how Moov
works at a high level, read our [concepts](https://docs.moov.io/guides/get-started/glossary/) guide.
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents
<!-- $toc-max-depth=2 -->
* [moov/openapi](#moovopenapi)
  * [SDK Installation](#sdk-installation)
  * [SDK Example Usage](#sdk-example-usage)
  * [Authentication](#authentication)
  * [Available Resources and Operations](#available-resources-and-operations)
  * [Error Handling](#error-handling)
  * [Server Selection](#server-selection)
* [Development](#development)
  * [Maturity](#maturity)
  * [Contributions](#contributions)

<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

> [!TIP]
> To finish publishing your SDK you must [run your first generation action](https://www.speakeasy.com/docs/github-setup#step-by-step-guide).


The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "<UNSET>.git"
        }
    ],
    "require": {
        "moov/openapi": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

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
<!-- End SDK Example Usage [usage] -->

<!-- Start Authentication [security] -->
## Authentication

### Per-Client Security Schemes

This SDK supports the following security scheme globally:

| Name                      | Type | Scheme     |
| ------------------------- | ---- | ---------- |
| `username`<br/>`password` | http | HTTP Basic |

You can set the security parameters through the `setSecurity` function on the `SDKBuilder` when initializing the SDK. For example:
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

### Per-Operation Security Schemes

Some operations in this SDK require the security scheme to be specified at the request level. For example:
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
<!-- End Authentication [security] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

### [accounts](docs/sdks/accounts/README.md)

* [assignAccountCountries](docs/sdks/accounts/README.md#assignaccountcountries) - Assign the countries of operation for an account.

This endpoint will always overwrite the previously assigned values. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/profile.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [createAccount](docs/sdks/accounts/README.md#createaccount) - You can create **business** or **individual** accounts for your users (i.e., customers, merchants) by passing the required
information to Moov. Requirements differ per account type and requested [capabilities](https://docs.moov.io/guides/accounts/capabilities/requirements/).

If you're requesting the `wallet`, `send-funds`, `collect-funds`, or `card-issuing` capabilities, you'll need to:
  + Send Moov the user [platform terms of service agreement](https://docs.moov.io/guides/accounts/requirements/platform-agreement/) acceptance.
    This can be done upon account creation, or by [patching](https://docs.moov.io/api/moov-accounts/accounts/patch/) the account using the `termsOfService` field.
If you're creating a business account with the business type `llc`, `partnership`, or `privateCorporation`, you'll need to:
  + Provide [business representatives](https://docs.moov.io/api/moov-accounts/representatives/) after creating the account.
  + [Patch](https://docs.moov.io/api/moov-accounts/accounts/patch/) the account to indicate that business representative ownership information is complete.

Visit our documentation to read more about [creating accounts](https://docs.moov.io/guides/accounts/create-accounts/) and [verification requirements](https://docs.moov.io/guides/accounts/requirements/identity-verification/).
Note that the `mode` field (for production or sandbox) is only required when creating a _facilitator_ account. All non-facilitator account requests will ignore the mode field and be set to the calling facilitator's mode.
* [disconnectAccount](docs/sdks/accounts/README.md#disconnectaccount) -   This will sever the connection between you and the account specified and it will no longer be listed as active in the list of accounts. 
  This also means you'll only have read-only access to the account going forward for reporting purposes.

  To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/profile.disconnect` scope when generating 
  a [token](https://docs.moov.io/api/authentication/access-tokens/), and provide the changed information.
* [getAccount](docs/sdks/accounts/README.md#getaccount) - Retrieves details for the account with the specified ID.
* [getAccountCountries](docs/sdks/accounts/README.md#getaccountcountries) - Retrieve the specified countries of operation for an account. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/profile.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getMerchantProcessingAgreement](docs/sdks/accounts/README.md#getmerchantprocessingagreement) - Retrieve a merchant account's processing agreement.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.
* [getTermsOfServiceToken](docs/sdks/accounts/README.md#gettermsofservicetoken) -   Generates a non-expiring token that can then be used to accept Moov’s terms of service. 

  This token can only be generated via API. Any Moov account requesting the collect funds, send funds, wallet, or card issuing capabilities 
  must accept Moov’s terms of service, then have the generated terms of service token patched to the account. Read more in our [documentation](https://docs.moov.io/guides/accounts/requirements/platform-agreement/).
* [listAccounts](docs/sdks/accounts/README.md#listaccounts) - List or search accounts to which the caller is connected.

All supported query parameters are optional. If none are provided the response will include all connected accounts.
Pagination is supported via the `skip` and `count` query parameters.
Searching by name and email will overlap and return results based on relevance.
* [patchAccount](docs/sdks/accounts/README.md#patchaccount) - When **can** profile data be updated:
  + For unverified accounts, all profile data can be edited.
  + During the verification process, missing or incomplete profile data can be edited.
  + Verified accounts can only add missing profile data.

  When **can't** profile data be updated:
  + Verified accounts cannot change any existing profile data.

If you need to update information in a locked state, please contact Moov support.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/profile.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/), and provide the changed information.

### [adjustments](docs/sdks/adjustments/README.md)

* [getAdjustment](docs/sdks/adjustments/README.md#getadjustment) - Retrieve a specific adjustment associated with a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/wallets.read` scope.
* [listAdjustments](docs/sdks/adjustments/README.md#listadjustments) - List adjustments associated with a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/wallets.read` scope.

### [authentication](docs/sdks/authentication/README.md)

* [createAuthToken](docs/sdks/authentication/README.md#createauthtoken) - Create or refresh an access token.
* [revokeAuthToken](docs/sdks/authentication/README.md#revokeauthtoken) - Revoke an auth token.

Allows clients to notify the authorization server that a previously obtained refresh or access token is no longer needed.

### [avatars](docs/sdks/avatars/README.md)

* [getAvatar](docs/sdks/avatars/README.md#getavatar) - Get avatar image for an account using a unique ID.    

To use this endpoint from the browser, you'll need to specify the `/profile-enrichment.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### [bankAccounts](docs/sdks/bankaccounts/README.md)

* [completeBankAccountVerification](docs/sdks/bankaccounts/README.md#completebankaccountverification) - Finalize the instant micro-deposit verification by submitting the verification code displayed in the user’s bank account. 

Upon successful verification, the bank account status will be updated to `verified` and eligible for ACH debit transactions.

The following formats are accepted:
- `MV0000`
- `mv0000`
- `0000`

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope when 
generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [completeMicroDeposits](docs/sdks/bankaccounts/README.md#completemicrodeposits) - Complete the micro-deposit validation process by passing the amounts of the two transfers within three tries.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/).
* [disableBankAccount](docs/sdks/bankaccounts/README.md#disablebankaccount) - Discontinue using a specified bank account linked to a Moov account. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope 
when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getBankAccount](docs/sdks/bankaccounts/README.md#getbankaccount) - Retrieve bank account details (i.e. routing number or account type) associated with a specific Moov account. 

Read our [bank accounts guide](https://docs.moov.io/guides/sources/bank-accounts/) to learn more. To use this 
endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.read` scope when 
generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getBankAccountVerification](docs/sdks/bankaccounts/README.md#getbankaccountverification) - Retrieve the current status and details of an instant verification, including whether the verification method was instant or same-day 
ACH. This helps track the verification process in real-time and provides details in case of exceptions.

The status will indicate the following:

- `new`: Verification initiated, credit pending to the payment network
- `sent-credit`: Credit sent, available for verification
- `failed`: Verification failed, description provided, user needs to add a new bank account
- `expired`: Verification expired after 14 days, initiate another verification
- `max-attempts-exceeded`: Five incorrect code attempts exhausted, initiate another verification

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.read` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/).
* [initiateBankAccountVerification](docs/sdks/bankaccounts/README.md#initiatebankaccountverification) - Instant micro-deposit verification offers a quick and efficient way to verify bank account ownership. 

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
* [initiateMicroDeposits](docs/sdks/bankaccounts/README.md#initiatemicrodeposits) - Micro-deposits help confirm bank account ownership, helping reduce fraud and the risk of unauthorized activity. Use this method to initiate the micro-deposit verification, sending two small credit transfers to the bank account you want to confirm.

If you request micro-deposits before 4:15PM ET, they will appear that same day. If you request micro-deposits any time after 4:15PM ET, they will appear the next banking day. When the two credits are initiated, Moov simultaneously initiates a debit to recoup the micro-deposits. 

`sandbox` - Micro-deposits initiated for a `sandbox` bank account will always be `$0.00` / `$0.00` and instantly verifiable once initiated.

You can simulate micro-deposit verification in test mode. See our [test mode](https://docs.moov.io/guides/get-started/test-mode/#micro-deposits) guide for more information.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [linkBankAccount](docs/sdks/bankaccounts/README.md#linkbankaccount) - Link a bank account to an existing Moov account. Read our [bank accounts guide](https://docs.moov.io/guides/sources/bank-accounts/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

It is strongly recommended that callers include the `X-Wait-For` header, set to `payment-method`, if the newly linked
bank-account is intended to be used right away. If this header is not included, the caller will need to poll the [List Payment
Methods](https://docs.moov.io/api/sources/payment-methods/list/)
endpoint to wait for the new payment methods to be available for use.
* [listBankAccounts](docs/sdks/bankaccounts/README.md#listbankaccounts) - List all the bank accounts associated with a particular Moov account. 

Read our [bank accounts guide](https://docs.moov.io/guides/sources/bank-accounts/) to learn more. To use this endpoint 
from the browser, you'll need to specify the `/accounts/{accountID}/bank-accounts.read` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/).

### [billing](docs/sdks/billing/README.md)

* [createFeePlanAgreements](docs/sdks/billing/README.md#createfeeplanagreements) - Creates the subscription of a fee plan to a merchant account. Merchants are required to accept the fee plan terms prior to activation.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.write` scope.
* [listFeePlanAgreements](docs/sdks/billing/README.md#listfeeplanagreements) - List all fee plan agreements associated with an account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.
* [listFeePlans](docs/sdks/billing/README.md#listfeeplans) - List all fee plans available for use by an account. This is intended to be used by an account when 
selecting a fee plan to apply to a connected account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.
* [listPartnerPricing](docs/sdks/billing/README.md#listpartnerpricing) - List all partner pricing plans available for use by an account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.
* [listPartnerPricingAgreements](docs/sdks/billing/README.md#listpartnerpricingagreements) - List all partner pricing agreements associated with an account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.

### [branding](docs/sdks/branding/README.md)

* [getBrand](docs/sdks/branding/README.md#getbrand) - Gets the brand properties for the specified account.
* [postBrand](docs/sdks/branding/README.md#postbrand) - Creates the brand properties for the specified account.
* [updateBrand](docs/sdks/branding/README.md#updatebrand) - Updates the brand properties for the specified account.

### [capabilities](docs/sdks/capabilities/README.md)

* [addCapabilities](docs/sdks/capabilities/README.md#addcapabilities) - Request capabilities for a specific account. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/capabilities.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [disableCapability](docs/sdks/capabilities/README.md#disablecapability) - Disable a specific capability that an account has requested. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/capabilities.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getCapability](docs/sdks/capabilities/README.md#getcapability) - Retrieve a specific capability that an account has requested. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/capabilities.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listCapabilities](docs/sdks/capabilities/README.md#listcapabilities) - Retrieve all the capabilities an account has requested.

Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

### [cardIssuing](docs/sdks/cardissuing/README.md)

* [getFullIssuedCard](docs/sdks/cardissuing/README.md#getfullissuedcard) - Get issued card with PAN, CVV, and expiration. 

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.read-secure` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getIssuedCard](docs/sdks/cardissuing/README.md#getissuedcard) - Retrieve a single issued card associated with a Moov account.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listIssuedCards](docs/sdks/cardissuing/README.md#listissuedcards) - List Moov issued cards existing for the account.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [requestCard](docs/sdks/cardissuing/README.md#requestcard) - Request a virtual card be issued.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [updateIssuedCard](docs/sdks/cardissuing/README.md#updateissuedcard) - Update a Moov issued card.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/issued-cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### [cards](docs/sdks/cards/README.md)

* [createApplePaySession](docs/sdks/cards/README.md#createapplepaysession) - Create a session with Apple Pay to facilitate a payment. 

Read our [Apple Pay tutorial](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) to learn more. 
A successful response from this endpoint should be passed through to Apple Pay unchanged. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/apple-pay.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [disableCard](docs/sdks/cards/README.md#disablecard) - Disables a card associated with a Moov account.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getApplePayMerchantDomains](docs/sdks/cards/README.md#getapplepaymerchantdomains) -   Get domains registered with Apple Pay. 
  
  Read our [Apple Pay tutorial](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) to learn more. 
  
  To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/apple-pay.read` scope when generating a 
  [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getCard](docs/sdks/cards/README.md#getcard) - Fetch a specific card associated with a Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [linkApplePayToken](docs/sdks/cards/README.md#linkapplepaytoken) - Connect an Apple Pay token to the specified account. 

Read our [Apple Pay tutorial](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) to learn more. 
The `token` data is defined by Apple Pay and should be passed through from Apple Pay's response unmodified.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [linkCard](docs/sdks/cards/README.md#linkcard) - Link a card to an existing Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/#link-a-card) to learn more.

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance. 

During card linking, the provided data will be verified by submitting a $0 authorization (account verification) request. 
If `merchantAccountID` is provided, the authorization request will contain that account's statement descriptor and address. 
Otherwise, the platform account's profile will be used. If no statement descriptor has been set, the authorization will 
use the account's name instead.

It is strongly recommended that callers include the `X-Wait-For` header, set to `payment-method`, if the newly linked 
card is intended to be used right away. If this header is not included, the caller will need to poll the [List Payment 
Methods](https://docs.moov.io/api/sources/payment-methods/list/)
endpoint to wait for the new payment methods to be available for use.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.write` scope
when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listCards](docs/sdks/cards/README.md#listcards) - List all the active cards associated with a Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [registerApplePayMerchantDomains](docs/sdks/cards/README.md#registerapplepaymerchantdomains) - Add domains to be registered with Apple Pay.

Any domains that will be used to accept payments must first be [verified](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) 
with Apple.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/apple-pay.write` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/).
* [updateApplePayMerchantDomains](docs/sdks/cards/README.md#updateapplepaymerchantdomains) -   Add or remove domains to be registered with Apple Pay. 

  Any domains that will be used to accept payments must first be [verified](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) 
  with Apple.
  
  To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/apple-pay.write` scope when generating a 
  [token](https://docs.moov.io/api/authentication/access-tokens/).
* [updateCard](docs/sdks/cards/README.md#updatecard) - Update a linked card and/or resubmit it for verification. 

If a value is provided for CVV, a new verification ($0 authorization) will be submitted for the card. Updating the expiration 
date or 
address will update the information stored on file for the card but will not be verified.

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/#reverify-a-card) to learn 
more.

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance. 

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/cards.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### [disputes](docs/sdks/disputes/README.md)

* [acceptDispute](docs/sdks/disputes/README.md#acceptdispute) - Accepts a dispute. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [deleteDisputeEvidenceFile](docs/sdks/disputes/README.md#deletedisputeevidencefile) - Deletes dispute evidence by ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getDispute](docs/sdks/disputes/README.md#getdispute) - Get a dispute by ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getDisputeEvidence](docs/sdks/disputes/README.md#getdisputeevidence) - Get dispute evidence by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getDisputeEvidenceData](docs/sdks/disputes/README.md#getdisputeevidencedata) - Downloads dispute evidence data by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listDisputeEvidence](docs/sdks/disputes/README.md#listdisputeevidence) - Returns a dispute's public evidence by its ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listDisputes](docs/sdks/disputes/README.md#listdisputes) - Returns the list of disputes. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [submitDisputeEvidence](docs/sdks/disputes/README.md#submitdisputeevidence) - Submit the evidence associated with a dispute.

Evidence items must be uploaded using the appropriate endpoint(s) prior to calling this endpoint to submit it. **Evidence can only
be submitted once per dispute.**

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [updateDisputeEvidence](docs/sdks/disputes/README.md#updatedisputeevidence) - Updates dispute evidence by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [uploadDisputeEvidenceFile](docs/sdks/disputes/README.md#uploaddisputeevidencefile) - Uploads a file as evidence for a dispute. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [uploadDisputeEvidenceText](docs/sdks/disputes/README.md#uploaddisputeevidencetext) - Uploads text as evidence for a dispute.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### [endToEndEncryption](docs/sdks/endtoendencryption/README.md)

* [generateEndToEndKey](docs/sdks/endtoendencryption/README.md#generateendtoendkey) - Generates a public key used to create a JWE token for passing secure authentication data through non-PCI compliant intermediaries.
* [testEndToEndToken](docs/sdks/endtoendencryption/README.md#testendtoendtoken) - Allows for testing a JWE token to ensure it's acceptable by Moov. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/ping.read` scope.

### [enrichedAddress](docs/sdks/enrichedaddress/README.md)

* [getEnrichmentAddress](docs/sdks/enrichedaddress/README.md#getenrichmentaddress) -   Fetch enriched address suggestions. Requires a partial address. 
  
  To use this endpoint from the browser, you'll need to specify the `/profile-enrichment.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### [enrichedProfile](docs/sdks/enrichedprofile/README.md)

* [getEnrichmentProfile](docs/sdks/enrichedprofile/README.md#getenrichmentprofile) -   Fetch enriched profile data. Requires a valid email address. This service is offered in collaboration with Clearbit. 

  To use this endpoint from the browser, you'll need to specify the `/profile-enrichment.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### [files](docs/sdks/files/README.md)

* [getFileDetails](docs/sdks/files/README.md#getfiledetails) - Retrieve file details associated with a specific Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the 
`/accounts/{accountID}/files.read` scope.
* [listFiles](docs/sdks/files/README.md#listfiles) - List all the files associated with a particular Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the 
`/accounts/{accountID}/files.read` scope.
* [uploadFile](docs/sdks/files/README.md#uploadfile) - Upload a file and link it to the specified Moov account. 

The maximum file size is 10MB. Each account is allowed a maximum of 50 files. Acceptable file types include csv, jpg, pdf, 
and png. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the 
`/accounts/{accountID}/files.write` scope.

### [industries](docs/sdks/industries/README.md)

* [listIndustries](docs/sdks/industries/README.md#listindustries) -   Returns a list of all industry titles and their corresponding MCC/SIC/NAICS codes. Results are ordered by title.    
  
  To use this endpoint from the browser, you'll need to specify the `/profile-enrichment.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### [institutions](docs/sdks/institutions/README.md)

* [listInstitutions](docs/sdks/institutions/README.md#listinstitutions) -   Search for institutions by either their name or routing number.
  
  To use this endpoint from the browser, you'll need to specify the `/fed.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### [issuingTransactions](docs/sdks/issuingtransactions/README.md)

* [getIssuedCardAuthorization](docs/sdks/issuingtransactions/README.md#getissuedcardauthorization) - Retrieves details of an authorization associated with a specific Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.
* [getIssuedCardTransaction](docs/sdks/issuingtransactions/README.md#getissuedcardtransaction) - Retrieves details of an issued card transaction associated with a specific Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.
* [listIssuedCardAuthorizationEvents](docs/sdks/issuingtransactions/README.md#listissuedcardauthorizationevents) - List card network and Moov platform events that affect the authorization and its hold on a wallet balance.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.
* [listIssuedCardAuthorizations](docs/sdks/issuingtransactions/README.md#listissuedcardauthorizations) - List issued card authorizations associated with a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.
* [listIssuedCardTransactions](docs/sdks/issuingtransactions/README.md#listissuedcardtransactions) - List issued card transactions associated with a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify 
the `/accounts/{accountID}/issued-cards.read` scope.


### [onboarding](docs/sdks/onboarding/README.md)

* [createOnboardingInvite](docs/sdks/onboarding/README.md#createonboardinginvite) - Create an invitation containing a unique link that allows the recipient to onboard their organization with Moov.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.write` scope.
* [getOnboardingInvite](docs/sdks/onboarding/README.md#getonboardinginvite) - Retrieve details about an onboarding invite.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.read` scope.
* [listOnboardingInvites](docs/sdks/onboarding/README.md#listonboardinginvites) - List all the onboarding invites created by the caller's account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.read` scope.
* [revokeOnboardingInvite](docs/sdks/onboarding/README.md#revokeonboardinginvite) - Revoke an onboarding invite, rendering the invitation link unusable.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.write` scope.

### [paymentLinks](docs/sdks/paymentlinks/README.md)

* [createPaymentLink](docs/sdks/paymentlinks/README.md#createpaymentlink) - Create a payment link that allows an end user to make a payment on Moov's hosted payment link page.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.
* [disablePaymentLink](docs/sdks/paymentlinks/README.md#disablepaymentlink) - Disable a payment link.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.
* [getPaymentLink](docs/sdks/paymentlinks/README.md#getpaymentlink) - Retrieve a payment link by code.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.read` scope.
* [getPaymentLinkQRCode](docs/sdks/paymentlinks/README.md#getpaymentlinkqrcode) - Retrieve the payment link encoded in a QR code. 

Use the `Accept` header to specify the format of the response. Supported formats are `application/json` and `image/png`.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.
* [listPaymentLinks](docs/sdks/paymentlinks/README.md#listpaymentlinks) - List all the payment links created under a Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.read` scope.
* [updatePaymentLink](docs/sdks/paymentlinks/README.md#updatepaymentlink) - Update a payment link.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.

### [paymentMethods](docs/sdks/paymentmethods/README.md)

* [getPaymentMethod](docs/sdks/paymentmethods/README.md#getpaymentmethod) - Get the specified payment method associated with a Moov account. Read our [payment methods guide](https://docs.moov.io/guides/money-movement/payment-methods/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/payment-methods.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listPaymentMethods](docs/sdks/paymentmethods/README.md#listpaymentmethods) - Retrieve a list of payment methods associated with a Moov account. Read our [payment methods guide](https://docs.moov.io/guides/money-movement/payment-methods/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/payment-methods.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### [ping](docs/sdks/ping/README.md)

* [ping](docs/sdks/ping/README.md#ping) - A simple endpoint to check auth.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/ping.read` scope.

### [representatives](docs/sdks/representatives/README.md)

* [createRepresentative](docs/sdks/representatives/README.md#createrepresentative) - Moov accounts associated with businesses require information regarding individuals who represent the business. 
You can provide this information by creating a representative. Each account is allowed a maximum of 7 representatives. 
Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [deleteRepresentative](docs/sdks/representatives/README.md#deleterepresentative) - Deletes a business representative associated with a Moov account. Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getRepresentative](docs/sdks/representatives/README.md#getrepresentative) - Retrieve a specific representative associated with a given Moov account. Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listRepresentatives](docs/sdks/representatives/README.md#listrepresentatives) - A Moov account may have multiple representatives depending on the associated business’s ownership and management structure. 
You can use this method to list all the representatives for a given Moov account. 
Note that Moov accounts associated with an individual do not have representatives. 
Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [updateRepresentative](docs/sdks/representatives/README.md#updaterepresentative) - If a representative’s information has changed you can patch the information associated with a specific representative ID. 
Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To use this endpoint from the browser, you’ll need to specify the `/accounts/{accountID}/representatives.write` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

When **can** profile data be updated:

- For unverified representatives, all profile data can be edited.
- During the verification process, missing or incomplete profile data can be edited.
- Verified representatives can only add missing profile data.

When **can’t** profile data be updated:

- Verified representatives cannot change any existing profile data.

If you need to update information in a locked state, please contact Moov support.

### [scheduling](docs/sdks/scheduling/README.md)

* [cancelSchedule](docs/sdks/scheduling/README.md#cancelschedule) - Describes the schedule to cancel.
* [createSchedule](docs/sdks/scheduling/README.md#createschedule) - Describes the schedule to create or modify.
* [getScheduledOccurrence](docs/sdks/scheduling/README.md#getscheduledoccurrence) - Defines an occurrence for when to run a transfer.
* [getSchedules](docs/sdks/scheduling/README.md#getschedules) - Describes a schedule associated with an account. Requires at least 1 occurrence or recurTransfer to be specified.
* [listSchedules](docs/sdks/scheduling/README.md#listschedules) - Describes a list of schedules associated with an account. Requires at least 1 occurrence or recurTransfer to be specified.
* [updateSchedule](docs/sdks/scheduling/README.md#updateschedule) - Describes the schedule to modify.

### [sweeps](docs/sdks/sweeps/README.md)

* [createSweepConfig](docs/sdks/sweeps/README.md#createsweepconfig) - Create a sweep config for a wallet.
* [getSweep](docs/sdks/sweeps/README.md#getsweep) - Get details on a specific sweep.
* [getSweepConfig](docs/sdks/sweeps/README.md#getsweepconfig) - Get a sweep config associated with a wallet.
* [listSweepConfigs](docs/sdks/sweeps/README.md#listsweepconfigs) - List sweep configs associated with an account.
* [listSweeps](docs/sdks/sweeps/README.md#listsweeps) - List sweeps associated with a wallet.
* [patchSweepConfig](docs/sdks/sweeps/README.md#patchsweepconfig) - Update settings on a sweep config.

### [transfers](docs/sdks/transfers/README.md)

* [createTransfer](docs/sdks/transfers/README.md#createtransfer) - Move money by providing the source, destination, and amount in the request body.

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.write` 
scope.
* [createTransferOptions](docs/sdks/transfers/README.md#createtransferoptions) - Generate available payment method options for one or multiple transfer participants depending on the accountID or paymentMethodID you 
supply in the request. 

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{yourAccountID}/transfers.read` scope when generating a 
[token](https://docs.moov.io/api/authentication/access-tokens/). The accountID included must be your accountID. You can find your 
accountID on the [Business details](https://dashboard.moov.io/settings/business) page.
* [getRefund](docs/sdks/transfers/README.md#getrefund) - Get details of a refund for a card transfer.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.read` 
scope.
* [getTransfer](docs/sdks/transfers/README.md#gettransfer) - Retrieve full transfer details for an individual transfer of a particular Moov account. 

Payment rail-specific details are included in the source and destination. Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) 
to learn more.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.read` 
scope.
* [listRefunds](docs/sdks/transfers/README.md#listrefunds) - Get a list of refunds for a card transfer.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.read` 
scope.
* [listTransfers](docs/sdks/transfers/README.md#listtransfers) - List all the transfers associated with a particular Moov account. 

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more. 

When you run this request, you retrieve 200 transfers at a time. You can advance past a results set of 200 transfers by using the `skip` parameter (for example, 
if you set `skip`= 10, you will see a results set of 200 transfers after the first 2000). If you are searching a high volume of transfers, the request will likely 
process very slowly. To achieve faster performance, restrict the data as much as you can by using the `StartDateTime` and `EndDateTime` parameters for a limited 
period of time. You can run multiple requests in smaller time window increments until you've retrieved all the transfers you need.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.read` 
scope.
* [patchTransfer](docs/sdks/transfers/README.md#patchtransfer) - Update the metadata contained on a transfer. 

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.write` 
scope.
* [refundTransfer](docs/sdks/transfers/README.md#refundtransfer) - Initiate a refund for a card transfer.

**Use the [Cancel or refund a card transfer](https://docs.moov.io/api/money-movement/refunds/cancel/) endpoint for more comprehensive cancel and refund options.**    
See the [reversals](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/reversals/) guide for more information. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the `/accounts/{accountID}/transfers.write` 
scope.
* [reverseTransfer](docs/sdks/transfers/README.md#reversetransfer) - Reverses a card transfer by initiating a cancellation or refund depending on the transaction status. 
Read our [reversals guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/reversals/) 
to learn more.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.

### [underwriting](docs/sdks/underwriting/README.md)

* [getUnderwriting](docs/sdks/underwriting/README.md#getunderwriting) - Retrieve underwriting associated with a given Moov account. 

Read our [underwriting guide](https://docs.moov.io/guides/accounts/requirements/underwriting/) to learn more. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.
* [updateUnderwriting](docs/sdks/underwriting/README.md#updateunderwriting) - Update the account's underwriting by passing new values for one or more of the fields. 

Read our [underwriting guide](https://docs.moov.io/guides/accounts/requirements/underwriting/) to learn more.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.write` scope.

### [wallets](docs/sdks/wallets/README.md)

* [getWallet](docs/sdks/wallets/README.md#getwallet) - Get information on a specific wallet (e.g., the available balance). Read our [Moov wallets guide](https://docs.moov.io/guides/sources/wallets/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/wallets.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listWallets](docs/sdks/wallets/README.md#listwallets) - List the wallets associated with a Moov account. Read our [Moov wallets guide](https://docs.moov.io/guides/sources/wallets/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/wallets.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

### [walletTransactions](docs/sdks/wallettransactions/README.md)

* [getWalletTransaction](docs/sdks/wallettransactions/README.md#getwallettransaction) - Get details on a specific wallet transaction. Read our [wallet transactions guide](https://docs.moov.io/guides/sources/wallets/transactions/) to learn more.

To use this endpoint from a browser, you'll need to specify the `/accounts/{accountID}/wallets.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listWalletTransactions](docs/sdks/wallettransactions/README.md#listwallettransactions) - List all the transactions associated with a particular Moov wallet. Read our [wallet transactions guide](https://docs.moov.io/guides/sources/wallets/transactions/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/wallets.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).

</details>
<!-- End Available Resources and Operations [operations] -->

<!-- Start Error Handling [errors] -->
## Error Handling

Handling errors in this SDK should largely match your expectations. All operations return a response object or throw an exception.

By default an API error will raise a `Errors\APIException` exception, which has the following properties:

| Property       | Type                                    | Description           |
|----------------|-----------------------------------------|-----------------------|
| `$message`     | *string*                                | The error message     |
| `$statusCode`  | *int*                                   | The HTTP status code  |
| `$rawResponse` | *?\Psr\Http\Message\ResponseInterface*  | The raw HTTP response |
| `$body`        | *string*                                | The response content  |

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `assignAccountCountries` method throws the following exceptions:

| Error Type                  | Status Code | Content Type     |
| --------------------------- | ----------- | ---------------- |
| Errors\GenericError         | 400, 409    | application/json |
| Errors\AssignCountriesError | 422         | application/json |
| Errors\APIException         | 4XX, 5XX    | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

try {
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
} catch (Errors\GenericErrorThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\AssignCountriesErrorThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\APIException $e) {
    // handle default exception
    throw $e;
}
```
<!-- End Error Handling [errors] -->

<!-- Start Server Selection [server] -->
## Server Selection

### Override Server URL Per-Client

The default server can also be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()
    ->setServerURL('https://api.moov.io')
    ->build();

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
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically. Any manual changes added to internal files will be overwritten on the next generation. 
We look forward to hearing your feedback. Feel free to open a PR or an issue with a proof of concept and we'll do our best to include it in a future release. 

### SDK Created by [Speakeasy](https://www.speakeasy.com/?utm_source=moov/openapi&utm_campaign=php)
