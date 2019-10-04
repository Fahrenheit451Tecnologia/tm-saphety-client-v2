# Swagger\Client\DocumentsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**count**](DocumentsApi.md#count) | **POST** /v2/{virtualOperator}/outbounddocuments/count | 
[**cude**](DocumentsApi.md#cude) | **POST** /v2/{virtualOperator}/outbounddocuments/cude | 
[**cufe**](DocumentsApi.md#cufe) | **POST** /v2/{virtualOperator}/outbounddocuments/cufe | 
[**details**](DocumentsApi.md#details) | **GET** /v2/{virtualOperator}/outbounddocuments/{documentId} | 
[**getAttachedDocument**](DocumentsApi.md#getAttachedDocument) | **GET** /v2/{virtualOperator}/outbounddocuments/{documentId}/attacheddocument | 
[**getAttachedDocumentContent**](DocumentsApi.md#getAttachedDocumentContent) | **GET** /v2/{virtualOperator}/outbounddocuments/{documentId}/attacheddocument/content | 
[**getAttachments**](DocumentsApi.md#getAttachments) | **GET** /v2/{virtualOperator}/outbounddocuments/{documentId}/attachments | 
[**getAttachmentsById**](DocumentsApi.md#getAttachmentsById) | **GET** /v2/{virtualOperator}/outbounddocuments/{documentId}/attachments/{attachmentId} | 
[**getDto**](DocumentsApi.md#getDto) | **GET** /v2/{virtualOperator}/outbounddocuments/{documentId}/dto | 
[**getDtoContent**](DocumentsApi.md#getDtoContent) | **GET** /v2/{virtualOperator}/outbounddocuments/{documentId}/dto/content | 
[**getFiles**](DocumentsApi.md#getFiles) | **GET** /v2/{virtualOperator}/outbounddocuments/{documentId}/files | 
[**getPdf**](DocumentsApi.md#getPdf) | **GET** /v2/{virtualOperator}/outbounddocuments/{documentId}/pdf | 
[**getPdfContent**](DocumentsApi.md#getPdfContent) | **GET** /v2/{virtualOperator}/outbounddocuments/{documentId}/pdf/content | 
[**getStatus**](DocumentsApi.md#getStatus) | **GET** /v2/{virtualOperator}/outbounddocuments/{documentId}/status | 
[**getUbl**](DocumentsApi.md#getUbl) | **GET** /v2/{virtualOperator}/outbounddocuments/{documentId}/ubl | 
[**getUblContent**](DocumentsApi.md#getUblContent) | **GET** /v2/{virtualOperator}/outbounddocuments/{documentId}/ubl/content | 
[**search**](DocumentsApi.md#search) | **POST** /v2/{virtualOperator}/outbounddocuments/search | 


# **count**
> \Swagger\Client\Model\ResultMessageInt32 count($virtual_operator, $input_dto)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$input_dto = new \Swagger\Client\Model\DocumentSearchCriteriaInputDto(); // \Swagger\Client\Model\DocumentSearchCriteriaInputDto | 

try {
    $result = $apiInstance->count($virtual_operator, $input_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->count: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **input_dto** | [**\Swagger\Client\Model\DocumentSearchCriteriaInputDto**](../Model/DocumentSearchCriteriaInputDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageInt32**](../Model/ResultMessageInt32.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cude**
> \Swagger\Client\Model\ResultMessageString cude($virtual_operator, $input_dto)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$input_dto = new \Swagger\Client\Model\CudeInputDto(); // \Swagger\Client\Model\CudeInputDto | 

try {
    $result = $apiInstance->cude($virtual_operator, $input_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->cude: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **input_dto** | [**\Swagger\Client\Model\CudeInputDto**](../Model/CudeInputDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageString**](../Model/ResultMessageString.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cufe**
> \Swagger\Client\Model\ResultMessageString cufe($virtual_operator, $input_dto)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$input_dto = new \Swagger\Client\Model\CufeInputDto(); // \Swagger\Client\Model\CufeInputDto | 

try {
    $result = $apiInstance->cufe($virtual_operator, $input_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->cufe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **input_dto** | [**\Swagger\Client\Model\CufeInputDto**](../Model/CufeInputDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageString**](../Model/ResultMessageString.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **details**
> \Swagger\Client\Model\ResultMessageDocumentSearchServiceOutputDto details($virtual_operator, $document_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_id = "document_id_example"; // string | 

try {
    $result = $apiInstance->details($virtual_operator, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->details: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentSearchServiceOutputDto**](../Model/ResultMessageDocumentSearchServiceOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttachedDocument**
> \Swagger\Client\Model\ResultMessageDocumentFileOutputDto getAttachedDocument($virtual_operator, $document_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_id = "document_id_example"; // string | 

try {
    $result = $apiInstance->getAttachedDocument($virtual_operator, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getAttachedDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentFileOutputDto**](../Model/ResultMessageDocumentFileOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttachedDocumentContent**
> string getAttachedDocumentContent($virtual_operator, $document_id, $disposition_inline)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_id = "document_id_example"; // string | 
$disposition_inline = false; // bool | 

try {
    $result = $apiInstance->getAttachedDocumentContent($virtual_operator, $document_id, $disposition_inline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getAttachedDocumentContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |
 **disposition_inline** | **bool**|  | [optional] [default to false]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttachments**
> \Swagger\Client\Model\ResultMessageListDocumentAttachmentOutputDto getAttachments($virtual_operator, $document_id, $get_content)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_id = "document_id_example"; // string | 
$get_content = true; // bool | 

try {
    $result = $apiInstance->getAttachments($virtual_operator, $document_id, $get_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |
 **get_content** | **bool**|  |

### Return type

[**\Swagger\Client\Model\ResultMessageListDocumentAttachmentOutputDto**](../Model/ResultMessageListDocumentAttachmentOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttachmentsById**
> \Swagger\Client\Model\ResultMessageDocumentAttachmentOutputDto getAttachmentsById($virtual_operator, $document_id, $attachment_id, $get_content)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_id = "document_id_example"; // string | 
$attachment_id = "attachment_id_example"; // string | 
$get_content = true; // bool | 

try {
    $result = $apiInstance->getAttachmentsById($virtual_operator, $document_id, $attachment_id, $get_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getAttachmentsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |
 **attachment_id** | [**string**](../Model/.md)|  |
 **get_content** | **bool**|  |

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentAttachmentOutputDto**](../Model/ResultMessageDocumentAttachmentOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDto**
> \Swagger\Client\Model\ResultMessageDocumentFileOutputDto getDto($virtual_operator, $document_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_id = "document_id_example"; // string | 

try {
    $result = $apiInstance->getDto($virtual_operator, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDto: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentFileOutputDto**](../Model/ResultMessageDocumentFileOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDtoContent**
> string getDtoContent($virtual_operator, $document_id, $disposition_inline)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_id = "document_id_example"; // string | 
$disposition_inline = false; // bool | 

try {
    $result = $apiInstance->getDtoContent($virtual_operator, $document_id, $disposition_inline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDtoContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |
 **disposition_inline** | **bool**|  | [optional] [default to false]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFiles**
> \Swagger\Client\Model\ResultMessageListDocumentFileOutputDto getFiles($virtual_operator, $document_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_id = "document_id_example"; // string | 

try {
    $result = $apiInstance->getFiles($virtual_operator, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageListDocumentFileOutputDto**](../Model/ResultMessageListDocumentFileOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPdf**
> \Swagger\Client\Model\ResultMessageDocumentFileOutputDto getPdf($virtual_operator, $document_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_id = "document_id_example"; // string | 

try {
    $result = $apiInstance->getPdf($virtual_operator, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentFileOutputDto**](../Model/ResultMessageDocumentFileOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPdfContent**
> string getPdfContent($virtual_operator, $document_id, $disposition_inline)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_id = "document_id_example"; // string | 
$disposition_inline = false; // bool | 

try {
    $result = $apiInstance->getPdfContent($virtual_operator, $document_id, $disposition_inline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getPdfContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |
 **disposition_inline** | **bool**|  | [optional] [default to false]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatus**
> \Swagger\Client\Model\ResultMessageListGetStatusOutputDto getStatus($virtual_operator, $document_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
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
    echo 'Exception when calling DocumentsApi->getStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageListGetStatusOutputDto**](../Model/ResultMessageListGetStatusOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUbl**
> \Swagger\Client\Model\ResultMessageDocumentFileOutputDto getUbl($virtual_operator, $document_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_id = "document_id_example"; // string | 

try {
    $result = $apiInstance->getUbl($virtual_operator, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getUbl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageDocumentFileOutputDto**](../Model/ResultMessageDocumentFileOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUblContent**
> string getUblContent($virtual_operator, $document_id, $disposition_inline)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$document_id = "document_id_example"; // string | 
$disposition_inline = false; // bool | 

try {
    $result = $apiInstance->getUblContent($virtual_operator, $document_id, $disposition_inline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getUblContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **document_id** | [**string**](../Model/.md)|  |
 **disposition_inline** | **bool**|  | [optional] [default to false]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \Swagger\Client\Model\ResultMessageListDocumentSearchServiceOutputDto search($virtual_operator, $input_dto)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$input_dto = new \Swagger\Client\Model\DocumentSearchCriteriaInputDto(); // \Swagger\Client\Model\DocumentSearchCriteriaInputDto | 

try {
    $result = $apiInstance->search($virtual_operator, $input_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **input_dto** | [**\Swagger\Client\Model\DocumentSearchCriteriaInputDto**](../Model/DocumentSearchCriteriaInputDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ResultMessageListDocumentSearchServiceOutputDto**](../Model/ResultMessageListDocumentSearchServiceOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

