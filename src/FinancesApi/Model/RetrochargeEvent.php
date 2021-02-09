<?php
/**
 * RetrochargeEvent
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FinancesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace Webcom\Amazon\Rest\FinancesApi\Model;

use Webcom\Amazon\Rest\ModelInterface;
use \ArrayAccess;
use \Webcom\Amazon\Rest\ObjectSerializer;

/**
 * RetrochargeEvent Class Doc Comment
 *
 * @category Class
 * @description A retrocharge or retrocharge reversal.
 * @package  Webcom\Amazon\Rest\FinancesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RetrochargeEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetrochargeEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'retrochargeEventType' => 'string',
        'amazonOrderId' => 'string',
        'postedDate' => '\DateTime',
        'baseTax' => '\Webcom\Amazon\Rest\FinancesApi\Model\Currency',
        'shippingTax' => '\Webcom\Amazon\Rest\FinancesApi\Model\Currency',
        'marketplaceName' => 'string',
        'retrochargeTaxWithheldList' => '\Webcom\Amazon\Rest\FinancesApi\Model\TaxWithheldComponent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'retrochargeEventType' => null,
        'amazonOrderId' => null,
        'postedDate' => 'date-time',
        'baseTax' => null,
        'shippingTax' => null,
        'marketplaceName' => null,
        'retrochargeTaxWithheldList' => null
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
        'retrochargeEventType' => 'RetrochargeEventType',
        'amazonOrderId' => 'AmazonOrderId',
        'postedDate' => 'PostedDate',
        'baseTax' => 'BaseTax',
        'shippingTax' => 'ShippingTax',
        'marketplaceName' => 'MarketplaceName',
        'retrochargeTaxWithheldList' => 'RetrochargeTaxWithheldList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'retrochargeEventType' => 'setRetrochargeEventType',
        'amazonOrderId' => 'setAmazonOrderId',
        'postedDate' => 'setPostedDate',
        'baseTax' => 'setBaseTax',
        'shippingTax' => 'setShippingTax',
        'marketplaceName' => 'setMarketplaceName',
        'retrochargeTaxWithheldList' => 'setRetrochargeTaxWithheldList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'retrochargeEventType' => 'getRetrochargeEventType',
        'amazonOrderId' => 'getAmazonOrderId',
        'postedDate' => 'getPostedDate',
        'baseTax' => 'getBaseTax',
        'shippingTax' => 'getShippingTax',
        'marketplaceName' => 'getMarketplaceName',
        'retrochargeTaxWithheldList' => 'getRetrochargeTaxWithheldList'
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
        $this->container['retrochargeEventType'] = $data['retrochargeEventType'] ?? null;
        $this->container['amazonOrderId'] = $data['amazonOrderId'] ?? null;
        $this->container['postedDate'] = $data['postedDate'] ?? null;
        $this->container['baseTax'] = $data['baseTax'] ?? null;
        $this->container['shippingTax'] = $data['shippingTax'] ?? null;
        $this->container['marketplaceName'] = $data['marketplaceName'] ?? null;
        $this->container['retrochargeTaxWithheldList'] = $data['retrochargeTaxWithheldList'] ?? null;
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
     * Gets retrochargeEventType
     *
     * @return string|null
     */
    public function getRetrochargeEventType()
    {
        return $this->container['retrochargeEventType'];
    }

    /**
     * Sets retrochargeEventType
     *
     * @param string|null $retrochargeEventType The type of event.  Possible values:  * Retrocharge  * RetrochargeReversal
     *
     * @return self
     */
    public function setRetrochargeEventType($retrochargeEventType)
    {
        $this->container['retrochargeEventType'] = $retrochargeEventType;

        return $this;
    }

    /**
     * Gets amazonOrderId
     *
     * @return string|null
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazonOrderId'];
    }

    /**
     * Sets amazonOrderId
     *
     * @param string|null $amazonOrderId An Amazon-defined identifier for an order.
     *
     * @return self
     */
    public function setAmazonOrderId($amazonOrderId)
    {
        $this->container['amazonOrderId'] = $amazonOrderId;

        return $this;
    }

    /**
     * Gets postedDate
     *
     * @return \DateTime|null
     */
    public function getPostedDate()
    {
        return $this->container['postedDate'];
    }

    /**
     * Sets postedDate
     *
     * @param \DateTime|null $postedDate postedDate
     *
     * @return self
     */
    public function setPostedDate($postedDate)
    {
        $this->container['postedDate'] = $postedDate;

        return $this;
    }

    /**
     * Gets baseTax
     *
     * @return \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null
     */
    public function getBaseTax()
    {
        return $this->container['baseTax'];
    }

    /**
     * Sets baseTax
     *
     * @param \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null $baseTax baseTax
     *
     * @return self
     */
    public function setBaseTax($baseTax)
    {
        $this->container['baseTax'] = $baseTax;

        return $this;
    }

    /**
     * Gets shippingTax
     *
     * @return \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null
     */
    public function getShippingTax()
    {
        return $this->container['shippingTax'];
    }

    /**
     * Sets shippingTax
     *
     * @param \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null $shippingTax shippingTax
     *
     * @return self
     */
    public function setShippingTax($shippingTax)
    {
        $this->container['shippingTax'] = $shippingTax;

        return $this;
    }

    /**
     * Gets marketplaceName
     *
     * @return string|null
     */
    public function getMarketplaceName()
    {
        return $this->container['marketplaceName'];
    }

    /**
     * Sets marketplaceName
     *
     * @param string|null $marketplaceName The name of the marketplace where the retrocharge event occurred.
     *
     * @return self
     */
    public function setMarketplaceName($marketplaceName)
    {
        $this->container['marketplaceName'] = $marketplaceName;

        return $this;
    }

    /**
     * Gets retrochargeTaxWithheldList
     *
     * @return \Webcom\Amazon\Rest\FinancesApi\Model\TaxWithheldComponent[]|null
     */
    public function getRetrochargeTaxWithheldList()
    {
        return $this->container['retrochargeTaxWithheldList'];
    }

    /**
     * Sets retrochargeTaxWithheldList
     *
     * @param \Webcom\Amazon\Rest\FinancesApi\Model\TaxWithheldComponent[]|null $retrochargeTaxWithheldList A list of information about taxes withheld.
     *
     * @return self
     */
    public function setRetrochargeTaxWithheldList($retrochargeTaxWithheldList)
    {
        $this->container['retrochargeTaxWithheldList'] = $retrochargeTaxWithheldList;

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


