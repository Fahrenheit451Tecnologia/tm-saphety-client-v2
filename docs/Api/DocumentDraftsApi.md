# Swagger\Client\DocumentDraftsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**count**](DocumentDraftsApi.md#count) | **POST** /v2/{virtualOperator}/outbounddocumentdrafts/count | Gets the document draft count
[**get**](DocumentDraftsApi.md#get) | **GET** /v2/{virtualOperator}/outbounddocumentdrafts/{id} | Gets a document draft
[**search**](DocumentDraftsApi.md#search) | **POST** /v2/{virtualOperator}/outbounddocumentdrafts/search | Searchs for document drafts


# **count**
> \Swagger\Client\Model\ResultMessageInt32 count($virtual_operator, $document_drafts_search_criteria)

Gets the document draft count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_drafts_search_criteria = new \Swagger\Client\Model\DocumentDraftsSearchCriteriaInputDto(); // \Swagger\Client\Model\DocumentDraftsSearchCriteriaInputDto | 

try {
    $result = $apiInstance->count($virtual_operator, $document_drafts_search_criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentDraftsApi->count: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_drafts_search_criteria** | [**\Swagger\Client\Model\DocumentDraftsSearchCriteriaInputDto**](../Model/DocumentDraftsSearchCriteriaInputDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageInt32**](../Model/ResultMessageInt32.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \Swagger\Client\Model\ResultMessageDocumentDraftOutputDto get($virtual_operator, $id)

Gets a document draft

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$id = "id_example"; // string | 

try {
    $result = $apiInstance->get($virtual_operator, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentDraftsApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentDraftOutputDto**](../Model/ResultMessageDocumentDraftOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Swagger\Client\Model\ResultMessageListDocumentDraftOutputDto search($virtual_operator, $document_drafts_search_criteria)

Searchs for document drafts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentDraftsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_drafts_search_criteria = new \Swagger\Client\Model\DocumentDraftsSearchCriteriaInputDto(); // \Swagger\Client\Model\DocumentDraftsSearchCriteriaInputDto | 

try {
    $result = $apiInstance->search($virtual_operator, $document_drafts_search_criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentDraftsApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_drafts_search_criteria** | [**\Swagger\Client\Model\DocumentDraftsSearchCriteriaInputDto**](../Model/DocumentDraftsSearchCriteriaInputDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageListDocumentDraftOutputDto**](../Model/ResultMessageListDocumentDraftOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

