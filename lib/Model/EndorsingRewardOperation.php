<?php
/**
 * EndorsingRewardOperation
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
use \Tzkt\ObjectSerializer;

/**
 * EndorsingRewardOperation Class Doc Comment
 *
 * @category Class
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EndorsingRewardOperation extends Operation
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EndorsingRewardOperation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'int',
        'level' => 'int',
        'timestamp' => '\DateTime',
        'block' => 'string',
        'baker' => '\Tzkt\Model\EndorsingRewardOperationAllOfBaker',
        'expected' => 'int',
        'reward_delegated' => 'int',
        'reward_staked_own' => 'int',
        'reward_staked_edge' => 'int',
        'reward_staked_shared' => 'int',
        'quote' => '\Tzkt\Model\EndorsingRewardOperationAllOfQuote',
        'reward_liquid' => 'int',
        'received' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'id' => 'int64',
        'level' => 'int32',
        'timestamp' => 'date-time',
        'block' => null,
        'baker' => null,
        'expected' => 'int64',
        'reward_delegated' => 'int64',
        'reward_staked_own' => 'int64',
        'reward_staked_edge' => 'int64',
        'reward_staked_shared' => 'int64',
        'quote' => null,
        'reward_liquid' => 'int64',
        'received' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => true,
        'id' => false,
        'level' => false,
        'timestamp' => false,
        'block' => true,
        'baker' => true,
        'expected' => false,
        'reward_delegated' => false,
        'reward_staked_own' => false,
        'reward_staked_edge' => false,
        'reward_staked_shared' => false,
        'quote' => true,
        'reward_liquid' => false,
        'received' => false
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
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables + parent::openAPINullables();
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
        'type' => 'type',
        'id' => 'id',
        'level' => 'level',
        'timestamp' => 'timestamp',
        'block' => 'block',
        'baker' => 'baker',
        'expected' => 'expected',
        'reward_delegated' => 'rewardDelegated',
        'reward_staked_own' => 'rewardStakedOwn',
        'reward_staked_edge' => 'rewardStakedEdge',
        'reward_staked_shared' => 'rewardStakedShared',
        'quote' => 'quote',
        'reward_liquid' => 'rewardLiquid',
        'received' => 'received'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'level' => 'setLevel',
        'timestamp' => 'setTimestamp',
        'block' => 'setBlock',
        'baker' => 'setBaker',
        'expected' => 'setExpected',
        'reward_delegated' => 'setRewardDelegated',
        'reward_staked_own' => 'setRewardStakedOwn',
        'reward_staked_edge' => 'setRewardStakedEdge',
        'reward_staked_shared' => 'setRewardStakedShared',
        'quote' => 'setQuote',
        'reward_liquid' => 'setRewardLiquid',
        'received' => 'setReceived'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'level' => 'getLevel',
        'timestamp' => 'getTimestamp',
        'block' => 'getBlock',
        'baker' => 'getBaker',
        'expected' => 'getExpected',
        'reward_delegated' => 'getRewardDelegated',
        'reward_staked_own' => 'getRewardStakedOwn',
        'reward_staked_edge' => 'getRewardStakedEdge',
        'reward_staked_shared' => 'getRewardStakedShared',
        'quote' => 'getQuote',
        'reward_liquid' => 'getRewardLiquid',
        'received' => 'getReceived'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        parent::__construct($data);

        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('block', $data ?? [], null);
        $this->setIfExists('baker', $data ?? [], null);
        $this->setIfExists('expected', $data ?? [], null);
        $this->setIfExists('reward_delegated', $data ?? [], null);
        $this->setIfExists('reward_staked_own', $data ?? [], null);
        $this->setIfExists('reward_staked_edge', $data ?? [], null);
        $this->setIfExists('reward_staked_shared', $data ?? [], null);
        $this->setIfExists('quote', $data ?? [], null);
        $this->setIfExists('reward_liquid', $data ?? [], null);
        $this->setIfExists('received', $data ?? [], null);
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
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the operation, `endorsing_reward`
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['type'] = $type;

        return $this;
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
     * @param int|null $id Unique ID of the operation, stored in the TzKT indexer database
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
     * Gets level
     *
     * @return int|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int|null $level Height of the block from the genesis
     *
     * @return self
     */
    public function setLevel($level)
    {
        if (is_null($level)) {
            throw new \InvalidArgumentException('non-nullable level cannot be null');
        }
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp Datetime at which the block is claimed to have been created (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        if (is_null($timestamp)) {
            throw new \InvalidArgumentException('non-nullable timestamp cannot be null');
        }
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets block
     *
     * @return string|null
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param string|null $block Block hash
     *
     * @return self
     */
    public function setBlock($block)
    {
        if (is_null($block)) {
            array_push($this->openAPINullablesSetToNull, 'block');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('block', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets baker
     *
     * @return \Tzkt\Model\EndorsingRewardOperationAllOfBaker|null
     */
    public function getBaker()
    {
        return $this->container['baker'];
    }

    /**
     * Sets baker
     *
     * @param \Tzkt\Model\EndorsingRewardOperationAllOfBaker|null $baker baker
     *
     * @return self
     */
    public function setBaker($baker)
    {
        if (is_null($baker)) {
            array_push($this->openAPINullablesSetToNull, 'baker');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('baker', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['baker'] = $baker;

        return $this;
    }

    /**
     * Gets expected
     *
     * @return int|null
     */
    public function getExpected()
    {
        return $this->container['expected'];
    }

    /**
     * Sets expected
     *
     * @param int|null $expected Expected endorsing reward, based on baker's active stake (micro tez)
     *
     * @return self
     */
    public function setExpected($expected)
    {
        if (is_null($expected)) {
            throw new \InvalidArgumentException('non-nullable expected cannot be null');
        }
        $this->container['expected'] = $expected;

        return $this;
    }

    /**
     * Gets reward_delegated
     *
     * @return int|null
     */
    public function getRewardDelegated()
    {
        return $this->container['reward_delegated'];
    }

    /**
     * Sets reward_delegated
     *
     * @param int|null $reward_delegated Reward, corresponding to delegated stake, paid to baker's liquid balance (micro tez) (it is not frozen and can be spent immediately).
     *
     * @return self
     */
    public function setRewardDelegated($reward_delegated)
    {
        if (is_null($reward_delegated)) {
            throw new \InvalidArgumentException('non-nullable reward_delegated cannot be null');
        }
        $this->container['reward_delegated'] = $reward_delegated;

        return $this;
    }

    /**
     * Gets reward_staked_own
     *
     * @return int|null
     */
    public function getRewardStakedOwn()
    {
        return $this->container['reward_staked_own'];
    }

    /**
     * Sets reward_staked_own
     *
     * @param int|null $reward_staked_own Reward, corresponding to baker's own stake, paid to baker's own staked balance (micro tez) (it is frozen and belongs to the baker).
     *
     * @return self
     */
    public function setRewardStakedOwn($reward_staked_own)
    {
        if (is_null($reward_staked_own)) {
            throw new \InvalidArgumentException('non-nullable reward_staked_own cannot be null');
        }
        $this->container['reward_staked_own'] = $reward_staked_own;

        return $this;
    }

    /**
     * Gets reward_staked_edge
     *
     * @return int|null
     */
    public function getRewardStakedEdge()
    {
        return $this->container['reward_staked_edge'];
    }

    /**
     * Sets reward_staked_edge
     *
     * @param int|null $reward_staked_edge Reward, corresponding to baker's edge from external stake, paid to baker's own staked balance (micro tez) (it is frozen and belongs to the baker).
     *
     * @return self
     */
    public function setRewardStakedEdge($reward_staked_edge)
    {
        if (is_null($reward_staked_edge)) {
            throw new \InvalidArgumentException('non-nullable reward_staked_edge cannot be null');
        }
        $this->container['reward_staked_edge'] = $reward_staked_edge;

        return $this;
    }

    /**
     * Gets reward_staked_shared
     *
     * @return int|null
     */
    public function getRewardStakedShared()
    {
        return $this->container['reward_staked_shared'];
    }

    /**
     * Sets reward_staked_shared
     *
     * @param int|null $reward_staked_shared Reward, corresponding to baker's external stake, paid to baker's external staked balance (micro tez) (it is frozen and belongs to baker's stakers).
     *
     * @return self
     */
    public function setRewardStakedShared($reward_staked_shared)
    {
        if (is_null($reward_staked_shared)) {
            throw new \InvalidArgumentException('non-nullable reward_staked_shared cannot be null');
        }
        $this->container['reward_staked_shared'] = $reward_staked_shared;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return \Tzkt\Model\EndorsingRewardOperationAllOfQuote|null
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param \Tzkt\Model\EndorsingRewardOperationAllOfQuote|null $quote quote
     *
     * @return self
     */
    public function setQuote($quote)
    {
        if (is_null($quote)) {
            array_push($this->openAPINullablesSetToNull, 'quote');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('quote', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['quote'] = $quote;

        return $this;
    }

    /**
     * Gets reward_liquid
     *
     * @return int|null
     */
    public function getRewardLiquid()
    {
        return $this->container['reward_liquid'];
    }

    /**
     * Sets reward_liquid
     *
     * @param int|null $reward_liquid [DEPRECATED]
     *
     * @return self
     */
    public function setRewardLiquid($reward_liquid)
    {
        if (is_null($reward_liquid)) {
            throw new \InvalidArgumentException('non-nullable reward_liquid cannot be null');
        }
        $this->container['reward_liquid'] = $reward_liquid;

        return $this;
    }

    /**
     * Gets received
     *
     * @return int|null
     */
    public function getReceived()
    {
        return $this->container['received'];
    }

    /**
     * Sets received
     *
     * @param int|null $received [DEPRECATED]
     *
     * @return self
     */
    public function setReceived($received)
    {
        if (is_null($received)) {
            throw new \InvalidArgumentException('non-nullable received cannot be null');
        }
        $this->container['received'] = $received;

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


