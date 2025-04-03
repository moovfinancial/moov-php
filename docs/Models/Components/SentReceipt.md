# SentReceipt


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   | Example                                                       |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `receiptID`                                                   | *string*                                                      | :heavy_check_mark:                                            | Unique identifier for the receipt.                            |                                                               |
| `idempotencyKey`                                              | *string*                                                      | :heavy_check_mark:                                            | The idempotency key used when creating the receipt.           |                                                               |
| `sentOn`                                                      | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_check_mark:                                            | When the receipt was sent.                                    | 2025-11-10T23:00:000Z                                         |