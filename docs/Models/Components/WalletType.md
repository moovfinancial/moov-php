# WalletType

Type of a wallet.
  - `default`: The primary system-generated wallet automatically created by Moov when an account is granted the wallet capability. This generates a moov-wallet payment method that is available for use immediately. Only one default wallet exists per account.
  - `general`: A user-defined wallet created via the API to segment funds for specific use cases. Users can create multiple general wallets per account to support internal business models or financial reporting needs.


## Values

| Name      | Value     |
| --------- | --------- |
| `Default` | default   |
| `General` | general   |