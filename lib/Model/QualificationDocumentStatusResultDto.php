<?php
/**
 * QualificationDocumentStatusResultDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OutboundDocumentsQuery
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * QualificationDocumentStatusResultDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QualificationDocumentStatusResultDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QualificationDocumentStatusResultDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error_message' => 'string[]',
        'is_valid' => 'bool',
        'status_code' => 'int',
        'status_description' => 'string',
        'status_message' => 'string',
        'xml_document_key' => 'string',
        'xml_file_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error_message' => null,
        'is_valid' => null,
        'status_code' => 'int32',
        'status_description' => null,
        'status_message' => null,
        'xml_document_key' => null,
        'xml_file_name' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'error_message' => 'ErrorMessage',
        'is_valid' => 'IsValid',
        'status_code' => 'StatusCode',
        'status_description' => 'StatusDescription',
        'status_message' => 'StatusMessage',
        'xml_document_key' => 'XmlDocumentKey',
        'xml_file_name' => 'XmlFileName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_message' => 'setErrorMessage',
        'is_valid' => 'setIsValid',
        'status_code' => 'setStatusCode',
        'status_description' => 'setStatusDescription',
        'status_message' => 'setStatusMessage',
        'xml_document_key' => 'setXmlDocumentKey',
        'xml_file_name' => 'setXmlFileName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_message' => 'getErrorMessage',
        'is_valid' => 'getIsValid',
        'status_code' => 'getStatusCode',
        'status_description' => 'getStatusDescription',
        'status_message' => 'getStatusMessage',
        'xml_document_key' => 'getXmlDocumentKey',
        'xml_file_name' => 'getXmlFileName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['is_valid'] = isset($data['is_valid']) ? $data['is_valid'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
        $this->container['status_description'] = isset($data['status_description']) ? $data['status_description'] : null;
        $this->container['status_message'] = isset($data['status_message']) ? $data['status_message'] : null;
        $this->container['xml_document_key'] = isset($data['xml_document_key']) ? $data['xml_document_key'] : null;
        $this->container['xml_file_name'] = isset($data['xml_file_name']) ? $data['xml_file_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets error_message
     *
     * @return string[]
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string[] $error_message error_message
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets is_valid
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->container['is_valid'];
    }

    /**
     * Sets is_valid
     *
     * @param bool $is_valid is_valid
     *
     * @return $this
     */
    public function setIsValid($is_valid)
    {
        $this->container['is_valid'] = $is_valid;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int $status_code status_code
     *
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets status_description
     *
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->container['status_description'];
    }

    /**
     * Sets status_description
     *
     * @param string $status_description status_description
     *
     * @return $this
     */
    public function setStatusDescription($status_description)
    {
        $this->container['status_description'] = $status_description;

        return $this;
    }

    /**
     * Gets status_message
     *
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->container['status_message'];
    }

    /**
     * Sets status_message
     *
     * @param string $status_message status_message
     *
     * @return $this
     */
    public function setStatusMessage($status_message)
    {
        $this->container['status_message'] = $status_message;

        return $this;
    }

    /**
     * Gets xml_document_key
     *
     * @return string
     */
    public function getXmlDocumentKey()
    {
        return $this->container['xml_document_key'];
    }

    /**
     * Sets xml_document_key
     *
     * @param string $xml_document_key xml_document_key
     *
     * @return $this
     */
    public function setXmlDocumentKey($xml_document_key)
    {
        $this->container['xml_document_key'] = $xml_document_key;

        return $this;
    }

    /**
     * Gets xml_file_name
     *
     * @return string
     */
    public function getXmlFileName()
    {
        return $this->container['xml_file_name'];
    }

    /**
     * Sets xml_file_name
     *
     * @param string $xml_file_name xml_file_name
     *
     * @return $this
     */
    public function setXmlFileName($xml_file_name)
    {
        $this->container['xml_file_name'] = $xml_file_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

