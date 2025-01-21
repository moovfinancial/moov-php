# UpdateCardRequest


## Fields

| Field                                                          | Type                                                           | Required                                                       | Description                                                    | Example                                                        |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `accountID`                                                    | *string*                                                       | :heavy_check_mark:                                             | N/A                                                            |                                                                |
| `cardID`                                                       | *string*                                                       | :heavy_check_mark:                                             | N/A                                                            | 01234567-89ab-cdef-0123-456789abcdef                           |
| `updateCard`                                                   | [Components\UpdateCard](../../Models/Components/UpdateCard.md) | :heavy_check_mark:                                             | N/A                                                            | {<br/>"cardCvv": "456"<br/>}                                   |
| `xMoovVersion`                                                 | [?Components\Versions](../../Models/Components/Versions.md)    | :heavy_minus_sign:                                             | Specify an API version.                                        |                                                                |