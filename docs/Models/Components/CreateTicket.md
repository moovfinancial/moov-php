# CreateTicket

Request to create a new support ticket.


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `title`                                                              | *string*                                                             | :heavy_check_mark:                                                   | N/A                                                                  |
| `body`                                                               | *string*                                                             | :heavy_check_mark:                                                   | N/A                                                                  |
| `author`                                                             | *?string*                                                            | :heavy_minus_sign:                                                   | N/A                                                                  |
| `contact`                                                            | [Components\TicketContact](../../Models/Components/TicketContact.md) | :heavy_check_mark:                                                   | N/A                                                                  |
| `foreignID`                                                          | *?string*                                                            | :heavy_minus_sign:                                                   | N/A                                                                  |