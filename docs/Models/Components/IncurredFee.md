# IncurredFee

A fee incurred by a user.


## Fields

| Field                                                                 | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `feeID`                                                               | *?string*                                                             | :heavy_minus_sign:                                                    | N/A                                                                   |
| `accountID`                                                           | *?string*                                                             | :heavy_minus_sign:                                                    | N/A                                                                   |
| `walletID`                                                            | *?string*                                                             | :heavy_minus_sign:                                                    | N/A                                                                   |
| `createdOn`                                                           | [\DateTime](https://www.php.net/manual/en/class.datetime.php)         | :heavy_minus_sign:                                                    | N/A                                                                   |
| `feeName`                                                             | *?string*                                                             | :heavy_minus_sign:                                                    | N/A                                                                   |
| `amount`                                                              | [?Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_minus_sign:                                                    | N/A                                                                   |
| `generatedBy`                                                         | [?Components\GeneratedBy](../../Models/Components/GeneratedBy.md)     | :heavy_minus_sign:                                                    | The entity that generated the fee.                                    |
| `feeGroup`                                                            | *?string*                                                             | :heavy_minus_sign:                                                    | N/A                                                                   |
| `residualID`                                                          | *?string*                                                             | :heavy_minus_sign:                                                    | N/A                                                                   |