# CreateCaptureRequest


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `xIdempotencyKey`                                                    | *string*                                                             | :heavy_check_mark:                                                   | Prevents duplicate captures from being created.                      |
| `accountID`                                                          | *string*                                                             | :heavy_check_mark:                                                   | The merchant's Moov account ID.                                      |
| `transferID`                                                         | *string*                                                             | :heavy_check_mark:                                                   | Identifier for the transfer.                                         |
| `createCapture`                                                      | [Components\CreateCapture](../../Models/Components/CreateCapture.md) | :heavy_check_mark:                                                   | N/A                                                                  |