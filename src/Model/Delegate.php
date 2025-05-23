<?php
/**
 * Delegate
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
 * Delegate Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Delegate extends Account
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Delegate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'type' => 'string',
        'address' => 'string',
        'active' => 'bool',
        'alias' => 'string',
        'public_key' => 'string',
        'revealed' => 'bool',
        'balance' => 'int',
        'rollup_bonds' => 'int',
        'smart_rollup_bonds' => 'int',
        'staked_balance' => 'int',
        'unstaked_balance' => 'int',
        'unstaked_baker' => '\Tzkt\Model\DelegateAllOfUnstakedBaker',
        'external_staked_balance' => 'int',
        'external_unstaked_balance' => 'int',
        'rounding_error' => 'int',
        'total_staked_balance' => 'int',
        'issued_pseudotokens' => 'string',
        'stakers_count' => 'int',
        'frozen_deposit_limit' => 'int',
        'limit_of_staking_over_baking' => 'int',
        'edge_of_baking_over_staking' => 'int',
        'counter' => 'int',
        'activation_level' => 'int',
        'activation_time' => '\DateTime',
        'deactivation_level' => 'int',
        'deactivation_time' => '\DateTime',
        'staking_balance' => 'int',
        'delegated_balance' => 'int',
        'num_contracts' => 'int',
        'rollups_count' => 'int',
        'smart_rollups_count' => 'int',
        'active_tokens_count' => 'int',
        'token_balances_count' => 'int',
        'token_transfers_count' => 'int',
        'active_tickets_count' => 'int',
        'ticket_balances_count' => 'int',
        'ticket_transfers_count' => 'int',
        'num_delegators' => 'int',
        'num_blocks' => 'int',
        'num_endorsements' => 'int',
        'num_preendorsements' => 'int',
        'num_ballots' => 'int',
        'num_proposals' => 'int',
        'num_activations' => 'int',
        'num_double_baking' => 'int',
        'num_double_endorsing' => 'int',
        'num_double_preendorsing' => 'int',
        'num_nonce_revelations' => 'int',
        'vdf_revelations_count' => 'int',
        'num_revelation_penalties' => 'int',
        'num_endorsing_rewards' => 'int',
        'num_delegations' => 'int',
        'num_originations' => 'int',
        'num_transactions' => 'int',
        'num_reveals' => 'int',
        'num_register_constants' => 'int',
        'num_set_deposits_limits' => 'int',
        'num_migrations' => 'int',
        'tx_rollup_origination_count' => 'int',
        'tx_rollup_submit_batch_count' => 'int',
        'tx_rollup_commit_count' => 'int',
        'tx_rollup_return_bond_count' => 'int',
        'tx_rollup_finalize_commitment_count' => 'int',
        'tx_rollup_remove_commitment_count' => 'int',
        'tx_rollup_rejection_count' => 'int',
        'tx_rollup_dispatch_tickets_count' => 'int',
        'transfer_ticket_count' => 'int',
        'increase_paid_storage_count' => 'int',
        'update_consensus_key_count' => 'int',
        'drain_delegate_count' => 'int',
        'smart_rollup_add_messages_count' => 'int',
        'smart_rollup_cement_count' => 'int',
        'smart_rollup_execute_count' => 'int',
        'smart_rollup_originate_count' => 'int',
        'smart_rollup_publish_count' => 'int',
        'smart_rollup_recover_bond_count' => 'int',
        'smart_rollup_refute_count' => 'int',
        'refutation_games_count' => 'int',
        'active_refutation_games_count' => 'int',
        'staking_ops_count' => 'int',
        'autostaking_ops_count' => 'int',
        'staking_updates_count' => 'int',
        'set_delegate_parameters_ops_count' => 'int',
        'dal_publish_commitment_ops_count' => 'int',
        'dal_entrapment_evidence_ops_count' => 'int',
        'dal_attestation_rewards_count' => 'int',
        'first_activity' => 'int',
        'first_activity_time' => '\DateTime',
        'last_activity' => 'int',
        'last_activity_time' => '\DateTime',
        'extras' => 'mixed',
        'software' => '\Tzkt\Model\DelegateAllOfSoftware',
        'lost_balance' => 'int',
        'frozen_deposit' => 'int',
        'frozen_deposits' => 'int',
        'frozen_rewards' => 'int',
        'frozen_fees' => 'int',
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
        'active' => null,
        'alias' => null,
        'public_key' => null,
        'revealed' => null,
        'balance' => 'int64',
        'rollup_bonds' => 'int64',
        'smart_rollup_bonds' => 'int64',
        'staked_balance' => 'int64',
        'unstaked_balance' => 'int64',
        'unstaked_baker' => null,
        'external_staked_balance' => 'int64',
        'external_unstaked_balance' => 'int64',
        'rounding_error' => 'int64',
        'total_staked_balance' => 'int64',
        'issued_pseudotokens' => null,
        'stakers_count' => 'int32',
        'frozen_deposit_limit' => 'int64',
        'limit_of_staking_over_baking' => 'int64',
        'edge_of_baking_over_staking' => 'int64',
        'counter' => 'int32',
        'activation_level' => 'int32',
        'activation_time' => 'date-time',
        'deactivation_level' => 'int32',
        'deactivation_time' => 'date-time',
        'staking_balance' => 'int64',
        'delegated_balance' => 'int64',
        'num_contracts' => 'int32',
        'rollups_count' => 'int32',
        'smart_rollups_count' => 'int32',
        'active_tokens_count' => 'int32',
        'token_balances_count' => 'int32',
        'token_transfers_count' => 'int32',
        'active_tickets_count' => 'int32',
        'ticket_balances_count' => 'int32',
        'ticket_transfers_count' => 'int32',
        'num_delegators' => 'int32',
        'num_blocks' => 'int32',
        'num_endorsements' => 'int32',
        'num_preendorsements' => 'int32',
        'num_ballots' => 'int32',
        'num_proposals' => 'int32',
        'num_activations' => 'int32',
        'num_double_baking' => 'int32',
        'num_double_endorsing' => 'int32',
        'num_double_preendorsing' => 'int32',
        'num_nonce_revelations' => 'int32',
        'vdf_revelations_count' => 'int32',
        'num_revelation_penalties' => 'int32',
        'num_endorsing_rewards' => 'int32',
        'num_delegations' => 'int32',
        'num_originations' => 'int32',
        'num_transactions' => 'int32',
        'num_reveals' => 'int32',
        'num_register_constants' => 'int32',
        'num_set_deposits_limits' => 'int32',
        'num_migrations' => 'int32',
        'tx_rollup_origination_count' => 'int32',
        'tx_rollup_submit_batch_count' => 'int32',
        'tx_rollup_commit_count' => 'int32',
        'tx_rollup_return_bond_count' => 'int32',
        'tx_rollup_finalize_commitment_count' => 'int32',
        'tx_rollup_remove_commitment_count' => 'int32',
        'tx_rollup_rejection_count' => 'int32',
        'tx_rollup_dispatch_tickets_count' => 'int32',
        'transfer_ticket_count' => 'int32',
        'increase_paid_storage_count' => 'int32',
        'update_consensus_key_count' => 'int32',
        'drain_delegate_count' => 'int32',
        'smart_rollup_add_messages_count' => 'int32',
        'smart_rollup_cement_count' => 'int32',
        'smart_rollup_execute_count' => 'int32',
        'smart_rollup_originate_count' => 'int32',
        'smart_rollup_publish_count' => 'int32',
        'smart_rollup_recover_bond_count' => 'int32',
        'smart_rollup_refute_count' => 'int32',
        'refutation_games_count' => 'int32',
        'active_refutation_games_count' => 'int32',
        'staking_ops_count' => 'int32',
        'autostaking_ops_count' => 'int32',
        'staking_updates_count' => 'int32',
        'set_delegate_parameters_ops_count' => 'int32',
        'dal_publish_commitment_ops_count' => 'int32',
        'dal_entrapment_evidence_ops_count' => 'int32',
        'dal_attestation_rewards_count' => 'int32',
        'first_activity' => 'int32',
        'first_activity_time' => 'date-time',
        'last_activity' => 'int32',
        'last_activity_time' => 'date-time',
        'extras' => null,
        'software' => null,
        'lost_balance' => 'int64',
        'frozen_deposit' => 'int64',
        'frozen_deposits' => 'int64',
        'frozen_rewards' => 'int64',
        'frozen_fees' => 'int64',
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
        'active' => false,
        'alias' => true,
        'public_key' => true,
        'revealed' => false,
        'balance' => false,
        'rollup_bonds' => false,
        'smart_rollup_bonds' => false,
        'staked_balance' => false,
        'unstaked_balance' => false,
        'unstaked_baker' => true,
        'external_staked_balance' => false,
        'external_unstaked_balance' => false,
        'rounding_error' => false,
        'total_staked_balance' => false,
        'issued_pseudotokens' => true,
        'stakers_count' => false,
        'frozen_deposit_limit' => true,
        'limit_of_staking_over_baking' => true,
        'edge_of_baking_over_staking' => true,
        'counter' => false,
        'activation_level' => false,
        'activation_time' => false,
        'deactivation_level' => true,
        'deactivation_time' => true,
        'staking_balance' => false,
        'delegated_balance' => false,
        'num_contracts' => false,
        'rollups_count' => false,
        'smart_rollups_count' => false,
        'active_tokens_count' => false,
        'token_balances_count' => false,
        'token_transfers_count' => false,
        'active_tickets_count' => false,
        'ticket_balances_count' => false,
        'ticket_transfers_count' => false,
        'num_delegators' => false,
        'num_blocks' => false,
        'num_endorsements' => false,
        'num_preendorsements' => false,
        'num_ballots' => false,
        'num_proposals' => false,
        'num_activations' => false,
        'num_double_baking' => false,
        'num_double_endorsing' => false,
        'num_double_preendorsing' => false,
        'num_nonce_revelations' => false,
        'vdf_revelations_count' => false,
        'num_revelation_penalties' => false,
        'num_endorsing_rewards' => false,
        'num_delegations' => false,
        'num_originations' => false,
        'num_transactions' => false,
        'num_reveals' => false,
        'num_register_constants' => false,
        'num_set_deposits_limits' => false,
        'num_migrations' => false,
        'tx_rollup_origination_count' => false,
        'tx_rollup_submit_batch_count' => false,
        'tx_rollup_commit_count' => false,
        'tx_rollup_return_bond_count' => false,
        'tx_rollup_finalize_commitment_count' => false,
        'tx_rollup_remove_commitment_count' => false,
        'tx_rollup_rejection_count' => false,
        'tx_rollup_dispatch_tickets_count' => false,
        'transfer_ticket_count' => false,
        'increase_paid_storage_count' => false,
        'update_consensus_key_count' => false,
        'drain_delegate_count' => false,
        'smart_rollup_add_messages_count' => false,
        'smart_rollup_cement_count' => false,
        'smart_rollup_execute_count' => false,
        'smart_rollup_originate_count' => false,
        'smart_rollup_publish_count' => false,
        'smart_rollup_recover_bond_count' => false,
        'smart_rollup_refute_count' => false,
        'refutation_games_count' => false,
        'active_refutation_games_count' => false,
        'staking_ops_count' => false,
        'autostaking_ops_count' => false,
        'staking_updates_count' => false,
        'set_delegate_parameters_ops_count' => false,
        'dal_publish_commitment_ops_count' => false,
        'dal_entrapment_evidence_ops_count' => false,
        'dal_attestation_rewards_count' => false,
        'first_activity' => false,
        'first_activity_time' => false,
        'last_activity' => false,
        'last_activity_time' => false,
        'extras' => true,
        'software' => true,
        'lost_balance' => false,
        'frozen_deposit' => false,
        'frozen_deposits' => false,
        'frozen_rewards' => false,
        'frozen_fees' => false,
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
        'active' => 'active',
        'alias' => 'alias',
        'public_key' => 'publicKey',
        'revealed' => 'revealed',
        'balance' => 'balance',
        'rollup_bonds' => 'rollupBonds',
        'smart_rollup_bonds' => 'smartRollupBonds',
        'staked_balance' => 'stakedBalance',
        'unstaked_balance' => 'unstakedBalance',
        'unstaked_baker' => 'unstakedBaker',
        'external_staked_balance' => 'externalStakedBalance',
        'external_unstaked_balance' => 'externalUnstakedBalance',
        'rounding_error' => 'roundingError',
        'total_staked_balance' => 'totalStakedBalance',
        'issued_pseudotokens' => 'issuedPseudotokens',
        'stakers_count' => 'stakersCount',
        'frozen_deposit_limit' => 'frozenDepositLimit',
        'limit_of_staking_over_baking' => 'limitOfStakingOverBaking',
        'edge_of_baking_over_staking' => 'edgeOfBakingOverStaking',
        'counter' => 'counter',
        'activation_level' => 'activationLevel',
        'activation_time' => 'activationTime',
        'deactivation_level' => 'deactivationLevel',
        'deactivation_time' => 'deactivationTime',
        'staking_balance' => 'stakingBalance',
        'delegated_balance' => 'delegatedBalance',
        'num_contracts' => 'numContracts',
        'rollups_count' => 'rollupsCount',
        'smart_rollups_count' => 'smartRollupsCount',
        'active_tokens_count' => 'activeTokensCount',
        'token_balances_count' => 'tokenBalancesCount',
        'token_transfers_count' => 'tokenTransfersCount',
        'active_tickets_count' => 'activeTicketsCount',
        'ticket_balances_count' => 'ticketBalancesCount',
        'ticket_transfers_count' => 'ticketTransfersCount',
        'num_delegators' => 'numDelegators',
        'num_blocks' => 'numBlocks',
        'num_endorsements' => 'numEndorsements',
        'num_preendorsements' => 'numPreendorsements',
        'num_ballots' => 'numBallots',
        'num_proposals' => 'numProposals',
        'num_activations' => 'numActivations',
        'num_double_baking' => 'numDoubleBaking',
        'num_double_endorsing' => 'numDoubleEndorsing',
        'num_double_preendorsing' => 'numDoublePreendorsing',
        'num_nonce_revelations' => 'numNonceRevelations',
        'vdf_revelations_count' => 'vdfRevelationsCount',
        'num_revelation_penalties' => 'numRevelationPenalties',
        'num_endorsing_rewards' => 'numEndorsingRewards',
        'num_delegations' => 'numDelegations',
        'num_originations' => 'numOriginations',
        'num_transactions' => 'numTransactions',
        'num_reveals' => 'numReveals',
        'num_register_constants' => 'numRegisterConstants',
        'num_set_deposits_limits' => 'numSetDepositsLimits',
        'num_migrations' => 'numMigrations',
        'tx_rollup_origination_count' => 'txRollupOriginationCount',
        'tx_rollup_submit_batch_count' => 'txRollupSubmitBatchCount',
        'tx_rollup_commit_count' => 'txRollupCommitCount',
        'tx_rollup_return_bond_count' => 'txRollupReturnBondCount',
        'tx_rollup_finalize_commitment_count' => 'txRollupFinalizeCommitmentCount',
        'tx_rollup_remove_commitment_count' => 'txRollupRemoveCommitmentCount',
        'tx_rollup_rejection_count' => 'txRollupRejectionCount',
        'tx_rollup_dispatch_tickets_count' => 'txRollupDispatchTicketsCount',
        'transfer_ticket_count' => 'transferTicketCount',
        'increase_paid_storage_count' => 'increasePaidStorageCount',
        'update_consensus_key_count' => 'updateConsensusKeyCount',
        'drain_delegate_count' => 'drainDelegateCount',
        'smart_rollup_add_messages_count' => 'smartRollupAddMessagesCount',
        'smart_rollup_cement_count' => 'smartRollupCementCount',
        'smart_rollup_execute_count' => 'smartRollupExecuteCount',
        'smart_rollup_originate_count' => 'smartRollupOriginateCount',
        'smart_rollup_publish_count' => 'smartRollupPublishCount',
        'smart_rollup_recover_bond_count' => 'smartRollupRecoverBondCount',
        'smart_rollup_refute_count' => 'smartRollupRefuteCount',
        'refutation_games_count' => 'refutationGamesCount',
        'active_refutation_games_count' => 'activeRefutationGamesCount',
        'staking_ops_count' => 'stakingOpsCount',
        'autostaking_ops_count' => 'autostakingOpsCount',
        'staking_updates_count' => 'stakingUpdatesCount',
        'set_delegate_parameters_ops_count' => 'setDelegateParametersOpsCount',
        'dal_publish_commitment_ops_count' => 'dalPublishCommitmentOpsCount',
        'dal_entrapment_evidence_ops_count' => 'dalEntrapmentEvidenceOpsCount',
        'dal_attestation_rewards_count' => 'dalAttestationRewardsCount',
        'first_activity' => 'firstActivity',
        'first_activity_time' => 'firstActivityTime',
        'last_activity' => 'lastActivity',
        'last_activity_time' => 'lastActivityTime',
        'extras' => 'extras',
        'software' => 'software',
        'lost_balance' => 'lostBalance',
        'frozen_deposit' => 'frozenDeposit',
        'frozen_deposits' => 'frozenDeposits',
        'frozen_rewards' => 'frozenRewards',
        'frozen_fees' => 'frozenFees',
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
        'active' => 'setActive',
        'alias' => 'setAlias',
        'public_key' => 'setPublicKey',
        'revealed' => 'setRevealed',
        'balance' => 'setBalance',
        'rollup_bonds' => 'setRollupBonds',
        'smart_rollup_bonds' => 'setSmartRollupBonds',
        'staked_balance' => 'setStakedBalance',
        'unstaked_balance' => 'setUnstakedBalance',
        'unstaked_baker' => 'setUnstakedBaker',
        'external_staked_balance' => 'setExternalStakedBalance',
        'external_unstaked_balance' => 'setExternalUnstakedBalance',
        'rounding_error' => 'setRoundingError',
        'total_staked_balance' => 'setTotalStakedBalance',
        'issued_pseudotokens' => 'setIssuedPseudotokens',
        'stakers_count' => 'setStakersCount',
        'frozen_deposit_limit' => 'setFrozenDepositLimit',
        'limit_of_staking_over_baking' => 'setLimitOfStakingOverBaking',
        'edge_of_baking_over_staking' => 'setEdgeOfBakingOverStaking',
        'counter' => 'setCounter',
        'activation_level' => 'setActivationLevel',
        'activation_time' => 'setActivationTime',
        'deactivation_level' => 'setDeactivationLevel',
        'deactivation_time' => 'setDeactivationTime',
        'staking_balance' => 'setStakingBalance',
        'delegated_balance' => 'setDelegatedBalance',
        'num_contracts' => 'setNumContracts',
        'rollups_count' => 'setRollupsCount',
        'smart_rollups_count' => 'setSmartRollupsCount',
        'active_tokens_count' => 'setActiveTokensCount',
        'token_balances_count' => 'setTokenBalancesCount',
        'token_transfers_count' => 'setTokenTransfersCount',
        'active_tickets_count' => 'setActiveTicketsCount',
        'ticket_balances_count' => 'setTicketBalancesCount',
        'ticket_transfers_count' => 'setTicketTransfersCount',
        'num_delegators' => 'setNumDelegators',
        'num_blocks' => 'setNumBlocks',
        'num_endorsements' => 'setNumEndorsements',
        'num_preendorsements' => 'setNumPreendorsements',
        'num_ballots' => 'setNumBallots',
        'num_proposals' => 'setNumProposals',
        'num_activations' => 'setNumActivations',
        'num_double_baking' => 'setNumDoubleBaking',
        'num_double_endorsing' => 'setNumDoubleEndorsing',
        'num_double_preendorsing' => 'setNumDoublePreendorsing',
        'num_nonce_revelations' => 'setNumNonceRevelations',
        'vdf_revelations_count' => 'setVdfRevelationsCount',
        'num_revelation_penalties' => 'setNumRevelationPenalties',
        'num_endorsing_rewards' => 'setNumEndorsingRewards',
        'num_delegations' => 'setNumDelegations',
        'num_originations' => 'setNumOriginations',
        'num_transactions' => 'setNumTransactions',
        'num_reveals' => 'setNumReveals',
        'num_register_constants' => 'setNumRegisterConstants',
        'num_set_deposits_limits' => 'setNumSetDepositsLimits',
        'num_migrations' => 'setNumMigrations',
        'tx_rollup_origination_count' => 'setTxRollupOriginationCount',
        'tx_rollup_submit_batch_count' => 'setTxRollupSubmitBatchCount',
        'tx_rollup_commit_count' => 'setTxRollupCommitCount',
        'tx_rollup_return_bond_count' => 'setTxRollupReturnBondCount',
        'tx_rollup_finalize_commitment_count' => 'setTxRollupFinalizeCommitmentCount',
        'tx_rollup_remove_commitment_count' => 'setTxRollupRemoveCommitmentCount',
        'tx_rollup_rejection_count' => 'setTxRollupRejectionCount',
        'tx_rollup_dispatch_tickets_count' => 'setTxRollupDispatchTicketsCount',
        'transfer_ticket_count' => 'setTransferTicketCount',
        'increase_paid_storage_count' => 'setIncreasePaidStorageCount',
        'update_consensus_key_count' => 'setUpdateConsensusKeyCount',
        'drain_delegate_count' => 'setDrainDelegateCount',
        'smart_rollup_add_messages_count' => 'setSmartRollupAddMessagesCount',
        'smart_rollup_cement_count' => 'setSmartRollupCementCount',
        'smart_rollup_execute_count' => 'setSmartRollupExecuteCount',
        'smart_rollup_originate_count' => 'setSmartRollupOriginateCount',
        'smart_rollup_publish_count' => 'setSmartRollupPublishCount',
        'smart_rollup_recover_bond_count' => 'setSmartRollupRecoverBondCount',
        'smart_rollup_refute_count' => 'setSmartRollupRefuteCount',
        'refutation_games_count' => 'setRefutationGamesCount',
        'active_refutation_games_count' => 'setActiveRefutationGamesCount',
        'staking_ops_count' => 'setStakingOpsCount',
        'autostaking_ops_count' => 'setAutostakingOpsCount',
        'staking_updates_count' => 'setStakingUpdatesCount',
        'set_delegate_parameters_ops_count' => 'setSetDelegateParametersOpsCount',
        'dal_publish_commitment_ops_count' => 'setDalPublishCommitmentOpsCount',
        'dal_entrapment_evidence_ops_count' => 'setDalEntrapmentEvidenceOpsCount',
        'dal_attestation_rewards_count' => 'setDalAttestationRewardsCount',
        'first_activity' => 'setFirstActivity',
        'first_activity_time' => 'setFirstActivityTime',
        'last_activity' => 'setLastActivity',
        'last_activity_time' => 'setLastActivityTime',
        'extras' => 'setExtras',
        'software' => 'setSoftware',
        'lost_balance' => 'setLostBalance',
        'frozen_deposit' => 'setFrozenDeposit',
        'frozen_deposits' => 'setFrozenDeposits',
        'frozen_rewards' => 'setFrozenRewards',
        'frozen_fees' => 'setFrozenFees',
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
        'active' => 'getActive',
        'alias' => 'getAlias',
        'public_key' => 'getPublicKey',
        'revealed' => 'getRevealed',
        'balance' => 'getBalance',
        'rollup_bonds' => 'getRollupBonds',
        'smart_rollup_bonds' => 'getSmartRollupBonds',
        'staked_balance' => 'getStakedBalance',
        'unstaked_balance' => 'getUnstakedBalance',
        'unstaked_baker' => 'getUnstakedBaker',
        'external_staked_balance' => 'getExternalStakedBalance',
        'external_unstaked_balance' => 'getExternalUnstakedBalance',
        'rounding_error' => 'getRoundingError',
        'total_staked_balance' => 'getTotalStakedBalance',
        'issued_pseudotokens' => 'getIssuedPseudotokens',
        'stakers_count' => 'getStakersCount',
        'frozen_deposit_limit' => 'getFrozenDepositLimit',
        'limit_of_staking_over_baking' => 'getLimitOfStakingOverBaking',
        'edge_of_baking_over_staking' => 'getEdgeOfBakingOverStaking',
        'counter' => 'getCounter',
        'activation_level' => 'getActivationLevel',
        'activation_time' => 'getActivationTime',
        'deactivation_level' => 'getDeactivationLevel',
        'deactivation_time' => 'getDeactivationTime',
        'staking_balance' => 'getStakingBalance',
        'delegated_balance' => 'getDelegatedBalance',
        'num_contracts' => 'getNumContracts',
        'rollups_count' => 'getRollupsCount',
        'smart_rollups_count' => 'getSmartRollupsCount',
        'active_tokens_count' => 'getActiveTokensCount',
        'token_balances_count' => 'getTokenBalancesCount',
        'token_transfers_count' => 'getTokenTransfersCount',
        'active_tickets_count' => 'getActiveTicketsCount',
        'ticket_balances_count' => 'getTicketBalancesCount',
        'ticket_transfers_count' => 'getTicketTransfersCount',
        'num_delegators' => 'getNumDelegators',
        'num_blocks' => 'getNumBlocks',
        'num_endorsements' => 'getNumEndorsements',
        'num_preendorsements' => 'getNumPreendorsements',
        'num_ballots' => 'getNumBallots',
        'num_proposals' => 'getNumProposals',
        'num_activations' => 'getNumActivations',
        'num_double_baking' => 'getNumDoubleBaking',
        'num_double_endorsing' => 'getNumDoubleEndorsing',
        'num_double_preendorsing' => 'getNumDoublePreendorsing',
        'num_nonce_revelations' => 'getNumNonceRevelations',
        'vdf_revelations_count' => 'getVdfRevelationsCount',
        'num_revelation_penalties' => 'getNumRevelationPenalties',
        'num_endorsing_rewards' => 'getNumEndorsingRewards',
        'num_delegations' => 'getNumDelegations',
        'num_originations' => 'getNumOriginations',
        'num_transactions' => 'getNumTransactions',
        'num_reveals' => 'getNumReveals',
        'num_register_constants' => 'getNumRegisterConstants',
        'num_set_deposits_limits' => 'getNumSetDepositsLimits',
        'num_migrations' => 'getNumMigrations',
        'tx_rollup_origination_count' => 'getTxRollupOriginationCount',
        'tx_rollup_submit_batch_count' => 'getTxRollupSubmitBatchCount',
        'tx_rollup_commit_count' => 'getTxRollupCommitCount',
        'tx_rollup_return_bond_count' => 'getTxRollupReturnBondCount',
        'tx_rollup_finalize_commitment_count' => 'getTxRollupFinalizeCommitmentCount',
        'tx_rollup_remove_commitment_count' => 'getTxRollupRemoveCommitmentCount',
        'tx_rollup_rejection_count' => 'getTxRollupRejectionCount',
        'tx_rollup_dispatch_tickets_count' => 'getTxRollupDispatchTicketsCount',
        'transfer_ticket_count' => 'getTransferTicketCount',
        'increase_paid_storage_count' => 'getIncreasePaidStorageCount',
        'update_consensus_key_count' => 'getUpdateConsensusKeyCount',
        'drain_delegate_count' => 'getDrainDelegateCount',
        'smart_rollup_add_messages_count' => 'getSmartRollupAddMessagesCount',
        'smart_rollup_cement_count' => 'getSmartRollupCementCount',
        'smart_rollup_execute_count' => 'getSmartRollupExecuteCount',
        'smart_rollup_originate_count' => 'getSmartRollupOriginateCount',
        'smart_rollup_publish_count' => 'getSmartRollupPublishCount',
        'smart_rollup_recover_bond_count' => 'getSmartRollupRecoverBondCount',
        'smart_rollup_refute_count' => 'getSmartRollupRefuteCount',
        'refutation_games_count' => 'getRefutationGamesCount',
        'active_refutation_games_count' => 'getActiveRefutationGamesCount',
        'staking_ops_count' => 'getStakingOpsCount',
        'autostaking_ops_count' => 'getAutostakingOpsCount',
        'staking_updates_count' => 'getStakingUpdatesCount',
        'set_delegate_parameters_ops_count' => 'getSetDelegateParametersOpsCount',
        'dal_publish_commitment_ops_count' => 'getDalPublishCommitmentOpsCount',
        'dal_entrapment_evidence_ops_count' => 'getDalEntrapmentEvidenceOpsCount',
        'dal_attestation_rewards_count' => 'getDalAttestationRewardsCount',
        'first_activity' => 'getFirstActivity',
        'first_activity_time' => 'getFirstActivityTime',
        'last_activity' => 'getLastActivity',
        'last_activity_time' => 'getLastActivityTime',
        'extras' => 'getExtras',
        'software' => 'getSoftware',
        'lost_balance' => 'getLostBalance',
        'frozen_deposit' => 'getFrozenDeposit',
        'frozen_deposits' => 'getFrozenDeposits',
        'frozen_rewards' => 'getFrozenRewards',
        'frozen_fees' => 'getFrozenFees',
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
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('alias', $data ?? [], null);
        $this->setIfExists('public_key', $data ?? [], null);
        $this->setIfExists('revealed', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('rollup_bonds', $data ?? [], null);
        $this->setIfExists('smart_rollup_bonds', $data ?? [], null);
        $this->setIfExists('staked_balance', $data ?? [], null);
        $this->setIfExists('unstaked_balance', $data ?? [], null);
        $this->setIfExists('unstaked_baker', $data ?? [], null);
        $this->setIfExists('external_staked_balance', $data ?? [], null);
        $this->setIfExists('external_unstaked_balance', $data ?? [], null);
        $this->setIfExists('rounding_error', $data ?? [], null);
        $this->setIfExists('total_staked_balance', $data ?? [], null);
        $this->setIfExists('issued_pseudotokens', $data ?? [], null);
        $this->setIfExists('stakers_count', $data ?? [], null);
        $this->setIfExists('frozen_deposit_limit', $data ?? [], null);
        $this->setIfExists('limit_of_staking_over_baking', $data ?? [], null);
        $this->setIfExists('edge_of_baking_over_staking', $data ?? [], null);
        $this->setIfExists('counter', $data ?? [], null);
        $this->setIfExists('activation_level', $data ?? [], null);
        $this->setIfExists('activation_time', $data ?? [], null);
        $this->setIfExists('deactivation_level', $data ?? [], null);
        $this->setIfExists('deactivation_time', $data ?? [], null);
        $this->setIfExists('staking_balance', $data ?? [], null);
        $this->setIfExists('delegated_balance', $data ?? [], null);
        $this->setIfExists('num_contracts', $data ?? [], null);
        $this->setIfExists('rollups_count', $data ?? [], null);
        $this->setIfExists('smart_rollups_count', $data ?? [], null);
        $this->setIfExists('active_tokens_count', $data ?? [], null);
        $this->setIfExists('token_balances_count', $data ?? [], null);
        $this->setIfExists('token_transfers_count', $data ?? [], null);
        $this->setIfExists('active_tickets_count', $data ?? [], null);
        $this->setIfExists('ticket_balances_count', $data ?? [], null);
        $this->setIfExists('ticket_transfers_count', $data ?? [], null);
        $this->setIfExists('num_delegators', $data ?? [], null);
        $this->setIfExists('num_blocks', $data ?? [], null);
        $this->setIfExists('num_endorsements', $data ?? [], null);
        $this->setIfExists('num_preendorsements', $data ?? [], null);
        $this->setIfExists('num_ballots', $data ?? [], null);
        $this->setIfExists('num_proposals', $data ?? [], null);
        $this->setIfExists('num_activations', $data ?? [], null);
        $this->setIfExists('num_double_baking', $data ?? [], null);
        $this->setIfExists('num_double_endorsing', $data ?? [], null);
        $this->setIfExists('num_double_preendorsing', $data ?? [], null);
        $this->setIfExists('num_nonce_revelations', $data ?? [], null);
        $this->setIfExists('vdf_revelations_count', $data ?? [], null);
        $this->setIfExists('num_revelation_penalties', $data ?? [], null);
        $this->setIfExists('num_endorsing_rewards', $data ?? [], null);
        $this->setIfExists('num_delegations', $data ?? [], null);
        $this->setIfExists('num_originations', $data ?? [], null);
        $this->setIfExists('num_transactions', $data ?? [], null);
        $this->setIfExists('num_reveals', $data ?? [], null);
        $this->setIfExists('num_register_constants', $data ?? [], null);
        $this->setIfExists('num_set_deposits_limits', $data ?? [], null);
        $this->setIfExists('num_migrations', $data ?? [], null);
        $this->setIfExists('tx_rollup_origination_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_submit_batch_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_commit_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_return_bond_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_finalize_commitment_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_remove_commitment_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_rejection_count', $data ?? [], null);
        $this->setIfExists('tx_rollup_dispatch_tickets_count', $data ?? [], null);
        $this->setIfExists('transfer_ticket_count', $data ?? [], null);
        $this->setIfExists('increase_paid_storage_count', $data ?? [], null);
        $this->setIfExists('update_consensus_key_count', $data ?? [], null);
        $this->setIfExists('drain_delegate_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_add_messages_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_cement_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_execute_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_originate_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_publish_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_recover_bond_count', $data ?? [], null);
        $this->setIfExists('smart_rollup_refute_count', $data ?? [], null);
        $this->setIfExists('refutation_games_count', $data ?? [], null);
        $this->setIfExists('active_refutation_games_count', $data ?? [], null);
        $this->setIfExists('staking_ops_count', $data ?? [], null);
        $this->setIfExists('autostaking_ops_count', $data ?? [], null);
        $this->setIfExists('staking_updates_count', $data ?? [], null);
        $this->setIfExists('set_delegate_parameters_ops_count', $data ?? [], null);
        $this->setIfExists('dal_publish_commitment_ops_count', $data ?? [], null);
        $this->setIfExists('dal_entrapment_evidence_ops_count', $data ?? [], null);
        $this->setIfExists('dal_attestation_rewards_count', $data ?? [], null);
        $this->setIfExists('first_activity', $data ?? [], null);
        $this->setIfExists('first_activity_time', $data ?? [], null);
        $this->setIfExists('last_activity', $data ?? [], null);
        $this->setIfExists('last_activity_time', $data ?? [], null);
        $this->setIfExists('extras', $data ?? [], null);
        $this->setIfExists('software', $data ?? [], null);
        $this->setIfExists('lost_balance', $data ?? [], null);
        $this->setIfExists('frozen_deposit', $data ?? [], null);
        $this->setIfExists('frozen_deposits', $data ?? [], null);
        $this->setIfExists('frozen_rewards', $data ?? [], null);
        $this->setIfExists('frozen_fees', $data ?? [], null);
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
     * @param string|null $type Type of the account, `delegate` - account, registered as a delegate (baker)
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
     * @param string|null $address Public key hash of the delegate (baker)
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
     * Gets active
     *
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Delegation status (`true` - active, `false` - deactivated)
     *
     * @return $this
     */
    public function setActive(?bool $active): static
    {
        if (is_null($active)) {
            throw new InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

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
     * @param string|null $alias Name of the baking service
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
     * Gets public_key
     *
     * @return string|null
     */
    public function getPublicKey(): ?string
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param string|null $public_key Public key of the delegate (baker)
     *
     * @return $this
     */
    public function setPublicKey(?string $public_key): static
    {
        if (is_null($public_key)) {
            array_push($this->openAPINullablesSetToNull, 'public_key');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('public_key', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets revealed
     *
     * @return bool|null
     */
    public function getRevealed(): ?bool
    {
        return $this->container['revealed'];
    }

    /**
     * Sets revealed
     *
     * @param bool|null $revealed Public key revelation status. Unrevealed account can't send manager operation (transaction, origination etc.)
     *
     * @return $this
     */
    public function setRevealed(?bool $revealed): static
    {
        if (is_null($revealed)) {
            throw new InvalidArgumentException('non-nullable revealed cannot be null');
        }
        $this->container['revealed'] = $revealed;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return int|null
     */
    public function getBalance(): ?int
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param int|null $balance Total balance of the delegate (baker), including spendable and frozen funds (micro tez)
     *
     * @return $this
     */
    public function setBalance(?int $balance): static
    {
        if (is_null($balance)) {
            throw new InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

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
     * @param int|null $rollup_bonds Amount of tx rollup commitment bonds (micro tez)
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
     * @param int|null $smart_rollup_bonds Amount of smart rollup commitment bonds (micro tez)
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
     * Gets staked_balance
     *
     * @return int|null
     */
    public function getStakedBalance(): ?int
    {
        return $this->container['staked_balance'];
    }

    /**
     * Sets staked_balance
     *
     * @param int|null $staked_balance Amount staked from the own balance (micro tez). Like delegated amount, except for it is frozen and can be slashed.
     *
     * @return $this
     */
    public function setStakedBalance(?int $staked_balance): static
    {
        if (is_null($staked_balance)) {
            throw new InvalidArgumentException('non-nullable staked_balance cannot be null');
        }
        $this->container['staked_balance'] = $staked_balance;

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
     * @param int|null $unstaked_balance Amount that was unstaked, but not yet finalized (i.e. it is still frozen) (micro tez).
     *
     * @return $this
     */
    public function setUnstakedBalance(?int $unstaked_balance): static
    {
        if (is_null($unstaked_balance)) {
            throw new InvalidArgumentException('non-nullable unstaked_balance cannot be null');
        }
        $this->container['unstaked_balance'] = $unstaked_balance;

        return $this;
    }

    /**
     * Gets unstaked_baker
     *
     * @return \Tzkt\Model\DelegateAllOfUnstakedBaker|null
     */
    public function getUnstakedBaker(): ?\Tzkt\Model\DelegateAllOfUnstakedBaker
    {
        return $this->container['unstaked_baker'];
    }

    /**
     * Sets unstaked_baker
     *
     * @param \Tzkt\Model\DelegateAllOfUnstakedBaker|null $unstaked_baker unstaked_baker
     *
     * @return $this
     */
    public function setUnstakedBaker(?\Tzkt\Model\DelegateAllOfUnstakedBaker $unstaked_baker): static
    {
        if (is_null($unstaked_baker)) {
            array_push($this->openAPINullablesSetToNull, 'unstaked_baker');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unstaked_baker', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unstaked_baker'] = $unstaked_baker;

        return $this;
    }

    /**
     * Gets external_staked_balance
     *
     * @return int|null
     */
    public function getExternalStakedBalance(): ?int
    {
        return $this->container['external_staked_balance'];
    }

    /**
     * Sets external_staked_balance
     *
     * @param int|null $external_staked_balance Amount staked from external stakers (micro tez). Like delegated amount, except for it is frozen and can be slashed.
     *
     * @return $this
     */
    public function setExternalStakedBalance(?int $external_staked_balance): static
    {
        if (is_null($external_staked_balance)) {
            throw new InvalidArgumentException('non-nullable external_staked_balance cannot be null');
        }
        $this->container['external_staked_balance'] = $external_staked_balance;

        return $this;
    }

    /**
     * Gets external_unstaked_balance
     *
     * @return int|null
     */
    public function getExternalUnstakedBalance(): ?int
    {
        return $this->container['external_unstaked_balance'];
    }

    /**
     * Sets external_unstaked_balance
     *
     * @param int|null $external_unstaked_balance Amount that was unstaked by external stakers, but not yet finalized (i.e. it is still frozen) (micro tez).
     *
     * @return $this
     */
    public function setExternalUnstakedBalance(?int $external_unstaked_balance): static
    {
        if (is_null($external_unstaked_balance)) {
            throw new InvalidArgumentException('non-nullable external_unstaked_balance cannot be null');
        }
        $this->container['external_unstaked_balance'] = $external_unstaked_balance;

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
     * @param int|null $rounding_error Amount that was lost due to inconsistend rounding introduced in Oxford (micro tez).
     *
     * @return $this
     */
    public function setRoundingError(?int $rounding_error): static
    {
        if (is_null($rounding_error)) {
            throw new InvalidArgumentException('non-nullable rounding_error cannot be null');
        }
        $this->container['rounding_error'] = $rounding_error;

        return $this;
    }

    /**
     * Gets total_staked_balance
     *
     * @return int|null
     */
    public function getTotalStakedBalance(): ?int
    {
        return $this->container['total_staked_balance'];
    }

    /**
     * Sets total_staked_balance
     *
     * @param int|null $total_staked_balance Total staked balance, which is `stakedBalance + externalStakedBalance`.
     *
     * @return $this
     */
    public function setTotalStakedBalance(?int $total_staked_balance): static
    {
        if (is_null($total_staked_balance)) {
            throw new InvalidArgumentException('non-nullable total_staked_balance cannot be null');
        }
        $this->container['total_staked_balance'] = $total_staked_balance;

        return $this;
    }

    /**
     * Gets issued_pseudotokens
     *
     * @return string|null
     */
    public function getIssuedPseudotokens(): ?string
    {
        return $this->container['issued_pseudotokens'];
    }

    /**
     * Sets issued_pseudotokens
     *
     * @param string|null $issued_pseudotokens Total amount of issued \"pseudo-tokens\". These pseudotokens are used for unstaking.
     *
     * @return $this
     */
    public function setIssuedPseudotokens(?string $issued_pseudotokens): static
    {
        if (is_null($issued_pseudotokens)) {
            array_push($this->openAPINullablesSetToNull, 'issued_pseudotokens');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('issued_pseudotokens', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['issued_pseudotokens'] = $issued_pseudotokens;

        return $this;
    }

    /**
     * Gets stakers_count
     *
     * @return int|null
     */
    public function getStakersCount(): ?int
    {
        return $this->container['stakers_count'];
    }

    /**
     * Sets stakers_count
     *
     * @param int|null $stakers_count Number of external stakers.
     *
     * @return $this
     */
    public function setStakersCount(?int $stakers_count): static
    {
        if (is_null($stakers_count)) {
            throw new InvalidArgumentException('non-nullable stakers_count cannot be null');
        }
        $this->container['stakers_count'] = $stakers_count;

        return $this;
    }

    /**
     * Gets frozen_deposit_limit
     *
     * @return int|null
     */
    public function getFrozenDepositLimit(): ?int
    {
        return $this->container['frozen_deposit_limit'];
    }

    /**
     * Sets frozen_deposit_limit
     *
     * @param int|null $frozen_deposit_limit Configured max amount allowed to be locked as a security deposit (micro tez)
     *
     * @return $this
     */
    public function setFrozenDepositLimit(?int $frozen_deposit_limit): static
    {
        if (is_null($frozen_deposit_limit)) {
            array_push($this->openAPINullablesSetToNull, 'frozen_deposit_limit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('frozen_deposit_limit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['frozen_deposit_limit'] = $frozen_deposit_limit;

        return $this;
    }

    /**
     * Gets limit_of_staking_over_baking
     *
     * @return int|null
     */
    public function getLimitOfStakingOverBaking(): ?int
    {
        return $this->container['limit_of_staking_over_baking'];
    }

    /**
     * Sets limit_of_staking_over_baking
     *
     * @param int|null $limit_of_staking_over_baking This parameter determines the maximum portion (millionth) of external stake by stakers over the baker's own staked funds.
     *
     * @return $this
     */
    public function setLimitOfStakingOverBaking(?int $limit_of_staking_over_baking): static
    {
        if (is_null($limit_of_staking_over_baking)) {
            array_push($this->openAPINullablesSetToNull, 'limit_of_staking_over_baking');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('limit_of_staking_over_baking', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['limit_of_staking_over_baking'] = $limit_of_staking_over_baking;

        return $this;
    }

    /**
     * Gets edge_of_baking_over_staking
     *
     * @return int|null
     */
    public function getEdgeOfBakingOverStaking(): ?int
    {
        return $this->container['edge_of_baking_over_staking'];
    }

    /**
     * Sets edge_of_baking_over_staking
     *
     * @param int|null $edge_of_baking_over_staking This parameter determines the fraction (billionth) of the rewards that accrue to the baker's liquid spendable balance — the remainder accrues to frozen stakes.
     *
     * @return $this
     */
    public function setEdgeOfBakingOverStaking(?int $edge_of_baking_over_staking): static
    {
        if (is_null($edge_of_baking_over_staking)) {
            array_push($this->openAPINullablesSetToNull, 'edge_of_baking_over_staking');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('edge_of_baking_over_staking', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['edge_of_baking_over_staking'] = $edge_of_baking_over_staking;

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
     * Gets activation_level
     *
     * @return int|null
     */
    public function getActivationLevel(): ?int
    {
        return $this->container['activation_level'];
    }

    /**
     * Sets activation_level
     *
     * @param int|null $activation_level Block height when delegate (baker) was registered as a baker last time
     *
     * @return $this
     */
    public function setActivationLevel(?int $activation_level): static
    {
        if (is_null($activation_level)) {
            throw new InvalidArgumentException('non-nullable activation_level cannot be null');
        }
        $this->container['activation_level'] = $activation_level;

        return $this;
    }

    /**
     * Gets activation_time
     *
     * @return \DateTime|null
     */
    public function getActivationTime(): ?\DateTime
    {
        return $this->container['activation_time'];
    }

    /**
     * Sets activation_time
     *
     * @param \DateTime|null $activation_time Block datetime when delegate (baker) was registered as a baker last time (ISO 8601, e.g. 2019-11-31)
     *
     * @return $this
     */
    public function setActivationTime(?\DateTime $activation_time): static
    {
        if (is_null($activation_time)) {
            throw new InvalidArgumentException('non-nullable activation_time cannot be null');
        }
        $this->container['activation_time'] = $activation_time;

        return $this;
    }

    /**
     * Gets deactivation_level
     *
     * @return int|null
     */
    public function getDeactivationLevel(): ?int
    {
        return $this->container['deactivation_level'];
    }

    /**
     * Sets deactivation_level
     *
     * @param int|null $deactivation_level Block height when delegate (baker) was deactivated as a baker because of lack of funds or inactivity
     *
     * @return $this
     */
    public function setDeactivationLevel(?int $deactivation_level): static
    {
        if (is_null($deactivation_level)) {
            array_push($this->openAPINullablesSetToNull, 'deactivation_level');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deactivation_level', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deactivation_level'] = $deactivation_level;

        return $this;
    }

    /**
     * Gets deactivation_time
     *
     * @return \DateTime|null
     */
    public function getDeactivationTime(): ?\DateTime
    {
        return $this->container['deactivation_time'];
    }

    /**
     * Sets deactivation_time
     *
     * @param \DateTime|null $deactivation_time Block datetime when delegate (baker) was deactivated as a baker because of lack of funds or inactivity (ISO 8601, e.g. 2019-11-31)
     *
     * @return $this
     */
    public function setDeactivationTime(?\DateTime $deactivation_time): static
    {
        if (is_null($deactivation_time)) {
            array_push($this->openAPINullablesSetToNull, 'deactivation_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deactivation_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deactivation_time'] = $deactivation_time;

        return $this;
    }

    /**
     * Gets staking_balance
     *
     * @return int|null
     */
    public function getStakingBalance(): ?int
    {
        return $this->container['staking_balance'];
    }

    /**
     * Sets staking_balance
     *
     * @param int|null $staking_balance Baker's own balance plus delegated balance (micro tez)
     *
     * @return $this
     */
    public function setStakingBalance(?int $staking_balance): static
    {
        if (is_null($staking_balance)) {
            throw new InvalidArgumentException('non-nullable staking_balance cannot be null');
        }
        $this->container['staking_balance'] = $staking_balance;

        return $this;
    }

    /**
     * Gets delegated_balance
     *
     * @return int|null
     */
    public function getDelegatedBalance(): ?int
    {
        return $this->container['delegated_balance'];
    }

    /**
     * Sets delegated_balance
     *
     * @param int|null $delegated_balance Total amount delegated to the baker (micro tez)
     *
     * @return $this
     */
    public function setDelegatedBalance(?int $delegated_balance): static
    {
        if (is_null($delegated_balance)) {
            throw new InvalidArgumentException('non-nullable delegated_balance cannot be null');
        }
        $this->container['delegated_balance'] = $delegated_balance;

        return $this;
    }

    /**
     * Gets num_contracts
     *
     * @return int|null
     */
    public function getNumContracts(): ?int
    {
        return $this->container['num_contracts'];
    }

    /**
     * Sets num_contracts
     *
     * @param int|null $num_contracts Number of contracts, created (originated) and/or managed by the delegate (baker)
     *
     * @return $this
     */
    public function setNumContracts(?int $num_contracts): static
    {
        if (is_null($num_contracts)) {
            throw new InvalidArgumentException('non-nullable num_contracts cannot be null');
        }
        $this->container['num_contracts'] = $num_contracts;

        return $this;
    }

    /**
     * Gets rollups_count
     *
     * @return int|null
     */
    public function getRollupsCount(): ?int
    {
        return $this->container['rollups_count'];
    }

    /**
     * Sets rollups_count
     *
     * @param int|null $rollups_count Number of tx rollups, created (originated) by the account
     *
     * @return $this
     */
    public function setRollupsCount(?int $rollups_count): static
    {
        if (is_null($rollups_count)) {
            throw new InvalidArgumentException('non-nullable rollups_count cannot be null');
        }
        $this->container['rollups_count'] = $rollups_count;

        return $this;
    }

    /**
     * Gets smart_rollups_count
     *
     * @return int|null
     */
    public function getSmartRollupsCount(): ?int
    {
        return $this->container['smart_rollups_count'];
    }

    /**
     * Sets smart_rollups_count
     *
     * @param int|null $smart_rollups_count Number of smart rollups, created (originated) by the account
     *
     * @return $this
     */
    public function setSmartRollupsCount(?int $smart_rollups_count): static
    {
        if (is_null($smart_rollups_count)) {
            throw new InvalidArgumentException('non-nullable smart_rollups_count cannot be null');
        }
        $this->container['smart_rollups_count'] = $smart_rollups_count;

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
     * Gets num_delegators
     *
     * @return int|null
     */
    public function getNumDelegators(): ?int
    {
        return $this->container['num_delegators'];
    }

    /**
     * Sets num_delegators
     *
     * @param int|null $num_delegators Number of current delegators (accounts, delegated their funds) of the delegate (baker)
     *
     * @return $this
     */
    public function setNumDelegators(?int $num_delegators): static
    {
        if (is_null($num_delegators)) {
            throw new InvalidArgumentException('non-nullable num_delegators cannot be null');
        }
        $this->container['num_delegators'] = $num_delegators;

        return $this;
    }

    /**
     * Gets num_blocks
     *
     * @return int|null
     */
    public function getNumBlocks(): ?int
    {
        return $this->container['num_blocks'];
    }

    /**
     * Sets num_blocks
     *
     * @param int|null $num_blocks Number of baked (validated) blocks all the time by the delegate (baker)
     *
     * @return $this
     */
    public function setNumBlocks(?int $num_blocks): static
    {
        if (is_null($num_blocks)) {
            throw new InvalidArgumentException('non-nullable num_blocks cannot be null');
        }
        $this->container['num_blocks'] = $num_blocks;

        return $this;
    }

    /**
     * Gets num_endorsements
     *
     * @return int|null
     */
    public function getNumEndorsements(): ?int
    {
        return $this->container['num_endorsements'];
    }

    /**
     * Sets num_endorsements
     *
     * @param int|null $num_endorsements Number of given endorsements (approvals) by the delegate (baker)
     *
     * @return $this
     */
    public function setNumEndorsements(?int $num_endorsements): static
    {
        if (is_null($num_endorsements)) {
            throw new InvalidArgumentException('non-nullable num_endorsements cannot be null');
        }
        $this->container['num_endorsements'] = $num_endorsements;

        return $this;
    }

    /**
     * Gets num_preendorsements
     *
     * @return int|null
     */
    public function getNumPreendorsements(): ?int
    {
        return $this->container['num_preendorsements'];
    }

    /**
     * Sets num_preendorsements
     *
     * @param int|null $num_preendorsements Number of given preendorsements (approvals) by the delegate (baker)
     *
     * @return $this
     */
    public function setNumPreendorsements(?int $num_preendorsements): static
    {
        if (is_null($num_preendorsements)) {
            throw new InvalidArgumentException('non-nullable num_preendorsements cannot be null');
        }
        $this->container['num_preendorsements'] = $num_preendorsements;

        return $this;
    }

    /**
     * Gets num_ballots
     *
     * @return int|null
     */
    public function getNumBallots(): ?int
    {
        return $this->container['num_ballots'];
    }

    /**
     * Sets num_ballots
     *
     * @param int|null $num_ballots Number of submitted by the delegate ballots during a voting period
     *
     * @return $this
     */
    public function setNumBallots(?int $num_ballots): static
    {
        if (is_null($num_ballots)) {
            throw new InvalidArgumentException('non-nullable num_ballots cannot be null');
        }
        $this->container['num_ballots'] = $num_ballots;

        return $this;
    }

    /**
     * Gets num_proposals
     *
     * @return int|null
     */
    public function getNumProposals(): ?int
    {
        return $this->container['num_proposals'];
    }

    /**
     * Sets num_proposals
     *
     * @param int|null $num_proposals Number of submitted (upvoted) by the delegate proposals during a proposal period
     *
     * @return $this
     */
    public function setNumProposals(?int $num_proposals): static
    {
        if (is_null($num_proposals)) {
            throw new InvalidArgumentException('non-nullable num_proposals cannot be null');
        }
        $this->container['num_proposals'] = $num_proposals;

        return $this;
    }

    /**
     * Gets num_activations
     *
     * @return int|null
     */
    public function getNumActivations(): ?int
    {
        return $this->container['num_activations'];
    }

    /**
     * Sets num_activations
     *
     * @param int|null $num_activations Number of account activation operations. Are used to activate accounts that were recommended allocations of tezos tokens for donations to the Tezos Foundation’s fundraiser
     *
     * @return $this
     */
    public function setNumActivations(?int $num_activations): static
    {
        if (is_null($num_activations)) {
            throw new InvalidArgumentException('non-nullable num_activations cannot be null');
        }
        $this->container['num_activations'] = $num_activations;

        return $this;
    }

    /**
     * Gets num_double_baking
     *
     * @return int|null
     */
    public function getNumDoubleBaking(): ?int
    {
        return $this->container['num_double_baking'];
    }

    /**
     * Sets num_double_baking
     *
     * @param int|null $num_double_baking Number of double baking (baking two different blocks at the same height) evidence operations, included in blocks, baked (validated) by the delegate
     *
     * @return $this
     */
    public function setNumDoubleBaking(?int $num_double_baking): static
    {
        if (is_null($num_double_baking)) {
            throw new InvalidArgumentException('non-nullable num_double_baking cannot be null');
        }
        $this->container['num_double_baking'] = $num_double_baking;

        return $this;
    }

    /**
     * Gets num_double_endorsing
     *
     * @return int|null
     */
    public function getNumDoubleEndorsing(): ?int
    {
        return $this->container['num_double_endorsing'];
    }

    /**
     * Sets num_double_endorsing
     *
     * @param int|null $num_double_endorsing Number of double endorsement (endorsing two different blocks at the same block height) evidence operations, included in blocks, baked (validated) by the delegate
     *
     * @return $this
     */
    public function setNumDoubleEndorsing(?int $num_double_endorsing): static
    {
        if (is_null($num_double_endorsing)) {
            throw new InvalidArgumentException('non-nullable num_double_endorsing cannot be null');
        }
        $this->container['num_double_endorsing'] = $num_double_endorsing;

        return $this;
    }

    /**
     * Gets num_double_preendorsing
     *
     * @return int|null
     */
    public function getNumDoublePreendorsing(): ?int
    {
        return $this->container['num_double_preendorsing'];
    }

    /**
     * Sets num_double_preendorsing
     *
     * @param int|null $num_double_preendorsing Number of double preendorsement (preendorsing two different blocks at the same block height) evidence operations, included in blocks, baked (validated) by the delegate
     *
     * @return $this
     */
    public function setNumDoublePreendorsing(?int $num_double_preendorsing): static
    {
        if (is_null($num_double_preendorsing)) {
            throw new InvalidArgumentException('non-nullable num_double_preendorsing cannot be null');
        }
        $this->container['num_double_preendorsing'] = $num_double_preendorsing;

        return $this;
    }

    /**
     * Gets num_nonce_revelations
     *
     * @return int|null
     */
    public function getNumNonceRevelations(): ?int
    {
        return $this->container['num_nonce_revelations'];
    }

    /**
     * Sets num_nonce_revelations
     *
     * @param int|null $num_nonce_revelations Number of seed nonce revelation (are used by the blockchain to create randomness) operations provided by the delegate
     *
     * @return $this
     */
    public function setNumNonceRevelations(?int $num_nonce_revelations): static
    {
        if (is_null($num_nonce_revelations)) {
            throw new InvalidArgumentException('non-nullable num_nonce_revelations cannot be null');
        }
        $this->container['num_nonce_revelations'] = $num_nonce_revelations;

        return $this;
    }

    /**
     * Gets vdf_revelations_count
     *
     * @return int|null
     */
    public function getVdfRevelationsCount(): ?int
    {
        return $this->container['vdf_revelations_count'];
    }

    /**
     * Sets vdf_revelations_count
     *
     * @param int|null $vdf_revelations_count Number of `vdf_revelation` operations included into blocks by the delegate
     *
     * @return $this
     */
    public function setVdfRevelationsCount(?int $vdf_revelations_count): static
    {
        if (is_null($vdf_revelations_count)) {
            throw new InvalidArgumentException('non-nullable vdf_revelations_count cannot be null');
        }
        $this->container['vdf_revelations_count'] = $vdf_revelations_count;

        return $this;
    }

    /**
     * Gets num_revelation_penalties
     *
     * @return int|null
     */
    public function getNumRevelationPenalties(): ?int
    {
        return $this->container['num_revelation_penalties'];
    }

    /**
     * Sets num_revelation_penalties
     *
     * @param int|null $num_revelation_penalties Number of operations for all time in which rewards were lost due to unrevealed seed nonces by the delegate (synthetic type)
     *
     * @return $this
     */
    public function setNumRevelationPenalties(?int $num_revelation_penalties): static
    {
        if (is_null($num_revelation_penalties)) {
            throw new InvalidArgumentException('non-nullable num_revelation_penalties cannot be null');
        }
        $this->container['num_revelation_penalties'] = $num_revelation_penalties;

        return $this;
    }

    /**
     * Gets num_endorsing_rewards
     *
     * @return int|null
     */
    public function getNumEndorsingRewards(): ?int
    {
        return $this->container['num_endorsing_rewards'];
    }

    /**
     * Sets num_endorsing_rewards
     *
     * @param int|null $num_endorsing_rewards Number of endorsing rewards received at the end of cycles (synthetic type)
     *
     * @return $this
     */
    public function setNumEndorsingRewards(?int $num_endorsing_rewards): static
    {
        if (is_null($num_endorsing_rewards)) {
            throw new InvalidArgumentException('non-nullable num_endorsing_rewards cannot be null');
        }
        $this->container['num_endorsing_rewards'] = $num_endorsing_rewards;

        return $this;
    }

    /**
     * Gets num_delegations
     *
     * @return int|null
     */
    public function getNumDelegations(): ?int
    {
        return $this->container['num_delegations'];
    }

    /**
     * Sets num_delegations
     *
     * @param int|null $num_delegations Number of all delegation related operations (new delegator, left delegator, registration as a baker), related to the delegate (baker)
     *
     * @return $this
     */
    public function setNumDelegations(?int $num_delegations): static
    {
        if (is_null($num_delegations)) {
            throw new InvalidArgumentException('non-nullable num_delegations cannot be null');
        }
        $this->container['num_delegations'] = $num_delegations;

        return $this;
    }

    /**
     * Gets num_originations
     *
     * @return int|null
     */
    public function getNumOriginations(): ?int
    {
        return $this->container['num_originations'];
    }

    /**
     * Sets num_originations
     *
     * @param int|null $num_originations Number of all origination (deployment / contract creation) operations, related to the delegate (baker)
     *
     * @return $this
     */
    public function setNumOriginations(?int $num_originations): static
    {
        if (is_null($num_originations)) {
            throw new InvalidArgumentException('non-nullable num_originations cannot be null');
        }
        $this->container['num_originations'] = $num_originations;

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
     * @param int|null $num_transactions Number of all transaction (tez transfer) operations, related to the delegate (baker)
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
     * Gets num_reveals
     *
     * @return int|null
     */
    public function getNumReveals(): ?int
    {
        return $this->container['num_reveals'];
    }

    /**
     * Sets num_reveals
     *
     * @param int|null $num_reveals Number of reveal (is used to reveal the public key associated with an account) operations of the delegate (baker)
     *
     * @return $this
     */
    public function setNumReveals(?int $num_reveals): static
    {
        if (is_null($num_reveals)) {
            throw new InvalidArgumentException('non-nullable num_reveals cannot be null');
        }
        $this->container['num_reveals'] = $num_reveals;

        return $this;
    }

    /**
     * Gets num_register_constants
     *
     * @return int|null
     */
    public function getNumRegisterConstants(): ?int
    {
        return $this->container['num_register_constants'];
    }

    /**
     * Sets num_register_constants
     *
     * @param int|null $num_register_constants Number of register global constant operations sent by the baker
     *
     * @return $this
     */
    public function setNumRegisterConstants(?int $num_register_constants): static
    {
        if (is_null($num_register_constants)) {
            throw new InvalidArgumentException('non-nullable num_register_constants cannot be null');
        }
        $this->container['num_register_constants'] = $num_register_constants;

        return $this;
    }

    /**
     * Gets num_set_deposits_limits
     *
     * @return int|null
     */
    public function getNumSetDepositsLimits(): ?int
    {
        return $this->container['num_set_deposits_limits'];
    }

    /**
     * Sets num_set_deposits_limits
     *
     * @param int|null $num_set_deposits_limits Number of set deposits limit operations sent by the baker
     *
     * @return $this
     */
    public function setNumSetDepositsLimits(?int $num_set_deposits_limits): static
    {
        if (is_null($num_set_deposits_limits)) {
            throw new InvalidArgumentException('non-nullable num_set_deposits_limits cannot be null');
        }
        $this->container['num_set_deposits_limits'] = $num_set_deposits_limits;

        return $this;
    }

    /**
     * Gets num_migrations
     *
     * @return int|null
     */
    public function getNumMigrations(): ?int
    {
        return $this->container['num_migrations'];
    }

    /**
     * Sets num_migrations
     *
     * @param int|null $num_migrations Number of migration (result of the context (database) migration during a protocol update) operations, related to the delegate (synthetic type)
     *
     * @return $this
     */
    public function setNumMigrations(?int $num_migrations): static
    {
        if (is_null($num_migrations)) {
            throw new InvalidArgumentException('non-nullable num_migrations cannot be null');
        }
        $this->container['num_migrations'] = $num_migrations;

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
     * @param int|null $tx_rollup_origination_count Number of tx rollup origination operations sent by the account
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
     * @param int|null $tx_rollup_submit_batch_count Number of tx rollup submit batch operations sent by the account
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
     * @param int|null $tx_rollup_commit_count Number of tx rollup commit operations sent by the account
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
     * @param int|null $tx_rollup_return_bond_count Number of tx rollup return bond operations sent by the account
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
     * @param int|null $tx_rollup_finalize_commitment_count Number of tx rollup finalize commitment operations sent by the account
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
     * @param int|null $tx_rollup_remove_commitment_count Number of tx rollup remove commitment operations sent by the account
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
     * @param int|null $tx_rollup_rejection_count Number of tx rollup rejection operations sent by the account
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
     * @param int|null $tx_rollup_dispatch_tickets_count Number of tx rollup dispatch tickets operations sent by the account
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
     * @param int|null $transfer_ticket_count Number of transfer ticket operations sent by the account
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
     * Gets increase_paid_storage_count
     *
     * @return int|null
     */
    public function getIncreasePaidStorageCount(): ?int
    {
        return $this->container['increase_paid_storage_count'];
    }

    /**
     * Sets increase_paid_storage_count
     *
     * @param int|null $increase_paid_storage_count Number of `increase_paid_storage` operations sent by the account
     *
     * @return $this
     */
    public function setIncreasePaidStorageCount(?int $increase_paid_storage_count): static
    {
        if (is_null($increase_paid_storage_count)) {
            throw new InvalidArgumentException('non-nullable increase_paid_storage_count cannot be null');
        }
        $this->container['increase_paid_storage_count'] = $increase_paid_storage_count;

        return $this;
    }

    /**
     * Gets update_consensus_key_count
     *
     * @return int|null
     */
    public function getUpdateConsensusKeyCount(): ?int
    {
        return $this->container['update_consensus_key_count'];
    }

    /**
     * Sets update_consensus_key_count
     *
     * @param int|null $update_consensus_key_count Number of `update_consensus_key` operations sent by the account
     *
     * @return $this
     */
    public function setUpdateConsensusKeyCount(?int $update_consensus_key_count): static
    {
        if (is_null($update_consensus_key_count)) {
            throw new InvalidArgumentException('non-nullable update_consensus_key_count cannot be null');
        }
        $this->container['update_consensus_key_count'] = $update_consensus_key_count;

        return $this;
    }

    /**
     * Gets drain_delegate_count
     *
     * @return int|null
     */
    public function getDrainDelegateCount(): ?int
    {
        return $this->container['drain_delegate_count'];
    }

    /**
     * Sets drain_delegate_count
     *
     * @param int|null $drain_delegate_count Number of `drain_delegate` operations related to the account
     *
     * @return $this
     */
    public function setDrainDelegateCount(?int $drain_delegate_count): static
    {
        if (is_null($drain_delegate_count)) {
            throw new InvalidArgumentException('non-nullable drain_delegate_count cannot be null');
        }
        $this->container['drain_delegate_count'] = $drain_delegate_count;

        return $this;
    }

    /**
     * Gets smart_rollup_add_messages_count
     *
     * @return int|null
     */
    public function getSmartRollupAddMessagesCount(): ?int
    {
        return $this->container['smart_rollup_add_messages_count'];
    }

    /**
     * Sets smart_rollup_add_messages_count
     *
     * @param int|null $smart_rollup_add_messages_count Number of `smart_rollup_add_messages` operations related to the account
     *
     * @return $this
     */
    public function setSmartRollupAddMessagesCount(?int $smart_rollup_add_messages_count): static
    {
        if (is_null($smart_rollup_add_messages_count)) {
            throw new InvalidArgumentException('non-nullable smart_rollup_add_messages_count cannot be null');
        }
        $this->container['smart_rollup_add_messages_count'] = $smart_rollup_add_messages_count;

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
     * Gets staking_ops_count
     *
     * @return int|null
     */
    public function getStakingOpsCount(): ?int
    {
        return $this->container['staking_ops_count'];
    }

    /**
     * Sets staking_ops_count
     *
     * @param int|null $staking_ops_count Number of staking operations related to the account
     *
     * @return $this
     */
    public function setStakingOpsCount(?int $staking_ops_count): static
    {
        if (is_null($staking_ops_count)) {
            throw new InvalidArgumentException('non-nullable staking_ops_count cannot be null');
        }
        $this->container['staking_ops_count'] = $staking_ops_count;

        return $this;
    }

    /**
     * Gets autostaking_ops_count
     *
     * @return int|null
     */
    public function getAutostakingOpsCount(): ?int
    {
        return $this->container['autostaking_ops_count'];
    }

    /**
     * Sets autostaking_ops_count
     *
     * @param int|null $autostaking_ops_count Number of autostaking operations related to the account
     *
     * @return $this
     */
    public function setAutostakingOpsCount(?int $autostaking_ops_count): static
    {
        if (is_null($autostaking_ops_count)) {
            throw new InvalidArgumentException('non-nullable autostaking_ops_count cannot be null');
        }
        $this->container['autostaking_ops_count'] = $autostaking_ops_count;

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
     * @param int|null $staking_updates_count Number of staking updates related to the account
     *
     * @return $this
     */
    public function setStakingUpdatesCount(?int $staking_updates_count): static
    {
        if (is_null($staking_updates_count)) {
            throw new InvalidArgumentException('non-nullable staking_updates_count cannot be null');
        }
        $this->container['staking_updates_count'] = $staking_updates_count;

        return $this;
    }

    /**
     * Gets set_delegate_parameters_ops_count
     *
     * @return int|null
     */
    public function getSetDelegateParametersOpsCount(): ?int
    {
        return $this->container['set_delegate_parameters_ops_count'];
    }

    /**
     * Sets set_delegate_parameters_ops_count
     *
     * @param int|null $set_delegate_parameters_ops_count Number of set delegate parameters operations related to the account
     *
     * @return $this
     */
    public function setSetDelegateParametersOpsCount(?int $set_delegate_parameters_ops_count): static
    {
        if (is_null($set_delegate_parameters_ops_count)) {
            throw new InvalidArgumentException('non-nullable set_delegate_parameters_ops_count cannot be null');
        }
        $this->container['set_delegate_parameters_ops_count'] = $set_delegate_parameters_ops_count;

        return $this;
    }

    /**
     * Gets dal_publish_commitment_ops_count
     *
     * @return int|null
     */
    public function getDalPublishCommitmentOpsCount(): ?int
    {
        return $this->container['dal_publish_commitment_ops_count'];
    }

    /**
     * Sets dal_publish_commitment_ops_count
     *
     * @param int|null $dal_publish_commitment_ops_count Number of DAL publish commitment operations related to the account
     *
     * @return $this
     */
    public function setDalPublishCommitmentOpsCount(?int $dal_publish_commitment_ops_count): static
    {
        if (is_null($dal_publish_commitment_ops_count)) {
            throw new InvalidArgumentException('non-nullable dal_publish_commitment_ops_count cannot be null');
        }
        $this->container['dal_publish_commitment_ops_count'] = $dal_publish_commitment_ops_count;

        return $this;
    }

    /**
     * Gets dal_entrapment_evidence_ops_count
     *
     * @return int|null
     */
    public function getDalEntrapmentEvidenceOpsCount(): ?int
    {
        return $this->container['dal_entrapment_evidence_ops_count'];
    }

    /**
     * Sets dal_entrapment_evidence_ops_count
     *
     * @param int|null $dal_entrapment_evidence_ops_count Number of DAL entrapment evidences related to the account
     *
     * @return $this
     */
    public function setDalEntrapmentEvidenceOpsCount(?int $dal_entrapment_evidence_ops_count): static
    {
        if (is_null($dal_entrapment_evidence_ops_count)) {
            throw new InvalidArgumentException('non-nullable dal_entrapment_evidence_ops_count cannot be null');
        }
        $this->container['dal_entrapment_evidence_ops_count'] = $dal_entrapment_evidence_ops_count;

        return $this;
    }

    /**
     * Gets dal_attestation_rewards_count
     *
     * @return int|null
     */
    public function getDalAttestationRewardsCount(): ?int
    {
        return $this->container['dal_attestation_rewards_count'];
    }

    /**
     * Sets dal_attestation_rewards_count
     *
     * @param int|null $dal_attestation_rewards_count Number of DAL attestation rewards related to the account
     *
     * @return $this
     */
    public function setDalAttestationRewardsCount(?int $dal_attestation_rewards_count): static
    {
        if (is_null($dal_attestation_rewards_count)) {
            throw new InvalidArgumentException('non-nullable dal_attestation_rewards_count cannot be null');
        }
        $this->container['dal_attestation_rewards_count'] = $dal_attestation_rewards_count;

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
     * @param int|null $first_activity Block height of the first operation, related to the delegate (baker)
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
     * @param \DateTime|null $first_activity_time Block datetime of the first operation, related to the delegate (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
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
     * @param int|null $last_activity Height of the block in which the account state was changed last time
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
     * @param \DateTime|null $last_activity_time Datetime of the block in which the account state was changed last time (ISO 8601, e.g. `2020-02-20T02:40:57Z`)
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
     * Gets software
     *
     * @return \Tzkt\Model\DelegateAllOfSoftware|null
     */
    public function getSoftware(): ?\Tzkt\Model\DelegateAllOfSoftware
    {
        return $this->container['software'];
    }

    /**
     * Sets software
     *
     * @param \Tzkt\Model\DelegateAllOfSoftware|null $software software
     *
     * @return $this
     */
    public function setSoftware(?\Tzkt\Model\DelegateAllOfSoftware $software): static
    {
        if (is_null($software)) {
            array_push($this->openAPINullablesSetToNull, 'software');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('software', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['software'] = $software;

        return $this;
    }

    /**
     * Gets lost_balance
     *
     * @return int|null
     */
    public function getLostBalance(): ?int
    {
        return $this->container['lost_balance'];
    }

    /**
     * Sets lost_balance
     *
     * @param int|null $lost_balance [DEPRECATED]
     *
     * @return $this
     */
    public function setLostBalance(?int $lost_balance): static
    {
        if (is_null($lost_balance)) {
            throw new InvalidArgumentException('non-nullable lost_balance cannot be null');
        }
        $this->container['lost_balance'] = $lost_balance;

        return $this;
    }

    /**
     * Gets frozen_deposit
     *
     * @return int|null
     */
    public function getFrozenDeposit(): ?int
    {
        return $this->container['frozen_deposit'];
    }

    /**
     * Sets frozen_deposit
     *
     * @param int|null $frozen_deposit [DEPRECATED]
     *
     * @return $this
     */
    public function setFrozenDeposit(?int $frozen_deposit): static
    {
        if (is_null($frozen_deposit)) {
            throw new InvalidArgumentException('non-nullable frozen_deposit cannot be null');
        }
        $this->container['frozen_deposit'] = $frozen_deposit;

        return $this;
    }

    /**
     * Gets frozen_deposits
     *
     * @return int|null
     */
    public function getFrozenDeposits(): ?int
    {
        return $this->container['frozen_deposits'];
    }

    /**
     * Sets frozen_deposits
     *
     * @param int|null $frozen_deposits [DEPRECATED]
     *
     * @return $this
     */
    public function setFrozenDeposits(?int $frozen_deposits): static
    {
        if (is_null($frozen_deposits)) {
            throw new InvalidArgumentException('non-nullable frozen_deposits cannot be null');
        }
        $this->container['frozen_deposits'] = $frozen_deposits;

        return $this;
    }

    /**
     * Gets frozen_rewards
     *
     * @return int|null
     */
    public function getFrozenRewards(): ?int
    {
        return $this->container['frozen_rewards'];
    }

    /**
     * Sets frozen_rewards
     *
     * @param int|null $frozen_rewards [DEPRECATED]
     *
     * @return $this
     */
    public function setFrozenRewards(?int $frozen_rewards): static
    {
        if (is_null($frozen_rewards)) {
            throw new InvalidArgumentException('non-nullable frozen_rewards cannot be null');
        }
        $this->container['frozen_rewards'] = $frozen_rewards;

        return $this;
    }

    /**
     * Gets frozen_fees
     *
     * @return int|null
     */
    public function getFrozenFees(): ?int
    {
        return $this->container['frozen_fees'];
    }

    /**
     * Sets frozen_fees
     *
     * @param int|null $frozen_fees [DEPRECATED]
     *
     * @return $this
     */
    public function setFrozenFees(?int $frozen_fees): static
    {
        if (is_null($frozen_fees)) {
            throw new InvalidArgumentException('non-nullable frozen_fees cannot be null');
        }
        $this->container['frozen_fees'] = $frozen_fees;

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


