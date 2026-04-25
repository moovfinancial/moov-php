# LinkedGooglePayPaymentMethod


## Fields

| Field                                                                        | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `paymentMethodID`                                                            | *string*                                                                     | :heavy_check_mark:                                                           | The new payment method's ID.                                                 |
| `paymentMethodType`                                                          | [Components\PaymentMethodType](../../Models/Components/PaymentMethodType.md) | :heavy_check_mark:                                                           | The payment method type that represents a payment rail and directionality    |
| `googlePay`                                                                  | [Components\GooglePayResponse](../../Models/Components/GooglePayResponse.md) | :heavy_check_mark:                                                           | Describes a Google Pay token on a Moov account.                              |