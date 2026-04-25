# GooglePayBillingAddress

  Billing address as returned by Google Pay.

  Refer to [Google's documentation](https://developers.google.com/pay/api/web/reference/response-objects#Address)
  for more information.


## Fields

| Field                                  | Type                                   | Required                               | Description                            | Example                                |
| -------------------------------------- | -------------------------------------- | -------------------------------------- | -------------------------------------- | -------------------------------------- |
| `address1`                             | *?string*                              | :heavy_minus_sign:                     | First line of the street address.      |                                        |
| `address2`                             | *?string*                              | :heavy_minus_sign:                     | Second line of the street address.     |                                        |
| `address3`                             | *?string*                              | :heavy_minus_sign:                     | Third line of the street address.      |                                        |
| `locality`                             | *?string*                              | :heavy_minus_sign:                     | City, town, neighborhood, or suburb.   |                                        |
| `administrativeArea`                   | *?string*                              | :heavy_minus_sign:                     | State, province, or region.            |                                        |
| `postalCode`                           | *?string*                              | :heavy_minus_sign:                     | Postal or ZIP code.                    |                                        |
| `countryCode`                          | *?string*                              | :heavy_minus_sign:                     | ISO 3166-1 alpha-2 country code.       | US                                     |
| `name`                                 | *?string*                              | :heavy_minus_sign:                     | Name of the cardholder.                |                                        |
| `phoneNumber`                          | *?string*                              | :heavy_minus_sign:                     | Phone number.                          |                                        |
| `sortingCode`                          | *?string*                              | :heavy_minus_sign:                     | Sorting code (used in some countries). |                                        |