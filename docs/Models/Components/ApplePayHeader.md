# ApplePayHeader

Information needed to decrypt Apple Pay payment data.

Refer to [Apple's documentation](https://developer.apple.com/documentation/passkit/payment-token-format-reference#Header-keys-and-values) 
for more information.


## Fields

| Field                                                                     | Type                                                                      | Required                                                                  | Description                                                               | Example                                                                   |
| ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- | ------------------------------------------------------------------------- |
| `ephemeralPublicKey`                                                      | *?string*                                                                 | :heavy_minus_sign:                                                        | Base64-encoded ephemeral public key, used for ECC-encrypted payment data. | MFkwEK...Md==                                                             |
| `publicKeyHash`                                                           | *string*                                                                  | :heavy_check_mark:                                                        | A base64-encoded, SHA-256 hash of the merchant's public key.              | l0CnXdMv...D1I=                                                           |
| `transactionId`                                                           | *string*                                                                  | :heavy_check_mark:                                                        | A device-generated identifier for the transaction.                        | 32b...4f3                                                                 |