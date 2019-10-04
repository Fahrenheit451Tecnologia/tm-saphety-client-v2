# CreditNoteInputDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_root** | **string** |  | [optional] 
**document_type** | **string** |  | [optional] 
**create_audit_event_type** | **string** |  | [optional] 
**billing_period** | [**\Swagger\Client\Model\PeriodInputDto**](PeriodInputDto.md) |  | 
**reason_credit** | **string** |  | 
**payment_method** | **string** |  | [optional] 
**delivery_date** | **string** |  | 
**serie_prefix** | **string** |  | [optional] 
**serie_number** | **string** |  | [optional] 
**issuer_party** | [**\Swagger\Client\Model\IssuerPartyInputDto**](IssuerPartyInputDto.md) |  | 
**customer_party** | [**\Swagger\Client\Model\CustomerPartyInputDto**](CustomerPartyInputDto.md) |  | 
**notes** | **string[]** |  | [optional] 
**currency** | **string** |  | 
**lines** | [**\Swagger\Client\Model\LineInputDto[]**](LineInputDto.md) |  | 
**tax_sub_totals** | [**\Swagger\Client\Model\TaxSubTotalInputDto[]**](TaxSubTotalInputDto.md) |  | 
**tax_totals** | [**\Swagger\Client\Model\TaxTotalInputDto[]**](TaxTotalInputDto.md) |  | 
**total** | [**\Swagger\Client\Model\LegalMonetaryTotalInputDto**](LegalMonetaryTotalInputDto.md) |  | 
**issue_date** | **string** |  | 
**due_date** | **string** |  | 
**external_reference** | **string** | MaxLength: 50 | [optional] 
**correlation_document_id** | **string** | MaxLength: 50 | 
**serie_external_key** | **string** |  | 
**additional_notification_emails** | **string[]** |  | [optional] 
**document_references** | [**\Swagger\Client\Model\DocumentReferenceInputDto[]**](DocumentReferenceInputDto.md) |  | [optional] 
**graphical_representation_custom_fields** | [**\Swagger\Client\Model\CustomFieldInputDto[]**](CustomFieldInputDto.md) |  | [optional] 
**attachments** | [**\Swagger\Client\Model\DocumentAttachmentInputDto[]**](DocumentAttachmentInputDto.md) |  | [optional] 
**pdf_data** | [**\Swagger\Client\Model\OutboundDocumentPdfInputDto**](OutboundDocumentPdfInputDto.md) | (Updated DIAN 2 Property) | [optional] 
**prepaid_payments** | [**\Swagger\Client\Model\PrepaidPaymentInputDto[]**](PrepaidPaymentInputDto.md) |  | [optional] 
**payment_exchange_rate** | [**\Swagger\Client\Model\PaymentExchangeRateInputDto**](PaymentExchangeRateInputDto.md) |  | [optional] 
**payment_means** | [**\Swagger\Client\Model\PaymentMeanInputDto[]**](PaymentMeanInputDto.md) |  | [optional] 
**payment_terms** | [**\Swagger\Client\Model\PaymentTermInputDto[]**](PaymentTermInputDto.md) |  | [optional] 
**allowance_charges** | [**\Swagger\Client\Model\AllowanceChargeInputDto[]**](AllowanceChargeInputDto.md) |  | [optional] 
**operation_type** | **string** | (New DIAN 2 Property) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


