# GooglePayTokenizationData

  Contains the encrypted payment token from Google Pay.

  The `token` field is a JSON-encoded string containing the ECv2 encrypted payment token.


## Fields

| Field                                                                                                | Type                                                                                                 | Required                                                                                             | Description                                                                                          | Example                                                                                              |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `type`                                                                                               | [Components\GooglePayTokenizationDataType](../../Models/Components/GooglePayTokenizationDataType.md) | :heavy_check_mark:                                                                                   | The tokenization type. Always `PAYMENT_GATEWAY`.                                                     | PAYMENT_GATEWAY                                                                                      |
| `token`                                                                                              | *string*                                                                                             | :heavy_check_mark:                                                                                   | The ECv2 encrypted payment token, as a JSON-encoded string.                                          |                                                                                                      |