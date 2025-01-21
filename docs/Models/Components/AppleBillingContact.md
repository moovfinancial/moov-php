# AppleBillingContact

  Billing contact information as returned from Apple Pay.
  
  Refer to [Apple's documentation](https://developer.apple.com/documentation/apple_pay_on_the_web/applepaypaymentcontact) 
  for more information.


## Fields

| Field                                  | Type                                   | Required                               | Description                            | Example                                |
| -------------------------------------- | -------------------------------------- | -------------------------------------- | -------------------------------------- | -------------------------------------- |
| `addressLines`                         | array<*string*>                        | :heavy_minus_sign:                     | Address lines 1 and 2 for the contact. | [<br/>"123 Sesame Street"<br/>]        |
| `locality`                             | *?string*                              | :heavy_minus_sign:                     | The contact's city.                    | Phoenix                                |
| `postalCode`                           | *?string*                              | :heavy_minus_sign:                     | The contact's postal code.             | 30345                                  |
| `administrativeArea`                   | *?string*                              | :heavy_minus_sign:                     | The contact's two-letter state code.   | AZ                                     |
| `countryCode`                          | *?string*                              | :heavy_minus_sign:                     | The contact's two-letter ISO 3166      | US                                     |