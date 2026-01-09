# UpdateWebhook

Request body for updating an existing webhook.


## Fields

| Field                                                                             | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `url`                                                                             | *string*                                                                          | :heavy_check_mark:                                                                | The URL where webhook events will be sent.                                        |
| `status`                                                                          | [Components\WebhookStatus](../../Models/Components/WebhookStatus.md)              | :heavy_check_mark:                                                                | The status of the webhook.                                                        |
| `eventTypes`                                                                      | array<[Components\WebhookEventType](../../Models/Components/WebhookEventType.md)> | :heavy_check_mark:                                                                | The list of event types this webhook should subscribe to.                         |
| `description`                                                                     | *string*                                                                          | :heavy_check_mark:                                                                | A description of the webhook for reference. Can be an empty string.               |