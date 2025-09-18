# OtherCardFees

A detailed breakdown of other card-related fees.


## Fields

| Field                                                                                | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `disputes`                                                                           | [Components\BillingCountAndAmount](../../Models/Components/BillingCountAndAmount.md) | :heavy_check_mark:                                                                   | Fees for disputes.                                                                   |
| `cardAccountUpdater`                                                                 | [Components\BillingCountAndAmount](../../Models/Components/BillingCountAndAmount.md) | :heavy_check_mark:                                                                   | Fees for card account updater services.                                              |
| `cardVerification`                                                                   | [Components\BillingCountAndAmount](../../Models/Components/BillingCountAndAmount.md) | :heavy_check_mark:                                                                   | Fees for card verification.                                                          |
| `nameVerification`                                                                   | [Components\BillingCountAndAmount](../../Models/Components/BillingCountAndAmount.md) | :heavy_check_mark:                                                                   | Fees for name verification.                                                          |
| `total`                                                                              | [Components\BillingCountAndAmount](../../Models/Components/BillingCountAndAmount.md) | :heavy_check_mark:                                                                   | Total other card fees.                                                               |