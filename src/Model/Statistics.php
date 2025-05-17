<?php
/**
 * Statistics
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

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Tzkt\ObjectSerializer;

/**
 * Statistics Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Statistics implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Statistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'cycle' => 'int',
        'date' => '\DateTime',
        'level' => 'int',
        'timestamp' => '\DateTime',
        'total_supply' => 'int',
        'circulating_supply' => 'int',
        'total_bootstrapped' => 'int',
        'total_commitments' => 'int',
        'total_activated' => 'int',
        'total_created' => 'int',
        'total_burned' => 'int',
        'total_banished' => 'int',
        'total_frozen' => 'int',
        'total_rollup_bonds' => 'int',
        'total_smart_rollup_bonds' => 'int',
        'total_lost' => 'int',
        'quote' => '\Tzkt\Model\StatisticsQuote',
        'total_vested' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'cycle' => 'int32',
        'date' => 'date-time',
        'level' => 'int32',
        'timestamp' => 'date-time',
        'total_supply' => 'int64',
        'circulating_supply' => 'int64',
        'total_bootstrapped' => 'int64',
        'total_commitments' => 'int64',
        'total_activated' => 'int64',
        'total_created' => 'int64',
        'total_burned' => 'int64',
        'total_banished' => 'int64',
        'total_frozen' => 'int64',
        'total_rollup_bonds' => 'int64',
        'total_smart_rollup_bonds' => 'int64',
        'total_lost' => 'int64',
        'quote' => null,
        'total_vested' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'cycle' => true,
        'date' => true,
        'level' => false,
        'timestamp' => false,
        'total_supply' => false,
        'circulating_supply' => false,
        'total_bootstrapped' => false,
        'total_commitments' => false,
        'total_activated' => false,
        'total_created' => false,
        'total_burned' => false,
        'total_banished' => false,
        'total_frozen' => false,
        'total_rollup_bonds' => false,
        'total_smart_rollup_bonds' => false,
        'total_lost' => false,
        'quote' => true,
        'total_vested' => false
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
        'cycle' => 'cycle',
        'date' => 'date',
        'level' => 'level',
        'timestamp' => 'timestamp',
        'total_supply' => 'totalSupply',
        'circulating_supply' => 'circulatingSupply',
        'total_bootstrapped' => 'totalBootstrapped',
        'total_commitments' => 'totalCommitments',
        'total_activated' => 'totalActivated',
        'total_created' => 'totalCreated',
        'total_burned' => 'totalBurned',
        'total_banished' => 'totalBanished',
        'total_frozen' => 'totalFrozen',
        'total_rollup_bonds' => 'totalRollupBonds',
        'total_smart_rollup_bonds' => 'totalSmartRollupBonds',
        'total_lost' => 'totalLost',
        'quote' => 'quote',
        'total_vested' => 'totalVested'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'cycle' => 'setCycle',
        'date' => 'setDate',
        'level' => 'setLevel',
        'timestamp' => 'setTimestamp',
        'total_supply' => 'setTotalSupply',
        'circulating_supply' => 'setCirculatingSupply',
        'total_bootstrapped' => 'setTotalBootstrapped',
        'total_commitments' => 'setTotalCommitments',
        'total_activated' => 'setTotalActivated',
        'total_created' => 'setTotalCreated',
        'total_burned' => 'setTotalBurned',
        'total_banished' => 'setTotalBanished',
        'total_frozen' => 'setTotalFrozen',
        'total_rollup_bonds' => 'setTotalRollupBonds',
        'total_smart_rollup_bonds' => 'setTotalSmartRollupBonds',
        'total_lost' => 'setTotalLost',
        'quote' => 'setQuote',
        'total_vested' => 'setTotalVested'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'cycle' => 'getCycle',
        'date' => 'getDate',
        'level' => 'getLevel',
        'timestamp' => 'getTimestamp',
        'total_supply' => 'getTotalSupply',
        'circulating_supply' => 'getCirculatingSupply',
        'total_bootstrapped' => 'getTotalBootstrapped',
        'total_commitments' => 'getTotalCommitments',
        'total_activated' => 'getTotalActivated',
        'total_created' => 'getTotalCreated',
        'total_burned' => 'getTotalBurned',
        'total_banished' => 'getTotalBanished',
        'total_frozen' => 'getTotalFrozen',
        'total_rollup_bonds' => 'getTotalRollupBonds',
        'total_smart_rollup_bonds' => 'getTotalSmartRollupBonds',
        'total_lost' => 'getTotalLost',
        'quote' => 'getQuote',
        'total_vested' => 'getTotalVested'
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
        $this->setIfExists('cycle', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('total_supply', $data ?? [], null);
        $this->setIfExists('circulating_supply', $data ?? [], null);
        $this->setIfExists('total_bootstrapped', $data ?? [], null);
        $this->setIfExists('total_commitments', $data ?? [], null);
        $this->setIfExists('total_activated', $data ?? [], null);
        $this->setIfExists('total_created', $data ?? [], null);
        $this->setIfExists('total_burned', $data ?? [], null);
        $this->setIfExists('total_banished', $data ?? [], null);
        $this->setIfExists('total_frozen', $data ?? [], null);
        $this->setIfExists('total_rollup_bonds', $data ?? [], null);
        $this->setIfExists('total_smart_rollup_bonds', $data ?? [], null);
        $this->setIfExists('total_lost', $data ?? [], null);
        $this->setIfExists('quote', $data ?? [], null);
        $this->setIfExists('total_vested', $data ?? [], null);
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
     * Gets cycle
     *
     * @return int|null
     */
    public function getCycle(): ?int
    {
        return $this->container['cycle'];
    }

    /**
     * Sets cycle
     *
     * @param int|null $cycle Cycle at the end of which the statistics has been calculated. This field is only present in cyclic statistics.
     *
     * @return $this
     */
    public function setCycle(?int $cycle): static
    {
        if (is_null($cycle)) {
            array_push($this->openAPINullablesSetToNull, 'cycle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cycle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cycle'] = $cycle;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate(): ?\DateTime
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date Day at the end of which the statistics has been calculated. This field is only present in daily statistics.
     *
     * @return $this
     */
    public function setDate(?\DateTime $date): static
    {
        if (is_null($date)) {
            array_push($this->openAPINullablesSetToNull, 'date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date'] = $date;

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
     * @param int|null $level Level of the block at which the statistics has been calculated
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
     * @param \DateTime|null $timestamp Timestamp of the block at which the statistics has been calculated (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
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
     * Gets total_supply
     *
     * @return int|null
     */
    public function getTotalSupply(): ?int
    {
        return $this->container['total_supply'];
    }

    /**
     * Sets total_supply
     *
     * @param int|null $total_supply Total supply - all existing tokens (including locked vested funds and frozen funds) plus not yet activated fundraiser tokens
     *
     * @return $this
     */
    public function setTotalSupply(?int $total_supply): static
    {
        if (is_null($total_supply)) {
            throw new InvalidArgumentException('non-nullable total_supply cannot be null');
        }
        $this->container['total_supply'] = $total_supply;

        return $this;
    }

    /**
     * Gets circulating_supply
     *
     * @return int|null
     */
    public function getCirculatingSupply(): ?int
    {
        return $this->container['circulating_supply'];
    }

    /**
     * Sets circulating_supply
     *
     * @param int|null $circulating_supply Circulating supply - all active tokens which can affect supply and demand (can be spent/transferred)
     *
     * @return $this
     */
    public function setCirculatingSupply(?int $circulating_supply): static
    {
        if (is_null($circulating_supply)) {
            throw new InvalidArgumentException('non-nullable circulating_supply cannot be null');
        }
        $this->container['circulating_supply'] = $circulating_supply;

        return $this;
    }

    /**
     * Gets total_bootstrapped
     *
     * @return int|null
     */
    public function getTotalBootstrapped(): ?int
    {
        return $this->container['total_bootstrapped'];
    }

    /**
     * Sets total_bootstrapped
     *
     * @param int|null $total_bootstrapped Total amount of tokens initially created when starting the blockchain
     *
     * @return $this
     */
    public function setTotalBootstrapped(?int $total_bootstrapped): static
    {
        if (is_null($total_bootstrapped)) {
            throw new InvalidArgumentException('non-nullable total_bootstrapped cannot be null');
        }
        $this->container['total_bootstrapped'] = $total_bootstrapped;

        return $this;
    }

    /**
     * Gets total_commitments
     *
     * @return int|null
     */
    public function getTotalCommitments(): ?int
    {
        return $this->container['total_commitments'];
    }

    /**
     * Sets total_commitments
     *
     * @param int|null $total_commitments Total commitment amount (tokens to be activated by fundraisers)
     *
     * @return $this
     */
    public function setTotalCommitments(?int $total_commitments): static
    {
        if (is_null($total_commitments)) {
            throw new InvalidArgumentException('non-nullable total_commitments cannot be null');
        }
        $this->container['total_commitments'] = $total_commitments;

        return $this;
    }

    /**
     * Gets total_activated
     *
     * @return int|null
     */
    public function getTotalActivated(): ?int
    {
        return $this->container['total_activated'];
    }

    /**
     * Sets total_activated
     *
     * @param int|null $total_activated Total amount of tokens activated by fundraisers
     *
     * @return $this
     */
    public function setTotalActivated(?int $total_activated): static
    {
        if (is_null($total_activated)) {
            throw new InvalidArgumentException('non-nullable total_activated cannot be null');
        }
        $this->container['total_activated'] = $total_activated;

        return $this;
    }

    /**
     * Gets total_created
     *
     * @return int|null
     */
    public function getTotalCreated(): ?int
    {
        return $this->container['total_created'];
    }

    /**
     * Sets total_created
     *
     * @param int|null $total_created Total amount of created/issued tokens
     *
     * @return $this
     */
    public function setTotalCreated(?int $total_created): static
    {
        if (is_null($total_created)) {
            throw new InvalidArgumentException('non-nullable total_created cannot be null');
        }
        $this->container['total_created'] = $total_created;

        return $this;
    }

    /**
     * Gets total_burned
     *
     * @return int|null
     */
    public function getTotalBurned(): ?int
    {
        return $this->container['total_burned'];
    }

    /**
     * Sets total_burned
     *
     * @param int|null $total_burned Total amount of burned tokens
     *
     * @return $this
     */
    public function setTotalBurned(?int $total_burned): static
    {
        if (is_null($total_burned)) {
            throw new InvalidArgumentException('non-nullable total_burned cannot be null');
        }
        $this->container['total_burned'] = $total_burned;

        return $this;
    }

    /**
     * Gets total_banished
     *
     * @return int|null
     */
    public function getTotalBanished(): ?int
    {
        return $this->container['total_banished'];
    }

    /**
     * Sets total_banished
     *
     * @param int|null $total_banished Total amount of tokens sent to the null-address, which is equivalent to burning
     *
     * @return $this
     */
    public function setTotalBanished(?int $total_banished): static
    {
        if (is_null($total_banished)) {
            throw new InvalidArgumentException('non-nullable total_banished cannot be null');
        }
        $this->container['total_banished'] = $total_banished;

        return $this;
    }

    /**
     * Gets total_frozen
     *
     * @return int|null
     */
    public function getTotalFrozen(): ?int
    {
        return $this->container['total_frozen'];
    }

    /**
     * Sets total_frozen
     *
     * @param int|null $total_frozen Total amount of frozen tokens (frozen security deposits, frozen rewards and frozen fees)
     *
     * @return $this
     */
    public function setTotalFrozen(?int $total_frozen): static
    {
        if (is_null($total_frozen)) {
            throw new InvalidArgumentException('non-nullable total_frozen cannot be null');
        }
        $this->container['total_frozen'] = $total_frozen;

        return $this;
    }

    /**
     * Gets total_rollup_bonds
     *
     * @return int|null
     */
    public function getTotalRollupBonds(): ?int
    {
        return $this->container['total_rollup_bonds'];
    }

    /**
     * Sets total_rollup_bonds
     *
     * @param int|null $total_rollup_bonds Total amount of tokens locked as rollup bonds
     *
     * @return $this
     */
    public function setTotalRollupBonds(?int $total_rollup_bonds): static
    {
        if (is_null($total_rollup_bonds)) {
            throw new InvalidArgumentException('non-nullable total_rollup_bonds cannot be null');
        }
        $this->container['total_rollup_bonds'] = $total_rollup_bonds;

        return $this;
    }

    /**
     * Gets total_smart_rollup_bonds
     *
     * @return int|null
     */
    public function getTotalSmartRollupBonds(): ?int
    {
        return $this->container['total_smart_rollup_bonds'];
    }

    /**
     * Sets total_smart_rollup_bonds
     *
     * @param int|null $total_smart_rollup_bonds Total amount of tokens locked as smart rollup bonds
     *
     * @return $this
     */
    public function setTotalSmartRollupBonds(?int $total_smart_rollup_bonds): static
    {
        if (is_null($total_smart_rollup_bonds)) {
            throw new InvalidArgumentException('non-nullable total_smart_rollup_bonds cannot be null');
        }
        $this->container['total_smart_rollup_bonds'] = $total_smart_rollup_bonds;

        return $this;
    }

    /**
     * Gets total_lost
     *
     * @return int|null
     */
    public function getTotalLost(): ?int
    {
        return $this->container['total_lost'];
    }

    /**
     * Sets total_lost
     *
     * @param int|null $total_lost Total amount lost due to inaccuracy of the economic protocol introduced in Oxford. This amount is literally lost, because it is no longer available for the account in any mean, but for some reason it is counted as delegated.
     *
     * @return $this
     */
    public function setTotalLost(?int $total_lost): static
    {
        if (is_null($total_lost)) {
            throw new InvalidArgumentException('non-nullable total_lost cannot be null');
        }
        $this->container['total_lost'] = $total_lost;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return \Tzkt\Model\StatisticsQuote|null
     */
    public function getQuote(): ?\Tzkt\Model\StatisticsQuote
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param \Tzkt\Model\StatisticsQuote|null $quote quote
     *
     * @return $this
     */
    public function setQuote(?\Tzkt\Model\StatisticsQuote $quote): static
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
     * Gets total_vested
     *
     * @return int|null
     */
    public function getTotalVested(): ?int
    {
        return $this->container['total_vested'];
    }

    /**
     * Sets total_vested
     *
     * @param int|null $total_vested [DEPRECATED]
     *
     * @return $this
     */
    public function setTotalVested(?int $total_vested): static
    {
        if (is_null($total_vested)) {
            throw new InvalidArgumentException('non-nullable total_vested cannot be null');
        }
        $this->container['total_vested'] = $total_vested;

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


