<?php
/**
 * NonceRevelationOperation
 *
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

namespace Tzkt\Model;

/**
 * NonceRevelationOperation Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class NonceRevelationOperation extends Operation
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'NonceRevelationOperation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'type' => 'string',
        'id' => 'int',
        'level' => 'int',
        'timestamp' => '\DateTime',
        'block' => 'string',
        'hash' => 'string',
        'baker' => '\Tzkt\Model\NonceRevelationOperationAllOfBaker',
        'sender' => '\Tzkt\Model\NonceRevelationOperationAllOfSender',
        'revealed_level' => 'int',
        'revealed_cycle' => 'int',
        'nonce' => 'string',
        'reward_delegated' => 'int',
        'reward_staked_own' => 'int',
        'reward_staked_edge' => 'int',
        'reward_staked_shared' => 'int',
        'quote' => '\Tzkt\Model\NonceRevelationOperationAllOfQuote',
        'reward_liquid' => 'int',
        'reward' => 'int',
        'baker_rewards' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'type' => null,
        'id' => 'int64',
        'level' => 'int32',
        'timestamp' => 'date-time',
        'block' => null,
        'hash' => null,
        'baker' => null,
        'sender' => null,
        'revealed_level' => 'int32',
        'revealed_cycle' => 'int32',
        'nonce' => null,
        'reward_delegated' => 'int64',
        'reward_staked_own' => 'int64',
        'reward_staked_edge' => 'int64',
        'reward_staked_shared' => 'int64',
        'quote' => null,
        'reward_liquid' => 'int64',
        'reward' => 'int64',
        'baker_rewards' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'type' => true,
        'id' => false,
        'level' => false,
        'timestamp' => false,
        'block' => true,
        'hash' => true,
        'baker' => true,
        'sender' => true,
        'revealed_level' => false,
        'revealed_cycle' => false,
        'nonce' => true,
        'reward_delegated' => false,
        'reward_staked_own' => false,
        'reward_staked_edge' => false,
        'reward_staked_shared' => false,
        'quote' => true,
        'reward_liquid' => false,
        'reward' => false,
        'baker_rewards' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables + parent::openAPINullables();
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
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
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'type' => 'type',
        'id' => 'id',
        'level' => 'level',
        'timestamp' => 'timestamp',
        'block' => 'block',
        'hash' => 'hash',
        'baker' => 'baker',
        'sender' => 'sender',
        'revealed_level' => 'revealedLevel',
        'revealed_cycle' => 'revealedCycle',
        'nonce' => 'nonce',
        'reward_delegated' => 'rewardDelegated',
        'reward_staked_own' => 'rewardStakedOwn',
        'reward_staked_edge' => 'rewardStakedEdge',
        'reward_staked_shared' => 'rewardStakedShared',
        'quote' => 'quote',
        'reward_liquid' => 'rewardLiquid',
        'reward' => 'reward',
        'baker_rewards' => 'bakerRewards'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'level' => 'setLevel',
        'timestamp' => 'setTimestamp',
        'block' => 'setBlock',
        'hash' => 'setHash',
        'baker' => 'setBaker',
        'sender' => 'setSender',
        'revealed_level' => 'setRevealedLevel',
        'revealed_cycle' => 'setRevealedCycle',
        'nonce' => 'setNonce',
        'reward_delegated' => 'setRewardDelegated',
        'reward_staked_own' => 'setRewardStakedOwn',
        'reward_staked_edge' => 'setRewardStakedEdge',
        'reward_staked_shared' => 'setRewardStakedShared',
        'quote' => 'setQuote',
        'reward_liquid' => 'setRewardLiquid',
        'reward' => 'setReward',
        'baker_rewards' => 'setBakerRewards'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'level' => 'getLevel',
        'timestamp' => 'getTimestamp',
        'block' => 'getBlock',
        'hash' => 'getHash',
        'baker' => 'getBaker',
        'sender' => 'getSender',
        'revealed_level' => 'getRevealedLevel',
        'revealed_cycle' => 'getRevealedCycle',
        'nonce' => 'getNonce',
        'reward_delegated' => 'getRewardDelegated',
        'reward_staked_own' => 'getRewardStakedOwn',
        'reward_staked_edge' => 'getRewardStakedEdge',
        'reward_staked_shared' => 'getRewardStakedShared',
        'quote' => 'getQuote',
        'reward_liquid' => 'getRewardLiquid',
        'reward' => 'getReward',
        'baker_rewards' => 'getBakerRewards'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }



    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        parent::__construct($data);

        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('block', $data ?? [], null);
        $this->setIfExists('hash', $data ?? [], null);
        $this->setIfExists('baker', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('revealed_level', $data ?? [], null);
        $this->setIfExists('revealed_cycle', $data ?? [], null);
        $this->setIfExists('nonce', $data ?? [], null);
        $this->setIfExists('reward_delegated', $data ?? [], null);
        $this->setIfExists('reward_staked_own', $data ?? [], null);
        $this->setIfExists('reward_staked_edge', $data ?? [], null);
        $this->setIfExists('reward_staked_shared', $data ?? [], null);
        $this->setIfExists('quote', $data ?? [], null);
        $this->setIfExists('reward_liquid', $data ?? [], null);
        $this->setIfExists('reward', $data ?? [], null);
        $this->setIfExists('baker_rewards', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the operation, `nonce_revelation` - are used by the blockchain to create randomness
     *
     * @return $this
     */
    public function setType(?string $type): static
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
    public function getId(): ?int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Unique ID of the operation, stored in the TzKT indexer database
     *
     * @return $this
     */
    public function setId(?int $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets level
     *
     * @return int|null
     */
    public function getLevel(): ?int
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int|null $level The height of the block from the genesis block, in which the operation was included
     *
     * @return $this
     */
    public function setLevel(?int $level): static
    {
        if (is_null($level)) {
            throw new InvalidArgumentException('non-nullable level cannot be null');
        }
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp(): ?\DateTime
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp Datetime of the block, in which the operation was included (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
     *
     * @return $this
     */
    public function setTimestamp(?\DateTime $timestamp): static
    {
        if (is_null($timestamp)) {
            throw new InvalidArgumentException('non-nullable timestamp cannot be null');
        }
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets block
     *
     * @return string|null
     */
    public function getBlock(): ?string
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param string|null $block Hash of the block, in which the operation was included
     *
     * @return $this
     */
    public function setBlock(?string $block): static
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
     * Gets hash
     *
     * @return string|null
     */
    public function getHash(): ?string
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string|null $hash Hash of the operation
     *
     * @return $this
     */
    public function setHash(?string $hash): static
    {
        if (is_null($hash)) {
            array_push($this->openAPINullablesSetToNull, 'hash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets baker
     *
     * @return \Tzkt\Model\NonceRevelationOperationAllOfBaker|null
     */
    public function getBaker(): ?\Tzkt\Model\NonceRevelationOperationAllOfBaker
    {
        return $this->container['baker'];
    }

    /**
     * Sets baker
     *
     * @param \Tzkt\Model\NonceRevelationOperationAllOfBaker|null $baker baker
     *
     * @return $this
     */
    public function setBaker(?\Tzkt\Model\NonceRevelationOperationAllOfBaker $baker): static
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
     * Gets sender
     *
     * @return \Tzkt\Model\NonceRevelationOperationAllOfSender|null
     */
    public function getSender(): ?\Tzkt\Model\NonceRevelationOperationAllOfSender
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Tzkt\Model\NonceRevelationOperationAllOfSender|null $sender sender
     *
     * @return $this
     */
    public function setSender(?\Tzkt\Model\NonceRevelationOperationAllOfSender $sender): static
    {
        if (is_null($sender)) {
            array_push($this->openAPINullablesSetToNull, 'sender');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sender', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets revealed_level
     *
     * @return int|null
     */
    public function getRevealedLevel(): ?int
    {
        return $this->container['revealed_level'];
    }

    /**
     * Sets revealed_level
     *
     * @param int|null $revealed_level Block height of the block, where seed nonce hash is stored
     *
     * @return $this
     */
    public function setRevealedLevel(?int $revealed_level): static
    {
        if (is_null($revealed_level)) {
            throw new InvalidArgumentException('non-nullable revealed_level cannot be null');
        }
        $this->container['revealed_level'] = $revealed_level;

        return $this;
    }

    /**
     * Gets revealed_cycle
     *
     * @return int|null
     */
    public function getRevealedCycle(): ?int
    {
        return $this->container['revealed_cycle'];
    }

    /**
     * Sets revealed_cycle
     *
     * @param int|null $revealed_cycle Cycle for which seed nonce was revealed
     *
     * @return $this
     */
    public function setRevealedCycle(?int $revealed_cycle): static
    {
        if (is_null($revealed_cycle)) {
            throw new InvalidArgumentException('non-nullable revealed_cycle cannot be null');
        }
        $this->container['revealed_cycle'] = $revealed_cycle;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return string|null
     */
    public function getNonce(): ?string
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param string|null $nonce Seed nonce hex
     *
     * @return $this
     */
    public function setNonce(?string $nonce): static
    {
        if (is_null($nonce)) {
            array_push($this->openAPINullablesSetToNull, 'nonce');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nonce', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nonce'] = $nonce;

        return $this;
    }

    /**
     * Gets reward_delegated
     *
     * @return int|null
     */
    public function getRewardDelegated(): ?int
    {
        return $this->container['reward_delegated'];
    }

    /**
     * Sets reward_delegated
     *
     * @param int|null $reward_delegated Reward, corresponding to delegated stake, paid to baker's liquid balance (micro tez) (it is not frozen and can be spent immediately).
     *
     * @return $this
     */
    public function setRewardDelegated(?int $reward_delegated): static
    {
        if (is_null($reward_delegated)) {
            throw new InvalidArgumentException('non-nullable reward_delegated cannot be null');
        }
        $this->container['reward_delegated'] = $reward_delegated;

        return $this;
    }

    /**
     * Gets reward_staked_own
     *
     * @return int|null
     */
    public function getRewardStakedOwn(): ?int
    {
        return $this->container['reward_staked_own'];
    }

    /**
     * Sets reward_staked_own
     *
     * @param int|null $reward_staked_own Reward, corresponding to baker's own stake, paid to baker's own staked balance (micro tez) (it is frozen and belongs to the baker).
     *
     * @return $this
     */
    public function setRewardStakedOwn(?int $reward_staked_own): static
    {
        if (is_null($reward_staked_own)) {
            throw new InvalidArgumentException('non-nullable reward_staked_own cannot be null');
        }
        $this->container['reward_staked_own'] = $reward_staked_own;

        return $this;
    }

    /**
     * Gets reward_staked_edge
     *
     * @return int|null
     */
    public function getRewardStakedEdge(): ?int
    {
        return $this->container['reward_staked_edge'];
    }

    /**
     * Sets reward_staked_edge
     *
     * @param int|null $reward_staked_edge Reward, corresponding to baker's edge from external stake, paid to baker's own staked balance (micro tez) (it is frozen and belongs to the baker).
     *
     * @return $this
     */
    public function setRewardStakedEdge(?int $reward_staked_edge): static
    {
        if (is_null($reward_staked_edge)) {
            throw new InvalidArgumentException('non-nullable reward_staked_edge cannot be null');
        }
        $this->container['reward_staked_edge'] = $reward_staked_edge;

        return $this;
    }

    /**
     * Gets reward_staked_shared
     *
     * @return int|null
     */
    public function getRewardStakedShared(): ?int
    {
        return $this->container['reward_staked_shared'];
    }

    /**
     * Sets reward_staked_shared
     *
     * @param int|null $reward_staked_shared Reward, corresponding to baker's external stake, paid to baker's external staked balance (micro tez) (it is frozen and belongs to baker's stakers).
     *
     * @return $this
     */
    public function setRewardStakedShared(?int $reward_staked_shared): static
    {
        if (is_null($reward_staked_shared)) {
            throw new InvalidArgumentException('non-nullable reward_staked_shared cannot be null');
        }
        $this->container['reward_staked_shared'] = $reward_staked_shared;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return \Tzkt\Model\NonceRevelationOperationAllOfQuote|null
     */
    public function getQuote(): ?\Tzkt\Model\NonceRevelationOperationAllOfQuote
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param \Tzkt\Model\NonceRevelationOperationAllOfQuote|null $quote quote
     *
     * @return $this
     */
    public function setQuote(?\Tzkt\Model\NonceRevelationOperationAllOfQuote $quote): static
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
    public function getRewardLiquid(): ?int
    {
        return $this->container['reward_liquid'];
    }

    /**
     * Sets reward_liquid
     *
     * @param int|null $reward_liquid [DEPRECATED]
     *
     * @return $this
     */
    public function setRewardLiquid(?int $reward_liquid): static
    {
        if (is_null($reward_liquid)) {
            throw new InvalidArgumentException('non-nullable reward_liquid cannot be null');
        }
        $this->container['reward_liquid'] = $reward_liquid;

        return $this;
    }

    /**
     * Gets reward
     *
     * @return int|null
     */
    public function getReward(): ?int
    {
        return $this->container['reward'];
    }

    /**
     * Sets reward
     *
     * @param int|null $reward [DEPRECATED]
     *
     * @return $this
     */
    public function setReward(?int $reward): static
    {
        if (is_null($reward)) {
            throw new InvalidArgumentException('non-nullable reward cannot be null');
        }
        $this->container['reward'] = $reward;

        return $this;
    }

    /**
     * Gets baker_rewards
     *
     * @return int|null
     */
    public function getBakerRewards(): ?int
    {
        return $this->container['baker_rewards'];
    }

    /**
     * Sets baker_rewards
     *
     * @param int|null $baker_rewards [DEPRECATED]
     *
     * @return $this
     */
    public function setBakerRewards(?int $baker_rewards): static
    {
        if (is_null($baker_rewards)) {
            throw new InvalidArgumentException('non-nullable baker_rewards cannot be null');
        }
        $this->container['baker_rewards'] = $baker_rewards;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


