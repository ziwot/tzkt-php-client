<?php
/**
 * UnstakeRequest
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
 * UnstakeRequest Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class UnstakeRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'UnstakeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'cycle' => 'int',
        'baker' => '\Tzkt\Model\StakingUpdateBaker',
        'staker' => '\Tzkt\Model\StakingUpdateStaker',
        'requested_amount' => 'int',
        'restaked_amount' => 'int',
        'finalized_amount' => 'int',
        'slashed_amount' => 'int',
        'rounding_error' => 'int',
        'actual_amount' => 'int',
        'status' => 'string',
        'updates_count' => 'int',
        'first_level' => 'int',
        'first_time' => '\DateTime',
        'last_level' => 'int',
        'last_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'int32',
        'cycle' => 'int32',
        'baker' => null,
        'staker' => null,
        'requested_amount' => 'int64',
        'restaked_amount' => 'int64',
        'finalized_amount' => 'int64',
        'slashed_amount' => 'int64',
        'rounding_error' => 'int64',
        'actual_amount' => 'int64',
        'status' => null,
        'updates_count' => 'int32',
        'first_level' => 'int32',
        'first_time' => 'date-time',
        'last_level' => 'int32',
        'last_time' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'cycle' => false,
        'baker' => true,
        'staker' => true,
        'requested_amount' => false,
        'restaked_amount' => false,
        'finalized_amount' => false,
        'slashed_amount' => false,
        'rounding_error' => true,
        'actual_amount' => false,
        'status' => true,
        'updates_count' => false,
        'first_level' => false,
        'first_time' => false,
        'last_level' => false,
        'last_time' => false
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
        'id' => 'id',
        'cycle' => 'cycle',
        'baker' => 'baker',
        'staker' => 'staker',
        'requested_amount' => 'requestedAmount',
        'restaked_amount' => 'restakedAmount',
        'finalized_amount' => 'finalizedAmount',
        'slashed_amount' => 'slashedAmount',
        'rounding_error' => 'roundingError',
        'actual_amount' => 'actualAmount',
        'status' => 'status',
        'updates_count' => 'updatesCount',
        'first_level' => 'firstLevel',
        'first_time' => 'firstTime',
        'last_level' => 'lastLevel',
        'last_time' => 'lastTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'cycle' => 'setCycle',
        'baker' => 'setBaker',
        'staker' => 'setStaker',
        'requested_amount' => 'setRequestedAmount',
        'restaked_amount' => 'setRestakedAmount',
        'finalized_amount' => 'setFinalizedAmount',
        'slashed_amount' => 'setSlashedAmount',
        'rounding_error' => 'setRoundingError',
        'actual_amount' => 'setActualAmount',
        'status' => 'setStatus',
        'updates_count' => 'setUpdatesCount',
        'first_level' => 'setFirstLevel',
        'first_time' => 'setFirstTime',
        'last_level' => 'setLastLevel',
        'last_time' => 'setLastTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'cycle' => 'getCycle',
        'baker' => 'getBaker',
        'staker' => 'getStaker',
        'requested_amount' => 'getRequestedAmount',
        'restaked_amount' => 'getRestakedAmount',
        'finalized_amount' => 'getFinalizedAmount',
        'slashed_amount' => 'getSlashedAmount',
        'rounding_error' => 'getRoundingError',
        'actual_amount' => 'getActualAmount',
        'status' => 'getStatus',
        'updates_count' => 'getUpdatesCount',
        'first_level' => 'getFirstLevel',
        'first_time' => 'getFirstTime',
        'last_level' => 'getLastLevel',
        'last_time' => 'getLastTime'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('cycle', $data ?? [], null);
        $this->setIfExists('baker', $data ?? [], null);
        $this->setIfExists('staker', $data ?? [], null);
        $this->setIfExists('requested_amount', $data ?? [], null);
        $this->setIfExists('restaked_amount', $data ?? [], null);
        $this->setIfExists('finalized_amount', $data ?? [], null);
        $this->setIfExists('slashed_amount', $data ?? [], null);
        $this->setIfExists('rounding_error', $data ?? [], null);
        $this->setIfExists('actual_amount', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('updates_count', $data ?? [], null);
        $this->setIfExists('first_level', $data ?? [], null);
        $this->setIfExists('first_time', $data ?? [], null);
        $this->setIfExists('last_level', $data ?? [], null);
        $this->setIfExists('last_time', $data ?? [], null);
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
     * @param int|null $id Internal TzKT ID.   **[sortable]**
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
     * @param int|null $cycle Cycle at which the unstake request was created.   **[sortable]**
     *
     * @return $this
     */
    public function setCycle(?int $cycle): static
    {
        if (is_null($cycle)) {
            throw new InvalidArgumentException('non-nullable cycle cannot be null');
        }
        $this->container['cycle'] = $cycle;

        return $this;
    }

    /**
     * Gets baker
     *
     * @return \Tzkt\Model\StakingUpdateBaker|null
     */
    public function getBaker(): ?\Tzkt\Model\StakingUpdateBaker
    {
        return $this->container['baker'];
    }

    /**
     * Sets baker
     *
     * @param \Tzkt\Model\StakingUpdateBaker|null $baker baker
     *
     * @return $this
     */
    public function setBaker(?\Tzkt\Model\StakingUpdateBaker $baker): static
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
     * Gets staker
     *
     * @return \Tzkt\Model\StakingUpdateStaker|null
     */
    public function getStaker(): ?\Tzkt\Model\StakingUpdateStaker
    {
        return $this->container['staker'];
    }

    /**
     * Sets staker
     *
     * @param \Tzkt\Model\StakingUpdateStaker|null $staker staker
     *
     * @return $this
     */
    public function setStaker(?\Tzkt\Model\StakingUpdateStaker $staker): static
    {
        if (is_null($staker)) {
            array_push($this->openAPINullablesSetToNull, 'staker');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('staker', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['staker'] = $staker;

        return $this;
    }

    /**
     * Gets requested_amount
     *
     * @return int|null
     */
    public function getRequestedAmount(): ?int
    {
        return $this->container['requested_amount'];
    }

    /**
     * Sets requested_amount
     *
     * @param int|null $requested_amount Initially requested amount (mutez).
     *
     * @return $this
     */
    public function setRequestedAmount(?int $requested_amount): static
    {
        if (is_null($requested_amount)) {
            throw new InvalidArgumentException('non-nullable requested_amount cannot be null');
        }
        $this->container['requested_amount'] = $requested_amount;

        return $this;
    }

    /**
     * Gets restaked_amount
     *
     * @return int|null
     */
    public function getRestakedAmount(): ?int
    {
        return $this->container['restaked_amount'];
    }

    /**
     * Sets restaked_amount
     *
     * @param int|null $restaked_amount Amount that was restaked back (mutez).
     *
     * @return $this
     */
    public function setRestakedAmount(?int $restaked_amount): static
    {
        if (is_null($restaked_amount)) {
            throw new InvalidArgumentException('non-nullable restaked_amount cannot be null');
        }
        $this->container['restaked_amount'] = $restaked_amount;

        return $this;
    }

    /**
     * Gets finalized_amount
     *
     * @return int|null
     */
    public function getFinalizedAmount(): ?int
    {
        return $this->container['finalized_amount'];
    }

    /**
     * Sets finalized_amount
     *
     * @param int|null $finalized_amount Finalized amount (mutez).
     *
     * @return $this
     */
    public function setFinalizedAmount(?int $finalized_amount): static
    {
        if (is_null($finalized_amount)) {
            throw new InvalidArgumentException('non-nullable finalized_amount cannot be null');
        }
        $this->container['finalized_amount'] = $finalized_amount;

        return $this;
    }

    /**
     * Gets slashed_amount
     *
     * @return int|null
     */
    public function getSlashedAmount(): ?int
    {
        return $this->container['slashed_amount'];
    }

    /**
     * Sets slashed_amount
     *
     * @param int|null $slashed_amount Slashed amount (mutez).
     *
     * @return $this
     */
    public function setSlashedAmount(?int $slashed_amount): static
    {
        if (is_null($slashed_amount)) {
            throw new InvalidArgumentException('non-nullable slashed_amount cannot be null');
        }
        $this->container['slashed_amount'] = $slashed_amount;

        return $this;
    }

    /**
     * Gets rounding_error
     *
     * @return int|null
     */
    public function getRoundingError(): ?int
    {
        return $this->container['rounding_error'];
    }

    /**
     * Sets rounding_error
     *
     * @param int|null $rounding_error Protocol rounding error, appearing after slashing.
     *
     * @return $this
     */
    public function setRoundingError(?int $rounding_error): static
    {
        if (is_null($rounding_error)) {
            array_push($this->openAPINullablesSetToNull, 'rounding_error');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rounding_error', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rounding_error'] = $rounding_error;

        return $this;
    }

    /**
     * Gets actual_amount
     *
     * @return int|null
     */
    public function getActualAmount(): ?int
    {
        return $this->container['actual_amount'];
    }

    /**
     * Sets actual_amount
     *
     * @param int|null $actual_amount Actual amount that was/is/will be available for finalizing.
     *
     * @return $this
     */
    public function setActualAmount(?int $actual_amount): static
    {
        if (is_null($actual_amount)) {
            throw new InvalidArgumentException('non-nullable actual_amount cannot be null');
        }
        $this->container['actual_amount'] = $actual_amount;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of the unstake request (`pending`, `finalizable`, `finalized`).
     *
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets updates_count
     *
     * @return int|null
     */
    public function getUpdatesCount(): ?int
    {
        return $this->container['updates_count'];
    }

    /**
     * Sets updates_count
     *
     * @param int|null $updates_count Number of staking updates related to the unstake request.
     *
     * @return $this
     */
    public function setUpdatesCount(?int $updates_count): static
    {
        if (is_null($updates_count)) {
            throw new InvalidArgumentException('non-nullable updates_count cannot be null');
        }
        $this->container['updates_count'] = $updates_count;

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
     * @param int|null $first_level Level of the block where the unstake request was created.   **[sortable]**
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
     * Gets first_time
     *
     * @return \DateTime|null
     */
    public function getFirstTime(): ?\DateTime
    {
        return $this->container['first_time'];
    }

    /**
     * Sets first_time
     *
     * @param \DateTime|null $first_time Timestamp of the block where the unstake request was created.
     *
     * @return $this
     */
    public function setFirstTime(?\DateTime $first_time): static
    {
        if (is_null($first_time)) {
            throw new InvalidArgumentException('non-nullable first_time cannot be null');
        }
        $this->container['first_time'] = $first_time;

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
     * @param int|null $last_level Level of the block where the unstake request was last updated.   **[sortable]**
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
     * Gets last_time
     *
     * @return \DateTime|null
     */
    public function getLastTime(): ?\DateTime
    {
        return $this->container['last_time'];
    }

    /**
     * Sets last_time
     *
     * @param \DateTime|null $last_time Timestamp of the block where the unstake request was last updated.
     *
     * @return $this
     */
    public function setLastTime(?\DateTime $last_time): static
    {
        if (is_null($last_time)) {
            throw new InvalidArgumentException('non-nullable last_time cannot be null');
        }
        $this->container['last_time'] = $last_time;

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


