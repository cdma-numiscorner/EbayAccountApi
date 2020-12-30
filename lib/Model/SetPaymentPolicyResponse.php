<?php
/**
 * SetPaymentPolicyResponse
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
 * SetPaymentPolicyResponse Class Doc Comment
 *
 * @category Class
 * @description Complex type that that gets populated with a response containing a payment policy.
 * @package  OpenAPI\EbayAccountClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SetPaymentPolicyResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SetPaymentPolicyResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category_types' => '\OpenAPI\EbayAccountClient\Model\CategoryType[]',
        'deposit' => '\OpenAPI\EbayAccountClient\Model\Deposit',
        'description' => 'string',
        'full_payment_due_in' => '\OpenAPI\EbayAccountClient\Model\TimeDuration',
        'immediate_pay' => 'bool',
        'marketplace_id' => 'string',
        'name' => 'string',
        'payment_instructions' => 'string',
        'payment_methods' => '\OpenAPI\EbayAccountClient\Model\PaymentMethod[]',
        'payment_policy_id' => 'string',
        'warnings' => '\OpenAPI\EbayAccountClient\Model\Error[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'category_types' => null,
        'deposit' => null,
        'description' => null,
        'full_payment_due_in' => null,
        'immediate_pay' => null,
        'marketplace_id' => null,
        'name' => null,
        'payment_instructions' => null,
        'payment_methods' => null,
        'payment_policy_id' => null,
        'warnings' => null
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
        'category_types' => 'categoryTypes',
        'deposit' => 'deposit',
        'description' => 'description',
        'full_payment_due_in' => 'fullPaymentDueIn',
        'immediate_pay' => 'immediatePay',
        'marketplace_id' => 'marketplaceId',
        'name' => 'name',
        'payment_instructions' => 'paymentInstructions',
        'payment_methods' => 'paymentMethods',
        'payment_policy_id' => 'paymentPolicyId',
        'warnings' => 'warnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_types' => 'setCategoryTypes',
        'deposit' => 'setDeposit',
        'description' => 'setDescription',
        'full_payment_due_in' => 'setFullPaymentDueIn',
        'immediate_pay' => 'setImmediatePay',
        'marketplace_id' => 'setMarketplaceId',
        'name' => 'setName',
        'payment_instructions' => 'setPaymentInstructions',
        'payment_methods' => 'setPaymentMethods',
        'payment_policy_id' => 'setPaymentPolicyId',
        'warnings' => 'setWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_types' => 'getCategoryTypes',
        'deposit' => 'getDeposit',
        'description' => 'getDescription',
        'full_payment_due_in' => 'getFullPaymentDueIn',
        'immediate_pay' => 'getImmediatePay',
        'marketplace_id' => 'getMarketplaceId',
        'name' => 'getName',
        'payment_instructions' => 'getPaymentInstructions',
        'payment_methods' => 'getPaymentMethods',
        'payment_policy_id' => 'getPaymentPolicyId',
        'warnings' => 'getWarnings'
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
        $this->container['category_types'] = $data['category_types'] ?? null;
        $this->container['deposit'] = $data['deposit'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['full_payment_due_in'] = $data['full_payment_due_in'] ?? null;
        $this->container['immediate_pay'] = $data['immediate_pay'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['payment_instructions'] = $data['payment_instructions'] ?? null;
        $this->container['payment_methods'] = $data['payment_methods'] ?? null;
        $this->container['payment_policy_id'] = $data['payment_policy_id'] ?? null;
        $this->container['warnings'] = $data['warnings'] ?? null;
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
     * Gets category_types
     *
     * @return \OpenAPI\EbayAccountClient\Model\CategoryType[]|null
     */
    public function getCategoryTypes()
    {
        return $this->container['category_types'];
    }

    /**
     * Sets category_types
     *
     * @param \OpenAPI\EbayAccountClient\Model\CategoryType[]|null $category_types The CategoryTypeEnum value to which this policy applies. This container is used to discern accounts that sell motor vehicles from those that do not. Restriction: Currently, each policy can be set to only one categoryTypes value at a time.
     *
     * @return self
     */
    public function setCategoryTypes($category_types)
    {
        $this->container['category_types'] = $category_types;

        return $this;
    }

    /**
     * Gets deposit
     *
     * @return \OpenAPI\EbayAccountClient\Model\Deposit|null
     */
    public function getDeposit()
    {
        return $this->container['deposit'];
    }

    /**
     * Sets deposit
     *
     * @param \OpenAPI\EbayAccountClient\Model\Deposit|null $deposit deposit
     *
     * @return self
     */
    public function setDeposit($deposit)
    {
        $this->container['deposit'] = $deposit;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description An optional seller-defined description of the payment policy for internal use (this value is not displayed to end users).
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets full_payment_due_in
     *
     * @return \OpenAPI\EbayAccountClient\Model\TimeDuration|null
     */
    public function getFullPaymentDueIn()
    {
        return $this->container['full_payment_due_in'];
    }

    /**
     * Sets full_payment_due_in
     *
     * @param \OpenAPI\EbayAccountClient\Model\TimeDuration|null $full_payment_due_in full_payment_due_in
     *
     * @return self
     */
    public function setFullPaymentDueIn($full_payment_due_in)
    {
        $this->container['full_payment_due_in'] = $full_payment_due_in;

        return $this;
    }

    /**
     * Gets immediate_pay
     *
     * @return bool|null
     */
    public function getImmediatePay()
    {
        return $this->container['immediate_pay'];
    }

    /**
     * Sets immediate_pay
     *
     * @param bool|null $immediate_pay If set to true, payment is due upon receipt (eBay generates a receipt when the buyer agrees to purchase an item). The items will be available for other buyers until the payment is complete. This boolean must be set in the payment policy if the seller wants to create a listing that has an immediate payment requirement. Note: This container can be used for sellers who opt-in to the managed payments program, but some requirements do not apply.Default: False
     *
     * @return self
     */
    public function setImmediatePay($immediate_pay)
    {
        $this->container['immediate_pay'] = $immediate_pay;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id The ID of the eBay marketplace to which this payment policy applies. If this value is not specified, the value defaults to the seller's eBay registration site. Note: A limited number of sellers, on a limited number of eBay marketplaces, are currently opted-in to the eBay managed payments program. To view the eBay marketplaces where managed payments are currently supported, see the managed payments landing page. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/account/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name A user-defined name for this payment policy. Names must be unique for policies assigned to the same marketplace. Note: eBay will create a new payment policy for sellers who opt-in to the managed payments program.Max length: 64
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets payment_instructions
     *
     * @return string|null
     */
    public function getPaymentInstructions()
    {
        return $this->container['payment_instructions'];
    }

    /**
     * Sets payment_instructions
     *
     * @param string|null $payment_instructions A free-form string field that allows sellers to add detailed payment instructions to their listings. The payment instructions appear on eBay's View Item and Checkout pages. eBay recommends sellers use this field to clarify payment policies for motor vehicle listings on eBay Motors. For example, sellers can include the specifics on the deposit (if required), pickup/delivery arrangements, and full payment details on the vehicle. The field allows only 500 characters as input, but due to the way the eBay web site UI treats characters, this field can return more than 500 characters in the response. For example, characters like &amp; and ' (ampersand and single quote) count as 5 characters each. Restriction: This container is not supported for sellers who opt-in to the managed payments program. Max length: 1000
     *
     * @return self
     */
    public function setPaymentInstructions($payment_instructions)
    {
        $this->container['payment_instructions'] = $payment_instructions;

        return $this;
    }

    /**
     * Gets payment_methods
     *
     * @return \OpenAPI\EbayAccountClient\Model\PaymentMethod[]|null
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     *
     * @param \OpenAPI\EbayAccountClient\Model\PaymentMethod[]|null $payment_methods If the seller is not opted-in to managed payments, this container returns a list of the payment methods accepted by the seller. When not opted-in to managed payments, each payment policy must specify at least one payment method. Note: The paymentMethods container is not returned if the seller is opted-in to the managed payments program.
     *
     * @return self
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets payment_policy_id
     *
     * @return string|null
     */
    public function getPaymentPolicyId()
    {
        return $this->container['payment_policy_id'];
    }

    /**
     * Sets payment_policy_id
     *
     * @param string|null $payment_policy_id A unique eBay-assigned ID for a payment policy. This ID is generated when the policy is created.
     *
     * @return self
     */
    public function setPaymentPolicyId($payment_policy_id)
    {
        $this->container['payment_policy_id'] = $payment_policy_id;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \OpenAPI\EbayAccountClient\Model\Error[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \OpenAPI\EbayAccountClient\Model\Error[]|null $warnings A list of warnings related to request. This field normally returns empty, which indicates the request did not generate any warnings.
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

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


