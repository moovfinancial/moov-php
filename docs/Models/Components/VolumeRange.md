# VolumeRange

Defines the volume ranges for tiered pricing models.


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `fromValue`                                                          | *int*                                                                | :heavy_check_mark:                                                   | Specifies the lower value of a tier for the fee.                     |
| `toValue`                                                            | *?int*                                                               | :heavy_minus_sign:                                                   | Specifies the upper value of a tier for the fee.                     |
| `flatAmount`                                                         | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_check_mark:                                                   | The flat amount for a whole tier of the fee.                         |
| `perUnitAmount`                                                      | [Components\AmountDecimal](../../Models/Components/AmountDecimal.md) | :heavy_check_mark:                                                   | The unit price for a specific tier of the fee.                       |