# LinkApplePayError


## Fields

| Field                                                                      | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `error`                                                                    | *?string*                                                                  | :heavy_minus_sign:                                                         | Describes an error that wasn't attributable to a single request field.     |
| `paymentData`                                                              | *?string*                                                                  | :heavy_minus_sign:                                                         | Describes an error within the `token.paymentData` request field.           |
| `paymentMethod`                                                            | *?string*                                                                  | :heavy_minus_sign:                                                         | Describes an error within the `token.paymentMethod` request field.         |
| `transactionIdentifier`                                                    | *?string*                                                                  | :heavy_minus_sign:                                                         | Describes an error within the `token.transactionIdentifier` request field. |