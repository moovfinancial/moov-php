# UpsertSchedule


## Fields

| Field                                                                 | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `description`                                                         | *?string*                                                             | :heavy_minus_sign:                                                    | Simple description of what the schedule is.                           |
| `occurrences`                                                         | array<[Components\Occurrence](../../Models/Components/Occurrence.md)> | :heavy_minus_sign:                                                    | N/A                                                                   |
| `recur`                                                               | [?Components\Recur](../../Models/Components/Recur.md)                 | :heavy_minus_sign:                                                    | Defines configuration for recurring transfers.                        |