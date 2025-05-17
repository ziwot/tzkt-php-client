<?php
/**
 * ContractsApi
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
 * ContractsApi Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContractsApi
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
        'contractsBuildEntrypointParametersGET' => [
            'application/json',
        ],
        'contractsBuildEntrypointParametersPOST' => [
            'application/json',
        ],
        'contractsGet' => [
            'application/json',
        ],
        'contractsGetBigMapByName' => [
            'application/json',
        ],
        'contractsGetBigMapByNameKeys' => [
            'application/json',
        ],
        'contractsGetBigMaps' => [
            'application/json',
        ],
        'contractsGetByAddress' => [
            'application/json',
        ],
        'contractsGetCode' => [
            'application/json',
        ],
        'contractsGetContractViewByName' => [
            'application/json',
        ],
        'contractsGetContractViews' => [
            'application/json',
        ],
        'contractsGetCount' => [
            'application/json',
        ],
        'contractsGetEntrypointByName' => [
            'application/json',
        ],
        'contractsGetEntrypoints' => [
            'application/json',
        ],
        'contractsGetHistoricalKeys' => [
            'application/json',
        ],
        'contractsGetInterface' => [
            'application/json',
        ],
        'contractsGetKey' => [
            'application/json',
        ],
        'contractsGetKey2' => [
            'application/json',
        ],
        'contractsGetKeyUpdates' => [
            'application/json',
        ],
        'contractsGetRawStorage' => [
            'application/json',
        ],
        'contractsGetRawStorageHistory' => [
            'application/json',
        ],
        'contractsGetRawStorageSchema' => [
            'application/json',
        ],
        'contractsGetSame' => [
            'application/json',
        ],
        'contractsGetSimilar' => [
            'application/json',
        ],
        'contractsGetStorage' => [
            'application/json',
        ],
        'contractsGetStorageHistory' => [
            'application/json',
        ],
        'contractsGetStorageSchema' => [
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
     * Operation contractsBuildEntrypointParametersGET
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  string|null $value Json parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersGET'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function contractsBuildEntrypointParametersGET(
        string $address,
        string $name,
        ?string $value = null,
        string $contentType = self::contentTypes['contractsBuildEntrypointParametersGET'][0]
    ): \SplFileObject
    {
        list($response) = $this->contractsBuildEntrypointParametersGETWithHttpInfo($address, $name, $value, $contentType);
        return $response;
    }

    /**
     * Operation contractsBuildEntrypointParametersGETWithHttpInfo
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  string|null $value Json parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersGET'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsBuildEntrypointParametersGETWithHttpInfo(
        string $address,
        string $name,
        ?string $value = null,
        string $contentType = self::contentTypes['contractsBuildEntrypointParametersGET'][0]
    ): array
    {
        $request = $this->contractsBuildEntrypointParametersGETRequest($address, $name, $value, $contentType);

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
                    if (in_array('\SplFileObject', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SplFileObject' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
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

            $returnType = '\SplFileObject';
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
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsBuildEntrypointParametersGETAsync
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  string|null $value Json parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersGET'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsBuildEntrypointParametersGETAsync(
        string $address,
        string $name,
        ?string $value = null,
        string $contentType = self::contentTypes['contractsBuildEntrypointParametersGET'][0]
    ): PromiseInterface
    {
        return $this->contractsBuildEntrypointParametersGETAsyncWithHttpInfo($address, $name, $value, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsBuildEntrypointParametersGETAsyncWithHttpInfo
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  string|null $value Json parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersGET'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsBuildEntrypointParametersGETAsyncWithHttpInfo(
        string $address,
        string $name,
        ?string $value = null,
        string $contentType = self::contentTypes['contractsBuildEntrypointParametersGET'][0]
    ): PromiseInterface
    {
        $returnType = '\SplFileObject';
        $request = $this->contractsBuildEntrypointParametersGETRequest($address, $name, $value, $contentType);

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
     * Create request for operation 'contractsBuildEntrypointParametersGET'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  string|null $value Json parameters (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersGET'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsBuildEntrypointParametersGETRequest(
        string $address,
        string $name,
        ?string $value = null,
        string $contentType = self::contentTypes['contractsBuildEntrypointParametersGET'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsBuildEntrypointParametersGET'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling contractsBuildEntrypointParametersGET'
            );
        }



        $resourcePath = '/v1/contracts/{address}/entrypoints/{name}/build';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $value,
            'value', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/octet-stream', ],
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
     * Operation contractsBuildEntrypointParametersPOST
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  mixed $body Json parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersPOST'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function contractsBuildEntrypointParametersPOST(
        string $address,
        string $name,
        mixed $body,
        string $contentType = self::contentTypes['contractsBuildEntrypointParametersPOST'][0]
    ): \SplFileObject
    {
        list($response) = $this->contractsBuildEntrypointParametersPOSTWithHttpInfo($address, $name, $body, $contentType);
        return $response;
    }

    /**
     * Operation contractsBuildEntrypointParametersPOSTWithHttpInfo
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  mixed $body Json parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersPOST'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsBuildEntrypointParametersPOSTWithHttpInfo(
        string $address,
        string $name,
        mixed $body,
        string $contentType = self::contentTypes['contractsBuildEntrypointParametersPOST'][0]
    ): array
    {
        $request = $this->contractsBuildEntrypointParametersPOSTRequest($address, $name, $body, $contentType);

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
                    if (in_array('\SplFileObject', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SplFileObject' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
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

            $returnType = '\SplFileObject';
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
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsBuildEntrypointParametersPOSTAsync
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  mixed $body Json parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersPOST'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsBuildEntrypointParametersPOSTAsync(
        string $address,
        string $name,
        mixed $body,
        string $contentType = self::contentTypes['contractsBuildEntrypointParametersPOST'][0]
    ): PromiseInterface
    {
        return $this->contractsBuildEntrypointParametersPOSTAsyncWithHttpInfo($address, $name, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsBuildEntrypointParametersPOSTAsyncWithHttpInfo
     *
     * Build entrypoint parameters
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  mixed $body Json parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersPOST'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsBuildEntrypointParametersPOSTAsyncWithHttpInfo(
        string $address,
        string $name,
        mixed $body,
        string $contentType = self::contentTypes['contractsBuildEntrypointParametersPOST'][0]
    ): PromiseInterface
    {
        $returnType = '\SplFileObject';
        $request = $this->contractsBuildEntrypointParametersPOSTRequest($address, $name, $body, $contentType);

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
     * Create request for operation 'contractsBuildEntrypointParametersPOST'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Entrypoint name (required)
     * @param  mixed $body Json parameters (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsBuildEntrypointParametersPOST'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsBuildEntrypointParametersPOSTRequest(
        string $address,
        string $name,
        mixed $body,
        string $contentType = self::contentTypes['contractsBuildEntrypointParametersPOST'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsBuildEntrypointParametersPOST'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling contractsBuildEntrypointParametersPOST'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling contractsBuildEntrypointParametersPOST'
            );
        }


        $resourcePath = '/v1/contracts/{address}/entrypoints/{name}/build';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/octet-stream', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation contractsGet
     *
     * Get contracts
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\ContractsGetTzipsParameter|null $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage into response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\Contract[]
     */
    public function contractsGet(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetKindParameter $kind = null,
        ?\Tzkt\Model\ContractsGetTzipsParameter $tzips = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $manager = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $delegate = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $code_hash = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGet'][0]
    ): array
    {
        list($response) = $this->contractsGetWithHttpInfo($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $sort, $offset, $limit, $select, $include_storage, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetWithHttpInfo
     *
     * Get contracts
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\ContractsGetTzipsParameter|null $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage into response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\Contract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetKindParameter $kind = null,
        ?\Tzkt\Model\ContractsGetTzipsParameter $tzips = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $manager = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $delegate = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $code_hash = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGet'][0]
    ): array
    {
        $request = $this->contractsGetRequest($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $sort, $offset, $limit, $select, $include_storage, $contentType);

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
                    if (in_array('\Tzkt\Model\Contract[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Contract[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Contract[]', []),
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

            $returnType = '\Tzkt\Model\Contract[]';
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
                        '\Tzkt\Model\Contract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetAsync
     *
     * Get contracts
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\ContractsGetTzipsParameter|null $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage into response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetAsync(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetKindParameter $kind = null,
        ?\Tzkt\Model\ContractsGetTzipsParameter $tzips = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $manager = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $delegate = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $code_hash = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGet'][0]
    ): PromiseInterface
    {
        return $this->contractsGetAsyncWithHttpInfo($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $sort, $offset, $limit, $select, $include_storage, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetAsyncWithHttpInfo
     *
     * Get contracts
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\ContractsGetTzipsParameter|null $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage into response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetKindParameter $kind = null,
        ?\Tzkt\Model\ContractsGetTzipsParameter $tzips = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $manager = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $delegate = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $code_hash = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGet'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\Contract[]';
        $request = $this->contractsGetRequest($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $sort, $offset, $limit, $select, $include_storage, $contentType);

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
     * Create request for operation 'contractsGet'
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\ContractsGetTzipsParameter|null $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage into response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetRequest(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetKindParameter $kind = null,
        ?\Tzkt\Model\ContractsGetTzipsParameter $tzips = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $manager = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $delegate = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $code_hash = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGet'][0]
    ): Request
    {

















        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGet, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGet, must be bigger than or equal to 0.');
        }
        



        $resourcePath = '/v1/contracts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $address,
            'address', // param base name
            '\Tzkt\Model\AddressParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $kind,
            'kind', // param base name
            '\Tzkt\Model\ContractKindParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $tzips,
            'tzips', // param base name
            '\Tzkt\Model\ContractTagsParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $balance,
            'balance', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $creator,
            'creator', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $manager,
            'manager', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $delegate,
            'delegate', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_activity,
            'firstActivity', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_activity_time,
            'firstActivityTime', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_activity,
            'lastActivity', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_activity_time,
            'lastActivityTime', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type_hash,
            'typeHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $code_hash,
            'codeHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            '\Tzkt\Model\SortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            '\Tzkt\Model\OffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            '\Tzkt\Model\SelectionParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_storage,
            'includeStorage', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




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
     * Operation contractsGetBigMapByName
     *
     * Get bigmap by name
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByName'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMap
     */
    public function contractsGetBigMapByName(
        string $address,
        string $name,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMapByName'][0]
    ): \Tzkt\Model\BigMap
    {
        list($response) = $this->contractsGetBigMapByNameWithHttpInfo($address, $name, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetBigMapByNameWithHttpInfo
     *
     * Get bigmap by name
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByName'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMap, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetBigMapByNameWithHttpInfo(
        string $address,
        string $name,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMapByName'][0]
    ): array
    {
        $request = $this->contractsGetBigMapByNameRequest($address, $name, $micheline, $contentType);

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
                    if (in_array('\Tzkt\Model\BigMap', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\BigMap' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\BigMap', []),
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

            $returnType = '\Tzkt\Model\BigMap';
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
                        '\Tzkt\Model\BigMap',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetBigMapByNameAsync
     *
     * Get bigmap by name
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByName'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetBigMapByNameAsync(
        string $address,
        string $name,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMapByName'][0]
    ): PromiseInterface
    {
        return $this->contractsGetBigMapByNameAsyncWithHttpInfo($address, $name, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetBigMapByNameAsyncWithHttpInfo
     *
     * Get bigmap by name
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByName'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetBigMapByNameAsyncWithHttpInfo(
        string $address,
        string $name,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMapByName'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMap';
        $request = $this->contractsGetBigMapByNameRequest($address, $name, $micheline, $contentType);

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
     * Create request for operation 'contractsGetBigMapByName'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByName'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetBigMapByNameRequest(
        string $address,
        string $name,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMapByName'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetBigMapByName'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetBigMapByName'
            );
        }



        $resourcePath = '/v1/contracts/{address}/bigmaps/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            '\Tzkt\Model\MichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }


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
     * Operation contractsGetBigMapByNameKeys
     *
     * Get bigmap keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmap keys by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByNameKeys'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMapKey[]
     */
    public function contractsGetBigMapByNameKeys(
        string $address,
        string $name,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMapByNameKeys'][0]
    ): array
    {
        list($response) = $this->contractsGetBigMapByNameKeysWithHttpInfo($address, $name, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetBigMapByNameKeysWithHttpInfo
     *
     * Get bigmap keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmap keys by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByNameKeys'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMapKey[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetBigMapByNameKeysWithHttpInfo(
        string $address,
        string $name,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMapByNameKeys'][0]
    ): array
    {
        $request = $this->contractsGetBigMapByNameKeysRequest($address, $name, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType);

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
                    if (in_array('\Tzkt\Model\BigMapKey[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\BigMapKey[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\BigMapKey[]', []),
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

            $returnType = '\Tzkt\Model\BigMapKey[]';
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
                        '\Tzkt\Model\BigMapKey[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetBigMapByNameKeysAsync
     *
     * Get bigmap keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmap keys by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByNameKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetBigMapByNameKeysAsync(
        string $address,
        string $name,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMapByNameKeys'][0]
    ): PromiseInterface
    {
        return $this->contractsGetBigMapByNameKeysAsyncWithHttpInfo($address, $name, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetBigMapByNameKeysAsyncWithHttpInfo
     *
     * Get bigmap keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmap keys by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByNameKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetBigMapByNameKeysAsyncWithHttpInfo(
        string $address,
        string $name,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMapByNameKeys'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMapKey[]';
        $request = $this->contractsGetBigMapByNameKeysRequest($address, $name, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType);

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
     * Create request for operation 'contractsGetBigMapByNameKeys'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmap keys by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMapByNameKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetBigMapByNameKeysRequest(
        string $address,
        string $name,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMapByNameKeys'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetBigMapByNameKeys'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetBigMapByNameKeys'
            );
        }








        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetBigMapByNameKeys, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetBigMapByNameKeys, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/contracts/{address}/bigmaps/{name}/keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $active,
            'active', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $key,
            'key', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $value,
            'value', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_level,
            'lastLevel', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            '\Tzkt\Model\SelectParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            '\Tzkt\Model\SortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            '\Tzkt\Model\OffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            '\Tzkt\Model\MichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }


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
     * Operation contractsGetBigMaps
     *
     * Get contract bigmaps
     *
     * @param  string $address Contract address (required)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters bigmaps tags (&#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object.             If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMaps'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMap[]
     */
    public function contractsGetBigMaps(
        string $address,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMaps'][0]
    ): array
    {
        list($response) = $this->contractsGetBigMapsWithHttpInfo($address, $tags, $select, $sort, $offset, $limit, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetBigMapsWithHttpInfo
     *
     * Get contract bigmaps
     *
     * @param  string $address Contract address (required)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters bigmaps tags (&#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object.             If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMaps'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMap[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetBigMapsWithHttpInfo(
        string $address,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMaps'][0]
    ): array
    {
        $request = $this->contractsGetBigMapsRequest($address, $tags, $select, $sort, $offset, $limit, $micheline, $contentType);

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
                    if (in_array('\Tzkt\Model\BigMap[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\BigMap[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\BigMap[]', []),
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

            $returnType = '\Tzkt\Model\BigMap[]';
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
                        '\Tzkt\Model\BigMap[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetBigMapsAsync
     *
     * Get contract bigmaps
     *
     * @param  string $address Contract address (required)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters bigmaps tags (&#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object.             If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMaps'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetBigMapsAsync(
        string $address,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMaps'][0]
    ): PromiseInterface
    {
        return $this->contractsGetBigMapsAsyncWithHttpInfo($address, $tags, $select, $sort, $offset, $limit, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetBigMapsAsyncWithHttpInfo
     *
     * Get contract bigmaps
     *
     * @param  string $address Contract address (required)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters bigmaps tags (&#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object.             If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMaps'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetBigMapsAsyncWithHttpInfo(
        string $address,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMaps'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMap[]';
        $request = $this->contractsGetBigMapsRequest($address, $tags, $select, $sort, $offset, $limit, $micheline, $contentType);

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
     * Create request for operation 'contractsGetBigMaps'
     *
     * @param  string $address Contract address (required)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters bigmaps tags (&#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object.             If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetBigMaps'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetBigMapsRequest(
        string $address,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetBigMaps'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetBigMaps'
            );
        }





        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetBigMaps, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetBigMaps, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/contracts/{address}/bigmaps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $tags,
            'tags', // param base name
            '\Tzkt\Model\BigMapTagsParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            '\Tzkt\Model\SelectParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            '\Tzkt\Model\SortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            '\Tzkt\Model\OffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            '\Tzkt\Model\MichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation contractsGetByAddress
     *
     * Get contract by address
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing to switch to new functionality smoothly. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetByAddress'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\Contract
     */
    public function contractsGetByAddress(
        string $address,
        ?bool $legacy = true,
        string $contentType = self::contentTypes['contractsGetByAddress'][0]
    ): \Tzkt\Model\Contract
    {
        list($response) = $this->contractsGetByAddressWithHttpInfo($address, $legacy, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetByAddressWithHttpInfo
     *
     * Get contract by address
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing to switch to new functionality smoothly. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetByAddress'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\Contract, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetByAddressWithHttpInfo(
        string $address,
        ?bool $legacy = true,
        string $contentType = self::contentTypes['contractsGetByAddress'][0]
    ): array
    {
        $request = $this->contractsGetByAddressRequest($address, $legacy, $contentType);

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
                    if (in_array('\Tzkt\Model\Contract', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Contract' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Contract', []),
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

            $returnType = '\Tzkt\Model\Contract';
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
                        '\Tzkt\Model\Contract',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetByAddressAsync
     *
     * Get contract by address
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing to switch to new functionality smoothly. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetByAddress'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetByAddressAsync(
        string $address,
        ?bool $legacy = true,
        string $contentType = self::contentTypes['contractsGetByAddress'][0]
    ): PromiseInterface
    {
        return $this->contractsGetByAddressAsyncWithHttpInfo($address, $legacy, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetByAddressAsyncWithHttpInfo
     *
     * Get contract by address
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing to switch to new functionality smoothly. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetByAddress'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetByAddressAsyncWithHttpInfo(
        string $address,
        ?bool $legacy = true,
        string $contentType = self::contentTypes['contractsGetByAddress'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\Contract';
        $request = $this->contractsGetByAddressRequest($address, $legacy, $contentType);

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
     * Create request for operation 'contractsGetByAddress'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $legacy If &#x60;true&#x60; (by default), the &#x60;metadata&#x60; field will contain tzkt profile info, or TZIP-16 metadata otherwise. This is a part of a deprecation mechanism, allowing to switch to new functionality smoothly. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetByAddress'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetByAddressRequest(
        string $address,
        ?bool $legacy = true,
        string $contentType = self::contentTypes['contractsGetByAddress'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetByAddress'
            );
        }



        $resourcePath = '/v1/contracts/{address}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $legacy,
            'legacy', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation contractsGetCode
     *
     * Get contract code
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  int|null $level Level at which contract code should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  int|null $format Code format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCode'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function contractsGetCode(
        string $address,
        ?int $level = 0,
        ?int $format = 0,
        string $contentType = self::contentTypes['contractsGetCode'][0]
    ): \SplFileObject
    {
        list($response) = $this->contractsGetCodeWithHttpInfo($address, $level, $format, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetCodeWithHttpInfo
     *
     * Get contract code
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  int|null $level Level at which contract code should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  int|null $format Code format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCode'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetCodeWithHttpInfo(
        string $address,
        ?int $level = 0,
        ?int $format = 0,
        string $contentType = self::contentTypes['contractsGetCode'][0]
    ): array
    {
        $request = $this->contractsGetCodeRequest($address, $level, $format, $contentType);

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
                    if (in_array('\SplFileObject', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SplFileObject' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
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

            $returnType = '\SplFileObject';
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
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetCodeAsync
     *
     * Get contract code
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  int|null $level Level at which contract code should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  int|null $format Code format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCode'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetCodeAsync(
        string $address,
        ?int $level = 0,
        ?int $format = 0,
        string $contentType = self::contentTypes['contractsGetCode'][0]
    ): PromiseInterface
    {
        return $this->contractsGetCodeAsyncWithHttpInfo($address, $level, $format, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetCodeAsyncWithHttpInfo
     *
     * Get contract code
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  int|null $level Level at which contract code should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  int|null $format Code format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCode'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetCodeAsyncWithHttpInfo(
        string $address,
        ?int $level = 0,
        ?int $format = 0,
        string $contentType = self::contentTypes['contractsGetCode'][0]
    ): PromiseInterface
    {
        $returnType = '\SplFileObject';
        $request = $this->contractsGetCodeRequest($address, $level, $format, $contentType);

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
     * Create request for operation 'contractsGetCode'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  int|null $level Level at which contract code should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  int|null $format Code format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCode'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetCodeRequest(
        string $address,
        ?int $level = 0,
        ?int $format = 0,
        string $contentType = self::contentTypes['contractsGetCode'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetCode'
            );
        }


        if ($format !== null && $format > 2) {
            throw new InvalidArgumentException('invalid value for "$format" when calling ContractsApi.contractsGetCode, must be smaller than or equal to 2.');
        }
        if ($format !== null && $format < 0) {
            throw new InvalidArgumentException('invalid value for "$format" when calling ContractsApi.contractsGetCode, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/contracts/{address}/code';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $level,
            'level', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $format,
            'format', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/octet-stream', ],
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
     * Operation contractsGetContractViewByName
     *
     * Get view by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name View name (required)
     * @param  bool|null $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViewByName'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\ContractView
     */
    public function contractsGetContractViewByName(
        string $address,
        string $name,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetContractViewByName'][0]
    ): \Tzkt\Model\ContractView
    {
        list($response) = $this->contractsGetContractViewByNameWithHttpInfo($address, $name, $json, $micheline, $michelson, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetContractViewByNameWithHttpInfo
     *
     * Get view by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name View name (required)
     * @param  bool|null $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViewByName'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\ContractView, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetContractViewByNameWithHttpInfo(
        string $address,
        string $name,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetContractViewByName'][0]
    ): array
    {
        $request = $this->contractsGetContractViewByNameRequest($address, $name, $json, $micheline, $michelson, $contentType);

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
                    if (in_array('\Tzkt\Model\ContractView', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\ContractView' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\ContractView', []),
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

            $returnType = '\Tzkt\Model\ContractView';
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
                        '\Tzkt\Model\ContractView',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetContractViewByNameAsync
     *
     * Get view by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name View name (required)
     * @param  bool|null $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViewByName'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetContractViewByNameAsync(
        string $address,
        string $name,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetContractViewByName'][0]
    ): PromiseInterface
    {
        return $this->contractsGetContractViewByNameAsyncWithHttpInfo($address, $name, $json, $micheline, $michelson, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetContractViewByNameAsyncWithHttpInfo
     *
     * Get view by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name View name (required)
     * @param  bool|null $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViewByName'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetContractViewByNameAsyncWithHttpInfo(
        string $address,
        string $name,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetContractViewByName'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\ContractView';
        $request = $this->contractsGetContractViewByNameRequest($address, $name, $json, $micheline, $michelson, $contentType);

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
     * Create request for operation 'contractsGetContractViewByName'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name View name (required)
     * @param  bool|null $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViewByName'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetContractViewByNameRequest(
        string $address,
        string $name,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetContractViewByName'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetContractViewByName'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetContractViewByName'
            );
        }





        $resourcePath = '/v1/contracts/{address}/views/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $json,
            'json', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $michelson,
            'michelson', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }


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
     * Operation contractsGetContractViews
     *
     * Get contract views
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViews'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\ContractView[]
     */
    public function contractsGetContractViews(
        string $address,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetContractViews'][0]
    ): array
    {
        list($response) = $this->contractsGetContractViewsWithHttpInfo($address, $json, $micheline, $michelson, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetContractViewsWithHttpInfo
     *
     * Get contract views
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViews'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\ContractView[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetContractViewsWithHttpInfo(
        string $address,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetContractViews'][0]
    ): array
    {
        $request = $this->contractsGetContractViewsRequest($address, $json, $micheline, $michelson, $contentType);

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
                    if (in_array('\Tzkt\Model\ContractView[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\ContractView[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\ContractView[]', []),
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

            $returnType = '\Tzkt\Model\ContractView[]';
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
                        '\Tzkt\Model\ContractView[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetContractViewsAsync
     *
     * Get contract views
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViews'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetContractViewsAsync(
        string $address,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetContractViews'][0]
    ): PromiseInterface
    {
        return $this->contractsGetContractViewsAsyncWithHttpInfo($address, $json, $micheline, $michelson, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetContractViewsAsyncWithHttpInfo
     *
     * Get contract views
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViews'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetContractViewsAsyncWithHttpInfo(
        string $address,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetContractViews'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\ContractView[]';
        $request = $this->contractsGetContractViewsRequest($address, $json, $micheline, $michelson, $contentType);

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
     * Create request for operation 'contractsGetContractViews'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $json Include parameter and return types in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameter and return types in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameter and return types in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetContractViews'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetContractViewsRequest(
        string $address,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetContractViews'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetContractViews'
            );
        }





        $resourcePath = '/v1/contracts/{address}/views';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $json,
            'json', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $michelson,
            'michelson', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation contractsGetCount
     *
     * Get contracts count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\ContractsGetTzipsParameter|null $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function contractsGetCount(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetKindParameter $kind = null,
        ?\Tzkt\Model\ContractsGetTzipsParameter $tzips = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $manager = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $delegate = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $code_hash = null,
        string $contentType = self::contentTypes['contractsGetCount'][0]
    ): int
    {
        list($response) = $this->contractsGetCountWithHttpInfo($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetCountWithHttpInfo
     *
     * Get contracts count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\ContractsGetTzipsParameter|null $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetKindParameter $kind = null,
        ?\Tzkt\Model\ContractsGetTzipsParameter $tzips = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $manager = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $delegate = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $code_hash = null,
        string $contentType = self::contentTypes['contractsGetCount'][0]
    ): array
    {
        $request = $this->contractsGetCountRequest($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $contentType);

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
                    if (in_array('int', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('int' !== 'string') {
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
                        ObjectSerializer::deserialize($content, 'int', []),
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

            $returnType = 'int';
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
                        'int',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetCountAsync
     *
     * Get contracts count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\ContractsGetTzipsParameter|null $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetCountAsync(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetKindParameter $kind = null,
        ?\Tzkt\Model\ContractsGetTzipsParameter $tzips = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $manager = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $delegate = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $code_hash = null,
        string $contentType = self::contentTypes['contractsGetCount'][0]
    ): PromiseInterface
    {
        return $this->contractsGetCountAsyncWithHttpInfo($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetCountAsyncWithHttpInfo
     *
     * Get contracts count
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\ContractsGetTzipsParameter|null $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetKindParameter $kind = null,
        ?\Tzkt\Model\ContractsGetTzipsParameter $tzips = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $manager = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $delegate = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $code_hash = null,
        string $contentType = self::contentTypes['contractsGetCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->contractsGetCountRequest($id, $address, $kind, $tzips, $balance, $creator, $manager, $delegate, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $type_hash, $code_hash, $contentType);

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
     * Create request for operation 'contractsGetCount'
     *
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetKindParameter|null $kind Filter by kind (&#x60;delegator_contract&#x60;, &#x60;smart_contract&#x60;, or &#x60;asset&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\ContractsGetTzipsParameter|null $tzips Filter by tzips (&#x60;fa1&#x60;, &#x60;fa12&#x60;, or &#x60;fa2&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetBalanceParameter|null $balance Filter by balance.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $manager Filter by manager.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $delegate Filter by delegate.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp (ISO 8601) of the block where the contract was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp (ISO 8601) of the block where the contract was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $type_hash Filter by 32-bit hash of contract parameter and storage types (helpful for searching similar contracts).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $code_hash Filter by 32-bit hash of contract code (helpful for searching same contracts).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetCountRequest(
        ?\Tzkt\Model\AccountsGetBalanceParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetKindParameter $kind = null,
        ?\Tzkt\Model\ContractsGetTzipsParameter $tzips = null,
        ?\Tzkt\Model\AccountsGetBalanceParameter $balance = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $manager = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $delegate = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $type_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $code_hash = null,
        string $contentType = self::contentTypes['contractsGetCount'][0]
    ): Request
    {
















        $resourcePath = '/v1/contracts/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $address,
            'address', // param base name
            '\Tzkt\Model\AddressParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $kind,
            'kind', // param base name
            '\Tzkt\Model\ContractKindParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $tzips,
            'tzips', // param base name
            '\Tzkt\Model\ContractTagsParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $balance,
            'balance', // param base name
            '\Tzkt\Model\Int64Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $creator,
            'creator', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $manager,
            'manager', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $delegate,
            'delegate', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_activity,
            'firstActivity', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_activity_time,
            'firstActivityTime', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_activity,
            'lastActivity', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_activity_time,
            'lastActivityTime', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type_hash,
            'typeHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $code_hash,
            'codeHash', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




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
     * Operation contractsGetEntrypointByName
     *
     * Get entrypoint by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name Entrypoint name (required)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypointByName'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\Entrypoint
     */
    public function contractsGetEntrypointByName(
        string $address,
        string $name,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetEntrypointByName'][0]
    ): \Tzkt\Model\Entrypoint
    {
        list($response) = $this->contractsGetEntrypointByNameWithHttpInfo($address, $name, $json, $micheline, $michelson, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetEntrypointByNameWithHttpInfo
     *
     * Get entrypoint by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name Entrypoint name (required)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypointByName'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\Entrypoint, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetEntrypointByNameWithHttpInfo(
        string $address,
        string $name,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetEntrypointByName'][0]
    ): array
    {
        $request = $this->contractsGetEntrypointByNameRequest($address, $name, $json, $micheline, $michelson, $contentType);

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
                    if (in_array('\Tzkt\Model\Entrypoint', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Entrypoint' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Entrypoint', []),
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

            $returnType = '\Tzkt\Model\Entrypoint';
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
                        '\Tzkt\Model\Entrypoint',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetEntrypointByNameAsync
     *
     * Get entrypoint by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name Entrypoint name (required)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypointByName'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetEntrypointByNameAsync(
        string $address,
        string $name,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetEntrypointByName'][0]
    ): PromiseInterface
    {
        return $this->contractsGetEntrypointByNameAsyncWithHttpInfo($address, $name, $json, $micheline, $michelson, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetEntrypointByNameAsyncWithHttpInfo
     *
     * Get entrypoint by name
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name Entrypoint name (required)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypointByName'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetEntrypointByNameAsyncWithHttpInfo(
        string $address,
        string $name,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetEntrypointByName'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\Entrypoint';
        $request = $this->contractsGetEntrypointByNameRequest($address, $name, $json, $micheline, $michelson, $contentType);

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
     * Create request for operation 'contractsGetEntrypointByName'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  string $name Entrypoint name (required)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypointByName'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetEntrypointByNameRequest(
        string $address,
        string $name,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetEntrypointByName'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetEntrypointByName'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetEntrypointByName'
            );
        }





        $resourcePath = '/v1/contracts/{address}/entrypoints/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $json,
            'json', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $michelson,
            'michelson', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }


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
     * Operation contractsGetEntrypoints
     *
     * Get contract entrypoints
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\Entrypoint[]
     */
    public function contractsGetEntrypoints(
        string $address,
        ?bool $all = false,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetEntrypoints'][0]
    ): array
    {
        list($response) = $this->contractsGetEntrypointsWithHttpInfo($address, $all, $json, $micheline, $michelson, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetEntrypointsWithHttpInfo
     *
     * Get contract entrypoints
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\Entrypoint[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetEntrypointsWithHttpInfo(
        string $address,
        ?bool $all = false,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetEntrypoints'][0]
    ): array
    {
        $request = $this->contractsGetEntrypointsRequest($address, $all, $json, $micheline, $michelson, $contentType);

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
                    if (in_array('\Tzkt\Model\Entrypoint[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Entrypoint[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Entrypoint[]', []),
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

            $returnType = '\Tzkt\Model\Entrypoint[]';
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
                        '\Tzkt\Model\Entrypoint[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetEntrypointsAsync
     *
     * Get contract entrypoints
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetEntrypointsAsync(
        string $address,
        ?bool $all = false,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetEntrypoints'][0]
    ): PromiseInterface
    {
        return $this->contractsGetEntrypointsAsyncWithHttpInfo($address, $all, $json, $micheline, $michelson, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetEntrypointsAsyncWithHttpInfo
     *
     * Get contract entrypoints
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetEntrypointsAsyncWithHttpInfo(
        string $address,
        ?bool $all = false,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetEntrypoints'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\Entrypoint[]';
        $request = $this->contractsGetEntrypointsRequest($address, $all, $json, $micheline, $michelson, $contentType);

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
     * Create request for operation 'contractsGetEntrypoints'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  bool|null $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetEntrypointsRequest(
        string $address,
        ?bool $all = false,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['contractsGetEntrypoints'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetEntrypoints'
            );
        }






        $resourcePath = '/v1/contracts/{address}/entrypoints';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $all,
            'all', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $json,
            'json', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $michelson,
            'michelson', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation contractsGetHistoricalKeys
     *
     * Get historical keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMapKeyHistorical[]
     */
    public function contractsGetHistoricalKeys(
        string $address,
        string $name,
        int $level,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetHistoricalKeys'][0]
    ): array
    {
        list($response) = $this->contractsGetHistoricalKeysWithHttpInfo($address, $name, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetHistoricalKeysWithHttpInfo
     *
     * Get historical keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMapKeyHistorical[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetHistoricalKeysWithHttpInfo(
        string $address,
        string $name,
        int $level,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetHistoricalKeys'][0]
    ): array
    {
        $request = $this->contractsGetHistoricalKeysRequest($address, $name, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline, $contentType);

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
                    if (in_array('\Tzkt\Model\BigMapKeyHistorical[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\BigMapKeyHistorical[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\BigMapKeyHistorical[]', []),
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

            $returnType = '\Tzkt\Model\BigMapKeyHistorical[]';
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
                        '\Tzkt\Model\BigMapKeyHistorical[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetHistoricalKeysAsync
     *
     * Get historical keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetHistoricalKeysAsync(
        string $address,
        string $name,
        int $level,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetHistoricalKeys'][0]
    ): PromiseInterface
    {
        return $this->contractsGetHistoricalKeysAsyncWithHttpInfo($address, $name, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetHistoricalKeysAsyncWithHttpInfo
     *
     * Get historical keys
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetHistoricalKeysAsyncWithHttpInfo(
        string $address,
        string $name,
        int $level,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetHistoricalKeys'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMapKeyHistorical[]';
        $request = $this->contractsGetHistoricalKeysRequest($address, $name, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline, $contentType);

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
     * Create request for operation 'contractsGetHistoricalKeys'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetHistoricalKeysRequest(
        string $address,
        string $name,
        int $level,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetHistoricalKeys'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetHistoricalKeys'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetHistoricalKeys'
            );
        }

        // verify the required parameter 'level' is set
        if ($level === null || (is_array($level) && count($level) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $level when calling contractsGetHistoricalKeys'
            );
        }







        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetHistoricalKeys, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetHistoricalKeys, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/contracts/{address}/bigmaps/{name}/historical_keys/{level}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $active,
            'active', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $key,
            'key', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $value,
            'value', // param base name
            '\Tzkt\Model\JsonParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            '\Tzkt\Model\SelectParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            '\Tzkt\Model\SortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            '\Tzkt\Model\OffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            '\Tzkt\Model\MichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }
        // path params
        if ($level !== null) {
            $resourcePath = str_replace(
                '{' . 'level' . '}',
                ObjectSerializer::toPathValue($level),
                $resourcePath
            );
        }


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
     * Operation contractsGetInterface
     *
     * Get JSON Schema [2020-12] interface for the contract
     *
     * @param  string $address Contract address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetInterface'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\ContractInterface
     */
    public function contractsGetInterface(
        string $address,
        string $contentType = self::contentTypes['contractsGetInterface'][0]
    ): \Tzkt\Model\ContractInterface
    {
        list($response) = $this->contractsGetInterfaceWithHttpInfo($address, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetInterfaceWithHttpInfo
     *
     * Get JSON Schema [2020-12] interface for the contract
     *
     * @param  string $address Contract address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetInterface'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\ContractInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetInterfaceWithHttpInfo(
        string $address,
        string $contentType = self::contentTypes['contractsGetInterface'][0]
    ): array
    {
        $request = $this->contractsGetInterfaceRequest($address, $contentType);

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
                    if (in_array('\Tzkt\Model\ContractInterface', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\ContractInterface' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\ContractInterface', []),
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

            $returnType = '\Tzkt\Model\ContractInterface';
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
                        '\Tzkt\Model\ContractInterface',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetInterfaceAsync
     *
     * Get JSON Schema [2020-12] interface for the contract
     *
     * @param  string $address Contract address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetInterface'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetInterfaceAsync(
        string $address,
        string $contentType = self::contentTypes['contractsGetInterface'][0]
    ): PromiseInterface
    {
        return $this->contractsGetInterfaceAsyncWithHttpInfo($address, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetInterfaceAsyncWithHttpInfo
     *
     * Get JSON Schema [2020-12] interface for the contract
     *
     * @param  string $address Contract address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetInterface'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetInterfaceAsyncWithHttpInfo(
        string $address,
        string $contentType = self::contentTypes['contractsGetInterface'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\ContractInterface';
        $request = $this->contractsGetInterfaceRequest($address, $contentType);

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
     * Create request for operation 'contractsGetInterface'
     *
     * @param  string $address Contract address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetInterface'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetInterfaceRequest(
        string $address,
        string $contentType = self::contentTypes['contractsGetInterface'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetInterface'
            );
        }


        $resourcePath = '/v1/contracts/{address}/interface';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation contractsGetKey
     *
     * Get bigmap key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMapKey
     */
    public function contractsGetKey(
        string $address,
        string $name,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKey'][0]
    ): \Tzkt\Model\BigMapKey
    {
        list($response) = $this->contractsGetKeyWithHttpInfo($address, $name, $key, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetKeyWithHttpInfo
     *
     * Get bigmap key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMapKey, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetKeyWithHttpInfo(
        string $address,
        string $name,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKey'][0]
    ): array
    {
        $request = $this->contractsGetKeyRequest($address, $name, $key, $micheline, $contentType);

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
                    if (in_array('\Tzkt\Model\BigMapKey', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\BigMapKey' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\BigMapKey', []),
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

            $returnType = '\Tzkt\Model\BigMapKey';
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
                        '\Tzkt\Model\BigMapKey',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetKeyAsync
     *
     * Get bigmap key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetKeyAsync(
        string $address,
        string $name,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKey'][0]
    ): PromiseInterface
    {
        return $this->contractsGetKeyAsyncWithHttpInfo($address, $name, $key, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetKeyAsyncWithHttpInfo
     *
     * Get bigmap key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetKeyAsyncWithHttpInfo(
        string $address,
        string $name,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKey'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMapKey';
        $request = $this->contractsGetKeyRequest($address, $name, $key, $micheline, $contentType);

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
     * Create request for operation 'contractsGetKey'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetKeyRequest(
        string $address,
        string $name,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKey'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetKey'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetKey'
            );
        }

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $key when calling contractsGetKey'
            );
        }



        $resourcePath = '/v1/contracts/{address}/bigmaps/{name}/keys/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            '\Tzkt\Model\MichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }
        // path params
        if ($key !== null) {
            $resourcePath = str_replace(
                '{' . 'key' . '}',
                ObjectSerializer::toPathValue($key),
                $resourcePath
            );
        }


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
     * Operation contractsGetKey2
     *
     * Get historical key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey2'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMapKeyHistorical
     */
    public function contractsGetKey2(
        string $address,
        string $name,
        int $level,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKey2'][0]
    ): \Tzkt\Model\BigMapKeyHistorical
    {
        list($response) = $this->contractsGetKey2WithHttpInfo($address, $name, $level, $key, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetKey2WithHttpInfo
     *
     * Get historical key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey2'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMapKeyHistorical, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetKey2WithHttpInfo(
        string $address,
        string $name,
        int $level,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKey2'][0]
    ): array
    {
        $request = $this->contractsGetKey2Request($address, $name, $level, $key, $micheline, $contentType);

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
                    if (in_array('\Tzkt\Model\BigMapKeyHistorical', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\BigMapKeyHistorical' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\BigMapKeyHistorical', []),
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

            $returnType = '\Tzkt\Model\BigMapKeyHistorical';
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
                        '\Tzkt\Model\BigMapKeyHistorical',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetKey2Async
     *
     * Get historical key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey2'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetKey2Async(
        string $address,
        string $name,
        int $level,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKey2'][0]
    ): PromiseInterface
    {
        return $this->contractsGetKey2AsyncWithHttpInfo($address, $name, $level, $key, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetKey2AsyncWithHttpInfo
     *
     * Get historical key
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey2'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetKey2AsyncWithHttpInfo(
        string $address,
        string $name,
        int $level,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKey2'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMapKeyHistorical';
        $request = $this->contractsGetKey2Request($address, $name, $level, $key, $micheline, $contentType);

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
     * Create request for operation 'contractsGetKey2'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKey2'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetKey2Request(
        string $address,
        string $name,
        int $level,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKey2'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetKey2'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetKey2'
            );
        }

        // verify the required parameter 'level' is set
        if ($level === null || (is_array($level) && count($level) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $level when calling contractsGetKey2'
            );
        }

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $key when calling contractsGetKey2'
            );
        }



        $resourcePath = '/v1/contracts/{address}/bigmaps/{name}/historical_keys/{level}/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            '\Tzkt\Model\MichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }
        // path params
        if ($level !== null) {
            $resourcePath = str_replace(
                '{' . 'level' . '}',
                ObjectSerializer::toPathValue($level),
                $resourcePath
            );
        }
        // path params
        if ($key !== null) {
            $resourcePath = str_replace(
                '{' . 'key' . '}',
                ObjectSerializer::toPathValue($key),
                $resourcePath
            );
        }


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
     * Operation contractsGetKeyUpdates
     *
     * Get bigmap key updates
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMapKeyUpdate[]
     */
    public function contractsGetKeyUpdates(
        string $address,
        string $name,
        string $key,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKeyUpdates'][0]
    ): array
    {
        list($response) = $this->contractsGetKeyUpdatesWithHttpInfo($address, $name, $key, $sort, $offset, $limit, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetKeyUpdatesWithHttpInfo
     *
     * Get bigmap key updates
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMapKeyUpdate[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetKeyUpdatesWithHttpInfo(
        string $address,
        string $name,
        string $key,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKeyUpdates'][0]
    ): array
    {
        $request = $this->contractsGetKeyUpdatesRequest($address, $name, $key, $sort, $offset, $limit, $micheline, $contentType);

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
                    if (in_array('\Tzkt\Model\BigMapKeyUpdate[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\BigMapKeyUpdate[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\BigMapKeyUpdate[]', []),
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

            $returnType = '\Tzkt\Model\BigMapKeyUpdate[]';
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
                        '\Tzkt\Model\BigMapKeyUpdate[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetKeyUpdatesAsync
     *
     * Get bigmap key updates
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetKeyUpdatesAsync(
        string $address,
        string $name,
        string $key,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKeyUpdates'][0]
    ): PromiseInterface
    {
        return $this->contractsGetKeyUpdatesAsyncWithHttpInfo($address, $name, $key, $sort, $offset, $limit, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetKeyUpdatesAsyncWithHttpInfo
     *
     * Get bigmap key updates
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetKeyUpdatesAsyncWithHttpInfo(
        string $address,
        string $name,
        string $key,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKeyUpdates'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMapKeyUpdate[]';
        $request = $this->contractsGetKeyUpdatesRequest($address, $name, $key, $sort, $offset, $limit, $micheline, $contentType);

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
     * Create request for operation 'contractsGetKeyUpdates'
     *
     * @param  string $address Contract address (required)
     * @param  string $name Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetKeyUpdatesRequest(
        string $address,
        string $name,
        string $key,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['contractsGetKeyUpdates'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetKeyUpdates'
            );
        }

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling contractsGetKeyUpdates'
            );
        }

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $key when calling contractsGetKeyUpdates'
            );
        }



        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetKeyUpdates, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetKeyUpdates, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/contracts/{address}/bigmaps/{name}/keys/{key}/updates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            '\Tzkt\Model\SortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            '\Tzkt\Model\OffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $micheline,
            'micheline', // param base name
            '\Tzkt\Model\MichelineFormat', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }
        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }
        // path params
        if ($key !== null) {
            $resourcePath = str_replace(
                '{' . 'key' . '}',
                ObjectSerializer::toPathValue($key),
                $resourcePath
            );
        }


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
     * Operation contractsGetRawStorage
     *
     * Get raw contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorage'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\IMicheline
     */
    public function contractsGetRawStorage(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetRawStorage'][0]
    ): \Tzkt\Model\IMicheline
    {
        list($response) = $this->contractsGetRawStorageWithHttpInfo($address, $level, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetRawStorageWithHttpInfo
     *
     * Get raw contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorage'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\IMicheline, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetRawStorageWithHttpInfo(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetRawStorage'][0]
    ): array
    {
        $request = $this->contractsGetRawStorageRequest($address, $level, $contentType);

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
                    if (in_array('\Tzkt\Model\IMicheline', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\IMicheline' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\IMicheline', []),
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

            $returnType = '\Tzkt\Model\IMicheline';
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
                        '\Tzkt\Model\IMicheline',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetRawStorageAsync
     *
     * Get raw contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorage'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetRawStorageAsync(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetRawStorage'][0]
    ): PromiseInterface
    {
        return $this->contractsGetRawStorageAsyncWithHttpInfo($address, $level, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetRawStorageAsyncWithHttpInfo
     *
     * Get raw contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorage'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetRawStorageAsyncWithHttpInfo(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetRawStorage'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\IMicheline';
        $request = $this->contractsGetRawStorageRequest($address, $level, $contentType);

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
     * Create request for operation 'contractsGetRawStorage'
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorage'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetRawStorageRequest(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetRawStorage'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetRawStorage'
            );
        }



        $resourcePath = '/v1/contracts/{address}/storage/raw';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $level,
            'level', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation contractsGetRawStorageHistory
     *
     * Get raw contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int|null $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageHistory'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\StorageRecord[]
     */
    public function contractsGetRawStorageHistory(
        string $address,
        ?int $last_id = 0,
        ?int $limit = 10,
        string $contentType = self::contentTypes['contractsGetRawStorageHistory'][0]
    ): array
    {
        list($response) = $this->contractsGetRawStorageHistoryWithHttpInfo($address, $last_id, $limit, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetRawStorageHistoryWithHttpInfo
     *
     * Get raw contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int|null $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageHistory'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\StorageRecord[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetRawStorageHistoryWithHttpInfo(
        string $address,
        ?int $last_id = 0,
        ?int $limit = 10,
        string $contentType = self::contentTypes['contractsGetRawStorageHistory'][0]
    ): array
    {
        $request = $this->contractsGetRawStorageHistoryRequest($address, $last_id, $limit, $contentType);

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
                    if (in_array('\Tzkt\Model\StorageRecord[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\StorageRecord[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\StorageRecord[]', []),
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

            $returnType = '\Tzkt\Model\StorageRecord[]';
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
                        '\Tzkt\Model\StorageRecord[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetRawStorageHistoryAsync
     *
     * Get raw contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int|null $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageHistory'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetRawStorageHistoryAsync(
        string $address,
        ?int $last_id = 0,
        ?int $limit = 10,
        string $contentType = self::contentTypes['contractsGetRawStorageHistory'][0]
    ): PromiseInterface
    {
        return $this->contractsGetRawStorageHistoryAsyncWithHttpInfo($address, $last_id, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetRawStorageHistoryAsyncWithHttpInfo
     *
     * Get raw contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int|null $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageHistory'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetRawStorageHistoryAsyncWithHttpInfo(
        string $address,
        ?int $last_id = 0,
        ?int $limit = 10,
        string $contentType = self::contentTypes['contractsGetRawStorageHistory'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\StorageRecord[]';
        $request = $this->contractsGetRawStorageHistoryRequest($address, $last_id, $limit, $contentType);

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
     * Create request for operation 'contractsGetRawStorageHistory'
     *
     * @param  string $address Contract address (required)
     * @param  int|null $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageHistory'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetRawStorageHistoryRequest(
        string $address,
        ?int $last_id = 0,
        ?int $limit = 10,
        string $contentType = self::contentTypes['contractsGetRawStorageHistory'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetRawStorageHistory'
            );
        }


        if ($limit !== null && $limit > 1000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetRawStorageHistory, must be smaller than or equal to 1000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetRawStorageHistory, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/contracts/{address}/storage/raw/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_id,
            'lastId', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation contractsGetRawStorageSchema
     *
     * Get raw contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageSchema'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\IMicheline
     */
    public function contractsGetRawStorageSchema(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetRawStorageSchema'][0]
    ): \Tzkt\Model\IMicheline
    {
        list($response) = $this->contractsGetRawStorageSchemaWithHttpInfo($address, $level, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetRawStorageSchemaWithHttpInfo
     *
     * Get raw contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageSchema'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\IMicheline, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetRawStorageSchemaWithHttpInfo(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetRawStorageSchema'][0]
    ): array
    {
        $request = $this->contractsGetRawStorageSchemaRequest($address, $level, $contentType);

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
                    if (in_array('\Tzkt\Model\IMicheline', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\IMicheline' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\IMicheline', []),
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

            $returnType = '\Tzkt\Model\IMicheline';
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
                        '\Tzkt\Model\IMicheline',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetRawStorageSchemaAsync
     *
     * Get raw contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageSchema'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetRawStorageSchemaAsync(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetRawStorageSchema'][0]
    ): PromiseInterface
    {
        return $this->contractsGetRawStorageSchemaAsyncWithHttpInfo($address, $level, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetRawStorageSchemaAsyncWithHttpInfo
     *
     * Get raw contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageSchema'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetRawStorageSchemaAsyncWithHttpInfo(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetRawStorageSchema'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\IMicheline';
        $request = $this->contractsGetRawStorageSchemaRequest($address, $level, $contentType);

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
     * Create request for operation 'contractsGetRawStorageSchema'
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetRawStorageSchema'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetRawStorageSchemaRequest(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetRawStorageSchema'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetRawStorageSchema'
            );
        }



        $resourcePath = '/v1/contracts/{address}/storage/raw/schema';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $level,
            'level', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation contractsGetSame
     *
     * Get same contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSame'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\Contract[]
     */
    public function contractsGetSame(
        string $address,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGetSame'][0]
    ): array
    {
        list($response) = $this->contractsGetSameWithHttpInfo($address, $sort, $offset, $limit, $select, $include_storage, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetSameWithHttpInfo
     *
     * Get same contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSame'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\Contract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetSameWithHttpInfo(
        string $address,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGetSame'][0]
    ): array
    {
        $request = $this->contractsGetSameRequest($address, $sort, $offset, $limit, $select, $include_storage, $contentType);

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
                    if (in_array('\Tzkt\Model\Contract[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Contract[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Contract[]', []),
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

            $returnType = '\Tzkt\Model\Contract[]';
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
                        '\Tzkt\Model\Contract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetSameAsync
     *
     * Get same contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSame'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetSameAsync(
        string $address,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGetSame'][0]
    ): PromiseInterface
    {
        return $this->contractsGetSameAsyncWithHttpInfo($address, $sort, $offset, $limit, $select, $include_storage, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetSameAsyncWithHttpInfo
     *
     * Get same contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSame'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetSameAsyncWithHttpInfo(
        string $address,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGetSame'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\Contract[]';
        $request = $this->contractsGetSameRequest($address, $sort, $offset, $limit, $select, $include_storage, $contentType);

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
     * Create request for operation 'contractsGetSame'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSame'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetSameRequest(
        string $address,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGetSame'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetSame'
            );
        }



        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetSame, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetSame, must be bigger than or equal to 0.');
        }
        



        $resourcePath = '/v1/contracts/{address}/same';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            '\Tzkt\Model\SortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            '\Tzkt\Model\OffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            '\Tzkt\Model\SelectionParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_storage,
            'includeStorage', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation contractsGetSimilar
     *
     * Get similar contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSimilar'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\Contract[]
     */
    public function contractsGetSimilar(
        string $address,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGetSimilar'][0]
    ): array
    {
        list($response) = $this->contractsGetSimilarWithHttpInfo($address, $sort, $offset, $limit, $select, $include_storage, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetSimilarWithHttpInfo
     *
     * Get similar contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSimilar'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\Contract[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetSimilarWithHttpInfo(
        string $address,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGetSimilar'][0]
    ): array
    {
        $request = $this->contractsGetSimilarRequest($address, $sort, $offset, $limit, $select, $include_storage, $contentType);

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
                    if (in_array('\Tzkt\Model\Contract[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Contract[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Contract[]', []),
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

            $returnType = '\Tzkt\Model\Contract[]';
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
                        '\Tzkt\Model\Contract[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetSimilarAsync
     *
     * Get similar contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSimilar'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetSimilarAsync(
        string $address,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGetSimilar'][0]
    ): PromiseInterface
    {
        return $this->contractsGetSimilarAsyncWithHttpInfo($address, $sort, $offset, $limit, $select, $include_storage, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetSimilarAsyncWithHttpInfo
     *
     * Get similar contracts
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSimilar'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetSimilarAsyncWithHttpInfo(
        string $address,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGetSimilar'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\Contract[]';
        $request = $this->contractsGetSimilarRequest($address, $sort, $offset, $limit, $select, $include_storage, $contentType);

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
     * Create request for operation 'contractsGetSimilar'
     *
     * @param  string $address Contract address (starting with KT) (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  bool|null $include_storage Specifies whether to include contract storage value in response. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetSimilar'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetSimilarRequest(
        string $address,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?bool $include_storage = false,
        string $contentType = self::contentTypes['contractsGetSimilar'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetSimilar'
            );
        }



        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetSimilar, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetSimilar, must be bigger than or equal to 0.');
        }
        



        $resourcePath = '/v1/contracts/{address}/similar';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            '\Tzkt\Model\SortParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            '\Tzkt\Model\OffsetParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $select,
            'select', // param base name
            '\Tzkt\Model\SelectionParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_storage,
            'includeStorage', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation contractsGetStorage
     *
     * Get contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string|null $path Path in the JSON value (point-separated list of field names, e.g. &#x60;path&#x3D;settings.refund_time&#x60; to return (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorage'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function contractsGetStorage(
        string $address,
        ?int $level = 0,
        ?string $path = null,
        string $contentType = self::contentTypes['contractsGetStorage'][0]
    ): \SplFileObject
    {
        list($response) = $this->contractsGetStorageWithHttpInfo($address, $level, $path, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetStorageWithHttpInfo
     *
     * Get contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string|null $path Path in the JSON value (point-separated list of field names, e.g. &#x60;path&#x3D;settings.refund_time&#x60; to return (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorage'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetStorageWithHttpInfo(
        string $address,
        ?int $level = 0,
        ?string $path = null,
        string $contentType = self::contentTypes['contractsGetStorage'][0]
    ): array
    {
        $request = $this->contractsGetStorageRequest($address, $level, $path, $contentType);

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
                    if (in_array('\SplFileObject', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SplFileObject' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
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

            $returnType = '\SplFileObject';
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
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetStorageAsync
     *
     * Get contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string|null $path Path in the JSON value (point-separated list of field names, e.g. &#x60;path&#x3D;settings.refund_time&#x60; to return (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorage'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetStorageAsync(
        string $address,
        ?int $level = 0,
        ?string $path = null,
        string $contentType = self::contentTypes['contractsGetStorage'][0]
    ): PromiseInterface
    {
        return $this->contractsGetStorageAsyncWithHttpInfo($address, $level, $path, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetStorageAsyncWithHttpInfo
     *
     * Get contract storage
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string|null $path Path in the JSON value (point-separated list of field names, e.g. &#x60;path&#x3D;settings.refund_time&#x60; to return (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorage'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetStorageAsyncWithHttpInfo(
        string $address,
        ?int $level = 0,
        ?string $path = null,
        string $contentType = self::contentTypes['contractsGetStorage'][0]
    ): PromiseInterface
    {
        $returnType = '\SplFileObject';
        $request = $this->contractsGetStorageRequest($address, $level, $path, $contentType);

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
     * Create request for operation 'contractsGetStorage'
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. (optional, default to 0)
     * @param  string|null $path Path in the JSON value (point-separated list of field names, e.g. &#x60;path&#x3D;settings.refund_time&#x60; to return (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorage'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetStorageRequest(
        string $address,
        ?int $level = 0,
        ?string $path = null,
        string $contentType = self::contentTypes['contractsGetStorage'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetStorage'
            );
        }




        $resourcePath = '/v1/contracts/{address}/storage';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $level,
            'level', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $path,
            'path', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/octet-stream', ],
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
     * Operation contractsGetStorageHistory
     *
     * Get contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int|null $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageHistory'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\StorageRecord[]
     */
    public function contractsGetStorageHistory(
        string $address,
        ?int $last_id = 0,
        ?int $limit = 10,
        string $contentType = self::contentTypes['contractsGetStorageHistory'][0]
    ): array
    {
        list($response) = $this->contractsGetStorageHistoryWithHttpInfo($address, $last_id, $limit, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetStorageHistoryWithHttpInfo
     *
     * Get contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int|null $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageHistory'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\StorageRecord[], HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetStorageHistoryWithHttpInfo(
        string $address,
        ?int $last_id = 0,
        ?int $limit = 10,
        string $contentType = self::contentTypes['contractsGetStorageHistory'][0]
    ): array
    {
        $request = $this->contractsGetStorageHistoryRequest($address, $last_id, $limit, $contentType);

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
                    if (in_array('\Tzkt\Model\StorageRecord[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\StorageRecord[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\StorageRecord[]', []),
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

            $returnType = '\Tzkt\Model\StorageRecord[]';
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
                        '\Tzkt\Model\StorageRecord[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetStorageHistoryAsync
     *
     * Get contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int|null $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageHistory'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetStorageHistoryAsync(
        string $address,
        ?int $last_id = 0,
        ?int $limit = 10,
        string $contentType = self::contentTypes['contractsGetStorageHistory'][0]
    ): PromiseInterface
    {
        return $this->contractsGetStorageHistoryAsyncWithHttpInfo($address, $last_id, $limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetStorageHistoryAsyncWithHttpInfo
     *
     * Get contract storage history
     *
     * @param  string $address Contract address (required)
     * @param  int|null $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageHistory'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetStorageHistoryAsyncWithHttpInfo(
        string $address,
        ?int $last_id = 0,
        ?int $limit = 10,
        string $contentType = self::contentTypes['contractsGetStorageHistory'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\StorageRecord[]';
        $request = $this->contractsGetStorageHistoryRequest($address, $last_id, $limit, $contentType);

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
     * Create request for operation 'contractsGetStorageHistory'
     *
     * @param  string $address Contract address (required)
     * @param  int|null $last_id Id of the last item received (for pagination) (optional, default to 0)
     * @param  int|null $limit Maximum number of items to return (optional, default to 10)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageHistory'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetStorageHistoryRequest(
        string $address,
        ?int $last_id = 0,
        ?int $limit = 10,
        string $contentType = self::contentTypes['contractsGetStorageHistory'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetStorageHistory'
            );
        }


        if ($limit !== null && $limit > 1000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetStorageHistory, must be smaller than or equal to 1000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ContractsApi.contractsGetStorageHistory, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/contracts/{address}/storage/history';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $last_id,
            'lastId', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


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
     * Operation contractsGetStorageSchema
     *
     * Get contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageSchema'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \SplFileObject
     */
    public function contractsGetStorageSchema(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetStorageSchema'][0]
    ): \SplFileObject
    {
        list($response) = $this->contractsGetStorageSchemaWithHttpInfo($address, $level, $contentType);
        return $response;
    }

    /**
     * Operation contractsGetStorageSchemaWithHttpInfo
     *
     * Get contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageSchema'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function contractsGetStorageSchemaWithHttpInfo(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetStorageSchema'][0]
    ): array
    {
        $request = $this->contractsGetStorageSchemaRequest($address, $level, $contentType);

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
                    if (in_array('\SplFileObject', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SplFileObject' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\SplFileObject', []),
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

            $returnType = '\SplFileObject';
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
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contractsGetStorageSchemaAsync
     *
     * Get contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageSchema'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetStorageSchemaAsync(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetStorageSchema'][0]
    ): PromiseInterface
    {
        return $this->contractsGetStorageSchemaAsyncWithHttpInfo($address, $level, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contractsGetStorageSchemaAsyncWithHttpInfo
     *
     * Get contract storage schema
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageSchema'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function contractsGetStorageSchemaAsyncWithHttpInfo(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetStorageSchema'][0]
    ): PromiseInterface
    {
        $returnType = '\SplFileObject';
        $request = $this->contractsGetStorageSchemaRequest($address, $level, $contentType);

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
     * Create request for operation 'contractsGetStorageSchema'
     *
     * @param  string $address Contract address (required)
     * @param  int|null $level Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['contractsGetStorageSchema'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contractsGetStorageSchemaRequest(
        string $address,
        ?int $level = 0,
        string $contentType = self::contentTypes['contractsGetStorageSchema'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling contractsGetStorageSchema'
            );
        }



        $resourcePath = '/v1/contracts/{address}/storage/schema';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $level,
            'level', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($address !== null) {
            $resourcePath = str_replace(
                '{' . 'address' . '}',
                ObjectSerializer::toPathValue($address),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/octet-stream', ],
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
