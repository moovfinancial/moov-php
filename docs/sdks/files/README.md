# Files
(*files*)

## Overview

### Available Operations

* [getFileDetails](#getfiledetails) - Retrieve file details associated with a specific Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the 
`/accounts/{accountID}/files.read` scope.
* [listFiles](#listfiles) - List all the files associated with a particular Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the 
`/accounts/{accountID}/files.read` scope.
* [uploadFile](#uploadfile) - Upload a file and link it to the specified Moov account. 

The maximum file size is 10MB. Each account is allowed a maximum of 50 files. Acceptable file types include csv, jpg, pdf, 
and png. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the 
`/accounts/{accountID}/files.write` scope.

## getFileDetails

Retrieve file details associated with a specific Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the 
`/accounts/{accountID}/files.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetFileDetailsSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->files->getFileDetails(
    security: $requestSecurity,
    accountID: '346add0a-4dae-4729-8e74-1a50d00d677a',
    fileID: 'bf657841-ba2d-4060-ad21-eb2b7372cf85',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->fileDetails !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `security`                                                                             | [Operations\GetFileDetailsSecurity](../../Models/Operations/GetFileDetailsSecurity.md) | :heavy_check_mark:                                                                     | The security requirements to use for the request.                                      |
| `accountID`                                                                            | *string*                                                                               | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `fileID`                                                                               | *string*                                                                               | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `xMoovVersion`                                                                         | [?Components\Versions](../../Models/Components/Versions.md)                            | :heavy_minus_sign:                                                                     | Specify an API version.                                                                |

### Response

**[?Operations\GetFileDetailsResponse](../../Models/Operations/GetFileDetailsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listFiles

List all the files associated with a particular Moov account.

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the 
`/accounts/{accountID}/files.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListFilesSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->files->listFiles(
    security: $requestSecurity,
    accountID: 'a3c35406-9eb6-4801-bbac-0649c31c058a',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->fileDetails !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `security`                                                                   | [Operations\ListFilesSecurity](../../Models/Operations/ListFilesSecurity.md) | :heavy_check_mark:                                                           | The security requirements to use for the request.                            |
| `accountID`                                                                  | *string*                                                                     | :heavy_check_mark:                                                           | N/A                                                                          |
| `xMoovVersion`                                                               | [?Components\Versions](../../Models/Components/Versions.md)                  | :heavy_minus_sign:                                                           | Specify an API version.                                                      |

### Response

**[?Operations\ListFilesResponse](../../Models/Operations/ListFilesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## uploadFile

Upload a file and link it to the specified Moov account. 

The maximum file size is 10MB. Each account is allowed a maximum of 50 files. Acceptable file types include csv, jpg, pdf, 
and png. 

To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need to specify the 
`/accounts/{accountID}/files.write` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$fileUploadRequestMultiPart = new Components\FileUploadRequestMultiPart(
    file: new Components\FileUploadRequestMultiPartFile(
        fileName: 'example.file',
        content: '0xccaF7dB59f',
    ),
    filePurpose: Components\FilePurpose::RepresentativeVerification,
    metadata: '{"requirement_id": "document.individual.verification"}',
);
$requestSecurity = new Operations\UploadFileSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->files->uploadFile(
    security: $requestSecurity,
    accountID: '68f95825-1ae3-4f3f-8af2-789dd2a59d6d',
    fileUploadRequestMultiPart: $fileUploadRequestMultiPart,
    xMoovVersion: Components\Versions::V20240000

);

if ($response->fileDetails !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `security`                                                                                     | [Operations\UploadFileSecurity](../../Models/Operations/UploadFileSecurity.md)                 | :heavy_check_mark:                                                                             | The security requirements to use for the request.                                              |
| `accountID`                                                                                    | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `fileUploadRequestMultiPart`                                                                   | [Components\FileUploadRequestMultiPart](../../Models/Components/FileUploadRequestMultiPart.md) | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `xMoovVersion`                                                                                 | [?Components\Versions](../../Models/Components/Versions.md)                                    | :heavy_minus_sign:                                                                             | Specify an API version.                                                                        |

### Response

**[?Operations\UploadFileResponse](../../Models/Operations/UploadFileResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\GenericError        | 400, 409                   | application/json           |
| Errors\FileValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |