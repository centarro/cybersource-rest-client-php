<?php
/**
 * Ptsv2paymentsProcessingInformationBankTransferOptions
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
 * Ptsv2paymentsProcessingInformationBankTransferOptions Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsProcessingInformationBankTransferOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_processingInformation_bankTransferOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'declineAvsFlags' => 'string',
        'secCode' => 'string',
        'terminalCity' => 'string',
        'terminalState' => 'string',
        'effectiveDate' => 'string',
        'partialPaymentId' => 'string',
        'customerMemo' => 'string',
        'paymentCategoryCode' => 'string',
        'settlementMethod' => 'string',
        'fraudScreeningLevel' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'declineAvsFlags' => null,
        'secCode' => null,
        'terminalCity' => null,
        'terminalState' => null,
        'effectiveDate' => null,
        'partialPaymentId' => null,
        'customerMemo' => null,
        'paymentCategoryCode' => null,
        'settlementMethod' => null,
        'fraudScreeningLevel' => null
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
        'declineAvsFlags' => 'declineAvsFlags',
        'secCode' => 'secCode',
        'terminalCity' => 'terminalCity',
        'terminalState' => 'terminalState',
        'effectiveDate' => 'effectiveDate',
        'partialPaymentId' => 'partialPaymentId',
        'customerMemo' => 'customerMemo',
        'paymentCategoryCode' => 'paymentCategoryCode',
        'settlementMethod' => 'settlementMethod',
        'fraudScreeningLevel' => 'fraudScreeningLevel'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'declineAvsFlags' => 'setDeclineAvsFlags',
        'secCode' => 'setSecCode',
        'terminalCity' => 'setTerminalCity',
        'terminalState' => 'setTerminalState',
        'effectiveDate' => 'setEffectiveDate',
        'partialPaymentId' => 'setPartialPaymentId',
        'customerMemo' => 'setCustomerMemo',
        'paymentCategoryCode' => 'setPaymentCategoryCode',
        'settlementMethod' => 'setSettlementMethod',
        'fraudScreeningLevel' => 'setFraudScreeningLevel'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'declineAvsFlags' => 'getDeclineAvsFlags',
        'secCode' => 'getSecCode',
        'terminalCity' => 'getTerminalCity',
        'terminalState' => 'getTerminalState',
        'effectiveDate' => 'getEffectiveDate',
        'partialPaymentId' => 'getPartialPaymentId',
        'customerMemo' => 'getCustomerMemo',
        'paymentCategoryCode' => 'getPaymentCategoryCode',
        'settlementMethod' => 'getSettlementMethod',
        'fraudScreeningLevel' => 'getFraudScreeningLevel'
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
        $this->container['declineAvsFlags'] = isset($data['declineAvsFlags']) ? $data['declineAvsFlags'] : null;
        $this->container['secCode'] = isset($data['secCode']) ? $data['secCode'] : null;
        $this->container['terminalCity'] = isset($data['terminalCity']) ? $data['terminalCity'] : null;
        $this->container['terminalState'] = isset($data['terminalState']) ? $data['terminalState'] : null;
        $this->container['effectiveDate'] = isset($data['effectiveDate']) ? $data['effectiveDate'] : null;
        $this->container['partialPaymentId'] = isset($data['partialPaymentId']) ? $data['partialPaymentId'] : null;
        $this->container['customerMemo'] = isset($data['customerMemo']) ? $data['customerMemo'] : null;
        $this->container['paymentCategoryCode'] = isset($data['paymentCategoryCode']) ? $data['paymentCategoryCode'] : null;
        $this->container['settlementMethod'] = isset($data['settlementMethod']) ? $data['settlementMethod'] : null;
        $this->container['fraudScreeningLevel'] = isset($data['fraudScreeningLevel']) ? $data['fraudScreeningLevel'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['declineAvsFlags']) && (strlen($this->container['declineAvsFlags']) > 15)) {
            $invalid_properties[] = "invalid value for 'declineAvsFlags', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['secCode']) && (strlen($this->container['secCode']) > 3)) {
            $invalid_properties[] = "invalid value for 'secCode', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['terminalCity']) && (strlen($this->container['terminalCity']) > 4)) {
            $invalid_properties[] = "invalid value for 'terminalCity', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['terminalState']) && (strlen($this->container['terminalState']) > 2)) {
            $invalid_properties[] = "invalid value for 'terminalState', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['effectiveDate']) && (strlen($this->container['effectiveDate']) > 8)) {
            $invalid_properties[] = "invalid value for 'effectiveDate', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['partialPaymentId']) && (strlen($this->container['partialPaymentId']) > 25)) {
            $invalid_properties[] = "invalid value for 'partialPaymentId', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['customerMemo']) && (strlen($this->container['customerMemo']) > 80)) {
            $invalid_properties[] = "invalid value for 'customerMemo', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['paymentCategoryCode']) && (strlen($this->container['paymentCategoryCode']) > 1)) {
            $invalid_properties[] = "invalid value for 'paymentCategoryCode', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['settlementMethod']) && (strlen($this->container['settlementMethod']) > 1)) {
            $invalid_properties[] = "invalid value for 'settlementMethod', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['fraudScreeningLevel']) && (strlen($this->container['fraudScreeningLevel']) > 1)) {
            $invalid_properties[] = "invalid value for 'fraudScreeningLevel', the character length must be smaller than or equal to 1.";
        }

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

        if (strlen($this->container['declineAvsFlags']) > 15) {
            return false;
        }
        if (strlen($this->container['secCode']) > 3) {
            return false;
        }
        if (strlen($this->container['terminalCity']) > 4) {
            return false;
        }
        if (strlen($this->container['terminalState']) > 2) {
            return false;
        }
        if (strlen($this->container['effectiveDate']) > 8) {
            return false;
        }
        if (strlen($this->container['partialPaymentId']) > 25) {
            return false;
        }
        if (strlen($this->container['customerMemo']) > 80) {
            return false;
        }
        if (strlen($this->container['paymentCategoryCode']) > 1) {
            return false;
        }
        if (strlen($this->container['settlementMethod']) > 1) {
            return false;
        }
        if (strlen($this->container['fraudScreeningLevel']) > 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets declineAvsFlags
     * @return string
     */
    public function getDeclineAvsFlags()
    {
        return $this->container['declineAvsFlags'];
    }

    /**
     * Sets declineAvsFlags
     * @param string $declineAvsFlags List of AVS flags that cause the request to be declined for AVS reasons. Use a space to separate the flags in the list. Important Make sure that you include the value N in the list if you want to receive declines for the AVS code N.
     * @return $this
     */
    public function setDeclineAvsFlags($declineAvsFlags)
    {
        if (!is_null($declineAvsFlags) && (strlen($declineAvsFlags) > 15)) {
            throw new \InvalidArgumentException('invalid length for $declineAvsFlags when calling Ptsv2paymentsProcessingInformationBankTransferOptions., must be smaller than or equal to 15.');
        }

        $this->container['declineAvsFlags'] = $declineAvsFlags;

        return $this;
    }

    /**
     * Gets secCode
     * @return string
     */
    public function getSecCode()
    {
        return $this->container['secCode'];
    }

    /**
     * Sets secCode
     * @param string $secCode Authorization method used for the transaction. See \"SEC Codes,\" page 89.  TeleCheck Accepts only the following values: - **PPD** - **TEL** - **WEB**
     * @return $this
     */
    public function setSecCode($secCode)
    {
        if (!is_null($secCode) && (strlen($secCode) > 3)) {
            throw new \InvalidArgumentException('invalid length for $secCode when calling Ptsv2paymentsProcessingInformationBankTransferOptions., must be smaller than or equal to 3.');
        }

        $this->container['secCode'] = $secCode;

        return $this;
    }

    /**
     * Gets terminalCity
     * @return string
     */
    public function getTerminalCity()
    {
        return $this->container['terminalCity'];
    }

    /**
     * Sets terminalCity
     * @param string $terminalCity City in which the terminal is located. If more than four alphanumeric characters are submitted, the transaction will be declined.  You cannot include any special characters.
     * @return $this
     */
    public function setTerminalCity($terminalCity)
    {
        if (!is_null($terminalCity) && (strlen($terminalCity) > 4)) {
            throw new \InvalidArgumentException('invalid length for $terminalCity when calling Ptsv2paymentsProcessingInformationBankTransferOptions., must be smaller than or equal to 4.');
        }

        $this->container['terminalCity'] = $terminalCity;

        return $this;
    }

    /**
     * Gets terminalState
     * @return string
     */
    public function getTerminalState()
    {
        return $this->container['terminalState'];
    }

    /**
     * Sets terminalState
     * @param string $terminalState State in which the terminal is located. If more than two alphanumeric characters are submitted, the transaction will be declined.  You cannot include any special characters.
     * @return $this
     */
    public function setTerminalState($terminalState)
    {
        if (!is_null($terminalState) && (strlen($terminalState) > 2)) {
            throw new \InvalidArgumentException('invalid length for $terminalState when calling Ptsv2paymentsProcessingInformationBankTransferOptions., must be smaller than or equal to 2.');
        }

        $this->container['terminalState'] = $terminalState;

        return $this;
    }

    /**
     * Gets effectiveDate
     * @return string
     */
    public function getEffectiveDate()
    {
        return $this->container['effectiveDate'];
    }

    /**
     * Sets effectiveDate
     * @param string $effectiveDate Effective date for the transaction. The effective date must be within 45 days of the current day. If you do not include this value, CyberSource sets the effective date to the next business day.  Format: `MMDDYYYY`  Supported only for the CyberSource ACH Service.
     * @return $this
     */
    public function setEffectiveDate($effectiveDate)
    {
        if (!is_null($effectiveDate) && (strlen($effectiveDate) > 8)) {
            throw new \InvalidArgumentException('invalid length for $effectiveDate when calling Ptsv2paymentsProcessingInformationBankTransferOptions., must be smaller than or equal to 8.');
        }

        $this->container['effectiveDate'] = $effectiveDate;

        return $this;
    }

    /**
     * Gets partialPaymentId
     * @return string
     */
    public function getPartialPaymentId()
    {
        return $this->container['partialPaymentId'];
    }

    /**
     * Sets partialPaymentId
     * @param string $partialPaymentId Identifier for a partial payment or partial credit.  The value for each debit request or credit request must be unique within the scope of the order. See \"Multiple Partial Credits,\" page 41.
     * @return $this
     */
    public function setPartialPaymentId($partialPaymentId)
    {
        if (!is_null($partialPaymentId) && (strlen($partialPaymentId) > 25)) {
            throw new \InvalidArgumentException('invalid length for $partialPaymentId when calling Ptsv2paymentsProcessingInformationBankTransferOptions., must be smaller than or equal to 25.');
        }

        $this->container['partialPaymentId'] = $partialPaymentId;

        return $this;
    }

    /**
     * Gets customerMemo
     * @return string
     */
    public function getCustomerMemo()
    {
        return $this->container['customerMemo'];
    }

    /**
     * Sets customerMemo
     * @param string $customerMemo Payment related information.  This information is included on the customer’s statement.
     * @return $this
     */
    public function setCustomerMemo($customerMemo)
    {
        if (!is_null($customerMemo) && (strlen($customerMemo) > 80)) {
            throw new \InvalidArgumentException('invalid length for $customerMemo when calling Ptsv2paymentsProcessingInformationBankTransferOptions., must be smaller than or equal to 80.');
        }

        $this->container['customerMemo'] = $customerMemo;

        return $this;
    }

    /**
     * Gets paymentCategoryCode
     * @return string
     */
    public function getPaymentCategoryCode()
    {
        return $this->container['paymentCategoryCode'];
    }

    /**
     * Sets paymentCategoryCode
     * @param string $paymentCategoryCode Flag that indicates whether to process the payment.  Use with deferred payments. See \"Deferred and Partial Payments,\" page 37.  Possible values: - **0**: Standard debit with immediate payment (default). - **1**: For deferred payments, indicates that this is a deferred payment and that you will send a debit request with `paymentCategoryCode = 2` in the future. - **2**: For deferred payments, indicates notification to initiate payment.  Chase Paymentech Solutions and TeleCheck Use for deferred and partial payments.  CyberSource ACH Service Not used.  RBS WorldPay Atlanta Not used.
     * @return $this
     */
    public function setPaymentCategoryCode($paymentCategoryCode)
    {
        if (!is_null($paymentCategoryCode) && (strlen($paymentCategoryCode) > 1)) {
            throw new \InvalidArgumentException('invalid length for $paymentCategoryCode when calling Ptsv2paymentsProcessingInformationBankTransferOptions., must be smaller than or equal to 1.');
        }

        $this->container['paymentCategoryCode'] = $paymentCategoryCode;

        return $this;
    }

    /**
     * Gets settlementMethod
     * @return string
     */
    public function getSettlementMethod()
    {
        return $this->container['settlementMethod'];
    }

    /**
     * Sets settlementMethod
     * @param string $settlementMethod Method used for settlement.  Possible values: - **A**: Automated Clearing House (default for credits and for transactions using Canadian dollars) - **F**: Facsimile draft (U.S. dollars only) - **B**: Best possible (U.S. dollars only) (default if the field has not already been configured for your merchant ID)  See \"Settlement Delivery Methods,\" page 44.
     * @return $this
     */
    public function setSettlementMethod($settlementMethod)
    {
        if (!is_null($settlementMethod) && (strlen($settlementMethod) > 1)) {
            throw new \InvalidArgumentException('invalid length for $settlementMethod when calling Ptsv2paymentsProcessingInformationBankTransferOptions., must be smaller than or equal to 1.');
        }

        $this->container['settlementMethod'] = $settlementMethod;

        return $this;
    }

    /**
     * Gets fraudScreeningLevel
     * @return string
     */
    public function getFraudScreeningLevel()
    {
        return $this->container['fraudScreeningLevel'];
    }

    /**
     * Sets fraudScreeningLevel
     * @param string $fraudScreeningLevel Level of fraud screening.  Possible values: - **1**: Validation — default if the field has not already been configured for your merchant ID - **2**: Verification  For a description of this feature and a list of supported processors, see \"Verification and Validation,\" page 24.
     * @return $this
     */
    public function setFraudScreeningLevel($fraudScreeningLevel)
    {
        if (!is_null($fraudScreeningLevel) && (strlen($fraudScreeningLevel) > 1)) {
            throw new \InvalidArgumentException('invalid length for $fraudScreeningLevel when calling Ptsv2paymentsProcessingInformationBankTransferOptions., must be smaller than or equal to 1.');
        }

        $this->container['fraudScreeningLevel'] = $fraudScreeningLevel;

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


