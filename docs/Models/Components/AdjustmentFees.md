# AdjustmentFees

A detailed breakdown of adjustment (correction) fees by fee name.


## Fields

| Field                                                                                | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `items`                                                                              | array<[Components\BillingAdjustment](../../Models/Components/BillingAdjustment.md)>  | :heavy_check_mark:                                                                   | Adjustment fees grouped by fee name.                                                 |
| `total`                                                                              | [Components\BillingCountAndAmount](../../Models/Components/BillingCountAndAmount.md) | :heavy_check_mark:                                                                   | Total adjustment fees.                                                               |