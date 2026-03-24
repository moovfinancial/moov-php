# Statements

## Overview

### Available Operations

* [list](#list) - Retrieve all statements associated with an account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.
* [get](#get) - Retrieve a statement by its ID.

Use the `Accept` header to specify the format of the response. Supported formats are `application/json` and `application/pdf`.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/profile.read` scope.

## list

Retrieve all statements associated with an account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/profile.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="listStatements" method="get" path="/accounts/{accountID}/statements" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Models\Operations;

$sdk = MoovPhp\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Operations\ListStatementsRequest(
    skip: 60,
    count: 20,
    accountID: 'b63ef5ea-db36-47f1-a72e-1a5eb1c43c0f',
);

$response = $sdk->statements->list(
    request: $request
);

if ($response->statements !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListStatementsRequest](../../Models/Operations/ListStatementsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListStatementsResponse](../../Models/Operations/ListStatementsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## get

Retrieve a statement by its ID.

Use the `Accept` header to specify the format of the response. Supported formats are `application/json` and `application/pdf`.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/)
you'll need to specify the `/accounts/{accountID}/profile.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getStatement" method="get" path="/accounts/{accountID}/statements/{statementID}" -->
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



$response = $sdk->statements->get(
    accountID: '5623ff52-0b05-41ea-b7b3-655835064007',
    statementID: '9d45acbf-c4fe-4843-846c-eaa43c9ca17f'

);

if ($response->statement !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `accountID`        | *string*           | :heavy_check_mark: | N/A                |
| `statementID`      | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\GetStatementResponse](../../Models/Operations/GetStatementResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |