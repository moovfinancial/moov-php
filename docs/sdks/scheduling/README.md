# Scheduling
(*scheduling*)

## Overview

### Available Operations

* [create](#create) - Describes the schedule to create or modify.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [list](#list) - Describes a list of schedules associated with an account. Append the `hydrate=accounts` query parameter to include partial account details in the response.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [update](#update) - Describes the schedule to modify.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.
* [get](#get) - Describes a schedule associated with an account. Requires at least 1 occurrence or recurTransfer to be specified.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.
* [getOccurrence](#getoccurrence) - Gets a specific occurrence.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

## create

Describes the schedule to create or modify.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Utils;

$sdk = MoovPhp\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$upsertSchedule = new Components\UpsertSchedule(
    occurrences: [
        new Components\Occurrence(
            occurrenceID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
            runOn: Utils\Utils::parseDateTime('2009-11-10T23:00:00Z'),
            runTransfer: new Components\RunTransfer(
                amount: new Components\Amount(
                    currency: 'USD',
                    value: 1204,
                ),
                destination: new Components\SchedulePaymentMethod(
                    paymentMethodID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
                    achDetails: new Components\AchDetails(
                        companyEntryDescription: 'Gym dues',
                        originatingCompanyName: 'Whole Body Fit',
                    ),
                    cardDetails: new Components\CardDetails(
                        dynamicDescriptor: 'WhlBdy *Yoga 11-12',
                    ),
                ),
                partnerAccountID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
                source: new Components\SchedulePaymentMethod(
                    paymentMethodID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
                    achDetails: new Components\AchDetails(
                        companyEntryDescription: 'Gym dues',
                        originatingCompanyName: 'Whole Body Fit',
                    ),
                    cardDetails: new Components\CardDetails(
                        dynamicDescriptor: 'WhlBdy *Yoga 11-12',
                    ),
                ),
                description: 'yuck vice between gee ugh ha',
            ),
        ),
    ],
    recur: new Components\Recur(
        recurrenceRule: '<value>',
        runTransfer: new Components\RunTransfer(
            amount: new Components\Amount(
                currency: 'USD',
                value: 1204,
            ),
            destination: new Components\SchedulePaymentMethod(
                paymentMethodID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
                achDetails: new Components\AchDetails(
                    companyEntryDescription: 'Gym dues',
                    originatingCompanyName: 'Whole Body Fit',
                ),
                cardDetails: new Components\CardDetails(
                    dynamicDescriptor: 'WhlBdy *Yoga 11-12',
                ),
            ),
            partnerAccountID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
            source: new Components\SchedulePaymentMethod(
                paymentMethodID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
                achDetails: new Components\AchDetails(
                    companyEntryDescription: 'Gym dues',
                    originatingCompanyName: 'Whole Body Fit',
                ),
                cardDetails: new Components\CardDetails(
                    dynamicDescriptor: 'WhlBdy *Yoga 11-12',
                ),
            ),
            description: 'bulky electronics through for ick superb nudge embalm simple ouch',
        ),
        start: Utils\Utils::parseDateTime('2009-11-10T23:00:00Z'),
    ),
);

$response = $sdk->scheduling->create(
    accountID: 'eff61bc5-243d-4f3e-af75-c24a16ac5e2b',
    upsertSchedule: $upsertSchedule,
    xMoovVersion: 'v2024.01.00'

);

if ($response->scheduleResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| `upsertSchedule`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  | [Components\UpsertSchedule](../../Models/Components/UpsertSchedule.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                            | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\CreateScheduleResponse](../../Models/Operations/CreateScheduleResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\GenericError            | 400, 409                       | application/json               |
| Errors\ScheduleValidationError | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## list

Describes a list of schedules associated with an account. Append the `hydrate=accounts` query parameter to include partial account details in the response.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

### Example Usage

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

$request = new Operations\ListSchedulesRequest(
    skip: 60,
    count: 20,
    accountID: 'c8a232aa-0b11-4b8a-b005-71e9e705d0e6',
);

$response = $sdk->scheduling->list(
    request: $request
);

if ($response->scheduleListResponses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListSchedulesRequest](../../Models/Operations/ListSchedulesRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListSchedulesResponse](../../Models/Operations/ListSchedulesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## update

Describes the schedule to modify.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Utils;

$sdk = MoovPhp\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$upsertSchedule = new Components\UpsertSchedule(
    occurrences: [
        new Components\Occurrence(
            occurrenceID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
            runOn: Utils\Utils::parseDateTime('2009-11-10T23:00:00Z'),
            runTransfer: new Components\RunTransfer(
                amount: new Components\Amount(
                    currency: 'USD',
                    value: 1204,
                ),
                destination: new Components\SchedulePaymentMethod(
                    paymentMethodID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
                    achDetails: new Components\AchDetails(
                        companyEntryDescription: 'Gym dues',
                        originatingCompanyName: 'Whole Body Fit',
                    ),
                    cardDetails: new Components\CardDetails(
                        dynamicDescriptor: 'WhlBdy *Yoga 11-12',
                    ),
                ),
                partnerAccountID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
                source: new Components\SchedulePaymentMethod(
                    paymentMethodID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
                    achDetails: new Components\AchDetails(
                        companyEntryDescription: 'Gym dues',
                        originatingCompanyName: 'Whole Body Fit',
                    ),
                    cardDetails: new Components\CardDetails(
                        dynamicDescriptor: 'WhlBdy *Yoga 11-12',
                    ),
                ),
                description: 'awful underneath retention too mobility char innocently dowse restfully',
            ),
        ),
    ],
    recur: new Components\Recur(
        recurrenceRule: '<value>',
        runTransfer: new Components\RunTransfer(
            amount: new Components\Amount(
                currency: 'USD',
                value: 1204,
            ),
            destination: new Components\SchedulePaymentMethod(
                paymentMethodID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
                achDetails: new Components\AchDetails(
                    companyEntryDescription: 'Gym dues',
                    originatingCompanyName: 'Whole Body Fit',
                ),
                cardDetails: new Components\CardDetails(
                    dynamicDescriptor: 'WhlBdy *Yoga 11-12',
                ),
            ),
            partnerAccountID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
            source: new Components\SchedulePaymentMethod(
                paymentMethodID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
                achDetails: new Components\AchDetails(
                    companyEntryDescription: 'Gym dues',
                    originatingCompanyName: 'Whole Body Fit',
                ),
                cardDetails: new Components\CardDetails(
                    dynamicDescriptor: 'WhlBdy *Yoga 11-12',
                ),
            ),
            description: 'finer ha excepting hence',
        ),
        start: Utils\Utils::parseDateTime('2009-11-10T23:00:00Z'),
    ),
);

$response = $sdk->scheduling->update(
    accountID: '158c8760-f50e-4178-ba77-008b26dfcc1e',
    scheduleID: '81c22f47-d2c2-4cb9-b16f-66c94a48a104',
    upsertSchedule: $upsertSchedule,
    xMoovVersion: 'v2024.01.00'

);

if ($response->scheduleResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| `scheduleID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| `upsertSchedule`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  | [Components\UpsertSchedule](../../Models/Components/UpsertSchedule.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                            | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\UpdateScheduleResponse](../../Models/Operations/UpdateScheduleResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\GenericError            | 400, 409                       | application/json               |
| Errors\ScheduleValidationError | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## get

Describes a schedule associated with an account. Requires at least 1 occurrence or recurTransfer to be specified.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

### Example Usage

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



$response = $sdk->scheduling->get(
    accountID: 'b888f774-3e7c-4135-a18c-6b985523c4bc',
    scheduleID: 'e50f7622-81da-484b-9c66-1c8a99c6b71b',
    xMoovVersion: 'v2024.01.00'

);

if ($response->scheduleResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| `scheduleID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\GetSchedulesResponse](../../Models/Operations/GetSchedulesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getOccurrence

Gets a specific occurrence.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.read` scope.

### Example Usage

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



$response = $sdk->scheduling->getOccurrence(
    accountID: '56d3f962-d141-42e5-866d-e2448f922eb6',
    scheduleID: '963c8ce0-8cc5-45fd-8c2a-a3c731cb6845',
    occurrenceFilter: '<value>',
    xMoovVersion: 'v2024.01.00'

);

if ($response->occurrencesResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `accountID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| `scheduleID`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| `occurrenceFilter`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | *string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | Allows the specification of additional filters beyond the UUID.<br/><br/>Specifying a UUID string returns the exact occurrence.<br/>Specifying a RFC 3339 timestamp returns the latest occurrence at or before that timestamp.<br/>Specifying `latest` returns the latest occurrence at or before now.                                                                                                                                                                                                                            |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release. |

### Response

**[?Operations\GetScheduledOccurrenceResponse](../../Models/Operations/GetScheduledOccurrenceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |