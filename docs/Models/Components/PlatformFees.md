# PlatformFees

A detailed breakdown of platform fees.


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `walletFee`                                                          | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_check_mark:                                                   | Fees associated with wallet services.                                |
| `merchantPCIFee`                                                     | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_check_mark:                                                   | Fees for PCI compliance.                                             |
| `total`                                                              | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_check_mark:                                                   | Total platform fees.                                                 |