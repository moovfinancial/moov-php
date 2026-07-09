# DepositView

## Overview

### Available Operations

* [create](#create) - Ingest a deposit account into the deposit view from a core banking source system.

The request body is a raw byte payload whose format depends on the core banking
system that produced it. Set the `X-Source-System` header to identify that system
so the payload can be parsed correctly.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/profile.write` scope.

## create

Ingest a deposit account into the deposit view from a core banking source system.

The request body is a raw byte payload whose format depends on the core banking
system that produced it. Set the `X-Source-System` header to identify that system
so the payload can be parsed correctly.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/profile.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDepositAccount" method="post" path="/underwriting/{accountID}/deposit-accounts" -->
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



$response = $sdk->depositView->create(
    accountID: '<id>',
    xSourceSystem: Components\SourceSystem::JhCif2020,
    requestBody: '0x86dcc65F3b'

);

if ($response->depositAccountIngestedResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                 | Type                                                                      | Required                                                                  | Description                                                               |
| ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- |
| `accountID`                                                               | *string*                                                                  | :heavy_check_mark:                                                        | N/A                                                                       |
| `xSourceSystem`                                                           | [Components\SourceSystem](../../Models/Components/SourceSystem.md)        | :heavy_check_mark:                                                        | Identifies the core banking source system that produced the request body. |
| `requestBody`                                                             | *string*                                                                  | :heavy_check_mark:                                                        | N/A                                                                       |

### Response

**[?Operations\CreateDepositAccountResponse](../../Models/Operations/CreateDepositAccountResponse.md)**

### Errors

| Error Type                           | Status Code                          | Content Type                         |
| ------------------------------------ | ------------------------------------ | ------------------------------------ |
| Errors\GenericError                  | 400, 409                             | application/json                     |
| Errors\DepositAccountValidationError | 422                                  | application/json                     |
| Errors\APIException                  | 4XX, 5XX                             | \*/\*                                |