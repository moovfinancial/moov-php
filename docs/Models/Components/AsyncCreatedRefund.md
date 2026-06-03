# AsyncCreatedRefund

Asynchronous refund response


## Fields

| Field                                                                             | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `refundID`                                                                        | *string*                                                                          | :heavy_check_mark:                                                                | N/A                                                                               |
| `createdOn`                                                                       | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                     | :heavy_check_mark:                                                                | N/A                                                                               |
| `amount`                                                                          | [Components\Amount](../../Models/Components/Amount.md)                            | :heavy_check_mark:                                                                | N/A                                                                               |
| `amountDetails`                                                                   | [?Components\RefundAmountDetails](../../Models/Components/RefundAmountDetails.md) | :heavy_minus_sign:                                                                | N/A                                                                               |