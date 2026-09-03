# BillingAdjustment

An adjustment (correction) fee grouped by its statement line-item name.


## Fields

| Field                                                                    | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `feeName`                                                                | *string*                                                                 | :heavy_check_mark:                                                       | The name of the adjustment fee, shown as the statement line item.        |
| `count`                                                                  | *int*                                                                    | :heavy_check_mark:                                                       | The number of adjustments with this fee name.                            |
| `amount`                                                                 | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md)     | :heavy_check_mark:                                                       | The total amount for this fee name. May be negative for a credit/refund. |