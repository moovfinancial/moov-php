# CardAcquiring

A summary of card acquiring volume and fees.


## Fields

| Field                                                                                         | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `volumeAmount`                                                                                | [?Components\AmountDecimal](../../Models/Components/AmountDecimal.md)                         | :heavy_minus_sign:                                                                            | The total transaction volume amount.                                                          |
| `volumeCount`                                                                                 | *?int*                                                                                        | :heavy_minus_sign:                                                                            | The total number of transactions.                                                             |
| `feeAmount`                                                                                   | [?Components\AmountDecimal](../../Models/Components/AmountDecimal.md)                         | :heavy_minus_sign:                                                                            | The total fee amount.                                                                         |
| `interchangeFees`                                                                             | [?Components\BillingSummaryInterchange](../../Models/Components/BillingSummaryInterchange.md) | :heavy_minus_sign:                                                                            | A summary of interchange fees by card brand.                                                  |