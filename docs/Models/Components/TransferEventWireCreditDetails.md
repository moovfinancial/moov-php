# TransferEventWireCreditDetails


## Fields

| Field                                                                                | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `status`                                                                             | [Components\WireTransactionStatus](../../Models/Components/WireTransactionStatus.md) | :heavy_check_mark:                                                                   | Status of a transaction within the wire lifecycle.                                   |
| `failureCode`                                                                        | [?Components\WireFailureCode](../../Models/Components/WireFailureCode.md)            | :heavy_minus_sign:                                                                   | Status codes for wire failures.                                                      |