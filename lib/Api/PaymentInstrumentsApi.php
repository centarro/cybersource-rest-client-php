<?php
/**
 * PaymentInstrumentsApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
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

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;

/**
 * PaymentInstrumentsApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentInstrumentsApi
{
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return PaymentInstrumentsApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet
     *
     * Retrieve all Payment Instruments associated with an Instrument Identifier
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of an Instrument Identifier. (required)
     * @param string $offset Starting Payment Instrument record in zero-based dataset that should be returned as the first object in the array. Default is 0. (optional)
     * @param string $limit The maximum number of Payment Instruments that can be returned in the array starting from the offset record in zero-based dataset. Default is 20, maximum is 100. (optional, default to 20)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return \CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200Response
     */
    public function tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet($profileId, $tokenId, $offset = null, $limit = '20')
    {
        list($response, $statusCode, $httpHeader) = $this->tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGetWithHttpInfo($profileId, $tokenId, $offset, $limit);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGetWithHttpInfo
     *
     * Retrieve all Payment Instruments associated with an Instrument Identifier
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of an Instrument Identifier. (required)
     * @param string $offset Starting Payment Instrument record in zero-based dataset that should be returned as the first object in the array. Default is 0. (optional)
     * @param string $limit The maximum number of Payment Instruments that can be returned in the array starting from the offset record in zero-based dataset. Default is 20, maximum is 100. (optional, default to 20)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGetWithHttpInfo($profileId, $tokenId, $offset = null, $limit = '20')
    {
        // verify the required parameter 'profileId' is set
        if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet');
        }
        if ((strlen($profileId) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentsApi.tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet, must be smaller than or equal to 36.');
        }
        if ((strlen($profileId) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentsApi.tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'tokenId' is set
        if ($tokenId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tokenId when calling tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet');
        }
        if ((strlen($tokenId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling PaymentInstrumentsApi.tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet, must be smaller than or equal to 32.');
        }
        if ((strlen($tokenId) < 16)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling PaymentInstrumentsApi.tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet, must be bigger than or equal to 16.');
        }

        if (!is_null($offset) && ($offset < 0)) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling PaymentInstrumentsApi.tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet, must be bigger than or equal to 0.');
        }

        if (!is_null($limit) && ($limit > 100)) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling PaymentInstrumentsApi.tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet, must be smaller than or equal to 100.');
        }
        if (!is_null($limit) && ($limit < 1)) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling PaymentInstrumentsApi.tmsV1InstrumentidentifiersTokenIdPaymentinstrumentsGet, must be bigger than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/tms/v1/instrumentidentifiers/{tokenId}/paymentinstruments";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($tokenId !== null) {
            $resourcePath = str_replace(
                "{" . "tokenId" . "}",
                $this->apiClient->getSerializer()->toPathValue($tokenId),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200Response',
                '/tms/v1/instrumentidentifiers/{tokenId}/paymentinstruments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\TmsV1InstrumentidentifiersPaymentinstrumentsGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation tmsV1PaymentinstrumentsPost
     *
     * Create a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param \CyberSource\Model\Body2 $body Please specify the customers payment details for card or bank account. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return \CyberSource\Model\TmsV1PaymentinstrumentsPost201Response
     */
    public function tmsV1PaymentinstrumentsPost($profileId, $body)
    {
        list($response, $statusCode, $httpHeader) = $this->tmsV1PaymentinstrumentsPostWithHttpInfo($profileId, $body);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation tmsV1PaymentinstrumentsPostWithHttpInfo
     *
     * Create a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param \CyberSource\Model\Body2 $body Please specify the customers payment details for card or bank account. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\TmsV1PaymentinstrumentsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function tmsV1PaymentinstrumentsPostWithHttpInfo($profileId, $body)
    {
        // verify the required parameter 'profileId' is set
        if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling tmsV1PaymentinstrumentsPost');
        }
        if ((strlen($profileId) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentsApi.tmsV1PaymentinstrumentsPost, must be smaller than or equal to 36.');
        }
        if ((strlen($profileId) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentsApi.tmsV1PaymentinstrumentsPost, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling tmsV1PaymentinstrumentsPost');
        }
        // parse inputs
        $resourcePath = "/tms/v1/paymentinstruments";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\TmsV1PaymentinstrumentsPost201Response',
                '/tms/v1/paymentinstruments'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\TmsV1PaymentinstrumentsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\TmsV1PaymentinstrumentsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation tmsV1PaymentinstrumentsTokenIdDelete
     *
     * Delete a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of a Payment Instrument. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return void
     */
    public function tmsV1PaymentinstrumentsTokenIdDelete($profileId, $tokenId)
    {
        list($response, $statusCode, $httpHeader) = $this->tmsV1PaymentinstrumentsTokenIdDeleteWithHttpInfo($profileId, $tokenId);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation tmsV1PaymentinstrumentsTokenIdDeleteWithHttpInfo
     *
     * Delete a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of a Payment Instrument. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function tmsV1PaymentinstrumentsTokenIdDeleteWithHttpInfo($profileId, $tokenId)
    {
        // verify the required parameter 'profileId' is set
        if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling tmsV1PaymentinstrumentsTokenIdDelete');
        }
        if ((strlen($profileId) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentsApi.tmsV1PaymentinstrumentsTokenIdDelete, must be smaller than or equal to 36.');
        }
        if ((strlen($profileId) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentsApi.tmsV1PaymentinstrumentsTokenIdDelete, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'tokenId' is set
        if ($tokenId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tokenId when calling tmsV1PaymentinstrumentsTokenIdDelete');
        }
        if ((strlen($tokenId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling PaymentInstrumentsApi.tmsV1PaymentinstrumentsTokenIdDelete, must be smaller than or equal to 32.');
        }
        if ((strlen($tokenId) < 16)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling PaymentInstrumentsApi.tmsV1PaymentinstrumentsTokenIdDelete, must be bigger than or equal to 16.');
        }

        // parse inputs
        $resourcePath = "/tms/v1/paymentinstruments/{tokenId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($tokenId !== null) {
            $resourcePath = str_replace(
                "{" . "tokenId" . "}",
                $this->apiClient->getSerializer()->toPathValue($tokenId),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/tms/v1/paymentinstruments/{tokenId}'
            );

            return [$response, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation tmsV1PaymentinstrumentsTokenIdGet
     *
     * Retrieve a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of a Payment Instrument. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return \CyberSource\Model\TmsV1PaymentinstrumentsGet200Response
     */
    public function tmsV1PaymentinstrumentsTokenIdGet($profileId, $tokenId)
    {
        list($response, $statusCode, $httpHeader) = $this->tmsV1PaymentinstrumentsTokenIdGetWithHttpInfo($profileId, $tokenId);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation tmsV1PaymentinstrumentsTokenIdGetWithHttpInfo
     *
     * Retrieve a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of a Payment Instrument. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\TmsV1PaymentinstrumentsGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function tmsV1PaymentinstrumentsTokenIdGetWithHttpInfo($profileId, $tokenId)
    {
        // verify the required parameter 'profileId' is set
        if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling tmsV1PaymentinstrumentsTokenIdGet');
        }
        if ((strlen($profileId) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentsApi.tmsV1PaymentinstrumentsTokenIdGet, must be smaller than or equal to 36.');
        }
        if ((strlen($profileId) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentsApi.tmsV1PaymentinstrumentsTokenIdGet, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'tokenId' is set
        if ($tokenId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tokenId when calling tmsV1PaymentinstrumentsTokenIdGet');
        }
        if ((strlen($tokenId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling PaymentInstrumentsApi.tmsV1PaymentinstrumentsTokenIdGet, must be smaller than or equal to 32.');
        }
        if ((strlen($tokenId) < 16)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling PaymentInstrumentsApi.tmsV1PaymentinstrumentsTokenIdGet, must be bigger than or equal to 16.');
        }

        // parse inputs
        $resourcePath = "/tms/v1/paymentinstruments/{tokenId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($tokenId !== null) {
            $resourcePath = str_replace(
                "{" . "tokenId" . "}",
                $this->apiClient->getSerializer()->toPathValue($tokenId),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\TmsV1PaymentinstrumentsGet200Response',
                '/tms/v1/paymentinstruments/{tokenId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\TmsV1PaymentinstrumentsGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\TmsV1PaymentinstrumentsGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation tmsV1PaymentinstrumentsTokenIdPatch
     *
     * Update a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of a Payment Instrument. (required)
     * @param \CyberSource\Model\Body3 $body Please specify the customers payment details. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return \CyberSource\Model\TmsV1PaymentinstrumentsGet200Response
     */
    public function tmsV1PaymentinstrumentsTokenIdPatch($profileId, $tokenId, $body)
    {
        list($response, $statusCode, $httpHeader) = $this->tmsV1PaymentinstrumentsTokenIdPatchWithHttpInfo($profileId, $tokenId, $body);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation tmsV1PaymentinstrumentsTokenIdPatchWithHttpInfo
     *
     * Update a Payment Instrument
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param string $tokenId The TokenId of a Payment Instrument. (required)
     * @param \CyberSource\Model\Body3 $body Please specify the customers payment details. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\TmsV1PaymentinstrumentsGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function tmsV1PaymentinstrumentsTokenIdPatchWithHttpInfo($profileId, $tokenId, $body)
    {
        // verify the required parameter 'profileId' is set
        if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling tmsV1PaymentinstrumentsTokenIdPatch');
        }
        if ((strlen($profileId) > 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentsApi.tmsV1PaymentinstrumentsTokenIdPatch, must be smaller than or equal to 36.');
        }
        if ((strlen($profileId) < 36)) {
            throw new \InvalidArgumentException('invalid length for "$profileId" when calling PaymentInstrumentsApi.tmsV1PaymentinstrumentsTokenIdPatch, must be bigger than or equal to 36.');
        }

        // verify the required parameter 'tokenId' is set
        if ($tokenId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $tokenId when calling tmsV1PaymentinstrumentsTokenIdPatch');
        }
        if ((strlen($tokenId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling PaymentInstrumentsApi.tmsV1PaymentinstrumentsTokenIdPatch, must be smaller than or equal to 32.');
        }
        if ((strlen($tokenId) < 16)) {
            throw new \InvalidArgumentException('invalid length for "$tokenId" when calling PaymentInstrumentsApi.tmsV1PaymentinstrumentsTokenIdPatch, must be bigger than or equal to 16.');
        }

        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling tmsV1PaymentinstrumentsTokenIdPatch');
        }
        // parse inputs
        $resourcePath = "/tms/v1/paymentinstruments/{tokenId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($tokenId !== null) {
            $resourcePath = str_replace(
                "{" . "tokenId" . "}",
                $this->apiClient->getSerializer()->toPathValue($tokenId),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\TmsV1PaymentinstrumentsGet200Response',
                '/tms/v1/paymentinstruments/{tokenId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\TmsV1PaymentinstrumentsGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\TmsV1PaymentinstrumentsGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4001[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
