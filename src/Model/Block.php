<?php
/**
 * Block
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
 * Block Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Block implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Block';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'cycle' => 'int',
        'level' => 'int',
        'hash' => 'string',
        'timestamp' => '\DateTime',
        'proto' => 'int',
        'payload_round' => 'int',
        'block_round' => 'int',
        'validations' => 'int',
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
        'nonce_revealed' => 'bool',
        'proposer' => '\Tzkt\Model\BakingOperationAllOfProposer',
        'producer' => '\Tzkt\Model\BakingOperationAllOfProducer',
        'software' => '\Tzkt\Model\BlockSoftware',
        'lb_toggle' => 'bool',
        'lb_toggle_ema' => 'int',
        'ai_toggle' => 'bool',
        'ai_toggle_ema' => 'int',
        'endorsements' => '\Tzkt\Model\EndorsementOperation[]',
        'preendorsements' => '\Tzkt\Model\PreendorsementOperation[]',
        'proposals' => '\Tzkt\Model\ProposalOperation[]',
        'ballots' => '\Tzkt\Model\BallotOperation[]',
        'activations' => '\Tzkt\Model\ActivationOperation[]',
        'dal_entrapment_evidence_ops' => '\Tzkt\Model\DalEntrapmentEvidenceOperation[]',
        'double_baking' => '\Tzkt\Model\DoubleBakingOperation[]',
        'double_endorsing' => '\Tzkt\Model\DoubleEndorsingOperation[]',
        'double_preendorsing' => '\Tzkt\Model\DoublePreendorsingOperation[]',
        'nonce_revelations' => '\Tzkt\Model\NonceRevelationOperation[]',
        'vdf_revelations' => '\Tzkt\Model\VdfRevelationOperation[]',
        'delegations' => '\Tzkt\Model\DelegationOperation[]',
        'originations' => '\Tzkt\Model\OriginationOperation[]',
        'transactions' => '\Tzkt\Model\TransactionOperation[]',
        'reveals' => '\Tzkt\Model\RevealOperation[]',
        'register_constants' => '\Tzkt\Model\RegisterConstantOperation[]',
        'set_deposits_limits' => '\Tzkt\Model\SetDepositsLimitOperation[]',
        'transfer_ticket_ops' => '\Tzkt\Model\TransferTicketOperation[]',
        'tx_rollup_commit_ops' => '\Tzkt\Model\TxRollupCommitOperation[]',
        'tx_rollup_dispatch_tickets_ops' => '\Tzkt\Model\TxRollupDispatchTicketsOperation[]',
        'tx_rollup_finalize_commitment_ops' => '\Tzkt\Model\TxRollupFinalizeCommitmentOperation[]',
        'tx_rollup_origination_ops' => '\Tzkt\Model\TxRollupOriginationOperation[]',
        'tx_rollup_rejection_ops' => '\Tzkt\Model\TxRollupRejectionOperation[]',
        'tx_rollup_remove_commitment_ops' => '\Tzkt\Model\TxRollupRemoveCommitmentOperation[]',
        'tx_rollup_return_bond_ops' => '\Tzkt\Model\TxRollupReturnBondOperation[]',
        'tx_rollup_submit_batch_ops' => '\Tzkt\Model\TxRollupSubmitBatchOperation[]',
        'increase_paid_storage_ops' => '\Tzkt\Model\IncreasePaidStorageOperation[]',
        'update_consensus_key_ops' => '\Tzkt\Model\UpdateConsensusKeyOperation[]',
        'drain_delegate_ops' => '\Tzkt\Model\DrainDelegateOperation[]',
        'sr_add_messages_ops' => '\Tzkt\Model\SmartRollupAddMessagesOperation[]',
        'sr_cement_ops' => '\Tzkt\Model\SmartRollupCementOperation[]',
        'sr_execute_ops' => '\Tzkt\Model\SmartRollupExecuteOperation[]',
        'sr_originate_ops' => '\Tzkt\Model\SmartRollupOriginateOperation[]',
        'sr_publish_ops' => '\Tzkt\Model\SmartRollupPublishOperation[]',
        'sr_recover_bond_ops' => '\Tzkt\Model\SmartRollupRecoverBondOperation[]',
        'sr_refute_ops' => '\Tzkt\Model\SmartRollupRefuteOperation[]',
        'staking_ops' => '\Tzkt\Model\StakingOperation[]',
        'set_delegate_parameters_ops' => '\Tzkt\Model\SetDelegateParametersOperation[]',
        'dal_publish_commitment_ops' => '\Tzkt\Model\DalPublishCommitmentOperation[]',
        'migrations' => '\Tzkt\Model\MigrationOperation[]',
        'revelation_penalties' => '\Tzkt\Model\RevelationPenaltyOperation[]',
        'endorsing_rewards' => '\Tzkt\Model\EndorsingRewardOperation[]',
        'dal_attestation_rewards' => '\Tzkt\Model\DalAttestationRewardOperation[]',
        'autostaking_ops' => '\Tzkt\Model\AutostakingOperation[]',
        'quote' => '\Tzkt\Model\BlockQuote',
        'reward_liquid' => 'int',
        'bonus_liquid' => 'int',
        'reward' => 'int',
        'bonus' => 'int',
        'priority' => 'int',
        'baker' => '\Tzkt\Model\BakingOperationAllOfBaker',
        'lb_escape_vote' => 'bool',
        'lb_escape_ema' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'cycle' => 'int32',
        'level' => 'int32',
        'hash' => null,
        'timestamp' => 'date-time',
        'proto' => 'int32',
        'payload_round' => 'int32',
        'block_round' => 'int32',
        'validations' => 'int32',
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
        'nonce_revealed' => null,
        'proposer' => null,
        'producer' => null,
        'software' => null,
        'lb_toggle' => null,
        'lb_toggle_ema' => 'int32',
        'ai_toggle' => null,
        'ai_toggle_ema' => 'int32',
        'endorsements' => null,
        'preendorsements' => null,
        'proposals' => null,
        'ballots' => null,
        'activations' => null,
        'dal_entrapment_evidence_ops' => null,
        'double_baking' => null,
        'double_endorsing' => null,
        'double_preendorsing' => null,
        'nonce_revelations' => null,
        'vdf_revelations' => null,
        'delegations' => null,
        'originations' => null,
        'transactions' => null,
        'reveals' => null,
        'register_constants' => null,
        'set_deposits_limits' => null,
        'transfer_ticket_ops' => null,
        'tx_rollup_commit_ops' => null,
        'tx_rollup_dispatch_tickets_ops' => null,
        'tx_rollup_finalize_commitment_ops' => null,
        'tx_rollup_origination_ops' => null,
        'tx_rollup_rejection_ops' => null,
        'tx_rollup_remove_commitment_ops' => null,
        'tx_rollup_return_bond_ops' => null,
        'tx_rollup_submit_batch_ops' => null,
        'increase_paid_storage_ops' => null,
        'update_consensus_key_ops' => null,
        'drain_delegate_ops' => null,
        'sr_add_messages_ops' => null,
        'sr_cement_ops' => null,
        'sr_execute_ops' => null,
        'sr_originate_ops' => null,
        'sr_publish_ops' => null,
        'sr_recover_bond_ops' => null,
        'sr_refute_ops' => null,
        'staking_ops' => null,
        'set_delegate_parameters_ops' => null,
        'dal_publish_commitment_ops' => null,
        'migrations' => null,
        'revelation_penalties' => null,
        'endorsing_rewards' => null,
        'dal_attestation_rewards' => null,
        'autostaking_ops' => null,
        'quote' => null,
        'reward_liquid' => 'int64',
        'bonus_liquid' => 'int64',
        'reward' => 'int64',
        'bonus' => 'int64',
        'priority' => 'int32',
        'baker' => null,
        'lb_escape_vote' => null,
        'lb_escape_ema' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'cycle' => false,
        'level' => false,
        'hash' => true,
        'timestamp' => false,
        'proto' => false,
        'payload_round' => false,
        'block_round' => false,
        'validations' => false,
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
        'nonce_revealed' => false,
        'proposer' => true,
        'producer' => true,
        'software' => true,
        'lb_toggle' => true,
        'lb_toggle_ema' => false,
        'ai_toggle' => true,
        'ai_toggle_ema' => false,
        'endorsements' => true,
        'preendorsements' => true,
        'proposals' => true,
        'ballots' => true,
        'activations' => true,
        'dal_entrapment_evidence_ops' => true,
        'double_baking' => true,
        'double_endorsing' => true,
        'double_preendorsing' => true,
        'nonce_revelations' => true,
        'vdf_revelations' => true,
        'delegations' => true,
        'originations' => true,
        'transactions' => true,
        'reveals' => true,
        'register_constants' => true,
        'set_deposits_limits' => true,
        'transfer_ticket_ops' => true,
        'tx_rollup_commit_ops' => true,
        'tx_rollup_dispatch_tickets_ops' => true,
        'tx_rollup_finalize_commitment_ops' => true,
        'tx_rollup_origination_ops' => true,
        'tx_rollup_rejection_ops' => true,
        'tx_rollup_remove_commitment_ops' => true,
        'tx_rollup_return_bond_ops' => true,
        'tx_rollup_submit_batch_ops' => true,
        'increase_paid_storage_ops' => true,
        'update_consensus_key_ops' => true,
        'drain_delegate_ops' => true,
        'sr_add_messages_ops' => true,
        'sr_cement_ops' => true,
        'sr_execute_ops' => true,
        'sr_originate_ops' => true,
        'sr_publish_ops' => true,
        'sr_recover_bond_ops' => true,
        'sr_refute_ops' => true,
        'staking_ops' => true,
        'set_delegate_parameters_ops' => true,
        'dal_publish_commitment_ops' => true,
        'migrations' => true,
        'revelation_penalties' => true,
        'endorsing_rewards' => true,
        'dal_attestation_rewards' => true,
        'autostaking_ops' => true,
        'quote' => true,
        'reward_liquid' => false,
        'bonus_liquid' => false,
        'reward' => false,
        'bonus' => false,
        'priority' => false,
        'baker' => true,
        'lb_escape_vote' => false,
        'lb_escape_ema' => false
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
        'level' => 'level',
        'hash' => 'hash',
        'timestamp' => 'timestamp',
        'proto' => 'proto',
        'payload_round' => 'payloadRound',
        'block_round' => 'blockRound',
        'validations' => 'validations',
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
        'nonce_revealed' => 'nonceRevealed',
        'proposer' => 'proposer',
        'producer' => 'producer',
        'software' => 'software',
        'lb_toggle' => 'lbToggle',
        'lb_toggle_ema' => 'lbToggleEma',
        'ai_toggle' => 'aiToggle',
        'ai_toggle_ema' => 'aiToggleEma',
        'endorsements' => 'endorsements',
        'preendorsements' => 'preendorsements',
        'proposals' => 'proposals',
        'ballots' => 'ballots',
        'activations' => 'activations',
        'dal_entrapment_evidence_ops' => 'dalEntrapmentEvidenceOps',
        'double_baking' => 'doubleBaking',
        'double_endorsing' => 'doubleEndorsing',
        'double_preendorsing' => 'doublePreendorsing',
        'nonce_revelations' => 'nonceRevelations',
        'vdf_revelations' => 'vdfRevelations',
        'delegations' => 'delegations',
        'originations' => 'originations',
        'transactions' => 'transactions',
        'reveals' => 'reveals',
        'register_constants' => 'registerConstants',
        'set_deposits_limits' => 'setDepositsLimits',
        'transfer_ticket_ops' => 'transferTicketOps',
        'tx_rollup_commit_ops' => 'txRollupCommitOps',
        'tx_rollup_dispatch_tickets_ops' => 'txRollupDispatchTicketsOps',
        'tx_rollup_finalize_commitment_ops' => 'txRollupFinalizeCommitmentOps',
        'tx_rollup_origination_ops' => 'txRollupOriginationOps',
        'tx_rollup_rejection_ops' => 'txRollupRejectionOps',
        'tx_rollup_remove_commitment_ops' => 'txRollupRemoveCommitmentOps',
        'tx_rollup_return_bond_ops' => 'txRollupReturnBondOps',
        'tx_rollup_submit_batch_ops' => 'txRollupSubmitBatchOps',
        'increase_paid_storage_ops' => 'increasePaidStorageOps',
        'update_consensus_key_ops' => 'updateConsensusKeyOps',
        'drain_delegate_ops' => 'drainDelegateOps',
        'sr_add_messages_ops' => 'srAddMessagesOps',
        'sr_cement_ops' => 'srCementOps',
        'sr_execute_ops' => 'srExecuteOps',
        'sr_originate_ops' => 'srOriginateOps',
        'sr_publish_ops' => 'srPublishOps',
        'sr_recover_bond_ops' => 'srRecoverBondOps',
        'sr_refute_ops' => 'srRefuteOps',
        'staking_ops' => 'stakingOps',
        'set_delegate_parameters_ops' => 'setDelegateParametersOps',
        'dal_publish_commitment_ops' => 'dalPublishCommitmentOps',
        'migrations' => 'migrations',
        'revelation_penalties' => 'revelationPenalties',
        'endorsing_rewards' => 'endorsingRewards',
        'dal_attestation_rewards' => 'dalAttestationRewards',
        'autostaking_ops' => 'autostakingOps',
        'quote' => 'quote',
        'reward_liquid' => 'rewardLiquid',
        'bonus_liquid' => 'bonusLiquid',
        'reward' => 'reward',
        'bonus' => 'bonus',
        'priority' => 'priority',
        'baker' => 'baker',
        'lb_escape_vote' => 'lbEscapeVote',
        'lb_escape_ema' => 'lbEscapeEma'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'cycle' => 'setCycle',
        'level' => 'setLevel',
        'hash' => 'setHash',
        'timestamp' => 'setTimestamp',
        'proto' => 'setProto',
        'payload_round' => 'setPayloadRound',
        'block_round' => 'setBlockRound',
        'validations' => 'setValidations',
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
        'nonce_revealed' => 'setNonceRevealed',
        'proposer' => 'setProposer',
        'producer' => 'setProducer',
        'software' => 'setSoftware',
        'lb_toggle' => 'setLbToggle',
        'lb_toggle_ema' => 'setLbToggleEma',
        'ai_toggle' => 'setAiToggle',
        'ai_toggle_ema' => 'setAiToggleEma',
        'endorsements' => 'setEndorsements',
        'preendorsements' => 'setPreendorsements',
        'proposals' => 'setProposals',
        'ballots' => 'setBallots',
        'activations' => 'setActivations',
        'dal_entrapment_evidence_ops' => 'setDalEntrapmentEvidenceOps',
        'double_baking' => 'setDoubleBaking',
        'double_endorsing' => 'setDoubleEndorsing',
        'double_preendorsing' => 'setDoublePreendorsing',
        'nonce_revelations' => 'setNonceRevelations',
        'vdf_revelations' => 'setVdfRevelations',
        'delegations' => 'setDelegations',
        'originations' => 'setOriginations',
        'transactions' => 'setTransactions',
        'reveals' => 'setReveals',
        'register_constants' => 'setRegisterConstants',
        'set_deposits_limits' => 'setSetDepositsLimits',
        'transfer_ticket_ops' => 'setTransferTicketOps',
        'tx_rollup_commit_ops' => 'setTxRollupCommitOps',
        'tx_rollup_dispatch_tickets_ops' => 'setTxRollupDispatchTicketsOps',
        'tx_rollup_finalize_commitment_ops' => 'setTxRollupFinalizeCommitmentOps',
        'tx_rollup_origination_ops' => 'setTxRollupOriginationOps',
        'tx_rollup_rejection_ops' => 'setTxRollupRejectionOps',
        'tx_rollup_remove_commitment_ops' => 'setTxRollupRemoveCommitmentOps',
        'tx_rollup_return_bond_ops' => 'setTxRollupReturnBondOps',
        'tx_rollup_submit_batch_ops' => 'setTxRollupSubmitBatchOps',
        'increase_paid_storage_ops' => 'setIncreasePaidStorageOps',
        'update_consensus_key_ops' => 'setUpdateConsensusKeyOps',
        'drain_delegate_ops' => 'setDrainDelegateOps',
        'sr_add_messages_ops' => 'setSrAddMessagesOps',
        'sr_cement_ops' => 'setSrCementOps',
        'sr_execute_ops' => 'setSrExecuteOps',
        'sr_originate_ops' => 'setSrOriginateOps',
        'sr_publish_ops' => 'setSrPublishOps',
        'sr_recover_bond_ops' => 'setSrRecoverBondOps',
        'sr_refute_ops' => 'setSrRefuteOps',
        'staking_ops' => 'setStakingOps',
        'set_delegate_parameters_ops' => 'setSetDelegateParametersOps',
        'dal_publish_commitment_ops' => 'setDalPublishCommitmentOps',
        'migrations' => 'setMigrations',
        'revelation_penalties' => 'setRevelationPenalties',
        'endorsing_rewards' => 'setEndorsingRewards',
        'dal_attestation_rewards' => 'setDalAttestationRewards',
        'autostaking_ops' => 'setAutostakingOps',
        'quote' => 'setQuote',
        'reward_liquid' => 'setRewardLiquid',
        'bonus_liquid' => 'setBonusLiquid',
        'reward' => 'setReward',
        'bonus' => 'setBonus',
        'priority' => 'setPriority',
        'baker' => 'setBaker',
        'lb_escape_vote' => 'setLbEscapeVote',
        'lb_escape_ema' => 'setLbEscapeEma'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'cycle' => 'getCycle',
        'level' => 'getLevel',
        'hash' => 'getHash',
        'timestamp' => 'getTimestamp',
        'proto' => 'getProto',
        'payload_round' => 'getPayloadRound',
        'block_round' => 'getBlockRound',
        'validations' => 'getValidations',
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
        'nonce_revealed' => 'getNonceRevealed',
        'proposer' => 'getProposer',
        'producer' => 'getProducer',
        'software' => 'getSoftware',
        'lb_toggle' => 'getLbToggle',
        'lb_toggle_ema' => 'getLbToggleEma',
        'ai_toggle' => 'getAiToggle',
        'ai_toggle_ema' => 'getAiToggleEma',
        'endorsements' => 'getEndorsements',
        'preendorsements' => 'getPreendorsements',
        'proposals' => 'getProposals',
        'ballots' => 'getBallots',
        'activations' => 'getActivations',
        'dal_entrapment_evidence_ops' => 'getDalEntrapmentEvidenceOps',
        'double_baking' => 'getDoubleBaking',
        'double_endorsing' => 'getDoubleEndorsing',
        'double_preendorsing' => 'getDoublePreendorsing',
        'nonce_revelations' => 'getNonceRevelations',
        'vdf_revelations' => 'getVdfRevelations',
        'delegations' => 'getDelegations',
        'originations' => 'getOriginations',
        'transactions' => 'getTransactions',
        'reveals' => 'getReveals',
        'register_constants' => 'getRegisterConstants',
        'set_deposits_limits' => 'getSetDepositsLimits',
        'transfer_ticket_ops' => 'getTransferTicketOps',
        'tx_rollup_commit_ops' => 'getTxRollupCommitOps',
        'tx_rollup_dispatch_tickets_ops' => 'getTxRollupDispatchTicketsOps',
        'tx_rollup_finalize_commitment_ops' => 'getTxRollupFinalizeCommitmentOps',
        'tx_rollup_origination_ops' => 'getTxRollupOriginationOps',
        'tx_rollup_rejection_ops' => 'getTxRollupRejectionOps',
        'tx_rollup_remove_commitment_ops' => 'getTxRollupRemoveCommitmentOps',
        'tx_rollup_return_bond_ops' => 'getTxRollupReturnBondOps',
        'tx_rollup_submit_batch_ops' => 'getTxRollupSubmitBatchOps',
        'increase_paid_storage_ops' => 'getIncreasePaidStorageOps',
        'update_consensus_key_ops' => 'getUpdateConsensusKeyOps',
        'drain_delegate_ops' => 'getDrainDelegateOps',
        'sr_add_messages_ops' => 'getSrAddMessagesOps',
        'sr_cement_ops' => 'getSrCementOps',
        'sr_execute_ops' => 'getSrExecuteOps',
        'sr_originate_ops' => 'getSrOriginateOps',
        'sr_publish_ops' => 'getSrPublishOps',
        'sr_recover_bond_ops' => 'getSrRecoverBondOps',
        'sr_refute_ops' => 'getSrRefuteOps',
        'staking_ops' => 'getStakingOps',
        'set_delegate_parameters_ops' => 'getSetDelegateParametersOps',
        'dal_publish_commitment_ops' => 'getDalPublishCommitmentOps',
        'migrations' => 'getMigrations',
        'revelation_penalties' => 'getRevelationPenalties',
        'endorsing_rewards' => 'getEndorsingRewards',
        'dal_attestation_rewards' => 'getDalAttestationRewards',
        'autostaking_ops' => 'getAutostakingOps',
        'quote' => 'getQuote',
        'reward_liquid' => 'getRewardLiquid',
        'bonus_liquid' => 'getBonusLiquid',
        'reward' => 'getReward',
        'bonus' => 'getBonus',
        'priority' => 'getPriority',
        'baker' => 'getBaker',
        'lb_escape_vote' => 'getLbEscapeVote',
        'lb_escape_ema' => 'getLbEscapeEma'
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
        $this->setIfExists('level', $data ?? [], null);
        $this->setIfExists('hash', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('proto', $data ?? [], null);
        $this->setIfExists('payload_round', $data ?? [], null);
        $this->setIfExists('block_round', $data ?? [], null);
        $this->setIfExists('validations', $data ?? [], null);
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
        $this->setIfExists('nonce_revealed', $data ?? [], null);
        $this->setIfExists('proposer', $data ?? [], null);
        $this->setIfExists('producer', $data ?? [], null);
        $this->setIfExists('software', $data ?? [], null);
        $this->setIfExists('lb_toggle', $data ?? [], null);
        $this->setIfExists('lb_toggle_ema', $data ?? [], null);
        $this->setIfExists('ai_toggle', $data ?? [], null);
        $this->setIfExists('ai_toggle_ema', $data ?? [], null);
        $this->setIfExists('endorsements', $data ?? [], null);
        $this->setIfExists('preendorsements', $data ?? [], null);
        $this->setIfExists('proposals', $data ?? [], null);
        $this->setIfExists('ballots', $data ?? [], null);
        $this->setIfExists('activations', $data ?? [], null);
        $this->setIfExists('dal_entrapment_evidence_ops', $data ?? [], null);
        $this->setIfExists('double_baking', $data ?? [], null);
        $this->setIfExists('double_endorsing', $data ?? [], null);
        $this->setIfExists('double_preendorsing', $data ?? [], null);
        $this->setIfExists('nonce_revelations', $data ?? [], null);
        $this->setIfExists('vdf_revelations', $data ?? [], null);
        $this->setIfExists('delegations', $data ?? [], null);
        $this->setIfExists('originations', $data ?? [], null);
        $this->setIfExists('transactions', $data ?? [], null);
        $this->setIfExists('reveals', $data ?? [], null);
        $this->setIfExists('register_constants', $data ?? [], null);
        $this->setIfExists('set_deposits_limits', $data ?? [], null);
        $this->setIfExists('transfer_ticket_ops', $data ?? [], null);
        $this->setIfExists('tx_rollup_commit_ops', $data ?? [], null);
        $this->setIfExists('tx_rollup_dispatch_tickets_ops', $data ?? [], null);
        $this->setIfExists('tx_rollup_finalize_commitment_ops', $data ?? [], null);
        $this->setIfExists('tx_rollup_origination_ops', $data ?? [], null);
        $this->setIfExists('tx_rollup_rejection_ops', $data ?? [], null);
        $this->setIfExists('tx_rollup_remove_commitment_ops', $data ?? [], null);
        $this->setIfExists('tx_rollup_return_bond_ops', $data ?? [], null);
        $this->setIfExists('tx_rollup_submit_batch_ops', $data ?? [], null);
        $this->setIfExists('increase_paid_storage_ops', $data ?? [], null);
        $this->setIfExists('update_consensus_key_ops', $data ?? [], null);
        $this->setIfExists('drain_delegate_ops', $data ?? [], null);
        $this->setIfExists('sr_add_messages_ops', $data ?? [], null);
        $this->setIfExists('sr_cement_ops', $data ?? [], null);
        $this->setIfExists('sr_execute_ops', $data ?? [], null);
        $this->setIfExists('sr_originate_ops', $data ?? [], null);
        $this->setIfExists('sr_publish_ops', $data ?? [], null);
        $this->setIfExists('sr_recover_bond_ops', $data ?? [], null);
        $this->setIfExists('sr_refute_ops', $data ?? [], null);
        $this->setIfExists('staking_ops', $data ?? [], null);
        $this->setIfExists('set_delegate_parameters_ops', $data ?? [], null);
        $this->setIfExists('dal_publish_commitment_ops', $data ?? [], null);
        $this->setIfExists('migrations', $data ?? [], null);
        $this->setIfExists('revelation_penalties', $data ?? [], null);
        $this->setIfExists('endorsing_rewards', $data ?? [], null);
        $this->setIfExists('dal_attestation_rewards', $data ?? [], null);
        $this->setIfExists('autostaking_ops', $data ?? [], null);
        $this->setIfExists('quote', $data ?? [], null);
        $this->setIfExists('reward_liquid', $data ?? [], null);
        $this->setIfExists('bonus_liquid', $data ?? [], null);
        $this->setIfExists('reward', $data ?? [], null);
        $this->setIfExists('bonus', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('baker', $data ?? [], null);
        $this->setIfExists('lb_escape_vote', $data ?? [], null);
        $this->setIfExists('lb_escape_ema', $data ?? [], null);
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
     * @param int|null $cycle Index of the cycle
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
     * @param string|null $hash Block hash
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
     * Gets proto
     *
     * @return int|null
     */
    public function getProto(): ?int
    {
        return $this->container['proto'];
    }

    /**
     * Sets proto
     *
     * @param int|null $proto Protocol code, representing a number of protocol changes since genesis (mod 256, but `-1` for the genesis block)
     *
     * @return $this
     */
    public function setProto(?int $proto): static
    {
        if (is_null($proto)) {
            throw new InvalidArgumentException('non-nullable proto cannot be null');
        }
        $this->container['proto'] = $proto;

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
     * Gets validations
     *
     * @return int|null
     */
    public function getValidations(): ?int
    {
        return $this->container['validations'];
    }

    /**
     * Sets validations
     *
     * @param int|null $validations Number of endorsements (slots), included into the block
     *
     * @return $this
     */
    public function setValidations(?int $validations): static
    {
        if (is_null($validations)) {
            throw new InvalidArgumentException('non-nullable validations cannot be null');
        }
        $this->container['validations'] = $validations;

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
     * Gets nonce_revealed
     *
     * @return bool|null
     */
    public function getNonceRevealed(): ?bool
    {
        return $this->container['nonce_revealed'];
    }

    /**
     * Sets nonce_revealed
     *
     * @param bool|null $nonce_revealed Status of the seed nonce revelation `true` - seed nonce revealed `false` - there's no `seed_nonce_hash` in the block or seed nonce revelation has missed
     *
     * @return $this
     */
    public function setNonceRevealed(?bool $nonce_revealed): static
    {
        if (is_null($nonce_revealed)) {
            throw new InvalidArgumentException('non-nullable nonce_revealed cannot be null');
        }
        $this->container['nonce_revealed'] = $nonce_revealed;

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
     * Gets software
     *
     * @return \Tzkt\Model\BlockSoftware|null
     */
    public function getSoftware(): ?\Tzkt\Model\BlockSoftware
    {
        return $this->container['software'];
    }

    /**
     * Sets software
     *
     * @param \Tzkt\Model\BlockSoftware|null $software software
     *
     * @return $this
     */
    public function setSoftware(?\Tzkt\Model\BlockSoftware $software): static
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
     * Gets lb_toggle
     *
     * @return bool|null
     */
    public function getLbToggle(): ?bool
    {
        return $this->container['lb_toggle'];
    }

    /**
     * Sets lb_toggle
     *
     * @param bool|null $lb_toggle Liquidity baking toggle (`true` if enabled, `false` if disabled, or `null` if the baker says 'pass')
     *
     * @return $this
     */
    public function setLbToggle(?bool $lb_toggle): static
    {
        if (is_null($lb_toggle)) {
            array_push($this->openAPINullablesSetToNull, 'lb_toggle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lb_toggle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lb_toggle'] = $lb_toggle;

        return $this;
    }

    /**
     * Gets lb_toggle_ema
     *
     * @return int|null
     */
    public function getLbToggleEma(): ?int
    {
        return $this->container['lb_toggle_ema'];
    }

    /**
     * Sets lb_toggle_ema
     *
     * @param int|null $lb_toggle_ema Liquidity baking escape EMA value with precision of 1000000 for integer computation
     *
     * @return $this
     */
    public function setLbToggleEma(?int $lb_toggle_ema): static
    {
        if (is_null($lb_toggle_ema)) {
            throw new InvalidArgumentException('non-nullable lb_toggle_ema cannot be null');
        }
        $this->container['lb_toggle_ema'] = $lb_toggle_ema;

        return $this;
    }

    /**
     * Gets ai_toggle
     *
     * @return bool|null
     */
    public function getAiToggle(): ?bool
    {
        return $this->container['ai_toggle'];
    }

    /**
     * Sets ai_toggle
     *
     * @param bool|null $ai_toggle Adaptive issuance toggle (`true` if enabled, `false` if disabled, or `null` if the baker says 'pass')
     *
     * @return $this
     */
    public function setAiToggle(?bool $ai_toggle): static
    {
        if (is_null($ai_toggle)) {
            array_push($this->openAPINullablesSetToNull, 'ai_toggle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ai_toggle', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ai_toggle'] = $ai_toggle;

        return $this;
    }

    /**
     * Gets ai_toggle_ema
     *
     * @return int|null
     */
    public function getAiToggleEma(): ?int
    {
        return $this->container['ai_toggle_ema'];
    }

    /**
     * Sets ai_toggle_ema
     *
     * @param int|null $ai_toggle_ema Adaptive issuance EMA value with precision of 1000000 for integer computation
     *
     * @return $this
     */
    public function setAiToggleEma(?int $ai_toggle_ema): static
    {
        if (is_null($ai_toggle_ema)) {
            throw new InvalidArgumentException('non-nullable ai_toggle_ema cannot be null');
        }
        $this->container['ai_toggle_ema'] = $ai_toggle_ema;

        return $this;
    }

    /**
     * Gets endorsements
     *
     * @return \Tzkt\Model\EndorsementOperation[]|null
     */
    public function getEndorsements(): ?array
    {
        return $this->container['endorsements'];
    }

    /**
     * Sets endorsements
     *
     * @param \Tzkt\Model\EndorsementOperation[]|null $endorsements List of endorsement (is operation, which specifies the head of the chain as seen by the endorser of a given slot) operations, included in the block
     *
     * @return $this
     */
    public function setEndorsements(?array $endorsements): static
    {
        if (is_null($endorsements)) {
            array_push($this->openAPINullablesSetToNull, 'endorsements');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('endorsements', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['endorsements'] = $endorsements;

        return $this;
    }

    /**
     * Gets preendorsements
     *
     * @return \Tzkt\Model\PreendorsementOperation[]|null
     */
    public function getPreendorsements(): ?array
    {
        return $this->container['preendorsements'];
    }

    /**
     * Sets preendorsements
     *
     * @param \Tzkt\Model\PreendorsementOperation[]|null $preendorsements List of preendorsement operations, included in the block
     *
     * @return $this
     */
    public function setPreendorsements(?array $preendorsements): static
    {
        if (is_null($preendorsements)) {
            array_push($this->openAPINullablesSetToNull, 'preendorsements');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('preendorsements', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['preendorsements'] = $preendorsements;

        return $this;
    }

    /**
     * Gets proposals
     *
     * @return \Tzkt\Model\ProposalOperation[]|null
     */
    public function getProposals(): ?array
    {
        return $this->container['proposals'];
    }

    /**
     * Sets proposals
     *
     * @param \Tzkt\Model\ProposalOperation[]|null $proposals List of proposal (is used by bakers (delegates) to submit and/or upvote proposals to amend the protocol) operations, included in the block
     *
     * @return $this
     */
    public function setProposals(?array $proposals): static
    {
        if (is_null($proposals)) {
            array_push($this->openAPINullablesSetToNull, 'proposals');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('proposals', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['proposals'] = $proposals;

        return $this;
    }

    /**
     * Gets ballots
     *
     * @return \Tzkt\Model\BallotOperation[]|null
     */
    public function getBallots(): ?array
    {
        return $this->container['ballots'];
    }

    /**
     * Sets ballots
     *
     * @param \Tzkt\Model\BallotOperation[]|null $ballots List of ballot (is used to vote for a proposal in a given voting cycle) operations, included in the block
     *
     * @return $this
     */
    public function setBallots(?array $ballots): static
    {
        if (is_null($ballots)) {
            array_push($this->openAPINullablesSetToNull, 'ballots');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ballots', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ballots'] = $ballots;

        return $this;
    }

    /**
     * Gets activations
     *
     * @return \Tzkt\Model\ActivationOperation[]|null
     */
    public function getActivations(): ?array
    {
        return $this->container['activations'];
    }

    /**
     * Sets activations
     *
     * @param \Tzkt\Model\ActivationOperation[]|null $activations List of activation (is used to activate accounts that were recommended allocations of tezos tokens for donations to the Tezos Foundation’s fundraiser) operations, included in the block
     *
     * @return $this
     */
    public function setActivations(?array $activations): static
    {
        if (is_null($activations)) {
            array_push($this->openAPINullablesSetToNull, 'activations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('activations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['activations'] = $activations;

        return $this;
    }

    /**
     * Gets dal_entrapment_evidence_ops
     *
     * @return \Tzkt\Model\DalEntrapmentEvidenceOperation[]|null
     */
    public function getDalEntrapmentEvidenceOps(): ?array
    {
        return $this->container['dal_entrapment_evidence_ops'];
    }

    /**
     * Sets dal_entrapment_evidence_ops
     *
     * @param \Tzkt\Model\DalEntrapmentEvidenceOperation[]|null $dal_entrapment_evidence_ops List of dal entrapment evidence operations, included in the block
     *
     * @return $this
     */
    public function setDalEntrapmentEvidenceOps(?array $dal_entrapment_evidence_ops): static
    {
        if (is_null($dal_entrapment_evidence_ops)) {
            array_push($this->openAPINullablesSetToNull, 'dal_entrapment_evidence_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dal_entrapment_evidence_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dal_entrapment_evidence_ops'] = $dal_entrapment_evidence_ops;

        return $this;
    }

    /**
     * Gets double_baking
     *
     * @return \Tzkt\Model\DoubleBakingOperation[]|null
     */
    public function getDoubleBaking(): ?array
    {
        return $this->container['double_baking'];
    }

    /**
     * Sets double_baking
     *
     * @param \Tzkt\Model\DoubleBakingOperation[]|null $double_baking List of double baking evidence (is used by bakers to provide evidence of double baking (baking two different blocks at the same height) by a baker) operations, included in the block
     *
     * @return $this
     */
    public function setDoubleBaking(?array $double_baking): static
    {
        if (is_null($double_baking)) {
            array_push($this->openAPINullablesSetToNull, 'double_baking');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('double_baking', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['double_baking'] = $double_baking;

        return $this;
    }

    /**
     * Gets double_endorsing
     *
     * @return \Tzkt\Model\DoubleEndorsingOperation[]|null
     */
    public function getDoubleEndorsing(): ?array
    {
        return $this->container['double_endorsing'];
    }

    /**
     * Sets double_endorsing
     *
     * @param \Tzkt\Model\DoubleEndorsingOperation[]|null $double_endorsing List of double endorsement evidence (is used by bakers to provide evidence of double endorsement (endorsing two different blocks at the same block height) by a baker) operations, included in the block
     *
     * @return $this
     */
    public function setDoubleEndorsing(?array $double_endorsing): static
    {
        if (is_null($double_endorsing)) {
            array_push($this->openAPINullablesSetToNull, 'double_endorsing');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('double_endorsing', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['double_endorsing'] = $double_endorsing;

        return $this;
    }

    /**
     * Gets double_preendorsing
     *
     * @return \Tzkt\Model\DoublePreendorsingOperation[]|null
     */
    public function getDoublePreendorsing(): ?array
    {
        return $this->container['double_preendorsing'];
    }

    /**
     * Sets double_preendorsing
     *
     * @param \Tzkt\Model\DoublePreendorsingOperation[]|null $double_preendorsing List of double preendorsement evidence operations, included in the block
     *
     * @return $this
     */
    public function setDoublePreendorsing(?array $double_preendorsing): static
    {
        if (is_null($double_preendorsing)) {
            array_push($this->openAPINullablesSetToNull, 'double_preendorsing');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('double_preendorsing', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['double_preendorsing'] = $double_preendorsing;

        return $this;
    }

    /**
     * Gets nonce_revelations
     *
     * @return \Tzkt\Model\NonceRevelationOperation[]|null
     */
    public function getNonceRevelations(): ?array
    {
        return $this->container['nonce_revelations'];
    }

    /**
     * Sets nonce_revelations
     *
     * @param \Tzkt\Model\NonceRevelationOperation[]|null $nonce_revelations List of nonce revelation (used by the blockchain to create randomness) operations, included in the block
     *
     * @return $this
     */
    public function setNonceRevelations(?array $nonce_revelations): static
    {
        if (is_null($nonce_revelations)) {
            array_push($this->openAPINullablesSetToNull, 'nonce_revelations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nonce_revelations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nonce_revelations'] = $nonce_revelations;

        return $this;
    }

    /**
     * Gets vdf_revelations
     *
     * @return \Tzkt\Model\VdfRevelationOperation[]|null
     */
    public function getVdfRevelations(): ?array
    {
        return $this->container['vdf_revelations'];
    }

    /**
     * Sets vdf_revelations
     *
     * @param \Tzkt\Model\VdfRevelationOperation[]|null $vdf_revelations List of vdf revelation (used by the blockchain to create randomness) operations, included in the block
     *
     * @return $this
     */
    public function setVdfRevelations(?array $vdf_revelations): static
    {
        if (is_null($vdf_revelations)) {
            array_push($this->openAPINullablesSetToNull, 'vdf_revelations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vdf_revelations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vdf_revelations'] = $vdf_revelations;

        return $this;
    }

    /**
     * Gets delegations
     *
     * @return \Tzkt\Model\DelegationOperation[]|null
     */
    public function getDelegations(): ?array
    {
        return $this->container['delegations'];
    }

    /**
     * Sets delegations
     *
     * @param \Tzkt\Model\DelegationOperation[]|null $delegations List of delegation (is used to delegate funds to a delegate (an implicit account registered as a baker)) operations, included in the block
     *
     * @return $this
     */
    public function setDelegations(?array $delegations): static
    {
        if (is_null($delegations)) {
            array_push($this->openAPINullablesSetToNull, 'delegations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delegations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['delegations'] = $delegations;

        return $this;
    }

    /**
     * Gets originations
     *
     * @return \Tzkt\Model\OriginationOperation[]|null
     */
    public function getOriginations(): ?array
    {
        return $this->container['originations'];
    }

    /**
     * Sets originations
     *
     * @param \Tzkt\Model\OriginationOperation[]|null $originations List of origination (deployment / contract creation ) operations, included in the block
     *
     * @return $this
     */
    public function setOriginations(?array $originations): static
    {
        if (is_null($originations)) {
            array_push($this->openAPINullablesSetToNull, 'originations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('originations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['originations'] = $originations;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \Tzkt\Model\TransactionOperation[]|null
     */
    public function getTransactions(): ?array
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \Tzkt\Model\TransactionOperation[]|null $transactions List of transaction (is a standard operation used to transfer tezos tokens to an account) operations, included in the block
     *
     * @return $this
     */
    public function setTransactions(?array $transactions): static
    {
        if (is_null($transactions)) {
            array_push($this->openAPINullablesSetToNull, 'transactions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transactions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets reveals
     *
     * @return \Tzkt\Model\RevealOperation[]|null
     */
    public function getReveals(): ?array
    {
        return $this->container['reveals'];
    }

    /**
     * Sets reveals
     *
     * @param \Tzkt\Model\RevealOperation[]|null $reveals List of reveal (is used to reveal the public key associated with an account) operations, included in the block
     *
     * @return $this
     */
    public function setReveals(?array $reveals): static
    {
        if (is_null($reveals)) {
            array_push($this->openAPINullablesSetToNull, 'reveals');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reveals', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reveals'] = $reveals;

        return $this;
    }

    /**
     * Gets register_constants
     *
     * @return \Tzkt\Model\RegisterConstantOperation[]|null
     */
    public function getRegisterConstants(): ?array
    {
        return $this->container['register_constants'];
    }

    /**
     * Sets register_constants
     *
     * @param \Tzkt\Model\RegisterConstantOperation[]|null $register_constants List of register global constant operations, included in the block
     *
     * @return $this
     */
    public function setRegisterConstants(?array $register_constants): static
    {
        if (is_null($register_constants)) {
            array_push($this->openAPINullablesSetToNull, 'register_constants');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('register_constants', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['register_constants'] = $register_constants;

        return $this;
    }

    /**
     * Gets set_deposits_limits
     *
     * @return \Tzkt\Model\SetDepositsLimitOperation[]|null
     */
    public function getSetDepositsLimits(): ?array
    {
        return $this->container['set_deposits_limits'];
    }

    /**
     * Sets set_deposits_limits
     *
     * @param \Tzkt\Model\SetDepositsLimitOperation[]|null $set_deposits_limits List of set deposits limit operations, included in the block
     *
     * @return $this
     */
    public function setSetDepositsLimits(?array $set_deposits_limits): static
    {
        if (is_null($set_deposits_limits)) {
            array_push($this->openAPINullablesSetToNull, 'set_deposits_limits');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('set_deposits_limits', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['set_deposits_limits'] = $set_deposits_limits;

        return $this;
    }

    /**
     * Gets transfer_ticket_ops
     *
     * @return \Tzkt\Model\TransferTicketOperation[]|null
     */
    public function getTransferTicketOps(): ?array
    {
        return $this->container['transfer_ticket_ops'];
    }

    /**
     * Sets transfer_ticket_ops
     *
     * @param \Tzkt\Model\TransferTicketOperation[]|null $transfer_ticket_ops List of transfer ticket operations, included in the block
     *
     * @return $this
     */
    public function setTransferTicketOps(?array $transfer_ticket_ops): static
    {
        if (is_null($transfer_ticket_ops)) {
            array_push($this->openAPINullablesSetToNull, 'transfer_ticket_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transfer_ticket_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transfer_ticket_ops'] = $transfer_ticket_ops;

        return $this;
    }

    /**
     * Gets tx_rollup_commit_ops
     *
     * @return \Tzkt\Model\TxRollupCommitOperation[]|null
     */
    public function getTxRollupCommitOps(): ?array
    {
        return $this->container['tx_rollup_commit_ops'];
    }

    /**
     * Sets tx_rollup_commit_ops
     *
     * @param \Tzkt\Model\TxRollupCommitOperation[]|null $tx_rollup_commit_ops List of tx rollup commit operations, included in the block
     *
     * @return $this
     */
    public function setTxRollupCommitOps(?array $tx_rollup_commit_ops): static
    {
        if (is_null($tx_rollup_commit_ops)) {
            array_push($this->openAPINullablesSetToNull, 'tx_rollup_commit_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tx_rollup_commit_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tx_rollup_commit_ops'] = $tx_rollup_commit_ops;

        return $this;
    }

    /**
     * Gets tx_rollup_dispatch_tickets_ops
     *
     * @return \Tzkt\Model\TxRollupDispatchTicketsOperation[]|null
     */
    public function getTxRollupDispatchTicketsOps(): ?array
    {
        return $this->container['tx_rollup_dispatch_tickets_ops'];
    }

    /**
     * Sets tx_rollup_dispatch_tickets_ops
     *
     * @param \Tzkt\Model\TxRollupDispatchTicketsOperation[]|null $tx_rollup_dispatch_tickets_ops List of tx rollup dispatch tickets operations, included in the block
     *
     * @return $this
     */
    public function setTxRollupDispatchTicketsOps(?array $tx_rollup_dispatch_tickets_ops): static
    {
        if (is_null($tx_rollup_dispatch_tickets_ops)) {
            array_push($this->openAPINullablesSetToNull, 'tx_rollup_dispatch_tickets_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tx_rollup_dispatch_tickets_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tx_rollup_dispatch_tickets_ops'] = $tx_rollup_dispatch_tickets_ops;

        return $this;
    }

    /**
     * Gets tx_rollup_finalize_commitment_ops
     *
     * @return \Tzkt\Model\TxRollupFinalizeCommitmentOperation[]|null
     */
    public function getTxRollupFinalizeCommitmentOps(): ?array
    {
        return $this->container['tx_rollup_finalize_commitment_ops'];
    }

    /**
     * Sets tx_rollup_finalize_commitment_ops
     *
     * @param \Tzkt\Model\TxRollupFinalizeCommitmentOperation[]|null $tx_rollup_finalize_commitment_ops List of tx rollup finalize commitment operations, included in the block
     *
     * @return $this
     */
    public function setTxRollupFinalizeCommitmentOps(?array $tx_rollup_finalize_commitment_ops): static
    {
        if (is_null($tx_rollup_finalize_commitment_ops)) {
            array_push($this->openAPINullablesSetToNull, 'tx_rollup_finalize_commitment_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tx_rollup_finalize_commitment_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tx_rollup_finalize_commitment_ops'] = $tx_rollup_finalize_commitment_ops;

        return $this;
    }

    /**
     * Gets tx_rollup_origination_ops
     *
     * @return \Tzkt\Model\TxRollupOriginationOperation[]|null
     */
    public function getTxRollupOriginationOps(): ?array
    {
        return $this->container['tx_rollup_origination_ops'];
    }

    /**
     * Sets tx_rollup_origination_ops
     *
     * @param \Tzkt\Model\TxRollupOriginationOperation[]|null $tx_rollup_origination_ops List of tx rollup origination operations, included in the block
     *
     * @return $this
     */
    public function setTxRollupOriginationOps(?array $tx_rollup_origination_ops): static
    {
        if (is_null($tx_rollup_origination_ops)) {
            array_push($this->openAPINullablesSetToNull, 'tx_rollup_origination_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tx_rollup_origination_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tx_rollup_origination_ops'] = $tx_rollup_origination_ops;

        return $this;
    }

    /**
     * Gets tx_rollup_rejection_ops
     *
     * @return \Tzkt\Model\TxRollupRejectionOperation[]|null
     */
    public function getTxRollupRejectionOps(): ?array
    {
        return $this->container['tx_rollup_rejection_ops'];
    }

    /**
     * Sets tx_rollup_rejection_ops
     *
     * @param \Tzkt\Model\TxRollupRejectionOperation[]|null $tx_rollup_rejection_ops List of tx rollup rejection operations, included in the block
     *
     * @return $this
     */
    public function setTxRollupRejectionOps(?array $tx_rollup_rejection_ops): static
    {
        if (is_null($tx_rollup_rejection_ops)) {
            array_push($this->openAPINullablesSetToNull, 'tx_rollup_rejection_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tx_rollup_rejection_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tx_rollup_rejection_ops'] = $tx_rollup_rejection_ops;

        return $this;
    }

    /**
     * Gets tx_rollup_remove_commitment_ops
     *
     * @return \Tzkt\Model\TxRollupRemoveCommitmentOperation[]|null
     */
    public function getTxRollupRemoveCommitmentOps(): ?array
    {
        return $this->container['tx_rollup_remove_commitment_ops'];
    }

    /**
     * Sets tx_rollup_remove_commitment_ops
     *
     * @param \Tzkt\Model\TxRollupRemoveCommitmentOperation[]|null $tx_rollup_remove_commitment_ops List of tx rollup remove commitment operations, included in the block
     *
     * @return $this
     */
    public function setTxRollupRemoveCommitmentOps(?array $tx_rollup_remove_commitment_ops): static
    {
        if (is_null($tx_rollup_remove_commitment_ops)) {
            array_push($this->openAPINullablesSetToNull, 'tx_rollup_remove_commitment_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tx_rollup_remove_commitment_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tx_rollup_remove_commitment_ops'] = $tx_rollup_remove_commitment_ops;

        return $this;
    }

    /**
     * Gets tx_rollup_return_bond_ops
     *
     * @return \Tzkt\Model\TxRollupReturnBondOperation[]|null
     */
    public function getTxRollupReturnBondOps(): ?array
    {
        return $this->container['tx_rollup_return_bond_ops'];
    }

    /**
     * Sets tx_rollup_return_bond_ops
     *
     * @param \Tzkt\Model\TxRollupReturnBondOperation[]|null $tx_rollup_return_bond_ops List of tx rollup return bond operations, included in the block
     *
     * @return $this
     */
    public function setTxRollupReturnBondOps(?array $tx_rollup_return_bond_ops): static
    {
        if (is_null($tx_rollup_return_bond_ops)) {
            array_push($this->openAPINullablesSetToNull, 'tx_rollup_return_bond_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tx_rollup_return_bond_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tx_rollup_return_bond_ops'] = $tx_rollup_return_bond_ops;

        return $this;
    }

    /**
     * Gets tx_rollup_submit_batch_ops
     *
     * @return \Tzkt\Model\TxRollupSubmitBatchOperation[]|null
     */
    public function getTxRollupSubmitBatchOps(): ?array
    {
        return $this->container['tx_rollup_submit_batch_ops'];
    }

    /**
     * Sets tx_rollup_submit_batch_ops
     *
     * @param \Tzkt\Model\TxRollupSubmitBatchOperation[]|null $tx_rollup_submit_batch_ops List of tx rollup submit batch operations, included in the block
     *
     * @return $this
     */
    public function setTxRollupSubmitBatchOps(?array $tx_rollup_submit_batch_ops): static
    {
        if (is_null($tx_rollup_submit_batch_ops)) {
            array_push($this->openAPINullablesSetToNull, 'tx_rollup_submit_batch_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tx_rollup_submit_batch_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tx_rollup_submit_batch_ops'] = $tx_rollup_submit_batch_ops;

        return $this;
    }

    /**
     * Gets increase_paid_storage_ops
     *
     * @return \Tzkt\Model\IncreasePaidStorageOperation[]|null
     */
    public function getIncreasePaidStorageOps(): ?array
    {
        return $this->container['increase_paid_storage_ops'];
    }

    /**
     * Sets increase_paid_storage_ops
     *
     * @param \Tzkt\Model\IncreasePaidStorageOperation[]|null $increase_paid_storage_ops List of increase paid storage operations, included in the block
     *
     * @return $this
     */
    public function setIncreasePaidStorageOps(?array $increase_paid_storage_ops): static
    {
        if (is_null($increase_paid_storage_ops)) {
            array_push($this->openAPINullablesSetToNull, 'increase_paid_storage_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('increase_paid_storage_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['increase_paid_storage_ops'] = $increase_paid_storage_ops;

        return $this;
    }

    /**
     * Gets update_consensus_key_ops
     *
     * @return \Tzkt\Model\UpdateConsensusKeyOperation[]|null
     */
    public function getUpdateConsensusKeyOps(): ?array
    {
        return $this->container['update_consensus_key_ops'];
    }

    /**
     * Sets update_consensus_key_ops
     *
     * @param \Tzkt\Model\UpdateConsensusKeyOperation[]|null $update_consensus_key_ops List of update consensus key operations, included in the block
     *
     * @return $this
     */
    public function setUpdateConsensusKeyOps(?array $update_consensus_key_ops): static
    {
        if (is_null($update_consensus_key_ops)) {
            array_push($this->openAPINullablesSetToNull, 'update_consensus_key_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('update_consensus_key_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['update_consensus_key_ops'] = $update_consensus_key_ops;

        return $this;
    }

    /**
     * Gets drain_delegate_ops
     *
     * @return \Tzkt\Model\DrainDelegateOperation[]|null
     */
    public function getDrainDelegateOps(): ?array
    {
        return $this->container['drain_delegate_ops'];
    }

    /**
     * Sets drain_delegate_ops
     *
     * @param \Tzkt\Model\DrainDelegateOperation[]|null $drain_delegate_ops List of drain delegate operations, included in the block
     *
     * @return $this
     */
    public function setDrainDelegateOps(?array $drain_delegate_ops): static
    {
        if (is_null($drain_delegate_ops)) {
            array_push($this->openAPINullablesSetToNull, 'drain_delegate_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('drain_delegate_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['drain_delegate_ops'] = $drain_delegate_ops;

        return $this;
    }

    /**
     * Gets sr_add_messages_ops
     *
     * @return \Tzkt\Model\SmartRollupAddMessagesOperation[]|null
     */
    public function getSrAddMessagesOps(): ?array
    {
        return $this->container['sr_add_messages_ops'];
    }

    /**
     * Sets sr_add_messages_ops
     *
     * @param \Tzkt\Model\SmartRollupAddMessagesOperation[]|null $sr_add_messages_ops List of smart rollup add messages operations, included in the block
     *
     * @return $this
     */
    public function setSrAddMessagesOps(?array $sr_add_messages_ops): static
    {
        if (is_null($sr_add_messages_ops)) {
            array_push($this->openAPINullablesSetToNull, 'sr_add_messages_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sr_add_messages_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sr_add_messages_ops'] = $sr_add_messages_ops;

        return $this;
    }

    /**
     * Gets sr_cement_ops
     *
     * @return \Tzkt\Model\SmartRollupCementOperation[]|null
     */
    public function getSrCementOps(): ?array
    {
        return $this->container['sr_cement_ops'];
    }

    /**
     * Sets sr_cement_ops
     *
     * @param \Tzkt\Model\SmartRollupCementOperation[]|null $sr_cement_ops List of smart rollup cement operations, included in the block
     *
     * @return $this
     */
    public function setSrCementOps(?array $sr_cement_ops): static
    {
        if (is_null($sr_cement_ops)) {
            array_push($this->openAPINullablesSetToNull, 'sr_cement_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sr_cement_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sr_cement_ops'] = $sr_cement_ops;

        return $this;
    }

    /**
     * Gets sr_execute_ops
     *
     * @return \Tzkt\Model\SmartRollupExecuteOperation[]|null
     */
    public function getSrExecuteOps(): ?array
    {
        return $this->container['sr_execute_ops'];
    }

    /**
     * Sets sr_execute_ops
     *
     * @param \Tzkt\Model\SmartRollupExecuteOperation[]|null $sr_execute_ops List of smart rollup execute operations, included in the block
     *
     * @return $this
     */
    public function setSrExecuteOps(?array $sr_execute_ops): static
    {
        if (is_null($sr_execute_ops)) {
            array_push($this->openAPINullablesSetToNull, 'sr_execute_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sr_execute_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sr_execute_ops'] = $sr_execute_ops;

        return $this;
    }

    /**
     * Gets sr_originate_ops
     *
     * @return \Tzkt\Model\SmartRollupOriginateOperation[]|null
     */
    public function getSrOriginateOps(): ?array
    {
        return $this->container['sr_originate_ops'];
    }

    /**
     * Sets sr_originate_ops
     *
     * @param \Tzkt\Model\SmartRollupOriginateOperation[]|null $sr_originate_ops List of smart rollup originate operations, included in the block
     *
     * @return $this
     */
    public function setSrOriginateOps(?array $sr_originate_ops): static
    {
        if (is_null($sr_originate_ops)) {
            array_push($this->openAPINullablesSetToNull, 'sr_originate_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sr_originate_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sr_originate_ops'] = $sr_originate_ops;

        return $this;
    }

    /**
     * Gets sr_publish_ops
     *
     * @return \Tzkt\Model\SmartRollupPublishOperation[]|null
     */
    public function getSrPublishOps(): ?array
    {
        return $this->container['sr_publish_ops'];
    }

    /**
     * Sets sr_publish_ops
     *
     * @param \Tzkt\Model\SmartRollupPublishOperation[]|null $sr_publish_ops List of smart rollup publish operations, included in the block
     *
     * @return $this
     */
    public function setSrPublishOps(?array $sr_publish_ops): static
    {
        if (is_null($sr_publish_ops)) {
            array_push($this->openAPINullablesSetToNull, 'sr_publish_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sr_publish_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sr_publish_ops'] = $sr_publish_ops;

        return $this;
    }

    /**
     * Gets sr_recover_bond_ops
     *
     * @return \Tzkt\Model\SmartRollupRecoverBondOperation[]|null
     */
    public function getSrRecoverBondOps(): ?array
    {
        return $this->container['sr_recover_bond_ops'];
    }

    /**
     * Sets sr_recover_bond_ops
     *
     * @param \Tzkt\Model\SmartRollupRecoverBondOperation[]|null $sr_recover_bond_ops List of smart rollup recover bond operations, included in the block
     *
     * @return $this
     */
    public function setSrRecoverBondOps(?array $sr_recover_bond_ops): static
    {
        if (is_null($sr_recover_bond_ops)) {
            array_push($this->openAPINullablesSetToNull, 'sr_recover_bond_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sr_recover_bond_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sr_recover_bond_ops'] = $sr_recover_bond_ops;

        return $this;
    }

    /**
     * Gets sr_refute_ops
     *
     * @return \Tzkt\Model\SmartRollupRefuteOperation[]|null
     */
    public function getSrRefuteOps(): ?array
    {
        return $this->container['sr_refute_ops'];
    }

    /**
     * Sets sr_refute_ops
     *
     * @param \Tzkt\Model\SmartRollupRefuteOperation[]|null $sr_refute_ops List of smart rollup refute operations, included in the block
     *
     * @return $this
     */
    public function setSrRefuteOps(?array $sr_refute_ops): static
    {
        if (is_null($sr_refute_ops)) {
            array_push($this->openAPINullablesSetToNull, 'sr_refute_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sr_refute_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sr_refute_ops'] = $sr_refute_ops;

        return $this;
    }

    /**
     * Gets staking_ops
     *
     * @return \Tzkt\Model\StakingOperation[]|null
     */
    public function getStakingOps(): ?array
    {
        return $this->container['staking_ops'];
    }

    /**
     * Sets staking_ops
     *
     * @param \Tzkt\Model\StakingOperation[]|null $staking_ops List of staking operations, included in the block
     *
     * @return $this
     */
    public function setStakingOps(?array $staking_ops): static
    {
        if (is_null($staking_ops)) {
            array_push($this->openAPINullablesSetToNull, 'staking_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('staking_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['staking_ops'] = $staking_ops;

        return $this;
    }

    /**
     * Gets set_delegate_parameters_ops
     *
     * @return \Tzkt\Model\SetDelegateParametersOperation[]|null
     */
    public function getSetDelegateParametersOps(): ?array
    {
        return $this->container['set_delegate_parameters_ops'];
    }

    /**
     * Sets set_delegate_parameters_ops
     *
     * @param \Tzkt\Model\SetDelegateParametersOperation[]|null $set_delegate_parameters_ops List of set delegate parameters operations, included in the block
     *
     * @return $this
     */
    public function setSetDelegateParametersOps(?array $set_delegate_parameters_ops): static
    {
        if (is_null($set_delegate_parameters_ops)) {
            array_push($this->openAPINullablesSetToNull, 'set_delegate_parameters_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('set_delegate_parameters_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['set_delegate_parameters_ops'] = $set_delegate_parameters_ops;

        return $this;
    }

    /**
     * Gets dal_publish_commitment_ops
     *
     * @return \Tzkt\Model\DalPublishCommitmentOperation[]|null
     */
    public function getDalPublishCommitmentOps(): ?array
    {
        return $this->container['dal_publish_commitment_ops'];
    }

    /**
     * Sets dal_publish_commitment_ops
     *
     * @param \Tzkt\Model\DalPublishCommitmentOperation[]|null $dal_publish_commitment_ops List of DAL publish commitment operations, included in the block
     *
     * @return $this
     */
    public function setDalPublishCommitmentOps(?array $dal_publish_commitment_ops): static
    {
        if (is_null($dal_publish_commitment_ops)) {
            array_push($this->openAPINullablesSetToNull, 'dal_publish_commitment_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dal_publish_commitment_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dal_publish_commitment_ops'] = $dal_publish_commitment_ops;

        return $this;
    }

    /**
     * Gets migrations
     *
     * @return \Tzkt\Model\MigrationOperation[]|null
     */
    public function getMigrations(): ?array
    {
        return $this->container['migrations'];
    }

    /**
     * Sets migrations
     *
     * @param \Tzkt\Model\MigrationOperation[]|null $migrations List of migration operations, implicitly applied at the end of the block
     *
     * @return $this
     */
    public function setMigrations(?array $migrations): static
    {
        if (is_null($migrations)) {
            array_push($this->openAPINullablesSetToNull, 'migrations');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('migrations', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['migrations'] = $migrations;

        return $this;
    }

    /**
     * Gets revelation_penalties
     *
     * @return \Tzkt\Model\RevelationPenaltyOperation[]|null
     */
    public function getRevelationPenalties(): ?array
    {
        return $this->container['revelation_penalties'];
    }

    /**
     * Sets revelation_penalties
     *
     * @param \Tzkt\Model\RevelationPenaltyOperation[]|null $revelation_penalties List of revelation penalty operations, implicitly applied at the end of the block
     *
     * @return $this
     */
    public function setRevelationPenalties(?array $revelation_penalties): static
    {
        if (is_null($revelation_penalties)) {
            array_push($this->openAPINullablesSetToNull, 'revelation_penalties');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('revelation_penalties', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['revelation_penalties'] = $revelation_penalties;

        return $this;
    }

    /**
     * Gets endorsing_rewards
     *
     * @return \Tzkt\Model\EndorsingRewardOperation[]|null
     */
    public function getEndorsingRewards(): ?array
    {
        return $this->container['endorsing_rewards'];
    }

    /**
     * Sets endorsing_rewards
     *
     * @param \Tzkt\Model\EndorsingRewardOperation[]|null $endorsing_rewards List of endorsing rewards, implicitly applied at the end of the block
     *
     * @return $this
     */
    public function setEndorsingRewards(?array $endorsing_rewards): static
    {
        if (is_null($endorsing_rewards)) {
            array_push($this->openAPINullablesSetToNull, 'endorsing_rewards');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('endorsing_rewards', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['endorsing_rewards'] = $endorsing_rewards;

        return $this;
    }

    /**
     * Gets dal_attestation_rewards
     *
     * @return \Tzkt\Model\DalAttestationRewardOperation[]|null
     */
    public function getDalAttestationRewards(): ?array
    {
        return $this->container['dal_attestation_rewards'];
    }

    /**
     * Sets dal_attestation_rewards
     *
     * @param \Tzkt\Model\DalAttestationRewardOperation[]|null $dal_attestation_rewards List of dal attestation rewards, implicitly applied at the end of the block
     *
     * @return $this
     */
    public function setDalAttestationRewards(?array $dal_attestation_rewards): static
    {
        if (is_null($dal_attestation_rewards)) {
            array_push($this->openAPINullablesSetToNull, 'dal_attestation_rewards');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dal_attestation_rewards', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dal_attestation_rewards'] = $dal_attestation_rewards;

        return $this;
    }

    /**
     * Gets autostaking_ops
     *
     * @return \Tzkt\Model\AutostakingOperation[]|null
     */
    public function getAutostakingOps(): ?array
    {
        return $this->container['autostaking_ops'];
    }

    /**
     * Sets autostaking_ops
     *
     * @param \Tzkt\Model\AutostakingOperation[]|null $autostaking_ops List of autostaking operations, implicitly applied at the end of the block
     *
     * @return $this
     */
    public function setAutostakingOps(?array $autostaking_ops): static
    {
        if (is_null($autostaking_ops)) {
            array_push($this->openAPINullablesSetToNull, 'autostaking_ops');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('autostaking_ops', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['autostaking_ops'] = $autostaking_ops;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return \Tzkt\Model\BlockQuote|null
     */
    public function getQuote(): ?\Tzkt\Model\BlockQuote
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param \Tzkt\Model\BlockQuote|null $quote quote
     *
     * @return $this
     */
    public function setQuote(?\Tzkt\Model\BlockQuote $quote): static
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
     * Gets lb_escape_vote
     *
     * @return bool|null
     */
    public function getLbEscapeVote(): ?bool
    {
        return $this->container['lb_escape_vote'];
    }

    /**
     * Sets lb_escape_vote
     *
     * @param bool|null $lb_escape_vote [DEPRECATED]
     *
     * @return $this
     */
    public function setLbEscapeVote(?bool $lb_escape_vote): static
    {
        if (is_null($lb_escape_vote)) {
            throw new InvalidArgumentException('non-nullable lb_escape_vote cannot be null');
        }
        $this->container['lb_escape_vote'] = $lb_escape_vote;

        return $this;
    }

    /**
     * Gets lb_escape_ema
     *
     * @return int|null
     */
    public function getLbEscapeEma(): ?int
    {
        return $this->container['lb_escape_ema'];
    }

    /**
     * Sets lb_escape_ema
     *
     * @param int|null $lb_escape_ema [DEPRECATED]
     *
     * @return $this
     */
    public function setLbEscapeEma(?int $lb_escape_ema): static
    {
        if (is_null($lb_escape_ema)) {
            throw new InvalidArgumentException('non-nullable lb_escape_ema cannot be null');
        }
        $this->container['lb_escape_ema'] = $lb_escape_ema;

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


