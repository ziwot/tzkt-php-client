<?php
/**
 * SmartRollupsApi
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
 * SmartRollupsApi Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SmartRollupsApi
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
        'smartRollupsGetEntrypoints' => [
            'application/json',
        ],
        'smartRollupsGetInboxMessages' => [
            'application/json',
        ],
        'smartRollupsGetInboxMessagesCount' => [
            'application/json',
        ],
        'smartRollupsGetInterface' => [
            'application/json',
        ],
        'smartRollupsGetSmartRollup' => [
            'application/json',
        ],
        'smartRollupsGetSmartRollupCommitments' => [
            'application/json',
        ],
        'smartRollupsGetSmartRollupCommitmentsCount' => [
            'application/json',
        ],
        'smartRollupsGetSmartRollupGames' => [
            'application/json',
        ],
        'smartRollupsGetSmartRollupGamesCount' => [
            'application/json',
        ],
        'smartRollupsGetSmartRollupStakers' => [
            'application/json',
        ],
        'smartRollupsGetSmartRollups' => [
            'application/json',
        ],
        'smartRollupsGetSmartRollupsCount' => [
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
     * Operation smartRollupsGetEntrypoints
     *
     * Get smart rollup entrypoints
     *
     * @param  string $address Smart rollup address (starting with sr1) (required)
     * @param  bool|null $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\Entrypoint[]
     */
    public function smartRollupsGetEntrypoints(
        string $address,
        ?bool $all = false,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['smartRollupsGetEntrypoints'][0]
    ): array
    {
        list($response) = $this->smartRollupsGetEntrypointsWithHttpInfo($address, $all, $json, $micheline, $michelson, $contentType);
        return $response;
    }

    /**
     * Operation smartRollupsGetEntrypointsWithHttpInfo
     *
     * Get smart rollup entrypoints
     *
     * @param  string $address Smart rollup address (starting with sr1) (required)
     * @param  bool|null $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\Entrypoint[], HTTP status code, HTTP response headers (array of strings)
     */
    public function smartRollupsGetEntrypointsWithHttpInfo(
        string $address,
        ?bool $all = false,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['smartRollupsGetEntrypoints'][0]
    ): array
    {
        $request = $this->smartRollupsGetEntrypointsRequest($address, $all, $json, $micheline, $michelson, $contentType);

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
     * Operation smartRollupsGetEntrypointsAsync
     *
     * Get smart rollup entrypoints
     *
     * @param  string $address Smart rollup address (starting with sr1) (required)
     * @param  bool|null $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetEntrypointsAsync(
        string $address,
        ?bool $all = false,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['smartRollupsGetEntrypoints'][0]
    ): PromiseInterface
    {
        return $this->smartRollupsGetEntrypointsAsyncWithHttpInfo($address, $all, $json, $micheline, $michelson, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation smartRollupsGetEntrypointsAsyncWithHttpInfo
     *
     * Get smart rollup entrypoints
     *
     * @param  string $address Smart rollup address (starting with sr1) (required)
     * @param  bool|null $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetEntrypointsAsyncWithHttpInfo(
        string $address,
        ?bool $all = false,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['smartRollupsGetEntrypoints'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\Entrypoint[]';
        $request = $this->smartRollupsGetEntrypointsRequest($address, $all, $json, $micheline, $michelson, $contentType);

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
     * Create request for operation 'smartRollupsGetEntrypoints'
     *
     * @param  string $address Smart rollup address (starting with sr1) (required)
     * @param  bool|null $all If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; (optional, default to false)
     * @param  bool|null $json Include parameters schema in human-readable JSON format (optional, default to true)
     * @param  bool|null $micheline Include parameters schema in micheline format (optional, default to false)
     * @param  bool|null $michelson Include parameters schema in michelson format (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetEntrypoints'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function smartRollupsGetEntrypointsRequest(
        string $address,
        ?bool $all = false,
        ?bool $json = true,
        ?bool $micheline = false,
        ?bool $michelson = false,
        string $contentType = self::contentTypes['smartRollupsGetEntrypoints'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling smartRollupsGetEntrypoints'
            );
        }






        $resourcePath = '/v1/smart_rollups/{address}/entrypoints';
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
     * Operation smartRollupsGetInboxMessages
     *
     * Get inbox messages
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter|null $type Filter by inbox message type (&#x60;level_start&#x60;, &#x60;level_info&#x60;, &#x60;level_end&#x60;, &#x60;transfer&#x60;, &#x60;external&#x60;, &#x60;migration&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of smart rollup call parameters: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInboxMessages'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\SrMessage[]
     */
    public function smartRollupsGetInboxMessages(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['smartRollupsGetInboxMessages'][0]
    ): array
    {
        list($response) = $this->smartRollupsGetInboxMessagesWithHttpInfo($id, $level, $timestamp, $type, $sort, $offset, $limit, $select, $micheline, $contentType);
        return $response;
    }

    /**
     * Operation smartRollupsGetInboxMessagesWithHttpInfo
     *
     * Get inbox messages
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter|null $type Filter by inbox message type (&#x60;level_start&#x60;, &#x60;level_info&#x60;, &#x60;level_end&#x60;, &#x60;transfer&#x60;, &#x60;external&#x60;, &#x60;migration&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of smart rollup call parameters: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInboxMessages'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\SrMessage[], HTTP status code, HTTP response headers (array of strings)
     */
    public function smartRollupsGetInboxMessagesWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['smartRollupsGetInboxMessages'][0]
    ): array
    {
        $request = $this->smartRollupsGetInboxMessagesRequest($id, $level, $timestamp, $type, $sort, $offset, $limit, $select, $micheline, $contentType);

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
                    if (in_array('\Tzkt\Model\SrMessage[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\SrMessage[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\SrMessage[]', []),
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

            $returnType = '\Tzkt\Model\SrMessage[]';
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
                        '\Tzkt\Model\SrMessage[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation smartRollupsGetInboxMessagesAsync
     *
     * Get inbox messages
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter|null $type Filter by inbox message type (&#x60;level_start&#x60;, &#x60;level_info&#x60;, &#x60;level_end&#x60;, &#x60;transfer&#x60;, &#x60;external&#x60;, &#x60;migration&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of smart rollup call parameters: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInboxMessages'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetInboxMessagesAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['smartRollupsGetInboxMessages'][0]
    ): PromiseInterface
    {
        return $this->smartRollupsGetInboxMessagesAsyncWithHttpInfo($id, $level, $timestamp, $type, $sort, $offset, $limit, $select, $micheline, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation smartRollupsGetInboxMessagesAsyncWithHttpInfo
     *
     * Get inbox messages
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter|null $type Filter by inbox message type (&#x60;level_start&#x60;, &#x60;level_info&#x60;, &#x60;level_end&#x60;, &#x60;transfer&#x60;, &#x60;external&#x60;, &#x60;migration&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of smart rollup call parameters: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInboxMessages'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetInboxMessagesAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['smartRollupsGetInboxMessages'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\SrMessage[]';
        $request = $this->smartRollupsGetInboxMessagesRequest($id, $level, $timestamp, $type, $sort, $offset, $limit, $select, $micheline, $contentType);

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
     * Create request for operation 'smartRollupsGetInboxMessages'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter|null $type Filter by inbox message type (&#x60;level_start&#x60;, &#x60;level_info&#x60;, &#x60;level_end&#x60;, &#x60;transfer&#x60;, &#x60;external&#x60;, &#x60;migration&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsMichelineParameter|null $micheline Format of smart rollup call parameters: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInboxMessages'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function smartRollupsGetInboxMessagesRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter $type = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetOperationsMichelineParameter $micheline = null,
        string $contentType = self::contentTypes['smartRollupsGetInboxMessages'][0]
    ): Request
    {







        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling SmartRollupsApi.smartRollupsGetInboxMessages, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling SmartRollupsApi.smartRollupsGetInboxMessages, must be bigger than or equal to 0.');
        }
        



        $resourcePath = '/v1/smart_rollups/inbox';
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
            $type,
            'type', // param base name
            '\Tzkt\Model\SrMessageTypeParameter', // openApiType
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
     * Operation smartRollupsGetInboxMessagesCount
     *
     * Get inbox messages count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter|null $type Filter by inbox message type (&#x60;level_start&#x60;, &#x60;level_info&#x60;, &#x60;level_end&#x60;, &#x60;transfer&#x60;, &#x60;external&#x60;, &#x60;migration&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInboxMessagesCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function smartRollupsGetInboxMessagesCount(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter $type = null,
        string $contentType = self::contentTypes['smartRollupsGetInboxMessagesCount'][0]
    ): int
    {
        list($response) = $this->smartRollupsGetInboxMessagesCountWithHttpInfo($id, $level, $timestamp, $type, $contentType);
        return $response;
    }

    /**
     * Operation smartRollupsGetInboxMessagesCountWithHttpInfo
     *
     * Get inbox messages count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter|null $type Filter by inbox message type (&#x60;level_start&#x60;, &#x60;level_info&#x60;, &#x60;level_end&#x60;, &#x60;transfer&#x60;, &#x60;external&#x60;, &#x60;migration&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInboxMessagesCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function smartRollupsGetInboxMessagesCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter $type = null,
        string $contentType = self::contentTypes['smartRollupsGetInboxMessagesCount'][0]
    ): array
    {
        $request = $this->smartRollupsGetInboxMessagesCountRequest($id, $level, $timestamp, $type, $contentType);

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
     * Operation smartRollupsGetInboxMessagesCountAsync
     *
     * Get inbox messages count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter|null $type Filter by inbox message type (&#x60;level_start&#x60;, &#x60;level_info&#x60;, &#x60;level_end&#x60;, &#x60;transfer&#x60;, &#x60;external&#x60;, &#x60;migration&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInboxMessagesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetInboxMessagesCountAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter $type = null,
        string $contentType = self::contentTypes['smartRollupsGetInboxMessagesCount'][0]
    ): PromiseInterface
    {
        return $this->smartRollupsGetInboxMessagesCountAsyncWithHttpInfo($id, $level, $timestamp, $type, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation smartRollupsGetInboxMessagesCountAsyncWithHttpInfo
     *
     * Get inbox messages count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter|null $type Filter by inbox message type (&#x60;level_start&#x60;, &#x60;level_info&#x60;, &#x60;level_end&#x60;, &#x60;transfer&#x60;, &#x60;external&#x60;, &#x60;migration&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInboxMessagesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetInboxMessagesCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter $type = null,
        string $contentType = self::contentTypes['smartRollupsGetInboxMessagesCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->smartRollupsGetInboxMessagesCountRequest($id, $level, $timestamp, $type, $contentType);

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
     * Create request for operation 'smartRollupsGetInboxMessagesCount'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by level of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $timestamp Filter by timestamp of the block, where the message was pushed.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter|null $type Filter by inbox message type (&#x60;level_start&#x60;, &#x60;level_info&#x60;, &#x60;level_end&#x60;, &#x60;transfer&#x60;, &#x60;external&#x60;, &#x60;migration&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInboxMessagesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function smartRollupsGetInboxMessagesCountRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $timestamp = null,
        ?\Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter $type = null,
        string $contentType = self::contentTypes['smartRollupsGetInboxMessagesCount'][0]
    ): Request
    {






        $resourcePath = '/v1/smart_rollups/inbox/count';
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
            $type,
            'type', // param base name
            '\Tzkt\Model\SrMessageTypeParameter', // openApiType
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
     * Operation smartRollupsGetInterface
     *
     * Get JSON Schema [2020-12] interface for the smart rollup
     *
     * @param  string $address Smart rollup address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInterface'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\ContractInterface
     */
    public function smartRollupsGetInterface(
        string $address,
        string $contentType = self::contentTypes['smartRollupsGetInterface'][0]
    ): \Tzkt\Model\ContractInterface
    {
        list($response) = $this->smartRollupsGetInterfaceWithHttpInfo($address, $contentType);
        return $response;
    }

    /**
     * Operation smartRollupsGetInterfaceWithHttpInfo
     *
     * Get JSON Schema [2020-12] interface for the smart rollup
     *
     * @param  string $address Smart rollup address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInterface'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\ContractInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function smartRollupsGetInterfaceWithHttpInfo(
        string $address,
        string $contentType = self::contentTypes['smartRollupsGetInterface'][0]
    ): array
    {
        $request = $this->smartRollupsGetInterfaceRequest($address, $contentType);

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
     * Operation smartRollupsGetInterfaceAsync
     *
     * Get JSON Schema [2020-12] interface for the smart rollup
     *
     * @param  string $address Smart rollup address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInterface'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetInterfaceAsync(
        string $address,
        string $contentType = self::contentTypes['smartRollupsGetInterface'][0]
    ): PromiseInterface
    {
        return $this->smartRollupsGetInterfaceAsyncWithHttpInfo($address, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation smartRollupsGetInterfaceAsyncWithHttpInfo
     *
     * Get JSON Schema [2020-12] interface for the smart rollup
     *
     * @param  string $address Smart rollup address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInterface'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetInterfaceAsyncWithHttpInfo(
        string $address,
        string $contentType = self::contentTypes['smartRollupsGetInterface'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\ContractInterface';
        $request = $this->smartRollupsGetInterfaceRequest($address, $contentType);

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
     * Create request for operation 'smartRollupsGetInterface'
     *
     * @param  string $address Smart rollup address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetInterface'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function smartRollupsGetInterfaceRequest(
        string $address,
        string $contentType = self::contentTypes['smartRollupsGetInterface'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling smartRollupsGetInterface'
            );
        }


        $resourcePath = '/v1/smart_rollups/{address}/interface';
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
     * Operation smartRollupsGetSmartRollup
     *
     * Get smart rollup by address
     *
     * @param  string $address Smart rollup address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollup'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\SmartRollup
     */
    public function smartRollupsGetSmartRollup(
        string $address,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollup'][0]
    ): \Tzkt\Model\SmartRollup
    {
        list($response) = $this->smartRollupsGetSmartRollupWithHttpInfo($address, $contentType);
        return $response;
    }

    /**
     * Operation smartRollupsGetSmartRollupWithHttpInfo
     *
     * Get smart rollup by address
     *
     * @param  string $address Smart rollup address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollup'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\SmartRollup, HTTP status code, HTTP response headers (array of strings)
     */
    public function smartRollupsGetSmartRollupWithHttpInfo(
        string $address,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollup'][0]
    ): array
    {
        $request = $this->smartRollupsGetSmartRollupRequest($address, $contentType);

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
                    if (in_array('\Tzkt\Model\SmartRollup', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\SmartRollup' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\SmartRollup', []),
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

            $returnType = '\Tzkt\Model\SmartRollup';
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
                        '\Tzkt\Model\SmartRollup',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation smartRollupsGetSmartRollupAsync
     *
     * Get smart rollup by address
     *
     * @param  string $address Smart rollup address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollup'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupAsync(
        string $address,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollup'][0]
    ): PromiseInterface
    {
        return $this->smartRollupsGetSmartRollupAsyncWithHttpInfo($address, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation smartRollupsGetSmartRollupAsyncWithHttpInfo
     *
     * Get smart rollup by address
     *
     * @param  string $address Smart rollup address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollup'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupAsyncWithHttpInfo(
        string $address,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollup'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\SmartRollup';
        $request = $this->smartRollupsGetSmartRollupRequest($address, $contentType);

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
     * Create request for operation 'smartRollupsGetSmartRollup'
     *
     * @param  string $address Smart rollup address (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollup'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function smartRollupsGetSmartRollupRequest(
        string $address,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollup'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling smartRollupsGetSmartRollup'
            );
        }


        $resourcePath = '/v1/smart_rollups/{address}';
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
     * Operation smartRollupsGetSmartRollupCommitments
     *
     * Get smart rollup commitments
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (an account published the commitment first).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $inbox_level Filter by inbox level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter|null $status Filter by commitment status (&#x60;pending&#x60;, &#x60;cemented&#x60;, &#x60;executed&#x60;, &#x60;refuted&#x60;, or &#x60;orphan&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $predecessor_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $predecessor_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupCommitments'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\SrCommitment[]
     */
    public function smartRollupsGetSmartRollupCommitments(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetIdParameter $inbox_level = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $predecessor_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $predecessor_hash = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupCommitments'][0]
    ): array
    {
        list($response) = $this->smartRollupsGetSmartRollupCommitmentsWithHttpInfo($id, $initiator, $rollup, $inbox_level, $hash, $first_level, $first_time, $last_level, $last_time, $status, $predecessor_id, $predecessor_hash, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation smartRollupsGetSmartRollupCommitmentsWithHttpInfo
     *
     * Get smart rollup commitments
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (an account published the commitment first).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $inbox_level Filter by inbox level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter|null $status Filter by commitment status (&#x60;pending&#x60;, &#x60;cemented&#x60;, &#x60;executed&#x60;, &#x60;refuted&#x60;, or &#x60;orphan&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $predecessor_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $predecessor_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupCommitments'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\SrCommitment[], HTTP status code, HTTP response headers (array of strings)
     */
    public function smartRollupsGetSmartRollupCommitmentsWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetIdParameter $inbox_level = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $predecessor_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $predecessor_hash = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupCommitments'][0]
    ): array
    {
        $request = $this->smartRollupsGetSmartRollupCommitmentsRequest($id, $initiator, $rollup, $inbox_level, $hash, $first_level, $first_time, $last_level, $last_time, $status, $predecessor_id, $predecessor_hash, $sort, $offset, $limit, $select, $contentType);

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
                    if (in_array('\Tzkt\Model\SrCommitment[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\SrCommitment[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\SrCommitment[]', []),
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

            $returnType = '\Tzkt\Model\SrCommitment[]';
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
                        '\Tzkt\Model\SrCommitment[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation smartRollupsGetSmartRollupCommitmentsAsync
     *
     * Get smart rollup commitments
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (an account published the commitment first).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $inbox_level Filter by inbox level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter|null $status Filter by commitment status (&#x60;pending&#x60;, &#x60;cemented&#x60;, &#x60;executed&#x60;, &#x60;refuted&#x60;, or &#x60;orphan&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $predecessor_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $predecessor_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupCommitments'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupCommitmentsAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetIdParameter $inbox_level = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $predecessor_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $predecessor_hash = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupCommitments'][0]
    ): PromiseInterface
    {
        return $this->smartRollupsGetSmartRollupCommitmentsAsyncWithHttpInfo($id, $initiator, $rollup, $inbox_level, $hash, $first_level, $first_time, $last_level, $last_time, $status, $predecessor_id, $predecessor_hash, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation smartRollupsGetSmartRollupCommitmentsAsyncWithHttpInfo
     *
     * Get smart rollup commitments
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (an account published the commitment first).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $inbox_level Filter by inbox level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter|null $status Filter by commitment status (&#x60;pending&#x60;, &#x60;cemented&#x60;, &#x60;executed&#x60;, &#x60;refuted&#x60;, or &#x60;orphan&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $predecessor_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $predecessor_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupCommitments'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupCommitmentsAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetIdParameter $inbox_level = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $predecessor_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $predecessor_hash = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupCommitments'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\SrCommitment[]';
        $request = $this->smartRollupsGetSmartRollupCommitmentsRequest($id, $initiator, $rollup, $inbox_level, $hash, $first_level, $first_time, $last_level, $last_time, $status, $predecessor_id, $predecessor_hash, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'smartRollupsGetSmartRollupCommitments'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (an account published the commitment first).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $inbox_level Filter by inbox level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter|null $status Filter by commitment status (&#x60;pending&#x60;, &#x60;cemented&#x60;, &#x60;executed&#x60;, &#x60;refuted&#x60;, or &#x60;orphan&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $predecessor_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $predecessor_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupCommitments'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function smartRollupsGetSmartRollupCommitmentsRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetIdParameter $inbox_level = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $predecessor_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $predecessor_hash = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupCommitments'][0]
    ): Request
    {















        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling SmartRollupsApi.smartRollupsGetSmartRollupCommitments, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling SmartRollupsApi.smartRollupsGetSmartRollupCommitments, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/smart_rollups/commitments';
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
            $initiator,
            'initiator', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $rollup,
            'rollup', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $inbox_level,
            'inboxLevel', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $hash,
            'hash', // param base name
            '\Tzkt\Model\Src1HashParameter', // openApiType
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
            $status,
            'status', // param base name
            '\Tzkt\Model\SrCommitmentStatusParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $predecessor_id,
            'predecessor.id', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $predecessor_hash,
            'predecessor.hash', // param base name
            '\Tzkt\Model\Src1HashParameter', // openApiType
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
     * Operation smartRollupsGetSmartRollupCommitmentsCount
     *
     * Get smart rollup commitments count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (an account published the commitment first).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $inbox_level Filter by inbox level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter|null $status Filter by commitment status (&#x60;pending&#x60;, &#x60;cemented&#x60;, &#x60;executed&#x60;, &#x60;refuted&#x60;, or &#x60;orphan&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $predecessor_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $predecessor_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupCommitmentsCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function smartRollupsGetSmartRollupCommitmentsCount(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetIdParameter $inbox_level = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $predecessor_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $predecessor_hash = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupCommitmentsCount'][0]
    ): int
    {
        list($response) = $this->smartRollupsGetSmartRollupCommitmentsCountWithHttpInfo($id, $initiator, $rollup, $inbox_level, $hash, $first_level, $first_time, $last_level, $last_time, $status, $predecessor_id, $predecessor_hash, $contentType);
        return $response;
    }

    /**
     * Operation smartRollupsGetSmartRollupCommitmentsCountWithHttpInfo
     *
     * Get smart rollup commitments count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (an account published the commitment first).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $inbox_level Filter by inbox level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter|null $status Filter by commitment status (&#x60;pending&#x60;, &#x60;cemented&#x60;, &#x60;executed&#x60;, &#x60;refuted&#x60;, or &#x60;orphan&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $predecessor_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $predecessor_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupCommitmentsCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function smartRollupsGetSmartRollupCommitmentsCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetIdParameter $inbox_level = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $predecessor_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $predecessor_hash = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupCommitmentsCount'][0]
    ): array
    {
        $request = $this->smartRollupsGetSmartRollupCommitmentsCountRequest($id, $initiator, $rollup, $inbox_level, $hash, $first_level, $first_time, $last_level, $last_time, $status, $predecessor_id, $predecessor_hash, $contentType);

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
     * Operation smartRollupsGetSmartRollupCommitmentsCountAsync
     *
     * Get smart rollup commitments count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (an account published the commitment first).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $inbox_level Filter by inbox level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter|null $status Filter by commitment status (&#x60;pending&#x60;, &#x60;cemented&#x60;, &#x60;executed&#x60;, &#x60;refuted&#x60;, or &#x60;orphan&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $predecessor_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $predecessor_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupCommitmentsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupCommitmentsCountAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetIdParameter $inbox_level = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $predecessor_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $predecessor_hash = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupCommitmentsCount'][0]
    ): PromiseInterface
    {
        return $this->smartRollupsGetSmartRollupCommitmentsCountAsyncWithHttpInfo($id, $initiator, $rollup, $inbox_level, $hash, $first_level, $first_time, $last_level, $last_time, $status, $predecessor_id, $predecessor_hash, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation smartRollupsGetSmartRollupCommitmentsCountAsyncWithHttpInfo
     *
     * Get smart rollup commitments count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (an account published the commitment first).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $inbox_level Filter by inbox level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter|null $status Filter by commitment status (&#x60;pending&#x60;, &#x60;cemented&#x60;, &#x60;executed&#x60;, &#x60;refuted&#x60;, or &#x60;orphan&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $predecessor_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $predecessor_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupCommitmentsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupCommitmentsCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetIdParameter $inbox_level = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $predecessor_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $predecessor_hash = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupCommitmentsCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->smartRollupsGetSmartRollupCommitmentsCountRequest($id, $initiator, $rollup, $inbox_level, $hash, $first_level, $first_time, $last_level, $last_time, $status, $predecessor_id, $predecessor_hash, $contentType);

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
     * Create request for operation 'smartRollupsGetSmartRollupCommitmentsCount'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (an account published the commitment first).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $inbox_level Filter by inbox level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the commitment was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the commitment was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter|null $status Filter by commitment status (&#x60;pending&#x60;, &#x60;cemented&#x60;, &#x60;executed&#x60;, &#x60;refuted&#x60;, or &#x60;orphan&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $predecessor_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $predecessor_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupCommitmentsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function smartRollupsGetSmartRollupCommitmentsCountRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetIdParameter $inbox_level = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter $status = null,
        ?\Tzkt\Model\AccountsGetIdParameter $predecessor_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $predecessor_hash = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupCommitmentsCount'][0]
    ): Request
    {














        $resourcePath = '/v1/smart_rollups/commitments/count';
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
            $initiator,
            'initiator', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $rollup,
            'rollup', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $inbox_level,
            'inboxLevel', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $hash,
            'hash', // param base name
            '\Tzkt\Model\Src1HashParameter', // openApiType
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
            $status,
            'status', // param base name
            '\Tzkt\Model\SrCommitmentStatusParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $predecessor_id,
            'predecessor.id', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $predecessor_hash,
            'predecessor.hash', // param base name
            '\Tzkt\Model\Src1HashParameter', // openApiType
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
     * Operation smartRollupsGetSmartRollupGames
     *
     * Get smart rollup games
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (who found a wrong commitment and started the refutation game).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $initiator_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $initiator_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $opponent Filter by opponent (who was accused in publishing a wrong commitment).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $opponent_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $opponent_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupGames'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\SrGame[]
     */
    public function smartRollupsGetSmartRollupGames(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $initiator_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $initiator_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $opponent = null,
        ?\Tzkt\Model\AccountsGetIdParameter $opponent_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $opponent_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupGames'][0]
    ): array
    {
        list($response) = $this->smartRollupsGetSmartRollupGamesWithHttpInfo($id, $rollup, $initiator, $initiator_commitment_id, $initiator_commitment_hash, $opponent, $opponent_commitment_id, $opponent_commitment_hash, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation smartRollupsGetSmartRollupGamesWithHttpInfo
     *
     * Get smart rollup games
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (who found a wrong commitment and started the refutation game).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $initiator_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $initiator_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $opponent Filter by opponent (who was accused in publishing a wrong commitment).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $opponent_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $opponent_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupGames'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\SrGame[], HTTP status code, HTTP response headers (array of strings)
     */
    public function smartRollupsGetSmartRollupGamesWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $initiator_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $initiator_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $opponent = null,
        ?\Tzkt\Model\AccountsGetIdParameter $opponent_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $opponent_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupGames'][0]
    ): array
    {
        $request = $this->smartRollupsGetSmartRollupGamesRequest($id, $rollup, $initiator, $initiator_commitment_id, $initiator_commitment_hash, $opponent, $opponent_commitment_id, $opponent_commitment_hash, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);

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
                    if (in_array('\Tzkt\Model\SrGame[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\SrGame[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\SrGame[]', []),
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

            $returnType = '\Tzkt\Model\SrGame[]';
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
                        '\Tzkt\Model\SrGame[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation smartRollupsGetSmartRollupGamesAsync
     *
     * Get smart rollup games
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (who found a wrong commitment and started the refutation game).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $initiator_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $initiator_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $opponent Filter by opponent (who was accused in publishing a wrong commitment).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $opponent_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $opponent_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupGames'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupGamesAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $initiator_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $initiator_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $opponent = null,
        ?\Tzkt\Model\AccountsGetIdParameter $opponent_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $opponent_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupGames'][0]
    ): PromiseInterface
    {
        return $this->smartRollupsGetSmartRollupGamesAsyncWithHttpInfo($id, $rollup, $initiator, $initiator_commitment_id, $initiator_commitment_hash, $opponent, $opponent_commitment_id, $opponent_commitment_hash, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation smartRollupsGetSmartRollupGamesAsyncWithHttpInfo
     *
     * Get smart rollup games
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (who found a wrong commitment and started the refutation game).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $initiator_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $initiator_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $opponent Filter by opponent (who was accused in publishing a wrong commitment).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $opponent_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $opponent_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupGames'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupGamesAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $initiator_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $initiator_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $opponent = null,
        ?\Tzkt\Model\AccountsGetIdParameter $opponent_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $opponent_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupGames'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\SrGame[]';
        $request = $this->smartRollupsGetSmartRollupGamesRequest($id, $rollup, $initiator, $initiator_commitment_id, $initiator_commitment_hash, $opponent, $opponent_commitment_id, $opponent_commitment_hash, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'smartRollupsGetSmartRollupGames'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (who found a wrong commitment and started the refutation game).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $initiator_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $initiator_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $opponent Filter by opponent (who was accused in publishing a wrong commitment).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $opponent_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $opponent_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupGames'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function smartRollupsGetSmartRollupGamesRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $initiator_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $initiator_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $opponent = null,
        ?\Tzkt\Model\AccountsGetIdParameter $opponent_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $opponent_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupGames'][0]
    ): Request
    {















        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling SmartRollupsApi.smartRollupsGetSmartRollupGames, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling SmartRollupsApi.smartRollupsGetSmartRollupGames, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/smart_rollups/games';
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
            $rollup,
            'rollup', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $initiator,
            'initiator', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $initiator_commitment_id,
            'initiatorCommitment.id', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $initiator_commitment_hash,
            'initiatorCommitment.hash', // param base name
            '\Tzkt\Model\Src1HashParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $opponent,
            'opponent', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $opponent_commitment_id,
            'opponentCommitment.id', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $opponent_commitment_hash,
            'opponentCommitment.hash', // param base name
            '\Tzkt\Model\Src1HashParameter', // openApiType
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
     * Operation smartRollupsGetSmartRollupGamesCount
     *
     * Get smart rollup games count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (who found a wrong commitment and started the refutation game).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $initiator_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $initiator_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $opponent Filter by opponent (who was accused in publishing a wrong commitment).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $opponent_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $opponent_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupGamesCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function smartRollupsGetSmartRollupGamesCount(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $initiator_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $initiator_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $opponent = null,
        ?\Tzkt\Model\AccountsGetIdParameter $opponent_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $opponent_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupGamesCount'][0]
    ): int
    {
        list($response) = $this->smartRollupsGetSmartRollupGamesCountWithHttpInfo($id, $rollup, $initiator, $initiator_commitment_id, $initiator_commitment_hash, $opponent, $opponent_commitment_id, $opponent_commitment_hash, $first_level, $first_time, $last_level, $last_time, $contentType);
        return $response;
    }

    /**
     * Operation smartRollupsGetSmartRollupGamesCountWithHttpInfo
     *
     * Get smart rollup games count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (who found a wrong commitment and started the refutation game).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $initiator_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $initiator_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $opponent Filter by opponent (who was accused in publishing a wrong commitment).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $opponent_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $opponent_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupGamesCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function smartRollupsGetSmartRollupGamesCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $initiator_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $initiator_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $opponent = null,
        ?\Tzkt\Model\AccountsGetIdParameter $opponent_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $opponent_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupGamesCount'][0]
    ): array
    {
        $request = $this->smartRollupsGetSmartRollupGamesCountRequest($id, $rollup, $initiator, $initiator_commitment_id, $initiator_commitment_hash, $opponent, $opponent_commitment_id, $opponent_commitment_hash, $first_level, $first_time, $last_level, $last_time, $contentType);

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
     * Operation smartRollupsGetSmartRollupGamesCountAsync
     *
     * Get smart rollup games count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (who found a wrong commitment and started the refutation game).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $initiator_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $initiator_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $opponent Filter by opponent (who was accused in publishing a wrong commitment).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $opponent_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $opponent_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupGamesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupGamesCountAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $initiator_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $initiator_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $opponent = null,
        ?\Tzkt\Model\AccountsGetIdParameter $opponent_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $opponent_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupGamesCount'][0]
    ): PromiseInterface
    {
        return $this->smartRollupsGetSmartRollupGamesCountAsyncWithHttpInfo($id, $rollup, $initiator, $initiator_commitment_id, $initiator_commitment_hash, $opponent, $opponent_commitment_id, $opponent_commitment_hash, $first_level, $first_time, $last_level, $last_time, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation smartRollupsGetSmartRollupGamesCountAsyncWithHttpInfo
     *
     * Get smart rollup games count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (who found a wrong commitment and started the refutation game).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $initiator_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $initiator_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $opponent Filter by opponent (who was accused in publishing a wrong commitment).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $opponent_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $opponent_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupGamesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupGamesCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $initiator_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $initiator_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $opponent = null,
        ?\Tzkt\Model\AccountsGetIdParameter $opponent_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $opponent_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupGamesCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->smartRollupsGetSmartRollupGamesCountRequest($id, $rollup, $initiator, $initiator_commitment_id, $initiator_commitment_hash, $opponent, $opponent_commitment_id, $opponent_commitment_hash, $first_level, $first_time, $last_level, $last_time, $contentType);

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
     * Create request for operation 'smartRollupsGetSmartRollupGamesCount'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $rollup Filter by smart rollup.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $initiator Filter by initiator (who found a wrong commitment and started the refutation game).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $initiator_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $initiator_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $opponent Filter by opponent (who was accused in publishing a wrong commitment).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $opponent_commitment_id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter|null $opponent_commitment_hash Filter by commitment hash.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp of the block, where the refutation game was started.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp of the block, where the refutation game was last updated.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupGamesCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function smartRollupsGetSmartRollupGamesCountRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $rollup = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $initiator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $initiator_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $initiator_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $opponent = null,
        ?\Tzkt\Model\AccountsGetIdParameter $opponent_commitment_id = null,
        ?\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter $opponent_commitment_hash = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupGamesCount'][0]
    ): Request
    {














        $resourcePath = '/v1/smart_rollups/games/count';
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
            $rollup,
            'rollup', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $initiator,
            'initiator', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $initiator_commitment_id,
            'initiatorCommitment.id', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $initiator_commitment_hash,
            'initiatorCommitment.hash', // param base name
            '\Tzkt\Model\Src1HashParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $opponent,
            'opponent', // param base name
            '\Tzkt\Model\AccountParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $opponent_commitment_id,
            'opponentCommitment.id', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $opponent_commitment_hash,
            'opponentCommitment.hash', // param base name
            '\Tzkt\Model\Src1HashParameter', // openApiType
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
     * Operation smartRollupsGetSmartRollupStakers
     *
     * Get smart rollup stakers
     *
     * @param  \Tzkt\Model\AddressParameter $address Filter by smart rollup staker address.   Click on the parameter to expand more details. (required)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupStakersBondStatusParameter|null $bond_status Filter by staker bond status (&#x60;active&#x60;, &#x60;returned&#x60;, or &#x60;lost&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupStakers'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\SrStaker[]
     */
    public function smartRollupsGetSmartRollupStakers(
        \Tzkt\Model\AddressParameter $address,
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupStakersBondStatusParameter $bond_status = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupStakers'][0]
    ): array
    {
        list($response) = $this->smartRollupsGetSmartRollupStakersWithHttpInfo($address, $id, $bond_status, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation smartRollupsGetSmartRollupStakersWithHttpInfo
     *
     * Get smart rollup stakers
     *
     * @param  \Tzkt\Model\AddressParameter $address Filter by smart rollup staker address.   Click on the parameter to expand more details. (required)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupStakersBondStatusParameter|null $bond_status Filter by staker bond status (&#x60;active&#x60;, &#x60;returned&#x60;, or &#x60;lost&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupStakers'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\SrStaker[], HTTP status code, HTTP response headers (array of strings)
     */
    public function smartRollupsGetSmartRollupStakersWithHttpInfo(
        \Tzkt\Model\AddressParameter $address,
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupStakersBondStatusParameter $bond_status = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupStakers'][0]
    ): array
    {
        $request = $this->smartRollupsGetSmartRollupStakersRequest($address, $id, $bond_status, $sort, $offset, $limit, $select, $contentType);

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
                    if (in_array('\Tzkt\Model\SrStaker[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\SrStaker[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\SrStaker[]', []),
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

            $returnType = '\Tzkt\Model\SrStaker[]';
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
                        '\Tzkt\Model\SrStaker[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation smartRollupsGetSmartRollupStakersAsync
     *
     * Get smart rollup stakers
     *
     * @param  \Tzkt\Model\AddressParameter $address Filter by smart rollup staker address.   Click on the parameter to expand more details. (required)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupStakersBondStatusParameter|null $bond_status Filter by staker bond status (&#x60;active&#x60;, &#x60;returned&#x60;, or &#x60;lost&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupStakers'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupStakersAsync(
        \Tzkt\Model\AddressParameter $address,
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupStakersBondStatusParameter $bond_status = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupStakers'][0]
    ): PromiseInterface
    {
        return $this->smartRollupsGetSmartRollupStakersAsyncWithHttpInfo($address, $id, $bond_status, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation smartRollupsGetSmartRollupStakersAsyncWithHttpInfo
     *
     * Get smart rollup stakers
     *
     * @param  \Tzkt\Model\AddressParameter $address Filter by smart rollup staker address.   Click on the parameter to expand more details. (required)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupStakersBondStatusParameter|null $bond_status Filter by staker bond status (&#x60;active&#x60;, &#x60;returned&#x60;, or &#x60;lost&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupStakers'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupStakersAsyncWithHttpInfo(
        \Tzkt\Model\AddressParameter $address,
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupStakersBondStatusParameter $bond_status = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupStakers'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\SrStaker[]';
        $request = $this->smartRollupsGetSmartRollupStakersRequest($address, $id, $bond_status, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'smartRollupsGetSmartRollupStakers'
     *
     * @param  \Tzkt\Model\AddressParameter $address Filter by smart rollup staker address.   Click on the parameter to expand more details. (required)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\SmartRollupsGetSmartRollupStakersBondStatusParameter|null $bond_status Filter by staker bond status (&#x60;active&#x60;, &#x60;returned&#x60;, or &#x60;lost&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupStakers'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function smartRollupsGetSmartRollupStakersRequest(
        \Tzkt\Model\AddressParameter $address,
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\SmartRollupsGetSmartRollupStakersBondStatusParameter $bond_status = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupStakers'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling smartRollupsGetSmartRollupStakers'
            );
        }





        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling SmartRollupsApi.smartRollupsGetSmartRollupStakers, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling SmartRollupsApi.smartRollupsGetSmartRollupStakers, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/smart_rollups/{address}/stakers';
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
            $bond_status,
            'bondStatus', // param base name
            '\Tzkt\Model\SrBondStatusParameter', // openApiType
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
     * Operation smartRollupsGetSmartRollups
     *
     * Get smart rollups
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by smart rollup address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by smart rollup creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollups'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\SmartRollup[]
     */
    public function smartRollupsGetSmartRollups(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollups'][0]
    ): array
    {
        list($response) = $this->smartRollupsGetSmartRollupsWithHttpInfo($id, $address, $creator, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation smartRollupsGetSmartRollupsWithHttpInfo
     *
     * Get smart rollups
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by smart rollup address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by smart rollup creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollups'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\SmartRollup[], HTTP status code, HTTP response headers (array of strings)
     */
    public function smartRollupsGetSmartRollupsWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollups'][0]
    ): array
    {
        $request = $this->smartRollupsGetSmartRollupsRequest($id, $address, $creator, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $sort, $offset, $limit, $select, $contentType);

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
                    if (in_array('\Tzkt\Model\SmartRollup[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\SmartRollup[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\SmartRollup[]', []),
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

            $returnType = '\Tzkt\Model\SmartRollup[]';
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
                        '\Tzkt\Model\SmartRollup[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation smartRollupsGetSmartRollupsAsync
     *
     * Get smart rollups
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by smart rollup address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by smart rollup creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollups'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupsAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollups'][0]
    ): PromiseInterface
    {
        return $this->smartRollupsGetSmartRollupsAsyncWithHttpInfo($id, $address, $creator, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation smartRollupsGetSmartRollupsAsyncWithHttpInfo
     *
     * Get smart rollups
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by smart rollup address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by smart rollup creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollups'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupsAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollups'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\SmartRollup[]';
        $request = $this->smartRollupsGetSmartRollupsRequest($id, $address, $creator, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'smartRollupsGetSmartRollups'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by smart rollup address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by smart rollup creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollups'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function smartRollupsGetSmartRollupsRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollups'][0]
    ): Request
    {










        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling SmartRollupsApi.smartRollupsGetSmartRollups, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling SmartRollupsApi.smartRollupsGetSmartRollups, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/smart_rollups';
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
            $address,
            'address', // param base name
            '\Tzkt\Model\AddressParameter', // openApiType
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
     * Operation smartRollupsGetSmartRollupsCount
     *
     * Get smart rollups count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by smart rollup address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by smart rollup creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupsCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function smartRollupsGetSmartRollupsCount(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupsCount'][0]
    ): int
    {
        list($response) = $this->smartRollupsGetSmartRollupsCountWithHttpInfo($id, $address, $creator, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $contentType);
        return $response;
    }

    /**
     * Operation smartRollupsGetSmartRollupsCountWithHttpInfo
     *
     * Get smart rollups count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by smart rollup address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by smart rollup creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupsCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function smartRollupsGetSmartRollupsCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupsCount'][0]
    ): array
    {
        $request = $this->smartRollupsGetSmartRollupsCountRequest($id, $address, $creator, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $contentType);

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
     * Operation smartRollupsGetSmartRollupsCountAsync
     *
     * Get smart rollups count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by smart rollup address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by smart rollup creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupsCountAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupsCount'][0]
    ): PromiseInterface
    {
        return $this->smartRollupsGetSmartRollupsCountAsyncWithHttpInfo($id, $address, $creator, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation smartRollupsGetSmartRollupsCountAsyncWithHttpInfo
     *
     * Get smart rollups count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by smart rollup address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by smart rollup creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function smartRollupsGetSmartRollupsCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupsCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->smartRollupsGetSmartRollupsCountRequest($id, $address, $creator, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $contentType);

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
     * Create request for operation 'smartRollupsGetSmartRollupsCount'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetAddressParameter|null $address Filter by smart rollup address.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filter by smart rollup creator.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_activity Filter by level of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_activity_time Filter by timestamp of the block, where the rollup was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_activity Filter by level of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_activity_time Filter by timestamp of the block, where the rollup was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['smartRollupsGetSmartRollupsCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function smartRollupsGetSmartRollupsCountRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetAddressParameter $address = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_activity_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_activity = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_activity_time = null,
        string $contentType = self::contentTypes['smartRollupsGetSmartRollupsCount'][0]
    ): Request
    {









        $resourcePath = '/v1/smart_rollups/count';
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
            $address,
            'address', // param base name
            '\Tzkt\Model\AddressParameter', // openApiType
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
