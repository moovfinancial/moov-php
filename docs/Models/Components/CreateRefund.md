# CreateRefund

Specifies a partial amount to refund. 

Before v2026.10, this request body may be omitted. In v2026.10 and later, send an empty object to refund the full amount of the original transfer.


## Fields

| Field                                                                                                 | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `amount`                                                                                              | [?Components\AmountDecimal](../../Models/Components/AmountDecimal.md)                                 | :heavy_minus_sign:                                                                                    | Amount to refund. If omitted, the original transfer's full amount will be refunded.                   |
| `captureID`                                                                                           | *?string*                                                                                             | :heavy_minus_sign:                                                                                    | ID of the capture to refund. This field is only relevant for an auth-capture `card-payment` transfer. |
| `amountDetails`                                                                                       | [?Components\RefundAmountDetails](../../Models/Components/RefundAmountDetails.md)                     | :heavy_minus_sign:                                                                                    | Breakdown of the refunded amount.                                                                     |