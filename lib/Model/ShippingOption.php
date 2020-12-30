<?php
/**
 * ShippingOption
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\EbayAccountClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Account API
 *
 * The <b>Account API</b> gives sellers the ability to configure their eBay seller accounts, including the seller's policies (the Fulfillment Policy, Payment Policy, and Return Policy), opt in and out of eBay seller programs, configure sales tax tables, and get account information.  <br><br>For details on the availability of the methods in this API, see <a href=\"/api-docs/sell/account/overview.html#requirements\">Account API requirements and restrictions</a>.
 *
 * The version of the OpenAPI document: v1.6.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\EbayAccountClient\Model;

use \ArrayAccess;
use \OpenAPI\EbayAccountClient\ObjectSerializer;

/**
 * ShippingOption Class Doc Comment
 *
 * @category Class
 * @description This complex type defines a seller&#39;s shipping configuration for either a DOMESTIC or INTERNATIONAL shipping option. Shipping options configure the high-level settings for shipments, such as flat-rate or calculated shipping, and any rate tables the seller wants to associate with the policy. Each shippingOption element has a shippingServices container that defines the list of shipping carriers and services that are available for the parent shipping option (that is, for either DOMESTIC or INTERNATIONAL shipping). If a seller offers an international shipping option, they must also offer a domestic shipping option. Note that costType (FLAT_RATE or CALCULATED) is set in shippingOptions and that all associated shipping services must be able to support this cost type.
 * @package  OpenAPI\EbayAccountClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShippingOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cost_type' => 'string',
        'insurance_fee' => '\OpenAPI\EbayAccountClient\Model\Amount',
        'insurance_offered' => 'bool',
        'option_type' => 'string',
        'package_handling_cost' => '\OpenAPI\EbayAccountClient\Model\Amount',
        'rate_table_id' => 'string',
        'shipping_services' => '\OpenAPI\EbayAccountClient\Model\ShippingService[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cost_type' => null,
        'insurance_fee' => null,
        'insurance_offered' => null,
        'option_type' => null,
        'package_handling_cost' => null,
        'rate_table_id' => null,
        'shipping_services' => null
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
        'cost_type' => 'costType',
        'insurance_fee' => 'insuranceFee',
        'insurance_offered' => 'insuranceOffered',
        'option_type' => 'optionType',
        'package_handling_cost' => 'packageHandlingCost',
        'rate_table_id' => 'rateTableId',
        'shipping_services' => 'shippingServices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cost_type' => 'setCostType',
        'insurance_fee' => 'setInsuranceFee',
        'insurance_offered' => 'setInsuranceOffered',
        'option_type' => 'setOptionType',
        'package_handling_cost' => 'setPackageHandlingCost',
        'rate_table_id' => 'setRateTableId',
        'shipping_services' => 'setShippingServices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cost_type' => 'getCostType',
        'insurance_fee' => 'getInsuranceFee',
        'insurance_offered' => 'getInsuranceOffered',
        'option_type' => 'getOptionType',
        'package_handling_cost' => 'getPackageHandlingCost',
        'rate_table_id' => 'getRateTableId',
        'shipping_services' => 'getShippingServices'
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
        $this->container['cost_type'] = $data['cost_type'] ?? null;
        $this->container['insurance_fee'] = $data['insurance_fee'] ?? null;
        $this->container['insurance_offered'] = $data['insurance_offered'] ?? null;
        $this->container['option_type'] = $data['option_type'] ?? null;
        $this->container['package_handling_cost'] = $data['package_handling_cost'] ?? null;
        $this->container['rate_table_id'] = $data['rate_table_id'] ?? null;
        $this->container['shipping_services'] = $data['shipping_services'] ?? null;
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
     * Gets cost_type
     *
     * @return string|null
     */
    public function getCostType()
    {
        return $this->container['cost_type'];
    }

    /**
     * Sets cost_type
     *
     * @param string|null $cost_type Defines whether the shipping cost is FLAT_RATE (the same rate for all buyers), CALCULATED (the shipping rate varies by the ship-to location and size and weight of the package, as defined by the item), or NOT_SPECIFIED (for use with local pickup). Required if the policy offers shipping options using a shippingOptions container. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingCostTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setCostType($cost_type)
    {
        $this->container['cost_type'] = $cost_type;

        return $this;
    }

    /**
     * Gets insurance_fee
     *
     * @return \OpenAPI\EbayAccountClient\Model\Amount|null
     */
    public function getInsuranceFee()
    {
        return $this->container['insurance_fee'];
    }

    /**
     * Sets insurance_fee
     *
     * @param \OpenAPI\EbayAccountClient\Model\Amount|null $insurance_fee insurance_fee
     *
     * @return self
     */
    public function setInsuranceFee($insurance_fee)
    {
        $this->container['insurance_fee'] = $insurance_fee;

        return $this;
    }

    /**
     * Gets insurance_offered
     *
     * @return bool|null
     */
    public function getInsuranceOffered()
    {
        return $this->container['insurance_offered'];
    }

    /**
     * Sets insurance_offered
     *
     * @param bool|null $insurance_offered This field has been deprecated. Shipping insurance is offered only via a shipping carrier's shipping services and is no longer available via eBay shipping policies.
     *
     * @return self
     */
    public function setInsuranceOffered($insurance_offered)
    {
        $this->container['insurance_offered'] = $insurance_offered;

        return $this;
    }

    /**
     * Gets option_type
     *
     * @return string|null
     */
    public function getOptionType()
    {
        return $this->container['option_type'];
    }

    /**
     * Sets option_type
     *
     * @param string|null $option_type Use this field to set the ShippingOption element to either DOMESTIC or INTERNATIONAL. Required if the policy offers shipping options using a shippingOptions container. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/api:ShippingOptionTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setOptionType($option_type)
    {
        $this->container['option_type'] = $option_type;

        return $this;
    }

    /**
     * Gets package_handling_cost
     *
     * @return \OpenAPI\EbayAccountClient\Model\Amount|null
     */
    public function getPackageHandlingCost()
    {
        return $this->container['package_handling_cost'];
    }

    /**
     * Sets package_handling_cost
     *
     * @param \OpenAPI\EbayAccountClient\Model\Amount|null $package_handling_cost package_handling_cost
     *
     * @return self
     */
    public function setPackageHandlingCost($package_handling_cost)
    {
        $this->container['package_handling_cost'] = $package_handling_cost;

        return $this;
    }

    /**
     * Gets rate_table_id
     *
     * @return string|null
     */
    public function getRateTableId()
    {
        return $this->container['rate_table_id'];
    }

    /**
     * Sets rate_table_id
     *
     * @param string|null $rate_table_id A unique eBay-assigned ID associated with a user-created shipping rate table. The locality of a shipping rate table can be either DOMESTIC or INTERNATIONAL and you must ensure the value specified in this field references a shipping rate table that matches the type specified in the shippingOptions.optionType field. If you mismatch the types, eBay responds with a 20403 error. Call getRateTable to retrieve information (including rateTableId values) on the rate tables configured by a seller. For information on creating rate tables, see Using shipping rate tables.
     *
     * @return self
     */
    public function setRateTableId($rate_table_id)
    {
        $this->container['rate_table_id'] = $rate_table_id;

        return $this;
    }

    /**
     * Gets shipping_services
     *
     * @return \OpenAPI\EbayAccountClient\Model\ShippingService[]|null
     */
    public function getShippingServices()
    {
        return $this->container['shipping_services'];
    }

    /**
     * Sets shipping_services
     *
     * @param \OpenAPI\EbayAccountClient\Model\ShippingService[]|null $shipping_services Contains a list of shipping services offered for either DOMESTIC or INTERNATIONAL shipments. Sellers can specify up to four domestic shipping services and up to five international shipping services by using separate shippingService containers for each. Note that if the seller is opted in to the Global Shipping Program, they can specify only four other international shipping services, regardless of whether or not Global Shipping is offered as one of the services. Required if the policy offers shipping options using a shippingOptions container.
     *
     * @return self
     */
    public function setShippingServices($shipping_services)
    {
        $this->container['shipping_services'] = $shipping_services;

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


