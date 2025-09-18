# BillingInterchangeProgramFee

Details of a specific interchange program fee.


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `programName`                                                        | *string*                                                             | :heavy_check_mark:                                                   | The name of the interchange program.                                 |
| `count`                                                              | *int*                                                                | :heavy_check_mark:                                                   | The number of transactions for this program.                         |
| `percentageRate`                                                     | *\Brick\Math\BigDecimal*                                             | :heavy_check_mark:                                                   | The percentage rate for this program.                                |
| `perItemRate`                                                        | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_check_mark:                                                   | The per-item rate for this program.                                  |
| `total`                                                              | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_check_mark:                                                   | The total fee amount for this program.                               |
| `transferVolume`                                                     | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_check_mark:                                                   | The total transfer volume for this program.                          |