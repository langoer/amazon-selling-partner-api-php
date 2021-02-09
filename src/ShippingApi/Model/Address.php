<?php
/**
 * Address
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\ShippingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\ShippingApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @description The address.
 * @package  Webcom\Amazon\Rest\ShippingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'addressLine3' => 'string',
        'stateOrRegion' => 'string',
        'city' => 'string',
        'countryCode' => 'string',
        'postalCode' => 'string',
        'email' => 'string',
        'copyEmails' => 'string[]',
        'phoneNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'addressLine1' => null,
        'addressLine2' => null,
        'addressLine3' => null,
        'stateOrRegion' => null,
        'city' => null,
        'countryCode' => null,
        'postalCode' => null,
        'email' => null,
        'copyEmails' => null,
        'phoneNumber' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'addressLine1' => 'addressLine1',
        'addressLine2' => 'addressLine2',
        'addressLine3' => 'addressLine3',
        'stateOrRegion' => 'stateOrRegion',
        'city' => 'city',
        'countryCode' => 'countryCode',
        'postalCode' => 'postalCode',
        'email' => 'email',
        'copyEmails' => 'copyEmails',
        'phoneNumber' => 'phoneNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'addressLine1' => 'setAddressLine1',
        'addressLine2' => 'setAddressLine2',
        'addressLine3' => 'setAddressLine3',
        'stateOrRegion' => 'setStateOrRegion',
        'city' => 'setCity',
        'countryCode' => 'setCountryCode',
        'postalCode' => 'setPostalCode',
        'email' => 'setEmail',
        'copyEmails' => 'setCopyEmails',
        'phoneNumber' => 'setPhoneNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'addressLine1' => 'getAddressLine1',
        'addressLine2' => 'getAddressLine2',
        'addressLine3' => 'getAddressLine3',
        'stateOrRegion' => 'getStateOrRegion',
        'city' => 'getCity',
        'countryCode' => 'getCountryCode',
        'postalCode' => 'getPostalCode',
        'email' => 'getEmail',
        'copyEmails' => 'getCopyEmails',
        'phoneNumber' => 'getPhoneNumber'
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
        return self::$openAPIModelName;
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['addressLine1'] = $data['addressLine1'] ?? null;
        $this->container['addressLine2'] = $data['addressLine2'] ?? null;
        $this->container['addressLine3'] = $data['addressLine3'] ?? null;
        $this->container['stateOrRegion'] = $data['stateOrRegion'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['countryCode'] = $data['countryCode'] ?? null;
        $this->container['postalCode'] = $data['postalCode'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['copyEmails'] = $data['copyEmails'] ?? null;
        $this->container['phoneNumber'] = $data['phoneNumber'] ?? null;
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
        if ((mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['addressLine1'] === null) {
            $invalidProperties[] = "'addressLine1' can't be null";
        }
        if ((mb_strlen($this->container['addressLine1']) > 60)) {
            $invalidProperties[] = "invalid value for 'addressLine1', the character length must be smaller than or equal to 60.";
        }

        if ((mb_strlen($this->container['addressLine1']) < 1)) {
            $invalidProperties[] = "invalid value for 'addressLine1', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['addressLine2']) && (mb_strlen($this->container['addressLine2']) > 60)) {
            $invalidProperties[] = "invalid value for 'addressLine2', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['addressLine2']) && (mb_strlen($this->container['addressLine2']) < 1)) {
            $invalidProperties[] = "invalid value for 'addressLine2', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['addressLine3']) && (mb_strlen($this->container['addressLine3']) > 60)) {
            $invalidProperties[] = "invalid value for 'addressLine3', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['addressLine3']) && (mb_strlen($this->container['addressLine3']) < 1)) {
            $invalidProperties[] = "invalid value for 'addressLine3', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['stateOrRegion'] === null) {
            $invalidProperties[] = "'stateOrRegion' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) > 50)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['countryCode'] === null) {
            $invalidProperties[] = "'countryCode' can't be null";
        }
        if ((mb_strlen($this->container['countryCode']) > 2)) {
            $invalidProperties[] = "invalid value for 'countryCode', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['countryCode']) < 2)) {
            $invalidProperties[] = "invalid value for 'countryCode', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['postalCode'] === null) {
            $invalidProperties[] = "'postalCode' can't be null";
        }
        if ((mb_strlen($this->container['postalCode']) > 20)) {
            $invalidProperties[] = "invalid value for 'postalCode', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['postalCode']) < 1)) {
            $invalidProperties[] = "invalid value for 'postalCode', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 64)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['phoneNumber']) && (mb_strlen($this->container['phoneNumber']) > 20)) {
            $invalidProperties[] = "invalid value for 'phoneNumber', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['phoneNumber']) && (mb_strlen($this->container['phoneNumber']) < 1)) {
            $invalidProperties[] = "invalid value for 'phoneNumber', the character length must be bigger than or equal to 1.";
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
     * @param string $name The name of the person, business or institution at that address.
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Address., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string $addressLine1 First line of that address.
     *
     * @return self
     */
    public function setAddressLine1($addressLine1)
    {
        if ((mb_strlen($addressLine1) > 60)) {
            throw new \InvalidArgumentException('invalid length for $addressLine1 when calling Address., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($addressLine1) < 1)) {
            throw new \InvalidArgumentException('invalid length for $addressLine1 when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['addressLine1'] = $addressLine1;

        return $this;
    }

    /**
     * Gets addressLine2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['addressLine2'];
    }

    /**
     * Sets addressLine2
     *
     * @param string|null $addressLine2 Additional address information, if required.
     *
     * @return self
     */
    public function setAddressLine2($addressLine2)
    {
        if (!is_null($addressLine2) && (mb_strlen($addressLine2) > 60)) {
            throw new \InvalidArgumentException('invalid length for $addressLine2 when calling Address., must be smaller than or equal to 60.');
        }
        if (!is_null($addressLine2) && (mb_strlen($addressLine2) < 1)) {
            throw new \InvalidArgumentException('invalid length for $addressLine2 when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['addressLine2'] = $addressLine2;

        return $this;
    }

    /**
     * Gets addressLine3
     *
     * @return string|null
     */
    public function getAddressLine3()
    {
        return $this->container['addressLine3'];
    }

    /**
     * Sets addressLine3
     *
     * @param string|null $addressLine3 Additional address information, if required.
     *
     * @return self
     */
    public function setAddressLine3($addressLine3)
    {
        if (!is_null($addressLine3) && (mb_strlen($addressLine3) > 60)) {
            throw new \InvalidArgumentException('invalid length for $addressLine3 when calling Address., must be smaller than or equal to 60.');
        }
        if (!is_null($addressLine3) && (mb_strlen($addressLine3) < 1)) {
            throw new \InvalidArgumentException('invalid length for $addressLine3 when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['addressLine3'] = $addressLine3;

        return $this;
    }

    /**
     * Gets stateOrRegion
     *
     * @return string
     */
    public function getStateOrRegion()
    {
        return $this->container['stateOrRegion'];
    }

    /**
     * Sets stateOrRegion
     *
     * @param string $stateOrRegion The state or region where the person, business or institution is located.
     *
     * @return self
     */
    public function setStateOrRegion($stateOrRegion)
    {
        $this->container['stateOrRegion'] = $stateOrRegion;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The city where the person, business or institution is located.
     *
     * @return self
     */
    public function setCity($city)
    {
        if ((mb_strlen($city) > 50)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($city) < 1)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string $countryCode The two digit country code. In ISO 3166-1 alpha-2 format.
     *
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        if ((mb_strlen($countryCode) > 2)) {
            throw new \InvalidArgumentException('invalid length for $countryCode when calling Address., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($countryCode) < 2)) {
            throw new \InvalidArgumentException('invalid length for $countryCode when calling Address., must be bigger than or equal to 2.');
        }

        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string $postalCode The postal code of that address. It contains a series of letters or digits or both, sometimes including spaces or punctuation.
     *
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        if ((mb_strlen($postalCode) > 20)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling Address., must be smaller than or equal to 20.');
        }
        if ((mb_strlen($postalCode) < 1)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The email address of the contact associated with the address.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 64)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Address., must be smaller than or equal to 64.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets copyEmails
     *
     * @return string[]|null
     */
    public function getCopyEmails()
    {
        return $this->container['copyEmails'];
    }

    /**
     * Sets copyEmails
     *
     * @param string[]|null $copyEmails The email cc addresses of the contact associated with the address.
     *
     * @return self
     */
    public function setCopyEmails($copyEmails)
    {
        $this->container['copyEmails'] = $copyEmails;

        return $this;
    }

    /**
     * Gets phoneNumber
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     *
     * @param string|null $phoneNumber The phone number of the person, business or institution located at that address.
     *
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        if (!is_null($phoneNumber) && (mb_strlen($phoneNumber) > 20)) {
            throw new \InvalidArgumentException('invalid length for $phoneNumber when calling Address., must be smaller than or equal to 20.');
        }
        if (!is_null($phoneNumber) && (mb_strlen($phoneNumber) < 1)) {
            throw new \InvalidArgumentException('invalid length for $phoneNumber when calling Address., must be bigger than or equal to 1.');
        }

        $this->container['phoneNumber'] = $phoneNumber;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


