# TerminalApplications

## Overview

### Available Operations

* [create](#create) - Create a new terminal application.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.write` scope.
* [list](#list) - List all the terminal applications for a Moov Account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.read` scope.
* [get](#get) - Fetch a specific terminal application.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.read` scope.
* [delete](#delete) - Delete a specific terminal application.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.write` scope.
* [createVersion](#createversion) - Register a new version of a terminal application. For Android applications, this is used to register a new version code of the application.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.write` scope.

## create

Create a new terminal application.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="createTerminalApplication" method="post" path="/terminal-applications" -->
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

$request = new Components\CreateTerminalApplication(
    platform: Components\TerminalApplicationPlatform::Android,
    packageName: 'com.example.app',
    sha256Digest: 'AA:BB:CC:DD:EE:FF:AA:BB:CC:DD:EE:FF:AA:BB:CC:DD:AA:BB:CC:DD:EE:FF:AA:BB:CC:DD:EE:FF:AA:BB:CC:DD',
    versionCode: '20332277',
);

$response = $sdk->terminalApplications->create(
    request: $request
);

if ($response->terminalApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Components\CreateTerminalApplication](../../Models/Components/CreateTerminalApplication.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateTerminalApplicationResponse](../../Models/Operations/CreateTerminalApplicationResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\GenericError             | 400, 409                        | application/json                |
| Errors\TerminalApplicationError | 422                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |

## list

List all the terminal applications for a Moov Account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="listTerminalApplications" method="get" path="/terminal-applications" -->
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



$response = $sdk->terminalApplications->list(

);

if ($response->terminalApplications !== null) {
    // handle response
}
```

### Response

**[?Operations\ListTerminalApplicationsResponse](../../Models/Operations/ListTerminalApplicationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## get

Fetch a specific terminal application.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="getTerminalApplication" method="get" path="/terminal-applications/{terminalApplicationID}" -->
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



$response = $sdk->terminalApplications->get(
    terminalApplicationID: '12345678-1234-1234-1234-123456789012'
);

if ($response->terminalApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                            | Type                                 | Required                             | Description                          | Example                              |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `terminalApplicationID`              | *string*                             | :heavy_check_mark:                   | N/A                                  | 12345678-1234-1234-1234-123456789012 |

### Response

**[?Operations\GetTerminalApplicationResponse](../../Models/Operations/GetTerminalApplicationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## delete

Delete a specific terminal application.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="deleteTerminalApplication" method="delete" path="/terminal-applications/{terminalApplicationID}" -->
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



$response = $sdk->terminalApplications->delete(
    terminalApplicationID: '12345678-1234-1234-1234-123456789012'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                            | Type                                 | Required                             | Description                          | Example                              |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `terminalApplicationID`              | *string*                             | :heavy_check_mark:                   | N/A                                  | 12345678-1234-1234-1234-123456789012 |

### Response

**[?Operations\DeleteTerminalApplicationResponse](../../Models/Operations/DeleteTerminalApplicationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## createVersion

Register a new version of a terminal application. For Android applications, this is used to register a new version code of the application.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/terminal-applications.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="createTerminalApplicationVersion" method="post" path="/terminal-applications/{terminalApplicationID}/versions" -->
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

$terminalApplicationVersion = new Components\TerminalApplicationVersion(
    version: '20440059',
);

$response = $sdk->terminalApplications->createVersion(
    terminalApplicationID: '12345678-1234-1234-1234-123456789012',
    terminalApplicationVersion: $terminalApplicationVersion

);

if ($response->terminalApplicationVersion !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    | Example                                                                                        |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `terminalApplicationID`                                                                        | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            | 12345678-1234-1234-1234-123456789012                                                           |
| `terminalApplicationVersion`                                                                   | [Components\TerminalApplicationVersion](../../Models/Components/TerminalApplicationVersion.md) | :heavy_check_mark:                                                                             | N/A                                                                                            | {<br/>"version": "20440059"<br/>}                                                              |

### Response

**[?Operations\CreateTerminalApplicationVersionResponse](../../Models/Operations/CreateTerminalApplicationVersionResponse.md)**

### Errors

| Error Type                      | Status Code                     | Content Type                    |
| ------------------------------- | ------------------------------- | ------------------------------- |
| Errors\GenericError             | 400, 409                        | application/json                |
| Errors\TerminalApplicationError | 422                             | application/json                |
| Errors\APIException             | 4XX, 5XX                        | \*/\*                           |