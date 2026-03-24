# Webhooks

## Overview

### Available Operations

* [listEventTypes](#listeventtypes) - List all available event types that can be subscribed to.
* [list](#list) - List all webhooks configured for the account.
* [create](#create) - Create a new webhook for the account.
* [get](#get) - Get details of a specific webhook.
* [update](#update) - Update an existing webhook.
* [disable](#disable) - Disable a webhook. Disabled webhooks will no longer receive events.
* [ping](#ping) - Send a test ping to a webhook to verify it is configured correctly.
* [getSecret](#getsecret) - Get the secret key for verifying webhook payloads.

## listEventTypes

List all available event types that can be subscribed to.

### Example Usage

<!-- UsageSnippet language="php" operationID="listEventTypes" method="get" path="/event-types" -->
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



$response = $sdk->webhooks->listEventTypes(

);

if ($response->eventTypes !== null) {
    // handle response
}
```

### Response

**[?Operations\ListEventTypesResponse](../../Models/Operations/ListEventTypesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## list

List all webhooks configured for the account.

### Example Usage

<!-- UsageSnippet language="php" operationID="listWebhooks" method="get" path="/webhooks" -->
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



$response = $sdk->webhooks->list(

);

if ($response->webhooks !== null) {
    // handle response
}
```

### Response

**[?Operations\ListWebhooksResponse](../../Models/Operations/ListWebhooksResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## create

Create a new webhook for the account.

### Example Usage

<!-- UsageSnippet language="php" operationID="createWebhook" method="post" path="/webhooks" -->
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

$request = new Components\CreateWebhook(
    url: 'https://experienced-sailor.biz/',
    status: Components\WebhookStatus::Disabled,
    eventTypes: [],
    description: 'overdue bonnet failing',
);

$response = $sdk->webhooks->create(
    request: $request
);

if ($response->webhook !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                            | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `$request`                                                           | [Components\CreateWebhook](../../Models/Components/CreateWebhook.md) | :heavy_check_mark:                                                   | The request object to use for the request.                           |

### Response

**[?Operations\CreateWebhookResponse](../../Models/Operations/CreateWebhookResponse.md)**

### Errors

| Error Type                          | Status Code                         | Content Type                        |
| ----------------------------------- | ----------------------------------- | ----------------------------------- |
| Errors\GenericError                 | 400, 409                            | application/json                    |
| Errors\CreateWebhookValidationError | 422                                 | application/json                    |
| Errors\APIException                 | 4XX, 5XX                            | \*/\*                               |

## get

Get details of a specific webhook.

### Example Usage

<!-- UsageSnippet language="php" operationID="getWebhook" method="get" path="/webhooks/{webhookID}" -->
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



$response = $sdk->webhooks->get(
    webhookID: 'deeb5a05-74d4-40ad-b4be-a9265fd49428'
);

if ($response->webhook !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `webhookID`        | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\GetWebhookResponse](../../Models/Operations/GetWebhookResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## update

Update an existing webhook.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateWebhook" method="put" path="/webhooks/{webhookID}" -->
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

$updateWebhook = new Components\UpdateWebhook(
    url: 'https://nimble-affect.name',
    status: Components\WebhookStatus::Enabled,
    eventTypes: [],
    description: 'hmph eyeglasses pink stylish blah',
);

$response = $sdk->webhooks->update(
    webhookID: '954b566e-0c37-481b-bf92-6cdbd0e47dc0',
    updateWebhook: $updateWebhook

);

if ($response->webhook !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                            | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `webhookID`                                                          | *string*                                                             | :heavy_check_mark:                                                   | N/A                                                                  |
| `updateWebhook`                                                      | [Components\UpdateWebhook](../../Models/Components/UpdateWebhook.md) | :heavy_check_mark:                                                   | N/A                                                                  |

### Response

**[?Operations\UpdateWebhookResponse](../../Models/Operations/UpdateWebhookResponse.md)**

### Errors

| Error Type                          | Status Code                         | Content Type                        |
| ----------------------------------- | ----------------------------------- | ----------------------------------- |
| Errors\GenericError                 | 400, 409                            | application/json                    |
| Errors\UpdateWebhookValidationError | 422                                 | application/json                    |
| Errors\APIException                 | 4XX, 5XX                            | \*/\*                               |

## disable

Disable a webhook. Disabled webhooks will no longer receive events.

### Example Usage

<!-- UsageSnippet language="php" operationID="disableWebhook" method="delete" path="/webhooks/{webhookID}" -->
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



$response = $sdk->webhooks->disable(
    webhookID: 'c88929b3-cbb6-4144-923f-e9a5ba645708'
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `webhookID`        | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\DisableWebhookResponse](../../Models/Operations/DisableWebhookResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400, 409            | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## ping

Send a test ping to a webhook to verify it is configured correctly.

### Example Usage

<!-- UsageSnippet language="php" operationID="pingWebhook" method="post" path="/webhooks/{webhookID}/ping" -->
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



$response = $sdk->webhooks->ping(
    webhookID: '87e0ecc6-d6c3-4eeb-99e8-6dbe9212a6a2'
);

if ($response->pingResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `webhookID`        | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\PingWebhookResponse](../../Models/Operations/PingWebhookResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## getSecret

Get the secret key for verifying webhook payloads.

### Example Usage

<!-- UsageSnippet language="php" operationID="getWebhookSecret" method="get" path="/webhooks/{webhookID}/secret" -->
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



$response = $sdk->webhooks->getSecret(
    webhookID: '1fac81d6-2d5b-4180-8765-81282a450eda'
);

if ($response->webhookSecret !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `webhookID`        | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\GetWebhookSecretResponse](../../Models/Operations/GetWebhookSecretResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |