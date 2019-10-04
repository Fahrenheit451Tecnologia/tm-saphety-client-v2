# Swagger\Client\QualificationDocumentsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**count**](QualificationDocumentsApi.md#count) | **POST** /v2/{virtualOperator}/qualificationoutbounddocuments/count | 
[**getStatus**](QualificationDocumentsApi.md#getStatus) | **GET** /v2/{virtualOperator}/qualificationoutbounddocuments/{documentId}/status | 
[**search**](QualificationDocumentsApi.md#search) | **POST** /v2/{virtualOperator}/qualificationoutbounddocuments/search | 
[**synchQualificationStatus**](QualificationDocumentsApi.md#synchQualificationStatus) | **PUT** /v2/{virtualOperator}/qualificationoutbounddocuments/{documentId}/syncstatus | 


# **count**
> \Swagger\Client\Model\ResultMessageInt32 count($company_id, $virtual_operator, $input_dto)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualificationDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = "company_id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$input_dto = new \Swagger\Client\Model\QualificationDocumentSearchCriteriaInputDto(); // \Swagger\Client\Model\QualificationDocumentSearchCriteriaInputDto | 

try {
    $result = $apiInstance->count($company_id, $virtual_operator, $input_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationDocumentsApi->count: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | [**string**](../Model/.md)|  |
 **virtual_operator** | **string**| MaxLength: 60 |
 **input_dto** | [**\Swagger\Client\Model\QualificationDocumentSearchCriteriaInputDto**](../Model/QualificationDocumentSearchCriteriaInputDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageInt32**](../Model/ResultMessageInt32.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatus**
> \Swagger\Client\Model\ResultMessageString getStatus($virtual_operator, $document_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualificationDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_id = "document_id_example"; // string | 

try {
    $result = $apiInstance->getStatus($virtual_operator, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationDocumentsApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageString**](../Model/ResultMessageString.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Swagger\Client\Model\ResultMessageListQualificationDocumentSearchOutputDto search($company_id, $virtual_operator, $input_dto)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualificationDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = "company_id_example"; // string | 
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$input_dto = new \Swagger\Client\Model\QualificationDocumentSearchCriteriaInputDto(); // \Swagger\Client\Model\QualificationDocumentSearchCriteriaInputDto | 

try {
    $result = $apiInstance->search($company_id, $virtual_operator, $input_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationDocumentsApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | [**string**](../Model/.md)|  |
 **virtual_operator** | **string**| MaxLength: 60 |
 **input_dto** | [**\Swagger\Client\Model\QualificationDocumentSearchCriteriaInputDto**](../Model/QualificationDocumentSearchCriteriaInputDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageListQualificationDocumentSearchOutputDto**](../Model/ResultMessageListQualificationDocumentSearchOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **synchQualificationStatus**
> \Swagger\Client\Model\ResultMessageQualificationDocumentStatusOutputDto synchQualificationStatus($virtual_operator, $document_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualificationDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_id = "document_id_example"; // string | 

try {
    $result = $apiInstance->synchQualificationStatus($virtual_operator, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationDocumentsApi->synchQualificationStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageQualificationDocumentStatusOutputDto**](../Model/ResultMessageQualificationDocumentStatusOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

