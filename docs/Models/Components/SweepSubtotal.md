# SweepSubtotal


## Fields

| Field                                                                                | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `type`                                                                               | [Components\WalletTransactionType](../../Models/Components/WalletTransactionType.md) | :heavy_check_mark:                                                                   | The type of wallet transaction the subtotal is for.                                  |
| `count`                                                                              | *int*                                                                                | :heavy_check_mark:                                                                   | The number of transactions of this type accrued in the sweep.                        |
| `amount`                                                                             | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md)                 | :heavy_check_mark:                                                                   | The value of transactions of this type accrued in the sweep.                         |