#  TM\Saphety\Clientv2\DocumentsApiCreation

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCreditNote**](DocumentsApi.md#createCreditNote) | **POST** /v2/{virtualOperator}/outbounddocuments/creditNote | Creates a Credit Note
[**createCreditNoteAsync**](DocumentsApi.md#createCreditNoteAsync) | **POST** /v2/{virtualOperator}/outbounddocuments/creditNoteAsync | Creates an Credit Note asynchronously
[**createDebitNote**](DocumentsApi.md#createDebitNote) | **POST** /v2/{virtualOperator}/outbounddocuments/debitNote | Creates a Debit Note
[**createDebitNoteAsync**](DocumentsApi.md#createDebitNoteAsync) | **POST** /v2/{virtualOperator}/outbounddocuments/debitNoteAsync | Creates an Debit Note asynchronously
[**createSalesInvoice**](DocumentsApi.md#createSalesInvoice) | **POST** /v2/{virtualOperator}/outbounddocuments/salesInvoice | Creates an Invoice
[**createSalesInvoiceAsync**](DocumentsApi.md#createSalesInvoiceAsync) | **POST** /v2/{virtualOperator}/outbounddocuments/salesInvoiceAsync | Creates an Invoice asynchronously


# **createCreditNote**
>  \TM\Saphety\Clientv2\Model\ResultMessageDocumentResultDto createCreditNote($virtual_operator, $credit_note, $in_transport_document_id)

Creates a Credit Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config =  TM\Saphety\Clientv2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config =  TM\Saphety\Clientv2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new  TM\Saphety\Clientv2\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$credit_note = new  \TM\Saphety\Clientv2\Model\CreditNoteInputDto(); //  \TM\Saphety\Clientv2\Model\CreditNoteInputDto | 
$in_transport_document_id = "in_transport_document_id_example"; // string | 

try {
    $result = $apiInstance->createCreditNote($virtual_operator, $credit_note, $in_transport_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->createCreditNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **credit_note** | [** \TM\Saphety\Clientv2\Model\CreditNoteInputDto**](../Model/CreditNoteInputDto.md)|  | [optional]
 **in_transport_document_id** | **string**|  | [optional]

### Return type

[** \TM\Saphety\Clientv2\Model\ResultMessageDocumentResultDto**](../Model/ResultMessageDocumentResultDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCreditNoteAsync**
>  \TM\Saphety\Clientv2\Model\ResultMessageGuid createCreditNoteAsync($virtual_operator, $credit_note, $in_transport_document_id)

Creates an Credit Note asynchronously

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config =  TM\Saphety\Clientv2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config =  TM\Saphety\Clientv2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new  TM\Saphety\Clientv2\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$credit_note = new  \TM\Saphety\Clientv2\Model\CreditNoteInputDto(); //  \TM\Saphety\Clientv2\Model\CreditNoteInputDto | 
$in_transport_document_id = "in_transport_document_id_example"; // string | 

try {
    $result = $apiInstance->createCreditNoteAsync($virtual_operator, $credit_note, $in_transport_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->createCreditNoteAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **credit_note** | [** \TM\Saphety\Clientv2\Model\CreditNoteInputDto**](../Model/CreditNoteInputDto.md)|  | [optional]
 **in_transport_document_id** | **string**|  | [optional]

### Return type

[** \TM\Saphety\Clientv2\Model\ResultMessageGuid**](../Model/ResultMessageGuid.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDebitNote**
>  \TM\Saphety\Clientv2\Model\ResultMessageDocumentResultDto createDebitNote($virtual_operator, $debit_note, $in_transport_document_id)

Creates a Debit Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config =  TM\Saphety\Clientv2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config =  TM\Saphety\Clientv2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new  TM\Saphety\Clientv2\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$debit_note = new  \TM\Saphety\Clientv2\Model\DebitNoteInputDto(); //  \TM\Saphety\Clientv2\Model\DebitNoteInputDto | 
$in_transport_document_id = "in_transport_document_id_example"; // string | 

try {
    $result = $apiInstance->createDebitNote($virtual_operator, $debit_note, $in_transport_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->createDebitNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **debit_note** | [** \TM\Saphety\Clientv2\Model\DebitNoteInputDto**](../Model/DebitNoteInputDto.md)|  | [optional]
 **in_transport_document_id** | **string**|  | [optional]

### Return type

[** \TM\Saphety\Clientv2\Model\ResultMessageDocumentResultDto**](../Model/ResultMessageDocumentResultDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDebitNoteAsync**
>  \TM\Saphety\Clientv2\Model\ResultMessageGuid createDebitNoteAsync($virtual_operator, $debit_note, $in_transport_document_id)

Creates an Debit Note asynchronously

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config =  TM\Saphety\Clientv2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config =  TM\Saphety\Clientv2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new  TM\Saphety\Clientv2\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$debit_note = new  \TM\Saphety\Clientv2\Model\DebitNoteInputDto(); //  \TM\Saphety\Clientv2\Model\DebitNoteInputDto | 
$in_transport_document_id = "in_transport_document_id_example"; // string | 

try {
    $result = $apiInstance->createDebitNoteAsync($virtual_operator, $debit_note, $in_transport_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->createDebitNoteAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **debit_note** | [** \TM\Saphety\Clientv2\Model\DebitNoteInputDto**](../Model/DebitNoteInputDto.md)|  | [optional]
 **in_transport_document_id** | **string**|  | [optional]

### Return type

[** \TM\Saphety\Clientv2\Model\ResultMessageGuid**](../Model/ResultMessageGuid.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSalesInvoice**
>  \TM\Saphety\Clientv2\Model\ResultMessageDocumentResultDto createSalesInvoice($virtual_operator, $sales_invoice, $in_transport_document_id)

Creates an Invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config =  TM\Saphety\Clientv2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config =  TM\Saphety\Clientv2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new  TM\Saphety\Clientv2\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$sales_invoice = new  \TM\Saphety\Clientv2\Model\SalesInvoiceInputDto(); //  \TM\Saphety\Clientv2\Model\SalesInvoiceInputDto | 
$in_transport_document_id = "in_transport_document_id_example"; // string | 

try {
    $result = $apiInstance->createSalesInvoice($virtual_operator, $sales_invoice, $in_transport_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->createSalesInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **sales_invoice** | [** \TM\Saphety\Clientv2\Model\SalesInvoiceInputDto**](../Model/SalesInvoiceInputDto.md)|  | [optional]
 **in_transport_document_id** | **string**|  | [optional]

### Return type

[** \TM\Saphety\Clientv2\Model\ResultMessageDocumentResultDto**](../Model/ResultMessageDocumentResultDto.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSalesInvoiceAsync**
>  \TM\Saphety\Clientv2\Model\ResultMessageGuid createSalesInvoiceAsync($virtual_operator, $sales_invoice, $in_transport_document_id)

Creates an Invoice asynchronously

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config =  TM\Saphety\Clientv2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config =  TM\Saphety\Clientv2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new  TM\Saphety\Clientv2\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$virtual_operator = "virtual_operator_example"; // string | MaxLength: 60
$sales_invoice = new  \TM\Saphety\Clientv2\Model\SalesInvoiceInputDto(); //  \TM\Saphety\Clientv2\Model\SalesInvoiceInputDto | 
$in_transport_document_id = "in_transport_document_id_example"; // string | 

try {
    $result = $apiInstance->createSalesInvoiceAsync($virtual_operator, $sales_invoice, $in_transport_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->createSalesInvoiceAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **virtual_operator** | **string**| MaxLength: 60 |
 **sales_invoice** | [** \TM\Saphety\Clientv2\Model\SalesInvoiceInputDto**](../Model/SalesInvoiceInputDto.md)|  | [optional]
 **in_transport_document_id** | **string**|  | [optional]

### Return type

[** \TM\Saphety\Clientv2\Model\ResultMessageGuid**](../Model/ResultMessageGuid.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

