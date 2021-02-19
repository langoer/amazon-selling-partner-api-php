<?php
/**
 * ImageComponent
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\AplusContentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\AplusContentApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * ImageComponent Class Doc Comment
 *
 * @category Class
 * @description A reference to an image, hosted in the A+ Content media library.
 * @package  Webcom\Amazon\Rest\AplusContentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ImageComponent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImageComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uploadDestinationId' => 'string',
        'imageCropSpecification' => '\Webcom\Amazon\Rest\AplusContentApi\Model\ImageCropSpecification',
        'altText' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uploadDestinationId' => null,
        'imageCropSpecification' => null,
        'altText' => null
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
        'uploadDestinationId' => 'uploadDestinationId',
        'imageCropSpecification' => 'imageCropSpecification',
        'altText' => 'altText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uploadDestinationId' => 'setUploadDestinationId',
        'imageCropSpecification' => 'setImageCropSpecification',
        'altText' => 'setAltText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uploadDestinationId' => 'getUploadDestinationId',
        'imageCropSpecification' => 'getImageCropSpecification',
        'altText' => 'getAltText'
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
        $this->container['uploadDestinationId'] = $data['uploadDestinationId'] ?? null;
        $this->container['imageCropSpecification'] = $data['imageCropSpecification'] ?? null;
        $this->container['altText'] = $data['altText'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['uploadDestinationId'] === null) {
            $invalidProperties[] = "'uploadDestinationId' can't be null";
        }
        if ((mb_strlen($this->container['uploadDestinationId']) < 1)) {
            $invalidProperties[] = "invalid value for 'uploadDestinationId', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['imageCropSpecification'] === null) {
            $invalidProperties[] = "'imageCropSpecification' can't be null";
        }
        if ($this->container['altText'] === null) {
            $invalidProperties[] = "'altText' can't be null";
        }
        if ((mb_strlen($this->container['altText']) > 100)) {
            $invalidProperties[] = "invalid value for 'altText', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['altText']) < 1)) {
            $invalidProperties[] = "invalid value for 'altText', the character length must be bigger than or equal to 1.";
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
     * Gets uploadDestinationId
     *
     * @return string
     */
    public function getUploadDestinationId()
    {
        return $this->container['uploadDestinationId'];
    }

    /**
     * Sets uploadDestinationId
     *
     * @param string $uploadDestinationId This identifier is provided by the Selling Partner API for Uploads.
     *
     * @return self
     */
    public function setUploadDestinationId($uploadDestinationId)
    {

        if ((mb_strlen($uploadDestinationId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $uploadDestinationId when calling ImageComponent., must be bigger than or equal to 1.');
        }

        $this->container['uploadDestinationId'] = $uploadDestinationId;

        return $this;
    }

    /**
     * Gets imageCropSpecification
     *
     * @return \Webcom\Amazon\Rest\AplusContentApi\Model\ImageCropSpecification
     */
    public function getImageCropSpecification()
    {
        return $this->container['imageCropSpecification'];
    }

    /**
     * Sets imageCropSpecification
     *
     * @param \Webcom\Amazon\Rest\AplusContentApi\Model\ImageCropSpecification $imageCropSpecification imageCropSpecification
     *
     * @return self
     */
    public function setImageCropSpecification($imageCropSpecification)
    {
        $this->container['imageCropSpecification'] = $imageCropSpecification;

        return $this;
    }

    /**
     * Gets altText
     *
     * @return string
     */
    public function getAltText()
    {
        return $this->container['altText'];
    }

    /**
     * Sets altText
     *
     * @param string $altText The alternative text for the image.
     *
     * @return self
     */
    public function setAltText($altText)
    {
        if ((mb_strlen($altText) > 100)) {
            throw new \InvalidArgumentException('invalid length for $altText when calling ImageComponent., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($altText) < 1)) {
            throw new \InvalidArgumentException('invalid length for $altText when calling ImageComponent., must be bigger than or equal to 1.');
        }

        $this->container['altText'] = $altText;

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


