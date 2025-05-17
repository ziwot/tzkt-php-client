<?php
/**
 * DelegationOperation
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
 * DelegationOperation Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DelegationOperation extends Operation
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DelegationOperation';

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
        'counter' => 'int',
        'initiator' => '\Tzkt\Model\DelegationOperationAllOfInitiator',
        'sender' => '\Tzkt\Model\DelegationOperationAllOfSender',
        'sender_code_hash' => 'int',
        'nonce' => 'int',
        'gas_limit' => 'int',
        'gas_used' => 'int',
        'storage_limit' => 'int',
        'baker_fee' => 'int',
        'amount' => 'int',
        'staking_updates_count' => 'int',
        'prev_delegate' => '\Tzkt\Model\DelegationOperationAllOfPrevDelegate',
        'new_delegate' => '\Tzkt\Model\DelegationOperationAllOfNewDelegate',
        'status' => 'string',
        'errors' => '\Tzkt\Model\OperationError[]',
        'quote' => '\Tzkt\Model\DelegationOperationAllOfQuote',
        'unstaked_pseudotokens' => 'int',
        'unstaked_balance' => 'int',
        'unstaked_rewards' => 'int'
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
        'counter' => 'int32',
        'initiator' => null,
        'sender' => null,
        'sender_code_hash' => 'int32',
        'nonce' => 'int32',
        'gas_limit' => 'int32',
        'gas_used' => 'int32',
        'storage_limit' => 'int32',
        'baker_fee' => 'int64',
        'amount' => 'int64',
        'staking_updates_count' => 'int32',
        'prev_delegate' => null,
        'new_delegate' => null,
        'status' => null,
        'errors' => null,
        'quote' => null,
        'unstaked_pseudotokens' => 'int64',
        'unstaked_balance' => 'int64',
        'unstaked_rewards' => 'int64'
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
        'counter' => false,
        'initiator' => true,
        'sender' => true,
        'sender_code_hash' => true,
        'nonce' => true,
        'gas_limit' => false,
        'gas_used' => false,
        'storage_limit' => false,
        'baker_fee' => false,
        'amount' => false,
        'staking_updates_count' => true,
        'prev_delegate' => true,
        'new_delegate' => true,
        'status' => true,
        'errors' => true,
        'quote' => true,
        'unstaked_pseudotokens' => true,
        'unstaked_balance' => true,
        'unstaked_rewards' => true
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
        'counter' => 'counter',
        'initiator' => 'initiator',
        'sender' => 'sender',
        'sender_code_hash' => 'senderCodeHash',
        'nonce' => 'nonce',
        'gas_limit' => 'gasLimit',
        'gas_used' => 'gasUsed',
        'storage_limit' => 'storageLimit',
        'baker_fee' => 'bakerFee',
        'amount' => 'amount',
        'staking_updates_count' => 'stakingUpdatesCount',
        'prev_delegate' => 'prevDelegate',
        'new_delegate' => 'newDelegate',
        'status' => 'status',
        'errors' => 'errors',
        'quote' => 'quote',
        'unstaked_pseudotokens' => 'unstakedPseudotokens',
        'unstaked_balance' => 'unstakedBalance',
        'unstaked_rewards' => 'unstakedRewards'
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
        'counter' => 'setCounter',
        'initiator' => 'setInitiator',
        'sender' => 'setSender',
        'sender_code_hash' => 'setSenderCodeHash',
        'nonce' => 'setNonce',
        'gas_limit' => 'setGasLimit',
        'gas_used' => 'setGasUsed',
        'storage_limit' => 'setStorageLimit',
        'baker_fee' => 'setBakerFee',
        'amount' => 'setAmount',
        'staking_updates_count' => 'setStakingUpdatesCount',
        'prev_delegate' => 'setPrevDelegate',
        'new_delegate' => 'setNewDelegate',
        'status' => 'setStatus',
        'errors' => 'setErrors',
        'quote' => 'setQuote',
        'unstaked_pseudotokens' => 'setUnstakedPseudotokens',
        'unstaked_balance' => 'setUnstakedBalance',
        'unstaked_rewards' => 'setUnstakedRewards'
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
        'counter' => 'getCounter',
        'initiator' => 'getInitiator',
        'sender' => 'getSender',
        'sender_code_hash' => 'getSenderCodeHash',
        'nonce' => 'getNonce',
        'gas_limit' => 'getGasLimit',
        'gas_used' => 'getGasUsed',
        'storage_limit' => 'getStorageLimit',
        'baker_fee' => 'getBakerFee',
        'amount' => 'getAmount',
        'staking_updates_count' => 'getStakingUpdatesCount',
        'prev_delegate' => 'getPrevDelegate',
        'new_delegate' => 'getNewDelegate',
        'status' => 'getStatus',
        'errors' => 'getErrors',
        'quote' => 'getQuote',
        'unstaked_pseudotokens' => 'getUnstakedPseudotokens',
        'unstaked_balance' => 'getUnstakedBalance',
        'unstaked_rewards' => 'getUnstakedRewards'
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
        $this->setIfExists('counter', $data ?? [], null);
        $this->setIfExists('initiator', $data ?? [], null);
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('sender_code_hash', $data ?? [], null);
        $this->setIfExists('nonce', $data ?? [], null);
        $this->setIfExists('gas_limit', $data ?? [], null);
        $this->setIfExists('gas_used', $data ?? [], null);
        $this->setIfExists('storage_limit', $data ?? [], null);
        $this->setIfExists('baker_fee', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('staking_updates_count', $data ?? [], null);
        $this->setIfExists('prev_delegate', $data ?? [], null);
        $this->setIfExists('new_delegate', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('errors', $data ?? [], null);
        $this->setIfExists('quote', $data ?? [], null);
        $this->setIfExists('unstaked_pseudotokens', $data ?? [], null);
        $this->setIfExists('unstaked_balance', $data ?? [], null);
        $this->setIfExists('unstaked_rewards', $data ?? [], null);
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
     * @param string|null $type Type of the operation, `delegation` -  is used to delegate funds to a delegate (an implicit account registered as a baker)
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
     * Gets counter
     *
     * @return int|null
     */
    public function getCounter(): ?int
    {
        return $this->container['counter'];
    }

    /**
     * Sets counter
     *
     * @param int|null $counter An account nonce which is used to prevent operation replay
     *
     * @return $this
     */
    public function setCounter(?int $counter): static
    {
        if (is_null($counter)) {
            throw new InvalidArgumentException('non-nullable counter cannot be null');
        }
        $this->container['counter'] = $counter;

        return $this;
    }

    /**
     * Gets initiator
     *
     * @return \Tzkt\Model\DelegationOperationAllOfInitiator|null
     */
    public function getInitiator(): ?\Tzkt\Model\DelegationOperationAllOfInitiator
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param \Tzkt\Model\DelegationOperationAllOfInitiator|null $initiator initiator
     *
     * @return $this
     */
    public function setInitiator(?\Tzkt\Model\DelegationOperationAllOfInitiator $initiator): static
    {
        if (is_null($initiator)) {
            array_push($this->openAPINullablesSetToNull, 'initiator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('initiator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['initiator'] = $initiator;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \Tzkt\Model\DelegationOperationAllOfSender|null
     */
    public function getSender(): ?\Tzkt\Model\DelegationOperationAllOfSender
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Tzkt\Model\DelegationOperationAllOfSender|null $sender sender
     *
     * @return $this
     */
    public function setSender(?\Tzkt\Model\DelegationOperationAllOfSender $sender): static
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
     * Gets sender_code_hash
     *
     * @return int|null
     */
    public function getSenderCodeHash(): ?int
    {
        return $this->container['sender_code_hash'];
    }

    /**
     * Sets sender_code_hash
     *
     * @param int|null $sender_code_hash Hash of the sender contract code, or `null` is the sender is not a contract
     *
     * @return $this
     */
    public function setSenderCodeHash(?int $sender_code_hash): static
    {
        if (is_null($sender_code_hash)) {
            array_push($this->openAPINullablesSetToNull, 'sender_code_hash');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sender_code_hash', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sender_code_hash'] = $sender_code_hash;

        return $this;
    }

    /**
     * Gets nonce
     *
     * @return int|null
     */
    public function getNonce(): ?int
    {
        return $this->container['nonce'];
    }

    /**
     * Sets nonce
     *
     * @param int|null $nonce An account nonce which is used to prevent internal operation replay
     *
     * @return $this
     */
    public function setNonce(?int $nonce): static
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
     * Gets gas_limit
     *
     * @return int|null
     */
    public function getGasLimit(): ?int
    {
        return $this->container['gas_limit'];
    }

    /**
     * Sets gas_limit
     *
     * @param int|null $gas_limit A cap on the amount of gas a given operation can consume
     *
     * @return $this
     */
    public function setGasLimit(?int $gas_limit): static
    {
        if (is_null($gas_limit)) {
            throw new InvalidArgumentException('non-nullable gas_limit cannot be null');
        }
        $this->container['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Gets gas_used
     *
     * @return int|null
     */
    public function getGasUsed(): ?int
    {
        return $this->container['gas_used'];
    }

    /**
     * Sets gas_used
     *
     * @param int|null $gas_used Amount of gas, consumed by the operation
     *
     * @return $this
     */
    public function setGasUsed(?int $gas_used): static
    {
        if (is_null($gas_used)) {
            throw new InvalidArgumentException('non-nullable gas_used cannot be null');
        }
        $this->container['gas_used'] = $gas_used;

        return $this;
    }

    /**
     * Gets storage_limit
     *
     * @return int|null
     */
    public function getStorageLimit(): ?int
    {
        return $this->container['storage_limit'];
    }

    /**
     * Sets storage_limit
     *
     * @param int|null $storage_limit A cap on the amount of storage a given operation can consume
     *
     * @return $this
     */
    public function setStorageLimit(?int $storage_limit): static
    {
        if (is_null($storage_limit)) {
            throw new InvalidArgumentException('non-nullable storage_limit cannot be null');
        }
        $this->container['storage_limit'] = $storage_limit;

        return $this;
    }

    /**
     * Gets baker_fee
     *
     * @return int|null
     */
    public function getBakerFee(): ?int
    {
        return $this->container['baker_fee'];
    }

    /**
     * Sets baker_fee
     *
     * @param int|null $baker_fee Fee to a baker, produced block, in which the operation was included
     *
     * @return $this
     */
    public function setBakerFee(?int $baker_fee): static
    {
        if (is_null($baker_fee)) {
            throw new InvalidArgumentException('non-nullable baker_fee cannot be null');
        }
        $this->container['baker_fee'] = $baker_fee;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount Sender's balance at the time of delegation operation (aka delegation amount).
     *
     * @return $this
     */
    public function setAmount(?int $amount): static
    {
        if (is_null($amount)) {
            throw new InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

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
     * Gets prev_delegate
     *
     * @return \Tzkt\Model\DelegationOperationAllOfPrevDelegate|null
     */
    public function getPrevDelegate(): ?\Tzkt\Model\DelegationOperationAllOfPrevDelegate
    {
        return $this->container['prev_delegate'];
    }

    /**
     * Sets prev_delegate
     *
     * @param \Tzkt\Model\DelegationOperationAllOfPrevDelegate|null $prev_delegate prev_delegate
     *
     * @return $this
     */
    public function setPrevDelegate(?\Tzkt\Model\DelegationOperationAllOfPrevDelegate $prev_delegate): static
    {
        if (is_null($prev_delegate)) {
            array_push($this->openAPINullablesSetToNull, 'prev_delegate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prev_delegate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['prev_delegate'] = $prev_delegate;

        return $this;
    }

    /**
     * Gets new_delegate
     *
     * @return \Tzkt\Model\DelegationOperationAllOfNewDelegate|null
     */
    public function getNewDelegate(): ?\Tzkt\Model\DelegationOperationAllOfNewDelegate
    {
        return $this->container['new_delegate'];
    }

    /**
     * Sets new_delegate
     *
     * @param \Tzkt\Model\DelegationOperationAllOfNewDelegate|null $new_delegate new_delegate
     *
     * @return $this
     */
    public function setNewDelegate(?\Tzkt\Model\DelegationOperationAllOfNewDelegate $new_delegate): static
    {
        if (is_null($new_delegate)) {
            array_push($this->openAPINullablesSetToNull, 'new_delegate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('new_delegate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['new_delegate'] = $new_delegate;

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
     * @param string|null $status Operation status (`applied` - an operation applied by the node and successfully added to the blockchain, `failed` - an operation which failed with some particular error (not enough balance, gas limit, etc), `backtracked` - an operation which was successful but reverted due to one of the following operations in the same operation group was failed, `skipped` - all operations after the failed one in an operation group)
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
     * Gets errors
     *
     * @return \Tzkt\Model\OperationError[]|null
     */
    public function getErrors(): ?array
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Tzkt\Model\OperationError[]|null $errors List of errors provided by the node, injected the operation to the blockchain. `null` if there is no errors
     *
     * @return $this
     */
    public function setErrors(?array $errors): static
    {
        if (is_null($errors)) {
            array_push($this->openAPINullablesSetToNull, 'errors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('errors', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return \Tzkt\Model\DelegationOperationAllOfQuote|null
     */
    public function getQuote(): ?\Tzkt\Model\DelegationOperationAllOfQuote
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param \Tzkt\Model\DelegationOperationAllOfQuote|null $quote quote
     *
     * @return $this
     */
    public function setQuote(?\Tzkt\Model\DelegationOperationAllOfQuote $quote): static
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
     * Gets unstaked_pseudotokens
     *
     * @return int|null
     */
    public function getUnstakedPseudotokens(): ?int
    {
        return $this->container['unstaked_pseudotokens'];
    }

    /**
     * Sets unstaked_pseudotokens
     *
     * @param int|null $unstaked_pseudotokens [DEPRECATED]
     *
     * @return $this
     */
    public function setUnstakedPseudotokens(?int $unstaked_pseudotokens): static
    {
        if (is_null($unstaked_pseudotokens)) {
            array_push($this->openAPINullablesSetToNull, 'unstaked_pseudotokens');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unstaked_pseudotokens', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unstaked_pseudotokens'] = $unstaked_pseudotokens;

        return $this;
    }

    /**
     * Gets unstaked_balance
     *
     * @return int|null
     */
    public function getUnstakedBalance(): ?int
    {
        return $this->container['unstaked_balance'];
    }

    /**
     * Sets unstaked_balance
     *
     * @param int|null $unstaked_balance [DEPRECATED]
     *
     * @return $this
     */
    public function setUnstakedBalance(?int $unstaked_balance): static
    {
        if (is_null($unstaked_balance)) {
            array_push($this->openAPINullablesSetToNull, 'unstaked_balance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unstaked_balance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unstaked_balance'] = $unstaked_balance;

        return $this;
    }

    /**
     * Gets unstaked_rewards
     *
     * @return int|null
     */
    public function getUnstakedRewards(): ?int
    {
        return $this->container['unstaked_rewards'];
    }

    /**
     * Sets unstaked_rewards
     *
     * @param int|null $unstaked_rewards [DEPRECATED]
     *
     * @return $this
     */
    public function setUnstakedRewards(?int $unstaked_rewards): static
    {
        if (is_null($unstaked_rewards)) {
            array_push($this->openAPINullablesSetToNull, 'unstaked_rewards');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unstaked_rewards', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unstaked_rewards'] = $unstaked_rewards;

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


