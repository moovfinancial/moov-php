# Files

## Overview

### Available Operations

* [upload](#upload) - Upload a file and link it to the specified Moov account. 

The maximum file size is 20MB. Each account is allowed a maximum of 50 files. Acceptable file types include csv, jpg, pdf, 
and png. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/files.write` scope.
* [list](#list) - List all the files associated with a particular Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/files.read` scope.

## upload

Upload a file and link it to the specified Moov account. 

The maximum file size is 20MB. Each account is allowed a maximum of 50 files. Acceptable file types include csv, jpg, pdf, 
and png. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/files.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="uploadFile" method="post" path="/accounts/{accountID}/files" -->
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

$fileUploadRequestMultiPart = new Components\FileUploadRequestMultiPart(
    file: new Components\FileUploadRequestMultiPartFile(
        fileName: 'example.file',
        content: file_get_contents('example.file');,
    ),
    filePurpose: Components\FilePurpose::RepresentativeVerification,
);

$response = $sdk->files->upload(
    accountID: '51ae4a14-07bf-4659-b9b7-285439b7a22e',
    fileUploadRequestMultiPart: $fileUploadRequestMultiPart

);

if ($response->fileDetails !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `accountID`                                                                                    | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `fileUploadRequestMultiPart`                                                                   | [Components\FileUploadRequestMultiPart](../../Models/Components/FileUploadRequestMultiPart.md) | :heavy_check_mark:                                                                             | N/A                                                                                            |

### Response

**[?Operations\UploadFileResponse](../../Models/Operations/UploadFileResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\GenericError        | 400, 409                   | application/json           |
| Errors\FileValidationError | 422                        | application/json           |
| Errors\APIException        | 4XX, 5XX                   | \*/\*                      |

## list

List all the files associated with a particular Moov account.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/files.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="listFiles" method="get" path="/accounts/{accountID}/files" -->
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



$response = $sdk->files->list(
    accountID: 'd1133bf2-4853-4436-9a03-23739895ab98'
);

if ($response->fileDetails !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `accountID`        | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\ListFilesResponse](../../Models/Operations/ListFilesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |