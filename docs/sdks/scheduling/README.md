# Scheduling
(*scheduling*)

## Overview

### Available Operations

* [cancelSchedule](#cancelschedule) - Describes the schedule to cancel.
* [createSchedule](#createschedule) - Describes the schedule to create or modify.
* [getScheduledOccurrence](#getscheduledoccurrence) - Defines an occurrence for when to run a transfer.
* [getSchedules](#getschedules) - Describes a schedule associated with an account. Requires at least 1 occurrence or recurTransfer to be specified.
* [listSchedules](#listschedules) - Describes a list of schedules associated with an account. Requires at least 1 occurrence or recurTransfer to be specified.
* [updateSchedule](#updateschedule) - Describes the schedule to modify.

## cancelSchedule

Describes the schedule to cancel.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\CancelScheduleSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->scheduling->cancelSchedule(
    security: $requestSecurity,
    accountID: 'a1303a1c-8708-447e-a64b-5dba8417b641',
    scheduleID: 'ab5ca483-e27d-48f0-b596-09eed517874f',
    xMoovVersion: Components\Versions::Latest

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `security`                                                                             | [Operations\CancelScheduleSecurity](../../Models/Operations/CancelScheduleSecurity.md) | :heavy_check_mark:                                                                     | The security requirements to use for the request.                                      |
| `accountID`                                                                            | *string*                                                                               | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `scheduleID`                                                                           | *string*                                                                               | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `xMoovVersion`                                                                         | [?Components\Versions](../../Models/Components/Versions.md)                            | :heavy_minus_sign:                                                                     | Specify an API version.                                                                |

### Response

**[?Operations\CancelScheduleResponse](../../Models/Operations/CancelScheduleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## createSchedule

Describes the schedule to create or modify.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;
use Moov\OpenAPI\Utils;

$sdk = OpenAPI\Moov::builder()->build();

$upsertSchedule = new Components\UpsertSchedule(
    occurrences: [
        new Components\Occurrence(
            occurrenceID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
            runOn: Utils\Utils::parseDateTime('2009-11-10T23:00:00Z'),
            runTransfer: new Components\RunTransfer(
                amount: new Components\Amount(
                    currency: 'Serbian Dinar',
                    value: 548467,
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
                description: 'unfurl outstanding worldly steak',
            ),
        ),
    ],
    recur: new Components\Recur(
        recurrenceRule: '<value>',
        runTransfer: new Components\RunTransfer(
            amount: new Components\Amount(
                currency: 'Tanzanian Shilling',
                value: 117956,
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
            description: 'phooey stranger towards empty impartial equal winged supposing accelerator aw',
        ),
        start: Utils\Utils::parseDateTime('2009-11-10T23:00:00Z'),
    ),
);
$requestSecurity = new Operations\CreateScheduleSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->scheduling->createSchedule(
    security: $requestSecurity,
    accountID: 'b2e94ac3-d502-40f8-91fd-00657e18dfcb',
    upsertSchedule: $upsertSchedule,
    xMoovVersion: Components\Versions::Latest

);

if ($response->scheduleResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `security`                                                                             | [Operations\CreateScheduleSecurity](../../Models/Operations/CreateScheduleSecurity.md) | :heavy_check_mark:                                                                     | The security requirements to use for the request.                                      |
| `accountID`                                                                            | *string*                                                                               | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `upsertSchedule`                                                                       | [Components\UpsertSchedule](../../Models/Components/UpsertSchedule.md)                 | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `xMoovVersion`                                                                         | [?Components\Versions](../../Models/Components/Versions.md)                            | :heavy_minus_sign:                                                                     | Specify an API version.                                                                |

### Response

**[?Operations\CreateScheduleResponse](../../Models/Operations/CreateScheduleResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\GenericError            | 400, 409                       | application/json               |
| Errors\ScheduleValidationError | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |

## getScheduledOccurrence

Defines an occurrence for when to run a transfer.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetScheduledOccurrenceSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->scheduling->getScheduledOccurrence(
    security: $requestSecurity,
    accountID: '7175f455-a6d6-4b87-8e24-cbd12c7dabe7',
    scheduleID: 'a4ffa63d-9228-4488-8f27-d2ff59d7760c',
    occurrenceFilter: '<value>',
    xMoovVersion: Components\Versions::Latest

);

if ($response->scheduleResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                              | Type                                                                                                                                                                                                                                                                                   | Required                                                                                                                                                                                                                                                                               | Description                                                                                                                                                                                                                                                                            |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                                                                                                                                                                             | [Operations\GetScheduledOccurrenceSecurity](../../Models/Operations/GetScheduledOccurrenceSecurity.md)                                                                                                                                                                                 | :heavy_check_mark:                                                                                                                                                                                                                                                                     | The security requirements to use for the request.                                                                                                                                                                                                                                      |
| `accountID`                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                    |
| `scheduleID`                                                                                                                                                                                                                                                                           | *string*                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                     | N/A                                                                                                                                                                                                                                                                                    |
| `occurrenceFilter`                                                                                                                                                                                                                                                                     | *string*                                                                                                                                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                                     | Allows the specification of additional filters beyond the UUID.<br/><br/>Specifying a UUID string returns the exact occurrence.<br/>Specifying a RFC 3339 timestamp returns the latest occurrence at or before that timestamp.<br/>Specifying `latest` returns the latest occurrence at or before now. |
| `xMoovVersion`                                                                                                                                                                                                                                                                         | [?Components\Versions](../../Models/Components/Versions.md)                                                                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                                                                                                                     | Specify an API version.                                                                                                                                                                                                                                                                |

### Response

**[?Operations\GetScheduledOccurrenceResponse](../../Models/Operations/GetScheduledOccurrenceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getSchedules

Describes a schedule associated with an account. Requires at least 1 occurrence or recurTransfer to be specified.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\GetSchedulesSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->scheduling->getSchedules(
    security: $requestSecurity,
    accountID: 'aa7a59b8-5d59-4efd-99e7-b644e71e5f8c',
    scheduleID: '605976e8-f3ff-4e64-9b41-7255577d6f44',
    xMoovVersion: Components\Versions::V20240000

);

if ($response->scheduleResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `security`                                                                         | [Operations\GetSchedulesSecurity](../../Models/Operations/GetSchedulesSecurity.md) | :heavy_check_mark:                                                                 | The security requirements to use for the request.                                  |
| `accountID`                                                                        | *string*                                                                           | :heavy_check_mark:                                                                 | N/A                                                                                |
| `scheduleID`                                                                       | *string*                                                                           | :heavy_check_mark:                                                                 | N/A                                                                                |
| `xMoovVersion`                                                                     | [?Components\Versions](../../Models/Components/Versions.md)                        | :heavy_minus_sign:                                                                 | Specify an API version.                                                            |

### Response

**[?Operations\GetSchedulesResponse](../../Models/Operations/GetSchedulesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## listSchedules

Describes a list of schedules associated with an account. Requires at least 1 occurrence or recurTransfer to be specified.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();


$requestSecurity = new Operations\ListSchedulesSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->scheduling->listSchedules(
    security: $requestSecurity,
    accountID: 'f5b39da1-b677-43d6-b114-65cbbea83ad5',
    xMoovVersion: Components\Versions::V20240000,
    skip: 60,
    count: 20

);

if ($response->scheduleResponses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          | Example                                                                              |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `security`                                                                           | [Operations\ListSchedulesSecurity](../../Models/Operations/ListSchedulesSecurity.md) | :heavy_check_mark:                                                                   | The security requirements to use for the request.                                    |                                                                                      |
| `accountID`                                                                          | *string*                                                                             | :heavy_check_mark:                                                                   | N/A                                                                                  |                                                                                      |
| `xMoovVersion`                                                                       | [?Components\Versions](../../Models/Components/Versions.md)                          | :heavy_minus_sign:                                                                   | Specify an API version.                                                              |                                                                                      |
| `skip`                                                                               | *?int*                                                                               | :heavy_minus_sign:                                                                   | N/A                                                                                  | 60                                                                                   |
| `count`                                                                              | *?int*                                                                               | :heavy_minus_sign:                                                                   | N/A                                                                                  | 20                                                                                   |

### Response

**[?Operations\ListSchedulesResponse](../../Models/Operations/ListSchedulesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## updateSchedule

Describes the schedule to modify.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;
use Moov\OpenAPI\Utils;

$sdk = OpenAPI\Moov::builder()->build();

$upsertSchedule = new Components\UpsertSchedule(
    occurrences: [
        new Components\Occurrence(
            occurrenceID: 'c520f1b9-0ba7-42f5-b977-248cdbe41c69',
            runOn: Utils\Utils::parseDateTime('2009-11-10T23:00:00Z'),
            runTransfer: new Components\RunTransfer(
                amount: new Components\Amount(
                    currency: 'Yen',
                    value: 565089,
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
                description: 'squid against hm',
            ),
        ),
    ],
    recur: new Components\Recur(
        recurrenceRule: '<value>',
        runTransfer: new Components\RunTransfer(
            amount: new Components\Amount(
                currency: 'Swiss Franc',
                value: 512157,
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
            description: 'concerning following worriedly uh-huh',
        ),
        start: Utils\Utils::parseDateTime('2009-11-10T23:00:00Z'),
    ),
);
$requestSecurity = new Operations\UpdateScheduleSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->scheduling->updateSchedule(
    security: $requestSecurity,
    accountID: 'd28d77f1-69a5-4915-a76a-821442a15304',
    scheduleID: 'd8e914a9-a70f-4d61-aad1-7b5d3bad9d55',
    upsertSchedule: $upsertSchedule,
    xMoovVersion: Components\Versions::Latest

);

if ($response->scheduleResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `security`                                                                             | [Operations\UpdateScheduleSecurity](../../Models/Operations/UpdateScheduleSecurity.md) | :heavy_check_mark:                                                                     | The security requirements to use for the request.                                      |
| `accountID`                                                                            | *string*                                                                               | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `scheduleID`                                                                           | *string*                                                                               | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `upsertSchedule`                                                                       | [Components\UpsertSchedule](../../Models/Components/UpsertSchedule.md)                 | :heavy_check_mark:                                                                     | N/A                                                                                    |
| `xMoovVersion`                                                                         | [?Components\Versions](../../Models/Components/Versions.md)                            | :heavy_minus_sign:                                                                     | Specify an API version.                                                                |

### Response

**[?Operations\UpdateScheduleResponse](../../Models/Operations/UpdateScheduleResponse.md)**

### Errors

| Error Type                     | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\GenericError            | 400, 409                       | application/json               |
| Errors\ScheduleValidationError | 422                            | application/json               |
| Errors\APIException            | 4XX, 5XX                       | \*/\*                          |