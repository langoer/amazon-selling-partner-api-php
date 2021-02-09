<?php
/**
 * GetFeatureSkuResult
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Webcom\Amazon\Rest\FulfillmentOutboundApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * GetFeatureSkuResult Class Doc Comment
 *
 * @category Class
 * @description The payload for the getFeatureSKU operation.
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetFeatureSkuResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetFeatureSkuResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceId' => 'string',
        'featureName' => 'string',
        'isEligible' => 'bool',
        'ineligibleReasons' => 'string[]',
        'skuInfo' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\FeatureSku'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplaceId' => null,
        'featureName' => null,
        'isEligible' => null,
        'ineligibleReasons' => null,
        'skuInfo' => null
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
        'marketplaceId' => 'marketplaceId',
        'featureName' => 'featureName',
        'isEligible' => 'isEligible',
        'ineligibleReasons' => 'ineligibleReasons',
        'skuInfo' => 'skuInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId' => 'setMarketplaceId',
        'featureName' => 'setFeatureName',
        'isEligible' => 'setIsEligible',
        'ineligibleReasons' => 'setIneligibleReasons',
        'skuInfo' => 'setSkuInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceId' => 'getMarketplaceId',
        'featureName' => 'getFeatureName',
        'isEligible' => 'getIsEligible',
        'ineligibleReasons' => 'getIneligibleReasons',
        'skuInfo' => 'getSkuInfo'
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
        $this->container['marketplaceId'] = $data['marketplaceId'] ?? null;
        $this->container['featureName'] = $data['featureName'] ?? null;
        $this->container['isEligible'] = $data['isEligible'] ?? null;
        $this->container['ineligibleReasons'] = $data['ineligibleReasons'] ?? null;
        $this->container['skuInfo'] = $data['skuInfo'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplaceId'] === null) {
            $invalidProperties[] = "'marketplaceId' can't be null";
        }
        if ($this->container['featureName'] === null) {
            $invalidProperties[] = "'featureName' can't be null";
        }
        if ($this->container['isEligible'] === null) {
            $invalidProperties[] = "'isEligible' can't be null";
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
     * Gets marketplaceId
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string $marketplaceId The requested marketplace.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets featureName
     *
     * @return string
     */
    public function getFeatureName()
    {
        return $this->container['featureName'];
    }

    /**
     * Sets featureName
     *
     * @param string $featureName The name of the feature.
     *
     * @return self
     */
    public function setFeatureName($featureName)
    {
        $this->container['featureName'] = $featureName;

        return $this;
    }

    /**
     * Gets isEligible
     *
     * @return bool
     */
    public function getIsEligible()
    {
        return $this->container['isEligible'];
    }

    /**
     * Sets isEligible
     *
     * @param bool $isEligible When true, the seller SKU is eligible for the requested feature.
     *
     * @return self
     */
    public function setIsEligible($isEligible)
    {
        $this->container['isEligible'] = $isEligible;

        return $this;
    }

    /**
     * Gets ineligibleReasons
     *
     * @return string[]|null
     */
    public function getIneligibleReasons()
    {
        return $this->container['ineligibleReasons'];
    }

    /**
     * Sets ineligibleReasons
     *
     * @param string[]|null $ineligibleReasons A list of one or more reasons that the seller SKU is ineligibile for the feature.  Possible values: * MERCHANT_NOT_ENROLLED - The merchant isn't enrolled for the feature. * SKU_NOT_ELIGIBLE - The SKU doesn't reside in a warehouse that supports the feature. * INVALID_SKU - There is an issue with the SKU provided.
     *
     * @return self
     */
    public function setIneligibleReasons($ineligibleReasons)
    {
        $this->container['ineligibleReasons'] = $ineligibleReasons;

        return $this;
    }

    /**
     * Gets skuInfo
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\FeatureSku|null
     */
    public function getSkuInfo()
    {
        return $this->container['skuInfo'];
    }

    /**
     * Sets skuInfo
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\FeatureSku|null $skuInfo skuInfo
     *
     * @return self
     */
    public function setSkuInfo($skuInfo)
    {
        $this->container['skuInfo'] = $skuInfo;

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


