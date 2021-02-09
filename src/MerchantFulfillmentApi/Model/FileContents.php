<?php
/**
 * FileContents
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\MerchantFulfillmentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\MerchantFulfillmentApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * FileContents Class Doc Comment
 *
 * @category Class
 * @description The document data and checksum.
 * @package  Webcom\Amazon\Rest\MerchantFulfillmentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FileContents implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FileContents';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contents' => 'string',
        'fileType' => '\Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\FileType',
        'checksum' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contents' => null,
        'fileType' => null,
        'checksum' => null
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
        'contents' => 'Contents',
        'fileType' => 'FileType',
        'checksum' => 'Checksum'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contents' => 'setContents',
        'fileType' => 'setFileType',
        'checksum' => 'setChecksum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contents' => 'getContents',
        'fileType' => 'getFileType',
        'checksum' => 'getChecksum'
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
        $this->container['contents'] = $data['contents'] ?? null;
        $this->container['fileType'] = $data['fileType'] ?? null;
        $this->container['checksum'] = $data['checksum'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contents'] === null) {
            $invalidProperties[] = "'contents' can't be null";
        }
        if ($this->container['fileType'] === null) {
            $invalidProperties[] = "'fileType' can't be null";
        }
        if ($this->container['checksum'] === null) {
            $invalidProperties[] = "'checksum' can't be null";
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
     * Gets contents
     *
     * @return string
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents
     *
     * @param string $contents Data for printing labels, in the form of a Base64-encoded, GZip-compressed string.
     *
     * @return self
     */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;

        return $this;
    }

    /**
     * Gets fileType
     *
     * @return \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\FileType
     */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
     * Sets fileType
     *
     * @param \Webcom\Amazon\Rest\MerchantFulfillmentApi\Model\FileType $fileType fileType
     *
     * @return self
     */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;

        return $this;
    }

    /**
     * Gets checksum
     *
     * @return string
     */
    public function getChecksum()
    {
        return $this->container['checksum'];
    }

    /**
     * Sets checksum
     *
     * @param string $checksum An MD5 hash to validate the PDF document data, in the form of a Base64-encoded string.
     *
     * @return self
     */
    public function setChecksum($checksum)
    {
        $this->container['checksum'] = $checksum;

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


