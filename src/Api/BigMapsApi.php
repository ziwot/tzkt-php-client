<?php
/**
 * BigMapsApi
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
 * BigMapsApi Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BigMapsApi
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
        'bigMapsGetBigMapById' => [
            'application/json',
        ],
        'bigMapsGetBigMapKeys' => [
            'application/json',
        ],
        'bigMapsGetBigMapType' => [
            'application/json',
        ],
        'bigMapsGetBigMapUpdates' => [
            'application/json',
        ],
        'bigMapsGetBigMapUpdates2' => [
            'application/json',
        ],
        'bigMapsGetBigMaps' => [
            'application/json',
        ],
        'bigMapsGetBigMapsCount' => [
            'application/json',
        ],
        'bigMapsGetHistoricalKeys' => [
            'application/json',
        ],
        'bigMapsGetKey' => [
            'application/json',
        ],
        'bigMapsGetKey2' => [
            'application/json',
        ],
        'bigMapsGetKeyUpdates' => [
            'application/json',
        ],
        'bigMapsGetKeys' => [
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
     * Operation bigMapsGetBigMapById
     *
     * Get bigmap by Id
     *
     * @param  int $id Bigmap Id (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapById'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMap
     */
    public function bigMapsGetBigMapById(
        int $id,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapById'][0]
    ): \Tzkt\Model\BigMap
    {
        list($response) = $this->bigMapsGetBigMapByIdWithHttpInfo($id, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation bigMapsGetBigMapByIdWithHttpInfo
     *
     * Get bigmap by Id
     *
     * @param  int $id Bigmap Id (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapById'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMap, HTTP status code, HTTP response headers (array of strings)
     */
    public function bigMapsGetBigMapByIdWithHttpInfo(
        int $id,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapById'][0]
    ): array
    {
        $request = $this->bigMapsGetBigMapByIdRequest($id, $micheline, $contentType);

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
     * Operation bigMapsGetBigMapByIdAsync
     *
     * Get bigmap by Id
     *
     * @param  int $id Bigmap Id (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapById'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetBigMapByIdAsync(
        int $id,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapById'][0]
    ): PromiseInterface
    {
        return $this->bigMapsGetBigMapByIdAsyncWithHttpInfo($id, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bigMapsGetBigMapByIdAsyncWithHttpInfo
     *
     * Get bigmap by Id
     *
     * @param  int $id Bigmap Id (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapById'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetBigMapByIdAsyncWithHttpInfo(
        int $id,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapById'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMap';
        $request = $this->bigMapsGetBigMapByIdRequest($id, $micheline, $contentType);

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
     * Create request for operation 'bigMapsGetBigMapById'
     *
     * @param  int $id Bigmap Id (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapById'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bigMapsGetBigMapByIdRequest(
        int $id,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapById'][0]
    ): Request
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling bigMapsGetBigMapById'
            );
        }



        $resourcePath = '/v1/bigmaps/{id}';
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
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
     * Operation bigMapsGetBigMapKeys
     *
     * Get bigmap keys
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filter by bigmap ptr.   Click on the parameter to expand more details. (optional)
     * @param  bool|null $active Filters by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysHashParameter|null $hash Filter by key hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filter by key.   Note, this parameter supports the following format: &#x60;key{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?key.foo.in&#x3D;bar,baz&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filter by value.   Note, this parameter supports the following format: &#x60;value{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?value.foo.in&#x3D;bar,baz&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the key was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the key was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the key was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the key was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates Filter by number of actions with the bigmap key.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the &#x60;key&#x60; and &#x60;value&#x60; fields: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapKeys'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMapKeyFull[]
     */
    public function bigMapsGetBigMapKeys(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?bool $active = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapKeys'][0]
    ): array
    {
        list($response) = $this->bigMapsGetBigMapKeysWithHttpInfo($id, $bigmap, $active, $hash, $key, $value, $first_level, $first_time, $last_level, $last_time, $updates, $sort, $offset, $limit, $select, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation bigMapsGetBigMapKeysWithHttpInfo
     *
     * Get bigmap keys
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filter by bigmap ptr.   Click on the parameter to expand more details. (optional)
     * @param  bool|null $active Filters by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysHashParameter|null $hash Filter by key hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filter by key.   Note, this parameter supports the following format: &#x60;key{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?key.foo.in&#x3D;bar,baz&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filter by value.   Note, this parameter supports the following format: &#x60;value{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?value.foo.in&#x3D;bar,baz&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the key was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the key was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the key was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the key was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates Filter by number of actions with the bigmap key.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the &#x60;key&#x60; and &#x60;value&#x60; fields: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapKeys'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMapKeyFull[], HTTP status code, HTTP response headers (array of strings)
     */
    public function bigMapsGetBigMapKeysWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?bool $active = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapKeys'][0]
    ): array
    {
        $request = $this->bigMapsGetBigMapKeysRequest($id, $bigmap, $active, $hash, $key, $value, $first_level, $first_time, $last_level, $last_time, $updates, $sort, $offset, $limit, $select, $micheline, $contentType);

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
                    if (in_array('\Tzkt\Model\BigMapKeyFull[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\BigMapKeyFull[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\BigMapKeyFull[]', []),
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

            $returnType = '\Tzkt\Model\BigMapKeyFull[]';
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
                        '\Tzkt\Model\BigMapKeyFull[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation bigMapsGetBigMapKeysAsync
     *
     * Get bigmap keys
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filter by bigmap ptr.   Click on the parameter to expand more details. (optional)
     * @param  bool|null $active Filters by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysHashParameter|null $hash Filter by key hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filter by key.   Note, this parameter supports the following format: &#x60;key{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?key.foo.in&#x3D;bar,baz&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filter by value.   Note, this parameter supports the following format: &#x60;value{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?value.foo.in&#x3D;bar,baz&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the key was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the key was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the key was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the key was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates Filter by number of actions with the bigmap key.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the &#x60;key&#x60; and &#x60;value&#x60; fields: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetBigMapKeysAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?bool $active = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapKeys'][0]
    ): PromiseInterface
    {
        return $this->bigMapsGetBigMapKeysAsyncWithHttpInfo($id, $bigmap, $active, $hash, $key, $value, $first_level, $first_time, $last_level, $last_time, $updates, $sort, $offset, $limit, $select, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bigMapsGetBigMapKeysAsyncWithHttpInfo
     *
     * Get bigmap keys
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filter by bigmap ptr.   Click on the parameter to expand more details. (optional)
     * @param  bool|null $active Filters by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysHashParameter|null $hash Filter by key hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filter by key.   Note, this parameter supports the following format: &#x60;key{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?key.foo.in&#x3D;bar,baz&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filter by value.   Note, this parameter supports the following format: &#x60;value{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?value.foo.in&#x3D;bar,baz&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the key was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the key was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the key was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the key was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates Filter by number of actions with the bigmap key.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the &#x60;key&#x60; and &#x60;value&#x60; fields: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetBigMapKeysAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?bool $active = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapKeys'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMapKeyFull[]';
        $request = $this->bigMapsGetBigMapKeysRequest($id, $bigmap, $active, $hash, $key, $value, $first_level, $first_time, $last_level, $last_time, $updates, $sort, $offset, $limit, $select, $micheline, $contentType);

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
     * Create request for operation 'bigMapsGetBigMapKeys'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filter by bigmap ptr.   Click on the parameter to expand more details. (optional)
     * @param  bool|null $active Filters by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysHashParameter|null $hash Filter by key hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filter by key.   Note, this parameter supports the following format: &#x60;key{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?key.foo.in&#x3D;bar,baz&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filter by value.   Note, this parameter supports the following format: &#x60;value{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?value.foo.in&#x3D;bar,baz&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the key was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the key was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the key was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the key was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $updates Filter by number of actions with the bigmap key.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the &#x60;key&#x60; and &#x60;value&#x60; fields: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bigMapsGetBigMapKeysRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?bool $active = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $updates = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapKeys'][0]
    ): Request
    {














        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling BigMapsApi.bigMapsGetBigMapKeys, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling BigMapsApi.bigMapsGetBigMapKeys, must be bigger than or equal to 0.');
        }
        



        $resourcePath = '/v1/bigmaps/keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $id,
            'id', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $bigmap,
            'bigmap', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
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
            $hash,
            'hash', // param base name
            '\Tzkt\Model\ExpressionParameter', // openApiType
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
            $first_level,
            'firstLevel', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $first_time,
            'firstTime', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
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
            $last_time,
            'lastTime', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $updates,
            'updates', // param base name
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
            $micheline,
            'micheline', // param base name
            '\Tzkt\Model\MichelineFormat', // openApiType
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
     * Operation bigMapsGetBigMapType
     *
     * Get bigmap type
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapType'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\MichelinePrim
     */
    public function bigMapsGetBigMapType(
        int $id,
        string $contentType = self::contentTypes['bigMapsGetBigMapType'][0]
    ): \Tzkt\Model\MichelinePrim
    {
        list($response) = $this->bigMapsGetBigMapTypeWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation bigMapsGetBigMapTypeWithHttpInfo
     *
     * Get bigmap type
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapType'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\MichelinePrim, HTTP status code, HTTP response headers (array of strings)
     */
    public function bigMapsGetBigMapTypeWithHttpInfo(
        int $id,
        string $contentType = self::contentTypes['bigMapsGetBigMapType'][0]
    ): array
    {
        $request = $this->bigMapsGetBigMapTypeRequest($id, $contentType);

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
                    if (in_array('\Tzkt\Model\MichelinePrim', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\MichelinePrim' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\MichelinePrim', []),
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

            $returnType = '\Tzkt\Model\MichelinePrim';
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
                        '\Tzkt\Model\MichelinePrim',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation bigMapsGetBigMapTypeAsync
     *
     * Get bigmap type
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapType'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetBigMapTypeAsync(
        int $id,
        string $contentType = self::contentTypes['bigMapsGetBigMapType'][0]
    ): PromiseInterface
    {
        return $this->bigMapsGetBigMapTypeAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bigMapsGetBigMapTypeAsyncWithHttpInfo
     *
     * Get bigmap type
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapType'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetBigMapTypeAsyncWithHttpInfo(
        int $id,
        string $contentType = self::contentTypes['bigMapsGetBigMapType'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\MichelinePrim';
        $request = $this->bigMapsGetBigMapTypeRequest($id, $contentType);

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
     * Create request for operation 'bigMapsGetBigMapType'
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapType'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bigMapsGetBigMapTypeRequest(
        int $id,
        string $contentType = self::contentTypes['bigMapsGetBigMapType'][0]
    ): Request
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling bigMapsGetBigMapType'
            );
        }


        $resourcePath = '/v1/bigmaps/{id}/type';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
     * Operation bigMapsGetBigMapUpdates
     *
     * Get bigmap updates count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filters by bigmap ptr (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters by bigmap path (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters by bigmap contract (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters by bigmap tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60; (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter|null $action Filters by action (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters by level (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filters by timestamp (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapUpdates'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMapUpdate[]
     */
    public function bigMapsGetBigMapUpdates(
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter $action = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapUpdates'][0]
    ): array
    {
        list($response) = $this->bigMapsGetBigMapUpdatesWithHttpInfo($bigmap, $path, $contract, $tags, $action, $value, $level, $timestamp, $contentType);
        return $response;
    }

    /**
     * Operation bigMapsGetBigMapUpdatesWithHttpInfo
     *
     * Get bigmap updates count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filters by bigmap ptr (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters by bigmap path (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters by bigmap contract (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters by bigmap tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60; (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter|null $action Filters by action (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters by level (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filters by timestamp (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapUpdates'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMapUpdate[], HTTP status code, HTTP response headers (array of strings)
     */
    public function bigMapsGetBigMapUpdatesWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter $action = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapUpdates'][0]
    ): array
    {
        $request = $this->bigMapsGetBigMapUpdatesRequest($bigmap, $path, $contract, $tags, $action, $value, $level, $timestamp, $contentType);

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
                    if (in_array('\Tzkt\Model\BigMapUpdate[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\BigMapUpdate[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\BigMapUpdate[]', []),
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

            $returnType = '\Tzkt\Model\BigMapUpdate[]';
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
                        '\Tzkt\Model\BigMapUpdate[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation bigMapsGetBigMapUpdatesAsync
     *
     * Get bigmap updates count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filters by bigmap ptr (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters by bigmap path (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters by bigmap contract (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters by bigmap tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60; (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter|null $action Filters by action (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters by level (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filters by timestamp (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapUpdates'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetBigMapUpdatesAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter $action = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapUpdates'][0]
    ): PromiseInterface
    {
        return $this->bigMapsGetBigMapUpdatesAsyncWithHttpInfo($bigmap, $path, $contract, $tags, $action, $value, $level, $timestamp, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bigMapsGetBigMapUpdatesAsyncWithHttpInfo
     *
     * Get bigmap updates count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filters by bigmap ptr (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters by bigmap path (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters by bigmap contract (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters by bigmap tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60; (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter|null $action Filters by action (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters by level (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filters by timestamp (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapUpdates'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetBigMapUpdatesAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter $action = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapUpdates'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMapUpdate[]';
        $request = $this->bigMapsGetBigMapUpdatesRequest($bigmap, $path, $contract, $tags, $action, $value, $level, $timestamp, $contentType);

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
     * Create request for operation 'bigMapsGetBigMapUpdates'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filters by bigmap ptr (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters by bigmap path (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters by bigmap contract (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters by bigmap tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60; (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter|null $action Filters by action (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters by level (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filters by timestamp (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapUpdates'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bigMapsGetBigMapUpdatesRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter $action = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapUpdates'][0]
    ): Request
    {










        $resourcePath = '/v1/bigmaps/updates/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $bigmap,
            'bigmap', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $path,
            'path', // param base name
            '\Tzkt\Model\StringParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $contract,
            'contract', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
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
            $action,
            'action', // param base name
            '\Tzkt\Model\BigMapActionParameter', // openApiType
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
            $level,
            'level', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timestamp,
            'timestamp', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
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
     * Operation bigMapsGetBigMapUpdates2
     *
     * Get bigmap updates
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filters by bigmap ptr (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters by bigmap path (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters by bigmap contract (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters by bigmap tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60; (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter|null $action Filters by action (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters by level (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filters by timestamp (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;ptr&#x60;, &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapUpdates2'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMapUpdate[]
     */
    public function bigMapsGetBigMapUpdates2(
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter $action = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapUpdates2'][0]
    ): array
    {
        list($response) = $this->bigMapsGetBigMapUpdates2WithHttpInfo($bigmap, $path, $contract, $tags, $action, $value, $level, $timestamp, $sort, $offset, $limit, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation bigMapsGetBigMapUpdates2WithHttpInfo
     *
     * Get bigmap updates
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filters by bigmap ptr (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters by bigmap path (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters by bigmap contract (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters by bigmap tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60; (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter|null $action Filters by action (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters by level (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filters by timestamp (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;ptr&#x60;, &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapUpdates2'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMapUpdate[], HTTP status code, HTTP response headers (array of strings)
     */
    public function bigMapsGetBigMapUpdates2WithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter $action = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapUpdates2'][0]
    ): array
    {
        $request = $this->bigMapsGetBigMapUpdates2Request($bigmap, $path, $contract, $tags, $action, $value, $level, $timestamp, $sort, $offset, $limit, $micheline, $contentType);

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
                    if (in_array('\Tzkt\Model\BigMapUpdate[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\BigMapUpdate[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\BigMapUpdate[]', []),
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

            $returnType = '\Tzkt\Model\BigMapUpdate[]';
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
                        '\Tzkt\Model\BigMapUpdate[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation bigMapsGetBigMapUpdates2Async
     *
     * Get bigmap updates
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filters by bigmap ptr (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters by bigmap path (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters by bigmap contract (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters by bigmap tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60; (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter|null $action Filters by action (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters by level (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filters by timestamp (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;ptr&#x60;, &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapUpdates2'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetBigMapUpdates2Async(
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter $action = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapUpdates2'][0]
    ): PromiseInterface
    {
        return $this->bigMapsGetBigMapUpdates2AsyncWithHttpInfo($bigmap, $path, $contract, $tags, $action, $value, $level, $timestamp, $sort, $offset, $limit, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bigMapsGetBigMapUpdates2AsyncWithHttpInfo
     *
     * Get bigmap updates
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filters by bigmap ptr (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters by bigmap path (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters by bigmap contract (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters by bigmap tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60; (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter|null $action Filters by action (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters by level (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filters by timestamp (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;ptr&#x60;, &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapUpdates2'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetBigMapUpdates2AsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter $action = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapUpdates2'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMapUpdate[]';
        $request = $this->bigMapsGetBigMapUpdates2Request($bigmap, $path, $contract, $tags, $action, $value, $level, $timestamp, $sort, $offset, $limit, $micheline, $contentType);

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
     * Create request for operation 'bigMapsGetBigMapUpdates2'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $bigmap Filters by bigmap ptr (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters by bigmap path (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters by bigmap contract (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters by bigmap tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60; (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter|null $action Filters by action (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filters by level (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filters by timestamp (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;ptr&#x60;, &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapUpdates2'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bigMapsGetBigMapUpdates2Request(
        ?\Tzkt\Model\AccountsGetIdParameter $bigmap = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?\Tzkt\Model\BigMapsGetBigMapUpdatesActionParameter $action = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMapUpdates2'][0]
    ): Request
    {











        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling BigMapsApi.bigMapsGetBigMapUpdates2, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling BigMapsApi.bigMapsGetBigMapUpdates2, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/bigmaps/updates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $bigmap,
            'bigmap', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $path,
            'path', // param base name
            '\Tzkt\Model\StringParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $contract,
            'contract', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
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
            $action,
            'action', // param base name
            '\Tzkt\Model\BigMapActionParameter', // openApiType
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
            $level,
            'level', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $timestamp,
            'timestamp', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
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
     * Operation bigMapsGetBigMaps
     *
     * Get bigmaps
     *
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters bigmaps by smart contract address. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters bigmaps by path in the contract storage. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters bigmaps by tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;. (optional)
     * @param  bool|null $active Filters bigmaps by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmaps by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;ptr&#x60;, &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMaps'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMap[]
     */
    public function bigMapsGetBigMaps(
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMaps'][0]
    ): array
    {
        list($response) = $this->bigMapsGetBigMapsWithHttpInfo($contract, $path, $tags, $active, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation bigMapsGetBigMapsWithHttpInfo
     *
     * Get bigmaps
     *
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters bigmaps by smart contract address. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters bigmaps by path in the contract storage. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters bigmaps by tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;. (optional)
     * @param  bool|null $active Filters bigmaps by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmaps by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;ptr&#x60;, &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMaps'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMap[], HTTP status code, HTTP response headers (array of strings)
     */
    public function bigMapsGetBigMapsWithHttpInfo(
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMaps'][0]
    ): array
    {
        $request = $this->bigMapsGetBigMapsRequest($contract, $path, $tags, $active, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType);

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
     * Operation bigMapsGetBigMapsAsync
     *
     * Get bigmaps
     *
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters bigmaps by smart contract address. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters bigmaps by path in the contract storage. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters bigmaps by tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;. (optional)
     * @param  bool|null $active Filters bigmaps by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmaps by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;ptr&#x60;, &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMaps'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetBigMapsAsync(
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMaps'][0]
    ): PromiseInterface
    {
        return $this->bigMapsGetBigMapsAsyncWithHttpInfo($contract, $path, $tags, $active, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bigMapsGetBigMapsAsyncWithHttpInfo
     *
     * Get bigmaps
     *
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters bigmaps by smart contract address. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters bigmaps by path in the contract storage. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters bigmaps by tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;. (optional)
     * @param  bool|null $active Filters bigmaps by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmaps by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;ptr&#x60;, &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMaps'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetBigMapsAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMaps'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMap[]';
        $request = $this->bigMapsGetBigMapsRequest($contract, $path, $tags, $active, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType);

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
     * Create request for operation 'bigMapsGetBigMaps'
     *
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $contract Filters bigmaps by smart contract address. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $path Filters bigmaps by path in the contract storage. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapsTagsParameter|null $tags Filters bigmaps by tags: &#x60;metadata&#x60;, &#x60;token_metadata&#x60;, &#x60;ledger&#x60;. (optional)
     * @param  bool|null $active Filters bigmaps by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmaps by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;ptr&#x60;, &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value type: &#x60;0&#x60; - JSON, &#x60;2&#x60; - Micheline (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMaps'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bigMapsGetBigMapsRequest(
        ?\Tzkt\Model\AccountsGetDelegateParameter $contract = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $path = null,
        ?\Tzkt\Model\BigMapsGetBigMapsTagsParameter $tags = null,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetBigMaps'][0]
    ): Request
    {









        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling BigMapsApi.bigMapsGetBigMaps, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling BigMapsApi.bigMapsGetBigMaps, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/bigmaps';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $contract,
            'contract', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $path,
            'path', // param base name
            '\Tzkt\Model\StringParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
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
            $active,
            'active', // param base name
            'boolean', // openApiType
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
     * Operation bigMapsGetBigMapsCount
     *
     * Get bigmaps count
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapsCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function bigMapsGetBigMapsCount(
        string $contentType = self::contentTypes['bigMapsGetBigMapsCount'][0]
    ): int
    {
        list($response) = $this->bigMapsGetBigMapsCountWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation bigMapsGetBigMapsCountWithHttpInfo
     *
     * Get bigmaps count
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapsCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function bigMapsGetBigMapsCountWithHttpInfo(
        string $contentType = self::contentTypes['bigMapsGetBigMapsCount'][0]
    ): array
    {
        $request = $this->bigMapsGetBigMapsCountRequest($contentType);

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
     * Operation bigMapsGetBigMapsCountAsync
     *
     * Get bigmaps count
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetBigMapsCountAsync(
        string $contentType = self::contentTypes['bigMapsGetBigMapsCount'][0]
    ): PromiseInterface
    {
        return $this->bigMapsGetBigMapsCountAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bigMapsGetBigMapsCountAsyncWithHttpInfo
     *
     * Get bigmaps count
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetBigMapsCountAsyncWithHttpInfo(
        string $contentType = self::contentTypes['bigMapsGetBigMapsCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->bigMapsGetBigMapsCountRequest($contentType);

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
     * Create request for operation 'bigMapsGetBigMapsCount'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetBigMapsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bigMapsGetBigMapsCountRequest(
        string $contentType = self::contentTypes['bigMapsGetBigMapsCount'][0]
    ): Request
    {


        $resourcePath = '/v1/bigmaps/count';
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
     * Operation bigMapsGetHistoricalKeys
     *
     * Get historical keys
     *
     * @param  int $id Bigmap Id (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMapKeyHistorical[]
     */
    public function bigMapsGetHistoricalKeys(
        int $id,
        int $level,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetHistoricalKeys'][0]
    ): array
    {
        list($response) = $this->bigMapsGetHistoricalKeysWithHttpInfo($id, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation bigMapsGetHistoricalKeysWithHttpInfo
     *
     * Get historical keys
     *
     * @param  int $id Bigmap Id (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMapKeyHistorical[], HTTP status code, HTTP response headers (array of strings)
     */
    public function bigMapsGetHistoricalKeysWithHttpInfo(
        int $id,
        int $level,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetHistoricalKeys'][0]
    ): array
    {
        $request = $this->bigMapsGetHistoricalKeysRequest($id, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline, $contentType);

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
     * Operation bigMapsGetHistoricalKeysAsync
     *
     * Get historical keys
     *
     * @param  int $id Bigmap Id (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetHistoricalKeysAsync(
        int $id,
        int $level,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetHistoricalKeys'][0]
    ): PromiseInterface
    {
        return $this->bigMapsGetHistoricalKeysAsyncWithHttpInfo($id, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bigMapsGetHistoricalKeysAsyncWithHttpInfo
     *
     * Get historical keys
     *
     * @param  int $id Bigmap Id (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetHistoricalKeysAsyncWithHttpInfo(
        int $id,
        int $level,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetHistoricalKeys'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMapKeyHistorical[]';
        $request = $this->bigMapsGetHistoricalKeysRequest($id, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline, $contentType);

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
     * Create request for operation 'bigMapsGetHistoricalKeys'
     *
     * @param  int $id Bigmap Id (required)
     * @param  int $level Level of the block at which you want to get bigmap keys (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetHistoricalKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bigMapsGetHistoricalKeysRequest(
        int $id,
        int $level,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetHistoricalKeys'][0]
    ): Request
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling bigMapsGetHistoricalKeys'
            );
        }

        // verify the required parameter 'level' is set
        if ($level === null || (is_array($level) && count($level) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $level when calling bigMapsGetHistoricalKeys'
            );
        }







        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling BigMapsApi.bigMapsGetHistoricalKeys, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling BigMapsApi.bigMapsGetHistoricalKeys, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/bigmaps/{id}/historical_keys/{level}';
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
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
     * Operation bigMapsGetKey
     *
     * Get bigmap key
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKey'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMapKey
     */
    public function bigMapsGetKey(
        int $id,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKey'][0]
    ): \Tzkt\Model\BigMapKey
    {
        list($response) = $this->bigMapsGetKeyWithHttpInfo($id, $key, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation bigMapsGetKeyWithHttpInfo
     *
     * Get bigmap key
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKey'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMapKey, HTTP status code, HTTP response headers (array of strings)
     */
    public function bigMapsGetKeyWithHttpInfo(
        int $id,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKey'][0]
    ): array
    {
        $request = $this->bigMapsGetKeyRequest($id, $key, $micheline, $contentType);

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
     * Operation bigMapsGetKeyAsync
     *
     * Get bigmap key
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKey'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetKeyAsync(
        int $id,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKey'][0]
    ): PromiseInterface
    {
        return $this->bigMapsGetKeyAsyncWithHttpInfo($id, $key, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bigMapsGetKeyAsyncWithHttpInfo
     *
     * Get bigmap key
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKey'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetKeyAsyncWithHttpInfo(
        int $id,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKey'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMapKey';
        $request = $this->bigMapsGetKeyRequest($id, $key, $micheline, $contentType);

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
     * Create request for operation 'bigMapsGetKey'
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKey'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bigMapsGetKeyRequest(
        int $id,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKey'][0]
    ): Request
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling bigMapsGetKey'
            );
        }

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $key when calling bigMapsGetKey'
            );
        }



        $resourcePath = '/v1/bigmaps/{id}/keys/{key}';
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
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
     * Operation bigMapsGetKey2
     *
     * Get historical key
     *
     * @param  int $id Bigmap Id (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKey2'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMapKeyHistorical
     */
    public function bigMapsGetKey2(
        int $id,
        int $level,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKey2'][0]
    ): \Tzkt\Model\BigMapKeyHistorical
    {
        list($response) = $this->bigMapsGetKey2WithHttpInfo($id, $level, $key, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation bigMapsGetKey2WithHttpInfo
     *
     * Get historical key
     *
     * @param  int $id Bigmap Id (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKey2'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMapKeyHistorical, HTTP status code, HTTP response headers (array of strings)
     */
    public function bigMapsGetKey2WithHttpInfo(
        int $id,
        int $level,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKey2'][0]
    ): array
    {
        $request = $this->bigMapsGetKey2Request($id, $level, $key, $micheline, $contentType);

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
     * Operation bigMapsGetKey2Async
     *
     * Get historical key
     *
     * @param  int $id Bigmap Id (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKey2'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetKey2Async(
        int $id,
        int $level,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKey2'][0]
    ): PromiseInterface
    {
        return $this->bigMapsGetKey2AsyncWithHttpInfo($id, $level, $key, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bigMapsGetKey2AsyncWithHttpInfo
     *
     * Get historical key
     *
     * @param  int $id Bigmap Id (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKey2'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetKey2AsyncWithHttpInfo(
        int $id,
        int $level,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKey2'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMapKeyHistorical';
        $request = $this->bigMapsGetKey2Request($id, $level, $key, $micheline, $contentType);

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
     * Create request for operation 'bigMapsGetKey2'
     *
     * @param  int $id Bigmap Id (required)
     * @param  int $level Level of the block at which you want to get bigmap key (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKey2'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bigMapsGetKey2Request(
        int $id,
        int $level,
        string $key,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKey2'][0]
    ): Request
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling bigMapsGetKey2'
            );
        }

        // verify the required parameter 'level' is set
        if ($level === null || (is_array($level) && count($level) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $level when calling bigMapsGetKey2'
            );
        }

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $key when calling bigMapsGetKey2'
            );
        }



        $resourcePath = '/v1/bigmaps/{id}/historical_keys/{level}/{key}';
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
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
     * Operation bigMapsGetKeyUpdates
     *
     * Get bigmap key updates
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMapKeyUpdate[]
     */
    public function bigMapsGetKeyUpdates(
        int $id,
        string $key,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKeyUpdates'][0]
    ): array
    {
        list($response) = $this->bigMapsGetKeyUpdatesWithHttpInfo($id, $key, $sort, $offset, $limit, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation bigMapsGetKeyUpdatesWithHttpInfo
     *
     * Get bigmap key updates
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMapKeyUpdate[], HTTP status code, HTTP response headers (array of strings)
     */
    public function bigMapsGetKeyUpdatesWithHttpInfo(
        int $id,
        string $key,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKeyUpdates'][0]
    ): array
    {
        $request = $this->bigMapsGetKeyUpdatesRequest($id, $key, $sort, $offset, $limit, $micheline, $contentType);

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
     * Operation bigMapsGetKeyUpdatesAsync
     *
     * Get bigmap key updates
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetKeyUpdatesAsync(
        int $id,
        string $key,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKeyUpdates'][0]
    ): PromiseInterface
    {
        return $this->bigMapsGetKeyUpdatesAsyncWithHttpInfo($id, $key, $sort, $offset, $limit, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bigMapsGetKeyUpdatesAsyncWithHttpInfo
     *
     * Get bigmap key updates
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetKeyUpdatesAsyncWithHttpInfo(
        int $id,
        string $key,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKeyUpdates'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMapKeyUpdate[]';
        $request = $this->bigMapsGetKeyUpdatesRequest($id, $key, $sort, $offset, $limit, $micheline, $contentType);

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
     * Create request for operation 'bigMapsGetKeyUpdates'
     *
     * @param  int $id Bigmap Id (required)
     * @param  string $key Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;foo...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;nat\&quot;:\&quot;123\&quot;}&#x60;. (required)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKeyUpdates'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bigMapsGetKeyUpdatesRequest(
        int $id,
        string $key,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKeyUpdates'][0]
    ): Request
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling bigMapsGetKeyUpdates'
            );
        }

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $key when calling bigMapsGetKeyUpdates'
            );
        }



        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling BigMapsApi.bigMapsGetKeyUpdates, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling BigMapsApi.bigMapsGetKeyUpdates, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/bigmaps/{id}/keys/{key}/updates';
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
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
     * Operation bigMapsGetKeys
     *
     * Get bigmap keys
     *
     * @param  int $id Bigmap Id (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmap keys by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKeys'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\BigMapKey[]
     */
    public function bigMapsGetKeys(
        int $id,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKeys'][0]
    ): array
    {
        list($response) = $this->bigMapsGetKeysWithHttpInfo($id, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation bigMapsGetKeysWithHttpInfo
     *
     * Get bigmap keys
     *
     * @param  int $id Bigmap Id (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmap keys by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKeys'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\BigMapKey[], HTTP status code, HTTP response headers (array of strings)
     */
    public function bigMapsGetKeysWithHttpInfo(
        int $id,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKeys'][0]
    ): array
    {
        $request = $this->bigMapsGetKeysRequest($id, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType);

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
     * Operation bigMapsGetKeysAsync
     *
     * Get bigmap keys
     *
     * @param  int $id Bigmap Id (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmap keys by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetKeysAsync(
        int $id,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKeys'][0]
    ): PromiseInterface
    {
        return $this->bigMapsGetKeysAsyncWithHttpInfo($id, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bigMapsGetKeysAsyncWithHttpInfo
     *
     * Get bigmap keys
     *
     * @param  int $id Bigmap Id (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmap keys by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function bigMapsGetKeysAsyncWithHttpInfo(
        int $id,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKeys'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\BigMapKey[]';
        $request = $this->bigMapsGetKeysRequest($id, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline, $contentType);

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
     * Create request for operation 'bigMapsGetKeys'
     *
     * @param  int $id Bigmap Id (required)
     * @param  bool|null $active Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $key Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $value Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filters bigmap keys by the last update level. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['bigMapsGetKeys'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function bigMapsGetKeysRequest(
        int $id,
        ?bool $active = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $key = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $value = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['bigMapsGetKeys'][0]
    ): Request
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $id when calling bigMapsGetKeys'
            );
        }








        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling BigMapsApi.bigMapsGetKeys, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling BigMapsApi.bigMapsGetKeys, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/bigmaps/{id}/keys';
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
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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
