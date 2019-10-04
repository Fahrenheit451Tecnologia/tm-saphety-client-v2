<?php
/**
 * AddressInputDto
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
 * AddressInputDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressInputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddressInputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'department_code' => 'string',
        'city_subdivision_name' => 'string',
        'city_code' => 'string',
        'address_line' => 'string',
        'district' => 'string',
        'postal_code' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'department_code' => null,
        'city_subdivision_name' => null,
        'city_code' => null,
        'address_line' => null,
        'district' => null,
        'postal_code' => null,
        'country' => null
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
        'department_code' => 'DepartmentCode',
        'city_subdivision_name' => 'CitySubdivisionName',
        'city_code' => 'CityCode',
        'address_line' => 'AddressLine',
        'district' => 'District',
        'postal_code' => 'PostalCode',
        'country' => 'Country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'department_code' => 'setDepartmentCode',
        'city_subdivision_name' => 'setCitySubdivisionName',
        'city_code' => 'setCityCode',
        'address_line' => 'setAddressLine',
        'district' => 'setDistrict',
        'postal_code' => 'setPostalCode',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'department_code' => 'getDepartmentCode',
        'city_subdivision_name' => 'getCitySubdivisionName',
        'city_code' => 'getCityCode',
        'address_line' => 'getAddressLine',
        'district' => 'getDistrict',
        'postal_code' => 'getPostalCode',
        'country' => 'getCountry'
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
        $this->container['department_code'] = isset($data['department_code']) ? $data['department_code'] : null;
        $this->container['city_subdivision_name'] = isset($data['city_subdivision_name']) ? $data['city_subdivision_name'] : null;
        $this->container['city_code'] = isset($data['city_code']) ? $data['city_code'] : null;
        $this->container['address_line'] = isset($data['address_line']) ? $data['address_line'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['department_code'] === null) {
            $invalidProperties[] = "'department_code' can't be null";
        }
        if ((mb_strlen($this->container['department_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'department_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['city_subdivision_name']) && (mb_strlen($this->container['city_subdivision_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'city_subdivision_name', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['city_code'] === null) {
            $invalidProperties[] = "'city_code' can't be null";
        }
        if ((mb_strlen($this->container['city_code']) > 5)) {
            $invalidProperties[] = "invalid value for 'city_code', the character length must be smaller than or equal to 5.";
        }

        if ($this->container['address_line'] === null) {
            $invalidProperties[] = "'address_line' can't be null";
        }
        if ((mb_strlen($this->container['address_line']) > 450)) {
            $invalidProperties[] = "invalid value for 'address_line', the character length must be smaller than or equal to 450.";
        }

        if (!is_null($this->container['district']) && (mb_strlen($this->container['district']) > 30)) {
            $invalidProperties[] = "invalid value for 'district', the character length must be smaller than or equal to 30.";
        }

        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if ((mb_strlen($this->container['postal_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 10.";
        }

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
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
     * Gets department_code
     *
     * @return string
     */
    public function getDepartmentCode()
    {
        return $this->container['department_code'];
    }

    /**
     * Sets department_code
     *
     * @param string $department_code MaxLength: 2, (New DIAN 2 Property)
     *
     * @return $this
     */
    public function setDepartmentCode($department_code)
    {
        if ((mb_strlen($department_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $department_code when calling AddressInputDto., must be smaller than or equal to 2.');
        }

        $this->container['department_code'] = $department_code;

        return $this;
    }

    /**
     * Gets city_subdivision_name
     *
     * @return string
     */
    public function getCitySubdivisionName()
    {
        return $this->container['city_subdivision_name'];
    }

    /**
     * Sets city_subdivision_name
     *
     * @param string $city_subdivision_name MaxLength: 100
     *
     * @return $this
     */
    public function setCitySubdivisionName($city_subdivision_name)
    {
        if (!is_null($city_subdivision_name) && (mb_strlen($city_subdivision_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $city_subdivision_name when calling AddressInputDto., must be smaller than or equal to 100.');
        }

        $this->container['city_subdivision_name'] = $city_subdivision_name;

        return $this;
    }

    /**
     * Gets city_code
     *
     * @return string
     */
    public function getCityCode()
    {
        return $this->container['city_code'];
    }

    /**
     * Sets city_code
     *
     * @param string $city_code MaxLength: 5, (New DIAN 2 Property)
     *
     * @return $this
     */
    public function setCityCode($city_code)
    {
        if ((mb_strlen($city_code) > 5)) {
            throw new \InvalidArgumentException('invalid length for $city_code when calling AddressInputDto., must be smaller than or equal to 5.');
        }

        $this->container['city_code'] = $city_code;

        return $this;
    }

    /**
     * Gets address_line
     *
     * @return string
     */
    public function getAddressLine()
    {
        return $this->container['address_line'];
    }

    /**
     * Sets address_line
     *
     * @param string $address_line MaxLength: 450
     *
     * @return $this
     */
    public function setAddressLine($address_line)
    {
        if ((mb_strlen($address_line) > 450)) {
            throw new \InvalidArgumentException('invalid length for $address_line when calling AddressInputDto., must be smaller than or equal to 450.');
        }

        $this->container['address_line'] = $address_line;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string $district MaxLength: 30
     *
     * @return $this
     */
    public function setDistrict($district)
    {
        if (!is_null($district) && (mb_strlen($district) > 30)) {
            throw new \InvalidArgumentException('invalid length for $district when calling AddressInputDto., must be smaller than or equal to 30.');
        }

        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code MaxLength: 10, (Updated DIAN 2 Property)
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        if ((mb_strlen($postal_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling AddressInputDto., must be smaller than or equal to 10.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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

