# GooglePayIntermediateSigningKey

Contains the intermediate signing key for verification.


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `signedKey`                                                       | *string*                                                          | :heavy_check_mark:                                                | A JSON-encoded serialized string containing the signing key data. |
| `signatures`                                                      | array<*string*>                                                   | :heavy_check_mark:                                                | Base64-encoded signatures of the `signedKey`.                     |