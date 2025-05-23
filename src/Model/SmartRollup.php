<?php
/**
 * SmartRollup
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
 * SmartRollup Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SmartRollup extends Account
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SmartRollup';

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
        'creator' => '\Tzkt\Model\SmartRollupAllOfCreator',
        'pvm_kind' => 'string',
        'genesis_commitment' => 'string',
        'last_commitment' => 'string',
        'inbox_level' => 'int',
        'total_stakers' => 'int',
        'active_stakers' => 'int',
        'executed_commitments' => 'int',
        'cemented_commitments' => 'int',
        'pending_commitments' => 'int',
        'refuted_commitments' => 'int',
        'orphan_commitments' => 'int',
        'smart_rollup_bonds' => 'int',
        'active_tokens_count' => 'int',
        'token_balances_count' => 'int',
        'token_transfers_count' => 'int',
        'active_tickets_count' => 'int',
        'ticket_balances_count' => 'int',
        'ticket_transfers_count' => 'int',
        'num_transactions' => 'int',
        'transfer_ticket_count' => 'int',
        'smart_rollup_cement_count' => 'int',
        'smart_rollup_execute_count' => 'int',
        'smart_rollup_originate_count' => 'int',
        'smart_rollup_publish_count' => 'int',
        'smart_rollup_recover_bond_count' => 'int',
        'smart_rollup_refute_count' => 'int',
        'refutation_games_count' => 'int',
        'active_refutation_games_count' => 'int',
        'first_activity' => 'int',
        'first_activity_time' => '\DateTime',
        'last_activity' => 'int',
        'last_activity_time' => '\DateTime',
        'extras' => 'mixed'
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
        'pvm_kind' => null,
        'genesis_commitment' => null,
        'last_commitment' => null,
        'inbox_level' => 'int32',
        'total_stakers' => 'int32',
        'active_stakers' => 'int32',
        'executed_commitments' => 'int32',
        'cemented_commitments' => 'int32',
        'pending_commitments' => 'int32',
        'refuted_commitments' => 'int32',
        'orphan_commitments' => 'int32',
        'smart_rollup_bonds' => 'int64',
        'active_tokens_count' => 'int32',
        'token_balances_count' => 'int32',
        'token_transfers_count' => 'int32',
        'active_tickets_count' => 'int32',
        'ticket_balances_count' => 'int32',
        'ticket_transfers_count' => 'int32',
        'num_transactions' => 'int32',
        'transfer_ticket_count' => 'int32',
        'smart_rollup_cement_count' => 'int32',
        'smart_rollup_execute_count' => 'int32',
        'smart_rollup_originate_count' => 'int32',
        'smart_rollup_publish_count' => 'int32',
        'smart_rollup_recover_bond_count' => 'int32',
        'smart_rollup_refute_count' => 'int32',
        'refutation_games_count' => 'int32',
        'active_refutation_games_count' => 'int32',
        'first_activity' => 'int32',
        'first_activity_time' => 'date-time',
        'last_activity' => 'int32',
        'last_activity_time' => 'date-time',
        'extras' => null
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
        'pvm_kind' => true,
        'genesis_commitment' => true,
        'last_commitment' => true,
        'inbox_level' => false,
        'total_stakers' => false,
        'active_stakers' => false,
        'executed_commitments' => false,
        'cemented_commitments' => false,
        'pending_commitments' => false,
        'refuted_commitments' => false,
        'orphan_commitments' => false,
        'smart_rollup_bonds' => false,
        'active_tokens_count' => false,
        'token_balances_count' => false,
        'token_transfers_count' => false,
        'active_tickets_count' => false,
        'ticket_balances_count' => false,
        'ticket_transfers_count' => false,
        'num_transactions' => false,
        'transfer_ticket_count' => false,
        'smart_rollup_cement_count' => false,
        'smart_rollup_execute_count' => false,
        'smart_rollup_originate_count' => false,
        'smart_rollup_publish_count' => false,
        'smart_rollup_recover_bond_count' => false,
        'smart_rollup_refute_count' => false,
        'refutation_games_count' => false,
        'active_refutation_games_count' => false,
        'first_activity' => false,
        'first_activity_time' => false,
        'last_activity' => false,
        'last_activity_time' => false,
        'extras' => true
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
        'pvm_kind' => 'pvmKind',
        'genesis_commitment' => 'genesisCommitment',
        'last_commitment' => 'lastCommitment',
        'inbox_level' => 'inboxLevel',
        'total_stakers' => 'totalStakers',
        'active_stakers' => 'activeStakers',
        'executed_commitments' => 'executedCommitments',
        'cemented_commitments' => 'cementedCommitments',
        'pending_commitments' => 'pendingCommitments',
        'refuted_commitments' => 'refutedCommitments',
        'orphan_commitments' => 'orphanCommitments',
        'smart_rollup_bonds' => 'smartRollupBonds',
        'active_tokens_count' => 'activeTokensCount',
        'token_balances_count' => 'tokenBalancesCount',
        'token_transfers_count' => 'tokenTransfersCount',
        'active_tickets_count' => 'activeTicketsCount',
        'ticket_balances_count' => 'ticketBalancesCount',
        'ticket_transfers_count' => 'ticketTransfersCount',
        'num_transactions' => 'numTransactions',
        'transfer_ticket_count' => 'transferTicketCount',
        'smart_rollup_cement_count' => 'smartRollupCementCount',
        'smart_rollup_execute_count' => 'smartRollupExecuteCount',
        'smart_rollup_originate_count' => 'smartRollupOriginateCount',
        'smart_rollup_publish_count' => 'smartRollupPublishCount',
        'smart_rollup_recover_bond_count' => 'smartRollupRecoverBondCount',
        'smart_rollup_refute_count' => 'smartRollupRefuteCount',
        'refutation_games_count' => 'refutationGamesCount',
        'active_refutation_games_count' => 'activeRefutationGamesCount',
        'first_activity' => 'firstActivity',
        'first_activity_time' => 'firstActivityTime',
        'last_activity' => 'lastActivity',
        'last_activity_time' => 'lastActivityTime',
        'extras' => 'extras'
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
        'pvm_kind' => 'setPvmKind',
        'genesis_commitment' => 'setGenesisCommitment',
        'last_commitment' => 'setLastCommitment',
        'inbox_level' => 'setInboxLevel',
        'total_stakers' => 'setTotalStakers',
        'active_stakers' => 'setActiveStakers',
        'executed_commitments' => 'setExecutedCommitments',
        'cemented_commitments' => 'setCementedCommitments',
        'pending_commitments' => 'setPendingCommitments',
        'refuted_commitments' => 'setRefutedCommitments',
        'orphan_commitments' => 'setOrphanCommitments',
        'smart_rollup_bonds' => 'setSmartRollupBonds',
        'active_tokens_count' => 'setActiveTokensCount',
        'token_balances_count' => 'setTokenBalancesCount',
        'token_transfers_count' => 'setTokenTransfersCount',
        'active_tickets_count' => 'setActiveTicketsCount',
        'ticket_balances_count' => 'setTicketBalancesCount',
        'ticket_transfers_count' => 'setTicketTransfersCount',
        'num_transactions' => 'setNumTransactions',
        'transfer_ticket_count' => 'setTransferTicketCount',
        'smart_rollup_cement_count' => 'setSmartRollupCementCount',
        'smart_rollup_execute_count' => 'setSmartRollupExecuteCount',
        'smart_rollup_originate_count' => 'setSmartRollupOriginateCount',
        'smart_rollup_publish_count' => 'setSmartRollupPublishCount',
        'smart_rollup_recover_bond_count' => 'setSmartRollupRecoverBondCount',
        'smart_rollup_refute_count' => 'setSmartRollupRefuteCount',
        'refutation_games_count' => 'setRefutationGamesCount',
        'active_refutation_games_count' => 'setActiveRefutationGamesCount',
        'first_activity' => 'setFirstActivity',
        'first_activity_time' => 'setFirstActivityTime',
        'last_activity' => 'setLastActivity',
        'last_activity_time' => 'setLastActivityTime',
        'extras' => 'setExtras'
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
        'pvm_kind' => 'getPvmKind',
        'genesis_commitment' => 'getGenesisCommitment',
        'last_commitment' => 'getLastCommitment',
        'inbox_level' => 'getInboxLevel',
        'total_stakers' => 'getTotalStakers',
        'active_stakers' => 'getActiveStakers',
        'executed_commitments' => 'getExecutedCommitments',
        'cemented_commitments' => 'getCementedCommitments',
        'pending_commitments' => 'getPendingCommitments',
        'refuted_commitments' => 'getRefutedCommitments',
        'orphan_commitments' => 'getOrphanCommitments',
        'smart_rollup_bonds' => 'getSmartRollupBonds',
        'active_tokens_count' => 'getActiveTokensCount',
        'token_balances_count' => 'getTokenBalancesCount',
        'token_transfers_count' => 'getTokenTransfersCount',
        'active_tickets_count' => 'getActiveTicketsCount',
        'ticket_balances_count' => 'getTicketBalancesCount',
        'ticket_transfers_count' => 'getTicketTransfersCount',
        'num_transactions' => 'getNumTransactions',
        'transfer_ticket_count' => 'getTransferTicketCount',
        'smart_rollup_cement_count' => 'getSmartRollupCementCount',
        'smart_rollup_execute_count' => 'getSmartRollupExecuteCount',
        'smart_rollup_originate_count' => 'getSmartRollupOriginateCount',
        'smart_rollup_publish_count' => 'getSmartRollupPublishCount',
        'smart_rollup_recover_bond_count' => 'getSmartRollupRecoverBondCount',
        'smart_rollup_refute_count' => 'getSmartRollupRefuteCount',
        'refutation_games_count' => 'getRefutationGamesCount',
        'active_refutation_games_count' => 'getActiveRefutationGamesCount',
        'first_activity' => 'getFirstActivity',
        'first_activity_time' => 'getFirstActivityTime',
        'last_activity' => 'getLastActivity',
        'last_activity_time' => 'getLastActivityTime',
        'extras' => 'getExtras'
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
        $this->setIfExists('pvm_kind', $data ?? [], null);
        $this->setIfExists('genesis_commitment', $data ?? [], null);
        $this->setIfExists('last_commitment', $data ?? [], null);
        $this->setIfExists('inbox_level', $data ?? [], null);
        $this->setIfExists('total_stakers', $data ?? [], null);
        $this->setIfExists('active_stakers', $data ?? [], null);
        $this->setIfExists('executed_commitments', $data ?? [], null);
        $this->setIfExists('cemented_commitments', $data ?? [], null);
        $this->setIfExists('pending_commitments', $data ?? [], null);
        $this->setIfExists('refuted_commitments', $data ?? [], null);
        $this->setIfExists('orphan_commitments', $data ?? [], null);
        $this->setIfExists('smart_rollup_bonds', $data ?? [], null);
        $this->setIfExists('active_tokens_count', $data ?? [], null);
        $this->setIfExists('token_balances_count', $data ?? [], null);
        $this->setIfExists('token_transfers_count', $data ?? [], null);
        $this->setIfExists('active_tickets_count', $data ?? [], null);
        $this->setIfExists('ticket_balances_count', $data ?? [], null);
        $this->setIfExists('ticket_transfers_count', $data ?? [], null);
        $this->setIfExists('num_transactions', $data ?? [], null);
        $this->setIfExists('transfer_ticket_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_cement_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_execute_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_originate_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_publish_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_recover_bond_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_refute_count', $data ?? [], null);
        $this->setIfExists('refutation_games_count', $data ?? [], null);
        $this->setIfExists('active_refutation_games_count', $data ?? [], null);
        $this->setIfExists('first_activity', $data ?? [], null);
        $this->setIfExists('first_activity_time', $data ?? [], null);
        $this->setIfExists('last_activity', $data ?? [], null);
        $this->setIfExists('last_activity_time', $data ?? [], null);
        $this->setIfExists('extras', $data ?? [], null);
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
     * @return \Tzkt\Model\SmartRollupAllOfCreator|null
     */
    public function getCreator(): ?\Tzkt\Model\SmartRollupAllOfCreator
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param \Tzkt\Model\SmartRollupAllOfCreator|null $creator creator
     *
     * @return $this
     */
    public function setCreator(?\Tzkt\Model\SmartRollupAllOfCreator $creator): static
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
     * Gets pvm_kind
     *
     * @return string|null
     */
    public function getPvmKind(): ?string
    {
        return $this->container['pvm_kind'];
    }

    /**
     * Sets pvm_kind
     *
     * @param string|null $pvm_kind PVM kind: `arith` or `wasm`
     *
     * @return $this
     */
    public function setPvmKind(?string $pvm_kind): static
    {
        if (is_null($pvm_kind)) {
            array_push($this->openAPINullablesSetToNull, 'pvm_kind');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pvm_kind', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pvm_kind'] = $pvm_kind;

        return $this;
    }

    /**
     * Gets genesis_commitment
     *
     * @return string|null
     */
    public function getGenesisCommitment(): ?string
    {
        return $this->container['genesis_commitment'];
    }

    /**
     * Sets genesis_commitment
     *
     * @param string|null $genesis_commitment Genesis commitment hash
     *
     * @return $this
     */
    public function setGenesisCommitment(?string $genesis_commitment): static
    {
        if (is_null($genesis_commitment)) {
            array_push($this->openAPINullablesSetToNull, 'genesis_commitment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('genesis_commitment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['genesis_commitment'] = $genesis_commitment;

        return $this;
    }

    /**
     * Gets last_commitment
     *
     * @return string|null
     */
    public function getLastCommitment(): ?string
    {
        return $this->container['last_commitment'];
    }

    /**
     * Sets last_commitment
     *
     * @param string|null $last_commitment The most recent cemented commitment hash
     *
     * @return $this
     */
    public function setLastCommitment(?string $last_commitment): static
    {
        if (is_null($last_commitment)) {
            array_push($this->openAPINullablesSetToNull, 'last_commitment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_commitment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_commitment'] = $last_commitment;

        return $this;
    }

    /**
     * Gets inbox_level
     *
     * @return int|null
     */
    public function getInboxLevel(): ?int
    {
        return $this->container['inbox_level'];
    }

    /**
     * Sets inbox_level
     *
     * @param int|null $inbox_level Inbox level of the most recent cemented commitment
     *
     * @return $this
     */
    public function setInboxLevel(?int $inbox_level): static
    {
        if (is_null($inbox_level)) {
            throw new InvalidArgumentException('non-nullable inbox_level cannot be null');
        }
        $this->container['inbox_level'] = $inbox_level;

        return $this;
    }

    /**
     * Gets total_stakers
     *
     * @return int|null
     */
    public function getTotalStakers(): ?int
    {
        return $this->container['total_stakers'];
    }

    /**
     * Sets total_stakers
     *
     * @param int|null $total_stakers Total number of stakers.
     *
     * @return $this
     */
    public function setTotalStakers(?int $total_stakers): static
    {
        if (is_null($total_stakers)) {
            throw new InvalidArgumentException('non-nullable total_stakers cannot be null');
        }
        $this->container['total_stakers'] = $total_stakers;

        return $this;
    }

    /**
     * Gets active_stakers
     *
     * @return int|null
     */
    public function getActiveStakers(): ?int
    {
        return $this->container['active_stakers'];
    }

    /**
     * Sets active_stakers
     *
     * @param int|null $active_stakers Total number of active stakers.
     *
     * @return $this
     */
    public function setActiveStakers(?int $active_stakers): static
    {
        if (is_null($active_stakers)) {
            throw new InvalidArgumentException('non-nullable active_stakers cannot be null');
        }
        $this->container['active_stakers'] = $active_stakers;

        return $this;
    }

    /**
     * Gets executed_commitments
     *
     * @return int|null
     */
    public function getExecutedCommitments(): ?int
    {
        return $this->container['executed_commitments'];
    }

    /**
     * Sets executed_commitments
     *
     * @param int|null $executed_commitments Number of commitments that were cemented and executed
     *
     * @return $this
     */
    public function setExecutedCommitments(?int $executed_commitments): static
    {
        if (is_null($executed_commitments)) {
            throw new InvalidArgumentException('non-nullable executed_commitments cannot be null');
        }
        $this->container['executed_commitments'] = $executed_commitments;

        return $this;
    }

    /**
     * Gets cemented_commitments
     *
     * @return int|null
     */
    public function getCementedCommitments(): ?int
    {
        return $this->container['cemented_commitments'];
    }

    /**
     * Sets cemented_commitments
     *
     * @param int|null $cemented_commitments Number of commitments that were cemented (including executed ones)
     *
     * @return $this
     */
    public function setCementedCommitments(?int $cemented_commitments): static
    {
        if (is_null($cemented_commitments)) {
            throw new InvalidArgumentException('non-nullable cemented_commitments cannot be null');
        }
        $this->container['cemented_commitments'] = $cemented_commitments;

        return $this;
    }

    /**
     * Gets pending_commitments
     *
     * @return int|null
     */
    public function getPendingCommitments(): ?int
    {
        return $this->container['pending_commitments'];
    }

    /**
     * Sets pending_commitments
     *
     * @param int|null $pending_commitments Number of pending commitments
     *
     * @return $this
     */
    public function setPendingCommitments(?int $pending_commitments): static
    {
        if (is_null($pending_commitments)) {
            throw new InvalidArgumentException('non-nullable pending_commitments cannot be null');
        }
        $this->container['pending_commitments'] = $pending_commitments;

        return $this;
    }

    /**
     * Gets refuted_commitments
     *
     * @return int|null
     */
    public function getRefutedCommitments(): ?int
    {
        return $this->container['refuted_commitments'];
    }

    /**
     * Sets refuted_commitments
     *
     * @param int|null $refuted_commitments Number of commitments that were refuted
     *
     * @return $this
     */
    public function setRefutedCommitments(?int $refuted_commitments): static
    {
        if (is_null($refuted_commitments)) {
            throw new InvalidArgumentException('non-nullable refuted_commitments cannot be null');
        }
        $this->container['refuted_commitments'] = $refuted_commitments;

        return $this;
    }

    /**
     * Gets orphan_commitments
     *
     * @return int|null
     */
    public function getOrphanCommitments(): ?int
    {
        return $this->container['orphan_commitments'];
    }

    /**
     * Sets orphan_commitments
     *
     * @param int|null $orphan_commitments Number of commitments that became orphan, due to their parent was refuted
     *
     * @return $this
     */
    public function setOrphanCommitments(?int $orphan_commitments): static
    {
        if (is_null($orphan_commitments)) {
            throw new InvalidArgumentException('non-nullable orphan_commitments cannot be null');
        }
        $this->container['orphan_commitments'] = $orphan_commitments;

        return $this;
    }

    /**
     * Gets smart_rollup_bonds
     *
     * @return int|null
     */
    public function getSmartRollupBonds(): ?int
    {
        return $this->container['smart_rollup_bonds'];
    }

    /**
     * Sets smart_rollup_bonds
     *
     * @param int|null $smart_rollup_bonds Amount of mutez locked as bonds
     *
     * @return $this
     */
    public function setSmartRollupBonds(?int $smart_rollup_bonds): static
    {
        if (is_null($smart_rollup_bonds)) {
            throw new InvalidArgumentException('non-nullable smart_rollup_bonds cannot be null');
        }
        $this->container['smart_rollup_bonds'] = $smart_rollup_bonds;

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
     * Gets smart_rollup_cement_count
     *
     * @return int|null
     */
    public function getSmartRollupCementCount(): ?int
    {
        return $this->container['smart_rollup_cement_count'];
    }

    /**
     * Sets smart_rollup_cement_count
     *
     * @param int|null $smart_rollup_cement_count Number of `smart_rollup_cement` operations related to the account
     *
     * @return $this
     */
    public function setSmartRollupCementCount(?int $smart_rollup_cement_count): static
    {
        if (is_null($smart_rollup_cement_count)) {
            throw new InvalidArgumentException('non-nullable smart_rollup_cement_count cannot be null');
        }
        $this->container['smart_rollup_cement_count'] = $smart_rollup_cement_count;

        return $this;
    }

    /**
     * Gets smart_rollup_execute_count
     *
     * @return int|null
     */
    public function getSmartRollupExecuteCount(): ?int
    {
        return $this->container['smart_rollup_execute_count'];
    }

    /**
     * Sets smart_rollup_execute_count
     *
     * @param int|null $smart_rollup_execute_count Number of `smart_rollup_execute_outbox_message` operations related to the account
     *
     * @return $this
     */
    public function setSmartRollupExecuteCount(?int $smart_rollup_execute_count): static
    {
        if (is_null($smart_rollup_execute_count)) {
            throw new InvalidArgumentException('non-nullable smart_rollup_execute_count cannot be null');
        }
        $this->container['smart_rollup_execute_count'] = $smart_rollup_execute_count;

        return $this;
    }

    /**
     * Gets smart_rollup_originate_count
     *
     * @return int|null
     */
    public function getSmartRollupOriginateCount(): ?int
    {
        return $this->container['smart_rollup_originate_count'];
    }

    /**
     * Sets smart_rollup_originate_count
     *
     * @param int|null $smart_rollup_originate_count Number of `smart_rollup_originate` operations related to the account
     *
     * @return $this
     */
    public function setSmartRollupOriginateCount(?int $smart_rollup_originate_count): static
    {
        if (is_null($smart_rollup_originate_count)) {
            throw new InvalidArgumentException('non-nullable smart_rollup_originate_count cannot be null');
        }
        $this->container['smart_rollup_originate_count'] = $smart_rollup_originate_count;

        return $this;
    }

    /**
     * Gets smart_rollup_publish_count
     *
     * @return int|null
     */
    public function getSmartRollupPublishCount(): ?int
    {
        return $this->container['smart_rollup_publish_count'];
    }

    /**
     * Sets smart_rollup_publish_count
     *
     * @param int|null $smart_rollup_publish_count Number of `smart_rollup_publish` operations related to the account
     *
     * @return $this
     */
    public function setSmartRollupPublishCount(?int $smart_rollup_publish_count): static
    {
        if (is_null($smart_rollup_publish_count)) {
            throw new InvalidArgumentException('non-nullable smart_rollup_publish_count cannot be null');
        }
        $this->container['smart_rollup_publish_count'] = $smart_rollup_publish_count;

        return $this;
    }

    /**
     * Gets smart_rollup_recover_bond_count
     *
     * @return int|null
     */
    public function getSmartRollupRecoverBondCount(): ?int
    {
        return $this->container['smart_rollup_recover_bond_count'];
    }

    /**
     * Sets smart_rollup_recover_bond_count
     *
     * @param int|null $smart_rollup_recover_bond_count Number of `smart_rollup_recover_bond` operations related to the account
     *
     * @return $this
     */
    public function setSmartRollupRecoverBondCount(?int $smart_rollup_recover_bond_count): static
    {
        if (is_null($smart_rollup_recover_bond_count)) {
            throw new InvalidArgumentException('non-nullable smart_rollup_recover_bond_count cannot be null');
        }
        $this->container['smart_rollup_recover_bond_count'] = $smart_rollup_recover_bond_count;

        return $this;
    }

    /**
     * Gets smart_rollup_refute_count
     *
     * @return int|null
     */
    public function getSmartRollupRefuteCount(): ?int
    {
        return $this->container['smart_rollup_refute_count'];
    }

    /**
     * Sets smart_rollup_refute_count
     *
     * @param int|null $smart_rollup_refute_count Number of `smart_rollup_refute` operations related to the account
     *
     * @return $this
     */
    public function setSmartRollupRefuteCount(?int $smart_rollup_refute_count): static
    {
        if (is_null($smart_rollup_refute_count)) {
            throw new InvalidArgumentException('non-nullable smart_rollup_refute_count cannot be null');
        }
        $this->container['smart_rollup_refute_count'] = $smart_rollup_refute_count;

        return $this;
    }

    /**
     * Gets refutation_games_count
     *
     * @return int|null
     */
    public function getRefutationGamesCount(): ?int
    {
        return $this->container['refutation_games_count'];
    }

    /**
     * Sets refutation_games_count
     *
     * @param int|null $refutation_games_count Number of smart rollup refutation games related to the account
     *
     * @return $this
     */
    public function setRefutationGamesCount(?int $refutation_games_count): static
    {
        if (is_null($refutation_games_count)) {
            throw new InvalidArgumentException('non-nullable refutation_games_count cannot be null');
        }
        $this->container['refutation_games_count'] = $refutation_games_count;

        return $this;
    }

    /**
     * Gets active_refutation_games_count
     *
     * @return int|null
     */
    public function getActiveRefutationGamesCount(): ?int
    {
        return $this->container['active_refutation_games_count'];
    }

    /**
     * Sets active_refutation_games_count
     *
     * @param int|null $active_refutation_games_count Number of active smart rollup refutation games related to the account
     *
     * @return $this
     */
    public function setActiveRefutationGamesCount(?int $active_refutation_games_count): static
    {
        if (is_null($active_refutation_games_count)) {
            throw new InvalidArgumentException('non-nullable active_refutation_games_count cannot be null');
        }
        $this->container['active_refutation_games_count'] = $active_refutation_games_count;

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


