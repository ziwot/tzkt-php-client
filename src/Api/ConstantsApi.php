<?php
/**
 * ConstantsApi
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
 * ConstantsApi Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConstantsApi
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
        'constantsGet' => [
            'application/json',
        ],
        'constantsGetByAddress' => [
            'application/json',
        ],
        'constantsGetCount' => [
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
     * Operation constantsGet
     *
     * Get global constants
     *
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysHashParameter|null $address Filters constants by global address (starts with &#x60;expr..&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $creation_level Filters constants by creation level. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $creation_time Filters constants by creation time. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filters constants by creator. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $refs Filters constants by number of refs. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $size Filters constants by size in bytes. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;creationLevel&#x60;, &#x60;size&#x60;, &#x60;refs&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  int|null $format Constant value format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\Constant[]
     */
    public function constantsGet(
        ?\Tzkt\Model\BigMapsGetBigMapKeysHashParameter $address = null,
        ?\Tzkt\Model\AccountsGetIdParameter $creation_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $creation_time = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $refs = null,
        ?\Tzkt\Model\AccountsGetIdParameter $size = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?int $format = 0,
        string $contentType = self::contentTypes['constantsGet'][0]
    ): array
    {
        list($response) = $this->constantsGetWithHttpInfo($address, $creation_level, $creation_time, $creator, $refs, $size, $select, $sort, $offset, $limit, $format, $contentType);
        return $response;
    }

    /**
     * Operation constantsGetWithHttpInfo
     *
     * Get global constants
     *
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysHashParameter|null $address Filters constants by global address (starts with &#x60;expr..&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $creation_level Filters constants by creation level. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $creation_time Filters constants by creation time. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filters constants by creator. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $refs Filters constants by number of refs. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $size Filters constants by size in bytes. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;creationLevel&#x60;, &#x60;size&#x60;, &#x60;refs&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  int|null $format Constant value format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\Constant[], HTTP status code, HTTP response headers (array of strings)
     */
    public function constantsGetWithHttpInfo(
        ?\Tzkt\Model\BigMapsGetBigMapKeysHashParameter $address = null,
        ?\Tzkt\Model\AccountsGetIdParameter $creation_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $creation_time = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $refs = null,
        ?\Tzkt\Model\AccountsGetIdParameter $size = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?int $format = 0,
        string $contentType = self::contentTypes['constantsGet'][0]
    ): array
    {
        $request = $this->constantsGetRequest($address, $creation_level, $creation_time, $creator, $refs, $size, $select, $sort, $offset, $limit, $format, $contentType);

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
                    if (in_array('\Tzkt\Model\Constant[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Constant[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Constant[]', []),
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

            $returnType = '\Tzkt\Model\Constant[]';
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
                        '\Tzkt\Model\Constant[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation constantsGetAsync
     *
     * Get global constants
     *
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysHashParameter|null $address Filters constants by global address (starts with &#x60;expr..&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $creation_level Filters constants by creation level. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $creation_time Filters constants by creation time. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filters constants by creator. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $refs Filters constants by number of refs. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $size Filters constants by size in bytes. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;creationLevel&#x60;, &#x60;size&#x60;, &#x60;refs&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  int|null $format Constant value format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function constantsGetAsync(
        ?\Tzkt\Model\BigMapsGetBigMapKeysHashParameter $address = null,
        ?\Tzkt\Model\AccountsGetIdParameter $creation_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $creation_time = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $refs = null,
        ?\Tzkt\Model\AccountsGetIdParameter $size = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?int $format = 0,
        string $contentType = self::contentTypes['constantsGet'][0]
    ): PromiseInterface
    {
        return $this->constantsGetAsyncWithHttpInfo($address, $creation_level, $creation_time, $creator, $refs, $size, $select, $sort, $offset, $limit, $format, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation constantsGetAsyncWithHttpInfo
     *
     * Get global constants
     *
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysHashParameter|null $address Filters constants by global address (starts with &#x60;expr..&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $creation_level Filters constants by creation level. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $creation_time Filters constants by creation time. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filters constants by creator. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $refs Filters constants by number of refs. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $size Filters constants by size in bytes. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;creationLevel&#x60;, &#x60;size&#x60;, &#x60;refs&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  int|null $format Constant value format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function constantsGetAsyncWithHttpInfo(
        ?\Tzkt\Model\BigMapsGetBigMapKeysHashParameter $address = null,
        ?\Tzkt\Model\AccountsGetIdParameter $creation_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $creation_time = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $refs = null,
        ?\Tzkt\Model\AccountsGetIdParameter $size = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?int $format = 0,
        string $contentType = self::contentTypes['constantsGet'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\Constant[]';
        $request = $this->constantsGetRequest($address, $creation_level, $creation_time, $creator, $refs, $size, $select, $sort, $offset, $limit, $format, $contentType);

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
     * Create request for operation 'constantsGet'
     *
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysHashParameter|null $address Filters constants by global address (starts with &#x60;expr..&#x60;). (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $creation_level Filters constants by creation level. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $creation_time Filters constants by creation time. (optional)
     * @param  \Tzkt\Model\AccountsGetDelegateParameter|null $creator Filters constants by creator. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $refs Filters constants by number of refs. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $size Filters constants by size in bytes. (optional)
     * @param  \Tzkt\Model\AccountsGetSelectParameter|null $select Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;creationLevel&#x60;, &#x60;size&#x60;, &#x60;refs&#x60;. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped (optional)
     * @param  int|null $limit Maximum number of items to return (optional, default to 100)
     * @param  int|null $format Constant value format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function constantsGetRequest(
        ?\Tzkt\Model\BigMapsGetBigMapKeysHashParameter $address = null,
        ?\Tzkt\Model\AccountsGetIdParameter $creation_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $creation_time = null,
        ?\Tzkt\Model\AccountsGetDelegateParameter $creator = null,
        ?\Tzkt\Model\AccountsGetIdParameter $refs = null,
        ?\Tzkt\Model\AccountsGetIdParameter $size = null,
        ?\Tzkt\Model\AccountsGetSelectParameter $select = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = 100,
        ?int $format = 0,
        string $contentType = self::contentTypes['constantsGet'][0]
    ): Request
    {










        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ConstantsApi.constantsGet, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling ConstantsApi.constantsGet, must be bigger than or equal to 0.');
        }
        
        if ($format !== null && $format > 2) {
            throw new InvalidArgumentException('invalid value for "$format" when calling ConstantsApi.constantsGet, must be smaller than or equal to 2.');
        }
        if ($format !== null && $format < 0) {
            throw new InvalidArgumentException('invalid value for "$format" when calling ConstantsApi.constantsGet, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/constants';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $address,
            'address', // param base name
            '\Tzkt\Model\ExpressionParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $creation_level,
            'creationLevel', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $creation_time,
            'creationTime', // param base name
            '\Tzkt\Model\TimestampParameter', // openApiType
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
            $refs,
            'refs', // param base name
            '\Tzkt\Model\Int32Parameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $size,
            'size', // param base name
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
            $format,
            'format', // param base name
            'integer', // openApiType
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
     * Operation constantsGetByAddress
     *
     * Get global constant by address
     *
     * @param  string $address Global address (starts with &#x60;expr..&#x60;) (required)
     * @param  int|null $format Constant value format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGetByAddress'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\Constant
     */
    public function constantsGetByAddress(
        string $address,
        ?int $format = 0,
        string $contentType = self::contentTypes['constantsGetByAddress'][0]
    ): \Tzkt\Model\Constant
    {
        list($response) = $this->constantsGetByAddressWithHttpInfo($address, $format, $contentType);
        return $response;
    }

    /**
     * Operation constantsGetByAddressWithHttpInfo
     *
     * Get global constant by address
     *
     * @param  string $address Global address (starts with &#x60;expr..&#x60;) (required)
     * @param  int|null $format Constant value format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGetByAddress'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\Constant, HTTP status code, HTTP response headers (array of strings)
     */
    public function constantsGetByAddressWithHttpInfo(
        string $address,
        ?int $format = 0,
        string $contentType = self::contentTypes['constantsGetByAddress'][0]
    ): array
    {
        $request = $this->constantsGetByAddressRequest($address, $format, $contentType);

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
                    if (in_array('\Tzkt\Model\Constant', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Constant' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Constant', []),
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

            $returnType = '\Tzkt\Model\Constant';
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
                        '\Tzkt\Model\Constant',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation constantsGetByAddressAsync
     *
     * Get global constant by address
     *
     * @param  string $address Global address (starts with &#x60;expr..&#x60;) (required)
     * @param  int|null $format Constant value format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGetByAddress'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function constantsGetByAddressAsync(
        string $address,
        ?int $format = 0,
        string $contentType = self::contentTypes['constantsGetByAddress'][0]
    ): PromiseInterface
    {
        return $this->constantsGetByAddressAsyncWithHttpInfo($address, $format, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation constantsGetByAddressAsyncWithHttpInfo
     *
     * Get global constant by address
     *
     * @param  string $address Global address (starts with &#x60;expr..&#x60;) (required)
     * @param  int|null $format Constant value format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGetByAddress'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function constantsGetByAddressAsyncWithHttpInfo(
        string $address,
        ?int $format = 0,
        string $contentType = self::contentTypes['constantsGetByAddress'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\Constant';
        $request = $this->constantsGetByAddressRequest($address, $format, $contentType);

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
     * Create request for operation 'constantsGetByAddress'
     *
     * @param  string $address Global address (starts with &#x60;expr..&#x60;) (required)
     * @param  int|null $format Constant value format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) (optional, default to 0)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGetByAddress'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function constantsGetByAddressRequest(
        string $address,
        ?int $format = 0,
        string $contentType = self::contentTypes['constantsGetByAddress'][0]
    ): Request
    {

        // verify the required parameter 'address' is set
        if ($address === null || (is_array($address) && count($address) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $address when calling constantsGetByAddress'
            );
        }

        if ($format !== null && $format > 2) {
            throw new InvalidArgumentException('invalid value for "$format" when calling ConstantsApi.constantsGetByAddress, must be smaller than or equal to 2.');
        }
        if ($format !== null && $format < 0) {
            throw new InvalidArgumentException('invalid value for "$format" when calling ConstantsApi.constantsGetByAddress, must be bigger than or equal to 0.');
        }
        

        $resourcePath = '/v1/constants/{address}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
     * Operation constantsGetCount
     *
     * Get global constants count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $refs Filters constants by number of refs. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGetCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function constantsGetCount(
        ?\Tzkt\Model\AccountsGetIdParameter $refs = null,
        string $contentType = self::contentTypes['constantsGetCount'][0]
    ): int
    {
        list($response) = $this->constantsGetCountWithHttpInfo($refs, $contentType);
        return $response;
    }

    /**
     * Operation constantsGetCountWithHttpInfo
     *
     * Get global constants count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $refs Filters constants by number of refs. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGetCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function constantsGetCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $refs = null,
        string $contentType = self::contentTypes['constantsGetCount'][0]
    ): array
    {
        $request = $this->constantsGetCountRequest($refs, $contentType);

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
     * Operation constantsGetCountAsync
     *
     * Get global constants count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $refs Filters constants by number of refs. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGetCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function constantsGetCountAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $refs = null,
        string $contentType = self::contentTypes['constantsGetCount'][0]
    ): PromiseInterface
    {
        return $this->constantsGetCountAsyncWithHttpInfo($refs, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation constantsGetCountAsyncWithHttpInfo
     *
     * Get global constants count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $refs Filters constants by number of refs. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGetCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function constantsGetCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $refs = null,
        string $contentType = self::contentTypes['constantsGetCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->constantsGetCountRequest($refs, $contentType);

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
     * Create request for operation 'constantsGetCount'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $refs Filters constants by number of refs. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['constantsGetCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function constantsGetCountRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $refs = null,
        string $contentType = self::contentTypes['constantsGetCount'][0]
    ): Request
    {



        $resourcePath = '/v1/constants/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $refs,
            'refs', // param base name
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
