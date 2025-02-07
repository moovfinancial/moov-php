# Disputes
(*disputes*)

## Overview

### Available Operations

* [accept](#accept) - Accepts liability for a dispute. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [deleteEvidence](#deleteevidence) - Deletes dispute evidence by ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [get](#get) - Get a dispute by ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [getEvidence](#getevidence) - Get dispute evidence by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [getEvidenceData](#getevidencedata) - Downloads dispute evidence data by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [listEvidence](#listevidence) - Returns a dispute's public evidence by its ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [list](#list) - Returns the list of disputes. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [submitEvidence](#submitevidence) - Submit the evidence associated with a dispute.

Evidence items must be uploaded using the appropriate endpoint(s) prior to calling this endpoint to submit it. **Evidence can only
be submitted once per dispute.**

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [updateEvidence](#updateevidence) - Updates dispute evidence by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [uploadEvidenceFile](#uploadevidencefile) - Uploads a file as evidence for a dispute. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [uploadEvidenceText](#uploadevidencetext) - Uploads text as evidence for a dispute.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

## accept

Accepts liability for a dispute. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

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



$response = $sdk->disputes->accept(
    accountID: 'a155a634-52c8-4ade-b619-6958b5f88a84',
    disputeID: 'e67dcdcf-56b8-44e6-b2b0-a9297f858656',
    xMoovVersion: 'v2024.01'

);

if ($response->dispute !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `disputeID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\AcceptDisputeResponse](../../Models/Operations/AcceptDisputeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## deleteEvidence

Deletes dispute evidence by ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

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



$response = $sdk->disputes->deleteEvidence(
    accountID: '21999434-0e9c-4cd1-890a-4af813ad91ae',
    disputeID: '41954292-f363-4ea3-9b4b-bc417e55f6be',
    evidenceID: 'ac7b6eef-7513-4ff4-996b-a85b1f62d499',
    xMoovVersion: 'v2024.01'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `disputeID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `evidenceID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\DeleteDisputeEvidenceFileResponse](../../Models/Operations/DeleteDisputeEvidenceFileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 409                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## get

Get a dispute by ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

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



$response = $sdk->disputes->get(
    accountID: 'b888f774-3e7c-4135-a18c-6b985523c4bc',
    disputeID: 'e50f7622-81da-484b-9c66-1c8a99c6b71b',
    xMoovVersion: 'v2024.01'

);

if ($response->dispute !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `disputeID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\GetDisputeResponse](../../Models/Operations/GetDisputeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getEvidence

Get dispute evidence by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

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



$response = $sdk->disputes->getEvidence(
    accountID: '3a49ec36-8a92-4fae-81e6-868bfc90b4c9',
    disputeID: '7128e90f-9089-47d5-92b9-87bbfe6bd9b3',
    evidenceID: '614a5588-4d0f-4d00-b8d9-2ae60f6124bf',
    xMoovVersion: 'v2024.01'

);

if ($response->disputeEvidenceMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `disputeID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `evidenceID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\GetDisputeEvidenceResponse](../../Models/Operations/GetDisputeEvidenceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getEvidenceData

Downloads dispute evidence data by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

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



$response = $sdk->disputes->getEvidenceData(
    accountID: '4ebc37c5-a566-452b-8b54-ef280fcb888b',
    disputeID: '4bd05222-78bc-49a7-92a8-f1e5ee0edd6b',
    evidenceID: '01098426-242d-4693-8716-ec08cd8da86e',
    xMoovVersion: 'v2024.01'

);

if ($response->twoHundredApplicationPdfBytes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `disputeID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `evidenceID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\GetDisputeEvidenceDataResponse](../../Models/Operations/GetDisputeEvidenceDataResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listEvidence

Returns a dispute's public evidence by its ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

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



$response = $sdk->disputes->listEvidence(
    accountID: '613e59d0-0cb8-462c-be9c-7f2b955ec234',
    disputeID: '1bb71474-4bf0-40b8-899f-01914b8ad7e5',
    xMoovVersion: 'v2024.01'

);

if ($response->disputeEvidenceMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `disputeID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\ListDisputeEvidenceResponse](../../Models/Operations/ListDisputeEvidenceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## list

Returns the list of disputes. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Operations\ListDisputesRequest(
    accountID: 'c8a232aa-0b11-4b8a-b005-71e9e705d0e6',
    skip: 60,
    count: 20,
);

$response = $sdk->disputes->list(
    request: $request
);

if ($response->disputes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListDisputesRequest](../../Models/Operations/ListDisputesRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListDisputesResponse](../../Models/Operations/ListDisputesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## submitEvidence

Submit the evidence associated with a dispute.

Evidence items must be uploaded using the appropriate endpoint(s) prior to calling this endpoint to submit it. **Evidence can only
be submitted once per dispute.**

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

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



$response = $sdk->disputes->submitEvidence(
    accountID: '7cf55b42-45bd-49ff-883c-0017334607a6',
    disputeID: 'f6e86188-8533-46e8-a184-ec17f223c86b',
    xMoovVersion: 'v2024.01'

);

if ($response->dispute !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `disputeID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\SubmitDisputeEvidenceResponse](../../Models/Operations/SubmitDisputeEvidenceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## updateEvidence

Updates dispute evidence by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Operations\UpdateDisputeEvidenceRequest(
    accountID: 'f19d220a-55c9-476d-9cfa-d9a536b8065f',
    disputeID: 'da248348-9f0d-4df8-a9c6-66cc2492e87a',
    evidenceID: 'a204faa9-3cce-4628-b833-5b0694ac47bb',
    updateEvidence: new Components\UpdateEvidence(),
);

$response = $sdk->disputes->updateEvidence(
    request: $request
);

if ($response->disputeEvidenceMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateDisputeEvidenceRequest](../../Models/Operations/UpdateDisputeEvidenceRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateDisputeEvidenceResponse](../../Models/Operations/UpdateDisputeEvidenceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## uploadEvidenceFile

Uploads a file as evidence for a dispute. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

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

$createEvidenceFileMultiPart = new Components\CreateEvidenceFileMultiPart(
    file: new Components\File(
        fileName: 'example.file',
        content: '0xd1d0C399fD',
    ),
    evidenceType: Components\EvidenceType::GenericEvidence,
);

$response = $sdk->disputes->uploadEvidenceFile(
    accountID: '77231939-ba89-4cb7-adf8-2b494aabddcd',
    disputeID: '550e6b0a-1e54-47e0-9dcc-9daa38417ce5',
    createEvidenceFileMultiPart: $createEvidenceFileMultiPart,
    xMoovVersion: 'v2024.01'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `disputeID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `createEvidenceFileMultiPart`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | [Components\CreateEvidenceFileMultiPart](../../Models/Components/CreateEvidenceFileMultiPart.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                       | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\UploadDisputeEvidenceFileResponse](../../Models/Operations/UploadDisputeEvidenceFileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## uploadEvidenceText

Uploads text as evidence for a dispute.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

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

$createEvidenceText = new Components\CreateEvidenceText(
    text: '<value>',
    evidenceType: Components\EvidenceType::CustomerCommunication,
);

$response = $sdk->disputes->uploadEvidenceText(
    accountID: 'a4f06189-7f74-4b7e-b76a-f3c7af17b8d9',
    disputeID: 'fb79f20c-b948-445c-a145-3e20ce4f769c',
    createEvidenceText: $createEvidenceText,
    xMoovVersion: 'v2024.01'

);

if ($response->evidenceText !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `disputeID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `createEvidenceText`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   | [Components\CreateEvidenceText](../../Models/Components/CreateEvidenceText.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. <br/>    - If no build number is specified, the version refers to the initial release of the quarter.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\UploadDisputeEvidenceTextResponse](../../Models/Operations/UploadDisputeEvidenceTextResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |