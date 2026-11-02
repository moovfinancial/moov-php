# IssuedControlsAllowedSchedule

Limits card usage to specific days and times.


## Fields

| Field                                                                                                             | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `timezone`                                                                                                        | *string*                                                                                                          | :heavy_check_mark:                                                                                                | IANA timezone string used to evaluate window boundaries against the authorization time.                           |
| `windows`                                                                                                         | array<[Components\ScheduleWindow](../../Models/Components/ScheduleWindow.md)>                                     | :heavy_check_mark:                                                                                                | Time windows during which authorizations on the card can be approved. Any matching window allows the transaction. |