# ReverseTransferRequest


## Fields

| Field                                                                   | Type                                                                    | Required                                                                | Description                                                             |
| ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- |
| `xIdempotencyKey`                                                       | *string*                                                                | :heavy_check_mark:                                                      | Prevents duplicate reversals from being created.                        |
| `accountID`                                                             | *string*                                                                | :heavy_check_mark:                                                      | The Moov account ID.                                                    |
| `transferID`                                                            | *string*                                                                | :heavy_check_mark:                                                      | The transfer ID to reverse.                                             |
| `xMoovVersion`                                                          | [?Components\Versions](../../Models/Components/Versions.md)             | :heavy_minus_sign:                                                      | Specify an API version.                                                 |
| `createReversal`                                                        | [?Components\CreateReversal](../../Models/Components/CreateReversal.md) | :heavy_minus_sign:                                                      | N/A                                                                     |