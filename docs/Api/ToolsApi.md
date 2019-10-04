# Swagger\Client\ToolsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testPdfTemplate**](ToolsApi.md#testPdfTemplate) | **POST** /v2/tools/testPdfTemplate | 


# **testPdfTemplate**
> \Swagger\Client\Model\ResultMessageDocumentFile testPdfTemplate($dto)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dto = new \Swagger\Client\Model\TestPdfTemplateInputDto(); // \Swagger\Client\Model\TestPdfTemplateInputDto | 

try {
    $result = $apiInstance->testPdfTemplate($dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->testPdfTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dto** | [**\Swagger\Client\Model\TestPdfTemplateInputDto**](../Model/TestPdfTemplateInputDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentFile**](../Model/ResultMessageDocumentFile.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

