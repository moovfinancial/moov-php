# IssuingControls


## Fields

| Field                                                                                        | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `singleUse`                                                                                  | *?bool*                                                                                      | :heavy_minus_sign:                                                                           | Indicates if the card is single-use. If true, the card closes after the first authorization. |
| `velocityLimits`                                                                             | array<[Components\IssuingVelocityLimit](../../Models/Components/IssuingVelocityLimit.md)>    | :heavy_minus_sign:                                                                           | Sets the spending limit per time interval. Only one limit per interval is supported.         |