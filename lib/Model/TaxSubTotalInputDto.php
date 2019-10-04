<?php
/**
 * TaxSubTotalInputDto
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
 * TaxSubTotalInputDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxSubTotalInputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxSubTotalInputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tax_category' => 'string',
        'tax_percentage' => 'string',
        'taxable_amount' => 'string',
        'tax_amount' => 'string',
        'per_unit_amount' => 'string',
        'base_unit_measure' => 'string',
        'base_unit_measure_unit_measure' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tax_category' => null,
        'tax_percentage' => null,
        'taxable_amount' => null,
        'tax_amount' => null,
        'per_unit_amount' => null,
        'base_unit_measure' => null,
        'base_unit_measure_unit_measure' => null
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
        'tax_category' => 'TaxCategory',
        'tax_percentage' => 'TaxPercentage',
        'taxable_amount' => 'TaxableAmount',
        'tax_amount' => 'TaxAmount',
        'per_unit_amount' => 'PerUnitAmount',
        'base_unit_measure' => 'BaseUnitMeasure',
        'base_unit_measure_unit_measure' => 'BaseUnitMeasureUnitMeasure'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tax_category' => 'setTaxCategory',
        'tax_percentage' => 'setTaxPercentage',
        'taxable_amount' => 'setTaxableAmount',
        'tax_amount' => 'setTaxAmount',
        'per_unit_amount' => 'setPerUnitAmount',
        'base_unit_measure' => 'setBaseUnitMeasure',
        'base_unit_measure_unit_measure' => 'setBaseUnitMeasureUnitMeasure'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_category' => 'getTaxCategory',
        'tax_percentage' => 'getTaxPercentage',
        'taxable_amount' => 'getTaxableAmount',
        'tax_amount' => 'getTaxAmount',
        'per_unit_amount' => 'getPerUnitAmount',
        'base_unit_measure' => 'getBaseUnitMeasure',
        'base_unit_measure_unit_measure' => 'getBaseUnitMeasureUnitMeasure'
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
        $this->container['tax_category'] = isset($data['tax_category']) ? $data['tax_category'] : null;
        $this->container['tax_percentage'] = isset($data['tax_percentage']) ? $data['tax_percentage'] : null;
        $this->container['taxable_amount'] = isset($data['taxable_amount']) ? $data['taxable_amount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['per_unit_amount'] = isset($data['per_unit_amount']) ? $data['per_unit_amount'] : null;
        $this->container['base_unit_measure'] = isset($data['base_unit_measure']) ? $data['base_unit_measure'] : null;
        $this->container['base_unit_measure_unit_measure'] = isset($data['base_unit_measure_unit_measure']) ? $data['base_unit_measure_unit_measure'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tax_category'] === null) {
            $invalidProperties[] = "'tax_category' can't be null";
        }
        if ($this->container['tax_percentage'] === null) {
            $invalidProperties[] = "'tax_percentage' can't be null";
        }
        if ($this->container['taxable_amount'] === null) {
            $invalidProperties[] = "'taxable_amount' can't be null";
        }
        if ($this->container['tax_amount'] === null) {
            $invalidProperties[] = "'tax_amount' can't be null";
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
     * Gets tax_category
     *
     * @return string
     */
    public function getTaxCategory()
    {
        return $this->container['tax_category'];
    }

    /**
     * Sets tax_category
     *
     * @param string $tax_category tax_category
     *
     * @return $this
     */
    public function setTaxCategory($tax_category)
    {
        $this->container['tax_category'] = $tax_category;

        return $this;
    }

    /**
     * Gets tax_percentage
     *
     * @return string
     */
    public function getTaxPercentage()
    {
        return $this->container['tax_percentage'];
    }

    /**
     * Sets tax_percentage
     *
     * @param string $tax_percentage tax_percentage
     *
     * @return $this
     */
    public function setTaxPercentage($tax_percentage)
    {
        $this->container['tax_percentage'] = $tax_percentage;

        return $this;
    }

    /**
     * Gets taxable_amount
     *
     * @return string
     */
    public function getTaxableAmount()
    {
        return $this->container['taxable_amount'];
    }

    /**
     * Sets taxable_amount
     *
     * @param string $taxable_amount taxable_amount
     *
     * @return $this
     */
    public function setTaxableAmount($taxable_amount)
    {
        $this->container['taxable_amount'] = $taxable_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param string $tax_amount tax_amount
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets per_unit_amount
     *
     * @return string
     */
    public function getPerUnitAmount()
    {
        return $this->container['per_unit_amount'];
    }

    /**
     * Sets per_unit_amount
     *
     * @param string $per_unit_amount (New DIAN 2 Property)
     *
     * @return $this
     */
    public function setPerUnitAmount($per_unit_amount)
    {
        $this->container['per_unit_amount'] = $per_unit_amount;

        return $this;
    }

    /**
     * Gets base_unit_measure
     *
     * @return string
     */
    public function getBaseUnitMeasure()
    {
        return $this->container['base_unit_measure'];
    }

    /**
     * Sets base_unit_measure
     *
     * @param string $base_unit_measure (New DIAN 2 Property)
     *
     * @return $this
     */
    public function setBaseUnitMeasure($base_unit_measure)
    {
        $this->container['base_unit_measure'] = $base_unit_measure;

        return $this;
    }

    /**
     * Gets base_unit_measure_unit_measure
     *
     * @return string
     */
    public function getBaseUnitMeasureUnitMeasure()
    {
        return $this->container['base_unit_measure_unit_measure'];
    }

    /**
     * Sets base_unit_measure_unit_measure
     *
     * @param string $base_unit_measure_unit_measure (New DIAN 2 Property)
     *
     * @return $this
     */
    public function setBaseUnitMeasureUnitMeasure($base_unit_measure_unit_measure)
    {
        $this->container['base_unit_measure_unit_measure'] = $base_unit_measure_unit_measure;

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

