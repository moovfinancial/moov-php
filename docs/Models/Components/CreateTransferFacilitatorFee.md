# CreateTransferFacilitatorFee

Total or markup fee to apply when creating a transfer.


## Fields

| Field                                                                 | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `total`                                                               | [?Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_minus_sign:                                                    | Total facilitator fee. Only either `total` or `markup` can be set.    |
| `markup`                                                              | [?Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_minus_sign:                                                    | Markup facilitator fee. Only either `total` or `markup` can be set.   |