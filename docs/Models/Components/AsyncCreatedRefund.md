# AsyncCreatedRefund

Asynchronous refund response


## Fields

| Field                                                                             | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `refundID`                                                                        | *string*                                                                          | :heavy_check_mark:                                                                | N/A                                                                               |
| `createdOn`                                                                       | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                     | :heavy_check_mark:                                                                | N/A                                                                               |
| `amount`                                                                          | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md)              | :heavy_check_mark:                                                                | N/A                                                                               |
| `captureID`                                                                       | *?string*                                                                         | :heavy_minus_sign:                                                                | ID of the capture refunded for an auth-capture `card-payment` transfer.           |
| `amountDetails`                                                                   | [?Components\RefundAmountDetails](../../Models/Components/RefundAmountDetails.md) | :heavy_minus_sign:                                                                | N/A                                                                               |