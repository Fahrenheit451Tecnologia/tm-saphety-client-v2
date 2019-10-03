<?php
/**
 * UserAccountOutputDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * UserAccountOutputDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserAccountOutputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserAccountOutputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'username' => 'string',
        'email' => 'string',
        'telephone' => 'string',
        'name' => 'string',
        'language_code' => 'string',
        'timezone_code' => 'string',
        'system_memberships' => '\Swagger\Client\Model\SystemMembershipOutputDto[]',
        'virtual_operator_memberships' => '\Swagger\Client\Model\VirtualOperatorMembershipOutputDto[]',
        'company_memberships' => '\Swagger\Client\Model\CompanyMembershipOutputDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'username' => null,
        'email' => null,
        'telephone' => null,
        'name' => null,
        'language_code' => null,
        'timezone_code' => null,
        'system_memberships' => null,
        'virtual_operator_memberships' => null,
        'company_memberships' => null
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
        'id' => 'Id',
        'username' => 'Username',
        'email' => 'Email',
        'telephone' => 'Telephone',
        'name' => 'Name',
        'language_code' => 'LanguageCode',
        'timezone_code' => 'TimezoneCode',
        'system_memberships' => 'SystemMemberships',
        'virtual_operator_memberships' => 'VirtualOperatorMemberships',
        'company_memberships' => 'CompanyMemberships'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'username' => 'setUsername',
        'email' => 'setEmail',
        'telephone' => 'setTelephone',
        'name' => 'setName',
        'language_code' => 'setLanguageCode',
        'timezone_code' => 'setTimezoneCode',
        'system_memberships' => 'setSystemMemberships',
        'virtual_operator_memberships' => 'setVirtualOperatorMemberships',
        'company_memberships' => 'setCompanyMemberships'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'username' => 'getUsername',
        'email' => 'getEmail',
        'telephone' => 'getTelephone',
        'name' => 'getName',
        'language_code' => 'getLanguageCode',
        'timezone_code' => 'getTimezoneCode',
        'system_memberships' => 'getSystemMemberships',
        'virtual_operator_memberships' => 'getVirtualOperatorMemberships',
        'company_memberships' => 'getCompanyMemberships'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['language_code'] = isset($data['language_code']) ? $data['language_code'] : null;
        $this->container['timezone_code'] = isset($data['timezone_code']) ? $data['timezone_code'] : null;
        $this->container['system_memberships'] = isset($data['system_memberships']) ? $data['system_memberships'] : null;
        $this->container['virtual_operator_memberships'] = isset($data['virtual_operator_memberships']) ? $data['virtual_operator_memberships'] : null;
        $this->container['company_memberships'] = isset($data['company_memberships']) ? $data['company_memberships'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string $telephone telephone
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets language_code
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string $language_code language_code
     *
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets timezone_code
     *
     * @return string
     */
    public function getTimezoneCode()
    {
        return $this->container['timezone_code'];
    }

    /**
     * Sets timezone_code
     *
     * @param string $timezone_code timezone_code
     *
     * @return $this
     */
    public function setTimezoneCode($timezone_code)
    {
        $this->container['timezone_code'] = $timezone_code;

        return $this;
    }

    /**
     * Gets system_memberships
     *
     * @return \Swagger\Client\Model\SystemMembershipOutputDto[]
     */
    public function getSystemMemberships()
    {
        return $this->container['system_memberships'];
    }

    /**
     * Sets system_memberships
     *
     * @param \Swagger\Client\Model\SystemMembershipOutputDto[] $system_memberships system_memberships
     *
     * @return $this
     */
    public function setSystemMemberships($system_memberships)
    {
        $this->container['system_memberships'] = $system_memberships;

        return $this;
    }

    /**
     * Gets virtual_operator_memberships
     *
     * @return \Swagger\Client\Model\VirtualOperatorMembershipOutputDto[]
     */
    public function getVirtualOperatorMemberships()
    {
        return $this->container['virtual_operator_memberships'];
    }

    /**
     * Sets virtual_operator_memberships
     *
     * @param \Swagger\Client\Model\VirtualOperatorMembershipOutputDto[] $virtual_operator_memberships virtual_operator_memberships
     *
     * @return $this
     */
    public function setVirtualOperatorMemberships($virtual_operator_memberships)
    {
        $this->container['virtual_operator_memberships'] = $virtual_operator_memberships;

        return $this;
    }

    /**
     * Gets company_memberships
     *
     * @return \Swagger\Client\Model\CompanyMembershipOutputDto[]
     */
    public function getCompanyMemberships()
    {
        return $this->container['company_memberships'];
    }

    /**
     * Sets company_memberships
     *
     * @param \Swagger\Client\Model\CompanyMembershipOutputDto[] $company_memberships company_memberships
     *
     * @return $this
     */
    public function setCompanyMemberships($company_memberships)
    {
        $this->container['company_memberships'] = $company_memberships;

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

