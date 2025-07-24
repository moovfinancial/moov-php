# SweepConfigPaymentMethod

The payment method used to push or pull funds to a bank account.
The push payment method can only be ach-credit-standard, ach-credit-same-day, or rtp-credit. The pull payment method can only be ach-debit-fund.


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `paymentMethodID`                                             | *string*                                                      | :heavy_check_mark:                                            | ID of the payment method.                                     |
| `disabledOn`                                                  | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | N/A                                                           |