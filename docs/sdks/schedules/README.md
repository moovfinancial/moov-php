# Schedules

## Overview

### Available Operations

* [cancel](#cancel) - Describes the schedule to cancel.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

## cancel

Describes the schedule to cancel.

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/accounts/{accountID}/transfers.write` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="cancelSchedule" method="delete" path="/accounts/{accountID}/schedules/{scheduleID}" -->
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



$response = $sdk->schedules->cancel(
    accountID: 'e89edcfc-19ca-40eb-802b-a35100dea24d',
    scheduleID: '5ca67de0-63f6-4cb7-b94a-6c84616ffe03'

);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                  | Type                                                       | Required                                                   | Description                                                |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `accountID`                                                | *string*                                                   | :heavy_check_mark:                                         | Your Moov account ID as the partner running the transfers. |
| `scheduleID`                                               | *string*                                                   | :heavy_check_mark:                                         | N/A                                                        |

### Response

**[?Operations\CancelScheduleResponse](../../Models/Operations/CancelScheduleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |