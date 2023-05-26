# #MX\MP\CreateLabelRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**packageType** | **string** | Package Type. Supported Package Types are - 'CUSTOM_PACKAGE', 'FEDEX_ENVELOPE', 'FEDEX_PAK' |
**boxDimensions** | [**\Walmart\Models\MP\MX\InternationalShipping\CreateLabelRequestBoxDimensions**](CreateLabelRequestBoxDimensions.md) |  |
**boxItems** | [**\Walmart\Models\MP\MX\InternationalShipping\CreateLabelRequestBoxItemsInner[]**](CreateLabelRequestBoxItemsInner.md) | Box Items |
**fromAddress** | [**\Walmart\Models\MP\MX\InternationalShipping\CreateLabelRequestFromAddress**](CreateLabelRequestFromAddress.md) |  |
**purchaseOrderId** | **string** | Purchase Order Id |
**carrierName** | **string** | Carrier Name. For now, the only supported carrier is - 'FedEx' |
**carrierServiceType** | **string** | Carrier Service Type. For now, supported values are - 'FEDEX_INTERNATIONAL_PRIORITY' for fedExPak/fedExEnvelope package types, 'FEDEX_INTERNATIONAL_ECONOMY' and 'FEDEX_INTERNATIONAL_GROUND' |


[[Back to Model list]](../) [[Back to API list]](../../Api/MX/MP) [[Back to README]](../../README.md)