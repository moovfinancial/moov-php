# ListTicketsResponseBody

A paginated list of items. The `nextPage` field is omitted if there are no more pages available.


## Fields

| Field                                                                       | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `items`                                                                     | array<[Components\Ticket](../../Models/Components/Ticket.md)>               | :heavy_check_mark:                                                          | N/A                                                                         |
| `nextPage`                                                                  | [?Components\ItemListNextPage](../../Models/Components/ItemListNextPage.md) | :heavy_minus_sign:                                                          | N/A                                                                         |