<?php
/**
 * AdjustmentEvent
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
 * AdjustmentEvent Class Doc Comment
 *
 * @category Class
 * @description An adjustment to the seller&#39;s account.
 * @package  Webcom\Amazon\Rest\FinancesApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AdjustmentEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdjustmentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adjustmentType' => 'string',
        'postedDate' => '\DateTime',
        'adjustmentAmount' => '\Webcom\Amazon\Rest\FinancesApi\Model\Currency',
        'adjustmentItemList' => '\Webcom\Amazon\Rest\FinancesApi\Model\AdjustmentItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'adjustmentType' => null,
        'postedDate' => 'date-time',
        'adjustmentAmount' => null,
        'adjustmentItemList' => null
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
        'adjustmentType' => 'AdjustmentType',
        'postedDate' => 'PostedDate',
        'adjustmentAmount' => 'AdjustmentAmount',
        'adjustmentItemList' => 'AdjustmentItemList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adjustmentType' => 'setAdjustmentType',
        'postedDate' => 'setPostedDate',
        'adjustmentAmount' => 'setAdjustmentAmount',
        'adjustmentItemList' => 'setAdjustmentItemList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adjustmentType' => 'getAdjustmentType',
        'postedDate' => 'getPostedDate',
        'adjustmentAmount' => 'getAdjustmentAmount',
        'adjustmentItemList' => 'getAdjustmentItemList'
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
        $this->container['adjustmentType'] = $data['adjustmentType'] ?? null;
        $this->container['postedDate'] = $data['postedDate'] ?? null;
        $this->container['adjustmentAmount'] = $data['adjustmentAmount'] ?? null;
        $this->container['adjustmentItemList'] = $data['adjustmentItemList'] ?? null;
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
     * Gets adjustmentType
     *
     * @return string|null
     */
    public function getAdjustmentType()
    {
        return $this->container['adjustmentType'];
    }

    /**
     * Sets adjustmentType
     *
     * @param string|null $adjustmentType The type of adjustment.  Possible values:  * FBAInventoryReimbursement - An FBA inventory reimbursement to a seller's account. This occurs if a seller's inventory is damaged.  * ReserveEvent - A reserve event that is generated at the time of a settlement period closing. This occurs when some money from a seller's account is held back.  * PostageBilling - The amount paid by a seller for shipping labels.  * PostageRefund - The reimbursement of shipping labels purchased for orders that were canceled or refunded.  * LostOrDamagedReimbursement - An Amazon Easy Ship reimbursement to a seller's account for a package that we lost or damaged.  * CanceledButPickedUpReimbursement - An Amazon Easy Ship reimbursement to a seller's account. This occurs when a package is picked up and the order is subsequently canceled. This value is used only in the India marketplace.  * ReimbursementClawback - An Amazon Easy Ship reimbursement clawback from a seller's account. This occurs when a prior reimbursement is reversed. This value is used only in the India marketplace.  * SellerRewards - An award credited to a seller's account for their participation in an offer in the Seller Rewards program. Applies only to the India marketplace.
     *
     * @return self
     */
    public function setAdjustmentType($adjustmentType)
    {
        $this->container['adjustmentType'] = $adjustmentType;

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
     * Gets adjustmentAmount
     *
     * @return \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null
     */
    public function getAdjustmentAmount()
    {
        return $this->container['adjustmentAmount'];
    }

    /**
     * Sets adjustmentAmount
     *
     * @param \Webcom\Amazon\Rest\FinancesApi\Model\Currency|null $adjustmentAmount adjustmentAmount
     *
     * @return self
     */
    public function setAdjustmentAmount($adjustmentAmount)
    {
        $this->container['adjustmentAmount'] = $adjustmentAmount;

        return $this;
    }

    /**
     * Gets adjustmentItemList
     *
     * @return \Webcom\Amazon\Rest\FinancesApi\Model\AdjustmentItem[]|null
     */
    public function getAdjustmentItemList()
    {
        return $this->container['adjustmentItemList'];
    }

    /**
     * Sets adjustmentItemList
     *
     * @param \Webcom\Amazon\Rest\FinancesApi\Model\AdjustmentItem[]|null $adjustmentItemList A list of information about items in an adjustment to the seller's account.
     *
     * @return self
     */
    public function setAdjustmentItemList($adjustmentItemList)
    {
        $this->container['adjustmentItemList'] = $adjustmentItemList;

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


