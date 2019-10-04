<?php
/**
 * DocumentReferenceInputDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * DocumentReferenceInputDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentReferenceInputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentReferenceInputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'document_referred' => 'string',
        'issue_date' => 'string',
        'type' => 'string',
        'other_reference_type_id' => 'string',
        'other_reference_type_description' => 'string',
        'document_referred_cufe' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'document_referred' => null,
        'issue_date' => null,
        'type' => null,
        'other_reference_type_id' => null,
        'other_reference_type_description' => null,
        'document_referred_cufe' => null
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
        'document_referred' => 'DocumentReferred',
        'issue_date' => 'IssueDate',
        'type' => 'Type',
        'other_reference_type_id' => 'OtherReferenceTypeId',
        'other_reference_type_description' => 'OtherReferenceTypeDescription',
        'document_referred_cufe' => 'DocumentReferredCUFE'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_referred' => 'setDocumentReferred',
        'issue_date' => 'setIssueDate',
        'type' => 'setType',
        'other_reference_type_id' => 'setOtherReferenceTypeId',
        'other_reference_type_description' => 'setOtherReferenceTypeDescription',
        'document_referred_cufe' => 'setDocumentReferredCufe'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_referred' => 'getDocumentReferred',
        'issue_date' => 'getIssueDate',
        'type' => 'getType',
        'other_reference_type_id' => 'getOtherReferenceTypeId',
        'other_reference_type_description' => 'getOtherReferenceTypeDescription',
        'document_referred_cufe' => 'getDocumentReferredCufe'
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
        $this->container['document_referred'] = isset($data['document_referred']) ? $data['document_referred'] : null;
        $this->container['issue_date'] = isset($data['issue_date']) ? $data['issue_date'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['other_reference_type_id'] = isset($data['other_reference_type_id']) ? $data['other_reference_type_id'] : null;
        $this->container['other_reference_type_description'] = isset($data['other_reference_type_description']) ? $data['other_reference_type_description'] : null;
        $this->container['document_referred_cufe'] = isset($data['document_referred_cufe']) ? $data['document_referred_cufe'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['document_referred'] === null) {
            $invalidProperties[] = "'document_referred' can't be null";
        }
        if ((mb_strlen($this->container['document_referred']) > 100)) {
            $invalidProperties[] = "invalid value for 'document_referred', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['issue_date'] === null) {
            $invalidProperties[] = "'issue_date' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if (!is_null($this->container['other_reference_type_id']) && (mb_strlen($this->container['other_reference_type_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'other_reference_type_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['other_reference_type_description']) && (mb_strlen($this->container['other_reference_type_description']) > 100)) {
            $invalidProperties[] = "invalid value for 'other_reference_type_description', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['document_referred_cufe'] === null) {
            $invalidProperties[] = "'document_referred_cufe' can't be null";
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
     * Gets document_referred
     *
     * @return string
     */
    public function getDocumentReferred()
    {
        return $this->container['document_referred'];
    }

    /**
     * Sets document_referred
     *
     * @param string $document_referred MaxLength: 100
     *
     * @return $this
     */
    public function setDocumentReferred($document_referred)
    {
        if ((mb_strlen($document_referred) > 100)) {
            throw new \InvalidArgumentException('invalid length for $document_referred when calling DocumentReferenceInputDto., must be smaller than or equal to 100.');
        }

        $this->container['document_referred'] = $document_referred;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return string
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param string $issue_date issue_date
     *
     * @return $this
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets other_reference_type_id
     *
     * @return string
     */
    public function getOtherReferenceTypeId()
    {
        return $this->container['other_reference_type_id'];
    }

    /**
     * Sets other_reference_type_id
     *
     * @param string $other_reference_type_id MaxLength: 100
     *
     * @return $this
     */
    public function setOtherReferenceTypeId($other_reference_type_id)
    {
        if (!is_null($other_reference_type_id) && (mb_strlen($other_reference_type_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $other_reference_type_id when calling DocumentReferenceInputDto., must be smaller than or equal to 100.');
        }

        $this->container['other_reference_type_id'] = $other_reference_type_id;

        return $this;
    }

    /**
     * Gets other_reference_type_description
     *
     * @return string
     */
    public function getOtherReferenceTypeDescription()
    {
        return $this->container['other_reference_type_description'];
    }

    /**
     * Sets other_reference_type_description
     *
     * @param string $other_reference_type_description MaxLength: 100
     *
     * @return $this
     */
    public function setOtherReferenceTypeDescription($other_reference_type_description)
    {
        if (!is_null($other_reference_type_description) && (mb_strlen($other_reference_type_description) > 100)) {
            throw new \InvalidArgumentException('invalid length for $other_reference_type_description when calling DocumentReferenceInputDto., must be smaller than or equal to 100.');
        }

        $this->container['other_reference_type_description'] = $other_reference_type_description;

        return $this;
    }

    /**
     * Gets document_referred_cufe
     *
     * @return string
     */
    public function getDocumentReferredCufe()
    {
        return $this->container['document_referred_cufe'];
    }

    /**
     * Sets document_referred_cufe
     *
     * @param string $document_referred_cufe (New DIAN 2 Property)
     *
     * @return $this
     */
    public function setDocumentReferredCufe($document_referred_cufe)
    {
        $this->container['document_referred_cufe'] = $document_referred_cufe;

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


