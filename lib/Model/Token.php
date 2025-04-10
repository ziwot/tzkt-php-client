<?php
/**
 * Token
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TzKT API
 *
 * # Introduction    TzKT is the most widely used tool in Tezos that provides you with convenient and flexible access to the Tezos blockchain data, processed and indexed by its own indexer.   You can fetch all historical data via REST API, or subscribe for real-time data via WebSocket API. TzKT was built by the joint efforts of the entire Tezos community   to help developers build more services and dapps on top of Tezos.    TzKT Indexer and API are [open-source](https://github.com/baking-bad/tzkt), so don't be afraid to depend on the third-party service,  because you can always clone, build and run it yourself to have full control over all the components.    Feel free to contact us if you have any questions or feature requests.  Your feedback is much appreciated!    - Discord: https://discord.gg/aG8XKuwsQd  - Telegram: https://t.me/baking_bad_chat  - Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L  - Twitter: https://twitter.com/TezosBakingBad  - Email: hello@bakingbad.dev    And don't forget to star TzKT [on GitHub](https://github.com/baking-bad/tzkt) if you like it 😊    # Get Started    There are two API services provided for public use:  - **Free TzKT API** with free anonymous access;  - **TzKT Pro** with paid subscriptions with increased rate limits, off-chain data, extended support and business-level SLA.    You can find more details about differences between available tiers [here](https://tzkt.io/api).    ## Free TzKT API    Free-tier TzKT API is the best way to get started and explore available Tezos data and API functionality.  It doesn't require authorization and is free for everyone and for both commercial and non-commercial use.    > #### Note: attribution required  If you use free-tier TzKT API, you **must** mention it on your website or application by placing the label  \"Powered by TzKT API\", or \"Built with TzKT API\", or \"Data provided by TzKT API\" with a direct link to [tzkt.io](https://tzkt.io).    It's available for the following Tezos networks with the following base URLs:    - Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io))  - Ghostnet: `https://api.ghostnet.tzkt.io/` ([view docs](https://api.ghostnet.tzkt.io))  - Quebecnet: `https://api.quebecnet.tzkt.io/` ([view docs](https://api.quebecnet.tzkt.io))    ### Sending Requests    To send a request to Free TzKT API you need literally nothing. Just take the base URL of the particular network  (for example, Tezos mainnet: `https://api.tzkt.io`) and append the path of the particular endpoint  (for example, chain's head: `/v1/head`), that's pretty much it:     ```bash  curl https://api.tzkt.io/v1/head  ```    Read through this documentation to explore available endpoints, query parameters  (note, if you click on a query parameter, you will see available modes, such as `.eq`, `.in`, etc.)  and response models. If you have any questions, do not hesitate to ask for support, Tezos community has always been very friendly! 😉    ### Rate Limits    Please, refer to https://tzkt.io/api to check relevant rate limits.    If you exceed the limit, the API will respond with `HTTP 429` status code.    ## TzKT Pro    TzKT Pro is intended for professional use, for those who seek for extended capabilities, performance, reliability and business-level SLA.  TzKT Pro service is provided via paid subscriptions. Please, refer to [Pricing Plans](https://tzkt.io/api) to check available tiers.    It's available for the following Tezos networks with the following base URLs:    - Mainnet: `https://pro.tzkt.io/` ([view docs](https://api.tzkt.io))  - Testnets: *let us know if you need TzKT Pro for testnets*    ### Authorization    To access TzKT Pro you will need to authorize requests with your personal API key, that you will receive on your email after purchasing a subscription.  This can be done by adding the query string parameter `?apikey={your_key}` or by adding the HTTP header `apikey: {your_key}`.    Note that you can have multiple API keys within a single subscription.    Keep your API keys private, do not publish it anywhere and do not hardcode it, especially in public repositories.  If your key was compromised, just let us know and we will issue a new one.    Also note that passing the API key via HTTP headers is more secure, because in HTTPS headers are encrypted,  but query string is not, so the key can be unintentionally exposed to third parties.    ### Sending Requests    Sending a request with the API key passed as a query string parameter:    ```bash  curl https://pro.tzkt.io/v1/head?apikey={your_key}  ```    Sending a request with the API key passed via an HTTP header:    ```bash  curl https://pro.tzkt.io/v1/head \\      -H 'apikey: {your_key}'  ```    ### Rate Limits    Please, refer to https://tzkt.io/api to check relevant rate limits for different pricing plans.    Also, TzKT Pro provides you with the additional HTTP headers to show the allowed limits, number of available requests  and the time remaining (in seconds) until the quota is reset. Here's an example:    ```  RateLimit-Limit: 50  RateLimit-Remaining: 49  RateLimit-Reset: 1  ```    It also sends general information about your rate limits per second and per day:    ```  X-RateLimit-Limit-Second: 50  X-RateLimit-Remaining-Second: 49  X-RateLimit-Limit-Day: 3000000  X-RateLimit-Remaining-Day: 2994953  ```    If you exceed the limit, the API will respond with `HTTP 429` status code.
 *
 * The version of the OpenAPI document: 1.14.7
 * Contact: hello@bakingbad.dev
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Tzkt\Model;

use \ArrayAccess;
use \Tzkt\ObjectSerializer;

/**
 * Token Class Doc Comment
 *
 * @category Class
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Token implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Token';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'contract' => '\Tzkt\Model\TokenContract',
        'token_id' => 'string',
        'standard' => 'string',
        'first_minter' => '\Tzkt\Model\TokenFirstMinter',
        'first_level' => 'int',
        'first_time' => '\DateTime',
        'last_level' => 'int',
        'last_time' => '\DateTime',
        'transfers_count' => 'int',
        'balances_count' => 'int',
        'holders_count' => 'int',
        'total_minted' => 'string',
        'total_burned' => 'string',
        'total_supply' => 'string',
        'metadata' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'contract' => null,
        'token_id' => null,
        'standard' => null,
        'first_minter' => null,
        'first_level' => 'int32',
        'first_time' => 'date-time',
        'last_level' => 'int32',
        'last_time' => 'date-time',
        'transfers_count' => 'int32',
        'balances_count' => 'int32',
        'holders_count' => 'int32',
        'total_minted' => null,
        'total_burned' => null,
        'total_supply' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'contract' => true,
        'token_id' => false,
        'standard' => true,
        'first_minter' => true,
        'first_level' => false,
        'first_time' => false,
        'last_level' => false,
        'last_time' => false,
        'transfers_count' => false,
        'balances_count' => false,
        'holders_count' => false,
        'total_minted' => false,
        'total_burned' => false,
        'total_supply' => false,
        'metadata' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'contract' => 'contract',
        'token_id' => 'tokenId',
        'standard' => 'standard',
        'first_minter' => 'firstMinter',
        'first_level' => 'firstLevel',
        'first_time' => 'firstTime',
        'last_level' => 'lastLevel',
        'last_time' => 'lastTime',
        'transfers_count' => 'transfersCount',
        'balances_count' => 'balancesCount',
        'holders_count' => 'holdersCount',
        'total_minted' => 'totalMinted',
        'total_burned' => 'totalBurned',
        'total_supply' => 'totalSupply',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'contract' => 'setContract',
        'token_id' => 'setTokenId',
        'standard' => 'setStandard',
        'first_minter' => 'setFirstMinter',
        'first_level' => 'setFirstLevel',
        'first_time' => 'setFirstTime',
        'last_level' => 'setLastLevel',
        'last_time' => 'setLastTime',
        'transfers_count' => 'setTransfersCount',
        'balances_count' => 'setBalancesCount',
        'holders_count' => 'setHoldersCount',
        'total_minted' => 'setTotalMinted',
        'total_burned' => 'setTotalBurned',
        'total_supply' => 'setTotalSupply',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'contract' => 'getContract',
        'token_id' => 'getTokenId',
        'standard' => 'getStandard',
        'first_minter' => 'getFirstMinter',
        'first_level' => 'getFirstLevel',
        'first_time' => 'getFirstTime',
        'last_level' => 'getLastLevel',
        'last_time' => 'getLastTime',
        'transfers_count' => 'getTransfersCount',
        'balances_count' => 'getBalancesCount',
        'holders_count' => 'getHoldersCount',
        'total_minted' => 'getTotalMinted',
        'total_burned' => 'getTotalBurned',
        'total_supply' => 'getTotalSupply',
        'metadata' => 'getMetadata'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('contract', $data ?? [], null);
        $this->setIfExists('token_id', $data ?? [], null);
        $this->setIfExists('standard', $data ?? [], null);
        $this->setIfExists('first_minter', $data ?? [], null);
        $this->setIfExists('first_level', $data ?? [], null);
        $this->setIfExists('first_time', $data ?? [], null);
        $this->setIfExists('last_level', $data ?? [], null);
        $this->setIfExists('last_time', $data ?? [], null);
        $this->setIfExists('transfers_count', $data ?? [], null);
        $this->setIfExists('balances_count', $data ?? [], null);
        $this->setIfExists('holders_count', $data ?? [], null);
        $this->setIfExists('total_minted', $data ?? [], null);
        $this->setIfExists('total_burned', $data ?? [], null);
        $this->setIfExists('total_supply', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Internal TzKT id (not the same as `tokenId`).   **[sortable]**
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return \Tzkt\Model\TokenContract|null
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param \Tzkt\Model\TokenContract|null $contract contract
     *
     * @return self
     */
    public function setContract($contract)
    {
        if (is_null($contract)) {
            array_push($this->openAPINullablesSetToNull, 'contract');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contract', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets token_id
     *
     * @return string|null
     */
    public function getTokenId()
    {
        return $this->container['token_id'];
    }

    /**
     * Sets token_id
     *
     * @param string|null $token_id Token id, unique within the contract.   **[sortable]**
     *
     * @return self
     */
    public function setTokenId($token_id)
    {
        if (is_null($token_id)) {
            throw new \InvalidArgumentException('non-nullable token_id cannot be null');
        }
        $this->container['token_id'] = $token_id;

        return $this;
    }

    /**
     * Gets standard
     *
     * @return string|null
     */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
     * Sets standard
     *
     * @param string|null $standard Token standard (`fa1.2` or `fa2`).
     *
     * @return self
     */
    public function setStandard($standard)
    {
        if (is_null($standard)) {
            array_push($this->openAPINullablesSetToNull, 'standard');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('standard', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['standard'] = $standard;

        return $this;
    }

    /**
     * Gets first_minter
     *
     * @return \Tzkt\Model\TokenFirstMinter|null
     */
    public function getFirstMinter()
    {
        return $this->container['first_minter'];
    }

    /**
     * Sets first_minter
     *
     * @param \Tzkt\Model\TokenFirstMinter|null $first_minter first_minter
     *
     * @return self
     */
    public function setFirstMinter($first_minter)
    {
        if (is_null($first_minter)) {
            array_push($this->openAPINullablesSetToNull, 'first_minter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('first_minter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['first_minter'] = $first_minter;

        return $this;
    }

    /**
     * Gets first_level
     *
     * @return int|null
     */
    public function getFirstLevel()
    {
        return $this->container['first_level'];
    }

    /**
     * Sets first_level
     *
     * @param int|null $first_level Level of the block where the token was first seen.   **[sortable]**
     *
     * @return self
     */
    public function setFirstLevel($first_level)
    {
        if (is_null($first_level)) {
            throw new \InvalidArgumentException('non-nullable first_level cannot be null');
        }
        $this->container['first_level'] = $first_level;

        return $this;
    }

    /**
     * Gets first_time
     *
     * @return \DateTime|null
     */
    public function getFirstTime()
    {
        return $this->container['first_time'];
    }

    /**
     * Sets first_time
     *
     * @param \DateTime|null $first_time Timestamp of the block where the token was first seen.
     *
     * @return self
     */
    public function setFirstTime($first_time)
    {
        if (is_null($first_time)) {
            throw new \InvalidArgumentException('non-nullable first_time cannot be null');
        }
        $this->container['first_time'] = $first_time;

        return $this;
    }

    /**
     * Gets last_level
     *
     * @return int|null
     */
    public function getLastLevel()
    {
        return $this->container['last_level'];
    }

    /**
     * Sets last_level
     *
     * @param int|null $last_level Level of the block where the token was last seen.   **[sortable]**
     *
     * @return self
     */
    public function setLastLevel($last_level)
    {
        if (is_null($last_level)) {
            throw new \InvalidArgumentException('non-nullable last_level cannot be null');
        }
        $this->container['last_level'] = $last_level;

        return $this;
    }

    /**
     * Gets last_time
     *
     * @return \DateTime|null
     */
    public function getLastTime()
    {
        return $this->container['last_time'];
    }

    /**
     * Sets last_time
     *
     * @param \DateTime|null $last_time Timestamp of the block where the token was last seen.
     *
     * @return self
     */
    public function setLastTime($last_time)
    {
        if (is_null($last_time)) {
            throw new \InvalidArgumentException('non-nullable last_time cannot be null');
        }
        $this->container['last_time'] = $last_time;

        return $this;
    }

    /**
     * Gets transfers_count
     *
     * @return int|null
     */
    public function getTransfersCount()
    {
        return $this->container['transfers_count'];
    }

    /**
     * Sets transfers_count
     *
     * @param int|null $transfers_count Total number of transfers.   **[sortable]**
     *
     * @return self
     */
    public function setTransfersCount($transfers_count)
    {
        if (is_null($transfers_count)) {
            throw new \InvalidArgumentException('non-nullable transfers_count cannot be null');
        }
        $this->container['transfers_count'] = $transfers_count;

        return $this;
    }

    /**
     * Gets balances_count
     *
     * @return int|null
     */
    public function getBalancesCount()
    {
        return $this->container['balances_count'];
    }

    /**
     * Sets balances_count
     *
     * @param int|null $balances_count Total number of holders ever seen.   **[sortable]**
     *
     * @return self
     */
    public function setBalancesCount($balances_count)
    {
        if (is_null($balances_count)) {
            throw new \InvalidArgumentException('non-nullable balances_count cannot be null');
        }
        $this->container['balances_count'] = $balances_count;

        return $this;
    }

    /**
     * Gets holders_count
     *
     * @return int|null
     */
    public function getHoldersCount()
    {
        return $this->container['holders_count'];
    }

    /**
     * Sets holders_count
     *
     * @param int|null $holders_count Total number of current holders.   **[sortable]**
     *
     * @return self
     */
    public function setHoldersCount($holders_count)
    {
        if (is_null($holders_count)) {
            throw new \InvalidArgumentException('non-nullable holders_count cannot be null');
        }
        $this->container['holders_count'] = $holders_count;

        return $this;
    }

    /**
     * Gets total_minted
     *
     * @return string|null
     */
    public function getTotalMinted()
    {
        return $this->container['total_minted'];
    }

    /**
     * Sets total_minted
     *
     * @param string|null $total_minted Total number of minted tokens (raw value, not divided by `decimals`).
     *
     * @return self
     */
    public function setTotalMinted($total_minted)
    {
        if (is_null($total_minted)) {
            throw new \InvalidArgumentException('non-nullable total_minted cannot be null');
        }
        $this->container['total_minted'] = $total_minted;

        return $this;
    }

    /**
     * Gets total_burned
     *
     * @return string|null
     */
    public function getTotalBurned()
    {
        return $this->container['total_burned'];
    }

    /**
     * Sets total_burned
     *
     * @param string|null $total_burned Total number of burned tokens (raw value, not divided by `decimals`).
     *
     * @return self
     */
    public function setTotalBurned($total_burned)
    {
        if (is_null($total_burned)) {
            throw new \InvalidArgumentException('non-nullable total_burned cannot be null');
        }
        $this->container['total_burned'] = $total_burned;

        return $this;
    }

    /**
     * Gets total_supply
     *
     * @return string|null
     */
    public function getTotalSupply()
    {
        return $this->container['total_supply'];
    }

    /**
     * Sets total_supply
     *
     * @param string|null $total_supply Total number of existing tokens (raw value, not divided by `decimals`).
     *
     * @return self
     */
    public function setTotalSupply($total_supply)
    {
        if (is_null($total_supply)) {
            throw new \InvalidArgumentException('non-nullable total_supply cannot be null');
        }
        $this->container['total_supply'] = $total_supply;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return mixed|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param mixed|null $metadata Token metadata.   **[sortable]**
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            array_push($this->openAPINullablesSetToNull, 'metadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metadata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


