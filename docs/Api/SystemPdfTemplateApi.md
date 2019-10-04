# Swagger\Client\SystemPdfTemplateApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemPdfTemplateControllerCount**](SystemPdfTemplateApi.md#systemPdfTemplateControllerCount) | **GET** /v2/pdftemplates/count | Count pdf templates
[**systemPdfTemplateControllerGetAllTemplates**](SystemPdfTemplateApi.md#systemPdfTemplateControllerGetAllTemplates) | **GET** /v2/pdftemplates/getAll | Gets all pdf templates
[**systemPdfTemplateControllerGetTemplate**](SystemPdfTemplateApi.md#systemPdfTemplateControllerGetTemplate) | **GET** /v2/pdftemplates/{id} | Return the pdf template with specified id
[**systemPdfTemplateControllerSearch**](SystemPdfTemplateApi.md#systemPdfTemplateControllerSearch) | **GET** /v2/pdftemplates/search | Search pdf templates


# **systemPdfTemplateControllerCount**
> \Swagger\Client\Model\ResultMessageInt32 systemPdfTemplateControllerCount($template_key, $name, $document_type, $offset, $number_of_records, $sort_field)

Count pdf templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SystemPdfTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_key = "template_key_example"; // string | 
$name = "name_example"; // string | 
$document_type = "document_type_example"; // string | 
$offset = 56; // int | 
$number_of_records = 56; // int | 
$sort_field = "sort_field_example"; // string | 

try {
    $result = $apiInstance->systemPdfTemplateControllerCount($template_key, $name, $document_type, $offset, $number_of_records, $sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPdfTemplateApi->systemPdfTemplateControllerCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_key** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **document_type** | **string**|  | [optional]
 **offset** | **int**|  | [optional]
 **number_of_records** | **int**|  | [optional]
 **sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageInt32**](../Model/ResultMessageInt32.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemPdfTemplateControllerGetAllTemplates**
> \Swagger\Client\Model\ResultMessageListPdfTemplateOutputDto systemPdfTemplateControllerGetAllTemplates($document_type, $document_sub_type, $include_content, $offset, $number_of_records, $sort_field)

Gets all pdf templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SystemPdfTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = "document_type_example"; // string | 
$document_sub_type = "document_sub_type_example"; // string | 
$include_content = true; // bool | 
$offset = 56; // int | 
$number_of_records = 56; // int | 
$sort_field = "sort_field_example"; // string | 

try {
    $result = $apiInstance->systemPdfTemplateControllerGetAllTemplates($document_type, $document_sub_type, $include_content, $offset, $number_of_records, $sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPdfTemplateApi->systemPdfTemplateControllerGetAllTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **string**|  | [optional]
 **document_sub_type** | **string**|  | [optional]
 **include_content** | **bool**|  | [optional]
 **offset** | **int**|  | [optional]
 **number_of_records** | **int**|  | [optional]
 **sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageListPdfTemplateOutputDto**](../Model/ResultMessageListPdfTemplateOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemPdfTemplateControllerGetTemplate**
> \Swagger\Client\Model\ResultMessagePdfTemplateOutputDto systemPdfTemplateControllerGetTemplate($id)

Return the pdf template with specified id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SystemPdfTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->systemPdfTemplateControllerGetTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPdfTemplateApi->systemPdfTemplateControllerGetTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessagePdfTemplateOutputDto**](../Model/ResultMessagePdfTemplateOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **systemPdfTemplateControllerSearch**
> \Swagger\Client\Model\ResultMessageListTemplateSearchOutputDto systemPdfTemplateControllerSearch($template_key, $name, $document_type, $offset, $number_of_records, $sort_field)

Search pdf templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SystemPdfTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_key = "template_key_example"; // string | 
$name = "name_example"; // string | 
$document_type = "document_type_example"; // string | 
$offset = 56; // int | 
$number_of_records = 56; // int | 
$sort_field = "sort_field_example"; // string | 

try {
    $result = $apiInstance->systemPdfTemplateControllerSearch($template_key, $name, $document_type, $offset, $number_of_records, $sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemPdfTemplateApi->systemPdfTemplateControllerSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_key** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **document_type** | **string**|  | [optional]
 **offset** | **int**|  | [optional]
 **number_of_records** | **int**|  | [optional]
 **sort_field** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageListTemplateSearchOutputDto**](../Model/ResultMessageListTemplateSearchOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

