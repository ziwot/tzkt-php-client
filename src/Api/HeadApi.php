<?php
/**
 * HeadApi
 * PHP version 8.1
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TzKT API
 *
 * # Introduction    TzKT is the most widely used tool in Tezos that provides you with convenient and flexible access to the Tezos blockchain data, processed and indexed by its own indexer.   You can fetch all historical data via REST API, or subscribe for real-time data via WebSocket API. TzKT was built by the joint efforts of the entire Tezos community   to help developers build more services and dapps on top of Tezos.    TzKT Indexer and API are [open-source](https://github.com/baking-bad/tzkt), so don't be afraid to depend on the third-party service,  because you can always clone, build and run it yourself to have full control over all the components.    Feel free to contact us if you have any questions or feature requests.  Your feedback is much appreciated!    - Discord: https://discord.gg/aG8XKuwsQd  - Telegram: https://t.me/baking_bad_chat  - Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L  - Twitter: https://twitter.com/TezosBakingBad  - Email: hello@bakingbad.dev    And don't forget to star TzKT [on GitHub](https://github.com/baking-bad/tzkt) if you like it 😊    # Get Started    There are two API services provided for public use:  - **Free TzKT API** with free anonymous access;  - **TzKT Pro** with paid subscriptions with increased rate limits, off-chain data, extended support and business-level SLA.    You can find more details about differences between available tiers [here](https://tzkt.io/api).    ## Free TzKT API    Free-tier TzKT API is the best way to get started and explore available Tezos data and API functionality.  It doesn't require authorization and is free for everyone and for both commercial and non-commercial use.    > #### Note: attribution required  If you use free-tier TzKT API, you **must** mention it on your website or application by placing the label  \"Powered by TzKT API\", or \"Built with TzKT API\", or \"Data provided by TzKT API\" with a direct link to [tzkt.io](https://tzkt.io).    It's available for the following Tezos networks with the following base URLs:    - Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io))  - Ghostnet: `https://api.ghostnet.tzkt.io/` ([view docs](https://api.ghostnet.tzkt.io))  - Rionet: `https://api.rionet.tzkt.io/` ([view docs](https://api.rionet.tzkt.io))    ### Sending Requests    To send a request to Free TzKT API you need literally nothing. Just take the base URL of the particular network  (for example, Tezos mainnet: `https://api.tzkt.io`) and append the path of the particular endpoint  (for example, chain's head: `/v1/head`), that's pretty much it:     ```bash  curl https://api.tzkt.io/v1/head  ```    Read through this documentation to explore available endpoints, query parameters  (note, if you click on a query parameter, you will see available modes, such as `.eq`, `.in`, etc.)  and response models. If you have any questions, do not hesitate to ask for support, Tezos community has always been very friendly! 😉    ### Rate Limits    Please, refer to https://tzkt.io/api to check relevant rate limits.    If you exceed the limit, the API will respond with `HTTP 429` status code.    ## TzKT Pro    TzKT Pro is intended for professional use, for those who seek for extended capabilities, performance, reliability and business-level SLA.  TzKT Pro service is provided via paid subscriptions. Please, refer to [Pricing Plans](https://tzkt.io/api) to check available tiers.    It's available for the following Tezos networks with the following base URLs:    - Mainnet: `https://pro.tzkt.io/` ([view docs](https://api.tzkt.io))  - Testnets: *let us know if you need TzKT Pro for testnets*    ### Authorization    To access TzKT Pro you will need to authorize requests with your personal API key, that you will receive on your email after purchasing a subscription.  This can be done by adding the query string parameter `?apikey={your_key}` or by adding the HTTP header `apikey: {your_key}`.    Note that you can have multiple API keys within a single subscription.    Keep your API keys private, do not publish it anywhere and do not hardcode it, especially in public repositories.  If your key was compromised, just let us know and we will issue a new one.    Also note that passing the API key via HTTP headers is more secure, because in HTTPS headers are encrypted,  but query string is not, so the key can be unintentionally exposed to third parties.    ### Sending Requests    Sending a request with the API key passed as a query string parameter:    ```bash  curl https://pro.tzkt.io/v1/head?apikey={your_key}  ```    Sending a request with the API key passed via an HTTP header:    ```bash  curl https://pro.tzkt.io/v1/head \\      -H 'apikey: {your_key}'  ```    ### Rate Limits    Please, refer to https://tzkt.io/api to check relevant rate limits for different pricing plans.    Also, TzKT Pro provides you with the additional HTTP headers to show the allowed limits, number of available requests  and the time remaining (in seconds) until the quota is reset. Here's an example:    ```  RateLimit-Limit: 50  RateLimit-Remaining: 49  RateLimit-Reset: 1  ```    It also sends general information about your rate limits per second and per day:    ```  X-RateLimit-Limit-Second: 50  X-RateLimit-Remaining-Second: 49  X-RateLimit-Limit-Day: 3000000  X-RateLimit-Remaining-Day: 2994953  ```    If you exceed the limit, the API will respond with `HTTP 429` status code.
 *
 * The version of the OpenAPI document: 1.14.9
 * Contact: hello@bakingbad.dev
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Tzkt\Api;

use InvalidArgumentException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Promise\PromiseInterface;
use Tzkt\ApiException;
use Tzkt\Configuration;
use Tzkt\HeaderSelector;
use Tzkt\ObjectSerializer;

/**
 * HeadApi Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HeadApi
{
    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var Configuration
     */
    protected Configuration $config;

    /**
     * @var HeaderSelector
     */
    protected HeaderSelector $headerSelector;

    /**
     * @var int Host index
     */
    protected int $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'headGet' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Operation headGet
     *
     * Get indexer head
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\State
     */
    public function headGet(
        string $contentType = self::contentTypes['headGet'][0]
    ): \Tzkt\Model\State
    {
        list($response) = $this->headGetWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation headGetWithHttpInfo
     *
     * Get indexer head
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\State, HTTP status code, HTTP response headers (array of strings)
     */
    public function headGetWithHttpInfo(
        string $contentType = self::contentTypes['headGet'][0]
    ): array
    {
        $request = $this->headGetRequest($contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if (in_array('\Tzkt\Model\State', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\State' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\State', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Tzkt\Model\State';
            if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
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
                        '\Tzkt\Model\State',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation headGetAsync
     *
     * Get indexer head
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function headGetAsync(
        string $contentType = self::contentTypes['headGet'][0]
    ): PromiseInterface
    {
        return $this->headGetAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation headGetAsyncWithHttpInfo
     *
     * Get indexer head
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function headGetAsyncWithHttpInfo(
        string $contentType = self::contentTypes['headGet'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\State';
        $request = $this->headGetRequest($contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if (in_array($returnType, ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'headGet'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['headGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function headGetRequest(
        string $contentType = self::contentTypes['headGet'][0]
    ): Request
    {


        $resourcePath = '/v1/head';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
    protected function createHttpClientOption(): array
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
