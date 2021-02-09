<?php
/**
 * UpdateFulfillmentOrderRequest
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
 * UpdateFulfillmentOrderRequest Class Doc Comment
 *
 * @category Class
 * @package  Webcom\Amazon\Rest\FulfillmentOutboundApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UpdateFulfillmentOrderRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateFulfillmentOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplaceId' => 'string',
        'displayableOrderId' => 'string',
        'displayableOrderDate' => '\DateTime',
        'displayableOrderComment' => 'string',
        'shippingSpeedCategory' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\ShippingSpeedCategory',
        'destinationAddress' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\Address',
        'fulfillmentAction' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\FulfillmentAction',
        'fulfillmentPolicy' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\FulfillmentPolicy',
        'shipFromCountryCode' => 'string',
        'notificationEmails' => 'string[]',
        'featureConstraints' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\FeatureSettings[]',
        'items' => '\Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\UpdateFulfillmentOrderItem[]'
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
        'displayableOrderId' => null,
        'displayableOrderDate' => 'date-time',
        'displayableOrderComment' => null,
        'shippingSpeedCategory' => null,
        'destinationAddress' => null,
        'fulfillmentAction' => null,
        'fulfillmentPolicy' => null,
        'shipFromCountryCode' => null,
        'notificationEmails' => null,
        'featureConstraints' => null,
        'items' => null
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
        'displayableOrderId' => 'displayableOrderId',
        'displayableOrderDate' => 'displayableOrderDate',
        'displayableOrderComment' => 'displayableOrderComment',
        'shippingSpeedCategory' => 'shippingSpeedCategory',
        'destinationAddress' => 'destinationAddress',
        'fulfillmentAction' => 'fulfillmentAction',
        'fulfillmentPolicy' => 'fulfillmentPolicy',
        'shipFromCountryCode' => 'shipFromCountryCode',
        'notificationEmails' => 'notificationEmails',
        'featureConstraints' => 'featureConstraints',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplaceId' => 'setMarketplaceId',
        'displayableOrderId' => 'setDisplayableOrderId',
        'displayableOrderDate' => 'setDisplayableOrderDate',
        'displayableOrderComment' => 'setDisplayableOrderComment',
        'shippingSpeedCategory' => 'setShippingSpeedCategory',
        'destinationAddress' => 'setDestinationAddress',
        'fulfillmentAction' => 'setFulfillmentAction',
        'fulfillmentPolicy' => 'setFulfillmentPolicy',
        'shipFromCountryCode' => 'setShipFromCountryCode',
        'notificationEmails' => 'setNotificationEmails',
        'featureConstraints' => 'setFeatureConstraints',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplaceId' => 'getMarketplaceId',
        'displayableOrderId' => 'getDisplayableOrderId',
        'displayableOrderDate' => 'getDisplayableOrderDate',
        'displayableOrderComment' => 'getDisplayableOrderComment',
        'shippingSpeedCategory' => 'getShippingSpeedCategory',
        'destinationAddress' => 'getDestinationAddress',
        'fulfillmentAction' => 'getFulfillmentAction',
        'fulfillmentPolicy' => 'getFulfillmentPolicy',
        'shipFromCountryCode' => 'getShipFromCountryCode',
        'notificationEmails' => 'getNotificationEmails',
        'featureConstraints' => 'getFeatureConstraints',
        'items' => 'getItems'
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
        $this->container['displayableOrderId'] = $data['displayableOrderId'] ?? null;
        $this->container['displayableOrderDate'] = $data['displayableOrderDate'] ?? null;
        $this->container['displayableOrderComment'] = $data['displayableOrderComment'] ?? null;
        $this->container['shippingSpeedCategory'] = $data['shippingSpeedCategory'] ?? null;
        $this->container['destinationAddress'] = $data['destinationAddress'] ?? null;
        $this->container['fulfillmentAction'] = $data['fulfillmentAction'] ?? null;
        $this->container['fulfillmentPolicy'] = $data['fulfillmentPolicy'] ?? null;
        $this->container['shipFromCountryCode'] = $data['shipFromCountryCode'] ?? null;
        $this->container['notificationEmails'] = $data['notificationEmails'] ?? null;
        $this->container['featureConstraints'] = $data['featureConstraints'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['displayableOrderId']) && (mb_strlen($this->container['displayableOrderId']) > 40)) {
            $invalidProperties[] = "invalid value for 'displayableOrderId', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['displayableOrderComment']) && (mb_strlen($this->container['displayableOrderComment']) > 1000)) {
            $invalidProperties[] = "invalid value for 'displayableOrderComment', the character length must be smaller than or equal to 1000.";
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
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string|null $marketplaceId The marketplace the fulfillment order is placed against.
     *
     * @return self
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

        return $this;
    }

    /**
     * Gets displayableOrderId
     *
     * @return string|null
     */
    public function getDisplayableOrderId()
    {
        return $this->container['displayableOrderId'];
    }

    /**
     * Sets displayableOrderId
     *
     * @param string|null $displayableOrderId A fulfillment order identifier that the seller creates. This value displays as the order identifier in recipient-facing materials such as the outbound shipment packing slip. The value of DisplayableOrderId should match the order identifier that the seller provides to the recipient. The seller can use the SellerFulfillmentOrderId for this value or they can specify an alternate value if they want the recipient to reference an alternate order identifier.
     *
     * @return self
     */
    public function setDisplayableOrderId($displayableOrderId)
    {
        if (!is_null($displayableOrderId) && (mb_strlen($displayableOrderId) > 40)) {
            throw new \InvalidArgumentException('invalid length for $displayableOrderId when calling UpdateFulfillmentOrderRequest., must be smaller than or equal to 40.');
        }

        $this->container['displayableOrderId'] = $displayableOrderId;

        return $this;
    }

    /**
     * Gets displayableOrderDate
     *
     * @return \DateTime|null
     */
    public function getDisplayableOrderDate()
    {
        return $this->container['displayableOrderDate'];
    }

    /**
     * Sets displayableOrderDate
     *
     * @param \DateTime|null $displayableOrderDate displayableOrderDate
     *
     * @return self
     */
    public function setDisplayableOrderDate($displayableOrderDate)
    {
        $this->container['displayableOrderDate'] = $displayableOrderDate;

        return $this;
    }

    /**
     * Gets displayableOrderComment
     *
     * @return string|null
     */
    public function getDisplayableOrderComment()
    {
        return $this->container['displayableOrderComment'];
    }

    /**
     * Sets displayableOrderComment
     *
     * @param string|null $displayableOrderComment Order-specific text that appears in recipient-facing materials such as the outbound shipment packing slip.
     *
     * @return self
     */
    public function setDisplayableOrderComment($displayableOrderComment)
    {
        if (!is_null($displayableOrderComment) && (mb_strlen($displayableOrderComment) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $displayableOrderComment when calling UpdateFulfillmentOrderRequest., must be smaller than or equal to 1000.');
        }

        $this->container['displayableOrderComment'] = $displayableOrderComment;

        return $this;
    }

    /**
     * Gets shippingSpeedCategory
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\ShippingSpeedCategory|null
     */
    public function getShippingSpeedCategory()
    {
        return $this->container['shippingSpeedCategory'];
    }

    /**
     * Sets shippingSpeedCategory
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\ShippingSpeedCategory|null $shippingSpeedCategory shippingSpeedCategory
     *
     * @return self
     */
    public function setShippingSpeedCategory($shippingSpeedCategory)
    {
        $this->container['shippingSpeedCategory'] = $shippingSpeedCategory;

        return $this;
    }

    /**
     * Gets destinationAddress
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\Address|null
     */
    public function getDestinationAddress()
    {
        return $this->container['destinationAddress'];
    }

    /**
     * Sets destinationAddress
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\Address|null $destinationAddress destinationAddress
     *
     * @return self
     */
    public function setDestinationAddress($destinationAddress)
    {
        $this->container['destinationAddress'] = $destinationAddress;

        return $this;
    }

    /**
     * Gets fulfillmentAction
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\FulfillmentAction|null
     */
    public function getFulfillmentAction()
    {
        return $this->container['fulfillmentAction'];
    }

    /**
     * Sets fulfillmentAction
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\FulfillmentAction|null $fulfillmentAction fulfillmentAction
     *
     * @return self
     */
    public function setFulfillmentAction($fulfillmentAction)
    {
        $this->container['fulfillmentAction'] = $fulfillmentAction;

        return $this;
    }

    /**
     * Gets fulfillmentPolicy
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\FulfillmentPolicy|null
     */
    public function getFulfillmentPolicy()
    {
        return $this->container['fulfillmentPolicy'];
    }

    /**
     * Sets fulfillmentPolicy
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\FulfillmentPolicy|null $fulfillmentPolicy fulfillmentPolicy
     *
     * @return self
     */
    public function setFulfillmentPolicy($fulfillmentPolicy)
    {
        $this->container['fulfillmentPolicy'] = $fulfillmentPolicy;

        return $this;
    }

    /**
     * Gets shipFromCountryCode
     *
     * @return string|null
     */
    public function getShipFromCountryCode()
    {
        return $this->container['shipFromCountryCode'];
    }

    /**
     * Sets shipFromCountryCode
     *
     * @param string|null $shipFromCountryCode The two-character country code for the country from which the fulfillment order ships. Must be in ISO 3166-1 alpha-2 format.
     *
     * @return self
     */
    public function setShipFromCountryCode($shipFromCountryCode)
    {
        $this->container['shipFromCountryCode'] = $shipFromCountryCode;

        return $this;
    }

    /**
     * Gets notificationEmails
     *
     * @return string[]|null
     */
    public function getNotificationEmails()
    {
        return $this->container['notificationEmails'];
    }

    /**
     * Sets notificationEmails
     *
     * @param string[]|null $notificationEmails A list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller.
     *
     * @return self
     */
    public function setNotificationEmails($notificationEmails)
    {
        $this->container['notificationEmails'] = $notificationEmails;

        return $this;
    }

    /**
     * Gets featureConstraints
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\FeatureSettings[]|null
     */
    public function getFeatureConstraints()
    {
        return $this->container['featureConstraints'];
    }

    /**
     * Sets featureConstraints
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\FeatureSettings[]|null $featureConstraints A list of features and their fulfillment policies to apply to the order.
     *
     * @return self
     */
    public function setFeatureConstraints($featureConstraints)
    {
        $this->container['featureConstraints'] = $featureConstraints;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\UpdateFulfillmentOrderItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Webcom\Amazon\Rest\FulfillmentOutboundApi\Model\UpdateFulfillmentOrderItem[]|null $items An array of fulfillment order item information for updating a fulfillment order.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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


