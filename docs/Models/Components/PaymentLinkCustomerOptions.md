# PaymentLinkCustomerOptions


## Fields

| Field                                                                               | Type                                                                                | Required                                                                            | Description                                                                         |
| ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- |
| `requireAddress`                                                                    | *?bool*                                                                             | :heavy_minus_sign:                                                                  | If true, a billing address is required when completing the payment form.            |
| `requirePhone`                                                                      | *?bool*                                                                             | :heavy_minus_sign:                                                                  | If true, a phone number is required when completing the payment form.               |
| `metadata`                                                                          | array<string, *string*>                                                             | :heavy_minus_sign:                                                                  | Optional free-form metadata for the Moov account that will represent this customer. |