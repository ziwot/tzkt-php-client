<?php
/**
 * Cycle
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
 * # Introduction    TzKT is the most widely used tool in Tezos that provides you with convenient and flexible access to the Tezos blockchain data, processed and indexed by its own indexer.   You can fetch all historical data via REST API, or subscribe for real-time data via WebSocket API. TzKT was built by the joint efforts of the entire Tezos community   to help developers build more services and dapps on top of Tezos.    TzKT Indexer and API are [open-source](https://github.com/baking-bad/tzkt), so don't be afraid to depend on the third-party service,  because you can always clone, build and run it yourself to have full control over all the components.    Feel free to contact us if you have any questions or feature requests.  Your feedback is much appreciated!    - Discord: https://discord.gg/aG8XKuwsQd  - Telegram: https://t.me/baking_bad_chat  - X: https://x.com/TezosBakingBad  - Email: hello@bakingbad.dev    And don't forget to star TzKT [on GitHub](https://github.com/baking-bad/tzkt) if you like it 😊    # Get Started    There are two API services provided for public use:  - **Free TzKT API** with free anonymous access;  - **TzKT Pro** with paid subscriptions with increased rate limits, off-chain data, extended support and business-level SLA.    You can find more details about differences between available tiers [here](https://tzkt.io/api).    ## Free TzKT API    Free-tier TzKT API is the best way to get started and explore available Tezos data and API functionality.  It doesn't require authorization and is free for everyone and for both commercial and non-commercial use.    > #### Note: attribution required  If you use free-tier TzKT API, you **must** mention it on your website or application by placing the label  \"Powered by TzKT API\", or \"Built with TzKT API\", or \"Data provided by TzKT API\" with a direct link to [tzkt.io](https://tzkt.io).    It's available for the following Tezos networks with the following base URLs:    - Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io))  - Ghostnet: `https://api.ghostnet.tzkt.io/` ([view docs](https://api.ghostnet.tzkt.io))  - Shadownet: `https://api.shadownet.tzkt.io/` ([view docs](https://api.shadownet.tzkt.io))  - Seoulnet: `https://api.seoulnet.tzkt.io/` ([view docs](https://api.seoulnet.tzkt.io))  - Tallinnnet: `https://api.tallinnnet.tzkt.io/` ([view docs](https://api.tallinnnet.tzkt.io))    ### Sending Requests    To send a request to Free TzKT API you need literally nothing. Just take the base URL of the particular network  (for example, Tezos mainnet: `https://api.tzkt.io`) and append the path of the particular endpoint  (for example, chain's head: `/v1/head`), that's pretty much it:     ```bash  curl https://api.tzkt.io/v1/head  ```    Read through this documentation to explore available endpoints, query parameters  (note, if you click on a query parameter, you will see available modes, such as `.eq`, `.in`, etc.)  and response models. If you have any questions, do not hesitate to ask for support, Tezos community has always been very friendly! 😉    ### Rate Limits    Please, refer to https://tzkt.io/api to check relevant rate limits.    If you exceed the limit, the API will respond with `HTTP 429` status code.    ## TzKT Pro    TzKT Pro is intended for professional use, for those who seek for extended capabilities, performance, reliability and business-level SLA.  TzKT Pro service is provided via paid subscriptions. Please, refer to [Pricing Plans](https://tzkt.io/api) to check available tiers.    It's available for the following Tezos networks with the following base URLs:    - Mainnet: `https://pro.tzkt.io/` ([view docs](https://api.tzkt.io))  - Testnets: *let us know if you need TzKT Pro for testnets*    ### Authorization    To access TzKT Pro you will need to authorize requests with your personal API key, that you will receive on your email after purchasing a subscription.  This can be done by adding the query string parameter `?apikey={your_key}` or by adding the HTTP header `apikey: {your_key}`.    Note that you can have multiple API keys within a single subscription.    Keep your API keys private, do not publish it anywhere and do not hardcode it, especially in public repositories.  If your key was compromised, just let us know and we will issue a new one.    Also note that passing the API key via HTTP headers is more secure, because in HTTPS headers are encrypted,  but query string is not, so the key can be unintentionally exposed to third parties.    ### Sending Requests    Sending a request with the API key passed as a query string parameter:    ```bash  curl https://pro.tzkt.io/v1/head?apikey={your_key}  ```    Sending a request with the API key passed via an HTTP header:    ```bash  curl https://pro.tzkt.io/v1/head \\      -H 'apikey: {your_key}'  ```    ### Rate Limits    Please, refer to https://tzkt.io/api to check relevant rate limits for different pricing plans.    Also, TzKT Pro provides you with the additional HTTP headers to show the allowed limits, number of available requests  and the time remaining (in seconds) until the quota is reset. Here's an example:    ```  RateLimit-Limit: 50  RateLimit-Remaining: 49  RateLimit-Reset: 1  ```    It also sends general information about your rate limits per second and per day:    ```  X-RateLimit-Limit-Second: 50  X-RateLimit-Remaining-Second: 49  X-RateLimit-Limit-Day: 3000000  X-RateLimit-Remaining-Day: 2994953  ```    If you exceed the limit, the API will respond with `HTTP 429` status code.
 *
 * The version of the OpenAPI document: 1.17.1
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

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Tzkt\ObjectSerializer;

/**
 * Cycle Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Cycle implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Cycle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'index' => 'int',
        'first_level' => 'int',
        'start_time' => '\DateTime',
        'last_level' => 'int',
        'end_time' => '\DateTime',
        'snapshot_level' => 'int',
        'random_seed' => 'string',
        'total_bakers' => 'int',
        'total_baking_power' => 'int',
        'block_reward' => 'int',
        'block_bonus_per_block' => 'int',
        'attestation_reward_per_block' => 'int',
        'nonce_revelation_reward' => 'int',
        'vdf_revelation_reward' => 'int',
        'dal_attestation_reward_per_shard' => 'int',
        'quote' => '\Tzkt\Model\CycleQuote',
        'block_bonus_per_slot' => 'int',
        'attestation_reward_per_slot' => 'int',
        'endorsement_reward_per_slot' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'index' => 'int32',
        'first_level' => 'int32',
        'start_time' => 'date-time',
        'last_level' => 'int32',
        'end_time' => 'date-time',
        'snapshot_level' => 'int32',
        'random_seed' => null,
        'total_bakers' => 'int32',
        'total_baking_power' => 'int64',
        'block_reward' => 'int64',
        'block_bonus_per_block' => 'int64',
        'attestation_reward_per_block' => 'int64',
        'nonce_revelation_reward' => 'int64',
        'vdf_revelation_reward' => 'int64',
        'dal_attestation_reward_per_shard' => 'int64',
        'quote' => null,
        'block_bonus_per_slot' => 'int64',
        'attestation_reward_per_slot' => 'int64',
        'endorsement_reward_per_slot' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'index' => false,
        'first_level' => false,
        'start_time' => false,
        'last_level' => false,
        'end_time' => false,
        'snapshot_level' => false,
        'random_seed' => false,
        'total_bakers' => false,
        'total_baking_power' => false,
        'block_reward' => false,
        'block_bonus_per_block' => false,
        'attestation_reward_per_block' => false,
        'nonce_revelation_reward' => false,
        'vdf_revelation_reward' => false,
        'dal_attestation_reward_per_shard' => false,
        'quote' => true,
        'block_bonus_per_slot' => false,
        'attestation_reward_per_slot' => false,
        'endorsement_reward_per_slot' => false
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
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
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
        'index' => 'index',
        'first_level' => 'firstLevel',
        'start_time' => 'startTime',
        'last_level' => 'lastLevel',
        'end_time' => 'endTime',
        'snapshot_level' => 'snapshotLevel',
        'random_seed' => 'randomSeed',
        'total_bakers' => 'totalBakers',
        'total_baking_power' => 'totalBakingPower',
        'block_reward' => 'blockReward',
        'block_bonus_per_block' => 'blockBonusPerBlock',
        'attestation_reward_per_block' => 'attestationRewardPerBlock',
        'nonce_revelation_reward' => 'nonceRevelationReward',
        'vdf_revelation_reward' => 'vdfRevelationReward',
        'dal_attestation_reward_per_shard' => 'dalAttestationRewardPerShard',
        'quote' => 'quote',
        'block_bonus_per_slot' => 'blockBonusPerSlot',
        'attestation_reward_per_slot' => 'attestationRewardPerSlot',
        'endorsement_reward_per_slot' => 'endorsementRewardPerSlot'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'index' => 'setIndex',
        'first_level' => 'setFirstLevel',
        'start_time' => 'setStartTime',
        'last_level' => 'setLastLevel',
        'end_time' => 'setEndTime',
        'snapshot_level' => 'setSnapshotLevel',
        'random_seed' => 'setRandomSeed',
        'total_bakers' => 'setTotalBakers',
        'total_baking_power' => 'setTotalBakingPower',
        'block_reward' => 'setBlockReward',
        'block_bonus_per_block' => 'setBlockBonusPerBlock',
        'attestation_reward_per_block' => 'setAttestationRewardPerBlock',
        'nonce_revelation_reward' => 'setNonceRevelationReward',
        'vdf_revelation_reward' => 'setVdfRevelationReward',
        'dal_attestation_reward_per_shard' => 'setDalAttestationRewardPerShard',
        'quote' => 'setQuote',
        'block_bonus_per_slot' => 'setBlockBonusPerSlot',
        'attestation_reward_per_slot' => 'setAttestationRewardPerSlot',
        'endorsement_reward_per_slot' => 'setEndorsementRewardPerSlot'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'index' => 'getIndex',
        'first_level' => 'getFirstLevel',
        'start_time' => 'getStartTime',
        'last_level' => 'getLastLevel',
        'end_time' => 'getEndTime',
        'snapshot_level' => 'getSnapshotLevel',
        'random_seed' => 'getRandomSeed',
        'total_bakers' => 'getTotalBakers',
        'total_baking_power' => 'getTotalBakingPower',
        'block_reward' => 'getBlockReward',
        'block_bonus_per_block' => 'getBlockBonusPerBlock',
        'attestation_reward_per_block' => 'getAttestationRewardPerBlock',
        'nonce_revelation_reward' => 'getNonceRevelationReward',
        'vdf_revelation_reward' => 'getVdfRevelationReward',
        'dal_attestation_reward_per_shard' => 'getDalAttestationRewardPerShard',
        'quote' => 'getQuote',
        'block_bonus_per_slot' => 'getBlockBonusPerSlot',
        'attestation_reward_per_slot' => 'getAttestationRewardPerSlot',
        'endorsement_reward_per_slot' => 'getEndorsementRewardPerSlot'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
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
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('index', $data ?? [], null);
        $this->setIfExists('first_level', $data ?? [], null);
        $this->setIfExists('start_time', $data ?? [], null);
        $this->setIfExists('last_level', $data ?? [], null);
        $this->setIfExists('end_time', $data ?? [], null);
        $this->setIfExists('snapshot_level', $data ?? [], null);
        $this->setIfExists('random_seed', $data ?? [], null);
        $this->setIfExists('total_bakers', $data ?? [], null);
        $this->setIfExists('total_baking_power', $data ?? [], null);
        $this->setIfExists('block_reward', $data ?? [], null);
        $this->setIfExists('block_bonus_per_block', $data ?? [], null);
        $this->setIfExists('attestation_reward_per_block', $data ?? [], null);
        $this->setIfExists('nonce_revelation_reward', $data ?? [], null);
        $this->setIfExists('vdf_revelation_reward', $data ?? [], null);
        $this->setIfExists('dal_attestation_reward_per_shard', $data ?? [], null);
        $this->setIfExists('quote', $data ?? [], null);
        $this->setIfExists('block_bonus_per_slot', $data ?? [], null);
        $this->setIfExists('attestation_reward_per_slot', $data ?? [], null);
        $this->setIfExists('endorsement_reward_per_slot', $data ?? [], null);
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
        $invalidProperties = [];

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
     * Gets index
     *
     * @return int|null
     */
    public function getIndex(): ?int
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index Cycle index starting from zero
     *
     * @return $this
     */
    public function setIndex(?int $index): static
    {
        if (is_null($index)) {
            throw new InvalidArgumentException('non-nullable index cannot be null');
        }
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets first_level
     *
     * @return int|null
     */
    public function getFirstLevel(): ?int
    {
        return $this->container['first_level'];
    }

    /**
     * Sets first_level
     *
     * @param int|null $first_level Level of the first block in the cycle
     *
     * @return $this
     */
    public function setFirstLevel(?int $first_level): static
    {
        if (is_null($first_level)) {
            throw new InvalidArgumentException('non-nullable first_level cannot be null');
        }
        $this->container['first_level'] = $first_level;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime|null
     */
    public function getStartTime(): ?\DateTime
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime|null $start_time Timestamp of the first block in the cycle
     *
     * @return $this
     */
    public function setStartTime(?\DateTime $start_time): static
    {
        if (is_null($start_time)) {
            throw new InvalidArgumentException('non-nullable start_time cannot be null');
        }
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets last_level
     *
     * @return int|null
     */
    public function getLastLevel(): ?int
    {
        return $this->container['last_level'];
    }

    /**
     * Sets last_level
     *
     * @param int|null $last_level Level of the last block in the cycle
     *
     * @return $this
     */
    public function setLastLevel(?int $last_level): static
    {
        if (is_null($last_level)) {
            throw new InvalidArgumentException('non-nullable last_level cannot be null');
        }
        $this->container['last_level'] = $last_level;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime|null
     */
    public function getEndTime(): ?\DateTime
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime|null $end_time Timestamp of the last block in the cycle
     *
     * @return $this
     */
    public function setEndTime(?\DateTime $end_time): static
    {
        if (is_null($end_time)) {
            throw new InvalidArgumentException('non-nullable end_time cannot be null');
        }
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets snapshot_level
     *
     * @return int|null
     */
    public function getSnapshotLevel(): ?int
    {
        return $this->container['snapshot_level'];
    }

    /**
     * Sets snapshot_level
     *
     * @param int|null $snapshot_level Height of the block where the snapshot was taken
     *
     * @return $this
     */
    public function setSnapshotLevel(?int $snapshot_level): static
    {
        if (is_null($snapshot_level)) {
            throw new InvalidArgumentException('non-nullable snapshot_level cannot be null');
        }
        $this->container['snapshot_level'] = $snapshot_level;

        return $this;
    }

    /**
     * Gets random_seed
     *
     * @return string|null
     */
    public function getRandomSeed(): ?string
    {
        return $this->container['random_seed'];
    }

    /**
     * Sets random_seed
     *
     * @param string|null $random_seed Randomly generated seed used by the network for things like baking rights distribution etc.
     *
     * @return $this
     */
    public function setRandomSeed(?string $random_seed): static
    {
        if (is_null($random_seed)) {
            throw new InvalidArgumentException('non-nullable random_seed cannot be null');
        }
        $this->container['random_seed'] = $random_seed;

        return $this;
    }

    /**
     * Gets total_bakers
     *
     * @return int|null
     */
    public function getTotalBakers(): ?int
    {
        return $this->container['total_bakers'];
    }

    /**
     * Sets total_bakers
     *
     * @param int|null $total_bakers Total number of all active in this cycle bakers
     *
     * @return $this
     */
    public function setTotalBakers(?int $total_bakers): static
    {
        if (is_null($total_bakers)) {
            throw new InvalidArgumentException('non-nullable total_bakers cannot be null');
        }
        $this->container['total_bakers'] = $total_bakers;

        return $this;
    }

    /**
     * Gets total_baking_power
     *
     * @return int|null
     */
    public function getTotalBakingPower(): ?int
    {
        return $this->container['total_baking_power'];
    }

    /**
     * Sets total_baking_power
     *
     * @param int|null $total_baking_power Total baking power of all active in this cycle bakers
     *
     * @return $this
     */
    public function setTotalBakingPower(?int $total_baking_power): static
    {
        if (is_null($total_baking_power)) {
            throw new InvalidArgumentException('non-nullable total_baking_power cannot be null');
        }
        $this->container['total_baking_power'] = $total_baking_power;

        return $this;
    }

    /**
     * Gets block_reward
     *
     * @return int|null
     */
    public function getBlockReward(): ?int
    {
        return $this->container['block_reward'];
    }

    /**
     * Sets block_reward
     *
     * @param int|null $block_reward Fixed reward paid to the block payload proposer in this cycle (micro tez)
     *
     * @return $this
     */
    public function setBlockReward(?int $block_reward): static
    {
        if (is_null($block_reward)) {
            throw new InvalidArgumentException('non-nullable block_reward cannot be null');
        }
        $this->container['block_reward'] = $block_reward;

        return $this;
    }

    /**
     * Gets block_bonus_per_block
     *
     * @return int|null
     */
    public function getBlockBonusPerBlock(): ?int
    {
        return $this->container['block_bonus_per_block'];
    }

    /**
     * Sets block_bonus_per_block
     *
     * @param int|null $block_bonus_per_block Bonus reward paid to the block producer in this cycle (micro tez)
     *
     * @return $this
     */
    public function setBlockBonusPerBlock(?int $block_bonus_per_block): static
    {
        if (is_null($block_bonus_per_block)) {
            throw new InvalidArgumentException('non-nullable block_bonus_per_block cannot be null');
        }
        $this->container['block_bonus_per_block'] = $block_bonus_per_block;

        return $this;
    }

    /**
     * Gets attestation_reward_per_block
     *
     * @return int|null
     */
    public function getAttestationRewardPerBlock(): ?int
    {
        return $this->container['attestation_reward_per_block'];
    }

    /**
     * Sets attestation_reward_per_block
     *
     * @param int|null $attestation_reward_per_block Reward for attestation in this cycle (micro tez)
     *
     * @return $this
     */
    public function setAttestationRewardPerBlock(?int $attestation_reward_per_block): static
    {
        if (is_null($attestation_reward_per_block)) {
            throw new InvalidArgumentException('non-nullable attestation_reward_per_block cannot be null');
        }
        $this->container['attestation_reward_per_block'] = $attestation_reward_per_block;

        return $this;
    }

    /**
     * Gets nonce_revelation_reward
     *
     * @return int|null
     */
    public function getNonceRevelationReward(): ?int
    {
        return $this->container['nonce_revelation_reward'];
    }

    /**
     * Sets nonce_revelation_reward
     *
     * @param int|null $nonce_revelation_reward Reward for seed nonce revelation in this cycle (micro tez)
     *
     * @return $this
     */
    public function setNonceRevelationReward(?int $nonce_revelation_reward): static
    {
        if (is_null($nonce_revelation_reward)) {
            throw new InvalidArgumentException('non-nullable nonce_revelation_reward cannot be null');
        }
        $this->container['nonce_revelation_reward'] = $nonce_revelation_reward;

        return $this;
    }

    /**
     * Gets vdf_revelation_reward
     *
     * @return int|null
     */
    public function getVdfRevelationReward(): ?int
    {
        return $this->container['vdf_revelation_reward'];
    }

    /**
     * Sets vdf_revelation_reward
     *
     * @param int|null $vdf_revelation_reward Reward for vdf revelation in this cycle (micro tez)
     *
     * @return $this
     */
    public function setVdfRevelationReward(?int $vdf_revelation_reward): static
    {
        if (is_null($vdf_revelation_reward)) {
            throw new InvalidArgumentException('non-nullable vdf_revelation_reward cannot be null');
        }
        $this->container['vdf_revelation_reward'] = $vdf_revelation_reward;

        return $this;
    }

    /**
     * Gets dal_attestation_reward_per_shard
     *
     * @return int|null
     */
    public function getDalAttestationRewardPerShard(): ?int
    {
        return $this->container['dal_attestation_reward_per_shard'];
    }

    /**
     * Sets dal_attestation_reward_per_shard
     *
     * @param int|null $dal_attestation_reward_per_shard Reward for dal attestation in this cycle (micro tez)
     *
     * @return $this
     */
    public function setDalAttestationRewardPerShard(?int $dal_attestation_reward_per_shard): static
    {
        if (is_null($dal_attestation_reward_per_shard)) {
            throw new InvalidArgumentException('non-nullable dal_attestation_reward_per_shard cannot be null');
        }
        $this->container['dal_attestation_reward_per_shard'] = $dal_attestation_reward_per_shard;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return \Tzkt\Model\CycleQuote|null
     */
    public function getQuote(): ?\Tzkt\Model\CycleQuote
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param \Tzkt\Model\CycleQuote|null $quote quote
     *
     * @return $this
     */
    public function setQuote(?\Tzkt\Model\CycleQuote $quote): static
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
     * Gets block_bonus_per_slot
     *
     * @return int|null
     */
    public function getBlockBonusPerSlot(): ?int
    {
        return $this->container['block_bonus_per_slot'];
    }

    /**
     * Sets block_bonus_per_slot
     *
     * @param int|null $block_bonus_per_slot **DEPRECATED**
     *
     * @return $this
     */
    public function setBlockBonusPerSlot(?int $block_bonus_per_slot): static
    {
        if (is_null($block_bonus_per_slot)) {
            throw new InvalidArgumentException('non-nullable block_bonus_per_slot cannot be null');
        }
        $this->container['block_bonus_per_slot'] = $block_bonus_per_slot;

        return $this;
    }

    /**
     * Gets attestation_reward_per_slot
     *
     * @return int|null
     */
    public function getAttestationRewardPerSlot(): ?int
    {
        return $this->container['attestation_reward_per_slot'];
    }

    /**
     * Sets attestation_reward_per_slot
     *
     * @param int|null $attestation_reward_per_slot **DEPRECATED**
     *
     * @return $this
     */
    public function setAttestationRewardPerSlot(?int $attestation_reward_per_slot): static
    {
        if (is_null($attestation_reward_per_slot)) {
            throw new InvalidArgumentException('non-nullable attestation_reward_per_slot cannot be null');
        }
        $this->container['attestation_reward_per_slot'] = $attestation_reward_per_slot;

        return $this;
    }

    /**
     * Gets endorsement_reward_per_slot
     *
     * @return int|null
     */
    public function getEndorsementRewardPerSlot(): ?int
    {
        return $this->container['endorsement_reward_per_slot'];
    }

    /**
     * Sets endorsement_reward_per_slot
     *
     * @param int|null $endorsement_reward_per_slot **DEPRECATED**
     *
     * @return $this
     */
    public function setEndorsementRewardPerSlot(?int $endorsement_reward_per_slot): static
    {
        if (is_null($endorsement_reward_per_slot)) {
            throw new InvalidArgumentException('non-nullable endorsement_reward_per_slot cannot be null');
        }
        $this->container['endorsement_reward_per_slot'] = $endorsement_reward_per_slot;

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


