<?php
/**
 * StandardFourImageTextQuadrantModule
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
 * StandardFourImageTextQuadrantModule Class Doc Comment
 *
 * @category Class
 * @description Four standard images with text, presented on a grid of four quadrants.
 * @package  Webcom\Amazon\Rest\AplusContentApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class StandardFourImageTextQuadrantModule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandardFourImageTextQuadrantModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'block1' => '\Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock',
        'block2' => '\Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock',
        'block3' => '\Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock',
        'block4' => '\Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'block1' => null,
        'block2' => null,
        'block3' => null,
        'block4' => null
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
        'block1' => 'block1',
        'block2' => 'block2',
        'block3' => 'block3',
        'block4' => 'block4'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'block1' => 'setBlock1',
        'block2' => 'setBlock2',
        'block3' => 'setBlock3',
        'block4' => 'setBlock4'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'block1' => 'getBlock1',
        'block2' => 'getBlock2',
        'block3' => 'getBlock3',
        'block4' => 'getBlock4'
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
        $this->container['block1'] = $data['block1'] ?? null;
        $this->container['block2'] = $data['block2'] ?? null;
        $this->container['block3'] = $data['block3'] ?? null;
        $this->container['block4'] = $data['block4'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['block1'] === null) {
            $invalidProperties[] = "'block1' can't be null";
        }
        if ($this->container['block2'] === null) {
            $invalidProperties[] = "'block2' can't be null";
        }
        if ($this->container['block3'] === null) {
            $invalidProperties[] = "'block3' can't be null";
        }
        if ($this->container['block4'] === null) {
            $invalidProperties[] = "'block4' can't be null";
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
     * Gets block1
     *
     * @return \Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock
     */
    public function getBlock1()
    {
        return $this->container['block1'];
    }

    /**
     * Sets block1
     *
     * @param \Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock $block1 block1
     *
     * @return self
     */
    public function setBlock1($block1)
    {
        $this->container['block1'] = $block1;

        return $this;
    }

    /**
     * Gets block2
     *
     * @return \Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock
     */
    public function getBlock2()
    {
        return $this->container['block2'];
    }

    /**
     * Sets block2
     *
     * @param \Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock $block2 block2
     *
     * @return self
     */
    public function setBlock2($block2)
    {
        $this->container['block2'] = $block2;

        return $this;
    }

    /**
     * Gets block3
     *
     * @return \Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock
     */
    public function getBlock3()
    {
        return $this->container['block3'];
    }

    /**
     * Sets block3
     *
     * @param \Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock $block3 block3
     *
     * @return self
     */
    public function setBlock3($block3)
    {
        $this->container['block3'] = $block3;

        return $this;
    }

    /**
     * Gets block4
     *
     * @return \Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock
     */
    public function getBlock4()
    {
        return $this->container['block4'];
    }

    /**
     * Sets block4
     *
     * @param \Webcom\Amazon\Rest\AplusContentApi\Model\StandardImageTextBlock $block4 block4
     *
     * @return self
     */
    public function setBlock4($block4)
    {
        $this->container['block4'] = $block4;

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


