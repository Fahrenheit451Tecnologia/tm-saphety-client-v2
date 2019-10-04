# Swagger\Client\SerieApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAll**](SerieApi.md#getAll) | **GET** /v2/{virtualOperator}/companies/{companyId}/series/getall | Get a list of all series for the especified companyId
[**getAllForContingencyInvoice**](SerieApi.md#getAllForContingencyInvoice) | **GET** /v2/{virtualOperator}/companies/{companyId}/series/contingency | Get a list of all contingency series for the especified companyId
[**getAllForCreditNote**](SerieApi.md#getAllForCreditNote) | **GET** /v2/{virtualOperator}/companies/{companyId}/series/creditnote | Get a list of all credit note series for the especified companyId
[**getAllForDebitNote**](SerieApi.md#getAllForDebitNote) | **GET** /v2/{virtualOperator}/companies/{companyId}/series/debitnote | Get a list of all debit note series for the especified companyId
[**getAllForSalesInvoice**](SerieApi.md#getAllForSalesInvoice) | **GET** /v2/{virtualOperator}/companies/{companyId}/series/salesinvoice | Get a list of all sales invoice series for the especified companyId
[**getCount**](SerieApi.md#getCount) | **GET** /v2/{virtualOperator}/companies/{companyId}/series/count | Get a list of all series for the especified companyId
[**getDianRegisteredSeries**](SerieApi.md#getDianRegisteredSeries) | **GET** /v2/{virtualOperator}/companies/{companyId}/series/dian | Gets the Dian registered series for the selected company.
[**serieDetails**](SerieApi.md#serieDetails) | **GET** /v2/{virtualOperator}/companies/{companyId}/series/{id} | Get specific serie by companyId and serieId


# **getAll**
> \Swagger\Client\Model\ResultMessageListSerieOutputDto getAll($virtual_operator, $company_id)

Get a list of all series for the especified companyId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SerieApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->getAll($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageListSerieOutputDto**](../Model/ResultMessageListSerieOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllForContingencyInvoice**
> \Swagger\Client\Model\ResultMessageListSerieOutputDto getAllForContingencyInvoice($virtual_operator, $company_id)

Get a list of all contingency series for the especified companyId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SerieApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->getAllForContingencyInvoice($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->getAllForContingencyInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageListSerieOutputDto**](../Model/ResultMessageListSerieOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllForCreditNote**
> \Swagger\Client\Model\ResultMessageListSerieOutputDto getAllForCreditNote($virtual_operator, $company_id)

Get a list of all credit note series for the especified companyId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SerieApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->getAllForCreditNote($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->getAllForCreditNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageListSerieOutputDto**](../Model/ResultMessageListSerieOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllForDebitNote**
> \Swagger\Client\Model\ResultMessageListSerieOutputDto getAllForDebitNote($virtual_operator, $company_id)

Get a list of all debit note series for the especified companyId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SerieApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->getAllForDebitNote($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->getAllForDebitNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageListSerieOutputDto**](../Model/ResultMessageListSerieOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllForSalesInvoice**
> \Swagger\Client\Model\ResultMessageListSerieOutputDto getAllForSalesInvoice($virtual_operator, $company_id)

Get a list of all sales invoice series for the especified companyId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SerieApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->getAllForSalesInvoice($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->getAllForSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageListSerieOutputDto**](../Model/ResultMessageListSerieOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCount**
> \Swagger\Client\Model\ResultMessageInt32 getCount($virtual_operator, $company_id)

Get a list of all series for the especified companyId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SerieApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->getCount($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->getCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageInt32**](../Model/ResultMessageInt32.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDianRegisteredSeries**
> \Swagger\Client\Model\ResultMessageDianSerieOutputDto_ getDianRegisteredSeries($virtual_operator, $company_id)

Gets the Dian registered series for the selected company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SerieApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->getDianRegisteredSeries($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->getDianRegisteredSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageDianSerieOutputDto_**](../Model/ResultMessageDianSerieOutputDto_.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serieDetails**
> \Swagger\Client\Model\ResultMessageSerieOutputDto serieDetails($virtual_operator, $company_id, $id)

Get specific serie by companyId and serieId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SerieApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->serieDetails($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerieApi->serieDetails: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ResultMessageSerieOutputDto**](../Model/ResultMessageSerieOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

