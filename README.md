# moov/moovphp

Developer-friendly & type-safe Php SDK specifically catered to leverage *moov/moov-php* API.

<div align="left">
    <a href="https://www.speakeasy.com/?utm_source=moov/openapi&utm_campaign=php"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://opensource.org/licenses/Apache-2.0">
        <img src="https://img.shields.io/badge/License-Apache%202.0-blue.svg" />
    </a>
</div>


<!-- Start Summary [summary] -->
## Summary

Moov API: Moov is a platform that enables developers to integrate all aspects of money movement with ease and speed.
The Moov API makes it simple for platforms to send, receive, and store money. Our API is based upon REST
principles, returns JSON responses, and uses standard HTTP response codes. To learn more about how Moov
works at a high level, read our [concepts](https://docs.moov.io/guides/get-started/glossary/) guide.

For more information about the API: [Moov Guides and API Documentation](https://docs.moov.io/)
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents
<!-- $toc-max-depth=2 -->
* [moov/moovphp](#moovmoovphp)
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

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK and add it as a dependency to an existing `composer.json` file:
```bash
composer require "moov/moov-php"
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;

$sdk = MoovPhp\Moov::builder()
    ->setXMoovVersion('v2024.01.00')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$createAccount = new Components\CreateAccount(
    accountType: Components\CreateAccountType::Business,
    profile: new Components\CreateProfile(
        business: new Components\CreateBusinessProfile(
            legalBusinessName: 'Whole Body Fitness LLC',
        ),
    ),
);

$response = $sdk->accounts->create(
    createAccount: $createAccount
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

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;

$sdk = MoovPhp\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->setXMoovVersion('v2024.01.00')
    ->build();

$createAccount = new Components\CreateAccount(
    accountType: Components\CreateAccountType::Business,
    profile: new Components\CreateProfile(
        business: new Components\CreateBusinessProfile(
            legalBusinessName: 'Whole Body Fitness LLC',
        ),
    ),
);

$response = $sdk->accounts->create(
    createAccount: $createAccount
);

if ($response->account !== null) {
    // handle response
}
```
<!-- End Authentication [security] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

### [AccountTerminalApplications](docs/sdks/accountterminalapplications/README.md)

* [link](docs/sdks/accountterminalapplications/README.md#link) - Link an account with a terminal application.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/terminal-applications.write` scope.
* [list](docs/sdks/accountterminalapplications/README.md#list) - Retrieve all terminal applications linked to a specific account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/terminal-applications.read` scope.
* [get](docs/sdks/accountterminalapplications/README.md#get) - Verifies if a specific Terminal Application is linked to an Account. This endpoint acts as a validation check for the link's existence.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/terminal-applications.read` scope.
* [getConfiguration](docs/sdks/accountterminalapplications/README.md#getconfiguration) - Fetch the configuration for a given Terminal Application linked to a specific Account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/terminal-configuration.read` scope.

### [Accounts](docs/sdks/accounts/README.md)

* [create](docs/sdks/accounts/README.md#create) - You can create **business** or **individual** accounts for your users (i.e., customers, merchants) by passing the required
information to Moov. Requirements differ per account type and requested [capabilities](https://docs.moov.io/guides/accounts/capabilities/requirements/).

If you're requesting the `wallet`, `send-funds`, `collect-funds`, or `card-issuing` capabilities, you'll need to:
  + Send Moov the user [platform terms of service agreement](https://docs.moov.io/guides/accounts/requirements/platform-agreement/) acceptance.
    This can be done upon account creation, or by [patching](https://docs.moov.io/api/moov-accounts/accounts/patch/) the account using the `termsOfService` field.
If you're creating a business account with the business type `llc`, `partnership`, or `privateCorporation`, you'll need to:
  + Provide [business representatives](https://docs.moov.io/api/moov-accounts/representatives/) after creating the account.
  + [Patch](https://docs.moov.io/api/moov-accounts/accounts/patch/) the account to indicate that business representative ownership information is complete.

Visit our documentation to read more about [creating accounts](https://docs.moov.io/guides/accounts/create-accounts/) and [verification requirements](https://docs.moov.io/guides/accounts/requirements/identity-verification/).
Note that the `mode` field (for production or sandbox) is only required when creating a _facilitator_ account. All non-facilitator account requests will ignore the mode field and be set to the calling facilitator's mode.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.write` scope.
* [list](docs/sdks/accounts/README.md#list) - List or search accounts to which the caller is connected.

All supported query parameters are optional. If none are provided the response will include all connected accounts.
Pagination is supported via the `skip` and `count` query parameters. Searching by name and email will overlap and 
return results based on relevance. Accounts with AccountType `guest` will not be included in the response.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.read` scope.
* [get](docs/sdks/accounts/README.md#get) - Retrieves details for the account with the specified ID.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/profile.read` scope.
* [updateProfile](docs/sdks/accounts/README.md#updateprofile) - When **can** profile data be updated:
  + For unverified accounts, all profile data can be edited.
  + During the verification process, missing or incomplete profile data can be edited.
  + Verified accounts can only add missing profile data.

  When **can't** profile data be updated:
  + Verified accounts cannot change any existing profile data.

If you need to update information in a locked state, please contact Moov support.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) you'll need
to specify the `/accounts/{accountID}/profile.write` scope.
* [disconnect](docs/sdks/accounts/README.md#disconnect) - This will sever the connection between you and the account specified and it will no longer be listed as 
active in the list of accounts. This also means you'll only have read-only access to the account going 
forward for reporting purposes.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.disconnect` scope.
* [listConnected](docs/sdks/accounts/README.md#listconnected) - List or search accounts to which the caller is connected.

All supported query parameters are optional. If none are provided the response will include all connected accounts.
Pagination is supported via the `skip` and `count` query parameters. Searching by name and email will overlap and 
return results based on relevance. Accounts with AccountType `guest` will not be included in the response.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts.read` scope.
* [connect](docs/sdks/accounts/README.md#connect) - Shares access scopes from the account specified to the caller, establishing a connection 
between the two accounts with the specified permissions.
* [getCountries](docs/sdks/accounts/README.md#getcountries) - Retrieve the specified countries of operation for an account. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.
* [assignCountries](docs/sdks/accounts/README.md#assigncountries) - Assign the countries of operation for an account.

This endpoint will always overwrite the previously assigned values. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.write` scope.
* [getMerchantAgreement](docs/sdks/accounts/README.md#getmerchantagreement) - Retrieve a merchant account's processing agreement.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.
* [getTermsOfServiceToken](docs/sdks/accounts/README.md#gettermsofservicetoken) - Generates a non-expiring token that can then be used to accept Moov's terms of service. 

This token can only be generated via API. Any Moov account requesting the collect funds, send funds, wallet, 
or card issuing capabilities must accept Moov's terms of service, then have the generated terms of service 
token patched to the account. Read more in our [documentation](https://docs.moov.io/guides/accounts/requirements/platform-agreement/).
* [getFees](docs/sdks/accounts/README.md#getfees) - Retrieve fees assessed to an account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [getFile](docs/sdks/accounts/README.md#getfile) - Retrieve file details associated with a specific Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/files.read` scope.

### [Adjustments](docs/sdks/adjustments/README.md)

* [list](docs/sdks/adjustments/README.md#list) - List adjustments associated with a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.
* [get](docs/sdks/adjustments/README.md#get) - Retrieve a specific adjustment associated with a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.

### [ApplePay](docs/sdks/applepay/README.md)

* [registerDomains](docs/sdks/applepay/README.md#registerdomains) - Add domains to be registered with Apple Pay.

Any domains that will be used to accept payments must first be [verified](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) 
with Apple.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/apple-pay.write` scope.
* [updateDomains](docs/sdks/applepay/README.md#updatedomains) - Add or remove domains to be registered with Apple Pay.

Any domains that will be used to accept payments must first be [verified](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains)
with Apple.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/apple-pay.write` scope.
* [getDomains](docs/sdks/applepay/README.md#getdomains) - Get domains registered with Apple Pay. 

Read our [Apple Pay tutorial](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) to learn more. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/apple-pay.read` scope.
* [createSession](docs/sdks/applepay/README.md#createsession) - Create a session with Apple Pay to facilitate a payment. 

Read our [Apple Pay tutorial](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) to learn more. 
A successful response from this endpoint should be passed through to Apple Pay unchanged. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/apple-pay.write` scope.
* [linkToken](docs/sdks/applepay/README.md#linktoken) - Connect an Apple Pay token to the specified account. 

Read our [Apple Pay tutorial](https://docs.moov.io/guides/sources/cards/apple-pay/#register-your-domains) to learn more. 
The `token` data is defined by Apple Pay and should be passed through from Apple Pay's response unmodified.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.write` scope.

### [Authentication](docs/sdks/authentication/README.md)

* [revokeToken](docs/sdks/authentication/README.md#revoketoken) - Revoke an auth token.

Allows clients to notify the authorization server that a previously obtained refresh or access token is no longer needed.
* [createToken](docs/sdks/authentication/README.md#createtoken) - Create or refresh an access token.

### [Avatars](docs/sdks/avatars/README.md)

* [get](docs/sdks/avatars/README.md#get) - Get avatar image for an account using a unique ID.    

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/profile-enrichment.read` scope.

### [BankAccounts](docs/sdks/bankaccounts/README.md)

* [link](docs/sdks/bankaccounts/README.md#link) - Link a bank account to an existing Moov account. Read our [bank accounts guide](https://docs.moov.io/guides/sources/bank-accounts/) to learn more.

It is strongly recommended that callers include the `X-Wait-For` header, set to `payment-method`, if the newly linked
bank-account is intended to be used right away. If this header is not included, the caller will need to poll the [List Payment
Methods](https://docs.moov.io/api/sources/payment-methods/list/)
endpoint to wait for the new payment methods to be available for use.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope.
* [list](docs/sdks/bankaccounts/README.md#list) - List all the bank accounts associated with a particular Moov account. 

Read our [bank accounts guide](https://docs.moov.io/guides/sources/bank-accounts/) to learn more. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/bank-accounts.read` scope.
* [get](docs/sdks/bankaccounts/README.md#get) - Retrieve bank account details (i.e. routing number or account type) associated with a specific Moov account. 

Read our [bank accounts guide](https://docs.moov.io/guides/sources/bank-accounts/) to learn more. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/bank-accounts.read` scope.
* [disable](docs/sdks/bankaccounts/README.md#disable) - Discontinue using a specified bank account linked to a Moov account. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope.
* [initiateMicroDeposits](docs/sdks/bankaccounts/README.md#initiatemicrodeposits) - Micro-deposits help confirm bank account ownership, helping reduce fraud and the risk of unauthorized activity. 
Use this method to initiate the micro-deposit verification, sending two small credit transfers to the bank account 
you want to confirm.

If you request micro-deposits before 4:15PM ET, they will appear that same day. If you request micro-deposits any 
time after 4:15PM ET, they will appear the next banking day. When the two credits are initiated, Moov simultaneously
initiates a debit to recoup the micro-deposits. 

Micro-deposits initiated for a `sandbox` bank account will always be `$0.00` / `$0.00` and instantly verifiable once initiated.

You can simulate micro-deposit verification in test mode. See our [test mode](https://docs.moov.io/guides/get-started/test-mode/#micro-deposits)
guide for more information.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope.
* [completeMicroDeposits](docs/sdks/bankaccounts/README.md#completemicrodeposits) - Complete the micro-deposit validation process by passing the amounts of the two transfers within three tries.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope.
* [getVerification](docs/sdks/bankaccounts/README.md#getverification) - Retrieve the current status and details of an instant verification, including whether the verification method was instant (RTP or FedNow) or same-day
ACH. This helps track the verification process in real-time and provides details in case of exceptions.

The status will indicate the following:

- `new`: Verification initiated, credit pending to the payment network
- `sent-credit`: Credit sent, available for verification
- `failed`: Verification failed, description provided, user needs to add a new bank account
- `expired`: Verification expired after 14 days, initiate another verification
- `max-attempts-exceeded`: Five incorrect code attempts exhausted, initiate another verification

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/bank-accounts.read` scope.
* [initiateVerification](docs/sdks/bankaccounts/README.md#initiateverification) - Instant micro-deposit verification offers a quick and efficient way to verify bank account ownership. 

Send a $0.01 credit with a unique verification code via RTP, FedNow, or same-day ACH, depending on the receiving bank's capabilities. This
feature provides a faster alternative to traditional methods, allowing verification in a single session.

It is recommended to use the `X-Wait-For: rail-response` header to synchronously receive the outcome of the instant credit in the
  response payload.

Possible verification methods:
  - `instant`: Real-time verification credit sent via RTP or FedNow
  - `ach`: Verification credit sent via same-day ACH

Possible statuses:
  - `new`: Verification initiated, credit pending
  - `sent-credit`: Credit sent, available for verification in the external bank account
  - `failed`: Verification failed due to credit rejection/return, details in `exceptionDetails`

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope.
* [completeVerification](docs/sdks/bankaccounts/README.md#completeverification) - Finalize the instant micro-deposit verification by submitting the verification code displayed in the user's bank account. 

Upon successful verification, the bank account status will be updated to `verified` and eligible for ACH debit transactions.

The following formats are accepted:
- `MV0000`
- `mv0000`
- `0000`

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/bank-accounts.write` scope.

### [Branding](docs/sdks/branding/README.md)

* [create](docs/sdks/branding/README.md#create) - Create brand properties for the specified account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/branding.write` scope.
* [upsert](docs/sdks/branding/README.md#upsert) - Create or replace brand properties for the specified account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/branding.write` scope.
* [get](docs/sdks/branding/README.md#get) - Get brand properties for the specified account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/branding.read` scope.

### [Capabilities](docs/sdks/capabilities/README.md)

* [list](docs/sdks/capabilities/README.md#list) - Retrieve all the capabilities an account has requested.

Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/capabilities.read` scope.
* [request](docs/sdks/capabilities/README.md#request) - Request capabilities for a specific account. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/capabilities.write` scope.
* [get](docs/sdks/capabilities/README.md#get) - Retrieve a specific capability that an account has requested. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/capabilities.read` scope.
* [disable](docs/sdks/capabilities/README.md#disable) - Disable a specific capability that an account has requested. Read our [capabilities guide](https://docs.moov.io/guides/accounts/capabilities/) to learn more.

  To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/capabilities.write` scope.

### [CardIssuing](docs/sdks/cardissuing/README.md)

* [request](docs/sdks/cardissuing/README.md#request) - Request a virtual card be issued.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.write` scope.
* [getIssuedCard](docs/sdks/cardissuing/README.md#getissuedcard) - Retrieve a single issued card associated with a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.
* [update](docs/sdks/cardissuing/README.md#update) - Update a Moov issued card.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/issued-cards.write` scope.
* [getFull](docs/sdks/cardissuing/README.md#getfull) - Get issued card with PAN, CVV, and expiration. 

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read-secure` scope.

### [Cards](docs/sdks/cards/README.md)

* [link](docs/sdks/cards/README.md#link) - Link a card to an existing Moov account. 

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

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.write` scope.
* [list](docs/sdks/cards/README.md#list) - List all the active cards associated with a Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.read` scope.
* [get](docs/sdks/cards/README.md#get) - Fetch a specific card associated with a Moov account. 

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.read` scope.
* [update](docs/sdks/cards/README.md#update) - Update a linked card and/or resubmit it for verification.

If a value is provided for CVV, a new verification ($0 authorization) will be submitted for the card. Updating the expiration
date or
address will update the information stored on file for the card but will not be verified.

Read our [accept card payments guide](https://docs.moov.io/guides/sources/cards/accept-card-payments/#reverify-a-card) to learn
more.

Only use this endpoint if you have provided Moov with a copy of your PCI attestation of compliance.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/cards.write` scope.
* [disable](docs/sdks/cards/README.md#disable) - Disables a card associated with a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/cards.write` scope.

### [Disputes](docs/sdks/disputes/README.md)

* [list](docs/sdks/disputes/README.md#list) - Returns the list of disputes. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [get](docs/sdks/disputes/README.md#get) - Get a dispute by ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [accept](docs/sdks/disputes/README.md#accept) - Accepts liability for a dispute. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [listEvidence](docs/sdks/disputes/README.md#listevidence) - Returns a dispute's public evidence by its ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [uploadEvidenceFile](docs/sdks/disputes/README.md#uploadevidencefile) - Uploads a file as evidence for a dispute. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [uploadEvidenceText](docs/sdks/disputes/README.md#uploadevidencetext) - Uploads text as evidence for a dispute.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [submitEvidence](docs/sdks/disputes/README.md#submitevidence) - Submit the evidence associated with a dispute.

Evidence items must be uploaded using the appropriate endpoint(s) prior to calling this endpoint to submit it. **Evidence can only
be submitted once per dispute.**

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [getEvidence](docs/sdks/disputes/README.md#getevidence) - Get dispute evidence by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [updateEvidence](docs/sdks/disputes/README.md#updateevidence) - Updates dispute evidence by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [deleteEvidence](docs/sdks/disputes/README.md#deleteevidence) - Deletes dispute evidence by ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [getEvidenceData](docs/sdks/disputes/README.md#getevidencedata) - Downloads dispute evidence data by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

### [EndToEndEncryption](docs/sdks/endtoendencryption/README.md)

* [testToken](docs/sdks/endtoendencryption/README.md#testtoken) - Allows for testing a JWE token to ensure it's acceptable by Moov. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/ping.read` scope.
* [generateKey](docs/sdks/endtoendencryption/README.md#generatekey) - Generates a public key used to create a JWE token for passing secure authentication data through non-PCI compliant intermediaries.

### [EnrichedProfile](docs/sdks/enrichedprofile/README.md)

* [get](docs/sdks/enrichedprofile/README.md#get) - Fetch enriched profile data. Requires a valid email address. This service is offered in collaboration with Clearbit. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/profile-enrichment.read` scope.

### [Enrichment.Address](docs/sdks/address/README.md)

* [get](docs/sdks/address/README.md#get) - Fetch enriched address suggestions. Requires a partial address. 
  
To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/profile-enrichment.read` scope.

### [FeePlans](docs/sdks/feeplans/README.md)

* [list](docs/sdks/feeplans/README.md#list) - List all fee plan agreements associated with an account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.
* [createAgreements](docs/sdks/feeplans/README.md#createagreements) - Creates the subscription of a fee plan to a merchant account. Merchants are required to accept the fee plan terms prior to activation.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.write` scope.
* [listByAccount](docs/sdks/feeplans/README.md#listbyaccount) - List all fee plans available for use by an account. This is intended to be used by an account when 
selecting a fee plan to apply to a connected account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.
* [fetchFees](docs/sdks/feeplans/README.md#fetchfees) - List fees associated with an account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [listPartnerPricingAgreements](docs/sdks/feeplans/README.md#listpartnerpricingagreements) - List all partner pricing agreements associated with an account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.
* [listFeeRevenue](docs/sdks/feeplans/README.md#listfeerevenue) - Used by a partner. Retrieve revenue generated from merchant fees.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.
* [listResiduals](docs/sdks/feeplans/README.md#listresiduals) - List all residuals associated with an account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.
* [getResidual](docs/sdks/feeplans/README.md#getresidual) - Get a residual associated with an account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.
* [listResidualFees](docs/sdks/feeplans/README.md#listresidualfees) - List all fees associated with a residual.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.

### [Files](docs/sdks/files/README.md)

* [upload](docs/sdks/files/README.md#upload) - Upload a file and link it to the specified Moov account. 

The maximum file size is 20MB. Each account is allowed a maximum of 50 files. Acceptable file types include csv, jpg, pdf, 
and png. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/files.write` scope.
* [list](docs/sdks/files/README.md#list) - List all the files associated with a particular Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/files.read` scope.

### [Images](docs/sdks/images/README.md)

* [list](docs/sdks/images/README.md#list) - List metadata for all images in the specified account.
* [upload](docs/sdks/images/README.md#upload) -   Upload a new PNG, JPEG, or WebP image with optional metadata. 
  Duplicate images, and requests larger than 16MB will be rejected.
* [getMetadata](docs/sdks/images/README.md#getmetadata) - Retrieve metadata for a specific image by its ID.
* [update](docs/sdks/images/README.md#update) - Replace an existing image and, optionally, its metadata.

This endpoint replaces the existing image with the new PNG, JPEG, or WebP. Omit
the metadata form section to keep existing metadata. Duplicate images, and requests larger than 16MB will be rejected.
* [delete](docs/sdks/images/README.md#delete) -   Disable an image by its ID.
  
  Disabled images are still be accessible via their public URL, and cannot be assigned
  to products or line-items.
* [updateMetadata](docs/sdks/images/README.md#updatemetadata) - Replace the metadata for an existing image.
* [getPublic](docs/sdks/images/README.md#getpublic) - Get an image by its public ID.

### [Industries](docs/sdks/industries/README.md)

* [list](docs/sdks/industries/README.md#list) - Returns a list of industries relevant to merchant profile enrichment.  Results are ordered by industry name.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/),
you'll need to specify the `/profile-enrichment.read` scope.

### [Institutions](docs/sdks/institutions/README.md)

* [searchInstitutions](docs/sdks/institutions/README.md#searchinstitutions) - Search for financial institutions by name or routing number.

This endpoint returns metadata about each matched institution, including basic identifying details (such as name, routing number, and address) and information about which payment services they support (e.g., ACH, RTP, and Wire).

This can be used to validate a financial institution before initiating payment activity, or to check which payment rails are available for a given routing number.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/institutions.read` scope.
* [~~search~~](docs/sdks/institutions/README.md#search) - This endpoint has been deprecated and will be removed in a future release. Use [/institutions](https://docs.moov.io/api/enrichment/form-shortening/institutions/get/).

Search for institutions by either their name or routing number.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/fed.read` scope. :warning: **Deprecated**

### [IssuedCards](docs/sdks/issuedcards/README.md)

* [list](docs/sdks/issuedcards/README.md#list) - List Moov issued cards existing for the account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.

### [IssuingTransactions](docs/sdks/issuingtransactions/README.md)

* [listAuthorizations](docs/sdks/issuingtransactions/README.md#listauthorizations) - List issued card authorizations associated with a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.
* [getAuthorization](docs/sdks/issuingtransactions/README.md#getauthorization) - Retrieves details of an authorization associated with a specific Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.
* [listAuthorizationEvents](docs/sdks/issuingtransactions/README.md#listauthorizationevents) - List card network and Moov platform events that affect the authorization and its hold on a wallet balance.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.
* [list](docs/sdks/issuingtransactions/README.md#list) - List issued card transactions associated with a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.

### [Onboarding](docs/sdks/onboarding/README.md)

* [listInvites](docs/sdks/onboarding/README.md#listinvites) - List all the onboarding invites created by the caller's account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.read` scope.
* [getInvite](docs/sdks/onboarding/README.md#getinvite) - Retrieve details about an onboarding invite.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.read` scope.
* [revokeInvite](docs/sdks/onboarding/README.md#revokeinvite) - Revoke an onboarding invite, rendering the invitation link unusable.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.write` scope.

### [OnboardingInvites](docs/sdks/onboardinginvites/README.md)

* [create](docs/sdks/onboardinginvites/README.md#create) - Create an invitation containing a unique link that allows the recipient to onboard their organization with Moov.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts.write` scope.

### [PaymentLinks](docs/sdks/paymentlinks/README.md)

* [create](docs/sdks/paymentlinks/README.md#create) - Create a payment link that allows an end user to make a payment on Moov's hosted payment link page.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [list](docs/sdks/paymentlinks/README.md#list) - List all the payment links created under a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [get](docs/sdks/paymentlinks/README.md#get) - Retrieve a payment link by code.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [update](docs/sdks/paymentlinks/README.md#update) - Update a payment link.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [disable](docs/sdks/paymentlinks/README.md#disable) - Disable a payment link.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [getQrCode](docs/sdks/paymentlinks/README.md#getqrcode) - Retrieve the payment link encoded in a QR code. 

Use the `Accept` header to specify the format of the response. Supported formats are `application/json` and `image/png`.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

### [PaymentMethods](docs/sdks/paymentmethods/README.md)

* [list](docs/sdks/paymentmethods/README.md#list) - Retrieve a list of payment methods associated with a Moov account. Read our [payment methods 
guide](https://docs.moov.io/guides/money-movement/payment-methods/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/payment-methods.read` scope.
* [get](docs/sdks/paymentmethods/README.md#get) - Get the specified payment method associated with a Moov account. Read our [payment methods guide](https://docs.moov.io/guides/money-movement/payment-methods/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/payment-methods.read` scope.

### [Ping](docs/sdks/ping/README.md)

* [get](docs/sdks/ping/README.md#get) - A simple endpoint to check auth.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/ping.read` scope.

### [Products](docs/sdks/products/README.md)

* [list](docs/sdks/products/README.md#list) - List active (non-disabled) products for an account.
* [create](docs/sdks/products/README.md#create) - Creates a new product for the specified account.
* [get](docs/sdks/products/README.md#get) - Retrieve a product by ID.
* [update](docs/sdks/products/README.md#update) - Update a product and its options.
* [disable](docs/sdks/products/README.md#disable) - Disable a product by ID.

The product will no longer be available, but will remain in the system for historical and reporting purposes.

### [Receipts](docs/sdks/receipts/README.md)

* [create](docs/sdks/receipts/README.md#create) -  Create receipts for transfers and scheduled transfers.

 To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
 you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [list](docs/sdks/receipts/README.md#list) - List receipts by transferID, scheduleID, or occurrenceID.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

### [Representatives](docs/sdks/representatives/README.md)

* [create](docs/sdks/representatives/README.md#create) - Moov accounts associated with businesses require information regarding individuals who represent the business. 
You can provide this information by creating a representative. Each account is allowed a maximum of 7 representatives. 
Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/representatives.write` scope.
* [list](docs/sdks/representatives/README.md#list) - A Moov account may have multiple representatives depending on the associated business's ownership and management structure. 
You can use this method to list all the representatives for a given Moov account. 
Note that Moov accounts associated with an individual do not have representatives. 
Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/representatives.read` scope.
* [delete](docs/sdks/representatives/README.md#delete) - Deletes a business representative associated with a Moov account. Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/representatives.write` scope.
* [get](docs/sdks/representatives/README.md#get) - Retrieve a specific representative associated with a given Moov account. Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/representatives.read` scope.
* [update](docs/sdks/representatives/README.md#update) - If a representative's information has changed you can patch the information associated with a specific representative ID.
Read our [business representatives guide](https://docs.moov.io/guides/accounts/requirements/business-representatives/) to learn more.

When **can** profile data be updated:

- For unverified representatives, all profile data can be edited.
- During the verification process, missing or incomplete profile data can be edited.
- Verified representatives can only add missing profile data.

When **can't** profile data be updated:

- Verified representatives cannot change any existing profile data.

If you need to update information in a locked state, please contact Moov support.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/representatives.write` scope.

### [Schedules](docs/sdks/schedules/README.md)

* [cancel](docs/sdks/schedules/README.md#cancel) - Describes the schedule to cancel.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

### [Scheduling](docs/sdks/scheduling/README.md)

* [create](docs/sdks/scheduling/README.md#create) - Describes the schedule to create or modify.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [list](docs/sdks/scheduling/README.md#list) - Describes a list of schedules associated with an account. Append the `hydrate=accounts` query parameter to include partial account details in the response.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [update](docs/sdks/scheduling/README.md#update) - Describes the schedule to modify.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [get](docs/sdks/scheduling/README.md#get) - Describes a schedule associated with an account. Requires at least 1 occurrence or recurTransfer to be specified.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [getOccurrence](docs/sdks/scheduling/README.md#getoccurrence) - Gets a specific occurrence.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

### [Statements](docs/sdks/statements/README.md)

* [list](docs/sdks/statements/README.md#list) - Retrieve all statements associated with an account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.
* [get](docs/sdks/statements/README.md#get) - Retrieve a statement by its ID.

Use the `Accept` header to specify the format of the response. Supported formats are `application/json` and `application/pdf`.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/profile.read` scope.

### [Support](docs/sdks/support/README.md)

* [createTicket](docs/sdks/support/README.md#createticket) - Create a support ticket for a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/tickets.write` scope.

If you're creating the ticket on behalf of another account, then you'll need to
specify the `/accounts/{partnerAccountID}/tickets.write` and `/accounts/{accountID}/profile.read` scopes.
* [listTickets](docs/sdks/support/README.md#listtickets) - List all the support tickets created under a Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/tickets.read` scope.

If you're listing another account's tickets, then you'll need to
specify the `/accounts/{partnerAccountID}/tickets.read` and `/accounts/{accountID}/profile.read` scopes.
* [getTicket](docs/sdks/support/README.md#getticket) - Retrieve a support ticket by ID.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/tickets.read` scope.

If you're retrieving another account's ticket, then you'll need to
specify the `/accounts/{partnerAccountID}/tickets.read` and `/accounts/{accountID}/profile.read` scopes.
* [updateTicket](docs/sdks/support/README.md#updateticket) - Updates a support ticket.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/tickets.write` scope.

If you're updating the ticket on behalf of another account, then you'll need to
specify the `/accounts/{partnerAccountID}/tickets.write` and `/accounts/{accountID}/profile.read` scopes.
* [listTicketMessages](docs/sdks/support/README.md#listticketmessages) - List all the messages for a support ticket.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/tickets.read` scope.

If you're listing another account's messages, then you'll need to
specify the `/accounts/{partnerAccountID}/tickets.read` and `/accounts/{accountID}/profile.read` scopes.

### [Sweeps](docs/sdks/sweeps/README.md)

* [createConfig](docs/sdks/sweeps/README.md#createconfig) - Create a sweep config for a wallet.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.write` scope.
* [listConfigs](docs/sdks/sweeps/README.md#listconfigs) - List sweep configs associated with an account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.
* [getConfig](docs/sdks/sweeps/README.md#getconfig) - Get a sweep config associated with a wallet.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.
* [updateConfig](docs/sdks/sweeps/README.md#updateconfig) - Update settings on a sweep config.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/wallets.write` scope.
* [list](docs/sdks/sweeps/README.md#list) - List sweeps associated with a wallet.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.
* [get](docs/sdks/sweeps/README.md#get) - Get details on a specific sweep.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.

### [TerminalApplications](docs/sdks/terminalapplications/README.md)

* [create](docs/sdks/terminalapplications/README.md#create) - Create a new terminal application.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.write` scope.
* [list](docs/sdks/terminalapplications/README.md#list) - List all the terminal applications for a Moov Account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.read` scope.
* [get](docs/sdks/terminalapplications/README.md#get) - Fetch a specific terminal application.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.read` scope.
* [delete](docs/sdks/terminalapplications/README.md#delete) - Delete a specific terminal application.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.write` scope.
* [createVersion](docs/sdks/terminalapplications/README.md#createversion) - Register a new version of a terminal application. For Android applications, this is used to register a new version code of the application.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.write` scope.

### [Transactions](docs/sdks/transactions/README.md)

* [get](docs/sdks/transactions/README.md#get) - Retrieves details of an issued card transaction associated with a specific Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/issued-cards.read` scope.

### [Transfers](docs/sdks/transfers/README.md)

* [generateOptions](docs/sdks/transfers/README.md#generateoptions) - Generate available payment method options for one or multiple transfer participants depending on the accountID or paymentMethodID you 
supply in the request body.

The accountID in the route should the partner's accountID.

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [create](docs/sdks/transfers/README.md#create) - Move money by providing the source, destination, and amount in the request body.

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [list](docs/sdks/transfers/README.md#list) - List all the transfers associated with a particular Moov account. 

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more. 

When you run this request, you retrieve 200 transfers at a time. You can advance past a results set of 200 transfers by using the `skip` parameter (for example, 
if you set `skip`= 10, you will see a results set of 200 transfers after the first 10). If you are searching a high volume of transfers, the request will likely 
process very slowly. To achieve faster performance, restrict the data as much as you can by using the `StartDateTime` and `EndDateTime` parameters for a limited 
period of time. You can run multiple requests in smaller time window increments until you've retrieved all the transfers you need.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [get](docs/sdks/transfers/README.md#get) - Retrieve full transfer details for an individual transfer of a particular Moov account. 

Payment rail-specific details are included in the source and destination. Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) 
to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [update](docs/sdks/transfers/README.md#update) - Update the metadata contained on a transfer.

Read our [transfers overview guide](https://docs.moov.io/guides/money-movement/overview/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [createCancellation](docs/sdks/transfers/README.md#createcancellation) -   Initiate a cancellation for a card, ACH, or queued transfer.
  
  To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
  to specify the `/accounts/{accountID}/transfers.write` scope.
* [getCancellation](docs/sdks/transfers/README.md#getcancellation) -   Get details of a cancellation for a transfer.
  
  To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
  to specify the `/accounts/{accountID}/transfers.read` scope.
* [initiateRefund](docs/sdks/transfers/README.md#initiaterefund) - Initiate a refund for a card transfer.

**Use the [Cancel or refund a card transfer](https://docs.moov.io/api/money-movement/refunds/cancel/) endpoint for more comprehensive cancel and refund options.**    
See the [reversals](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/reversals/) guide for more information. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [listRefunds](docs/sdks/transfers/README.md#listrefunds) - Get a list of refunds for a card transfer.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [getRefund](docs/sdks/transfers/README.md#getrefund) - Get details of a refund for a card transfer.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [createReversal](docs/sdks/transfers/README.md#createreversal) - Reverses a card transfer by initiating a cancellation or refund depending on the transaction status. 
Read our [reversals guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/reversals/) 
to learn more.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
to specify the `/accounts/{accountID}/transfers.write` scope.

### [Underwriting](docs/sdks/underwriting/README.md)

* [get](docs/sdks/underwriting/README.md#get) - Retrieve underwriting associated with a given Moov account. 

Read our [underwriting guide](https://docs.moov.io/guides/accounts/requirements/underwriting/) to learn more. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.
* [save](docs/sdks/underwriting/README.md#save) - Create or update the account's underwriting.

Read our [underwriting guide](https://docs.moov.io/guides/accounts/requirements/underwriting/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.write` scope.
* [upsert](docs/sdks/underwriting/README.md#upsert) - Create or update the account's underwriting.

Read our [underwriting guide](https://docs.moov.io/guides/accounts/requirements/underwriting/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.write` scope.

### [Wallets](docs/sdks/wallets/README.md)

* [create](docs/sdks/wallets/README.md#create) - Create a new wallet for an account. You can specify optional attributes such as a display name and description to specify the intended use of the wallet. This will generate a new moov-wallet payment method.

Read our [Moov wallets guide](https://docs.moov.io/guides/sources/wallets/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.write` scope.
* [list](docs/sdks/wallets/README.md#list) - List the wallets associated with a Moov account. 

Read our [Moov wallets guide](https://docs.moov.io/guides/sources/wallets/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.
* [get](docs/sdks/wallets/README.md#get) - Get information on a specific wallet (e.g., the available balance). 

Read our [Moov wallets guide](https://docs.moov.io/guides/sources/wallets/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.
* [update](docs/sdks/wallets/README.md#update) - Update properties of an existing wallet such as name, description, status, or metadata.

Read our [Moov wallets guide](https://docs.moov.io/guides/sources/wallets/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/wallets.write` scope.
* [listTransactions](docs/sdks/wallets/README.md#listtransactions) - List all the transactions associated with a particular Moov wallet. 

Read our [wallet transactions guide](https://docs.moov.io/guides/sources/wallets/transactions/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.

### [WalletTransactions](docs/sdks/wallettransactions/README.md)

* [get](docs/sdks/wallettransactions/README.md#get) - Get details on a specific wallet transaction. 

Read our [wallet transactions guide](https://docs.moov.io/guides/sources/wallets/transactions/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/wallets.read` scope.

### [Webhooks](docs/sdks/webhooks/README.md)

* [listEventTypes](docs/sdks/webhooks/README.md#listeventtypes) - List all available event types that can be subscribed to.
* [list](docs/sdks/webhooks/README.md#list) - List all webhooks configured for the account.
* [create](docs/sdks/webhooks/README.md#create) - Create a new webhook for the account.
* [get](docs/sdks/webhooks/README.md#get) - Get details of a specific webhook.
* [update](docs/sdks/webhooks/README.md#update) - Update an existing webhook.
* [disable](docs/sdks/webhooks/README.md#disable) - Disable a webhook. Disabled webhooks will no longer receive events.
* [ping](docs/sdks/webhooks/README.md#ping) - Send a test ping to a webhook to verify it is configured correctly.
* [getSecret](docs/sdks/webhooks/README.md#getsecret) - Get the secret key for verifying webhook payloads.

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

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `create` method throws the following exceptions:

| Error Type                | Status Code | Content Type     |
| ------------------------- | ----------- | ---------------- |
| Errors\GenericError       | 400, 409    | application/json |
| Errors\CreateAccountError | 422         | application/json |
| Errors\APIException       | 4XX, 5XX    | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Models\Errors;

$sdk = MoovPhp\Moov::builder()
    ->setXMoovVersion('v2024.01.00')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

try {
    $createAccount = new Components\CreateAccount(
        accountType: Components\CreateAccountType::Business,
        profile: new Components\CreateProfile(
            business: new Components\CreateBusinessProfile(
                legalBusinessName: 'Whole Body Fitness LLC',
            ),
        ),
    );

    $response = $sdk->accounts->create(
        createAccount: $createAccount
    );

    if ($response->account !== null) {
        // handle response
    }
} catch (Errors\GenericErrorThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\CreateAccountErrorThrowable $e) {
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

The default server can be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;

$sdk = MoovPhp\Moov::builder()
    ->setServerURL('https://api.moov.io')
    ->setXMoovVersion('v2024.01.00')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$createAccount = new Components\CreateAccount(
    accountType: Components\CreateAccountType::Business,
    profile: new Components\CreateProfile(
        business: new Components\CreateBusinessProfile(
            legalBusinessName: 'Whole Body Fitness LLC',
        ),
    ),
);

$response = $sdk->accounts->create(
    createAccount: $createAccount
);

if ($response->account !== null) {
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
