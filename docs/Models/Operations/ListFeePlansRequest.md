# ListFeePlansRequest


## Fields

| Field                                                        | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `accountID`                                                  | *string*                                                     | :heavy_check_mark:                                           | N/A                                                          |
| `xMoovVersion`                                               | [?Components\Versions](../../Models/Components/Versions.md)  | :heavy_minus_sign:                                           | Specify an API version.                                      |
| `planIDs`                                                    | array<*string*>                                              | :heavy_minus_sign:                                           | A comma-separated list of plan IDs to filter the results by. |