<?php
/**
 * PaymentMeanInputDto
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
 * PaymentMeanInputDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentMeanInputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentMeanInputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'mean' => 'string',
        'channel_code' => 'string',
        'due_date' => 'string',
        'payment_instruction' => 'string',
        'days_type_to_pay' => 'string',
        'bank_guarantee' => 'string',
        'bank_transfer_number' => 'string',
        'bank_id' => 'string',
        'bank_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'mean' => null,
        'channel_code' => null,
        'due_date' => null,
        'payment_instruction' => null,
        'days_type_to_pay' => null,
        'bank_guarantee' => null,
        'bank_transfer_number' => null,
        'bank_id' => null,
        'bank_name' => null
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
        'code' => 'Code',
        'mean' => 'Mean',
        'channel_code' => 'ChannelCode',
        'due_date' => 'DueDate',
        'payment_instruction' => 'PaymentInstruction',
        'days_type_to_pay' => 'DaysTypeToPay',
        'bank_guarantee' => 'BankGuarantee',
        'bank_transfer_number' => 'BankTransferNumber',
        'bank_id' => 'BankId',
        'bank_name' => 'BankName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'mean' => 'setMean',
        'channel_code' => 'setChannelCode',
        'due_date' => 'setDueDate',
        'payment_instruction' => 'setPaymentInstruction',
        'days_type_to_pay' => 'setDaysTypeToPay',
        'bank_guarantee' => 'setBankGuarantee',
        'bank_transfer_number' => 'setBankTransferNumber',
        'bank_id' => 'setBankId',
        'bank_name' => 'setBankName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'mean' => 'getMean',
        'channel_code' => 'getChannelCode',
        'due_date' => 'getDueDate',
        'payment_instruction' => 'getPaymentInstruction',
        'days_type_to_pay' => 'getDaysTypeToPay',
        'bank_guarantee' => 'getBankGuarantee',
        'bank_transfer_number' => 'getBankTransferNumber',
        'bank_id' => 'getBankId',
        'bank_name' => 'getBankName'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['mean'] = isset($data['mean']) ? $data['mean'] : null;
        $this->container['channel_code'] = isset($data['channel_code']) ? $data['channel_code'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['payment_instruction'] = isset($data['payment_instruction']) ? $data['payment_instruction'] : null;
        $this->container['days_type_to_pay'] = isset($data['days_type_to_pay']) ? $data['days_type_to_pay'] : null;
        $this->container['bank_guarantee'] = isset($data['bank_guarantee']) ? $data['bank_guarantee'] : null;
        $this->container['bank_transfer_number'] = isset($data['bank_transfer_number']) ? $data['bank_transfer_number'] : null;
        $this->container['bank_id'] = isset($data['bank_id']) ? $data['bank_id'] : null;
        $this->container['bank_name'] = isset($data['bank_name']) ? $data['bank_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['mean'] === null) {
            $invalidProperties[] = "'mean' can't be null";
        }
        if (!is_null($this->container['bank_guarantee']) && (mb_strlen($this->container['bank_guarantee']) > 200)) {
            $invalidProperties[] = "invalid value for 'bank_guarantee', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['bank_transfer_number']) && (mb_strlen($this->container['bank_transfer_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'bank_transfer_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['bank_id']) && (mb_strlen($this->container['bank_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'bank_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['bank_name']) && (mb_strlen($this->container['bank_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'bank_name', the character length must be smaller than or equal to 100.";
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code (Updated DIAN 2 Property)
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets mean
     *
     * @return string
     */
    public function getMean()
    {
        return $this->container['mean'];
    }

    /**
     * Sets mean
     *
     * @param string $mean (New DIAN 2 Property)
     *
     * @return $this
     */
    public function setMean($mean)
    {
        $this->container['mean'] = $mean;

        return $this;
    }

    /**
     * Gets channel_code
     *
     * @return string
     */
    public function getChannelCode()
    {
        return $this->container['channel_code'];
    }

    /**
     * Sets channel_code
     *
     * @param string $channel_code channel_code
     *
     * @return $this
     */
    public function setChannelCode($channel_code)
    {
        $this->container['channel_code'] = $channel_code;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets payment_instruction
     *
     * @return string
     */
    public function getPaymentInstruction()
    {
        return $this->container['payment_instruction'];
    }

    /**
     * Sets payment_instruction
     *
     * @param string $payment_instruction payment_instruction
     *
     * @return $this
     */
    public function setPaymentInstruction($payment_instruction)
    {
        $this->container['payment_instruction'] = $payment_instruction;

        return $this;
    }

    /**
     * Gets days_type_to_pay
     *
     * @return string
     */
    public function getDaysTypeToPay()
    {
        return $this->container['days_type_to_pay'];
    }

    /**
     * Sets days_type_to_pay
     *
     * @param string $days_type_to_pay days_type_to_pay
     *
     * @return $this
     */
    public function setDaysTypeToPay($days_type_to_pay)
    {
        $this->container['days_type_to_pay'] = $days_type_to_pay;

        return $this;
    }

    /**
     * Gets bank_guarantee
     *
     * @return string
     */
    public function getBankGuarantee()
    {
        return $this->container['bank_guarantee'];
    }

    /**
     * Sets bank_guarantee
     *
     * @param string $bank_guarantee MaxLength: 200
     *
     * @return $this
     */
    public function setBankGuarantee($bank_guarantee)
    {
        if (!is_null($bank_guarantee) && (mb_strlen($bank_guarantee) > 200)) {
            throw new \InvalidArgumentException('invalid length for $bank_guarantee when calling PaymentMeanInputDto., must be smaller than or equal to 200.');
        }

        $this->container['bank_guarantee'] = $bank_guarantee;

        return $this;
    }

    /**
     * Gets bank_transfer_number
     *
     * @return string
     */
    public function getBankTransferNumber()
    {
        return $this->container['bank_transfer_number'];
    }

    /**
     * Sets bank_transfer_number
     *
     * @param string $bank_transfer_number MaxLength: 100
     *
     * @return $this
     */
    public function setBankTransferNumber($bank_transfer_number)
    {
        if (!is_null($bank_transfer_number) && (mb_strlen($bank_transfer_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $bank_transfer_number when calling PaymentMeanInputDto., must be smaller than or equal to 100.');
        }

        $this->container['bank_transfer_number'] = $bank_transfer_number;

        return $this;
    }

    /**
     * Gets bank_id
     *
     * @return string
     */
    public function getBankId()
    {
        return $this->container['bank_id'];
    }

    /**
     * Sets bank_id
     *
     * @param string $bank_id MaxLength: 100
     *
     * @return $this
     */
    public function setBankId($bank_id)
    {
        if (!is_null($bank_id) && (mb_strlen($bank_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $bank_id when calling PaymentMeanInputDto., must be smaller than or equal to 100.');
        }

        $this->container['bank_id'] = $bank_id;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string $bank_name MaxLength: 100
     *
     * @return $this
     */
    public function setBankName($bank_name)
    {
        if (!is_null($bank_name) && (mb_strlen($bank_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $bank_name when calling PaymentMeanInputDto., must be smaller than or equal to 100.');
        }

        $this->container['bank_name'] = $bank_name;

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


