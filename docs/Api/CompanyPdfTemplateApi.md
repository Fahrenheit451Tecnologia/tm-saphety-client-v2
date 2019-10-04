# Swagger\Client\CompanyPdfTemplateApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyPdfTemplateControllerCount**](CompanyPdfTemplateApi.md#companyPdfTemplateControllerCount) | **GET** /v2/{virtualOperator}/companies/{companyId}/pdftemplates/count | Count pdf templates
[**companyPdfTemplateControllerGetAllTemplates**](CompanyPdfTemplateApi.md#companyPdfTemplateControllerGetAllTemplates) | **GET** /v2/{virtualOperator}/companies/{companyId}/pdftemplates/getAll | Gets all pdf templates
[**companyPdfTemplateControllerGetTemplate**](CompanyPdfTemplateApi.md#companyPdfTemplateControllerGetTemplate) | **GET** /v2/{virtualOperator}/companies/{companyId}/pdftemplates/{id} | Return the pdf template with specified id
[**companyPdfTemplateControllerSearch**](CompanyPdfTemplateApi.md#companyPdfTemplateControllerSearch) | **GET** /v2/{virtualOperator}/companies/{companyId}/pdftemplates/search | Search pdf templates


# **companyPdfTemplateControllerCount**
> \Swagger\Client\Model\ResultMessageInt32 companyPdfTemplateControllerCount($virtual_operator, $company_id, $template_key, $name, $document_type, $offset, $number_of_records, $sort_field)

Count pdf templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyPdfTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$template_key = "template_key_example"; // string | 
$name = "name_example"; // string | 
$document_type = "document_type_example"; // string | 
$offset = 56; // int | 
$number_of_records = 56; // int | 
$sort_field = "sort_field_example"; // string | 

try {
    $result = $apiInstance->companyPdfTemplateControllerCount($virtual_operator, $company_id, $template_key, $name, $document_type, $offset, $number_of_records, $sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyPdfTemplateApi->companyPdfTemplateControllerCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |
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

# **companyPdfTemplateControllerGetAllTemplates**
> \Swagger\Client\Model\ResultMessageListPdfTemplateOutputDto companyPdfTemplateControllerGetAllTemplates($virtual_operator, $company_id, $document_type, $document_sub_type, $include_content, $offset, $number_of_records, $sort_field)

Gets all pdf templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyPdfTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$document_type = "document_type_example"; // string | 
$document_sub_type = "document_sub_type_example"; // string | 
$include_content = true; // bool | 
$offset = 56; // int | 
$number_of_records = 56; // int | 
$sort_field = "sort_field_example"; // string | 

try {
    $result = $apiInstance->companyPdfTemplateControllerGetAllTemplates($virtual_operator, $company_id, $document_type, $document_sub_type, $include_content, $offset, $number_of_records, $sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyPdfTemplateApi->companyPdfTemplateControllerGetAllTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |
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

# **companyPdfTemplateControllerGetTemplate**
> \Swagger\Client\Model\ResultMessagePdfTemplateOutputDto companyPdfTemplateControllerGetTemplate($virtual_operator, $company_id, $id)

Return the pdf template with specified id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyPdfTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->companyPdfTemplateControllerGetTemplate($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyPdfTemplateApi->companyPdfTemplateControllerGetTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessagePdfTemplateOutputDto**](../Model/ResultMessagePdfTemplateOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyPdfTemplateControllerSearch**
> \Swagger\Client\Model\ResultMessageListTemplateSearchOutputDto companyPdfTemplateControllerSearch($virtual_operator, $company_id, $template_key, $name, $document_type, $offset, $number_of_records, $sort_field)

Search pdf templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CompanyPdfTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$template_key = "template_key_example"; // string | 
$name = "name_example"; // string | 
$document_type = "document_type_example"; // string | 
$offset = 56; // int | 
$number_of_records = 56; // int | 
$sort_field = "sort_field_example"; // string | 

try {
    $result = $apiInstance->companyPdfTemplateControllerSearch($virtual_operator, $company_id, $template_key, $name, $document_type, $offset, $number_of_records, $sort_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyPdfTemplateApi->companyPdfTemplateControllerSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |
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

