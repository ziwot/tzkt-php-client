<?php
/**
 * DomainsApi
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
 * DomainsApi Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DomainsApi
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
        'domainsGet' => [
            'application/json',
        ],
        'domainsGetByName' => [
            'application/json',
        ],
        'domainsGetCount' => [
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
     * Operation domainsGet
     *
     * Get domains
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by the domain level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $name Filter by the domain name.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $owner Filter by the domain owner.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $address Filter by the address the domain points to.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $reverse Filter by the &#39;reverse&#39; flag.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $expiration Filter by the domain expiration.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $data Filter by the domain data.   Note, this parameter supports the following format: &#x60;data{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?data.foo&#x3D;bar&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\Domain[]
     */
    public function domainsGet(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $name = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $owner = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $address = null,
        ?\Tzkt\Model\AccountsGetStakedParameter $reverse = null,
        ?\Tzkt\Model\AccountsGetOperationsTimestampParameter $expiration = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $data = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['domainsGet'][0]
    ): array
    {
        list($response) = $this->domainsGetWithHttpInfo($id, $level, $name, $owner, $address, $reverse, $expiration, $data, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);
        return $response;
    }

    /**
     * Operation domainsGetWithHttpInfo
     *
     * Get domains
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by the domain level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $name Filter by the domain name.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $owner Filter by the domain owner.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $address Filter by the address the domain points to.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $reverse Filter by the &#39;reverse&#39; flag.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $expiration Filter by the domain expiration.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $data Filter by the domain data.   Note, this parameter supports the following format: &#x60;data{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?data.foo&#x3D;bar&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGet'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\Domain[], HTTP status code, HTTP response headers (array of strings)
     */
    public function domainsGetWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $name = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $owner = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $address = null,
        ?\Tzkt\Model\AccountsGetStakedParameter $reverse = null,
        ?\Tzkt\Model\AccountsGetOperationsTimestampParameter $expiration = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $data = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['domainsGet'][0]
    ): array
    {
        $request = $this->domainsGetRequest($id, $level, $name, $owner, $address, $reverse, $expiration, $data, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);

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
                    if (in_array('\Tzkt\Model\Domain[]', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Domain[]' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Domain[]', []),
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

            $returnType = '\Tzkt\Model\Domain[]';
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
                        '\Tzkt\Model\Domain[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation domainsGetAsync
     *
     * Get domains
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by the domain level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $name Filter by the domain name.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $owner Filter by the domain owner.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $address Filter by the address the domain points to.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $reverse Filter by the &#39;reverse&#39; flag.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $expiration Filter by the domain expiration.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $data Filter by the domain data.   Note, this parameter supports the following format: &#x60;data{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?data.foo&#x3D;bar&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function domainsGetAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $name = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $owner = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $address = null,
        ?\Tzkt\Model\AccountsGetStakedParameter $reverse = null,
        ?\Tzkt\Model\AccountsGetOperationsTimestampParameter $expiration = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $data = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['domainsGet'][0]
    ): PromiseInterface
    {
        return $this->domainsGetAsyncWithHttpInfo($id, $level, $name, $owner, $address, $reverse, $expiration, $data, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation domainsGetAsyncWithHttpInfo
     *
     * Get domains
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by the domain level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $name Filter by the domain name.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $owner Filter by the domain owner.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $address Filter by the address the domain points to.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $reverse Filter by the &#39;reverse&#39; flag.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $expiration Filter by the domain expiration.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $data Filter by the domain data.   Note, this parameter supports the following format: &#x60;data{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?data.foo&#x3D;bar&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function domainsGetAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $name = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $owner = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $address = null,
        ?\Tzkt\Model\AccountsGetStakedParameter $reverse = null,
        ?\Tzkt\Model\AccountsGetOperationsTimestampParameter $expiration = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $data = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['domainsGet'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\Domain[]';
        $request = $this->domainsGetRequest($id, $level, $name, $owner, $address, $reverse, $expiration, $data, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select, $contentType);

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
     * Create request for operation 'domainsGet'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by the domain level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $name Filter by the domain name.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $owner Filter by the domain owner.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $address Filter by the address the domain points to.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $reverse Filter by the &#39;reverse&#39; flag.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $expiration Filter by the domain expiration.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $data Filter by the domain data.   Note, this parameter supports the following format: &#x60;data{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?data.foo&#x3D;bar&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetSortParameter|null $sort Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOffsetParameter|null $offset Specifies which or how many items should be skipped.   Click on the parameter to expand more details. (optional)
     * @param  int|null $limit Maximum number of items to return. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysSelectParameter|null $select Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGet'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function domainsGetRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $name = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $owner = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $address = null,
        ?\Tzkt\Model\AccountsGetStakedParameter $reverse = null,
        ?\Tzkt\Model\AccountsGetOperationsTimestampParameter $expiration = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $data = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        ?\Tzkt\Model\AccountsGetSortParameter $sort = null,
        ?\Tzkt\Model\AccountsGetOffsetParameter $offset = null,
        ?int $limit = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter $select = null,
        string $contentType = self::contentTypes['domainsGet'][0]
    ): Request
    {















        if ($limit !== null && $limit > 10000) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling DomainsApi.domainsGet, must be smaller than or equal to 10000.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling DomainsApi.domainsGet, must be bigger than or equal to 0.');
        }
        


        $resourcePath = '/v1/domains';
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
            $name,
            'name', // param base name
            '\Tzkt\Model\StringParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $owner,
            'owner', // param base name
            '\Tzkt\Model\AddressNullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $address,
            'address', // param base name
            '\Tzkt\Model\AddressNullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $reverse,
            'reverse', // param base name
            '\Tzkt\Model\BoolParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expiration,
            'expiration', // param base name
            '\Tzkt\Model\DateTimeParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $data,
            'data', // param base name
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
     * Operation domainsGetByName
     *
     * Get domain by name
     *
     * @param  string $name Domain name (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGetByName'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return \Tzkt\Model\Domain
     */
    public function domainsGetByName(
        string $name,
        string $contentType = self::contentTypes['domainsGetByName'][0]
    ): \Tzkt\Model\Domain
    {
        list($response) = $this->domainsGetByNameWithHttpInfo($name, $contentType);
        return $response;
    }

    /**
     * Operation domainsGetByNameWithHttpInfo
     *
     * Get domain by name
     *
     * @param  string $name Domain name (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGetByName'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of \Tzkt\Model\Domain, HTTP status code, HTTP response headers (array of strings)
     */
    public function domainsGetByNameWithHttpInfo(
        string $name,
        string $contentType = self::contentTypes['domainsGetByName'][0]
    ): array
    {
        $request = $this->domainsGetByNameRequest($name, $contentType);

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
                    if (in_array('\Tzkt\Model\Domain', ['\SplFileObject', '\Psr\Http\Message\StreamInterface'])) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Tzkt\Model\Domain' !== 'string') {
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
                        ObjectSerializer::deserialize($content, '\Tzkt\Model\Domain', []),
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

            $returnType = '\Tzkt\Model\Domain';
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
                        '\Tzkt\Model\Domain',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation domainsGetByNameAsync
     *
     * Get domain by name
     *
     * @param  string $name Domain name (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGetByName'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function domainsGetByNameAsync(
        string $name,
        string $contentType = self::contentTypes['domainsGetByName'][0]
    ): PromiseInterface
    {
        return $this->domainsGetByNameAsyncWithHttpInfo($name, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation domainsGetByNameAsyncWithHttpInfo
     *
     * Get domain by name
     *
     * @param  string $name Domain name (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGetByName'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function domainsGetByNameAsyncWithHttpInfo(
        string $name,
        string $contentType = self::contentTypes['domainsGetByName'][0]
    ): PromiseInterface
    {
        $returnType = '\Tzkt\Model\Domain';
        $request = $this->domainsGetByNameRequest($name, $contentType);

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
     * Create request for operation 'domainsGetByName'
     *
     * @param  string $name Domain name (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGetByName'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function domainsGetByNameRequest(
        string $name,
        string $contentType = self::contentTypes['domainsGetByName'][0]
    ): Request
    {

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $name when calling domainsGetByName'
            );
        }


        $resourcePath = '/v1/domains/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation domainsGetCount
     *
     * Get domains count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by the domain level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $name Filter by the domain name.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $owner Filter by the domain owner.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $address Filter by the address the domain points to.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $reverse Filter by the &#39;reverse&#39; flag.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $expiration Filter by the domain expiration.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $data Filter by the domain data.   Note, this parameter supports the following format: &#x60;data{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?data.foo&#x3D;bar&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGetCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return int
     */
    public function domainsGetCount(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $name = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $owner = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $address = null,
        ?\Tzkt\Model\AccountsGetStakedParameter $reverse = null,
        ?\Tzkt\Model\AccountsGetOperationsTimestampParameter $expiration = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $data = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['domainsGetCount'][0]
    ): int
    {
        list($response) = $this->domainsGetCountWithHttpInfo($id, $level, $name, $owner, $address, $reverse, $expiration, $data, $first_level, $first_time, $last_level, $last_time, $contentType);
        return $response;
    }

    /**
     * Operation domainsGetCountWithHttpInfo
     *
     * Get domains count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by the domain level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $name Filter by the domain name.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $owner Filter by the domain owner.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $address Filter by the address the domain points to.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $reverse Filter by the &#39;reverse&#39; flag.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $expiration Filter by the domain expiration.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $data Filter by the domain data.   Note, this parameter supports the following format: &#x60;data{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?data.foo&#x3D;bar&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGetCount'] to see the possible values for this operation
     *
     * @throws ApiException on non-2xx response or if the response body is not in the expected format
     * @throws InvalidArgumentException
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function domainsGetCountWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $name = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $owner = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $address = null,
        ?\Tzkt\Model\AccountsGetStakedParameter $reverse = null,
        ?\Tzkt\Model\AccountsGetOperationsTimestampParameter $expiration = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $data = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['domainsGetCount'][0]
    ): array
    {
        $request = $this->domainsGetCountRequest($id, $level, $name, $owner, $address, $reverse, $expiration, $data, $first_level, $first_time, $last_level, $last_time, $contentType);

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
     * Operation domainsGetCountAsync
     *
     * Get domains count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by the domain level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $name Filter by the domain name.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $owner Filter by the domain owner.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $address Filter by the address the domain points to.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $reverse Filter by the &#39;reverse&#39; flag.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $expiration Filter by the domain expiration.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $data Filter by the domain data.   Note, this parameter supports the following format: &#x60;data{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?data.foo&#x3D;bar&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGetCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function domainsGetCountAsync(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $name = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $owner = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $address = null,
        ?\Tzkt\Model\AccountsGetStakedParameter $reverse = null,
        ?\Tzkt\Model\AccountsGetOperationsTimestampParameter $expiration = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $data = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['domainsGetCount'][0]
    ): PromiseInterface
    {
        return $this->domainsGetCountAsyncWithHttpInfo($id, $level, $name, $owner, $address, $reverse, $expiration, $data, $first_level, $first_time, $last_level, $last_time, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation domainsGetCountAsyncWithHttpInfo
     *
     * Get domains count
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by the domain level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $name Filter by the domain name.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $owner Filter by the domain owner.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $address Filter by the address the domain points to.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $reverse Filter by the &#39;reverse&#39; flag.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $expiration Filter by the domain expiration.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $data Filter by the domain data.   Note, this parameter supports the following format: &#x60;data{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?data.foo&#x3D;bar&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGetCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function domainsGetCountAsyncWithHttpInfo(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $name = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $owner = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $address = null,
        ?\Tzkt\Model\AccountsGetStakedParameter $reverse = null,
        ?\Tzkt\Model\AccountsGetOperationsTimestampParameter $expiration = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $data = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['domainsGetCount'][0]
    ): PromiseInterface
    {
        $returnType = 'int';
        $request = $this->domainsGetCountRequest($id, $level, $name, $owner, $address, $reverse, $expiration, $data, $first_level, $first_time, $last_level, $last_time, $contentType);

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
     * Create request for operation 'domainsGetCount'
     *
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $id Filter by internal TzKT id.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $level Filter by the domain level.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsEntrypointParameter|null $name Filter by the domain name.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $owner Filter by the domain owner.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\DomainsGetCountOwnerParameter|null $address Filter by the address the domain points to.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetStakedParameter|null $reverse Filter by the &#39;reverse&#39; flag.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsTimestampParameter|null $expiration Filter by the domain expiration.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetOperationsParameterParameter|null $data Filter by the domain data.   Note, this parameter supports the following format: &#x60;data{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?data.foo&#x3D;bar&#x60;).   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $first_level Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $first_time Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\AccountsGetIdParameter|null $last_level Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  \Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter|null $last_time Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['domainsGetCount'] to see the possible values for this operation
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function domainsGetCountRequest(
        ?\Tzkt\Model\AccountsGetIdParameter $id = null,
        ?\Tzkt\Model\AccountsGetIdParameter $level = null,
        ?\Tzkt\Model\AccountsGetOperationsEntrypointParameter $name = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $owner = null,
        ?\Tzkt\Model\DomainsGetCountOwnerParameter $address = null,
        ?\Tzkt\Model\AccountsGetStakedParameter $reverse = null,
        ?\Tzkt\Model\AccountsGetOperationsTimestampParameter $expiration = null,
        ?\Tzkt\Model\AccountsGetOperationsParameterParameter $data = null,
        ?\Tzkt\Model\AccountsGetIdParameter $first_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $first_time = null,
        ?\Tzkt\Model\AccountsGetIdParameter $last_level = null,
        ?\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter $last_time = null,
        string $contentType = self::contentTypes['domainsGetCount'][0]
    ): Request
    {














        $resourcePath = '/v1/domains/count';
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
            $name,
            'name', // param base name
            '\Tzkt\Model\StringParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $owner,
            'owner', // param base name
            '\Tzkt\Model\AddressNullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $address,
            'address', // param base name
            '\Tzkt\Model\AddressNullParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $reverse,
            'reverse', // param base name
            '\Tzkt\Model\BoolParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $expiration,
            'expiration', // param base name
            '\Tzkt\Model\DateTimeParameter', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $data,
            'data', // param base name
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
