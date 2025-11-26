# ImageUploadRequestMultiPart


## Fields

| Field                                                                               | Type                                                                                | Required                                                                            | Description                                                                         |
| ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- |
| `image`                                                                             | [Components\Image](../../Models/Components/Image.md)                                | :heavy_check_mark:                                                                  | A PNG, JPEG, or WebP image file to upload.                                          |
| `metadata`                                                                          | [?Components\ImageMetadataRequest](../../Models/Components/ImageMetadataRequest.md) | :heavy_minus_sign:                                                                  | Optional, json-encoded metadata to associate with the uploaded image.               |