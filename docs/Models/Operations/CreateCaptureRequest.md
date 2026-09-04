# CreateCaptureRequest


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `xIdempotencyKey`                                                    | *string*                                                             | :heavy_check_mark:                                                   | Prevents duplicate captures from being created.                      |
| `accountID`                                                          | *string*                                                             | :heavy_check_mark:                                                   | Moov account ID of the partner for the transfer.                     |
| `transferID`                                                         | *string*                                                             | :heavy_check_mark:                                                   | Identifier for the auth-capture `card-payment` transfer.             |
| `createCapture`                                                      | [Components\CreateCapture](../../Models/Components/CreateCapture.md) | :heavy_check_mark:                                                   | N/A                                                                  |