<?php
/**
 * ReportingV3ConversionDetailsGet200ResponseConversionDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * ReportingV3ConversionDetailsGet200ResponseConversionDetails Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportingV3ConversionDetailsGet200ResponseConversionDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportingV3ConversionDetailsGet200Response_conversionDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantReferenceNumber' => 'string',
        'conversionTime' => '\DateTime',
        'requestId' => 'string',
        'originalDecision' => 'string',
        'newDecision' => 'string',
        'reviewer' => 'string',
        'reviewerComments' => 'string',
        'queue' => 'string',
        'profile' => 'string',
        'notes' => '\CyberSource\Model\ReportingV3ConversionDetailsGet200ResponseNotes[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchantReferenceNumber' => null,
        'conversionTime' => 'date-time',
        'requestId' => null,
        'originalDecision' => null,
        'newDecision' => null,
        'reviewer' => null,
        'reviewerComments' => null,
        'queue' => null,
        'profile' => null,
        'notes' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'merchantReferenceNumber' => 'merchantReferenceNumber',
        'conversionTime' => 'conversionTime',
        'requestId' => 'requestId',
        'originalDecision' => 'originalDecision',
        'newDecision' => 'newDecision',
        'reviewer' => 'reviewer',
        'reviewerComments' => 'reviewerComments',
        'queue' => 'queue',
        'profile' => 'profile',
        'notes' => 'notes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchantReferenceNumber' => 'setMerchantReferenceNumber',
        'conversionTime' => 'setConversionTime',
        'requestId' => 'setRequestId',
        'originalDecision' => 'setOriginalDecision',
        'newDecision' => 'setNewDecision',
        'reviewer' => 'setReviewer',
        'reviewerComments' => 'setReviewerComments',
        'queue' => 'setQueue',
        'profile' => 'setProfile',
        'notes' => 'setNotes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchantReferenceNumber' => 'getMerchantReferenceNumber',
        'conversionTime' => 'getConversionTime',
        'requestId' => 'getRequestId',
        'originalDecision' => 'getOriginalDecision',
        'newDecision' => 'getNewDecision',
        'reviewer' => 'getReviewer',
        'reviewerComments' => 'getReviewerComments',
        'queue' => 'getQueue',
        'profile' => 'getProfile',
        'notes' => 'getNotes'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['merchantReferenceNumber'] = isset($data['merchantReferenceNumber']) ? $data['merchantReferenceNumber'] : null;
        $this->container['conversionTime'] = isset($data['conversionTime']) ? $data['conversionTime'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['originalDecision'] = isset($data['originalDecision']) ? $data['originalDecision'] : null;
        $this->container['newDecision'] = isset($data['newDecision']) ? $data['newDecision'] : null;
        $this->container['reviewer'] = isset($data['reviewer']) ? $data['reviewer'] : null;
        $this->container['reviewerComments'] = isset($data['reviewerComments']) ? $data['reviewerComments'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets merchantReferenceNumber
     * @return string
     */
    public function getMerchantReferenceNumber()
    {
        return $this->container['merchantReferenceNumber'];
    }

    /**
     * Sets merchantReferenceNumber
     * @param string $merchantReferenceNumber Merchant reference number of a merchant
     * @return $this
     */
    public function setMerchantReferenceNumber($merchantReferenceNumber)
    {
        $this->container['merchantReferenceNumber'] = $merchantReferenceNumber;

        return $this;
    }

    /**
     * Gets conversionTime
     * @return \DateTime
     */
    public function getConversionTime()
    {
        return $this->container['conversionTime'];
    }

    /**
     * Sets conversionTime
     * @param \DateTime $conversionTime Date of conversion
     * @return $this
     */
    public function setConversionTime($conversionTime)
    {
        $this->container['conversionTime'] = $conversionTime;

        return $this;
    }

    /**
     * Gets requestId
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     * @param string $requestId Cybersource Transation request id
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;

        return $this;
    }

    /**
     * Gets originalDecision
     * @return string
     */
    public function getOriginalDecision()
    {
        return $this->container['originalDecision'];
    }

    /**
     * Sets originalDecision
     * @param string $originalDecision Original decision
     * @return $this
     */
    public function setOriginalDecision($originalDecision)
    {
        $this->container['originalDecision'] = $originalDecision;

        return $this;
    }

    /**
     * Gets newDecision
     * @return string
     */
    public function getNewDecision()
    {
        return $this->container['newDecision'];
    }

    /**
     * Sets newDecision
     * @param string $newDecision New decision
     * @return $this
     */
    public function setNewDecision($newDecision)
    {
        $this->container['newDecision'] = $newDecision;

        return $this;
    }

    /**
     * Gets reviewer
     * @return string
     */
    public function getReviewer()
    {
        return $this->container['reviewer'];
    }

    /**
     * Sets reviewer
     * @param string $reviewer User name of the reviewer
     * @return $this
     */
    public function setReviewer($reviewer)
    {
        $this->container['reviewer'] = $reviewer;

        return $this;
    }

    /**
     * Gets reviewerComments
     * @return string
     */
    public function getReviewerComments()
    {
        return $this->container['reviewerComments'];
    }

    /**
     * Sets reviewerComments
     * @param string $reviewerComments Comments of the reviewer
     * @return $this
     */
    public function setReviewerComments($reviewerComments)
    {
        $this->container['reviewerComments'] = $reviewerComments;

        return $this;
    }

    /**
     * Gets queue
     * @return string
     */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
     * Sets queue
     * @param string $queue Name of the queue
     * @return $this
     */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;

        return $this;
    }

    /**
     * Gets profile
     * @return string
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     * @param string $profile Name of the profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets notes
     * @return \CyberSource\Model\ReportingV3ConversionDetailsGet200ResponseNotes[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param \CyberSource\Model\ReportingV3ConversionDetailsGet200ResponseNotes[] $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


