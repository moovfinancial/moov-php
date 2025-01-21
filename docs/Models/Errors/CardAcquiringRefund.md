# CardAcquiringRefund

Details of a card refund.


## Fields

| Field                                                                         | Type                                                                          | Required                                                                      | Description                                                                   |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `refundID`                                                                    | *string*                                                                      | :heavy_check_mark:                                                            | Identifier for the refund.                                                    |
| `createdOn`                                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                 | :heavy_check_mark:                                                            | N/A                                                                           |
| `updatedOn`                                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                 | :heavy_check_mark:                                                            | N/A                                                                           |
| `status`                                                                      | [Components\RefundStatus](../../Models/Components/RefundStatus.md)            | :heavy_check_mark:                                                            | N/A                                                                           |
| `amount`                                                                      | [Components\Amount](../../Models/Components/Amount.md)                        | :heavy_check_mark:                                                            | N/A                                                                           |
| `cardDetails`                                                                 | [?Components\RefundCardDetails](../../Models/Components/RefundCardDetails.md) | :heavy_minus_sign:                                                            | N/A                                                                           |