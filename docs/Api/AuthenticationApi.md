# Swagger\Client\AuthenticationApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticationGetToken**](AuthenticationApi.md#authenticationGetToken) | **POST** /v2/auth/gettoken | Gets a authentication token given the requested data


# **authenticationGetToken**
> \Swagger\Client\Model\ResultMessageTokenOutputDto authenticationGetToken($token_request)

Gets a authentication token given the requested data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token_request = new \Swagger\Client\Model\UserTokenRequestInputDto(); // \Swagger\Client\Model\UserTokenRequestInputDto | 

try {
    $result = $apiInstance->authenticationGetToken($token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationGetToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_request** | [**\Swagger\Client\Model\UserTokenRequestInputDto**](../Model/UserTokenRequestInputDto.md)|  |

### Return type

[**\Swagger\Client\Model\ResultMessageTokenOutputDto**](../Model/ResultMessageTokenOutputDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

