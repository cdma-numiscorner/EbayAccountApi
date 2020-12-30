<?php
/**
 * PaymentsProgramApi
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

namespace OpenAPI\EbayAccountClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\EbayAccountClient\ApiException;
use OpenAPI\EbayAccountClient\Configuration;
use OpenAPI\EbayAccountClient\HeaderSelector;
use OpenAPI\EbayAccountClient\ObjectSerializer;

/**
 * PaymentsProgramApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\EbayAccountClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentsProgramApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getPaymentsProgram
     *
     * @param  string $marketplace_id This path parameter specifies the eBay marketplace of the payments program for which you want to retrieve the seller&#39;s status. (required)
     * @param  string $payments_program_type This path parameter specifies the payments program whose status is returned by the call. Currently the only supported payments program is EBAY_PAYMENTS. For details on the program, see Payments Terms of Use. (required)
     *
     * @throws \OpenAPI\EbayAccountClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\EbayAccountClient\Model\PaymentsProgramResponse
     */
    public function getPaymentsProgram($marketplace_id, $payments_program_type)
    {
        list($response) = $this->getPaymentsProgramWithHttpInfo($marketplace_id, $payments_program_type);
        return $response;
    }

    /**
     * Operation getPaymentsProgramWithHttpInfo
     *
     * @param  string $marketplace_id This path parameter specifies the eBay marketplace of the payments program for which you want to retrieve the seller&#39;s status. (required)
     * @param  string $payments_program_type This path parameter specifies the payments program whose status is returned by the call. Currently the only supported payments program is EBAY_PAYMENTS. For details on the program, see Payments Terms of Use. (required)
     *
     * @throws \OpenAPI\EbayAccountClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\EbayAccountClient\Model\PaymentsProgramResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentsProgramWithHttpInfo($marketplace_id, $payments_program_type)
    {
        $request = $this->getPaymentsProgramRequest($marketplace_id, $payments_program_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\EbayAccountClient\Model\PaymentsProgramResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\EbayAccountClient\Model\PaymentsProgramResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\EbayAccountClient\Model\PaymentsProgramResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\EbayAccountClient\Model\PaymentsProgramResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPaymentsProgramAsync
     *
     * 
     *
     * @param  string $marketplace_id This path parameter specifies the eBay marketplace of the payments program for which you want to retrieve the seller&#39;s status. (required)
     * @param  string $payments_program_type This path parameter specifies the payments program whose status is returned by the call. Currently the only supported payments program is EBAY_PAYMENTS. For details on the program, see Payments Terms of Use. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentsProgramAsync($marketplace_id, $payments_program_type)
    {
        return $this->getPaymentsProgramAsyncWithHttpInfo($marketplace_id, $payments_program_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPaymentsProgramAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $marketplace_id This path parameter specifies the eBay marketplace of the payments program for which you want to retrieve the seller&#39;s status. (required)
     * @param  string $payments_program_type This path parameter specifies the payments program whose status is returned by the call. Currently the only supported payments program is EBAY_PAYMENTS. For details on the program, see Payments Terms of Use. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentsProgramAsyncWithHttpInfo($marketplace_id, $payments_program_type)
    {
        $returnType = '\OpenAPI\EbayAccountClient\Model\PaymentsProgramResponse';
        $request = $this->getPaymentsProgramRequest($marketplace_id, $payments_program_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPaymentsProgram'
     *
     * @param  string $marketplace_id This path parameter specifies the eBay marketplace of the payments program for which you want to retrieve the seller&#39;s status. (required)
     * @param  string $payments_program_type This path parameter specifies the payments program whose status is returned by the call. Currently the only supported payments program is EBAY_PAYMENTS. For details on the program, see Payments Terms of Use. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentsProgramRequest($marketplace_id, $payments_program_type)
    {
        // verify the required parameter 'marketplace_id' is set
        if ($marketplace_id === null || (is_array($marketplace_id) && count($marketplace_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplace_id when calling getPaymentsProgram'
            );
        }
        // verify the required parameter 'payments_program_type' is set
        if ($payments_program_type === null || (is_array($payments_program_type) && count($payments_program_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payments_program_type when calling getPaymentsProgram'
            );
        }

        $resourcePath = '/payments_program/{marketplace_id}/{payments_program_type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($marketplace_id !== null) {
            $resourcePath = str_replace(
                '{' . 'marketplace_id' . '}',
                ObjectSerializer::toPathValue($marketplace_id),
                $resourcePath
            );
        }
        // path params
        if ($payments_program_type !== null) {
            $resourcePath = str_replace(
                '{' . 'payments_program_type' . '}',
                ObjectSerializer::toPathValue($payments_program_type),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
