# DepositAccountIngestedResponse

The result of ingesting a deposit account into the deposit view.


## Fields

| Field                                                                      | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `moovAccountID`                                                            | *string*                                                                   | :heavy_check_mark:                                                         | The Moov account that owns the deposit view the account was ingested into. |
| `sourceSystem`                                                             | [Components\SourceSystem](../../Models/Components/SourceSystem.md)         | :heavy_check_mark:                                                         | The core banking source system that produced the ingested payload.         |
| `sourceAccountID`                                                          | *string*                                                                   | :heavy_check_mark:                                                         | The identifier of the deposit account within the source system.            |
| `ingestedAt`                                                               | [\DateTime](https://www.php.net/manual/en/class.datetime.php)              | :heavy_check_mark:                                                         | The date and time the deposit account was ingested.                        |