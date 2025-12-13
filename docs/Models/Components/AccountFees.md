# AccountFees

A detailed breakdown of account fees.


## Fields

| Field                                                                 | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `walletFee`                                                           | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md)  | :heavy_check_mark:                                                    | Fees associated with wallet services.                                 |
| `merchantPCIFee`                                                      | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md)  | :heavy_check_mark:                                                    | Fees for PCI compliance.                                              |
| `kybFee`                                                              | [?Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_minus_sign:                                                    | Fees for business verification.                                       |
| `kycFee`                                                              | [?Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_minus_sign:                                                    | Fees for customer verification.                                       |
| `transactionMonitoringFee`                                            | [?Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_minus_sign:                                                    | Fees for transaction risk monitoring.                                 |
| `total`                                                               | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md)  | :heavy_check_mark:                                                    | Total platform fees.                                                  |