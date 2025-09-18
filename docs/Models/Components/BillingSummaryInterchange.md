# BillingSummaryInterchange

A summary of interchange fees by card brand.


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `visa`                                                               | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_check_mark:                                                   | Total interchange fees for Visa.                                     |
| `mastercard`                                                         | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_check_mark:                                                   | Total interchange fees for Mastercard.                               |
| `discover`                                                           | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_check_mark:                                                   | Total interchange fees for Discover.                                 |
| `americanExpress`                                                    | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_check_mark:                                                   | Total interchange fees for American Express.                         |