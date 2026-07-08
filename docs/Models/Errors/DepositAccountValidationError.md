# DepositAccountValidationError

Descriptions of any field validations that failed while parsing the deposit account payload.


## Fields

| Field                                                                                     | Type                                                                                      | Required                                                                                  | Description                                                                               |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `sourceSystem`                                                                            | *?string*                                                                                 | :heavy_minus_sign:                                                                        | An error describing why the X-Source-System header was missing or unsupported.            |
| `body`                                                                                    | *?string*                                                                                 | :heavy_minus_sign:                                                                        | An error describing why the request body could not be parsed for the given source system. |