<?php
/**
 * Rollup
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
 * Rollup Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Rollup extends Account
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Rollup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'type' => 'string',
        'address' => 'string',
        'alias' => 'string',
        'creator' => '\Tzkt\Model\RollupAllOfCreator',
        'rollup_bonds' => 'int',
        'active_tokens_count' => 'int',
        'token_balances_count' => 'int',
        'token_transfers_count' => 'int',
        'active_tickets_count' => 'int',
        'ticket_balances_count' => 'int',
        'ticket_transfers_count' => 'int',
        'num_transactions' => 'int',
        'tx_rollup_origination_count' => 'int',
        'tx_rollup_submit_batch_count' => 'int',
        'tx_rollup_commit_count' => 'int',
        'tx_rollup_return_bond_count' => 'int',
        'tx_rollup_finalize_commitment_count' => 'int',
        'tx_rollup_remove_commitment_count' => 'int',
        'tx_rollup_rejection_count' => 'int',
        'tx_rollup_dispatch_tickets_count' => 'int',
        'transfer_ticket_count' => 'int',
        'first_activity' => 'int',
        'first_activity_time' => '\DateTime',
        'last_activity' => 'int',
        'last_activity_time' => '\DateTime',
        'extras' => 'mixed',
        'metadata' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'int32',
        'type' => null,
        'address' => null,
        'alias' => null,
        'creator' => null,
        'rollup_bonds' => 'int64',
        'active_tokens_count' => 'int32',
        'token_balances_count' => 'int32',
        'token_transfers_count' => 'int32',
        'active_tickets_count' => 'int32',
        'ticket_balances_count' => 'int32',
        'ticket_transfers_count' => 'int32',
        'num_transactions' => 'int32',
        'tx_rollup_origination_count' => 'int32',
        'tx_rollup_submit_batch_count' => 'int32',
        'tx_rollup_commit_count' => 'int32',
        'tx_rollup_return_bond_count' => 'int32',
        'tx_rollup_finalize_commitment_count' => 'int32',
        'tx_rollup_remove_commitment_count' => 'int32',
        'tx_rollup_rejection_count' => 'int32',
        'tx_rollup_dispatch_tickets_count' => 'int32',
        'transfer_ticket_count' => 'int32',
        'first_activity' => 'int32',
        'first_activity_time' => 'date-time',
        'last_activity' => 'int32',
        'last_activity_time' => 'date-time',
        'extras' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'type' => true,
        'address' => true,
        'alias' => true,
        'creator' => true,
        'rollup_bonds' => false,
        'active_tokens_count' => false,
        'token_balances_count' => false,
        'token_transfers_count' => false,
        'active_tickets_count' => false,
        'ticket_balances_count' => false,
        'ticket_transfers_count' => false,
        'num_transactions' => false,
        'tx_rollup_origination_count' => false,
        'tx_rollup_submit_batch_count' => false,
        'tx_rollup_commit_count' => false,
        'tx_rollup_return_bond_count' => false,
        'tx_rollup_finalize_commitment_count' => false,
        'tx_rollup_remove_commitment_count' => false,
        'tx_rollup_rejection_count' => false,
        'tx_rollup_dispatch_tickets_count' => false,
        'transfer_ticket_count' => false,
        'first_activity' => false,
        'first_activity_time' => false,
        'last_activity' => false,
        'last_activity_time' => false,
        'extras' => true,
        'metadata' => true
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
        'id' => 'id',
        'type' => 'type',
        'address' => 'address',
        'alias' => 'alias',
        'creator' => 'creator',
        'rollup_bonds' => 'rollupBonds',
        'active_tokens_count' => 'activeTokensCount',
        'token_balances_count' => 'tokenBalancesCount',
        'token_transfers_count' => 'tokenTransfersCount',
        'active_tickets_count' => 'activeTicketsCount',
        'ticket_balances_count' => 'ticketBalancesCount',
        'ticket_transfers_count' => 'ticketTransfersCount',
        'num_transactions' => 'numTransactions',
        'tx_rollup_origination_count' => 'txRollupOriginationCount',
        'tx_rollup_submit_batch_count' => 'txRollupSubmitBatchCount',
        'tx_rollup_commit_count' => 'txRollupCommitCount',
        'tx_rollup_return_bond_count' => 'txRollupReturnBondCount',
        'tx_rollup_finalize_commitment_count' => 'txRollupFinalizeCommitmentCount',
        'tx_rollup_remove_commitment_count' => 'txRollupRemoveCommitmentCount',
        'tx_rollup_rejection_count' => 'txRollupRejectionCount',
        'tx_rollup_dispatch_tickets_count' => 'txRollupDispatchTicketsCount',
        'transfer_ticket_count' => 'transferTicketCount',
        'first_activity' => 'firstActivity',
        'first_activity_time' => 'firstActivityTime',
        'last_activity' => 'lastActivity',
        'last_activity_time' => 'lastActivityTime',
        'extras' => 'extras',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'address' => 'setAddress',
        'alias' => 'setAlias',
        'creator' => 'setCreator',
        'rollup_bonds' => 'setRollupBonds',
        'active_tokens_count' => 'setActiveTokensCount',
        'token_balances_count' => 'setTokenBalancesCount',
        'token_transfers_count' => 'setTokenTransfersCount',
        'active_tickets_count' => 'setActiveTicketsCount',
        'ticket_balances_count' => 'setTicketBalancesCount',
        'ticket_transfers_count' => 'setTicketTransfersCount',
        'num_transactions' => 'setNumTransactions',
        'tx_rollup_origination_count' => 'setTxRollupOriginationCount',
        'tx_rollup_submit_batch_count' => 'setTxRollupSubmitBatchCount',
        'tx_rollup_commit_count' => 'setTxRollupCommitCount',
        'tx_rollup_return_bond_count' => 'setTxRollupReturnBondCount',
        'tx_rollup_finalize_commitment_count' => 'setTxRollupFinalizeCommitmentCount',
        'tx_rollup_remove_commitment_count' => 'setTxRollupRemoveCommitmentCount',
        'tx_rollup_rejection_count' => 'setTxRollupRejectionCount',
        'tx_rollup_dispatch_tickets_count' => 'setTxRollupDispatchTicketsCount',
        'transfer_ticket_count' => 'setTransferTicketCount',
        'first_activity' => 'setFirstActivity',
        'first_activity_time' => 'setFirstActivityTime',
        'last_activity' => 'setLastActivity',
        'last_activity_time' => 'setLastActivityTime',
        'extras' => 'setExtras',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'address' => 'getAddress',
        'alias' => 'getAlias',
        'creator' => 'getCreator',
        'rollup_bonds' => 'getRollupBonds',
        'active_tokens_count' => 'getActiveTokensCount',
        'token_balances_count' => 'getTokenBalancesCount',
        'token_transfers_count' => 'getTokenTransfersCount',
        'active_tickets_count' => 'getActiveTicketsCount',
        'ticket_balances_count' => 'getTicketBalancesCount',
        'ticket_transfers_count' => 'getTicketTransfersCount',
        'num_transactions' => 'getNumTransactions',
        'tx_rollup_origination_count' => 'getTxRollupOriginationCount',
        'tx_rollup_submit_batch_count' => 'getTxRollupSubmitBatchCount',
        'tx_rollup_commit_count' => 'getTxRollupCommitCount',
        'tx_rollup_return_bond_count' => 'getTxRollupReturnBondCount',
        'tx_rollup_finalize_commitment_count' => 'getTxRollupFinalizeCommitmentCount',
        'tx_rollup_remove_commitment_count' => 'getTxRollupRemoveCommitmentCount',
        'tx_rollup_rejection_count' => 'getTxRollupRejectionCount',
        'tx_rollup_dispatch_tickets_count' => 'getTxRollupDispatchTicketsCount',
        'transfer_ticket_count' => 'getTransferTicketCount',
        'first_activity' => 'getFirstActivity',
        'first_activity_time' => 'getFirstActivityTime',
        'last_activity' => 'getLastActivity',
        'last_activity_time' => 'getLastActivityTime',
        'extras' => 'getExtras',
        'metadata' => 'getMetadata'
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

        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('alias', $data ?? [], null);
        $this->setIfExists('creator', $data ?? [], null);
        $this->setIfExists('rollup_bonds', $data ?? [], null);
        $this->setIfExists('active_tokens_count', $data ?? [], null);
        $this->setIfExists('token_balances_count', $data ?? [], null);
        $this->setIfExists('token_transfers_count', $data ?? [], null);
        $this->setIfExists('active_tickets_count', $data ?? [], null);
        $this->setIfExists('ticket_balances_count', $data ?? [], null);
        $this->setIfExists('ticket_transfers_count', $data ?? [], null);
        $this->setIfExists('num_transactions', $data ?? [], null);
        $this->setIfExists('tx_rollup_origination_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_submit_batch_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_commit_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_return_bond_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_finalize_commitment_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_remove_commitment_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_rejection_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_dispatch_tickets_count', $data ?? [], null);
        $this->setIfExists('transfer_ticket_count', $data ?? [], null);
        $this->setIfExists('first_activity', $data ?? [], null);
        $this->setIfExists('first_activity_time', $data ?? [], null);
        $this->setIfExists('last_activity', $data ?? [], null);
        $this->setIfExists('last_activity_time', $data ?? [], null);
        $this->setIfExists('extras', $data ?? [], null);
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
     * @param int|null $id Internal TzKT id
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
     * @param string|null $type Type of the account
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Address of the account
     *
     * @return $this
     */
    public function setAddress(?string $address): static
    {
        if (is_null($address)) {
            array_push($this->openAPINullablesSetToNull, 'address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets alias
     *
     * @return string|null
     */
    public function getAlias(): ?string
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string|null $alias Name of the account
     *
     * @return $this
     */
    public function setAlias(?string $alias): static
    {
        if (is_null($alias)) {
            array_push($this->openAPINullablesSetToNull, 'alias');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('alias', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return \Tzkt\Model\RollupAllOfCreator|null
     */
    public function getCreator(): ?\Tzkt\Model\RollupAllOfCreator
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param \Tzkt\Model\RollupAllOfCreator|null $creator creator
     *
     * @return $this
     */
    public function setCreator(?\Tzkt\Model\RollupAllOfCreator $creator): static
    {
        if (is_null($creator)) {
            array_push($this->openAPINullablesSetToNull, 'creator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('creator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets rollup_bonds
     *
     * @return int|null
     */
    public function getRollupBonds(): ?int
    {
        return $this->container['rollup_bonds'];
    }

    /**
     * Sets rollup_bonds
     *
     * @param int|null $rollup_bonds Amount of mutez locked as bonds
     *
     * @return $this
     */
    public function setRollupBonds(?int $rollup_bonds): static
    {
        if (is_null($rollup_bonds)) {
            throw new InvalidArgumentException('non-nullable rollup_bonds cannot be null');
        }
        $this->container['rollup_bonds'] = $rollup_bonds;

        return $this;
    }

    /**
     * Gets active_tokens_count
     *
     * @return int|null
     */
    public function getActiveTokensCount(): ?int
    {
        return $this->container['active_tokens_count'];
    }

    /**
     * Sets active_tokens_count
     *
     * @param int|null $active_tokens_count Number of account tokens with non-zero balances
     *
     * @return $this
     */
    public function setActiveTokensCount(?int $active_tokens_count): static
    {
        if (is_null($active_tokens_count)) {
            throw new InvalidArgumentException('non-nullable active_tokens_count cannot be null');
        }
        $this->container['active_tokens_count'] = $active_tokens_count;

        return $this;
    }

    /**
     * Gets token_balances_count
     *
     * @return int|null
     */
    public function getTokenBalancesCount(): ?int
    {
        return $this->container['token_balances_count'];
    }

    /**
     * Sets token_balances_count
     *
     * @param int|null $token_balances_count Number of tokens the account ever had
     *
     * @return $this
     */
    public function setTokenBalancesCount(?int $token_balances_count): static
    {
        if (is_null($token_balances_count)) {
            throw new InvalidArgumentException('non-nullable token_balances_count cannot be null');
        }
        $this->container['token_balances_count'] = $token_balances_count;

        return $this;
    }

    /**
     * Gets token_transfers_count
     *
     * @return int|null
     */
    public function getTokenTransfersCount(): ?int
    {
        return $this->container['token_transfers_count'];
    }

    /**
     * Sets token_transfers_count
     *
     * @param int|null $token_transfers_count Number of token transfers from/to the account
     *
     * @return $this
     */
    public function setTokenTransfersCount(?int $token_transfers_count): static
    {
        if (is_null($token_transfers_count)) {
            throw new InvalidArgumentException('non-nullable token_transfers_count cannot be null');
        }
        $this->container['token_transfers_count'] = $token_transfers_count;

        return $this;
    }

    /**
     * Gets active_tickets_count
     *
     * @return int|null
     */
    public function getActiveTicketsCount(): ?int
    {
        return $this->container['active_tickets_count'];
    }

    /**
     * Sets active_tickets_count
     *
     * @param int|null $active_tickets_count Number of tickets the account owns.
     *
     * @return $this
     */
    public function setActiveTicketsCount(?int $active_tickets_count): static
    {
        if (is_null($active_tickets_count)) {
            throw new InvalidArgumentException('non-nullable active_tickets_count cannot be null');
        }
        $this->container['active_tickets_count'] = $active_tickets_count;

        return $this;
    }

    /**
     * Gets ticket_balances_count
     *
     * @return int|null
     */
    public function getTicketBalancesCount(): ?int
    {
        return $this->container['ticket_balances_count'];
    }

    /**
     * Sets ticket_balances_count
     *
     * @param int|null $ticket_balances_count Number of tickets the account ever owned.
     *
     * @return $this
     */
    public function setTicketBalancesCount(?int $ticket_balances_count): static
    {
        if (is_null($ticket_balances_count)) {
            throw new InvalidArgumentException('non-nullable ticket_balances_count cannot be null');
        }
        $this->container['ticket_balances_count'] = $ticket_balances_count;

        return $this;
    }

    /**
     * Gets ticket_transfers_count
     *
     * @return int|null
     */
    public function getTicketTransfersCount(): ?int
    {
        return $this->container['ticket_transfers_count'];
    }

    /**
     * Sets ticket_transfers_count
     *
     * @param int|null $ticket_transfers_count Number of ticket transfers from/to the account.
     *
     * @return $this
     */
    public function setTicketTransfersCount(?int $ticket_transfers_count): static
    {
        if (is_null($ticket_transfers_count)) {
            throw new InvalidArgumentException('non-nullable ticket_transfers_count cannot be null');
        }
        $this->container['ticket_transfers_count'] = $ticket_transfers_count;

        return $this;
    }

    /**
     * Gets num_transactions
     *
     * @return int|null
     */
    public function getNumTransactions(): ?int
    {
        return $this->container['num_transactions'];
    }

    /**
     * Sets num_transactions
     *
     * @param int|null $num_transactions Number of transaction operations related to the account
     *
     * @return $this
     */
    public function setNumTransactions(?int $num_transactions): static
    {
        if (is_null($num_transactions)) {
            throw new InvalidArgumentException('non-nullable num_transactions cannot be null');
        }
        $this->container['num_transactions'] = $num_transactions;

        return $this;
    }

    /**
     * Gets tx_rollup_origination_count
     *
     * @return int|null
     */
    public function getTxRollupOriginationCount(): ?int
    {
        return $this->container['tx_rollup_origination_count'];
    }

    /**
     * Sets tx_rollup_origination_count
     *
     * @param int|null $tx_rollup_origination_count Number of tx rollup origination operations related to the account
     *
     * @return $this
     */
    public function setTxRollupOriginationCount(?int $tx_rollup_origination_count): static
    {
        if (is_null($tx_rollup_origination_count)) {
            throw new InvalidArgumentException('non-nullable tx_rollup_origination_count cannot be null');
        }
        $this->container['tx_rollup_origination_count'] = $tx_rollup_origination_count;

        return $this;
    }

    /**
     * Gets tx_rollup_submit_batch_count
     *
     * @return int|null
     */
    public function getTxRollupSubmitBatchCount(): ?int
    {
        return $this->container['tx_rollup_submit_batch_count'];
    }

    /**
     * Sets tx_rollup_submit_batch_count
     *
     * @param int|null $tx_rollup_submit_batch_count Number of tx rollup submit batch operations related to the account
     *
     * @return $this
     */
    public function setTxRollupSubmitBatchCount(?int $tx_rollup_submit_batch_count): static
    {
        if (is_null($tx_rollup_submit_batch_count)) {
            throw new InvalidArgumentException('non-nullable tx_rollup_submit_batch_count cannot be null');
        }
        $this->container['tx_rollup_submit_batch_count'] = $tx_rollup_submit_batch_count;

        return $this;
    }

    /**
     * Gets tx_rollup_commit_count
     *
     * @return int|null
     */
    public function getTxRollupCommitCount(): ?int
    {
        return $this->container['tx_rollup_commit_count'];
    }

    /**
     * Sets tx_rollup_commit_count
     *
     * @param int|null $tx_rollup_commit_count Number of tx rollup commit operations related to the account
     *
     * @return $this
     */
    public function setTxRollupCommitCount(?int $tx_rollup_commit_count): static
    {
        if (is_null($tx_rollup_commit_count)) {
            throw new InvalidArgumentException('non-nullable tx_rollup_commit_count cannot be null');
        }
        $this->container['tx_rollup_commit_count'] = $tx_rollup_commit_count;

        return $this;
    }

    /**
     * Gets tx_rollup_return_bond_count
     *
     * @return int|null
     */
    public function getTxRollupReturnBondCount(): ?int
    {
        return $this->container['tx_rollup_return_bond_count'];
    }

    /**
     * Sets tx_rollup_return_bond_count
     *
     * @param int|null $tx_rollup_return_bond_count Number of tx rollup return bond operations related to the account
     *
     * @return $this
     */
    public function setTxRollupReturnBondCount(?int $tx_rollup_return_bond_count): static
    {
        if (is_null($tx_rollup_return_bond_count)) {
            throw new InvalidArgumentException('non-nullable tx_rollup_return_bond_count cannot be null');
        }
        $this->container['tx_rollup_return_bond_count'] = $tx_rollup_return_bond_count;

        return $this;
    }

    /**
     * Gets tx_rollup_finalize_commitment_count
     *
     * @return int|null
     */
    public function getTxRollupFinalizeCommitmentCount(): ?int
    {
        return $this->container['tx_rollup_finalize_commitment_count'];
    }

    /**
     * Sets tx_rollup_finalize_commitment_count
     *
     * @param int|null $tx_rollup_finalize_commitment_count Number of tx rollup finalize commitment operations related to the account
     *
     * @return $this
     */
    public function setTxRollupFinalizeCommitmentCount(?int $tx_rollup_finalize_commitment_count): static
    {
        if (is_null($tx_rollup_finalize_commitment_count)) {
            throw new InvalidArgumentException('non-nullable tx_rollup_finalize_commitment_count cannot be null');
        }
        $this->container['tx_rollup_finalize_commitment_count'] = $tx_rollup_finalize_commitment_count;

        return $this;
    }

    /**
     * Gets tx_rollup_remove_commitment_count
     *
     * @return int|null
     */
    public function getTxRollupRemoveCommitmentCount(): ?int
    {
        return $this->container['tx_rollup_remove_commitment_count'];
    }

    /**
     * Sets tx_rollup_remove_commitment_count
     *
     * @param int|null $tx_rollup_remove_commitment_count Number of tx rollup remove commitment operations related to the account
     *
     * @return $this
     */
    public function setTxRollupRemoveCommitmentCount(?int $tx_rollup_remove_commitment_count): static
    {
        if (is_null($tx_rollup_remove_commitment_count)) {
            throw new InvalidArgumentException('non-nullable tx_rollup_remove_commitment_count cannot be null');
        }
        $this->container['tx_rollup_remove_commitment_count'] = $tx_rollup_remove_commitment_count;

        return $this;
    }

    /**
     * Gets tx_rollup_rejection_count
     *
     * @return int|null
     */
    public function getTxRollupRejectionCount(): ?int
    {
        return $this->container['tx_rollup_rejection_count'];
    }

    /**
     * Sets tx_rollup_rejection_count
     *
     * @param int|null $tx_rollup_rejection_count Number of tx rollup rejection operations related to the account
     *
     * @return $this
     */
    public function setTxRollupRejectionCount(?int $tx_rollup_rejection_count): static
    {
        if (is_null($tx_rollup_rejection_count)) {
            throw new InvalidArgumentException('non-nullable tx_rollup_rejection_count cannot be null');
        }
        $this->container['tx_rollup_rejection_count'] = $tx_rollup_rejection_count;

        return $this;
    }

    /**
     * Gets tx_rollup_dispatch_tickets_count
     *
     * @return int|null
     */
    public function getTxRollupDispatchTicketsCount(): ?int
    {
        return $this->container['tx_rollup_dispatch_tickets_count'];
    }

    /**
     * Sets tx_rollup_dispatch_tickets_count
     *
     * @param int|null $tx_rollup_dispatch_tickets_count Number of tx rollup dispatch tickets operations related to the account
     *
     * @return $this
     */
    public function setTxRollupDispatchTicketsCount(?int $tx_rollup_dispatch_tickets_count): static
    {
        if (is_null($tx_rollup_dispatch_tickets_count)) {
            throw new InvalidArgumentException('non-nullable tx_rollup_dispatch_tickets_count cannot be null');
        }
        $this->container['tx_rollup_dispatch_tickets_count'] = $tx_rollup_dispatch_tickets_count;

        return $this;
    }

    /**
     * Gets transfer_ticket_count
     *
     * @return int|null
     */
    public function getTransferTicketCount(): ?int
    {
        return $this->container['transfer_ticket_count'];
    }

    /**
     * Sets transfer_ticket_count
     *
     * @param int|null $transfer_ticket_count Number of transfer ticket operations related to the account
     *
     * @return $this
     */
    public function setTransferTicketCount(?int $transfer_ticket_count): static
    {
        if (is_null($transfer_ticket_count)) {
            throw new InvalidArgumentException('non-nullable transfer_ticket_count cannot be null');
        }
        $this->container['transfer_ticket_count'] = $transfer_ticket_count;

        return $this;
    }

    /**
     * Gets first_activity
     *
     * @return int|null
     */
    public function getFirstActivity(): ?int
    {
        return $this->container['first_activity'];
    }

    /**
     * Sets first_activity
     *
     * @param int|null $first_activity Block height at which the ghost contract appeared first time
     *
     * @return $this
     */
    public function setFirstActivity(?int $first_activity): static
    {
        if (is_null($first_activity)) {
            throw new InvalidArgumentException('non-nullable first_activity cannot be null');
        }
        $this->container['first_activity'] = $first_activity;

        return $this;
    }

    /**
     * Gets first_activity_time
     *
     * @return \DateTime|null
     */
    public function getFirstActivityTime(): ?\DateTime
    {
        return $this->container['first_activity_time'];
    }

    /**
     * Sets first_activity_time
     *
     * @param \DateTime|null $first_activity_time Block datetime at which the ghost contract appeared first time (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
     *
     * @return $this
     */
    public function setFirstActivityTime(?\DateTime $first_activity_time): static
    {
        if (is_null($first_activity_time)) {
            throw new InvalidArgumentException('non-nullable first_activity_time cannot be null');
        }
        $this->container['first_activity_time'] = $first_activity_time;

        return $this;
    }

    /**
     * Gets last_activity
     *
     * @return int|null
     */
    public function getLastActivity(): ?int
    {
        return $this->container['last_activity'];
    }

    /**
     * Sets last_activity
     *
     * @param int|null $last_activity Height of the block in which the ghost contract state was changed last time
     *
     * @return $this
     */
    public function setLastActivity(?int $last_activity): static
    {
        if (is_null($last_activity)) {
            throw new InvalidArgumentException('non-nullable last_activity cannot be null');
        }
        $this->container['last_activity'] = $last_activity;

        return $this;
    }

    /**
     * Gets last_activity_time
     *
     * @return \DateTime|null
     */
    public function getLastActivityTime(): ?\DateTime
    {
        return $this->container['last_activity_time'];
    }

    /**
     * Sets last_activity_time
     *
     * @param \DateTime|null $last_activity_time Datetime of the block in which the ghost contract state was changed last time (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
     *
     * @return $this
     */
    public function setLastActivityTime(?\DateTime $last_activity_time): static
    {
        if (is_null($last_activity_time)) {
            throw new InvalidArgumentException('non-nullable last_activity_time cannot be null');
        }
        $this->container['last_activity_time'] = $last_activity_time;

        return $this;
    }

    /**
     * Gets extras
     *
     * @return mixed|null
     */
    public function getExtras(): mixed
    {
        return $this->container['extras'];
    }

    /**
     * Sets extras
     *
     * @param mixed|null $extras Off-chain extras
     *
     * @return $this
     */
    public function setExtras(mixed $extras): static
    {
        if (is_null($extras)) {
            array_push($this->openAPINullablesSetToNull, 'extras');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extras', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['extras'] = $extras;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return mixed|null
     */
    public function getMetadata(): mixed
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param mixed|null $metadata [DEPRECATED]
     *
     * @return $this
     */
    public function setMetadata(mixed $metadata): static
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


