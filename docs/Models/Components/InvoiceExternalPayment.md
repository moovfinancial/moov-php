# InvoiceExternalPayment


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `description`                                                        | *string*                                                             | :heavy_check_mark:                                                   | N/A                                                                  |
| `foreignID`                                                          | *?string*                                                            | :heavy_minus_sign:                                                   | N/A                                                                  |
| `paymentDate`                                                        | [\DateTime](https://www.php.net/manual/en/class.datetime.php)        | :heavy_minus_sign:                                                   | N/A                                                                  |
| `amount`                                                             | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_check_mark:                                                   | N/A                                                                  |