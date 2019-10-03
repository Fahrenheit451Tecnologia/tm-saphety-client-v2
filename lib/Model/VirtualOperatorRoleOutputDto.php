<?php
/**
 * VirtualOperatorRoleOutputDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  TM\Saphety\Clientv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * eInvoice Api
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2_0_3_3
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
 * VirtualOperatorRoleOutputDto Class Doc Comment
 *
 * @category Class
 * @package  TM\Saphety\Clientv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VirtualOperatorRoleOutputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VirtualOperatorRoleOutputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'virtual_operator_role_id' => 'string',
        'virtual_operator_role_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'virtual_operator_role_id' => 'uuid',
        'virtual_operator_role_name' => null
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
        'virtual_operator_role_id' => 'VirtualOperatorRoleId',
        'virtual_operator_role_name' => 'VirtualOperatorRoleName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'virtual_operator_role_id' => 'setVirtualOperatorRoleId',
        'virtual_operator_role_name' => 'setVirtualOperatorRoleName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'virtual_operator_role_id' => 'getVirtualOperatorRoleId',
        'virtual_operator_role_name' => 'getVirtualOperatorRoleName'
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
        $this->container['virtual_operator_role_id'] = isset($data['virtual_operator_role_id']) ? $data['virtual_operator_role_id'] : null;
        $this->container['virtual_operator_role_name'] = isset($data['virtual_operator_role_name']) ? $data['virtual_operator_role_name'] : null;
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
     * Gets virtual_operator_role_id
     *
     * @return string
     */
    public function getVirtualOperatorRoleId()
    {
        return $this->container['virtual_operator_role_id'];
    }

    /**
     * Sets virtual_operator_role_id
     *
     * @param string $virtual_operator_role_id virtual_operator_role_id
     *
     * @return $this
     */
    public function setVirtualOperatorRoleId($virtual_operator_role_id)
    {
        $this->container['virtual_operator_role_id'] = $virtual_operator_role_id;

        return $this;
    }

    /**
     * Gets virtual_operator_role_name
     *
     * @return string
     */
    public function getVirtualOperatorRoleName()
    {
        return $this->container['virtual_operator_role_name'];
    }

    /**
     * Sets virtual_operator_role_name
     *
     * @param string $virtual_operator_role_name virtual_operator_role_name
     *
     * @return $this
     */
    public function setVirtualOperatorRoleName($virtual_operator_role_name)
    {
        $this->container['virtual_operator_role_name'] = $virtual_operator_role_name;

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


