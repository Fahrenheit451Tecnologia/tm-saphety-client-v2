<?php
/**
 * CreateDocumentDraftInputDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  TM\Saphety\Clientv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OutboundDocuments
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

namespace TM\Saphety\Clientv2\Model;

use \ArrayAccess;
use \TM\Saphety\Clientv2\ObjectSerializer;

/**
 * CreateDocumentDraftInputDto Class Doc Comment
 *
 * @category Class
 * @package  TM\Saphety\Clientv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateDocumentDraftInputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateDocumentDraftInputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'content' => 'string',
        'document_type' => 'string',
        'issuer_identification_code' => 'string',
        'issuer_name' => 'string',
        'customer_identification_code' => 'string',
        'customer_name' => 'string',
        'company_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'content' => null,
        'document_type' => null,
        'issuer_identification_code' => null,
        'issuer_name' => null,
        'customer_identification_code' => null,
        'customer_name' => null,
        'company_id' => 'uuid'
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
        'name' => 'Name',
        'content' => 'Content',
        'document_type' => 'DocumentType',
        'issuer_identification_code' => 'IssuerIdentificationCode',
        'issuer_name' => 'IssuerName',
        'customer_identification_code' => 'CustomerIdentificationCode',
        'customer_name' => 'CustomerName',
        'company_id' => 'CompanyId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'content' => 'setContent',
        'document_type' => 'setDocumentType',
        'issuer_identification_code' => 'setIssuerIdentificationCode',
        'issuer_name' => 'setIssuerName',
        'customer_identification_code' => 'setCustomerIdentificationCode',
        'customer_name' => 'setCustomerName',
        'company_id' => 'setCompanyId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'content' => 'getContent',
        'document_type' => 'getDocumentType',
        'issuer_identification_code' => 'getIssuerIdentificationCode',
        'issuer_name' => 'getIssuerName',
        'customer_identification_code' => 'getCustomerIdentificationCode',
        'customer_name' => 'getCustomerName',
        'company_id' => 'getCompanyId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['issuer_identification_code'] = isset($data['issuer_identification_code']) ? $data['issuer_identification_code'] : null;
        $this->container['issuer_name'] = isset($data['issuer_name']) ? $data['issuer_name'] : null;
        $this->container['customer_identification_code'] = isset($data['customer_identification_code']) ? $data['customer_identification_code'] : null;
        $this->container['customer_name'] = isset($data['customer_name']) ? $data['customer_name'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        if ((mb_strlen($this->container['content']) > 1048576)) {
            $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 1048576.";
        }

        if ($this->container['document_type'] === null) {
            $invalidProperties[] = "'document_type' can't be null";
        }
        if ($this->container['issuer_identification_code'] === null) {
            $invalidProperties[] = "'issuer_identification_code' can't be null";
        }
        if ((mb_strlen($this->container['issuer_identification_code']) > 1048576)) {
            $invalidProperties[] = "invalid value for 'issuer_identification_code', the character length must be smaller than or equal to 1048576.";
        }

        if ($this->container['issuer_name'] === null) {
            $invalidProperties[] = "'issuer_name' can't be null";
        }
        if ((mb_strlen($this->container['issuer_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'issuer_name', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['customer_identification_code'] === null) {
            $invalidProperties[] = "'customer_identification_code' can't be null";
        }
        if ((mb_strlen($this->container['customer_identification_code']) > 100)) {
            $invalidProperties[] = "invalid value for 'customer_identification_code', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['customer_name'] === null) {
            $invalidProperties[] = "'customer_name' can't be null";
        }
        if ((mb_strlen($this->container['customer_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'customer_name', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name MaxLength: 100
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CreateDocumentDraftInputDto., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content MaxLength: 1048576
     *
     * @return $this
     */
    public function setContent($content)
    {
        if ((mb_strlen($content) > 1048576)) {
            throw new \InvalidArgumentException('invalid length for $content when calling CreateDocumentDraftInputDto., must be smaller than or equal to 1048576.');
        }

        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param string $document_type document_type
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets issuer_identification_code
     *
     * @return string
     */
    public function getIssuerIdentificationCode()
    {
        return $this->container['issuer_identification_code'];
    }

    /**
     * Sets issuer_identification_code
     *
     * @param string $issuer_identification_code MaxLength: 1048576
     *
     * @return $this
     */
    public function setIssuerIdentificationCode($issuer_identification_code)
    {
        if ((mb_strlen($issuer_identification_code) > 1048576)) {
            throw new \InvalidArgumentException('invalid length for $issuer_identification_code when calling CreateDocumentDraftInputDto., must be smaller than or equal to 1048576.');
        }

        $this->container['issuer_identification_code'] = $issuer_identification_code;

        return $this;
    }

    /**
     * Gets issuer_name
     *
     * @return string
     */
    public function getIssuerName()
    {
        return $this->container['issuer_name'];
    }

    /**
     * Sets issuer_name
     *
     * @param string $issuer_name MaxLength: 100
     *
     * @return $this
     */
    public function setIssuerName($issuer_name)
    {
        if ((mb_strlen($issuer_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $issuer_name when calling CreateDocumentDraftInputDto., must be smaller than or equal to 100.');
        }

        $this->container['issuer_name'] = $issuer_name;

        return $this;
    }

    /**
     * Gets customer_identification_code
     *
     * @return string
     */
    public function getCustomerIdentificationCode()
    {
        return $this->container['customer_identification_code'];
    }

    /**
     * Sets customer_identification_code
     *
     * @param string $customer_identification_code MaxLength: 100
     *
     * @return $this
     */
    public function setCustomerIdentificationCode($customer_identification_code)
    {
        if ((mb_strlen($customer_identification_code) > 100)) {
            throw new \InvalidArgumentException('invalid length for $customer_identification_code when calling CreateDocumentDraftInputDto., must be smaller than or equal to 100.');
        }

        $this->container['customer_identification_code'] = $customer_identification_code;

        return $this;
    }

    /**
     * Gets customer_name
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     *
     * @param string $customer_name MaxLength: 100
     *
     * @return $this
     */
    public function setCustomerName($customer_name)
    {
        if ((mb_strlen($customer_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $customer_name when calling CreateDocumentDraftInputDto., must be smaller than or equal to 100.');
        }

        $this->container['customer_name'] = $customer_name;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string $company_id company_id
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

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


