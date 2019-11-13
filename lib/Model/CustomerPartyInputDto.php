<?php
/**
 * CustomerPartyInputDto
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
 * CustomerPartyInputDto Class Doc Comment
 *
 * @category Class
 * @package  TM\Saphety\Clientv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerPartyInputDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerPartyInputDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tele_fax' => 'string',
        'document_contacts' => '\TM\Saphety\Clientv2\Model\DocumentContactInputDto[]',
        'gln' => 'string',
        'legal_type' => 'string',
        'identification' => '\TM\Saphety\Clientv2\Model\IdentificationInputDto',
        'name' => 'string',
        'website_url' => 'string',
        'email' => 'string',
        'address' => '\TM\Saphety\Clientv2\Model\AddressInputDto',
        'tax_scheme' => 'string',
        'person' => '\TM\Saphety\Clientv2\Model\PersonInputDto',
        'industry' => 'string',
        'responsability_types' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tele_fax' => null,
        'document_contacts' => null,
        'gln' => null,
        'legal_type' => null,
        'identification' => null,
        'name' => null,
        'website_url' => null,
        'email' => null,
        'address' => null,
        'tax_scheme' => null,
        'person' => null,
        'industry' => null,
        'responsability_types' => null
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
        'tele_fax' => 'TeleFax',
        'document_contacts' => 'DocumentContacts',
        'gln' => 'Gln',
        'legal_type' => 'LegalType',
        'identification' => 'Identification',
        'name' => 'Name',
        'website_url' => 'WebsiteUrl',
        'email' => 'Email',
        'address' => 'Address',
        'tax_scheme' => 'TaxScheme',
        'person' => 'Person',
        'industry' => 'Industry',
        'responsability_types' => 'ResponsabilityTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tele_fax' => 'setTeleFax',
        'document_contacts' => 'setDocumentContacts',
        'gln' => 'setGln',
        'legal_type' => 'setLegalType',
        'identification' => 'setIdentification',
        'name' => 'setName',
        'website_url' => 'setWebsiteUrl',
        'email' => 'setEmail',
        'address' => 'setAddress',
        'tax_scheme' => 'setTaxScheme',
        'person' => 'setPerson',
        'industry' => 'setIndustry',
        'responsability_types' => 'setResponsabilityTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tele_fax' => 'getTeleFax',
        'document_contacts' => 'getDocumentContacts',
        'gln' => 'getGln',
        'legal_type' => 'getLegalType',
        'identification' => 'getIdentification',
        'name' => 'getName',
        'website_url' => 'getWebsiteUrl',
        'email' => 'getEmail',
        'address' => 'getAddress',
        'tax_scheme' => 'getTaxScheme',
        'person' => 'getPerson',
        'industry' => 'getIndustry',
        'responsability_types' => 'getResponsabilityTypes'
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
        $this->container['tele_fax'] = isset($data['tele_fax']) ? $data['tele_fax'] : null;
        $this->container['document_contacts'] = isset($data['document_contacts']) ? $data['document_contacts'] : null;
        $this->container['gln'] = isset($data['gln']) ? $data['gln'] : null;
        $this->container['legal_type'] = isset($data['legal_type']) ? $data['legal_type'] : null;
        $this->container['identification'] = isset($data['identification']) ? $data['identification'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['website_url'] = isset($data['website_url']) ? $data['website_url'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['tax_scheme'] = isset($data['tax_scheme']) ? $data['tax_scheme'] : null;
        $this->container['person'] = isset($data['person']) ? $data['person'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['responsability_types'] = isset($data['responsability_types']) ? $data['responsability_types'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['gln']) && (mb_strlen($this->container['gln']) > 13)) {
            $invalidProperties[] = "invalid value for 'gln', the character length must be smaller than or equal to 13.";
        }

        if ($this->container['legal_type'] === null) {
            $invalidProperties[] = "'legal_type' can't be null";
        }
        if ($this->container['identification'] === null) {
            $invalidProperties[] = "'identification' can't be null";
        }
        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 450)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 450.";
        }

        if (!is_null($this->container['website_url']) && (mb_strlen($this->container['website_url']) > 250)) {
            $invalidProperties[] = "invalid value for 'website_url', the character length must be smaller than or equal to 250.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) > 200)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['tax_scheme'] === null) {
            $invalidProperties[] = "'tax_scheme' can't be null";
        }
        if (!is_null($this->container['industry']) && (mb_strlen($this->container['industry']) > 100)) {
            $invalidProperties[] = "invalid value for 'industry', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['responsability_types'] === null) {
            $invalidProperties[] = "'responsability_types' can't be null";
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
     * Gets tele_fax
     *
     * @return string
     */
    public function getTeleFax()
    {
        return $this->container['tele_fax'];
    }

    /**
     * Sets tele_fax
     *
     * @param string $tele_fax tele_fax
     *
     * @return $this
     */
    public function setTeleFax($tele_fax)
    {
        $this->container['tele_fax'] = $tele_fax;

        return $this;
    }

    /**
     * Gets document_contacts
     *
     * @return \TM\Saphety\Clientv2\Model\DocumentContactInputDto[]
     */
    public function getDocumentContacts()
    {
        return $this->container['document_contacts'];
    }

    /**
     * Sets document_contacts
     *
     * @param \TM\Saphety\Clientv2\Model\DocumentContactInputDto[] $document_contacts document_contacts
     *
     * @return $this
     */
    public function setDocumentContacts($document_contacts)
    {
        $this->container['document_contacts'] = $document_contacts;

        return $this;
    }

    /**
     * Gets gln
     *
     * @return string
     */
    public function getGln()
    {
        return $this->container['gln'];
    }

    /**
     * Sets gln
     *
     * @param string $gln MaxLength: 13
     *
     * @return $this
     */
    public function setGln($gln)
    {
        if (!is_null($gln) && (mb_strlen($gln) > 13)) {
            throw new \InvalidArgumentException('invalid length for $gln when calling CustomerPartyInputDto., must be smaller than or equal to 13.');
        }

        $this->container['gln'] = $gln;

        return $this;
    }

    /**
     * Gets legal_type
     *
     * @return string
     */
    public function getLegalType()
    {
        return $this->container['legal_type'];
    }

    /**
     * Sets legal_type
     *
     * @param string $legal_type legal_type
     *
     * @return $this
     */
    public function setLegalType($legal_type)
    {
        $this->container['legal_type'] = $legal_type;

        return $this;
    }

    /**
     * Gets identification
     *
     * @return \TM\Saphety\Clientv2\Model\IdentificationInputDto
     */
    public function getIdentification()
    {
        return $this->container['identification'];
    }

    /**
     * Sets identification
     *
     * @param \TM\Saphety\Clientv2\Model\IdentificationInputDto $identification identification
     *
     * @return $this
     */
    public function setIdentification($identification)
    {
        $this->container['identification'] = $identification;

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
     * @param string $name MaxLength: 450
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 450)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CustomerPartyInputDto., must be smaller than or equal to 450.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets website_url
     *
     * @return string
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     *
     * @param string $website_url MaxLength: 250
     *
     * @return $this
     */
    public function setWebsiteUrl($website_url)
    {
        if (!is_null($website_url) && (mb_strlen($website_url) > 250)) {
            throw new \InvalidArgumentException('invalid length for $website_url when calling CustomerPartyInputDto., must be smaller than or equal to 250.');
        }

        $this->container['website_url'] = $website_url;

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
     * @param string $email MaxLength: 200
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if ((mb_strlen($email) > 200)) {
            throw new \InvalidArgumentException('invalid length for $email when calling CustomerPartyInputDto., must be smaller than or equal to 200.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \TM\Saphety\Clientv2\Model\AddressInputDto
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \TM\Saphety\Clientv2\Model\AddressInputDto $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets tax_scheme
     *
     * @return string
     */
    public function getTaxScheme()
    {
        return $this->container['tax_scheme'];
    }

    /**
     * Sets tax_scheme
     *
     * @param string $tax_scheme tax_scheme
     *
     * @return $this
     */
    public function setTaxScheme($tax_scheme)
    {
        $this->container['tax_scheme'] = $tax_scheme;

        return $this;
    }

    /**
     * Gets person
     *
     * @return \TM\Saphety\Clientv2\Model\PersonInputDto
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param \TM\Saphety\Clientv2\Model\PersonInputDto $person person
     *
     * @return $this
     */
    public function setPerson($person)
    {
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string $industry MaxLength: 100
     *
     * @return $this
     */
    public function setIndustry($industry)
    {
        if (!is_null($industry) && (mb_strlen($industry) > 100)) {
            throw new \InvalidArgumentException('invalid length for $industry when calling CustomerPartyInputDto., must be smaller than or equal to 100.');
        }

        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets responsability_types
     *
     * @return string[]
     */
    public function getResponsabilityTypes()
    {
        return $this->container['responsability_types'];
    }

    /**
     * Sets responsability_types
     *
     * @param string[] $responsability_types (New DIAN 2 Property)
     *
     * @return $this
     */
    public function setResponsabilityTypes($responsability_types)
    {
        $this->container['responsability_types'] = $responsability_types;

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


