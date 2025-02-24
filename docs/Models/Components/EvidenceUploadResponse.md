# EvidenceUploadResponse

Details of a successfully uploaded evidence file.


## Fields

| Field                                                              | Type                                                               | Required                                                           | Description                                                        |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `evidenceID`                                                       | *string*                                                           | :heavy_check_mark:                                                 | The ID of the evidence.                                            |
| `disputeID`                                                        | *string*                                                           | :heavy_check_mark:                                                 | The ID of the dispute the evidence is associated with.             |
| `filename`                                                         | *string*                                                           | :heavy_check_mark:                                                 | The name of the evidence file.                                     |
| `mimeType`                                                         | *string*                                                           | :heavy_check_mark:                                                 | The MIME type of the evidence file.                                |
| `size`                                                             | *int*                                                              | :heavy_check_mark:                                                 | The size of the evidence file.                                     |
| `evidenceType`                                                     | [Components\EvidenceType](../../Models/Components/EvidenceType.md) | :heavy_check_mark:                                                 | N/A                                                                |
| `createdOn`                                                        | [\DateTime](https://www.php.net/manual/en/class.datetime.php)      | :heavy_check_mark:                                                 | The date and time the evidence was uploaded.                       |