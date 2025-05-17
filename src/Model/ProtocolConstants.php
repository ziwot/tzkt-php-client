<?php
/**
 * ProtocolConstants
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
 * ProtocolConstants Class Doc Comment
 *
 * @description Information about the protocol constants
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ProtocolConstants implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Protocol_constants';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'ramp_up_cycles' => 'int',
        'no_reward_cycles' => 'int',
        'consensus_rights_delay' => 'int',
        'delegate_parameters_activation_delay' => 'int',
        'blocks_per_cycle' => 'int',
        'blocks_per_commitment' => 'int',
        'blocks_per_snapshot' => 'int',
        'blocks_per_voting' => 'int',
        'time_between_blocks' => 'int',
        'endorsers_per_block' => 'int',
        'hard_operation_gas_limit' => 'int',
        'hard_operation_storage_limit' => 'int',
        'hard_block_gas_limit' => 'int',
        'minimal_stake' => 'int',
        'minimal_frozen_stake' => 'int',
        'block_deposit' => 'int',
        'block_reward' => 'int[]',
        'endorsement_deposit' => 'int',
        'endorsement_reward' => 'int[]',
        'origination_size' => 'int',
        'byte_cost' => 'int',
        'proposal_quorum' => 'float',
        'ballot_quorum_min' => 'float',
        'ballot_quorum_max' => 'float',
        'lb_toggle_threshold' => 'int',
        'consensus_threshold' => 'int',
        'min_participation_numerator' => 'int',
        'min_participation_denominator' => 'int',
        'denunciation_period' => 'int',
        'slashing_delay' => 'int',
        'max_delegated_over_frozen_ratio' => 'int',
        'max_external_over_own_stake_ratio' => 'int',
        'smart_rollup_origination_size' => 'int',
        'smart_rollup_stake_amount' => 'int',
        'smart_rollup_challenge_window' => 'int',
        'smart_rollup_commitment_period' => 'int',
        'smart_rollup_timeout_period' => 'int',
        'dal_number_of_shards' => 'int',
        'dictator' => 'string',
        'max_slashing_period' => 'int',
        'preserved_cycles' => 'int',
        'lb_escape_threshold' => 'int',
        'lb_sunset_level' => 'int',
        'frozen_deposits_percentage' => 'int',
        'tx_rollup_origination_size' => 'int',
        'tx_rollup_commitment_bond' => 'int',
        'double_baking_punishment' => 'int',
        'double_endorsing_punishment_numerator' => 'int',
        'double_endorsing_punishment_denominator' => 'int',
        'revelation_reward' => 'int',
        'lb_subsidy' => 'int',
        'tokens_per_roll' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ramp_up_cycles' => 'int32',
        'no_reward_cycles' => 'int32',
        'consensus_rights_delay' => 'int32',
        'delegate_parameters_activation_delay' => 'int32',
        'blocks_per_cycle' => 'int32',
        'blocks_per_commitment' => 'int32',
        'blocks_per_snapshot' => 'int32',
        'blocks_per_voting' => 'int32',
        'time_between_blocks' => 'int32',
        'endorsers_per_block' => 'int32',
        'hard_operation_gas_limit' => 'int32',
        'hard_operation_storage_limit' => 'int32',
        'hard_block_gas_limit' => 'int32',
        'minimal_stake' => 'int64',
        'minimal_frozen_stake' => 'int64',
        'block_deposit' => 'int64',
        'block_reward' => 'int64',
        'endorsement_deposit' => 'int64',
        'endorsement_reward' => 'int64',
        'origination_size' => 'int32',
        'byte_cost' => 'int32',
        'proposal_quorum' => 'double',
        'ballot_quorum_min' => 'double',
        'ballot_quorum_max' => 'double',
        'lb_toggle_threshold' => 'int32',
        'consensus_threshold' => 'int32',
        'min_participation_numerator' => 'int32',
        'min_participation_denominator' => 'int32',
        'denunciation_period' => 'int32',
        'slashing_delay' => 'int32',
        'max_delegated_over_frozen_ratio' => 'int32',
        'max_external_over_own_stake_ratio' => 'int32',
        'smart_rollup_origination_size' => 'int32',
        'smart_rollup_stake_amount' => 'int64',
        'smart_rollup_challenge_window' => 'int32',
        'smart_rollup_commitment_period' => 'int32',
        'smart_rollup_timeout_period' => 'int32',
        'dal_number_of_shards' => 'int32',
        'dictator' => null,
        'max_slashing_period' => 'int32',
        'preserved_cycles' => 'int32',
        'lb_escape_threshold' => 'int32',
        'lb_sunset_level' => 'int32',
        'frozen_deposits_percentage' => 'int32',
        'tx_rollup_origination_size' => 'int32',
        'tx_rollup_commitment_bond' => 'int64',
        'double_baking_punishment' => 'int64',
        'double_endorsing_punishment_numerator' => 'int32',
        'double_endorsing_punishment_denominator' => 'int32',
        'revelation_reward' => 'int64',
        'lb_subsidy' => 'int32',
        'tokens_per_roll' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'ramp_up_cycles' => false,
        'no_reward_cycles' => false,
        'consensus_rights_delay' => false,
        'delegate_parameters_activation_delay' => false,
        'blocks_per_cycle' => false,
        'blocks_per_commitment' => false,
        'blocks_per_snapshot' => false,
        'blocks_per_voting' => false,
        'time_between_blocks' => false,
        'endorsers_per_block' => false,
        'hard_operation_gas_limit' => false,
        'hard_operation_storage_limit' => false,
        'hard_block_gas_limit' => false,
        'minimal_stake' => false,
        'minimal_frozen_stake' => false,
        'block_deposit' => false,
        'block_reward' => true,
        'endorsement_deposit' => false,
        'endorsement_reward' => true,
        'origination_size' => false,
        'byte_cost' => false,
        'proposal_quorum' => false,
        'ballot_quorum_min' => false,
        'ballot_quorum_max' => false,
        'lb_toggle_threshold' => false,
        'consensus_threshold' => false,
        'min_participation_numerator' => false,
        'min_participation_denominator' => false,
        'denunciation_period' => false,
        'slashing_delay' => false,
        'max_delegated_over_frozen_ratio' => false,
        'max_external_over_own_stake_ratio' => false,
        'smart_rollup_origination_size' => false,
        'smart_rollup_stake_amount' => false,
        'smart_rollup_challenge_window' => false,
        'smart_rollup_commitment_period' => false,
        'smart_rollup_timeout_period' => false,
        'dal_number_of_shards' => false,
        'dictator' => true,
        'max_slashing_period' => false,
        'preserved_cycles' => false,
        'lb_escape_threshold' => false,
        'lb_sunset_level' => false,
        'frozen_deposits_percentage' => false,
        'tx_rollup_origination_size' => false,
        'tx_rollup_commitment_bond' => false,
        'double_baking_punishment' => false,
        'double_endorsing_punishment_numerator' => false,
        'double_endorsing_punishment_denominator' => false,
        'revelation_reward' => false,
        'lb_subsidy' => false,
        'tokens_per_roll' => false
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
        'ramp_up_cycles' => 'rampUpCycles',
        'no_reward_cycles' => 'noRewardCycles',
        'consensus_rights_delay' => 'consensusRightsDelay',
        'delegate_parameters_activation_delay' => 'delegateParametersActivationDelay',
        'blocks_per_cycle' => 'blocksPerCycle',
        'blocks_per_commitment' => 'blocksPerCommitment',
        'blocks_per_snapshot' => 'blocksPerSnapshot',
        'blocks_per_voting' => 'blocksPerVoting',
        'time_between_blocks' => 'timeBetweenBlocks',
        'endorsers_per_block' => 'endorsersPerBlock',
        'hard_operation_gas_limit' => 'hardOperationGasLimit',
        'hard_operation_storage_limit' => 'hardOperationStorageLimit',
        'hard_block_gas_limit' => 'hardBlockGasLimit',
        'minimal_stake' => 'minimalStake',
        'minimal_frozen_stake' => 'minimalFrozenStake',
        'block_deposit' => 'blockDeposit',
        'block_reward' => 'blockReward',
        'endorsement_deposit' => 'endorsementDeposit',
        'endorsement_reward' => 'endorsementReward',
        'origination_size' => 'originationSize',
        'byte_cost' => 'byteCost',
        'proposal_quorum' => 'proposalQuorum',
        'ballot_quorum_min' => 'ballotQuorumMin',
        'ballot_quorum_max' => 'ballotQuorumMax',
        'lb_toggle_threshold' => 'lbToggleThreshold',
        'consensus_threshold' => 'consensusThreshold',
        'min_participation_numerator' => 'minParticipationNumerator',
        'min_participation_denominator' => 'minParticipationDenominator',
        'denunciation_period' => 'denunciationPeriod',
        'slashing_delay' => 'slashingDelay',
        'max_delegated_over_frozen_ratio' => 'maxDelegatedOverFrozenRatio',
        'max_external_over_own_stake_ratio' => 'maxExternalOverOwnStakeRatio',
        'smart_rollup_origination_size' => 'smartRollupOriginationSize',
        'smart_rollup_stake_amount' => 'smartRollupStakeAmount',
        'smart_rollup_challenge_window' => 'smartRollupChallengeWindow',
        'smart_rollup_commitment_period' => 'smartRollupCommitmentPeriod',
        'smart_rollup_timeout_period' => 'smartRollupTimeoutPeriod',
        'dal_number_of_shards' => 'dalNumberOfShards',
        'dictator' => 'dictator',
        'max_slashing_period' => 'maxSlashingPeriod',
        'preserved_cycles' => 'preservedCycles',
        'lb_escape_threshold' => 'lbEscapeThreshold',
        'lb_sunset_level' => 'lbSunsetLevel',
        'frozen_deposits_percentage' => 'frozenDepositsPercentage',
        'tx_rollup_origination_size' => 'txRollupOriginationSize',
        'tx_rollup_commitment_bond' => 'txRollupCommitmentBond',
        'double_baking_punishment' => 'doubleBakingPunishment',
        'double_endorsing_punishment_numerator' => 'doubleEndorsingPunishmentNumerator',
        'double_endorsing_punishment_denominator' => 'doubleEndorsingPunishmentDenominator',
        'revelation_reward' => 'revelationReward',
        'lb_subsidy' => 'lbSubsidy',
        'tokens_per_roll' => 'tokensPerRoll'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'ramp_up_cycles' => 'setRampUpCycles',
        'no_reward_cycles' => 'setNoRewardCycles',
        'consensus_rights_delay' => 'setConsensusRightsDelay',
        'delegate_parameters_activation_delay' => 'setDelegateParametersActivationDelay',
        'blocks_per_cycle' => 'setBlocksPerCycle',
        'blocks_per_commitment' => 'setBlocksPerCommitment',
        'blocks_per_snapshot' => 'setBlocksPerSnapshot',
        'blocks_per_voting' => 'setBlocksPerVoting',
        'time_between_blocks' => 'setTimeBetweenBlocks',
        'endorsers_per_block' => 'setEndorsersPerBlock',
        'hard_operation_gas_limit' => 'setHardOperationGasLimit',
        'hard_operation_storage_limit' => 'setHardOperationStorageLimit',
        'hard_block_gas_limit' => 'setHardBlockGasLimit',
        'minimal_stake' => 'setMinimalStake',
        'minimal_frozen_stake' => 'setMinimalFrozenStake',
        'block_deposit' => 'setBlockDeposit',
        'block_reward' => 'setBlockReward',
        'endorsement_deposit' => 'setEndorsementDeposit',
        'endorsement_reward' => 'setEndorsementReward',
        'origination_size' => 'setOriginationSize',
        'byte_cost' => 'setByteCost',
        'proposal_quorum' => 'setProposalQuorum',
        'ballot_quorum_min' => 'setBallotQuorumMin',
        'ballot_quorum_max' => 'setBallotQuorumMax',
        'lb_toggle_threshold' => 'setLbToggleThreshold',
        'consensus_threshold' => 'setConsensusThreshold',
        'min_participation_numerator' => 'setMinParticipationNumerator',
        'min_participation_denominator' => 'setMinParticipationDenominator',
        'denunciation_period' => 'setDenunciationPeriod',
        'slashing_delay' => 'setSlashingDelay',
        'max_delegated_over_frozen_ratio' => 'setMaxDelegatedOverFrozenRatio',
        'max_external_over_own_stake_ratio' => 'setMaxExternalOverOwnStakeRatio',
        'smart_rollup_origination_size' => 'setSmartRollupOriginationSize',
        'smart_rollup_stake_amount' => 'setSmartRollupStakeAmount',
        'smart_rollup_challenge_window' => 'setSmartRollupChallengeWindow',
        'smart_rollup_commitment_period' => 'setSmartRollupCommitmentPeriod',
        'smart_rollup_timeout_period' => 'setSmartRollupTimeoutPeriod',
        'dal_number_of_shards' => 'setDalNumberOfShards',
        'dictator' => 'setDictator',
        'max_slashing_period' => 'setMaxSlashingPeriod',
        'preserved_cycles' => 'setPreservedCycles',
        'lb_escape_threshold' => 'setLbEscapeThreshold',
        'lb_sunset_level' => 'setLbSunsetLevel',
        'frozen_deposits_percentage' => 'setFrozenDepositsPercentage',
        'tx_rollup_origination_size' => 'setTxRollupOriginationSize',
        'tx_rollup_commitment_bond' => 'setTxRollupCommitmentBond',
        'double_baking_punishment' => 'setDoubleBakingPunishment',
        'double_endorsing_punishment_numerator' => 'setDoubleEndorsingPunishmentNumerator',
        'double_endorsing_punishment_denominator' => 'setDoubleEndorsingPunishmentDenominator',
        'revelation_reward' => 'setRevelationReward',
        'lb_subsidy' => 'setLbSubsidy',
        'tokens_per_roll' => 'setTokensPerRoll'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'ramp_up_cycles' => 'getRampUpCycles',
        'no_reward_cycles' => 'getNoRewardCycles',
        'consensus_rights_delay' => 'getConsensusRightsDelay',
        'delegate_parameters_activation_delay' => 'getDelegateParametersActivationDelay',
        'blocks_per_cycle' => 'getBlocksPerCycle',
        'blocks_per_commitment' => 'getBlocksPerCommitment',
        'blocks_per_snapshot' => 'getBlocksPerSnapshot',
        'blocks_per_voting' => 'getBlocksPerVoting',
        'time_between_blocks' => 'getTimeBetweenBlocks',
        'endorsers_per_block' => 'getEndorsersPerBlock',
        'hard_operation_gas_limit' => 'getHardOperationGasLimit',
        'hard_operation_storage_limit' => 'getHardOperationStorageLimit',
        'hard_block_gas_limit' => 'getHardBlockGasLimit',
        'minimal_stake' => 'getMinimalStake',
        'minimal_frozen_stake' => 'getMinimalFrozenStake',
        'block_deposit' => 'getBlockDeposit',
        'block_reward' => 'getBlockReward',
        'endorsement_deposit' => 'getEndorsementDeposit',
        'endorsement_reward' => 'getEndorsementReward',
        'origination_size' => 'getOriginationSize',
        'byte_cost' => 'getByteCost',
        'proposal_quorum' => 'getProposalQuorum',
        'ballot_quorum_min' => 'getBallotQuorumMin',
        'ballot_quorum_max' => 'getBallotQuorumMax',
        'lb_toggle_threshold' => 'getLbToggleThreshold',
        'consensus_threshold' => 'getConsensusThreshold',
        'min_participation_numerator' => 'getMinParticipationNumerator',
        'min_participation_denominator' => 'getMinParticipationDenominator',
        'denunciation_period' => 'getDenunciationPeriod',
        'slashing_delay' => 'getSlashingDelay',
        'max_delegated_over_frozen_ratio' => 'getMaxDelegatedOverFrozenRatio',
        'max_external_over_own_stake_ratio' => 'getMaxExternalOverOwnStakeRatio',
        'smart_rollup_origination_size' => 'getSmartRollupOriginationSize',
        'smart_rollup_stake_amount' => 'getSmartRollupStakeAmount',
        'smart_rollup_challenge_window' => 'getSmartRollupChallengeWindow',
        'smart_rollup_commitment_period' => 'getSmartRollupCommitmentPeriod',
        'smart_rollup_timeout_period' => 'getSmartRollupTimeoutPeriod',
        'dal_number_of_shards' => 'getDalNumberOfShards',
        'dictator' => 'getDictator',
        'max_slashing_period' => 'getMaxSlashingPeriod',
        'preserved_cycles' => 'getPreservedCycles',
        'lb_escape_threshold' => 'getLbEscapeThreshold',
        'lb_sunset_level' => 'getLbSunsetLevel',
        'frozen_deposits_percentage' => 'getFrozenDepositsPercentage',
        'tx_rollup_origination_size' => 'getTxRollupOriginationSize',
        'tx_rollup_commitment_bond' => 'getTxRollupCommitmentBond',
        'double_baking_punishment' => 'getDoubleBakingPunishment',
        'double_endorsing_punishment_numerator' => 'getDoubleEndorsingPunishmentNumerator',
        'double_endorsing_punishment_denominator' => 'getDoubleEndorsingPunishmentDenominator',
        'revelation_reward' => 'getRevelationReward',
        'lb_subsidy' => 'getLbSubsidy',
        'tokens_per_roll' => 'getTokensPerRoll'
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
        $this->setIfExists('ramp_up_cycles', $data ?? [], null);
        $this->setIfExists('no_reward_cycles', $data ?? [], null);
        $this->setIfExists('consensus_rights_delay', $data ?? [], null);
        $this->setIfExists('delegate_parameters_activation_delay', $data ?? [], null);
        $this->setIfExists('blocks_per_cycle', $data ?? [], null);
        $this->setIfExists('blocks_per_commitment', $data ?? [], null);
        $this->setIfExists('blocks_per_snapshot', $data ?? [], null);
        $this->setIfExists('blocks_per_voting', $data ?? [], null);
        $this->setIfExists('time_between_blocks', $data ?? [], null);
        $this->setIfExists('endorsers_per_block', $data ?? [], null);
        $this->setIfExists('hard_operation_gas_limit', $data ?? [], null);
        $this->setIfExists('hard_operation_storage_limit', $data ?? [], null);
        $this->setIfExists('hard_block_gas_limit', $data ?? [], null);
        $this->setIfExists('minimal_stake', $data ?? [], null);
        $this->setIfExists('minimal_frozen_stake', $data ?? [], null);
        $this->setIfExists('block_deposit', $data ?? [], null);
        $this->setIfExists('block_reward', $data ?? [], null);
        $this->setIfExists('endorsement_deposit', $data ?? [], null);
        $this->setIfExists('endorsement_reward', $data ?? [], null);
        $this->setIfExists('origination_size', $data ?? [], null);
        $this->setIfExists('byte_cost', $data ?? [], null);
        $this->setIfExists('proposal_quorum', $data ?? [], null);
        $this->setIfExists('ballot_quorum_min', $data ?? [], null);
        $this->setIfExists('ballot_quorum_max', $data ?? [], null);
        $this->setIfExists('lb_toggle_threshold', $data ?? [], null);
        $this->setIfExists('consensus_threshold', $data ?? [], null);
        $this->setIfExists('min_participation_numerator', $data ?? [], null);
        $this->setIfExists('min_participation_denominator', $data ?? [], null);
        $this->setIfExists('denunciation_period', $data ?? [], null);
        $this->setIfExists('slashing_delay', $data ?? [], null);
        $this->setIfExists('max_delegated_over_frozen_ratio', $data ?? [], null);
        $this->setIfExists('max_external_over_own_stake_ratio', $data ?? [], null);
        $this->setIfExists('smart_rollup_origination_size', $data ?? [], null);
        $this->setIfExists('smart_rollup_stake_amount', $data ?? [], null);
        $this->setIfExists('smart_rollup_challenge_window', $data ?? [], null);
        $this->setIfExists('smart_rollup_commitment_period', $data ?? [], null);
        $this->setIfExists('smart_rollup_timeout_period', $data ?? [], null);
        $this->setIfExists('dal_number_of_shards', $data ?? [], null);
        $this->setIfExists('dictator', $data ?? [], null);
        $this->setIfExists('max_slashing_period', $data ?? [], null);
        $this->setIfExists('preserved_cycles', $data ?? [], null);
        $this->setIfExists('lb_escape_threshold', $data ?? [], null);
        $this->setIfExists('lb_sunset_level', $data ?? [], null);
        $this->setIfExists('frozen_deposits_percentage', $data ?? [], null);
        $this->setIfExists('tx_rollup_origination_size', $data ?? [], null);
        $this->setIfExists('tx_rollup_commitment_bond', $data ?? [], null);
        $this->setIfExists('double_baking_punishment', $data ?? [], null);
        $this->setIfExists('double_endorsing_punishment_numerator', $data ?? [], null);
        $this->setIfExists('double_endorsing_punishment_denominator', $data ?? [], null);
        $this->setIfExists('revelation_reward', $data ?? [], null);
        $this->setIfExists('lb_subsidy', $data ?? [], null);
        $this->setIfExists('tokens_per_roll', $data ?? [], null);
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
     * Gets ramp_up_cycles
     *
     * @return int|null
     */
    public function getRampUpCycles(): ?int
    {
        return $this->container['ramp_up_cycles'];
    }

    /**
     * Sets ramp_up_cycles
     *
     * @param int|null $ramp_up_cycles The number of cycles where security deposit is ramping up
     *
     * @return $this
     */
    public function setRampUpCycles(?int $ramp_up_cycles): static
    {
        if (is_null($ramp_up_cycles)) {
            throw new InvalidArgumentException('non-nullable ramp_up_cycles cannot be null');
        }
        $this->container['ramp_up_cycles'] = $ramp_up_cycles;

        return $this;
    }

    /**
     * Gets no_reward_cycles
     *
     * @return int|null
     */
    public function getNoRewardCycles(): ?int
    {
        return $this->container['no_reward_cycles'];
    }

    /**
     * Sets no_reward_cycles
     *
     * @param int|null $no_reward_cycles The number of cycles with no baking rewards
     *
     * @return $this
     */
    public function setNoRewardCycles(?int $no_reward_cycles): static
    {
        if (is_null($no_reward_cycles)) {
            throw new InvalidArgumentException('non-nullable no_reward_cycles cannot be null');
        }
        $this->container['no_reward_cycles'] = $no_reward_cycles;

        return $this;
    }

    /**
     * Gets consensus_rights_delay
     *
     * @return int|null
     */
    public function getConsensusRightsDelay(): ?int
    {
        return $this->container['consensus_rights_delay'];
    }

    /**
     * Sets consensus_rights_delay
     *
     * @param int|null $consensus_rights_delay Delay in cycles after which baking rights are assigned
     *
     * @return $this
     */
    public function setConsensusRightsDelay(?int $consensus_rights_delay): static
    {
        if (is_null($consensus_rights_delay)) {
            throw new InvalidArgumentException('non-nullable consensus_rights_delay cannot be null');
        }
        $this->container['consensus_rights_delay'] = $consensus_rights_delay;

        return $this;
    }

    /**
     * Gets delegate_parameters_activation_delay
     *
     * @return int|null
     */
    public function getDelegateParametersActivationDelay(): ?int
    {
        return $this->container['delegate_parameters_activation_delay'];
    }

    /**
     * Sets delegate_parameters_activation_delay
     *
     * @param int|null $delegate_parameters_activation_delay Delay in cycles after which the parameters from `set_delegate_parameters` operations take effect
     *
     * @return $this
     */
    public function setDelegateParametersActivationDelay(?int $delegate_parameters_activation_delay): static
    {
        if (is_null($delegate_parameters_activation_delay)) {
            throw new InvalidArgumentException('non-nullable delegate_parameters_activation_delay cannot be null');
        }
        $this->container['delegate_parameters_activation_delay'] = $delegate_parameters_activation_delay;

        return $this;
    }

    /**
     * Gets blocks_per_cycle
     *
     * @return int|null
     */
    public function getBlocksPerCycle(): ?int
    {
        return $this->container['blocks_per_cycle'];
    }

    /**
     * Sets blocks_per_cycle
     *
     * @param int|null $blocks_per_cycle A number of blocks the cycle contains
     *
     * @return $this
     */
    public function setBlocksPerCycle(?int $blocks_per_cycle): static
    {
        if (is_null($blocks_per_cycle)) {
            throw new InvalidArgumentException('non-nullable blocks_per_cycle cannot be null');
        }
        $this->container['blocks_per_cycle'] = $blocks_per_cycle;

        return $this;
    }

    /**
     * Gets blocks_per_commitment
     *
     * @return int|null
     */
    public function getBlocksPerCommitment(): ?int
    {
        return $this->container['blocks_per_commitment'];
    }

    /**
     * Sets blocks_per_commitment
     *
     * @param int|null $blocks_per_commitment A number of blocks that indicates how often seed nonce hash is included in a block. Seed nonce hash presents in only one out of `blocksPerCommitment`
     *
     * @return $this
     */
    public function setBlocksPerCommitment(?int $blocks_per_commitment): static
    {
        if (is_null($blocks_per_commitment)) {
            throw new InvalidArgumentException('non-nullable blocks_per_commitment cannot be null');
        }
        $this->container['blocks_per_commitment'] = $blocks_per_commitment;

        return $this;
    }

    /**
     * Gets blocks_per_snapshot
     *
     * @return int|null
     */
    public function getBlocksPerSnapshot(): ?int
    {
        return $this->container['blocks_per_snapshot'];
    }

    /**
     * Sets blocks_per_snapshot
     *
     * @param int|null $blocks_per_snapshot A number of blocks that indicates how often a snapshot (snapshots are records of the state of stake distributions) is taken
     *
     * @return $this
     */
    public function setBlocksPerSnapshot(?int $blocks_per_snapshot): static
    {
        if (is_null($blocks_per_snapshot)) {
            throw new InvalidArgumentException('non-nullable blocks_per_snapshot cannot be null');
        }
        $this->container['blocks_per_snapshot'] = $blocks_per_snapshot;

        return $this;
    }

    /**
     * Gets blocks_per_voting
     *
     * @return int|null
     */
    public function getBlocksPerVoting(): ?int
    {
        return $this->container['blocks_per_voting'];
    }

    /**
     * Sets blocks_per_voting
     *
     * @param int|null $blocks_per_voting A number of block that indicates how long a voting period takes
     *
     * @return $this
     */
    public function setBlocksPerVoting(?int $blocks_per_voting): static
    {
        if (is_null($blocks_per_voting)) {
            throw new InvalidArgumentException('non-nullable blocks_per_voting cannot be null');
        }
        $this->container['blocks_per_voting'] = $blocks_per_voting;

        return $this;
    }

    /**
     * Gets time_between_blocks
     *
     * @return int|null
     */
    public function getTimeBetweenBlocks(): ?int
    {
        return $this->container['time_between_blocks'];
    }

    /**
     * Sets time_between_blocks
     *
     * @param int|null $time_between_blocks Minimum amount of seconds between blocks
     *
     * @return $this
     */
    public function setTimeBetweenBlocks(?int $time_between_blocks): static
    {
        if (is_null($time_between_blocks)) {
            throw new InvalidArgumentException('non-nullable time_between_blocks cannot be null');
        }
        $this->container['time_between_blocks'] = $time_between_blocks;

        return $this;
    }

    /**
     * Gets endorsers_per_block
     *
     * @return int|null
     */
    public function getEndorsersPerBlock(): ?int
    {
        return $this->container['endorsers_per_block'];
    }

    /**
     * Sets endorsers_per_block
     *
     * @param int|null $endorsers_per_block Number of bakers that assigned to endorse a block
     *
     * @return $this
     */
    public function setEndorsersPerBlock(?int $endorsers_per_block): static
    {
        if (is_null($endorsers_per_block)) {
            throw new InvalidArgumentException('non-nullable endorsers_per_block cannot be null');
        }
        $this->container['endorsers_per_block'] = $endorsers_per_block;

        return $this;
    }

    /**
     * Gets hard_operation_gas_limit
     *
     * @return int|null
     */
    public function getHardOperationGasLimit(): ?int
    {
        return $this->container['hard_operation_gas_limit'];
    }

    /**
     * Sets hard_operation_gas_limit
     *
     * @param int|null $hard_operation_gas_limit Maximum amount of gas that one operation can consume
     *
     * @return $this
     */
    public function setHardOperationGasLimit(?int $hard_operation_gas_limit): static
    {
        if (is_null($hard_operation_gas_limit)) {
            throw new InvalidArgumentException('non-nullable hard_operation_gas_limit cannot be null');
        }
        $this->container['hard_operation_gas_limit'] = $hard_operation_gas_limit;

        return $this;
    }

    /**
     * Gets hard_operation_storage_limit
     *
     * @return int|null
     */
    public function getHardOperationStorageLimit(): ?int
    {
        return $this->container['hard_operation_storage_limit'];
    }

    /**
     * Sets hard_operation_storage_limit
     *
     * @param int|null $hard_operation_storage_limit Maximum amount of storage that one operation can consume
     *
     * @return $this
     */
    public function setHardOperationStorageLimit(?int $hard_operation_storage_limit): static
    {
        if (is_null($hard_operation_storage_limit)) {
            throw new InvalidArgumentException('non-nullable hard_operation_storage_limit cannot be null');
        }
        $this->container['hard_operation_storage_limit'] = $hard_operation_storage_limit;

        return $this;
    }

    /**
     * Gets hard_block_gas_limit
     *
     * @return int|null
     */
    public function getHardBlockGasLimit(): ?int
    {
        return $this->container['hard_block_gas_limit'];
    }

    /**
     * Sets hard_block_gas_limit
     *
     * @param int|null $hard_block_gas_limit Maximum amount of total gas usage of a single block
     *
     * @return $this
     */
    public function setHardBlockGasLimit(?int $hard_block_gas_limit): static
    {
        if (is_null($hard_block_gas_limit)) {
            throw new InvalidArgumentException('non-nullable hard_block_gas_limit cannot be null');
        }
        $this->container['hard_block_gas_limit'] = $hard_block_gas_limit;

        return $this;
    }

    /**
     * Gets minimal_stake
     *
     * @return int|null
     */
    public function getMinimalStake(): ?int
    {
        return $this->container['minimal_stake'];
    }

    /**
     * Sets minimal_stake
     *
     * @param int|null $minimal_stake Required number of tokens to get 1 roll (micro tez)
     *
     * @return $this
     */
    public function setMinimalStake(?int $minimal_stake): static
    {
        if (is_null($minimal_stake)) {
            throw new InvalidArgumentException('non-nullable minimal_stake cannot be null');
        }
        $this->container['minimal_stake'] = $minimal_stake;

        return $this;
    }

    /**
     * Gets minimal_frozen_stake
     *
     * @return int|null
     */
    public function getMinimalFrozenStake(): ?int
    {
        return $this->container['minimal_frozen_stake'];
    }

    /**
     * Sets minimal_frozen_stake
     *
     * @param int|null $minimal_frozen_stake Required number of tokens to be frozen by bakers (micro tez)
     *
     * @return $this
     */
    public function setMinimalFrozenStake(?int $minimal_frozen_stake): static
    {
        if (is_null($minimal_frozen_stake)) {
            throw new InvalidArgumentException('non-nullable minimal_frozen_stake cannot be null');
        }
        $this->container['minimal_frozen_stake'] = $minimal_frozen_stake;

        return $this;
    }

    /**
     * Gets block_deposit
     *
     * @return int|null
     */
    public function getBlockDeposit(): ?int
    {
        return $this->container['block_deposit'];
    }

    /**
     * Sets block_deposit
     *
     * @param int|null $block_deposit Security deposit for baking (producing) a block (micro tez)
     *
     * @return $this
     */
    public function setBlockDeposit(?int $block_deposit): static
    {
        if (is_null($block_deposit)) {
            throw new InvalidArgumentException('non-nullable block_deposit cannot be null');
        }
        $this->container['block_deposit'] = $block_deposit;

        return $this;
    }

    /**
     * Gets block_reward
     *
     * @return int[]|null
     */
    public function getBlockReward(): ?array
    {
        return $this->container['block_reward'];
    }

    /**
     * Sets block_reward
     *
     * @param int[]|null $block_reward Reward for baking (producing) a block (micro tez)
     *
     * @return $this
     */
    public function setBlockReward(?array $block_reward): static
    {
        if (is_null($block_reward)) {
            array_push($this->openAPINullablesSetToNull, 'block_reward');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('block_reward', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['block_reward'] = $block_reward;

        return $this;
    }

    /**
     * Gets endorsement_deposit
     *
     * @return int|null
     */
    public function getEndorsementDeposit(): ?int
    {
        return $this->container['endorsement_deposit'];
    }

    /**
     * Sets endorsement_deposit
     *
     * @param int|null $endorsement_deposit Security deposit for sending an endorsement operation (micro tez)
     *
     * @return $this
     */
    public function setEndorsementDeposit(?int $endorsement_deposit): static
    {
        if (is_null($endorsement_deposit)) {
            throw new InvalidArgumentException('non-nullable endorsement_deposit cannot be null');
        }
        $this->container['endorsement_deposit'] = $endorsement_deposit;

        return $this;
    }

    /**
     * Gets endorsement_reward
     *
     * @return int[]|null
     */
    public function getEndorsementReward(): ?array
    {
        return $this->container['endorsement_reward'];
    }

    /**
     * Sets endorsement_reward
     *
     * @param int[]|null $endorsement_reward Reward for sending an endorsement operation (micro tez)
     *
     * @return $this
     */
    public function setEndorsementReward(?array $endorsement_reward): static
    {
        if (is_null($endorsement_reward)) {
            array_push($this->openAPINullablesSetToNull, 'endorsement_reward');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('endorsement_reward', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['endorsement_reward'] = $endorsement_reward;

        return $this;
    }

    /**
     * Gets origination_size
     *
     * @return int|null
     */
    public function getOriginationSize(): ?int
    {
        return $this->container['origination_size'];
    }

    /**
     * Sets origination_size
     *
     * @param int|null $origination_size Initial storage size of an originated (created) account (bytes)
     *
     * @return $this
     */
    public function setOriginationSize(?int $origination_size): static
    {
        if (is_null($origination_size)) {
            throw new InvalidArgumentException('non-nullable origination_size cannot be null');
        }
        $this->container['origination_size'] = $origination_size;

        return $this;
    }

    /**
     * Gets byte_cost
     *
     * @return int|null
     */
    public function getByteCost(): ?int
    {
        return $this->container['byte_cost'];
    }

    /**
     * Sets byte_cost
     *
     * @param int|null $byte_cost Cost of one storage byte in the blockchain (micro tez)
     *
     * @return $this
     */
    public function setByteCost(?int $byte_cost): static
    {
        if (is_null($byte_cost)) {
            throw new InvalidArgumentException('non-nullable byte_cost cannot be null');
        }
        $this->container['byte_cost'] = $byte_cost;

        return $this;
    }

    /**
     * Gets proposal_quorum
     *
     * @return float|null
     */
    public function getProposalQuorum(): ?float
    {
        return $this->container['proposal_quorum'];
    }

    /**
     * Sets proposal_quorum
     *
     * @param float|null $proposal_quorum Percentage of the total number of voting power required to select a proposal on the proposal period
     *
     * @return $this
     */
    public function setProposalQuorum(?float $proposal_quorum): static
    {
        if (is_null($proposal_quorum)) {
            throw new InvalidArgumentException('non-nullable proposal_quorum cannot be null');
        }
        $this->container['proposal_quorum'] = $proposal_quorum;

        return $this;
    }

    /**
     * Gets ballot_quorum_min
     *
     * @return float|null
     */
    public function getBallotQuorumMin(): ?float
    {
        return $this->container['ballot_quorum_min'];
    }

    /**
     * Sets ballot_quorum_min
     *
     * @param float|null $ballot_quorum_min The minimum value of quorum percentage on the exploration and promotion periods
     *
     * @return $this
     */
    public function setBallotQuorumMin(?float $ballot_quorum_min): static
    {
        if (is_null($ballot_quorum_min)) {
            throw new InvalidArgumentException('non-nullable ballot_quorum_min cannot be null');
        }
        $this->container['ballot_quorum_min'] = $ballot_quorum_min;

        return $this;
    }

    /**
     * Gets ballot_quorum_max
     *
     * @return float|null
     */
    public function getBallotQuorumMax(): ?float
    {
        return $this->container['ballot_quorum_max'];
    }

    /**
     * Sets ballot_quorum_max
     *
     * @param float|null $ballot_quorum_max The maximum value of quorum percentage on the exploration and promotion periods
     *
     * @return $this
     */
    public function setBallotQuorumMax(?float $ballot_quorum_max): static
    {
        if (is_null($ballot_quorum_max)) {
            throw new InvalidArgumentException('non-nullable ballot_quorum_max cannot be null');
        }
        $this->container['ballot_quorum_max'] = $ballot_quorum_max;

        return $this;
    }

    /**
     * Gets lb_toggle_threshold
     *
     * @return int|null
     */
    public function getLbToggleThreshold(): ?int
    {
        return $this->container['lb_toggle_threshold'];
    }

    /**
     * Sets lb_toggle_threshold
     *
     * @param int|null $lb_toggle_threshold 1/2 window size of 2000 blocks with precision of 1000000 for integer computation
     *
     * @return $this
     */
    public function setLbToggleThreshold(?int $lb_toggle_threshold): static
    {
        if (is_null($lb_toggle_threshold)) {
            throw new InvalidArgumentException('non-nullable lb_toggle_threshold cannot be null');
        }
        $this->container['lb_toggle_threshold'] = $lb_toggle_threshold;

        return $this;
    }

    /**
     * Gets consensus_threshold
     *
     * @return int|null
     */
    public function getConsensusThreshold(): ?int
    {
        return $this->container['consensus_threshold'];
    }

    /**
     * Sets consensus_threshold
     *
     * @param int|null $consensus_threshold Endorsement quorum
     *
     * @return $this
     */
    public function setConsensusThreshold(?int $consensus_threshold): static
    {
        if (is_null($consensus_threshold)) {
            throw new InvalidArgumentException('non-nullable consensus_threshold cannot be null');
        }
        $this->container['consensus_threshold'] = $consensus_threshold;

        return $this;
    }

    /**
     * Gets min_participation_numerator
     *
     * @return int|null
     */
    public function getMinParticipationNumerator(): ?int
    {
        return $this->container['min_participation_numerator'];
    }

    /**
     * Sets min_participation_numerator
     *
     * @param int|null $min_participation_numerator Number of endorsed slots needed to receive endorsing rewards
     *
     * @return $this
     */
    public function setMinParticipationNumerator(?int $min_participation_numerator): static
    {
        if (is_null($min_participation_numerator)) {
            throw new InvalidArgumentException('non-nullable min_participation_numerator cannot be null');
        }
        $this->container['min_participation_numerator'] = $min_participation_numerator;

        return $this;
    }

    /**
     * Gets min_participation_denominator
     *
     * @return int|null
     */
    public function getMinParticipationDenominator(): ?int
    {
        return $this->container['min_participation_denominator'];
    }

    /**
     * Sets min_participation_denominator
     *
     * @param int|null $min_participation_denominator Number of endorsed slots needed to receive endorsing rewards
     *
     * @return $this
     */
    public function setMinParticipationDenominator(?int $min_participation_denominator): static
    {
        if (is_null($min_participation_denominator)) {
            throw new InvalidArgumentException('non-nullable min_participation_denominator cannot be null');
        }
        $this->container['min_participation_denominator'] = $min_participation_denominator;

        return $this;
    }

    /**
     * Gets denunciation_period
     *
     * @return int|null
     */
    public function getDenunciationPeriod(): ?int
    {
        return $this->container['denunciation_period'];
    }

    /**
     * Sets denunciation_period
     *
     * @param int|null $denunciation_period Number of cycles after double baking/(pre)endorsing where an accusation operation can be injected
     *
     * @return $this
     */
    public function setDenunciationPeriod(?int $denunciation_period): static
    {
        if (is_null($denunciation_period)) {
            throw new InvalidArgumentException('non-nullable denunciation_period cannot be null');
        }
        $this->container['denunciation_period'] = $denunciation_period;

        return $this;
    }

    /**
     * Gets slashing_delay
     *
     * @return int|null
     */
    public function getSlashingDelay(): ?int
    {
        return $this->container['slashing_delay'];
    }

    /**
     * Sets slashing_delay
     *
     * @param int|null $slashing_delay Number of cycles after double baking/(pre)endorsing evidence where slashing happens
     *
     * @return $this
     */
    public function setSlashingDelay(?int $slashing_delay): static
    {
        if (is_null($slashing_delay)) {
            throw new InvalidArgumentException('non-nullable slashing_delay cannot be null');
        }
        $this->container['slashing_delay'] = $slashing_delay;

        return $this;
    }

    /**
     * Gets max_delegated_over_frozen_ratio
     *
     * @return int|null
     */
    public function getMaxDelegatedOverFrozenRatio(): ?int
    {
        return $this->container['max_delegated_over_frozen_ratio'];
    }

    /**
     * Sets max_delegated_over_frozen_ratio
     *
     * @param int|null $max_delegated_over_frozen_ratio The ratio of delegated tez over the baker’s frozen stake
     *
     * @return $this
     */
    public function setMaxDelegatedOverFrozenRatio(?int $max_delegated_over_frozen_ratio): static
    {
        if (is_null($max_delegated_over_frozen_ratio)) {
            throw new InvalidArgumentException('non-nullable max_delegated_over_frozen_ratio cannot be null');
        }
        $this->container['max_delegated_over_frozen_ratio'] = $max_delegated_over_frozen_ratio;

        return $this;
    }

    /**
     * Gets max_external_over_own_stake_ratio
     *
     * @return int|null
     */
    public function getMaxExternalOverOwnStakeRatio(): ?int
    {
        return $this->container['max_external_over_own_stake_ratio'];
    }

    /**
     * Sets max_external_over_own_stake_ratio
     *
     * @param int|null $max_external_over_own_stake_ratio The ratio of external staked balance over the baker’s own staked balance
     *
     * @return $this
     */
    public function setMaxExternalOverOwnStakeRatio(?int $max_external_over_own_stake_ratio): static
    {
        if (is_null($max_external_over_own_stake_ratio)) {
            throw new InvalidArgumentException('non-nullable max_external_over_own_stake_ratio cannot be null');
        }
        $this->container['max_external_over_own_stake_ratio'] = $max_external_over_own_stake_ratio;

        return $this;
    }

    /**
     * Gets smart_rollup_origination_size
     *
     * @return int|null
     */
    public function getSmartRollupOriginationSize(): ?int
    {
        return $this->container['smart_rollup_origination_size'];
    }

    /**
     * Sets smart_rollup_origination_size
     *
     * @param int|null $smart_rollup_origination_size Initial storage size of an originated (created) smart rollup (bytes)
     *
     * @return $this
     */
    public function setSmartRollupOriginationSize(?int $smart_rollup_origination_size): static
    {
        if (is_null($smart_rollup_origination_size)) {
            throw new InvalidArgumentException('non-nullable smart_rollup_origination_size cannot be null');
        }
        $this->container['smart_rollup_origination_size'] = $smart_rollup_origination_size;

        return $this;
    }

    /**
     * Gets smart_rollup_stake_amount
     *
     * @return int|null
     */
    public function getSmartRollupStakeAmount(): ?int
    {
        return $this->container['smart_rollup_stake_amount'];
    }

    /**
     * Sets smart_rollup_stake_amount
     *
     * @param int|null $smart_rollup_stake_amount Smart rollup commitment bond (mutez)
     *
     * @return $this
     */
    public function setSmartRollupStakeAmount(?int $smart_rollup_stake_amount): static
    {
        if (is_null($smart_rollup_stake_amount)) {
            throw new InvalidArgumentException('non-nullable smart_rollup_stake_amount cannot be null');
        }
        $this->container['smart_rollup_stake_amount'] = $smart_rollup_stake_amount;

        return $this;
    }

    /**
     * Gets smart_rollup_challenge_window
     *
     * @return int|null
     */
    public function getSmartRollupChallengeWindow(): ?int
    {
        return $this->container['smart_rollup_challenge_window'];
    }

    /**
     * Sets smart_rollup_challenge_window
     *
     * @param int|null $smart_rollup_challenge_window Window (in blocks) when it's possible to refute pending commitment
     *
     * @return $this
     */
    public function setSmartRollupChallengeWindow(?int $smart_rollup_challenge_window): static
    {
        if (is_null($smart_rollup_challenge_window)) {
            throw new InvalidArgumentException('non-nullable smart_rollup_challenge_window cannot be null');
        }
        $this->container['smart_rollup_challenge_window'] = $smart_rollup_challenge_window;

        return $this;
    }

    /**
     * Gets smart_rollup_commitment_period
     *
     * @return int|null
     */
    public function getSmartRollupCommitmentPeriod(): ?int
    {
        return $this->container['smart_rollup_commitment_period'];
    }

    /**
     * Sets smart_rollup_commitment_period
     *
     * @param int|null $smart_rollup_commitment_period Period (in blocks) for publishing commitments
     *
     * @return $this
     */
    public function setSmartRollupCommitmentPeriod(?int $smart_rollup_commitment_period): static
    {
        if (is_null($smart_rollup_commitment_period)) {
            throw new InvalidArgumentException('non-nullable smart_rollup_commitment_period cannot be null');
        }
        $this->container['smart_rollup_commitment_period'] = $smart_rollup_commitment_period;

        return $this;
    }

    /**
     * Gets smart_rollup_timeout_period
     *
     * @return int|null
     */
    public function getSmartRollupTimeoutPeriod(): ?int
    {
        return $this->container['smart_rollup_timeout_period'];
    }

    /**
     * Sets smart_rollup_timeout_period
     *
     * @param int|null $smart_rollup_timeout_period Period (in blocks) when a refutation game player must make a turn
     *
     * @return $this
     */
    public function setSmartRollupTimeoutPeriod(?int $smart_rollup_timeout_period): static
    {
        if (is_null($smart_rollup_timeout_period)) {
            throw new InvalidArgumentException('non-nullable smart_rollup_timeout_period cannot be null');
        }
        $this->container['smart_rollup_timeout_period'] = $smart_rollup_timeout_period;

        return $this;
    }

    /**
     * Gets dal_number_of_shards
     *
     * @return int|null
     */
    public function getDalNumberOfShards(): ?int
    {
        return $this->container['dal_number_of_shards'];
    }

    /**
     * Sets dal_number_of_shards
     *
     * @param int|null $dal_number_of_shards Number of DAL Shards
     *
     * @return $this
     */
    public function setDalNumberOfShards(?int $dal_number_of_shards): static
    {
        if (is_null($dal_number_of_shards)) {
            throw new InvalidArgumentException('non-nullable dal_number_of_shards cannot be null');
        }
        $this->container['dal_number_of_shards'] = $dal_number_of_shards;

        return $this;
    }

    /**
     * Gets dictator
     *
     * @return string|null
     */
    public function getDictator(): ?string
    {
        return $this->container['dictator'];
    }

    /**
     * Sets dictator
     *
     * @param string|null $dictator Governance dictator
     *
     * @return $this
     */
    public function setDictator(?string $dictator): static
    {
        if (is_null($dictator)) {
            array_push($this->openAPINullablesSetToNull, 'dictator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dictator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dictator'] = $dictator;

        return $this;
    }

    /**
     * Gets max_slashing_period
     *
     * @return int|null
     */
    public function getMaxSlashingPeriod(): ?int
    {
        return $this->container['max_slashing_period'];
    }

    /**
     * Sets max_slashing_period
     *
     * @param int|null $max_slashing_period [DEPRECATED]
     *
     * @return $this
     */
    public function setMaxSlashingPeriod(?int $max_slashing_period): static
    {
        if (is_null($max_slashing_period)) {
            throw new InvalidArgumentException('non-nullable max_slashing_period cannot be null');
        }
        $this->container['max_slashing_period'] = $max_slashing_period;

        return $this;
    }

    /**
     * Gets preserved_cycles
     *
     * @return int|null
     */
    public function getPreservedCycles(): ?int
    {
        return $this->container['preserved_cycles'];
    }

    /**
     * Sets preserved_cycles
     *
     * @param int|null $preserved_cycles [DEPRECATED]
     *
     * @return $this
     */
    public function setPreservedCycles(?int $preserved_cycles): static
    {
        if (is_null($preserved_cycles)) {
            throw new InvalidArgumentException('non-nullable preserved_cycles cannot be null');
        }
        $this->container['preserved_cycles'] = $preserved_cycles;

        return $this;
    }

    /**
     * Gets lb_escape_threshold
     *
     * @return int|null
     */
    public function getLbEscapeThreshold(): ?int
    {
        return $this->container['lb_escape_threshold'];
    }

    /**
     * Sets lb_escape_threshold
     *
     * @param int|null $lb_escape_threshold [DEPRECATED]
     *
     * @return $this
     */
    public function setLbEscapeThreshold(?int $lb_escape_threshold): static
    {
        if (is_null($lb_escape_threshold)) {
            throw new InvalidArgumentException('non-nullable lb_escape_threshold cannot be null');
        }
        $this->container['lb_escape_threshold'] = $lb_escape_threshold;

        return $this;
    }

    /**
     * Gets lb_sunset_level
     *
     * @return int|null
     */
    public function getLbSunsetLevel(): ?int
    {
        return $this->container['lb_sunset_level'];
    }

    /**
     * Sets lb_sunset_level
     *
     * @param int|null $lb_sunset_level [DEPRECATED]
     *
     * @return $this
     */
    public function setLbSunsetLevel(?int $lb_sunset_level): static
    {
        if (is_null($lb_sunset_level)) {
            throw new InvalidArgumentException('non-nullable lb_sunset_level cannot be null');
        }
        $this->container['lb_sunset_level'] = $lb_sunset_level;

        return $this;
    }

    /**
     * Gets frozen_deposits_percentage
     *
     * @return int|null
     */
    public function getFrozenDepositsPercentage(): ?int
    {
        return $this->container['frozen_deposits_percentage'];
    }

    /**
     * Sets frozen_deposits_percentage
     *
     * @param int|null $frozen_deposits_percentage [DEPRECATED]
     *
     * @return $this
     */
    public function setFrozenDepositsPercentage(?int $frozen_deposits_percentage): static
    {
        if (is_null($frozen_deposits_percentage)) {
            throw new InvalidArgumentException('non-nullable frozen_deposits_percentage cannot be null');
        }
        $this->container['frozen_deposits_percentage'] = $frozen_deposits_percentage;

        return $this;
    }

    /**
     * Gets tx_rollup_origination_size
     *
     * @return int|null
     */
    public function getTxRollupOriginationSize(): ?int
    {
        return $this->container['tx_rollup_origination_size'];
    }

    /**
     * Sets tx_rollup_origination_size
     *
     * @param int|null $tx_rollup_origination_size [DEPRECATED]
     *
     * @return $this
     */
    public function setTxRollupOriginationSize(?int $tx_rollup_origination_size): static
    {
        if (is_null($tx_rollup_origination_size)) {
            throw new InvalidArgumentException('non-nullable tx_rollup_origination_size cannot be null');
        }
        $this->container['tx_rollup_origination_size'] = $tx_rollup_origination_size;

        return $this;
    }

    /**
     * Gets tx_rollup_commitment_bond
     *
     * @return int|null
     */
    public function getTxRollupCommitmentBond(): ?int
    {
        return $this->container['tx_rollup_commitment_bond'];
    }

    /**
     * Sets tx_rollup_commitment_bond
     *
     * @param int|null $tx_rollup_commitment_bond [DEPRECATED]
     *
     * @return $this
     */
    public function setTxRollupCommitmentBond(?int $tx_rollup_commitment_bond): static
    {
        if (is_null($tx_rollup_commitment_bond)) {
            throw new InvalidArgumentException('non-nullable tx_rollup_commitment_bond cannot be null');
        }
        $this->container['tx_rollup_commitment_bond'] = $tx_rollup_commitment_bond;

        return $this;
    }

    /**
     * Gets double_baking_punishment
     *
     * @return int|null
     */
    public function getDoubleBakingPunishment(): ?int
    {
        return $this->container['double_baking_punishment'];
    }

    /**
     * Sets double_baking_punishment
     *
     * @param int|null $double_baking_punishment [DEPRECATED]
     *
     * @return $this
     */
    public function setDoubleBakingPunishment(?int $double_baking_punishment): static
    {
        if (is_null($double_baking_punishment)) {
            throw new InvalidArgumentException('non-nullable double_baking_punishment cannot be null');
        }
        $this->container['double_baking_punishment'] = $double_baking_punishment;

        return $this;
    }

    /**
     * Gets double_endorsing_punishment_numerator
     *
     * @return int|null
     */
    public function getDoubleEndorsingPunishmentNumerator(): ?int
    {
        return $this->container['double_endorsing_punishment_numerator'];
    }

    /**
     * Sets double_endorsing_punishment_numerator
     *
     * @param int|null $double_endorsing_punishment_numerator [DEPRECATED]
     *
     * @return $this
     */
    public function setDoubleEndorsingPunishmentNumerator(?int $double_endorsing_punishment_numerator): static
    {
        if (is_null($double_endorsing_punishment_numerator)) {
            throw new InvalidArgumentException('non-nullable double_endorsing_punishment_numerator cannot be null');
        }
        $this->container['double_endorsing_punishment_numerator'] = $double_endorsing_punishment_numerator;

        return $this;
    }

    /**
     * Gets double_endorsing_punishment_denominator
     *
     * @return int|null
     */
    public function getDoubleEndorsingPunishmentDenominator(): ?int
    {
        return $this->container['double_endorsing_punishment_denominator'];
    }

    /**
     * Sets double_endorsing_punishment_denominator
     *
     * @param int|null $double_endorsing_punishment_denominator [DEPRECATED]
     *
     * @return $this
     */
    public function setDoubleEndorsingPunishmentDenominator(?int $double_endorsing_punishment_denominator): static
    {
        if (is_null($double_endorsing_punishment_denominator)) {
            throw new InvalidArgumentException('non-nullable double_endorsing_punishment_denominator cannot be null');
        }
        $this->container['double_endorsing_punishment_denominator'] = $double_endorsing_punishment_denominator;

        return $this;
    }

    /**
     * Gets revelation_reward
     *
     * @return int|null
     */
    public function getRevelationReward(): ?int
    {
        return $this->container['revelation_reward'];
    }

    /**
     * Sets revelation_reward
     *
     * @param int|null $revelation_reward [DEPRECATED]
     *
     * @return $this
     */
    public function setRevelationReward(?int $revelation_reward): static
    {
        if (is_null($revelation_reward)) {
            throw new InvalidArgumentException('non-nullable revelation_reward cannot be null');
        }
        $this->container['revelation_reward'] = $revelation_reward;

        return $this;
    }

    /**
     * Gets lb_subsidy
     *
     * @return int|null
     */
    public function getLbSubsidy(): ?int
    {
        return $this->container['lb_subsidy'];
    }

    /**
     * Sets lb_subsidy
     *
     * @param int|null $lb_subsidy [DEPRECATED]
     *
     * @return $this
     */
    public function setLbSubsidy(?int $lb_subsidy): static
    {
        if (is_null($lb_subsidy)) {
            throw new InvalidArgumentException('non-nullable lb_subsidy cannot be null');
        }
        $this->container['lb_subsidy'] = $lb_subsidy;

        return $this;
    }

    /**
     * Gets tokens_per_roll
     *
     * @return int|null
     */
    public function getTokensPerRoll(): ?int
    {
        return $this->container['tokens_per_roll'];
    }

    /**
     * Sets tokens_per_roll
     *
     * @param int|null $tokens_per_roll [DEPRECATED]
     *
     * @return $this
     */
    public function setTokensPerRoll(?int $tokens_per_roll): static
    {
        if (is_null($tokens_per_roll)) {
            throw new InvalidArgumentException('non-nullable tokens_per_roll cannot be null');
        }
        $this->container['tokens_per_roll'] = $tokens_per_roll;

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


