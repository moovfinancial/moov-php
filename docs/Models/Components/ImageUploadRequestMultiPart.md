# ImageUploadRequestMultiPart

Multipart request body for uploading an image with optional metadata.


## Fields

| Field                                                                               | Type                                                                                | Required                                                                            | Description                                                                         |
| ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- |
| `image`                                                                             | [Components\Image](../../Models/Components/Image.md)                                | :heavy_check_mark:                                                                  | N/A                                                                                 |
| `metadata`                                                                          | [?Components\ImageMetadataRequest](../../Models/Components/ImageMetadataRequest.md) | :heavy_minus_sign:                                                                  | Optional, json-encoded metadata to associate with the uploaded image.               |