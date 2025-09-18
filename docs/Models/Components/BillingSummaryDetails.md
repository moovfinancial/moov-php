# BillingSummaryDetails

Details of volume and fees for a specific payment method.


## Fields

| Field                                                                 | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `volumeAmount`                                                        | [?Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_minus_sign:                                                    | The total transaction volume amount.                                  |
| `volumeCount`                                                         | *?int*                                                                | :heavy_minus_sign:                                                    | The total number of transactions.                                     |
| `feeAmount`                                                           | [?Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_minus_sign:                                                    | The total fee amount.                                                 |