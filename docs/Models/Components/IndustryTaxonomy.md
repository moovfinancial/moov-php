# IndustryTaxonomy

A structured industry taxonomy entry with category and mapped to a default MCC code.


## Fields

| Field                                | Type                                 | Required                             | Description                          | Example                              |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `industry`                           | *string*                             | :heavy_check_mark:                   | URL-safe identifier for the industry | clothing-accessories                 |
| `displayName`                        | *string*                             | :heavy_check_mark:                   | Display name of the industry         | Clothing & Accessories               |
| `category`                           | *string*                             | :heavy_check_mark:                   | Category slug                        | retail                               |
| `categoryDisplayName`                | *string*                             | :heavy_check_mark:                   | Human-readable category label        | Retail                               |
| `defaultMcc`                         | *string*                             | :heavy_check_mark:                   | Default Merchant Category Code       | 5651                                 |