# TransferControls

Controls for transfers created through a given partner


## Fields

| Field                                                                        | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `accountID`                                                                  | *string*                                                                     | :heavy_check_mark:                                                           | ID of the merchant account.                                                  |
| `partnerAccountID`                                                           | *string*                                                                     | :heavy_check_mark:                                                           | ID of the partner account.                                                   |
| `debtRepayment`                                                              | *bool*                                                                       | :heavy_check_mark:                                                           | Indicates if the account is configured for debt repayment.                   |
| `allowDynamicDescriptor`                                                     | *bool*                                                                       | :heavy_check_mark:                                                           | Indicates if the account is allowed to set dynamic descriptors on transfers. |
| `allowSurcharge`                                                             | *bool*                                                                       | :heavy_check_mark:                                                           | Indicates if the account is allowed to apply surcharges to transfers.        |