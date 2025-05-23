<?php
/**
 * DoubleEndorsingOperation
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
 * DoubleEndorsingOperation Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DoubleEndorsingOperation extends Operation
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DoubleEndorsingOperation';

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
        'accused_level' => 'int',
        'slashed_level' => 'int',
        'accuser' => '\Tzkt\Model\DoubleEndorsingOperationAllOfAccuser',
        'reward' => 'int',
        'offender' => '\Tzkt\Model\DoubleEndorsingOperationAllOfOffender',
        'lost_staked' => 'int',
        'lost_unstaked' => 'int',
        'lost_external_staked' => 'int',
        'lost_external_unstaked' => 'int',
        'staking_updates_count' => 'int',
        'quote' => '\Tzkt\Model\DoubleEndorsingOperationAllOfQuote',
        'rounding_loss' => 'int',
        'offender_loss' => 'int',
        'accuser_reward' => 'int',
        'accuser_rewards' => 'int',
        'offender_lost_deposits' => 'int',
        'offender_lost_rewards' => 'int',
        'offender_lost_fees' => 'int'
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
        'accused_level' => 'int32',
        'slashed_level' => 'int32',
        'accuser' => null,
        'reward' => 'int64',
        'offender' => null,
        'lost_staked' => 'int64',
        'lost_unstaked' => 'int64',
        'lost_external_staked' => 'int64',
        'lost_external_unstaked' => 'int64',
        'staking_updates_count' => 'int32',
        'quote' => null,
        'rounding_loss' => 'int64',
        'offender_loss' => 'int64',
        'accuser_reward' => 'int64',
        'accuser_rewards' => 'int64',
        'offender_lost_deposits' => 'int64',
        'offender_lost_rewards' => 'int64',
        'offender_lost_fees' => 'int64'
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
        'accused_level' => false,
        'slashed_level' => false,
        'accuser' => true,
        'reward' => false,
        'offender' => true,
        'lost_staked' => false,
        'lost_unstaked' => false,
        'lost_external_staked' => false,
        'lost_external_unstaked' => false,
        'staking_updates_count' => true,
        'quote' => true,
        'rounding_loss' => false,
        'offender_loss' => false,
        'accuser_reward' => false,
        'accuser_rewards' => false,
        'offender_lost_deposits' => false,
        'offender_lost_rewards' => false,
        'offender_lost_fees' => false
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
        'accused_level' => 'accusedLevel',
        'slashed_level' => 'slashedLevel',
        'accuser' => 'accuser',
        'reward' => 'reward',
        'offender' => 'offender',
        'lost_staked' => 'lostStaked',
        'lost_unstaked' => 'lostUnstaked',
        'lost_external_staked' => 'lostExternalStaked',
        'lost_external_unstaked' => 'lostExternalUnstaked',
        'staking_updates_count' => 'stakingUpdatesCount',
        'quote' => 'quote',
        'rounding_loss' => 'roundingLoss',
        'offender_loss' => 'offenderLoss',
        'accuser_reward' => 'accuserReward',
        'accuser_rewards' => 'accuserRewards',
        'offender_lost_deposits' => 'offenderLostDeposits',
        'offender_lost_rewards' => 'offenderLostRewards',
        'offender_lost_fees' => 'offenderLostFees'
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
        'accused_level' => 'setAccusedLevel',
        'slashed_level' => 'setSlashedLevel',
        'accuser' => 'setAccuser',
        'reward' => 'setReward',
        'offender' => 'setOffender',
        'lost_staked' => 'setLostStaked',
        'lost_unstaked' => 'setLostUnstaked',
        'lost_external_staked' => 'setLostExternalStaked',
        'lost_external_unstaked' => 'setLostExternalUnstaked',
        'staking_updates_count' => 'setStakingUpdatesCount',
        'quote' => 'setQuote',
        'rounding_loss' => 'setRoundingLoss',
        'offender_loss' => 'setOffenderLoss',
        'accuser_reward' => 'setAccuserReward',
        'accuser_rewards' => 'setAccuserRewards',
        'offender_lost_deposits' => 'setOffenderLostDeposits',
        'offender_lost_rewards' => 'setOffenderLostRewards',
        'offender_lost_fees' => 'setOffenderLostFees'
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
        'accused_level' => 'getAccusedLevel',
        'slashed_level' => 'getSlashedLevel',
        'accuser' => 'getAccuser',
        'reward' => 'getReward',
        'offender' => 'getOffender',
        'lost_staked' => 'getLostStaked',
        'lost_unstaked' => 'getLostUnstaked',
        'lost_external_staked' => 'getLostExternalStaked',
        'lost_external_unstaked' => 'getLostExternalUnstaked',
        'staking_updates_count' => 'getStakingUpdatesCount',
        'quote' => 'getQuote',
        'rounding_loss' => 'getRoundingLoss',
        'offender_loss' => 'getOffenderLoss',
        'accuser_reward' => 'getAccuserReward',
        'accuser_rewards' => 'getAccuserRewards',
        'offender_lost_deposits' => 'getOffenderLostDeposits',
        'offender_lost_rewards' => 'getOffenderLostRewards',
        'offender_lost_fees' => 'getOffenderLostFees'
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
        $this->setIfExists('accused_level', $data ?? [], null);
        $this->setIfExists('slashed_level', $data ?? [], null);
        $this->setIfExists('accuser', $data ?? [], null);
        $this->setIfExists('reward', $data ?? [], null);
        $this->setIfExists('offender', $data ?? [], null);
        $this->setIfExists('lost_staked', $data ?? [], null);
        $this->setIfExists('lost_unstaked', $data ?? [], null);
        $this->setIfExists('lost_external_staked', $data ?? [], null);
        $this->setIfExists('lost_external_unstaked', $data ?? [], null);
        $this->setIfExists('staking_updates_count', $data ?? [], null);
        $this->setIfExists('quote', $data ?? [], null);
        $this->setIfExists('rounding_loss', $data ?? [], null);
        $this->setIfExists('offender_loss', $data ?? [], null);
        $this->setIfExists('accuser_reward', $data ?? [], null);
        $this->setIfExists('accuser_rewards', $data ?? [], null);
        $this->setIfExists('offender_lost_deposits', $data ?? [], null);
        $this->setIfExists('offender_lost_rewards', $data ?? [], null);
        $this->setIfExists('offender_lost_fees', $data ?? [], null);
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
     * @param string|null $type Type of the operation, `double_endorsing` - is used by bakers to provide evidence of double endorsement (endorsing two different blocks at the same block height) by a baker
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
     * @param int|null $level Height of the block from the genesis block, in which the operation was included
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
     * Gets accused_level
     *
     * @return int|null
     */
    public function getAccusedLevel(): ?int
    {
        return $this->container['accused_level'];
    }

    /**
     * Sets accused_level
     *
     * @param int|null $accused_level Height of the block from the genesis, at which double endorsing occurred
     *
     * @return $this
     */
    public function setAccusedLevel(?int $accused_level): static
    {
        if (is_null($accused_level)) {
            throw new InvalidArgumentException('non-nullable accused_level cannot be null');
        }
        $this->container['accused_level'] = $accused_level;

        return $this;
    }

    /**
     * Gets slashed_level
     *
     * @return int|null
     */
    public function getSlashedLevel(): ?int
    {
        return $this->container['slashed_level'];
    }

    /**
     * Sets slashed_level
     *
     * @param int|null $slashed_level Height of the block from the genesis, at which the offender was slashed
     *
     * @return $this
     */
    public function setSlashedLevel(?int $slashed_level): static
    {
        if (is_null($slashed_level)) {
            throw new InvalidArgumentException('non-nullable slashed_level cannot be null');
        }
        $this->container['slashed_level'] = $slashed_level;

        return $this;
    }

    /**
     * Gets accuser
     *
     * @return \Tzkt\Model\DoubleEndorsingOperationAllOfAccuser|null
     */
    public function getAccuser(): ?\Tzkt\Model\DoubleEndorsingOperationAllOfAccuser
    {
        return $this->container['accuser'];
    }

    /**
     * Sets accuser
     *
     * @param \Tzkt\Model\DoubleEndorsingOperationAllOfAccuser|null $accuser accuser
     *
     * @return $this
     */
    public function setAccuser(?\Tzkt\Model\DoubleEndorsingOperationAllOfAccuser $accuser): static
    {
        if (is_null($accuser)) {
            array_push($this->openAPINullablesSetToNull, 'accuser');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accuser', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['accuser'] = $accuser;

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
     * @param int|null $reward Reward of the baker, produced the block, in which the accusation was included
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
     * Gets offender
     *
     * @return \Tzkt\Model\DoubleEndorsingOperationAllOfOffender|null
     */
    public function getOffender(): ?\Tzkt\Model\DoubleEndorsingOperationAllOfOffender
    {
        return $this->container['offender'];
    }

    /**
     * Sets offender
     *
     * @param \Tzkt\Model\DoubleEndorsingOperationAllOfOffender|null $offender offender
     *
     * @return $this
     */
    public function setOffender(?\Tzkt\Model\DoubleEndorsingOperationAllOfOffender $offender): static
    {
        if (is_null($offender)) {
            array_push($this->openAPINullablesSetToNull, 'offender');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('offender', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['offender'] = $offender;

        return $this;
    }

    /**
     * Gets lost_staked
     *
     * @return int|null
     */
    public function getLostStaked(): ?int
    {
        return $this->container['lost_staked'];
    }

    /**
     * Sets lost_staked
     *
     * @param int|null $lost_staked Amount slashed from baker's own staked balance
     *
     * @return $this
     */
    public function setLostStaked(?int $lost_staked): static
    {
        if (is_null($lost_staked)) {
            throw new InvalidArgumentException('non-nullable lost_staked cannot be null');
        }
        $this->container['lost_staked'] = $lost_staked;

        return $this;
    }

    /**
     * Gets lost_unstaked
     *
     * @return int|null
     */
    public function getLostUnstaked(): ?int
    {
        return $this->container['lost_unstaked'];
    }

    /**
     * Sets lost_unstaked
     *
     * @param int|null $lost_unstaked Amount slashed from baker's own unstaked balance
     *
     * @return $this
     */
    public function setLostUnstaked(?int $lost_unstaked): static
    {
        if (is_null($lost_unstaked)) {
            throw new InvalidArgumentException('non-nullable lost_unstaked cannot be null');
        }
        $this->container['lost_unstaked'] = $lost_unstaked;

        return $this;
    }

    /**
     * Gets lost_external_staked
     *
     * @return int|null
     */
    public function getLostExternalStaked(): ?int
    {
        return $this->container['lost_external_staked'];
    }

    /**
     * Sets lost_external_staked
     *
     * @param int|null $lost_external_staked Amount slashed from baker's external staked balance
     *
     * @return $this
     */
    public function setLostExternalStaked(?int $lost_external_staked): static
    {
        if (is_null($lost_external_staked)) {
            throw new InvalidArgumentException('non-nullable lost_external_staked cannot be null');
        }
        $this->container['lost_external_staked'] = $lost_external_staked;

        return $this;
    }

    /**
     * Gets lost_external_unstaked
     *
     * @return int|null
     */
    public function getLostExternalUnstaked(): ?int
    {
        return $this->container['lost_external_unstaked'];
    }

    /**
     * Sets lost_external_unstaked
     *
     * @param int|null $lost_external_unstaked Amount slashed from baker's external unstaked balance
     *
     * @return $this
     */
    public function setLostExternalUnstaked(?int $lost_external_unstaked): static
    {
        if (is_null($lost_external_unstaked)) {
            throw new InvalidArgumentException('non-nullable lost_external_unstaked cannot be null');
        }
        $this->container['lost_external_unstaked'] = $lost_external_unstaked;

        return $this;
    }

    /**
     * Gets staking_updates_count
     *
     * @return int|null
     */
    public function getStakingUpdatesCount(): ?int
    {
        return $this->container['staking_updates_count'];
    }

    /**
     * Sets staking_updates_count
     *
     * @param int|null $staking_updates_count Number of staking updates happened internally
     *
     * @return $this
     */
    public function setStakingUpdatesCount(?int $staking_updates_count): static
    {
        if (is_null($staking_updates_count)) {
            array_push($this->openAPINullablesSetToNull, 'staking_updates_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('staking_updates_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['staking_updates_count'] = $staking_updates_count;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return \Tzkt\Model\DoubleEndorsingOperationAllOfQuote|null
     */
    public function getQuote(): ?\Tzkt\Model\DoubleEndorsingOperationAllOfQuote
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param \Tzkt\Model\DoubleEndorsingOperationAllOfQuote|null $quote quote
     *
     * @return $this
     */
    public function setQuote(?\Tzkt\Model\DoubleEndorsingOperationAllOfQuote $quote): static
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
     * Gets rounding_loss
     *
     * @return int|null
     */
    public function getRoundingLoss(): ?int
    {
        return $this->container['rounding_loss'];
    }

    /**
     * Sets rounding_loss
     *
     * @param int|null $rounding_loss [DEPRECATED]
     *
     * @return $this
     */
    public function setRoundingLoss(?int $rounding_loss): static
    {
        if (is_null($rounding_loss)) {
            throw new InvalidArgumentException('non-nullable rounding_loss cannot be null');
        }
        $this->container['rounding_loss'] = $rounding_loss;

        return $this;
    }

    /**
     * Gets offender_loss
     *
     * @return int|null
     */
    public function getOffenderLoss(): ?int
    {
        return $this->container['offender_loss'];
    }

    /**
     * Sets offender_loss
     *
     * @param int|null $offender_loss [DEPRECATED]
     *
     * @return $this
     */
    public function setOffenderLoss(?int $offender_loss): static
    {
        if (is_null($offender_loss)) {
            throw new InvalidArgumentException('non-nullable offender_loss cannot be null');
        }
        $this->container['offender_loss'] = $offender_loss;

        return $this;
    }

    /**
     * Gets accuser_reward
     *
     * @return int|null
     */
    public function getAccuserReward(): ?int
    {
        return $this->container['accuser_reward'];
    }

    /**
     * Sets accuser_reward
     *
     * @param int|null $accuser_reward [DEPRECATED]
     *
     * @return $this
     */
    public function setAccuserReward(?int $accuser_reward): static
    {
        if (is_null($accuser_reward)) {
            throw new InvalidArgumentException('non-nullable accuser_reward cannot be null');
        }
        $this->container['accuser_reward'] = $accuser_reward;

        return $this;
    }

    /**
     * Gets accuser_rewards
     *
     * @return int|null
     */
    public function getAccuserRewards(): ?int
    {
        return $this->container['accuser_rewards'];
    }

    /**
     * Sets accuser_rewards
     *
     * @param int|null $accuser_rewards [DEPRECATED]
     *
     * @return $this
     */
    public function setAccuserRewards(?int $accuser_rewards): static
    {
        if (is_null($accuser_rewards)) {
            throw new InvalidArgumentException('non-nullable accuser_rewards cannot be null');
        }
        $this->container['accuser_rewards'] = $accuser_rewards;

        return $this;
    }

    /**
     * Gets offender_lost_deposits
     *
     * @return int|null
     */
    public function getOffenderLostDeposits(): ?int
    {
        return $this->container['offender_lost_deposits'];
    }

    /**
     * Sets offender_lost_deposits
     *
     * @param int|null $offender_lost_deposits [DEPRECATED]
     *
     * @return $this
     */
    public function setOffenderLostDeposits(?int $offender_lost_deposits): static
    {
        if (is_null($offender_lost_deposits)) {
            throw new InvalidArgumentException('non-nullable offender_lost_deposits cannot be null');
        }
        $this->container['offender_lost_deposits'] = $offender_lost_deposits;

        return $this;
    }

    /**
     * Gets offender_lost_rewards
     *
     * @return int|null
     */
    public function getOffenderLostRewards(): ?int
    {
        return $this->container['offender_lost_rewards'];
    }

    /**
     * Sets offender_lost_rewards
     *
     * @param int|null $offender_lost_rewards [DEPRECATED]
     *
     * @return $this
     */
    public function setOffenderLostRewards(?int $offender_lost_rewards): static
    {
        if (is_null($offender_lost_rewards)) {
            throw new InvalidArgumentException('non-nullable offender_lost_rewards cannot be null');
        }
        $this->container['offender_lost_rewards'] = $offender_lost_rewards;

        return $this;
    }

    /**
     * Gets offender_lost_fees
     *
     * @return int|null
     */
    public function getOffenderLostFees(): ?int
    {
        return $this->container['offender_lost_fees'];
    }

    /**
     * Sets offender_lost_fees
     *
     * @param int|null $offender_lost_fees [DEPRECATED]
     *
     * @return $this
     */
    public function setOffenderLostFees(?int $offender_lost_fees): static
    {
        if (is_null($offender_lost_fees)) {
            throw new InvalidArgumentException('non-nullable offender_lost_fees cannot be null');
        }
        $this->container['offender_lost_fees'] = $offender_lost_fees;

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


