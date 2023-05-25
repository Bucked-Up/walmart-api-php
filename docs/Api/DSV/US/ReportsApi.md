# Walmart\Api\US\DSVReportsApi  
All URIs are relative to https://api-gateway.walmart.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getItemReport()**](ReportsApi.md#getItemReport) | **GET** /v3/getReport | Item Report |


## `getItemReport()`

```php
getItemReport($type, $version): \Walmart\Model\DSV\US\Reports\GetItemReport200Response
```
Item Report

This API is used to generate the Item Report for DSVs. It returns all the information associated with vendor items that are set up on Walmart’s platform.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure key-based authorization: signatureScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_SEC.AUTH_SIGNATURE', 'YOUR_KEY');
// Configure key-based authorization: consumerIdScheme
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET')->setApiKey('WM_CONSUMER.ID', 'YOUR_KEY');

$apiInstance = new Walmart\Api\ReportsApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$type = 'vendor_item'; // string | Use this to mention the type of report. Use type=vendor_item for fetching Item Report for DSVs
$version = '2'; // string | Use this parameter(version = 2) to access the latest version of the DSV report.

try {
    $result = $apiInstance->getItemReport($type, $version);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling ReportsApi->getItemReport: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Use this to mention the type of report. Use type=vendor_item for fetching Item Report for DSVs | [default to 'vendor_item'] |
| **version** | **string**| Use this parameter(version = 2) to access the latest version of the DSV report. | [default to '2'] |


### Return type

[**\Walmart\Model\DSV\US\Reports\GetItemReport200Response**](../Model/GetItemReport200Response.md)

### Authorization

[signatureScheme](../../README.md#signatureScheme), [consumerIdScheme](../../README.md#consumerIdScheme)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)