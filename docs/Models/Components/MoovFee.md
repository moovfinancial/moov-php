# MoovFee

Moov fee charged to an account involved in a transfer.


## Fields

| Field                                                                                 | Type                                                                                  | Required                                                                              | Description                                                                           |
| ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------- |
| `accountID`                                                                           | *string*                                                                              | :heavy_check_mark:                                                                    | ID of the account that fees were charged to.                                          |
| `transferParty`                                                                       | [Components\TransferParty](../../Models/Components/TransferParty.md)                  | :heavy_check_mark:                                                                    | Indicates whether the account charged is the source, destination, or partner account. |
| `totalAmount`                                                                         | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md)                  | :heavy_check_mark:                                                                    | The total amount of fees charged to the account.                                      |
| `feeIDs`                                                                              | array<*string*>                                                                       | :heavy_check_mark:                                                                    | List of fee IDs that sum to the totalAmount.                                          |