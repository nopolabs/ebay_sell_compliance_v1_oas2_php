<?php
/**
 * ComplianceSummaryInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Nopolabs\EBay\Sell\Compliance
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sherpa Compliance Service
 *
 * Service for providing the compliance violations of seller account/listings
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Nopolabs\EBay\Sell\Compliance\Model;

use \ArrayAccess;
use \Nopolabs\EBay\Sell\Compliance\ObjectSerializer;

/**
 * ComplianceSummaryInfo Class Doc Comment
 *
 * @category Class
 * @description This type is used by each unique eBay marketplace and compliance type combination that is returned in the &lt;strong&gt;getListingViolationsSummary&lt;/strong&gt; response to indicate the total number of listing violations in regards to that eBay marketplace and compliance type.
 * @package  Nopolabs\EBay\Sell\Compliance
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComplianceSummaryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ComplianceSummaryInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'compliance_type' => 'string',
        'marketplace_id' => 'string',
        'listing_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'compliance_type' => null,
        'marketplace_id' => null,
        'listing_count' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'compliance_type' => 'complianceType',
        'marketplace_id' => 'marketplaceId',
        'listing_count' => 'listingCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compliance_type' => 'setComplianceType',
        'marketplace_id' => 'setMarketplaceId',
        'listing_count' => 'setListingCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compliance_type' => 'getComplianceType',
        'marketplace_id' => 'getMarketplaceId',
        'listing_count' => 'getListingCount'
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
        return self::$swaggerModelName;
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
        $this->container['compliance_type'] = isset($data['compliance_type']) ? $data['compliance_type'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['listing_count'] = isset($data['listing_count']) ? $data['listing_count'] : null;
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

        return true;
    }


    /**
     * Gets compliance_type
     *
     * @return string
     */
    public function getComplianceType()
    {
        return $this->container['compliance_type'];
    }

    /**
     * Sets compliance_type
     *
     * @param string $compliance_type This enumeration value indicates the type of compliance. See ComplianceTypeEnum for more information on each compliance type. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/compliance/types/ComplianceTypeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setComplianceType($compliance_type)
    {
        $this->container['compliance_type'] = $compliance_type;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id This enumeration value indicates the eBay marketplace where the listing violations are occurring. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/compliance/types/MarketplaceIdEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets listing_count
     *
     * @return int
     */
    public function getListingCount()
    {
        return $this->container['listing_count'];
    }

    /**
     * Sets listing_count
     *
     * @param int $listing_count This integer value indicates the number of eBay listings that are currently violating the compliance type indicated in the complianceType field for the eBay marketplace indicated in the marketplaceId field. If there are no listing violations for the corresponding compliance type, 0 will be returned.
     *
     * @return $this
     */
    public function setListingCount($listing_count)
    {
        $this->container['listing_count'] = $listing_count;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


