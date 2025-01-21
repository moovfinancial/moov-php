# Disputes
(*disputes*)

## Overview

### Available Operations

* [acceptDispute](#acceptdispute) - Accepts a dispute. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [deleteDisputeEvidenceFile](#deletedisputeevidencefile) - Deletes dispute evidence by ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getDispute](#getdispute) - Get a dispute by ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getDisputeEvidence](#getdisputeevidence) - Get dispute evidence by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [getDisputeEvidenceData](#getdisputeevidencedata) - Downloads dispute evidence data by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listDisputeEvidence](#listdisputeevidence) - Returns a dispute's public evidence by its ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [listDisputes](#listdisputes) - Returns the list of disputes. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [submitDisputeEvidence](#submitdisputeevidence) - Submit the evidence associated with a dispute.

Evidence items must be uploaded using the appropriate endpoint(s) prior to calling this endpoint to submit it. **Evidence can only
be submitted once per dispute.**

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [updateDisputeEvidence](#updatedisputeevidence) - Updates dispute evidence by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [uploadDisputeEvidenceFile](#uploaddisputeevidencefile) - Uploads a file as evidence for a dispute. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).
* [uploadDisputeEvidenceText](#uploaddisputeevidencetext) - Uploads text as evidence for a dispute.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

## acceptDispute

Accepts a dispute. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\AcceptDisputeSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->disputes->acceptDispute(
    security: $requestSecurity,
    accountID: 'bfefe6f4-2658-4d3d-9be8-73ff29049dbe',
    disputeID: '692e1a18-8314-4a5d-bcfd-0d5ada162cf8',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->dispute !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `security`                                                                           | [Operations\AcceptDisputeSecurity](../../Models/Operations/AcceptDisputeSecurity.md) | :heavy_check_mark:                                                                   | The security requirements to use for the request.                                    |
| `accountID`                                                                          | *string*                                                                             | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `disputeID`                                                                          | *string*                                                                             | :heavy_check_mark:                                                                   | N/A                                                                                  |
| `xMoovVersion`                                                                       | [?Components\Versions](../../Models/Components/Versions.md)                          | :heavy_minus_sign:                                                                   | Specify an API version.                                                              |

### Response

**[?Operations\AcceptDisputeResponse](../../Models/Operations/AcceptDisputeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## deleteDisputeEvidenceFile

Deletes dispute evidence by ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\DeleteDisputeEvidenceFileSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->disputes->deleteDisputeEvidenceFile(
    security: $requestSecurity,
    accountID: '927e189d-273f-40ab-814f-1fa3ab1aa7dd',
    disputeID: '94451c2e-a568-4800-a669-7f6190da461d',
    evidenceID: '1bfaf385-47fb-4da3-8072-d54e354a9910',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `security`                                                                                                   | [Operations\DeleteDisputeEvidenceFileSecurity](../../Models/Operations/DeleteDisputeEvidenceFileSecurity.md) | :heavy_check_mark:                                                                                           | The security requirements to use for the request.                                                            |
| `accountID`                                                                                                  | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `disputeID`                                                                                                  | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `evidenceID`                                                                                                 | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `xMoovVersion`                                                                                               | [?Components\Versions](../../Models/Components/Versions.md)                                                  | :heavy_minus_sign:                                                                                           | Specify an API version.                                                                                      |

### Response

**[?Operations\DeleteDisputeEvidenceFileResponse](../../Models/Operations/DeleteDisputeEvidenceFileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 409                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getDispute

Get a dispute by ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetDisputeSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->disputes->getDispute(
    security: $requestSecurity,
    accountID: '102df293-b524-4bb7-9b68-5610432a0b8d',
    disputeID: '2efe55e9-61a0-4b3d-aab6-423bb7f8140b',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->dispute !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `security`                                                                     | [Operations\GetDisputeSecurity](../../Models/Operations/GetDisputeSecurity.md) | :heavy_check_mark:                                                             | The security requirements to use for the request.                              |
| `accountID`                                                                    | *string*                                                                       | :heavy_check_mark:                                                             | N/A                                                                            |
| `disputeID`                                                                    | *string*                                                                       | :heavy_check_mark:                                                             | N/A                                                                            |
| `xMoovVersion`                                                                 | [?Components\Versions](../../Models/Components/Versions.md)                    | :heavy_minus_sign:                                                             | Specify an API version.                                                        |

### Response

**[?Operations\GetDisputeResponse](../../Models/Operations/GetDisputeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getDisputeEvidence

Get dispute evidence by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetDisputeEvidenceSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->disputes->getDisputeEvidence(
    security: $requestSecurity,
    accountID: '8abb6e62-d012-4f06-8c83-d993dd3155f2',
    disputeID: 'ebf0479f-774e-4881-9e0b-2c791e0601fc',
    evidenceID: '37534a23-990f-4bdd-b2c7-1653336983f0',
    xMoovVersion: Components\Versions::Latest

);

if ($response->disputeEvidenceMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `security`                                                                                     | [Operations\GetDisputeEvidenceSecurity](../../Models/Operations/GetDisputeEvidenceSecurity.md) | :heavy_check_mark:                                                                             | The security requirements to use for the request.                                              |
| `accountID`                                                                                    | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `disputeID`                                                                                    | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `evidenceID`                                                                                   | *string*                                                                                       | :heavy_check_mark:                                                                             | N/A                                                                                            |
| `xMoovVersion`                                                                                 | [?Components\Versions](../../Models/Components/Versions.md)                                    | :heavy_minus_sign:                                                                             | Specify an API version.                                                                        |

### Response

**[?Operations\GetDisputeEvidenceResponse](../../Models/Operations/GetDisputeEvidenceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getDisputeEvidenceData

Downloads dispute evidence data by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetDisputeEvidenceDataSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->disputes->getDisputeEvidenceData(
    security: $requestSecurity,
    accountID: '38299899-8c4f-4a43-b73a-3cef9ba87c62',
    disputeID: '22c477d1-525c-4c1b-b8a3-7dcec5c4da28',
    evidenceID: 'fb1c15fd-675b-4f82-861e-f3092ed39462',
    xMoovVersion: Components\Versions::Latest

);

if ($response->twoHundredApplicationPdfBytes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `security`                                                                                             | [Operations\GetDisputeEvidenceDataSecurity](../../Models/Operations/GetDisputeEvidenceDataSecurity.md) | :heavy_check_mark:                                                                                     | The security requirements to use for the request.                                                      |
| `accountID`                                                                                            | *string*                                                                                               | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `disputeID`                                                                                            | *string*                                                                                               | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `evidenceID`                                                                                           | *string*                                                                                               | :heavy_check_mark:                                                                                     | N/A                                                                                                    |
| `xMoovVersion`                                                                                         | [?Components\Versions](../../Models/Components/Versions.md)                                            | :heavy_minus_sign:                                                                                     | Specify an API version.                                                                                |

### Response

**[?Operations\GetDisputeEvidenceDataResponse](../../Models/Operations/GetDisputeEvidenceDataResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listDisputeEvidence

Returns a dispute's public evidence by its ID. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListDisputeEvidenceSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->disputes->listDisputeEvidence(
    security: $requestSecurity,
    accountID: 'dcaaa24e-96d2-4b5b-997d-aa20f46c812a',
    disputeID: 'e0434916-3828-49bb-bfa4-30f3c039d5f0',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->disputeEvidenceMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `security`                                                                                       | [Operations\ListDisputeEvidenceSecurity](../../Models/Operations/ListDisputeEvidenceSecurity.md) | :heavy_check_mark:                                                                               | The security requirements to use for the request.                                                |
| `accountID`                                                                                      | *string*                                                                                         | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `disputeID`                                                                                      | *string*                                                                                         | :heavy_check_mark:                                                                               | N/A                                                                                              |
| `xMoovVersion`                                                                                   | [?Components\Versions](../../Models/Components/Versions.md)                                      | :heavy_minus_sign:                                                                               | Specify an API version.                                                                          |

### Response

**[?Operations\ListDisputeEvidenceResponse](../../Models/Operations/ListDisputeEvidenceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listDisputes

Returns the list of disputes. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.read` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$request = new Operations\ListDisputesRequest(
    accountID: '2cb8fed5-9089-45a7-88aa-5468adeaaddb',
    skip: 60,
    count: 20,
);
$requestSecurity = new Operations\ListDisputesSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->disputes->listDisputes(
    request: $request,
    security: $requestSecurity
);

if ($response->disputes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListDisputesRequest](../../Models/Operations/ListDisputesRequest.md)   | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |
| `security`                                                                         | [Operations\ListDisputesSecurity](../../Models/Operations/ListDisputesSecurity.md) | :heavy_check_mark:                                                                 | The security requirements to use for the request.                                  |

### Response

**[?Operations\ListDisputesResponse](../../Models/Operations/ListDisputesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## submitDisputeEvidence

Submit the evidence associated with a dispute.

Evidence items must be uploaded using the appropriate endpoint(s) prior to calling this endpoint to submit it. **Evidence can only
be submitted once per dispute.**

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\SubmitDisputeEvidenceSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->disputes->submitDisputeEvidence(
    security: $requestSecurity,
    accountID: 'aff4d2bf-fd2c-471e-a697-b2cc2c9f297e',
    disputeID: '491e05b8-7adc-440b-af36-4d2229edd4f0',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->dispute !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `security`                                                                                           | [Operations\SubmitDisputeEvidenceSecurity](../../Models/Operations/SubmitDisputeEvidenceSecurity.md) | :heavy_check_mark:                                                                                   | The security requirements to use for the request.                                                    |
| `accountID`                                                                                          | *string*                                                                                             | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `disputeID`                                                                                          | *string*                                                                                             | :heavy_check_mark:                                                                                   | N/A                                                                                                  |
| `xMoovVersion`                                                                                       | [?Components\Versions](../../Models/Components/Versions.md)                                          | :heavy_minus_sign:                                                                                   | Specify an API version.                                                                              |

### Response

**[?Operations\SubmitDisputeEvidenceResponse](../../Models/Operations/SubmitDisputeEvidenceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## updateDisputeEvidence

Updates dispute evidence by ID.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$request = new Operations\UpdateDisputeEvidenceRequest(
    accountID: '51c8da31-2c44-4bdf-a86e-26169242ffe0',
    disputeID: '584a4c46-9412-4622-8ac9-001d7ececcd4',
    evidenceID: '743d351d-f194-45e4-8628-700f3b327c51',
    updateEvidence: new Components\UpdateEvidence(),
);
$requestSecurity = new Operations\UpdateDisputeEvidenceSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->disputes->updateDisputeEvidence(
    request: $request,
    security: $requestSecurity
);

if ($response->disputeEvidenceMetadata !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateDisputeEvidenceRequest](../../Models/Operations/UpdateDisputeEvidenceRequest.md)   | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |
| `security`                                                                                           | [Operations\UpdateDisputeEvidenceSecurity](../../Models/Operations/UpdateDisputeEvidenceSecurity.md) | :heavy_check_mark:                                                                                   | The security requirements to use for the request.                                                    |

### Response

**[?Operations\UpdateDisputeEvidenceResponse](../../Models/Operations/UpdateDisputeEvidenceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## uploadDisputeEvidenceFile

Uploads a file as evidence for a dispute. 

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$createEvidenceFileMultiPart = new Components\CreateEvidenceFileMultiPart(
    file: new Components\File(
        fileName: 'example.file',
        content: '0xcfAb2d31B5',
    ),
    evidenceType: Components\EvidenceType::CoverLetter,
);
$requestSecurity = new Operations\UploadDisputeEvidenceFileSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->disputes->uploadDisputeEvidenceFile(
    security: $requestSecurity,
    accountID: '1ae7aa8f-dfc0-4d00-927a-c5349c04fa3f',
    disputeID: 'c3dddece-4b5f-4b6e-b8a0-719d5e192fc7',
    createEvidenceFileMultiPart: $createEvidenceFileMultiPart,
    xMoovVersion: Components\Versions::V20240000

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `security`                                                                                                   | [Operations\UploadDisputeEvidenceFileSecurity](../../Models/Operations/UploadDisputeEvidenceFileSecurity.md) | :heavy_check_mark:                                                                                           | The security requirements to use for the request.                                                            |
| `accountID`                                                                                                  | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `disputeID`                                                                                                  | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `createEvidenceFileMultiPart`                                                                                | [Components\CreateEvidenceFileMultiPart](../../Models/Components/CreateEvidenceFileMultiPart.md)             | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `xMoovVersion`                                                                                               | [?Components\Versions](../../Models/Components/Versions.md)                                                  | :heavy_minus_sign:                                                                                           | Specify an API version.                                                                                      |

### Response

**[?Operations\UploadDisputeEvidenceFileResponse](../../Models/Operations/UploadDisputeEvidenceFileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## uploadDisputeEvidenceText

Uploads text as evidence for a dispute.

Read our [disputes guide](https://docs.moov.io/guides/money-movement/accept-payments/card-acceptance/disputes/) to learn more.

To use this endpoint from the browser, you'll need to specify the `/accounts/{accountID}/transfers.write` scope when generating 
a [token](https://docs.moov.io/api/authentication/access-tokens/).

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$createEvidenceText = new Components\CreateEvidenceText(
    text: '<value>',
    evidenceType: Components\EvidenceType::CoverLetter,
);
$requestSecurity = new Operations\UploadDisputeEvidenceTextSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->disputes->uploadDisputeEvidenceText(
    security: $requestSecurity,
    accountID: 'd542736f-c9c3-491c-86c3-7303a97965ea',
    disputeID: '9487cd25-501d-4a76-8c24-54328af8a4b6',
    createEvidenceText: $createEvidenceText,
    xMoovVersion: Components\Versions::Latest

);

if ($response->evidenceText !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `security`                                                                                                   | [Operations\UploadDisputeEvidenceTextSecurity](../../Models/Operations/UploadDisputeEvidenceTextSecurity.md) | :heavy_check_mark:                                                                                           | The security requirements to use for the request.                                                            |
| `accountID`                                                                                                  | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `disputeID`                                                                                                  | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `createEvidenceText`                                                                                         | [Components\CreateEvidenceText](../../Models/Components/CreateEvidenceText.md)                               | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `xMoovVersion`                                                                                               | [?Components\Versions](../../Models/Components/Versions.md)                                                  | :heavy_minus_sign:                                                                                           | Specify an API version.                                                                                      |

### Response

**[?Operations\UploadDisputeEvidenceTextResponse](../../Models/Operations/UploadDisputeEvidenceTextResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |