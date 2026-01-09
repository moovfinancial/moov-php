# InvoicePayment

Payment made towards an invoice, will be either a transfer or an external payment.


## Fields

| Field                                                                                   | Type                                                                                    | Required                                                                                | Description                                                                             |
| --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------- |
| `invoicePaymentID`                                                                      | *string*                                                                                | :heavy_check_mark:                                                                      | N/A                                                                                     |
| `invoicePaymentType`                                                                    | [Components\InvoicePaymentType](../../Models/Components/InvoicePaymentType.md)          | :heavy_check_mark:                                                                      | N/A                                                                                     |
| `transfer`                                                                              | [?Components\InvoiceTransferPayment](../../Models/Components/InvoiceTransferPayment.md) | :heavy_minus_sign:                                                                      | N/A                                                                                     |
| `external`                                                                              | [?Components\InvoiceExternalPayment](../../Models/Components/InvoiceExternalPayment.md) | :heavy_minus_sign:                                                                      | N/A                                                                                     |