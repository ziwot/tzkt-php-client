<?php
/**
 * BakingOperation
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
 * BakingOperation Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class BakingOperation extends Operation
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BakingOperation';

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
        'proposer' => '\Tzkt\Model\BakingOperationAllOfProposer',
        'producer' => '\Tzkt\Model\BakingOperationAllOfProducer',
        'payload_round' => 'int',
        'block_round' => 'int',
        'deposit' => 'int',
        'reward_delegated' => 'int',
        'reward_staked_own' => 'int',
        'reward_staked_edge' => 'int',
        'reward_staked_shared' => 'int',
        'bonus_delegated' => 'int',
        'bonus_staked_own' => 'int',
        'bonus_staked_edge' => 'int',
        'bonus_staked_shared' => 'int',
        'fees' => 'int',
        'quote' => '\Tzkt\Model\BakingOperationAllOfQuote',
        'reward_liquid' => 'int',
        'bonus_liquid' => 'int',
        'reward' => 'int',
        'bonus' => 'int',
        'baker' => '\Tzkt\Model\BakingOperationAllOfBaker',
        'priority' => 'int'
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
        'proposer' => null,
        'producer' => null,
        'payload_round' => 'int32',
        'block_round' => 'int32',
        'deposit' => 'int64',
        'reward_delegated' => 'int64',
        'reward_staked_own' => 'int64',
        'reward_staked_edge' => 'int64',
        'reward_staked_shared' => 'int64',
        'bonus_delegated' => 'int64',
        'bonus_staked_own' => 'int64',
        'bonus_staked_edge' => 'int64',
        'bonus_staked_shared' => 'int64',
        'fees' => 'int64',
        'quote' => null,
        'reward_liquid' => 'int64',
        'bonus_liquid' => 'int64',
        'reward' => 'int64',
        'bonus' => 'int64',
        'baker' => null,
        'priority' => 'int32'
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
        'proposer' => true,
        'producer' => true,
        'payload_round' => false,
        'block_round' => false,
        'deposit' => false,
        'reward_delegated' => false,
        'reward_staked_own' => false,
        'reward_staked_edge' => false,
        'reward_staked_shared' => false,
        'bonus_delegated' => false,
        'bonus_staked_own' => false,
        'bonus_staked_edge' => false,
        'bonus_staked_shared' => false,
        'fees' => false,
        'quote' => true,
        'reward_liquid' => false,
        'bonus_liquid' => false,
        'reward' => false,
        'bonus' => false,
        'baker' => true,
        'priority' => false
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
        'proposer' => 'proposer',
        'producer' => 'producer',
        'payload_round' => 'payloadRound',
        'block_round' => 'blockRound',
        'deposit' => 'deposit',
        'reward_delegated' => 'rewardDelegated',
        'reward_staked_own' => 'rewardStakedOwn',
        'reward_staked_edge' => 'rewardStakedEdge',
        'reward_staked_shared' => 'rewardStakedShared',
        'bonus_delegated' => 'bonusDelegated',
        'bonus_staked_own' => 'bonusStakedOwn',
        'bonus_staked_edge' => 'bonusStakedEdge',
        'bonus_staked_shared' => 'bonusStakedShared',
        'fees' => 'fees',
        'quote' => 'quote',
        'reward_liquid' => 'rewardLiquid',
        'bonus_liquid' => 'bonusLiquid',
        'reward' => 'reward',
        'bonus' => 'bonus',
        'baker' => 'baker',
        'priority' => 'priority'
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
        'proposer' => 'setProposer',
        'producer' => 'setProducer',
        'payload_round' => 'setPayloadRound',
        'block_round' => 'setBlockRound',
        'deposit' => 'setDeposit',
        'reward_delegated' => 'setRewardDelegated',
        'reward_staked_own' => 'setRewardStakedOwn',
        'reward_staked_edge' => 'setRewardStakedEdge',
        'reward_staked_shared' => 'setRewardStakedShared',
        'bonus_delegated' => 'setBonusDelegated',
        'bonus_staked_own' => 'setBonusStakedOwn',
        'bonus_staked_edge' => 'setBonusStakedEdge',
        'bonus_staked_shared' => 'setBonusStakedShared',
        'fees' => 'setFees',
        'quote' => 'setQuote',
        'reward_liquid' => 'setRewardLiquid',
        'bonus_liquid' => 'setBonusLiquid',
        'reward' => 'setReward',
        'bonus' => 'setBonus',
        'baker' => 'setBaker',
        'priority' => 'setPriority'
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
        'proposer' => 'getProposer',
        'producer' => 'getProducer',
        'payload_round' => 'getPayloadRound',
        'block_round' => 'getBlockRound',
        'deposit' => 'getDeposit',
        'reward_delegated' => 'getRewardDelegated',
        'reward_staked_own' => 'getRewardStakedOwn',
        'reward_staked_edge' => 'getRewardStakedEdge',
        'reward_staked_shared' => 'getRewardStakedShared',
        'bonus_delegated' => 'getBonusDelegated',
        'bonus_staked_own' => 'getBonusStakedOwn',
        'bonus_staked_edge' => 'getBonusStakedEdge',
        'bonus_staked_shared' => 'getBonusStakedShared',
        'fees' => 'getFees',
        'quote' => 'getQuote',
        'reward_liquid' => 'getRewardLiquid',
        'bonus_liquid' => 'getBonusLiquid',
        'reward' => 'getReward',
        'bonus' => 'getBonus',
        'baker' => 'getBaker',
        'priority' => 'getPriority'
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
        $this->setIfExists('proposer', $data ?? [], null);
        $this->setIfExists('producer', $data ?? [], null);
        $this->setIfExists('payload_round', $data ?? [], null);
        $this->setIfExists('block_round', $data ?? [], null);
        $this->setIfExists('deposit', $data ?? [], null);
        $this->setIfExists('reward_delegated', $data ?? [], null);
        $this->setIfExists('reward_staked_own', $data ?? [], null);
        $this->setIfExists('reward_staked_edge', $data ?? [], null);
        $this->setIfExists('reward_staked_shared', $data ?? [], null);
        $this->setIfExists('bonus_delegated', $data ?? [], null);
        $this->setIfExists('bonus_staked_own', $data ?? [], null);
        $this->setIfExists('bonus_staked_edge', $data ?? [], null);
        $this->setIfExists('bonus_staked_shared', $data ?? [], null);
        $this->setIfExists('fees', $data ?? [], null);
        $this->setIfExists('quote', $data ?? [], null);
        $this->setIfExists('reward_liquid', $data ?? [], null);
        $this->setIfExists('bonus_liquid', $data ?? [], null);
        $this->setIfExists('reward', $data ?? [], null);
        $this->setIfExists('bonus', $data ?? [], null);
        $this->setIfExists('baker', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
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
     * @param string|null $type Type of the operation, `baking` - an operation which contains brief information about a baked (produced) block (synthetic type)
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
     * @param int|null $level Height of the block from the genesis
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
     * @param \DateTime|null $timestamp Datetime at which the block is claimed to have been created (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
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
     * @param string|null $block Block hash
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
     * Gets proposer
     *
     * @return \Tzkt\Model\BakingOperationAllOfProposer|null
     */
    public function getProposer(): ?\Tzkt\Model\BakingOperationAllOfProposer
    {
        return $this->container['proposer'];
    }

    /**
     * Sets proposer
     *
     * @param \Tzkt\Model\BakingOperationAllOfProposer|null $proposer proposer
     *
     * @return $this
     */
    public function setProposer(?\Tzkt\Model\BakingOperationAllOfProposer $proposer): static
    {
        if (is_null($proposer)) {
            array_push($this->openAPINullablesSetToNull, 'proposer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('proposer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['proposer'] = $proposer;

        return $this;
    }

    /**
     * Gets producer
     *
     * @return \Tzkt\Model\BakingOperationAllOfProducer|null
     */
    public function getProducer(): ?\Tzkt\Model\BakingOperationAllOfProducer
    {
        return $this->container['producer'];
    }

    /**
     * Sets producer
     *
     * @param \Tzkt\Model\BakingOperationAllOfProducer|null $producer producer
     *
     * @return $this
     */
    public function setProducer(?\Tzkt\Model\BakingOperationAllOfProducer $producer): static
    {
        if (is_null($producer)) {
            array_push($this->openAPINullablesSetToNull, 'producer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('producer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['producer'] = $producer;

        return $this;
    }

    /**
     * Gets payload_round
     *
     * @return int|null
     */
    public function getPayloadRound(): ?int
    {
        return $this->container['payload_round'];
    }

    /**
     * Sets payload_round
     *
     * @param int|null $payload_round Round at which the block payload was proposed
     *
     * @return $this
     */
    public function setPayloadRound(?int $payload_round): static
    {
        if (is_null($payload_round)) {
            throw new InvalidArgumentException('non-nullable payload_round cannot be null');
        }
        $this->container['payload_round'] = $payload_round;

        return $this;
    }

    /**
     * Gets block_round
     *
     * @return int|null
     */
    public function getBlockRound(): ?int
    {
        return $this->container['block_round'];
    }

    /**
     * Sets block_round
     *
     * @param int|null $block_round Round at which the block was produced
     *
     * @return $this
     */
    public function setBlockRound(?int $block_round): static
    {
        if (is_null($block_round)) {
            throw new InvalidArgumentException('non-nullable block_round cannot be null');
        }
        $this->container['block_round'] = $block_round;

        return $this;
    }

    /**
     * Gets deposit
     *
     * @return int|null
     */
    public function getDeposit(): ?int
    {
        return $this->container['deposit'];
    }

    /**
     * Sets deposit
     *
     * @param int|null $deposit Security deposit frozen on the baker's account for producing the block (micro tez)
     *
     * @return $this
     */
    public function setDeposit(?int $deposit): static
    {
        if (is_null($deposit)) {
            throw new InvalidArgumentException('non-nullable deposit cannot be null');
        }
        $this->container['deposit'] = $deposit;

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
     * @param int|null $reward_delegated Portion of fixed reward, corresponding to delegated stake, paid to payload proposer's liquid balance (micro tez) (it is not frozen and can be spent immediately).
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
     * @param int|null $reward_staked_own Portion of fixed reward, corresponding to baker's own stake, paid to payload proposer's own staked balance (micro tez) (it is frozen and belongs to the baker).
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
     * @param int|null $reward_staked_edge Portion of fixed reward, corresponding to baker's edge from external stake, paid to payload proposer's own staked balance (micro tez) (it is frozen and belongs to the baker).
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
     * @param int|null $reward_staked_shared Portion of fixed reward, corresponding to baker's external stake, paid to payload proposer's external staked balance (micro tez) (it is frozen and belongs to baker's stakers).
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
     * Gets bonus_delegated
     *
     * @return int|null
     */
    public function getBonusDelegated(): ?int
    {
        return $this->container['bonus_delegated'];
    }

    /**
     * Sets bonus_delegated
     *
     * @param int|null $bonus_delegated Portion of bonus reward, corresponding to delegated stake, paid to block producer's liquid balance (micro tez) (it is not frozen and can be spent immediately).
     *
     * @return $this
     */
    public function setBonusDelegated(?int $bonus_delegated): static
    {
        if (is_null($bonus_delegated)) {
            throw new InvalidArgumentException('non-nullable bonus_delegated cannot be null');
        }
        $this->container['bonus_delegated'] = $bonus_delegated;

        return $this;
    }

    /**
     * Gets bonus_staked_own
     *
     * @return int|null
     */
    public function getBonusStakedOwn(): ?int
    {
        return $this->container['bonus_staked_own'];
    }

    /**
     * Sets bonus_staked_own
     *
     * @param int|null $bonus_staked_own Portion of bonus reward, corresponding to baker's own stake, paid to block producer's own staked balance (micro tez) (it is frozen and belongs to the baker).
     *
     * @return $this
     */
    public function setBonusStakedOwn(?int $bonus_staked_own): static
    {
        if (is_null($bonus_staked_own)) {
            throw new InvalidArgumentException('non-nullable bonus_staked_own cannot be null');
        }
        $this->container['bonus_staked_own'] = $bonus_staked_own;

        return $this;
    }

    /**
     * Gets bonus_staked_edge
     *
     * @return int|null
     */
    public function getBonusStakedEdge(): ?int
    {
        return $this->container['bonus_staked_edge'];
    }

    /**
     * Sets bonus_staked_edge
     *
     * @param int|null $bonus_staked_edge Portion of bonus reward, corresponding to baker's edge from external stake, paid to block producer's own staked balance (micro tez) (it is frozen and belongs to the baker).
     *
     * @return $this
     */
    public function setBonusStakedEdge(?int $bonus_staked_edge): static
    {
        if (is_null($bonus_staked_edge)) {
            throw new InvalidArgumentException('non-nullable bonus_staked_edge cannot be null');
        }
        $this->container['bonus_staked_edge'] = $bonus_staked_edge;

        return $this;
    }

    /**
     * Gets bonus_staked_shared
     *
     * @return int|null
     */
    public function getBonusStakedShared(): ?int
    {
        return $this->container['bonus_staked_shared'];
    }

    /**
     * Sets bonus_staked_shared
     *
     * @param int|null $bonus_staked_shared Portion of fixed reward, corresponding to baker's external stake, paid to block producer's external staked balance (micro tez) (it is frozen and belongs to baker's stakers).
     *
     * @return $this
     */
    public function setBonusStakedShared(?int $bonus_staked_shared): static
    {
        if (is_null($bonus_staked_shared)) {
            throw new InvalidArgumentException('non-nullable bonus_staked_shared cannot be null');
        }
        $this->container['bonus_staked_shared'] = $bonus_staked_shared;

        return $this;
    }

    /**
     * Gets fees
     *
     * @return int|null
     */
    public function getFees(): ?int
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param int|null $fees Total fee gathered from operations, included into the block
     *
     * @return $this
     */
    public function setFees(?int $fees): static
    {
        if (is_null($fees)) {
            throw new InvalidArgumentException('non-nullable fees cannot be null');
        }
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return \Tzkt\Model\BakingOperationAllOfQuote|null
     */
    public function getQuote(): ?\Tzkt\Model\BakingOperationAllOfQuote
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param \Tzkt\Model\BakingOperationAllOfQuote|null $quote quote
     *
     * @return $this
     */
    public function setQuote(?\Tzkt\Model\BakingOperationAllOfQuote $quote): static
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
     * Gets bonus_liquid
     *
     * @return int|null
     */
    public function getBonusLiquid(): ?int
    {
        return $this->container['bonus_liquid'];
    }

    /**
     * Sets bonus_liquid
     *
     * @param int|null $bonus_liquid [DEPRECATED]
     *
     * @return $this
     */
    public function setBonusLiquid(?int $bonus_liquid): static
    {
        if (is_null($bonus_liquid)) {
            throw new InvalidArgumentException('non-nullable bonus_liquid cannot be null');
        }
        $this->container['bonus_liquid'] = $bonus_liquid;

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
     * Gets bonus
     *
     * @return int|null
     */
    public function getBonus(): ?int
    {
        return $this->container['bonus'];
    }

    /**
     * Sets bonus
     *
     * @param int|null $bonus [DEPRECATED]
     *
     * @return $this
     */
    public function setBonus(?int $bonus): static
    {
        if (is_null($bonus)) {
            throw new InvalidArgumentException('non-nullable bonus cannot be null');
        }
        $this->container['bonus'] = $bonus;

        return $this;
    }

    /**
     * Gets baker
     *
     * @return \Tzkt\Model\BakingOperationAllOfBaker|null
     */
    public function getBaker(): ?\Tzkt\Model\BakingOperationAllOfBaker
    {
        return $this->container['baker'];
    }

    /**
     * Sets baker
     *
     * @param \Tzkt\Model\BakingOperationAllOfBaker|null $baker baker
     *
     * @return $this
     */
    public function setBaker(?\Tzkt\Model\BakingOperationAllOfBaker $baker): static
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
     * Gets priority
     *
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority [DEPRECATED]
     *
     * @return $this
     */
    public function setPriority(?int $priority): static
    {
        if (is_null($priority)) {
            throw new InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

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


