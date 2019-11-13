<?php
/**
 * LegalMonetaryTotalInputDto
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
 * LegalMonetaryTotalInputDto Class Doc Comment
 *
 * @category Class
 * @package  TM\Saphety\Clientv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LegalMonetaryTotalInputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LegalMonetaryTotalInputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gross_amount' => 'string',
        'total_billable_amount' => 'string',
        'total_billable_rounding_amount' => 'string',
        'payable_amount' => 'string',
        'taxable_amount' => 'string',
        'allowances_total_amount' => 'string',
        'charges_total_amount' => 'string',
        'pre_paid_total_amount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gross_amount' => null,
        'total_billable_amount' => null,
        'total_billable_rounding_amount' => null,
        'payable_amount' => null,
        'taxable_amount' => null,
        'allowances_total_amount' => null,
        'charges_total_amount' => null,
        'pre_paid_total_amount' => null
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
        'gross_amount' => 'GrossAmount',
        'total_billable_amount' => 'TotalBillableAmount',
        'total_billable_rounding_amount' => 'TotalBillableRoundingAmount',
        'payable_amount' => 'PayableAmount',
        'taxable_amount' => 'TaxableAmount',
        'allowances_total_amount' => 'AllowancesTotalAmount',
        'charges_total_amount' => 'ChargesTotalAmount',
        'pre_paid_total_amount' => 'PrePaidTotalAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gross_amount' => 'setGrossAmount',
        'total_billable_amount' => 'setTotalBillableAmount',
        'total_billable_rounding_amount' => 'setTotalBillableRoundingAmount',
        'payable_amount' => 'setPayableAmount',
        'taxable_amount' => 'setTaxableAmount',
        'allowances_total_amount' => 'setAllowancesTotalAmount',
        'charges_total_amount' => 'setChargesTotalAmount',
        'pre_paid_total_amount' => 'setPrePaidTotalAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gross_amount' => 'getGrossAmount',
        'total_billable_amount' => 'getTotalBillableAmount',
        'total_billable_rounding_amount' => 'getTotalBillableRoundingAmount',
        'payable_amount' => 'getPayableAmount',
        'taxable_amount' => 'getTaxableAmount',
        'allowances_total_amount' => 'getAllowancesTotalAmount',
        'charges_total_amount' => 'getChargesTotalAmount',
        'pre_paid_total_amount' => 'getPrePaidTotalAmount'
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
        $this->container['gross_amount'] = isset($data['gross_amount']) ? $data['gross_amount'] : null;
        $this->container['total_billable_amount'] = isset($data['total_billable_amount']) ? $data['total_billable_amount'] : null;
        $this->container['total_billable_rounding_amount'] = isset($data['total_billable_rounding_amount']) ? $data['total_billable_rounding_amount'] : null;
        $this->container['payable_amount'] = isset($data['payable_amount']) ? $data['payable_amount'] : null;
        $this->container['taxable_amount'] = isset($data['taxable_amount']) ? $data['taxable_amount'] : null;
        $this->container['allowances_total_amount'] = isset($data['allowances_total_amount']) ? $data['allowances_total_amount'] : null;
        $this->container['charges_total_amount'] = isset($data['charges_total_amount']) ? $data['charges_total_amount'] : null;
        $this->container['pre_paid_total_amount'] = isset($data['pre_paid_total_amount']) ? $data['pre_paid_total_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['gross_amount'] === null) {
            $invalidProperties[] = "'gross_amount' can't be null";
        }
        if ((mb_strlen($this->container['gross_amount']) > 19)) {
            $invalidProperties[] = "invalid value for 'gross_amount', the character length must be smaller than or equal to 19.";
        }

        if ($this->container['total_billable_amount'] === null) {
            $invalidProperties[] = "'total_billable_amount' can't be null";
        }
        if ((mb_strlen($this->container['total_billable_amount']) > 19)) {
            $invalidProperties[] = "invalid value for 'total_billable_amount', the character length must be smaller than or equal to 19.";
        }

        if (!is_null($this->container['total_billable_rounding_amount']) && (mb_strlen($this->container['total_billable_rounding_amount']) > 19)) {
            $invalidProperties[] = "invalid value for 'total_billable_rounding_amount', the character length must be smaller than or equal to 19.";
        }

        if ($this->container['payable_amount'] === null) {
            $invalidProperties[] = "'payable_amount' can't be null";
        }
        if ((mb_strlen($this->container['payable_amount']) > 19)) {
            $invalidProperties[] = "invalid value for 'payable_amount', the character length must be smaller than or equal to 19.";
        }

        if ($this->container['taxable_amount'] === null) {
            $invalidProperties[] = "'taxable_amount' can't be null";
        }
        if ((mb_strlen($this->container['taxable_amount']) > 19)) {
            $invalidProperties[] = "invalid value for 'taxable_amount', the character length must be smaller than or equal to 19.";
        }

        if (!is_null($this->container['allowances_total_amount']) && (mb_strlen($this->container['allowances_total_amount']) > 19)) {
            $invalidProperties[] = "invalid value for 'allowances_total_amount', the character length must be smaller than or equal to 19.";
        }

        if (!is_null($this->container['charges_total_amount']) && (mb_strlen($this->container['charges_total_amount']) > 19)) {
            $invalidProperties[] = "invalid value for 'charges_total_amount', the character length must be smaller than or equal to 19.";
        }

        if (!is_null($this->container['pre_paid_total_amount']) && (mb_strlen($this->container['pre_paid_total_amount']) > 19)) {
            $invalidProperties[] = "invalid value for 'pre_paid_total_amount', the character length must be smaller than or equal to 19.";
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
     * Gets gross_amount
     *
     * @return string
     */
    public function getGrossAmount()
    {
        return $this->container['gross_amount'];
    }

    /**
     * Sets gross_amount
     *
     * @param string $gross_amount MaxLength: 19
     *
     * @return $this
     */
    public function setGrossAmount($gross_amount)
    {
        if ((mb_strlen($gross_amount) > 19)) {
            throw new \InvalidArgumentException('invalid length for $gross_amount when calling LegalMonetaryTotalInputDto., must be smaller than or equal to 19.');
        }

        $this->container['gross_amount'] = $gross_amount;

        return $this;
    }

    /**
     * Gets total_billable_amount
     *
     * @return string
     */
    public function getTotalBillableAmount()
    {
        return $this->container['total_billable_amount'];
    }

    /**
     * Sets total_billable_amount
     *
     * @param string $total_billable_amount MaxLength: 19, (New DIAN 2 Property)
     *
     * @return $this
     */
    public function setTotalBillableAmount($total_billable_amount)
    {
        if ((mb_strlen($total_billable_amount) > 19)) {
            throw new \InvalidArgumentException('invalid length for $total_billable_amount when calling LegalMonetaryTotalInputDto., must be smaller than or equal to 19.');
        }

        $this->container['total_billable_amount'] = $total_billable_amount;

        return $this;
    }

    /**
     * Gets total_billable_rounding_amount
     *
     * @return string
     */
    public function getTotalBillableRoundingAmount()
    {
        return $this->container['total_billable_rounding_amount'];
    }

    /**
     * Sets total_billable_rounding_amount
     *
     * @param string $total_billable_rounding_amount MaxLength: 19, (New DIAN 2 Property)
     *
     * @return $this
     */
    public function setTotalBillableRoundingAmount($total_billable_rounding_amount)
    {
        if (!is_null($total_billable_rounding_amount) && (mb_strlen($total_billable_rounding_amount) > 19)) {
            throw new \InvalidArgumentException('invalid length for $total_billable_rounding_amount when calling LegalMonetaryTotalInputDto., must be smaller than or equal to 19.');
        }

        $this->container['total_billable_rounding_amount'] = $total_billable_rounding_amount;

        return $this;
    }

    /**
     * Gets payable_amount
     *
     * @return string
     */
    public function getPayableAmount()
    {
        return $this->container['payable_amount'];
    }

    /**
     * Sets payable_amount
     *
     * @param string $payable_amount MaxLength: 19
     *
     * @return $this
     */
    public function setPayableAmount($payable_amount)
    {
        if ((mb_strlen($payable_amount) > 19)) {
            throw new \InvalidArgumentException('invalid length for $payable_amount when calling LegalMonetaryTotalInputDto., must be smaller than or equal to 19.');
        }

        $this->container['payable_amount'] = $payable_amount;

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
     * @param string $taxable_amount MaxLength: 19
     *
     * @return $this
     */
    public function setTaxableAmount($taxable_amount)
    {
        if ((mb_strlen($taxable_amount) > 19)) {
            throw new \InvalidArgumentException('invalid length for $taxable_amount when calling LegalMonetaryTotalInputDto., must be smaller than or equal to 19.');
        }

        $this->container['taxable_amount'] = $taxable_amount;

        return $this;
    }

    /**
     * Gets allowances_total_amount
     *
     * @return string
     */
    public function getAllowancesTotalAmount()
    {
        return $this->container['allowances_total_amount'];
    }

    /**
     * Sets allowances_total_amount
     *
     * @param string $allowances_total_amount MaxLength: 19
     *
     * @return $this
     */
    public function setAllowancesTotalAmount($allowances_total_amount)
    {
        if (!is_null($allowances_total_amount) && (mb_strlen($allowances_total_amount) > 19)) {
            throw new \InvalidArgumentException('invalid length for $allowances_total_amount when calling LegalMonetaryTotalInputDto., must be smaller than or equal to 19.');
        }

        $this->container['allowances_total_amount'] = $allowances_total_amount;

        return $this;
    }

    /**
     * Gets charges_total_amount
     *
     * @return string
     */
    public function getChargesTotalAmount()
    {
        return $this->container['charges_total_amount'];
    }

    /**
     * Sets charges_total_amount
     *
     * @param string $charges_total_amount MaxLength: 19
     *
     * @return $this
     */
    public function setChargesTotalAmount($charges_total_amount)
    {
        if (!is_null($charges_total_amount) && (mb_strlen($charges_total_amount) > 19)) {
            throw new \InvalidArgumentException('invalid length for $charges_total_amount when calling LegalMonetaryTotalInputDto., must be smaller than or equal to 19.');
        }

        $this->container['charges_total_amount'] = $charges_total_amount;

        return $this;
    }

    /**
     * Gets pre_paid_total_amount
     *
     * @return string
     */
    public function getPrePaidTotalAmount()
    {
        return $this->container['pre_paid_total_amount'];
    }

    /**
     * Sets pre_paid_total_amount
     *
     * @param string $pre_paid_total_amount MaxLength: 19
     *
     * @return $this
     */
    public function setPrePaidTotalAmount($pre_paid_total_amount)
    {
        if (!is_null($pre_paid_total_amount) && (mb_strlen($pre_paid_total_amount) > 19)) {
            throw new \InvalidArgumentException('invalid length for $pre_paid_total_amount when calling LegalMonetaryTotalInputDto., must be smaller than or equal to 19.');
        }

        $this->container['pre_paid_total_amount'] = $pre_paid_total_amount;

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


