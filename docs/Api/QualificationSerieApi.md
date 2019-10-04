# Swagger\Client\QualificationSerieApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**existsQualificationSerie**](QualificationSerieApi.md#existsQualificationSerie) | **GET** /v2/{virtualOperator}/companies/{companyId}/qualificationseries/exists | Check if a qualification series exists for the company and virtual operator
[**getAllQualificationSeries**](QualificationSerieApi.md#getAllQualificationSeries) | **GET** /v2/{virtualOperator}/companies/{companyId}/qualificationseries/getall | Get a list of all qualification series for the especified companyId
[**getQualificationSeriesCount**](QualificationSerieApi.md#getQualificationSeriesCount) | **GET** /v2/{virtualOperator}/companies/{companyId}/qualificationseries/count | Get a count of all qualification series for the especified companyId
[**qualificationSerieDetails**](QualificationSerieApi.md#qualificationSerieDetails) | **GET** /v2/{virtualOperator}/companies/{companyId}/qualificationseries/{id} | Get specific qualification serie by companyId and serieId


# **existsQualificationSerie**
> \Swagger\Client\Model\ResultMessageInt32 existsQualificationSerie($virtual_operator, $company_id)

Check if a qualification series exists for the company and virtual operator

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualificationSerieApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->existsQualificationSerie($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationSerieApi->existsQualificationSerie: ', $e->getMessage(), PHP_EOL;
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

# **getAllQualificationSeries**
> \Swagger\Client\Model\ResultMessageListQualificationSerieOutputDto getAllQualificationSeries($virtual_operator, $company_id)

Get a list of all qualification series for the especified companyId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualificationSerieApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->getAllQualificationSeries($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationSerieApi->getAllQualificationSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **company_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageListQualificationSerieOutputDto**](../Model/ResultMessageListQualificationSerieOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualificationSeriesCount**
> \Swagger\Client\Model\ResultMessageInt32 getQualificationSeriesCount($virtual_operator, $company_id)

Get a count of all qualification series for the especified companyId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualificationSerieApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->getQualificationSeriesCount($virtual_operator, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationSerieApi->getQualificationSeriesCount: ', $e->getMessage(), PHP_EOL;
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

# **qualificationSerieDetails**
> \Swagger\Client\Model\ResultMessageQualificationSerieOutputDto qualificationSerieDetails($virtual_operator, $company_id, $id)

Get specific qualification serie by companyId and serieId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QualificationSerieApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$company_id = "company_id_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->qualificationSerieDetails($virtual_operator, $company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualificationSerieApi->qualificationSerieDetails: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ResultMessageQualificationSerieOutputDto**](../Model/ResultMessageQualificationSerieOutputDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

