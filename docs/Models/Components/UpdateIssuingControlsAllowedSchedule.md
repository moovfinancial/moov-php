# UpdateIssuingControlsAllowedSchedule

Replaces the allowed schedule. Set to `null` to remove all schedule restrictions.


## Fields

| Field                                                                                         | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `timezone`                                                                                    | *?string*                                                                                     | :heavy_minus_sign:                                                                            | IANA timezone string used to evaluate window boundaries against the authorization time.       |
| `windows`                                                                                     | array<[Components\ScheduleWindow](../../Models/Components/ScheduleWindow.md)>                 | :heavy_minus_sign:                                                                            | Time windows during which the card may authorize. Any matching window allows the transaction. |