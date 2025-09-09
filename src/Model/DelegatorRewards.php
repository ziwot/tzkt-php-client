<?php
/**
 * DelegatorRewards
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
 * # Introduction    TzKT is the most widely used tool in Tezos that provides you with convenient and flexible access to the Tezos blockchain data, processed and indexed by its own indexer.   You can fetch all historical data via REST API, or subscribe for real-time data via WebSocket API. TzKT was built by the joint efforts of the entire Tezos community   to help developers build more services and dapps on top of Tezos.    TzKT Indexer and API are [open-source](https://github.com/baking-bad/tzkt), so don't be afraid to depend on the third-party service,  because you can always clone, build and run it yourself to have full control over all the components.    Feel free to contact us if you have any questions or feature requests.  Your feedback is much appreciated!    - Discord: https://discord.gg/aG8XKuwsQd  - Telegram: https://t.me/baking_bad_chat  - Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L  - Twitter: https://twitter.com/TezosBakingBad  - Email: hello@bakingbad.dev    And don't forget to star TzKT [on GitHub](https://github.com/baking-bad/tzkt) if you like it 😊    # Get Started    There are two API services provided for public use:  - **Free TzKT API** with free anonymous access;  - **TzKT Pro** with paid subscriptions with increased rate limits, off-chain data, extended support and business-level SLA.    You can find more details about differences between available tiers [here](https://tzkt.io/api).    ## Free TzKT API    Free-tier TzKT API is the best way to get started and explore available Tezos data and API functionality.  It doesn't require authorization and is free for everyone and for both commercial and non-commercial use.    > #### Note: attribution required  If you use free-tier TzKT API, you **must** mention it on your website or application by placing the label  \"Powered by TzKT API\", or \"Built with TzKT API\", or \"Data provided by TzKT API\" with a direct link to [tzkt.io](https://tzkt.io).    It's available for the following Tezos networks with the following base URLs:    - Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io))  - Ghostnet: `https://api.ghostnet.tzkt.io/` ([view docs](https://api.ghostnet.tzkt.io))  - Seoulnet: `https://api.seoulnet.tzkt.io/` ([view docs](https://api.seoulnet.tzkt.io))    ### Sending Requests    To send a request to Free TzKT API you need literally nothing. Just take the base URL of the particular network  (for example, Tezos mainnet: `https://api.tzkt.io`) and append the path of the particular endpoint  (for example, chain's head: `/v1/head`), that's pretty much it:     ```bash  curl https://api.tzkt.io/v1/head  ```    Read through this documentation to explore available endpoints, query parameters  (note, if you click on a query parameter, you will see available modes, such as `.eq`, `.in`, etc.)  and response models. If you have any questions, do not hesitate to ask for support, Tezos community has always been very friendly! 😉    ### Rate Limits    Please, refer to https://tzkt.io/api to check relevant rate limits.    If you exceed the limit, the API will respond with `HTTP 429` status code.    ## TzKT Pro    TzKT Pro is intended for professional use, for those who seek for extended capabilities, performance, reliability and business-level SLA.  TzKT Pro service is provided via paid subscriptions. Please, refer to [Pricing Plans](https://tzkt.io/api) to check available tiers.    It's available for the following Tezos networks with the following base URLs:    - Mainnet: `https://pro.tzkt.io/` ([view docs](https://api.tzkt.io))  - Testnets: *let us know if you need TzKT Pro for testnets*    ### Authorization    To access TzKT Pro you will need to authorize requests with your personal API key, that you will receive on your email after purchasing a subscription.  This can be done by adding the query string parameter `?apikey={your_key}` or by adding the HTTP header `apikey: {your_key}`.    Note that you can have multiple API keys within a single subscription.    Keep your API keys private, do not publish it anywhere and do not hardcode it, especially in public repositories.  If your key was compromised, just let us know and we will issue a new one.    Also note that passing the API key via HTTP headers is more secure, because in HTTPS headers are encrypted,  but query string is not, so the key can be unintentionally exposed to third parties.    ### Sending Requests    Sending a request with the API key passed as a query string parameter:    ```bash  curl https://pro.tzkt.io/v1/head?apikey={your_key}  ```    Sending a request with the API key passed via an HTTP header:    ```bash  curl https://pro.tzkt.io/v1/head \\      -H 'apikey: {your_key}'  ```    ### Rate Limits    Please, refer to https://tzkt.io/api to check relevant rate limits for different pricing plans.    Also, TzKT Pro provides you with the additional HTTP headers to show the allowed limits, number of available requests  and the time remaining (in seconds) until the quota is reset. Here's an example:    ```  RateLimit-Limit: 50  RateLimit-Remaining: 49  RateLimit-Reset: 1  ```    It also sends general information about your rate limits per second and per day:    ```  X-RateLimit-Limit-Second: 50  X-RateLimit-Remaining-Second: 49  X-RateLimit-Limit-Day: 3000000  X-RateLimit-Remaining-Day: 2994953  ```    If you exceed the limit, the API will respond with `HTTP 429` status code.
 *
 * The version of the OpenAPI document: 1.16.0
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
 * DelegatorRewards Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DelegatorRewards implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DelegatorRewards';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'cycle' => 'int',
        'baker' => '\Tzkt\Model\DelegatorRewardsBaker',
        'delegated_balance' => 'int',
        'staked_pseudotokens' => 'string',
        'staked_balance' => 'int',
        'baker_rewards' => '\Tzkt\Model\DelegatorRewardsBakerRewards',
        'quote' => '\Tzkt\Model\CycleQuote',
        'baking_power' => 'int',
        'total_baking_power' => 'int',
        'baker_delegated_balance' => 'int',
        'external_delegated_balance' => 'int',
        'baker_staked_balance' => 'int',
        'external_staked_balance' => 'int',
        'expected_blocks' => 'float',
        'expected_endorsements' => 'float',
        'expected_dal_shards' => 'int',
        'future_blocks' => 'int',
        'future_block_rewards' => 'int',
        'blocks' => 'int',
        'block_rewards_delegated' => 'int',
        'block_rewards_staked_own' => 'int',
        'block_rewards_staked_edge' => 'int',
        'block_rewards_staked_shared' => 'int',
        'missed_blocks' => 'int',
        'missed_block_rewards' => 'int',
        'future_endorsements' => 'int',
        'future_endorsement_rewards' => 'int',
        'endorsements' => 'int',
        'endorsement_rewards_delegated' => 'int',
        'endorsement_rewards_staked_own' => 'int',
        'endorsement_rewards_staked_edge' => 'int',
        'endorsement_rewards_staked_shared' => 'int',
        'missed_endorsements' => 'int',
        'missed_endorsement_rewards' => 'int',
        'future_dal_attestation_rewards' => 'int',
        'dal_attestation_rewards_delegated' => 'int',
        'dal_attestation_rewards_staked_own' => 'int',
        'dal_attestation_rewards_staked_edge' => 'int',
        'dal_attestation_rewards_staked_shared' => 'int',
        'missed_dal_attestation_rewards' => 'int',
        'block_fees' => 'int',
        'missed_block_fees' => 'int',
        'double_baking_rewards' => 'int',
        'double_baking_lost_staked' => 'int',
        'double_baking_lost_unstaked' => 'int',
        'double_baking_lost_external_staked' => 'int',
        'double_baking_lost_external_unstaked' => 'int',
        'double_endorsing_rewards' => 'int',
        'double_endorsing_lost_staked' => 'int',
        'double_endorsing_lost_unstaked' => 'int',
        'double_endorsing_lost_external_staked' => 'int',
        'double_endorsing_lost_external_unstaked' => 'int',
        'double_preendorsing_rewards' => 'int',
        'double_preendorsing_lost_staked' => 'int',
        'double_preendorsing_lost_unstaked' => 'int',
        'double_preendorsing_lost_external_staked' => 'int',
        'double_preendorsing_lost_external_unstaked' => 'int',
        'vdf_revelation_rewards_delegated' => 'int',
        'vdf_revelation_rewards_staked_own' => 'int',
        'vdf_revelation_rewards_staked_edge' => 'int',
        'vdf_revelation_rewards_staked_shared' => 'int',
        'nonce_revelation_rewards_delegated' => 'int',
        'nonce_revelation_rewards_staked_own' => 'int',
        'nonce_revelation_rewards_staked_edge' => 'int',
        'nonce_revelation_rewards_staked_shared' => 'int',
        'nonce_revelation_losses' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'cycle' => 'int32',
        'baker' => null,
        'delegated_balance' => 'int64',
        'staked_pseudotokens' => null,
        'staked_balance' => 'int64',
        'baker_rewards' => null,
        'quote' => null,
        'baking_power' => 'int64',
        'total_baking_power' => 'int64',
        'baker_delegated_balance' => 'int64',
        'external_delegated_balance' => 'int64',
        'baker_staked_balance' => 'int64',
        'external_staked_balance' => 'int64',
        'expected_blocks' => 'double',
        'expected_endorsements' => 'double',
        'expected_dal_shards' => 'int64',
        'future_blocks' => 'int32',
        'future_block_rewards' => 'int64',
        'blocks' => 'int32',
        'block_rewards_delegated' => 'int64',
        'block_rewards_staked_own' => 'int64',
        'block_rewards_staked_edge' => 'int64',
        'block_rewards_staked_shared' => 'int64',
        'missed_blocks' => 'int32',
        'missed_block_rewards' => 'int64',
        'future_endorsements' => 'int32',
        'future_endorsement_rewards' => 'int64',
        'endorsements' => 'int32',
        'endorsement_rewards_delegated' => 'int64',
        'endorsement_rewards_staked_own' => 'int64',
        'endorsement_rewards_staked_edge' => 'int64',
        'endorsement_rewards_staked_shared' => 'int64',
        'missed_endorsements' => 'int32',
        'missed_endorsement_rewards' => 'int64',
        'future_dal_attestation_rewards' => 'int64',
        'dal_attestation_rewards_delegated' => 'int64',
        'dal_attestation_rewards_staked_own' => 'int64',
        'dal_attestation_rewards_staked_edge' => 'int64',
        'dal_attestation_rewards_staked_shared' => 'int64',
        'missed_dal_attestation_rewards' => 'int64',
        'block_fees' => 'int64',
        'missed_block_fees' => 'int64',
        'double_baking_rewards' => 'int64',
        'double_baking_lost_staked' => 'int64',
        'double_baking_lost_unstaked' => 'int64',
        'double_baking_lost_external_staked' => 'int64',
        'double_baking_lost_external_unstaked' => 'int64',
        'double_endorsing_rewards' => 'int64',
        'double_endorsing_lost_staked' => 'int64',
        'double_endorsing_lost_unstaked' => 'int64',
        'double_endorsing_lost_external_staked' => 'int64',
        'double_endorsing_lost_external_unstaked' => 'int64',
        'double_preendorsing_rewards' => 'int64',
        'double_preendorsing_lost_staked' => 'int64',
        'double_preendorsing_lost_unstaked' => 'int64',
        'double_preendorsing_lost_external_staked' => 'int64',
        'double_preendorsing_lost_external_unstaked' => 'int64',
        'vdf_revelation_rewards_delegated' => 'int64',
        'vdf_revelation_rewards_staked_own' => 'int64',
        'vdf_revelation_rewards_staked_edge' => 'int64',
        'vdf_revelation_rewards_staked_shared' => 'int64',
        'nonce_revelation_rewards_delegated' => 'int64',
        'nonce_revelation_rewards_staked_own' => 'int64',
        'nonce_revelation_rewards_staked_edge' => 'int64',
        'nonce_revelation_rewards_staked_shared' => 'int64',
        'nonce_revelation_losses' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'cycle' => false,
        'baker' => false,
        'delegated_balance' => false,
        'staked_pseudotokens' => true,
        'staked_balance' => true,
        'baker_rewards' => false,
        'quote' => true,
        'baking_power' => false,
        'total_baking_power' => false,
        'baker_delegated_balance' => false,
        'external_delegated_balance' => false,
        'baker_staked_balance' => false,
        'external_staked_balance' => false,
        'expected_blocks' => false,
        'expected_endorsements' => false,
        'expected_dal_shards' => false,
        'future_blocks' => false,
        'future_block_rewards' => false,
        'blocks' => false,
        'block_rewards_delegated' => false,
        'block_rewards_staked_own' => false,
        'block_rewards_staked_edge' => false,
        'block_rewards_staked_shared' => false,
        'missed_blocks' => false,
        'missed_block_rewards' => false,
        'future_endorsements' => false,
        'future_endorsement_rewards' => false,
        'endorsements' => false,
        'endorsement_rewards_delegated' => false,
        'endorsement_rewards_staked_own' => false,
        'endorsement_rewards_staked_edge' => false,
        'endorsement_rewards_staked_shared' => false,
        'missed_endorsements' => false,
        'missed_endorsement_rewards' => false,
        'future_dal_attestation_rewards' => false,
        'dal_attestation_rewards_delegated' => false,
        'dal_attestation_rewards_staked_own' => false,
        'dal_attestation_rewards_staked_edge' => false,
        'dal_attestation_rewards_staked_shared' => false,
        'missed_dal_attestation_rewards' => false,
        'block_fees' => false,
        'missed_block_fees' => false,
        'double_baking_rewards' => false,
        'double_baking_lost_staked' => false,
        'double_baking_lost_unstaked' => false,
        'double_baking_lost_external_staked' => false,
        'double_baking_lost_external_unstaked' => false,
        'double_endorsing_rewards' => false,
        'double_endorsing_lost_staked' => false,
        'double_endorsing_lost_unstaked' => false,
        'double_endorsing_lost_external_staked' => false,
        'double_endorsing_lost_external_unstaked' => false,
        'double_preendorsing_rewards' => false,
        'double_preendorsing_lost_staked' => false,
        'double_preendorsing_lost_unstaked' => false,
        'double_preendorsing_lost_external_staked' => false,
        'double_preendorsing_lost_external_unstaked' => false,
        'vdf_revelation_rewards_delegated' => false,
        'vdf_revelation_rewards_staked_own' => false,
        'vdf_revelation_rewards_staked_edge' => false,
        'vdf_revelation_rewards_staked_shared' => false,
        'nonce_revelation_rewards_delegated' => false,
        'nonce_revelation_rewards_staked_own' => false,
        'nonce_revelation_rewards_staked_edge' => false,
        'nonce_revelation_rewards_staked_shared' => false,
        'nonce_revelation_losses' => false
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
        'baker' => 'baker',
        'delegated_balance' => 'delegatedBalance',
        'staked_pseudotokens' => 'stakedPseudotokens',
        'staked_balance' => 'stakedBalance',
        'baker_rewards' => 'bakerRewards',
        'quote' => 'quote',
        'baking_power' => 'bakingPower',
        'total_baking_power' => 'totalBakingPower',
        'baker_delegated_balance' => 'bakerDelegatedBalance',
        'external_delegated_balance' => 'externalDelegatedBalance',
        'baker_staked_balance' => 'bakerStakedBalance',
        'external_staked_balance' => 'externalStakedBalance',
        'expected_blocks' => 'expectedBlocks',
        'expected_endorsements' => 'expectedEndorsements',
        'expected_dal_shards' => 'expectedDalShards',
        'future_blocks' => 'futureBlocks',
        'future_block_rewards' => 'futureBlockRewards',
        'blocks' => 'blocks',
        'block_rewards_delegated' => 'blockRewardsDelegated',
        'block_rewards_staked_own' => 'blockRewardsStakedOwn',
        'block_rewards_staked_edge' => 'blockRewardsStakedEdge',
        'block_rewards_staked_shared' => 'blockRewardsStakedShared',
        'missed_blocks' => 'missedBlocks',
        'missed_block_rewards' => 'missedBlockRewards',
        'future_endorsements' => 'futureEndorsements',
        'future_endorsement_rewards' => 'futureEndorsementRewards',
        'endorsements' => 'endorsements',
        'endorsement_rewards_delegated' => 'endorsementRewardsDelegated',
        'endorsement_rewards_staked_own' => 'endorsementRewardsStakedOwn',
        'endorsement_rewards_staked_edge' => 'endorsementRewardsStakedEdge',
        'endorsement_rewards_staked_shared' => 'endorsementRewardsStakedShared',
        'missed_endorsements' => 'missedEndorsements',
        'missed_endorsement_rewards' => 'missedEndorsementRewards',
        'future_dal_attestation_rewards' => 'futureDalAttestationRewards',
        'dal_attestation_rewards_delegated' => 'dalAttestationRewardsDelegated',
        'dal_attestation_rewards_staked_own' => 'dalAttestationRewardsStakedOwn',
        'dal_attestation_rewards_staked_edge' => 'dalAttestationRewardsStakedEdge',
        'dal_attestation_rewards_staked_shared' => 'dalAttestationRewardsStakedShared',
        'missed_dal_attestation_rewards' => 'missedDalAttestationRewards',
        'block_fees' => 'blockFees',
        'missed_block_fees' => 'missedBlockFees',
        'double_baking_rewards' => 'doubleBakingRewards',
        'double_baking_lost_staked' => 'doubleBakingLostStaked',
        'double_baking_lost_unstaked' => 'doubleBakingLostUnstaked',
        'double_baking_lost_external_staked' => 'doubleBakingLostExternalStaked',
        'double_baking_lost_external_unstaked' => 'doubleBakingLostExternalUnstaked',
        'double_endorsing_rewards' => 'doubleEndorsingRewards',
        'double_endorsing_lost_staked' => 'doubleEndorsingLostStaked',
        'double_endorsing_lost_unstaked' => 'doubleEndorsingLostUnstaked',
        'double_endorsing_lost_external_staked' => 'doubleEndorsingLostExternalStaked',
        'double_endorsing_lost_external_unstaked' => 'doubleEndorsingLostExternalUnstaked',
        'double_preendorsing_rewards' => 'doublePreendorsingRewards',
        'double_preendorsing_lost_staked' => 'doublePreendorsingLostStaked',
        'double_preendorsing_lost_unstaked' => 'doublePreendorsingLostUnstaked',
        'double_preendorsing_lost_external_staked' => 'doublePreendorsingLostExternalStaked',
        'double_preendorsing_lost_external_unstaked' => 'doublePreendorsingLostExternalUnstaked',
        'vdf_revelation_rewards_delegated' => 'vdfRevelationRewardsDelegated',
        'vdf_revelation_rewards_staked_own' => 'vdfRevelationRewardsStakedOwn',
        'vdf_revelation_rewards_staked_edge' => 'vdfRevelationRewardsStakedEdge',
        'vdf_revelation_rewards_staked_shared' => 'vdfRevelationRewardsStakedShared',
        'nonce_revelation_rewards_delegated' => 'nonceRevelationRewardsDelegated',
        'nonce_revelation_rewards_staked_own' => 'nonceRevelationRewardsStakedOwn',
        'nonce_revelation_rewards_staked_edge' => 'nonceRevelationRewardsStakedEdge',
        'nonce_revelation_rewards_staked_shared' => 'nonceRevelationRewardsStakedShared',
        'nonce_revelation_losses' => 'nonceRevelationLosses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'cycle' => 'setCycle',
        'baker' => 'setBaker',
        'delegated_balance' => 'setDelegatedBalance',
        'staked_pseudotokens' => 'setStakedPseudotokens',
        'staked_balance' => 'setStakedBalance',
        'baker_rewards' => 'setBakerRewards',
        'quote' => 'setQuote',
        'baking_power' => 'setBakingPower',
        'total_baking_power' => 'setTotalBakingPower',
        'baker_delegated_balance' => 'setBakerDelegatedBalance',
        'external_delegated_balance' => 'setExternalDelegatedBalance',
        'baker_staked_balance' => 'setBakerStakedBalance',
        'external_staked_balance' => 'setExternalStakedBalance',
        'expected_blocks' => 'setExpectedBlocks',
        'expected_endorsements' => 'setExpectedEndorsements',
        'expected_dal_shards' => 'setExpectedDalShards',
        'future_blocks' => 'setFutureBlocks',
        'future_block_rewards' => 'setFutureBlockRewards',
        'blocks' => 'setBlocks',
        'block_rewards_delegated' => 'setBlockRewardsDelegated',
        'block_rewards_staked_own' => 'setBlockRewardsStakedOwn',
        'block_rewards_staked_edge' => 'setBlockRewardsStakedEdge',
        'block_rewards_staked_shared' => 'setBlockRewardsStakedShared',
        'missed_blocks' => 'setMissedBlocks',
        'missed_block_rewards' => 'setMissedBlockRewards',
        'future_endorsements' => 'setFutureEndorsements',
        'future_endorsement_rewards' => 'setFutureEndorsementRewards',
        'endorsements' => 'setEndorsements',
        'endorsement_rewards_delegated' => 'setEndorsementRewardsDelegated',
        'endorsement_rewards_staked_own' => 'setEndorsementRewardsStakedOwn',
        'endorsement_rewards_staked_edge' => 'setEndorsementRewardsStakedEdge',
        'endorsement_rewards_staked_shared' => 'setEndorsementRewardsStakedShared',
        'missed_endorsements' => 'setMissedEndorsements',
        'missed_endorsement_rewards' => 'setMissedEndorsementRewards',
        'future_dal_attestation_rewards' => 'setFutureDalAttestationRewards',
        'dal_attestation_rewards_delegated' => 'setDalAttestationRewardsDelegated',
        'dal_attestation_rewards_staked_own' => 'setDalAttestationRewardsStakedOwn',
        'dal_attestation_rewards_staked_edge' => 'setDalAttestationRewardsStakedEdge',
        'dal_attestation_rewards_staked_shared' => 'setDalAttestationRewardsStakedShared',
        'missed_dal_attestation_rewards' => 'setMissedDalAttestationRewards',
        'block_fees' => 'setBlockFees',
        'missed_block_fees' => 'setMissedBlockFees',
        'double_baking_rewards' => 'setDoubleBakingRewards',
        'double_baking_lost_staked' => 'setDoubleBakingLostStaked',
        'double_baking_lost_unstaked' => 'setDoubleBakingLostUnstaked',
        'double_baking_lost_external_staked' => 'setDoubleBakingLostExternalStaked',
        'double_baking_lost_external_unstaked' => 'setDoubleBakingLostExternalUnstaked',
        'double_endorsing_rewards' => 'setDoubleEndorsingRewards',
        'double_endorsing_lost_staked' => 'setDoubleEndorsingLostStaked',
        'double_endorsing_lost_unstaked' => 'setDoubleEndorsingLostUnstaked',
        'double_endorsing_lost_external_staked' => 'setDoubleEndorsingLostExternalStaked',
        'double_endorsing_lost_external_unstaked' => 'setDoubleEndorsingLostExternalUnstaked',
        'double_preendorsing_rewards' => 'setDoublePreendorsingRewards',
        'double_preendorsing_lost_staked' => 'setDoublePreendorsingLostStaked',
        'double_preendorsing_lost_unstaked' => 'setDoublePreendorsingLostUnstaked',
        'double_preendorsing_lost_external_staked' => 'setDoublePreendorsingLostExternalStaked',
        'double_preendorsing_lost_external_unstaked' => 'setDoublePreendorsingLostExternalUnstaked',
        'vdf_revelation_rewards_delegated' => 'setVdfRevelationRewardsDelegated',
        'vdf_revelation_rewards_staked_own' => 'setVdfRevelationRewardsStakedOwn',
        'vdf_revelation_rewards_staked_edge' => 'setVdfRevelationRewardsStakedEdge',
        'vdf_revelation_rewards_staked_shared' => 'setVdfRevelationRewardsStakedShared',
        'nonce_revelation_rewards_delegated' => 'setNonceRevelationRewardsDelegated',
        'nonce_revelation_rewards_staked_own' => 'setNonceRevelationRewardsStakedOwn',
        'nonce_revelation_rewards_staked_edge' => 'setNonceRevelationRewardsStakedEdge',
        'nonce_revelation_rewards_staked_shared' => 'setNonceRevelationRewardsStakedShared',
        'nonce_revelation_losses' => 'setNonceRevelationLosses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'cycle' => 'getCycle',
        'baker' => 'getBaker',
        'delegated_balance' => 'getDelegatedBalance',
        'staked_pseudotokens' => 'getStakedPseudotokens',
        'staked_balance' => 'getStakedBalance',
        'baker_rewards' => 'getBakerRewards',
        'quote' => 'getQuote',
        'baking_power' => 'getBakingPower',
        'total_baking_power' => 'getTotalBakingPower',
        'baker_delegated_balance' => 'getBakerDelegatedBalance',
        'external_delegated_balance' => 'getExternalDelegatedBalance',
        'baker_staked_balance' => 'getBakerStakedBalance',
        'external_staked_balance' => 'getExternalStakedBalance',
        'expected_blocks' => 'getExpectedBlocks',
        'expected_endorsements' => 'getExpectedEndorsements',
        'expected_dal_shards' => 'getExpectedDalShards',
        'future_blocks' => 'getFutureBlocks',
        'future_block_rewards' => 'getFutureBlockRewards',
        'blocks' => 'getBlocks',
        'block_rewards_delegated' => 'getBlockRewardsDelegated',
        'block_rewards_staked_own' => 'getBlockRewardsStakedOwn',
        'block_rewards_staked_edge' => 'getBlockRewardsStakedEdge',
        'block_rewards_staked_shared' => 'getBlockRewardsStakedShared',
        'missed_blocks' => 'getMissedBlocks',
        'missed_block_rewards' => 'getMissedBlockRewards',
        'future_endorsements' => 'getFutureEndorsements',
        'future_endorsement_rewards' => 'getFutureEndorsementRewards',
        'endorsements' => 'getEndorsements',
        'endorsement_rewards_delegated' => 'getEndorsementRewardsDelegated',
        'endorsement_rewards_staked_own' => 'getEndorsementRewardsStakedOwn',
        'endorsement_rewards_staked_edge' => 'getEndorsementRewardsStakedEdge',
        'endorsement_rewards_staked_shared' => 'getEndorsementRewardsStakedShared',
        'missed_endorsements' => 'getMissedEndorsements',
        'missed_endorsement_rewards' => 'getMissedEndorsementRewards',
        'future_dal_attestation_rewards' => 'getFutureDalAttestationRewards',
        'dal_attestation_rewards_delegated' => 'getDalAttestationRewardsDelegated',
        'dal_attestation_rewards_staked_own' => 'getDalAttestationRewardsStakedOwn',
        'dal_attestation_rewards_staked_edge' => 'getDalAttestationRewardsStakedEdge',
        'dal_attestation_rewards_staked_shared' => 'getDalAttestationRewardsStakedShared',
        'missed_dal_attestation_rewards' => 'getMissedDalAttestationRewards',
        'block_fees' => 'getBlockFees',
        'missed_block_fees' => 'getMissedBlockFees',
        'double_baking_rewards' => 'getDoubleBakingRewards',
        'double_baking_lost_staked' => 'getDoubleBakingLostStaked',
        'double_baking_lost_unstaked' => 'getDoubleBakingLostUnstaked',
        'double_baking_lost_external_staked' => 'getDoubleBakingLostExternalStaked',
        'double_baking_lost_external_unstaked' => 'getDoubleBakingLostExternalUnstaked',
        'double_endorsing_rewards' => 'getDoubleEndorsingRewards',
        'double_endorsing_lost_staked' => 'getDoubleEndorsingLostStaked',
        'double_endorsing_lost_unstaked' => 'getDoubleEndorsingLostUnstaked',
        'double_endorsing_lost_external_staked' => 'getDoubleEndorsingLostExternalStaked',
        'double_endorsing_lost_external_unstaked' => 'getDoubleEndorsingLostExternalUnstaked',
        'double_preendorsing_rewards' => 'getDoublePreendorsingRewards',
        'double_preendorsing_lost_staked' => 'getDoublePreendorsingLostStaked',
        'double_preendorsing_lost_unstaked' => 'getDoublePreendorsingLostUnstaked',
        'double_preendorsing_lost_external_staked' => 'getDoublePreendorsingLostExternalStaked',
        'double_preendorsing_lost_external_unstaked' => 'getDoublePreendorsingLostExternalUnstaked',
        'vdf_revelation_rewards_delegated' => 'getVdfRevelationRewardsDelegated',
        'vdf_revelation_rewards_staked_own' => 'getVdfRevelationRewardsStakedOwn',
        'vdf_revelation_rewards_staked_edge' => 'getVdfRevelationRewardsStakedEdge',
        'vdf_revelation_rewards_staked_shared' => 'getVdfRevelationRewardsStakedShared',
        'nonce_revelation_rewards_delegated' => 'getNonceRevelationRewardsDelegated',
        'nonce_revelation_rewards_staked_own' => 'getNonceRevelationRewardsStakedOwn',
        'nonce_revelation_rewards_staked_edge' => 'getNonceRevelationRewardsStakedEdge',
        'nonce_revelation_rewards_staked_shared' => 'getNonceRevelationRewardsStakedShared',
        'nonce_revelation_losses' => 'getNonceRevelationLosses'
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
        $this->setIfExists('baker', $data ?? [], null);
        $this->setIfExists('delegated_balance', $data ?? [], null);
        $this->setIfExists('staked_pseudotokens', $data ?? [], null);
        $this->setIfExists('staked_balance', $data ?? [], null);
        $this->setIfExists('baker_rewards', $data ?? [], null);
        $this->setIfExists('quote', $data ?? [], null);
        $this->setIfExists('baking_power', $data ?? [], null);
        $this->setIfExists('total_baking_power', $data ?? [], null);
        $this->setIfExists('baker_delegated_balance', $data ?? [], null);
        $this->setIfExists('external_delegated_balance', $data ?? [], null);
        $this->setIfExists('baker_staked_balance', $data ?? [], null);
        $this->setIfExists('external_staked_balance', $data ?? [], null);
        $this->setIfExists('expected_blocks', $data ?? [], null);
        $this->setIfExists('expected_endorsements', $data ?? [], null);
        $this->setIfExists('expected_dal_shards', $data ?? [], null);
        $this->setIfExists('future_blocks', $data ?? [], null);
        $this->setIfExists('future_block_rewards', $data ?? [], null);
        $this->setIfExists('blocks', $data ?? [], null);
        $this->setIfExists('block_rewards_delegated', $data ?? [], null);
        $this->setIfExists('block_rewards_staked_own', $data ?? [], null);
        $this->setIfExists('block_rewards_staked_edge', $data ?? [], null);
        $this->setIfExists('block_rewards_staked_shared', $data ?? [], null);
        $this->setIfExists('missed_blocks', $data ?? [], null);
        $this->setIfExists('missed_block_rewards', $data ?? [], null);
        $this->setIfExists('future_endorsements', $data ?? [], null);
        $this->setIfExists('future_endorsement_rewards', $data ?? [], null);
        $this->setIfExists('endorsements', $data ?? [], null);
        $this->setIfExists('endorsement_rewards_delegated', $data ?? [], null);
        $this->setIfExists('endorsement_rewards_staked_own', $data ?? [], null);
        $this->setIfExists('endorsement_rewards_staked_edge', $data ?? [], null);
        $this->setIfExists('endorsement_rewards_staked_shared', $data ?? [], null);
        $this->setIfExists('missed_endorsements', $data ?? [], null);
        $this->setIfExists('missed_endorsement_rewards', $data ?? [], null);
        $this->setIfExists('future_dal_attestation_rewards', $data ?? [], null);
        $this->setIfExists('dal_attestation_rewards_delegated', $data ?? [], null);
        $this->setIfExists('dal_attestation_rewards_staked_own', $data ?? [], null);
        $this->setIfExists('dal_attestation_rewards_staked_edge', $data ?? [], null);
        $this->setIfExists('dal_attestation_rewards_staked_shared', $data ?? [], null);
        $this->setIfExists('missed_dal_attestation_rewards', $data ?? [], null);
        $this->setIfExists('block_fees', $data ?? [], null);
        $this->setIfExists('missed_block_fees', $data ?? [], null);
        $this->setIfExists('double_baking_rewards', $data ?? [], null);
        $this->setIfExists('double_baking_lost_staked', $data ?? [], null);
        $this->setIfExists('double_baking_lost_unstaked', $data ?? [], null);
        $this->setIfExists('double_baking_lost_external_staked', $data ?? [], null);
        $this->setIfExists('double_baking_lost_external_unstaked', $data ?? [], null);
        $this->setIfExists('double_endorsing_rewards', $data ?? [], null);
        $this->setIfExists('double_endorsing_lost_staked', $data ?? [], null);
        $this->setIfExists('double_endorsing_lost_unstaked', $data ?? [], null);
        $this->setIfExists('double_endorsing_lost_external_staked', $data ?? [], null);
        $this->setIfExists('double_endorsing_lost_external_unstaked', $data ?? [], null);
        $this->setIfExists('double_preendorsing_rewards', $data ?? [], null);
        $this->setIfExists('double_preendorsing_lost_staked', $data ?? [], null);
        $this->setIfExists('double_preendorsing_lost_unstaked', $data ?? [], null);
        $this->setIfExists('double_preendorsing_lost_external_staked', $data ?? [], null);
        $this->setIfExists('double_preendorsing_lost_external_unstaked', $data ?? [], null);
        $this->setIfExists('vdf_revelation_rewards_delegated', $data ?? [], null);
        $this->setIfExists('vdf_revelation_rewards_staked_own', $data ?? [], null);
        $this->setIfExists('vdf_revelation_rewards_staked_edge', $data ?? [], null);
        $this->setIfExists('vdf_revelation_rewards_staked_shared', $data ?? [], null);
        $this->setIfExists('nonce_revelation_rewards_delegated', $data ?? [], null);
        $this->setIfExists('nonce_revelation_rewards_staked_own', $data ?? [], null);
        $this->setIfExists('nonce_revelation_rewards_staked_edge', $data ?? [], null);
        $this->setIfExists('nonce_revelation_rewards_staked_shared', $data ?? [], null);
        $this->setIfExists('nonce_revelation_losses', $data ?? [], null);
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
     * @param int|null $cycle Cycle in which rewards were or will be earned.   **[sortable]**
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
     * @return \Tzkt\Model\DelegatorRewardsBaker|null
     */
    public function getBaker(): ?\Tzkt\Model\DelegatorRewardsBaker
    {
        return $this->container['baker'];
    }

    /**
     * Sets baker
     *
     * @param \Tzkt\Model\DelegatorRewardsBaker|null $baker baker
     *
     * @return $this
     */
    public function setBaker(?\Tzkt\Model\DelegatorRewardsBaker $baker): static
    {
        if (is_null($baker)) {
            throw new InvalidArgumentException('non-nullable baker cannot be null');
        }
        $this->container['baker'] = $baker;

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
     * @param int|null $delegated_balance Amount delegated to the baker at the snapshot time (micro tez). This amount doesn't include staked amount.
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
     * Gets staked_pseudotokens
     *
     * @return string|null
     */
    public function getStakedPseudotokens(): ?string
    {
        return $this->container['staked_pseudotokens'];
    }

    /**
     * Sets staked_pseudotokens
     *
     * @param string|null $staked_pseudotokens Amount of staked pseudotokens, representing staker's share within the baker's `externalStakedBalance` at the snapshot time.
     *
     * @return $this
     */
    public function setStakedPseudotokens(?string $staked_pseudotokens): static
    {
        if (is_null($staked_pseudotokens)) {
            array_push($this->openAPINullablesSetToNull, 'staked_pseudotokens');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('staked_pseudotokens', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['staked_pseudotokens'] = $staked_pseudotokens;

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
     * @param int|null $staked_balance Estimated amount staked to the baker at the snapshot time (micro tez). It's computed on-the-fly as `externalStakedBalance * stakedPseudotokens / issuedPseudotokens`.
     *
     * @return $this
     */
    public function setStakedBalance(?int $staked_balance): static
    {
        if (is_null($staked_balance)) {
            array_push($this->openAPINullablesSetToNull, 'staked_balance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('staked_balance', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['staked_balance'] = $staked_balance;

        return $this;
    }

    /**
     * Gets baker_rewards
     *
     * @return \Tzkt\Model\DelegatorRewardsBakerRewards|null
     */
    public function getBakerRewards(): ?\Tzkt\Model\DelegatorRewardsBakerRewards
    {
        return $this->container['baker_rewards'];
    }

    /**
     * Sets baker_rewards
     *
     * @param \Tzkt\Model\DelegatorRewardsBakerRewards|null $baker_rewards baker_rewards
     *
     * @return $this
     */
    public function setBakerRewards(?\Tzkt\Model\DelegatorRewardsBakerRewards $baker_rewards): static
    {
        if (is_null($baker_rewards)) {
            throw new InvalidArgumentException('non-nullable baker_rewards cannot be null');
        }
        $this->container['baker_rewards'] = $baker_rewards;

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
     * Gets baking_power
     *
     * @return int|null
     */
    public function getBakingPower(): ?int
    {
        return $this->container['baking_power'];
    }

    /**
     * Sets baking_power
     *
     * @param int|null $baking_power **DEPRECATED**
     *
     * @return $this
     */
    public function setBakingPower(?int $baking_power): static
    {
        if (is_null($baking_power)) {
            throw new InvalidArgumentException('non-nullable baking_power cannot be null');
        }
        $this->container['baking_power'] = $baking_power;

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
     * @param int|null $total_baking_power **DEPRECATED**
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
     * Gets baker_delegated_balance
     *
     * @return int|null
     */
    public function getBakerDelegatedBalance(): ?int
    {
        return $this->container['baker_delegated_balance'];
    }

    /**
     * Sets baker_delegated_balance
     *
     * @param int|null $baker_delegated_balance **DEPRECATED**
     *
     * @return $this
     */
    public function setBakerDelegatedBalance(?int $baker_delegated_balance): static
    {
        if (is_null($baker_delegated_balance)) {
            throw new InvalidArgumentException('non-nullable baker_delegated_balance cannot be null');
        }
        $this->container['baker_delegated_balance'] = $baker_delegated_balance;

        return $this;
    }

    /**
     * Gets external_delegated_balance
     *
     * @return int|null
     */
    public function getExternalDelegatedBalance(): ?int
    {
        return $this->container['external_delegated_balance'];
    }

    /**
     * Sets external_delegated_balance
     *
     * @param int|null $external_delegated_balance **DEPRECATED**
     *
     * @return $this
     */
    public function setExternalDelegatedBalance(?int $external_delegated_balance): static
    {
        if (is_null($external_delegated_balance)) {
            throw new InvalidArgumentException('non-nullable external_delegated_balance cannot be null');
        }
        $this->container['external_delegated_balance'] = $external_delegated_balance;

        return $this;
    }

    /**
     * Gets baker_staked_balance
     *
     * @return int|null
     */
    public function getBakerStakedBalance(): ?int
    {
        return $this->container['baker_staked_balance'];
    }

    /**
     * Sets baker_staked_balance
     *
     * @param int|null $baker_staked_balance **DEPRECATED**
     *
     * @return $this
     */
    public function setBakerStakedBalance(?int $baker_staked_balance): static
    {
        if (is_null($baker_staked_balance)) {
            throw new InvalidArgumentException('non-nullable baker_staked_balance cannot be null');
        }
        $this->container['baker_staked_balance'] = $baker_staked_balance;

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
     * @param int|null $external_staked_balance **DEPRECATED**
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
     * Gets expected_blocks
     *
     * @return float|null
     */
    public function getExpectedBlocks(): ?float
    {
        return $this->container['expected_blocks'];
    }

    /**
     * Sets expected_blocks
     *
     * @param float|null $expected_blocks **DEPRECATED**
     *
     * @return $this
     */
    public function setExpectedBlocks(?float $expected_blocks): static
    {
        if (is_null($expected_blocks)) {
            throw new InvalidArgumentException('non-nullable expected_blocks cannot be null');
        }
        $this->container['expected_blocks'] = $expected_blocks;

        return $this;
    }

    /**
     * Gets expected_endorsements
     *
     * @return float|null
     */
    public function getExpectedEndorsements(): ?float
    {
        return $this->container['expected_endorsements'];
    }

    /**
     * Sets expected_endorsements
     *
     * @param float|null $expected_endorsements **DEPRECATED**
     *
     * @return $this
     */
    public function setExpectedEndorsements(?float $expected_endorsements): static
    {
        if (is_null($expected_endorsements)) {
            throw new InvalidArgumentException('non-nullable expected_endorsements cannot be null');
        }
        $this->container['expected_endorsements'] = $expected_endorsements;

        return $this;
    }

    /**
     * Gets expected_dal_shards
     *
     * @return int|null
     */
    public function getExpectedDalShards(): ?int
    {
        return $this->container['expected_dal_shards'];
    }

    /**
     * Sets expected_dal_shards
     *
     * @param int|null $expected_dal_shards **DEPRECATED**
     *
     * @return $this
     */
    public function setExpectedDalShards(?int $expected_dal_shards): static
    {
        if (is_null($expected_dal_shards)) {
            throw new InvalidArgumentException('non-nullable expected_dal_shards cannot be null');
        }
        $this->container['expected_dal_shards'] = $expected_dal_shards;

        return $this;
    }

    /**
     * Gets future_blocks
     *
     * @return int|null
     */
    public function getFutureBlocks(): ?int
    {
        return $this->container['future_blocks'];
    }

    /**
     * Sets future_blocks
     *
     * @param int|null $future_blocks **DEPRECATED**
     *
     * @return $this
     */
    public function setFutureBlocks(?int $future_blocks): static
    {
        if (is_null($future_blocks)) {
            throw new InvalidArgumentException('non-nullable future_blocks cannot be null');
        }
        $this->container['future_blocks'] = $future_blocks;

        return $this;
    }

    /**
     * Gets future_block_rewards
     *
     * @return int|null
     */
    public function getFutureBlockRewards(): ?int
    {
        return $this->container['future_block_rewards'];
    }

    /**
     * Sets future_block_rewards
     *
     * @param int|null $future_block_rewards **DEPRECATED**
     *
     * @return $this
     */
    public function setFutureBlockRewards(?int $future_block_rewards): static
    {
        if (is_null($future_block_rewards)) {
            throw new InvalidArgumentException('non-nullable future_block_rewards cannot be null');
        }
        $this->container['future_block_rewards'] = $future_block_rewards;

        return $this;
    }

    /**
     * Gets blocks
     *
     * @return int|null
     */
    public function getBlocks(): ?int
    {
        return $this->container['blocks'];
    }

    /**
     * Sets blocks
     *
     * @param int|null $blocks **DEPRECATED**
     *
     * @return $this
     */
    public function setBlocks(?int $blocks): static
    {
        if (is_null($blocks)) {
            throw new InvalidArgumentException('non-nullable blocks cannot be null');
        }
        $this->container['blocks'] = $blocks;

        return $this;
    }

    /**
     * Gets block_rewards_delegated
     *
     * @return int|null
     */
    public function getBlockRewardsDelegated(): ?int
    {
        return $this->container['block_rewards_delegated'];
    }

    /**
     * Sets block_rewards_delegated
     *
     * @param int|null $block_rewards_delegated **DEPRECATED**
     *
     * @return $this
     */
    public function setBlockRewardsDelegated(?int $block_rewards_delegated): static
    {
        if (is_null($block_rewards_delegated)) {
            throw new InvalidArgumentException('non-nullable block_rewards_delegated cannot be null');
        }
        $this->container['block_rewards_delegated'] = $block_rewards_delegated;

        return $this;
    }

    /**
     * Gets block_rewards_staked_own
     *
     * @return int|null
     */
    public function getBlockRewardsStakedOwn(): ?int
    {
        return $this->container['block_rewards_staked_own'];
    }

    /**
     * Sets block_rewards_staked_own
     *
     * @param int|null $block_rewards_staked_own **DEPRECATED**
     *
     * @return $this
     */
    public function setBlockRewardsStakedOwn(?int $block_rewards_staked_own): static
    {
        if (is_null($block_rewards_staked_own)) {
            throw new InvalidArgumentException('non-nullable block_rewards_staked_own cannot be null');
        }
        $this->container['block_rewards_staked_own'] = $block_rewards_staked_own;

        return $this;
    }

    /**
     * Gets block_rewards_staked_edge
     *
     * @return int|null
     */
    public function getBlockRewardsStakedEdge(): ?int
    {
        return $this->container['block_rewards_staked_edge'];
    }

    /**
     * Sets block_rewards_staked_edge
     *
     * @param int|null $block_rewards_staked_edge **DEPRECATED**
     *
     * @return $this
     */
    public function setBlockRewardsStakedEdge(?int $block_rewards_staked_edge): static
    {
        if (is_null($block_rewards_staked_edge)) {
            throw new InvalidArgumentException('non-nullable block_rewards_staked_edge cannot be null');
        }
        $this->container['block_rewards_staked_edge'] = $block_rewards_staked_edge;

        return $this;
    }

    /**
     * Gets block_rewards_staked_shared
     *
     * @return int|null
     */
    public function getBlockRewardsStakedShared(): ?int
    {
        return $this->container['block_rewards_staked_shared'];
    }

    /**
     * Sets block_rewards_staked_shared
     *
     * @param int|null $block_rewards_staked_shared **DEPRECATED**
     *
     * @return $this
     */
    public function setBlockRewardsStakedShared(?int $block_rewards_staked_shared): static
    {
        if (is_null($block_rewards_staked_shared)) {
            throw new InvalidArgumentException('non-nullable block_rewards_staked_shared cannot be null');
        }
        $this->container['block_rewards_staked_shared'] = $block_rewards_staked_shared;

        return $this;
    }

    /**
     * Gets missed_blocks
     *
     * @return int|null
     */
    public function getMissedBlocks(): ?int
    {
        return $this->container['missed_blocks'];
    }

    /**
     * Sets missed_blocks
     *
     * @param int|null $missed_blocks **DEPRECATED**
     *
     * @return $this
     */
    public function setMissedBlocks(?int $missed_blocks): static
    {
        if (is_null($missed_blocks)) {
            throw new InvalidArgumentException('non-nullable missed_blocks cannot be null');
        }
        $this->container['missed_blocks'] = $missed_blocks;

        return $this;
    }

    /**
     * Gets missed_block_rewards
     *
     * @return int|null
     */
    public function getMissedBlockRewards(): ?int
    {
        return $this->container['missed_block_rewards'];
    }

    /**
     * Sets missed_block_rewards
     *
     * @param int|null $missed_block_rewards **DEPRECATED**
     *
     * @return $this
     */
    public function setMissedBlockRewards(?int $missed_block_rewards): static
    {
        if (is_null($missed_block_rewards)) {
            throw new InvalidArgumentException('non-nullable missed_block_rewards cannot be null');
        }
        $this->container['missed_block_rewards'] = $missed_block_rewards;

        return $this;
    }

    /**
     * Gets future_endorsements
     *
     * @return int|null
     */
    public function getFutureEndorsements(): ?int
    {
        return $this->container['future_endorsements'];
    }

    /**
     * Sets future_endorsements
     *
     * @param int|null $future_endorsements **DEPRECATED**
     *
     * @return $this
     */
    public function setFutureEndorsements(?int $future_endorsements): static
    {
        if (is_null($future_endorsements)) {
            throw new InvalidArgumentException('non-nullable future_endorsements cannot be null');
        }
        $this->container['future_endorsements'] = $future_endorsements;

        return $this;
    }

    /**
     * Gets future_endorsement_rewards
     *
     * @return int|null
     */
    public function getFutureEndorsementRewards(): ?int
    {
        return $this->container['future_endorsement_rewards'];
    }

    /**
     * Sets future_endorsement_rewards
     *
     * @param int|null $future_endorsement_rewards **DEPRECATED**
     *
     * @return $this
     */
    public function setFutureEndorsementRewards(?int $future_endorsement_rewards): static
    {
        if (is_null($future_endorsement_rewards)) {
            throw new InvalidArgumentException('non-nullable future_endorsement_rewards cannot be null');
        }
        $this->container['future_endorsement_rewards'] = $future_endorsement_rewards;

        return $this;
    }

    /**
     * Gets endorsements
     *
     * @return int|null
     */
    public function getEndorsements(): ?int
    {
        return $this->container['endorsements'];
    }

    /**
     * Sets endorsements
     *
     * @param int|null $endorsements **DEPRECATED**
     *
     * @return $this
     */
    public function setEndorsements(?int $endorsements): static
    {
        if (is_null($endorsements)) {
            throw new InvalidArgumentException('non-nullable endorsements cannot be null');
        }
        $this->container['endorsements'] = $endorsements;

        return $this;
    }

    /**
     * Gets endorsement_rewards_delegated
     *
     * @return int|null
     */
    public function getEndorsementRewardsDelegated(): ?int
    {
        return $this->container['endorsement_rewards_delegated'];
    }

    /**
     * Sets endorsement_rewards_delegated
     *
     * @param int|null $endorsement_rewards_delegated **DEPRECATED**
     *
     * @return $this
     */
    public function setEndorsementRewardsDelegated(?int $endorsement_rewards_delegated): static
    {
        if (is_null($endorsement_rewards_delegated)) {
            throw new InvalidArgumentException('non-nullable endorsement_rewards_delegated cannot be null');
        }
        $this->container['endorsement_rewards_delegated'] = $endorsement_rewards_delegated;

        return $this;
    }

    /**
     * Gets endorsement_rewards_staked_own
     *
     * @return int|null
     */
    public function getEndorsementRewardsStakedOwn(): ?int
    {
        return $this->container['endorsement_rewards_staked_own'];
    }

    /**
     * Sets endorsement_rewards_staked_own
     *
     * @param int|null $endorsement_rewards_staked_own **DEPRECATED**
     *
     * @return $this
     */
    public function setEndorsementRewardsStakedOwn(?int $endorsement_rewards_staked_own): static
    {
        if (is_null($endorsement_rewards_staked_own)) {
            throw new InvalidArgumentException('non-nullable endorsement_rewards_staked_own cannot be null');
        }
        $this->container['endorsement_rewards_staked_own'] = $endorsement_rewards_staked_own;

        return $this;
    }

    /**
     * Gets endorsement_rewards_staked_edge
     *
     * @return int|null
     */
    public function getEndorsementRewardsStakedEdge(): ?int
    {
        return $this->container['endorsement_rewards_staked_edge'];
    }

    /**
     * Sets endorsement_rewards_staked_edge
     *
     * @param int|null $endorsement_rewards_staked_edge **DEPRECATED**
     *
     * @return $this
     */
    public function setEndorsementRewardsStakedEdge(?int $endorsement_rewards_staked_edge): static
    {
        if (is_null($endorsement_rewards_staked_edge)) {
            throw new InvalidArgumentException('non-nullable endorsement_rewards_staked_edge cannot be null');
        }
        $this->container['endorsement_rewards_staked_edge'] = $endorsement_rewards_staked_edge;

        return $this;
    }

    /**
     * Gets endorsement_rewards_staked_shared
     *
     * @return int|null
     */
    public function getEndorsementRewardsStakedShared(): ?int
    {
        return $this->container['endorsement_rewards_staked_shared'];
    }

    /**
     * Sets endorsement_rewards_staked_shared
     *
     * @param int|null $endorsement_rewards_staked_shared **DEPRECATED**
     *
     * @return $this
     */
    public function setEndorsementRewardsStakedShared(?int $endorsement_rewards_staked_shared): static
    {
        if (is_null($endorsement_rewards_staked_shared)) {
            throw new InvalidArgumentException('non-nullable endorsement_rewards_staked_shared cannot be null');
        }
        $this->container['endorsement_rewards_staked_shared'] = $endorsement_rewards_staked_shared;

        return $this;
    }

    /**
     * Gets missed_endorsements
     *
     * @return int|null
     */
    public function getMissedEndorsements(): ?int
    {
        return $this->container['missed_endorsements'];
    }

    /**
     * Sets missed_endorsements
     *
     * @param int|null $missed_endorsements **DEPRECATED**
     *
     * @return $this
     */
    public function setMissedEndorsements(?int $missed_endorsements): static
    {
        if (is_null($missed_endorsements)) {
            throw new InvalidArgumentException('non-nullable missed_endorsements cannot be null');
        }
        $this->container['missed_endorsements'] = $missed_endorsements;

        return $this;
    }

    /**
     * Gets missed_endorsement_rewards
     *
     * @return int|null
     */
    public function getMissedEndorsementRewards(): ?int
    {
        return $this->container['missed_endorsement_rewards'];
    }

    /**
     * Sets missed_endorsement_rewards
     *
     * @param int|null $missed_endorsement_rewards **DEPRECATED**
     *
     * @return $this
     */
    public function setMissedEndorsementRewards(?int $missed_endorsement_rewards): static
    {
        if (is_null($missed_endorsement_rewards)) {
            throw new InvalidArgumentException('non-nullable missed_endorsement_rewards cannot be null');
        }
        $this->container['missed_endorsement_rewards'] = $missed_endorsement_rewards;

        return $this;
    }

    /**
     * Gets future_dal_attestation_rewards
     *
     * @return int|null
     */
    public function getFutureDalAttestationRewards(): ?int
    {
        return $this->container['future_dal_attestation_rewards'];
    }

    /**
     * Sets future_dal_attestation_rewards
     *
     * @param int|null $future_dal_attestation_rewards **DEPRECATED**
     *
     * @return $this
     */
    public function setFutureDalAttestationRewards(?int $future_dal_attestation_rewards): static
    {
        if (is_null($future_dal_attestation_rewards)) {
            throw new InvalidArgumentException('non-nullable future_dal_attestation_rewards cannot be null');
        }
        $this->container['future_dal_attestation_rewards'] = $future_dal_attestation_rewards;

        return $this;
    }

    /**
     * Gets dal_attestation_rewards_delegated
     *
     * @return int|null
     */
    public function getDalAttestationRewardsDelegated(): ?int
    {
        return $this->container['dal_attestation_rewards_delegated'];
    }

    /**
     * Sets dal_attestation_rewards_delegated
     *
     * @param int|null $dal_attestation_rewards_delegated **DEPRECATED**
     *
     * @return $this
     */
    public function setDalAttestationRewardsDelegated(?int $dal_attestation_rewards_delegated): static
    {
        if (is_null($dal_attestation_rewards_delegated)) {
            throw new InvalidArgumentException('non-nullable dal_attestation_rewards_delegated cannot be null');
        }
        $this->container['dal_attestation_rewards_delegated'] = $dal_attestation_rewards_delegated;

        return $this;
    }

    /**
     * Gets dal_attestation_rewards_staked_own
     *
     * @return int|null
     */
    public function getDalAttestationRewardsStakedOwn(): ?int
    {
        return $this->container['dal_attestation_rewards_staked_own'];
    }

    /**
     * Sets dal_attestation_rewards_staked_own
     *
     * @param int|null $dal_attestation_rewards_staked_own **DEPRECATED**
     *
     * @return $this
     */
    public function setDalAttestationRewardsStakedOwn(?int $dal_attestation_rewards_staked_own): static
    {
        if (is_null($dal_attestation_rewards_staked_own)) {
            throw new InvalidArgumentException('non-nullable dal_attestation_rewards_staked_own cannot be null');
        }
        $this->container['dal_attestation_rewards_staked_own'] = $dal_attestation_rewards_staked_own;

        return $this;
    }

    /**
     * Gets dal_attestation_rewards_staked_edge
     *
     * @return int|null
     */
    public function getDalAttestationRewardsStakedEdge(): ?int
    {
        return $this->container['dal_attestation_rewards_staked_edge'];
    }

    /**
     * Sets dal_attestation_rewards_staked_edge
     *
     * @param int|null $dal_attestation_rewards_staked_edge **DEPRECATED**
     *
     * @return $this
     */
    public function setDalAttestationRewardsStakedEdge(?int $dal_attestation_rewards_staked_edge): static
    {
        if (is_null($dal_attestation_rewards_staked_edge)) {
            throw new InvalidArgumentException('non-nullable dal_attestation_rewards_staked_edge cannot be null');
        }
        $this->container['dal_attestation_rewards_staked_edge'] = $dal_attestation_rewards_staked_edge;

        return $this;
    }

    /**
     * Gets dal_attestation_rewards_staked_shared
     *
     * @return int|null
     */
    public function getDalAttestationRewardsStakedShared(): ?int
    {
        return $this->container['dal_attestation_rewards_staked_shared'];
    }

    /**
     * Sets dal_attestation_rewards_staked_shared
     *
     * @param int|null $dal_attestation_rewards_staked_shared **DEPRECATED**
     *
     * @return $this
     */
    public function setDalAttestationRewardsStakedShared(?int $dal_attestation_rewards_staked_shared): static
    {
        if (is_null($dal_attestation_rewards_staked_shared)) {
            throw new InvalidArgumentException('non-nullable dal_attestation_rewards_staked_shared cannot be null');
        }
        $this->container['dal_attestation_rewards_staked_shared'] = $dal_attestation_rewards_staked_shared;

        return $this;
    }

    /**
     * Gets missed_dal_attestation_rewards
     *
     * @return int|null
     */
    public function getMissedDalAttestationRewards(): ?int
    {
        return $this->container['missed_dal_attestation_rewards'];
    }

    /**
     * Sets missed_dal_attestation_rewards
     *
     * @param int|null $missed_dal_attestation_rewards **DEPRECATED**
     *
     * @return $this
     */
    public function setMissedDalAttestationRewards(?int $missed_dal_attestation_rewards): static
    {
        if (is_null($missed_dal_attestation_rewards)) {
            throw new InvalidArgumentException('non-nullable missed_dal_attestation_rewards cannot be null');
        }
        $this->container['missed_dal_attestation_rewards'] = $missed_dal_attestation_rewards;

        return $this;
    }

    /**
     * Gets block_fees
     *
     * @return int|null
     */
    public function getBlockFees(): ?int
    {
        return $this->container['block_fees'];
    }

    /**
     * Sets block_fees
     *
     * @param int|null $block_fees **DEPRECATED**
     *
     * @return $this
     */
    public function setBlockFees(?int $block_fees): static
    {
        if (is_null($block_fees)) {
            throw new InvalidArgumentException('non-nullable block_fees cannot be null');
        }
        $this->container['block_fees'] = $block_fees;

        return $this;
    }

    /**
     * Gets missed_block_fees
     *
     * @return int|null
     */
    public function getMissedBlockFees(): ?int
    {
        return $this->container['missed_block_fees'];
    }

    /**
     * Sets missed_block_fees
     *
     * @param int|null $missed_block_fees **DEPRECATED**
     *
     * @return $this
     */
    public function setMissedBlockFees(?int $missed_block_fees): static
    {
        if (is_null($missed_block_fees)) {
            throw new InvalidArgumentException('non-nullable missed_block_fees cannot be null');
        }
        $this->container['missed_block_fees'] = $missed_block_fees;

        return $this;
    }

    /**
     * Gets double_baking_rewards
     *
     * @return int|null
     */
    public function getDoubleBakingRewards(): ?int
    {
        return $this->container['double_baking_rewards'];
    }

    /**
     * Sets double_baking_rewards
     *
     * @param int|null $double_baking_rewards **DEPRECATED**
     *
     * @return $this
     */
    public function setDoubleBakingRewards(?int $double_baking_rewards): static
    {
        if (is_null($double_baking_rewards)) {
            throw new InvalidArgumentException('non-nullable double_baking_rewards cannot be null');
        }
        $this->container['double_baking_rewards'] = $double_baking_rewards;

        return $this;
    }

    /**
     * Gets double_baking_lost_staked
     *
     * @return int|null
     */
    public function getDoubleBakingLostStaked(): ?int
    {
        return $this->container['double_baking_lost_staked'];
    }

    /**
     * Sets double_baking_lost_staked
     *
     * @param int|null $double_baking_lost_staked **DEPRECATED**
     *
     * @return $this
     */
    public function setDoubleBakingLostStaked(?int $double_baking_lost_staked): static
    {
        if (is_null($double_baking_lost_staked)) {
            throw new InvalidArgumentException('non-nullable double_baking_lost_staked cannot be null');
        }
        $this->container['double_baking_lost_staked'] = $double_baking_lost_staked;

        return $this;
    }

    /**
     * Gets double_baking_lost_unstaked
     *
     * @return int|null
     */
    public function getDoubleBakingLostUnstaked(): ?int
    {
        return $this->container['double_baking_lost_unstaked'];
    }

    /**
     * Sets double_baking_lost_unstaked
     *
     * @param int|null $double_baking_lost_unstaked **DEPRECATED**
     *
     * @return $this
     */
    public function setDoubleBakingLostUnstaked(?int $double_baking_lost_unstaked): static
    {
        if (is_null($double_baking_lost_unstaked)) {
            throw new InvalidArgumentException('non-nullable double_baking_lost_unstaked cannot be null');
        }
        $this->container['double_baking_lost_unstaked'] = $double_baking_lost_unstaked;

        return $this;
    }

    /**
     * Gets double_baking_lost_external_staked
     *
     * @return int|null
     */
    public function getDoubleBakingLostExternalStaked(): ?int
    {
        return $this->container['double_baking_lost_external_staked'];
    }

    /**
     * Sets double_baking_lost_external_staked
     *
     * @param int|null $double_baking_lost_external_staked **DEPRECATED**
     *
     * @return $this
     */
    public function setDoubleBakingLostExternalStaked(?int $double_baking_lost_external_staked): static
    {
        if (is_null($double_baking_lost_external_staked)) {
            throw new InvalidArgumentException('non-nullable double_baking_lost_external_staked cannot be null');
        }
        $this->container['double_baking_lost_external_staked'] = $double_baking_lost_external_staked;

        return $this;
    }

    /**
     * Gets double_baking_lost_external_unstaked
     *
     * @return int|null
     */
    public function getDoubleBakingLostExternalUnstaked(): ?int
    {
        return $this->container['double_baking_lost_external_unstaked'];
    }

    /**
     * Sets double_baking_lost_external_unstaked
     *
     * @param int|null $double_baking_lost_external_unstaked **DEPRECATED**
     *
     * @return $this
     */
    public function setDoubleBakingLostExternalUnstaked(?int $double_baking_lost_external_unstaked): static
    {
        if (is_null($double_baking_lost_external_unstaked)) {
            throw new InvalidArgumentException('non-nullable double_baking_lost_external_unstaked cannot be null');
        }
        $this->container['double_baking_lost_external_unstaked'] = $double_baking_lost_external_unstaked;

        return $this;
    }

    /**
     * Gets double_endorsing_rewards
     *
     * @return int|null
     */
    public function getDoubleEndorsingRewards(): ?int
    {
        return $this->container['double_endorsing_rewards'];
    }

    /**
     * Sets double_endorsing_rewards
     *
     * @param int|null $double_endorsing_rewards **DEPRECATED**
     *
     * @return $this
     */
    public function setDoubleEndorsingRewards(?int $double_endorsing_rewards): static
    {
        if (is_null($double_endorsing_rewards)) {
            throw new InvalidArgumentException('non-nullable double_endorsing_rewards cannot be null');
        }
        $this->container['double_endorsing_rewards'] = $double_endorsing_rewards;

        return $this;
    }

    /**
     * Gets double_endorsing_lost_staked
     *
     * @return int|null
     */
    public function getDoubleEndorsingLostStaked(): ?int
    {
        return $this->container['double_endorsing_lost_staked'];
    }

    /**
     * Sets double_endorsing_lost_staked
     *
     * @param int|null $double_endorsing_lost_staked **DEPRECATED**
     *
     * @return $this
     */
    public function setDoubleEndorsingLostStaked(?int $double_endorsing_lost_staked): static
    {
        if (is_null($double_endorsing_lost_staked)) {
            throw new InvalidArgumentException('non-nullable double_endorsing_lost_staked cannot be null');
        }
        $this->container['double_endorsing_lost_staked'] = $double_endorsing_lost_staked;

        return $this;
    }

    /**
     * Gets double_endorsing_lost_unstaked
     *
     * @return int|null
     */
    public function getDoubleEndorsingLostUnstaked(): ?int
    {
        return $this->container['double_endorsing_lost_unstaked'];
    }

    /**
     * Sets double_endorsing_lost_unstaked
     *
     * @param int|null $double_endorsing_lost_unstaked **DEPRECATED**
     *
     * @return $this
     */
    public function setDoubleEndorsingLostUnstaked(?int $double_endorsing_lost_unstaked): static
    {
        if (is_null($double_endorsing_lost_unstaked)) {
            throw new InvalidArgumentException('non-nullable double_endorsing_lost_unstaked cannot be null');
        }
        $this->container['double_endorsing_lost_unstaked'] = $double_endorsing_lost_unstaked;

        return $this;
    }

    /**
     * Gets double_endorsing_lost_external_staked
     *
     * @return int|null
     */
    public function getDoubleEndorsingLostExternalStaked(): ?int
    {
        return $this->container['double_endorsing_lost_external_staked'];
    }

    /**
     * Sets double_endorsing_lost_external_staked
     *
     * @param int|null $double_endorsing_lost_external_staked **DEPRECATED**
     *
     * @return $this
     */
    public function setDoubleEndorsingLostExternalStaked(?int $double_endorsing_lost_external_staked): static
    {
        if (is_null($double_endorsing_lost_external_staked)) {
            throw new InvalidArgumentException('non-nullable double_endorsing_lost_external_staked cannot be null');
        }
        $this->container['double_endorsing_lost_external_staked'] = $double_endorsing_lost_external_staked;

        return $this;
    }

    /**
     * Gets double_endorsing_lost_external_unstaked
     *
     * @return int|null
     */
    public function getDoubleEndorsingLostExternalUnstaked(): ?int
    {
        return $this->container['double_endorsing_lost_external_unstaked'];
    }

    /**
     * Sets double_endorsing_lost_external_unstaked
     *
     * @param int|null $double_endorsing_lost_external_unstaked **DEPRECATED**
     *
     * @return $this
     */
    public function setDoubleEndorsingLostExternalUnstaked(?int $double_endorsing_lost_external_unstaked): static
    {
        if (is_null($double_endorsing_lost_external_unstaked)) {
            throw new InvalidArgumentException('non-nullable double_endorsing_lost_external_unstaked cannot be null');
        }
        $this->container['double_endorsing_lost_external_unstaked'] = $double_endorsing_lost_external_unstaked;

        return $this;
    }

    /**
     * Gets double_preendorsing_rewards
     *
     * @return int|null
     */
    public function getDoublePreendorsingRewards(): ?int
    {
        return $this->container['double_preendorsing_rewards'];
    }

    /**
     * Sets double_preendorsing_rewards
     *
     * @param int|null $double_preendorsing_rewards **DEPRECATED**
     *
     * @return $this
     */
    public function setDoublePreendorsingRewards(?int $double_preendorsing_rewards): static
    {
        if (is_null($double_preendorsing_rewards)) {
            throw new InvalidArgumentException('non-nullable double_preendorsing_rewards cannot be null');
        }
        $this->container['double_preendorsing_rewards'] = $double_preendorsing_rewards;

        return $this;
    }

    /**
     * Gets double_preendorsing_lost_staked
     *
     * @return int|null
     */
    public function getDoublePreendorsingLostStaked(): ?int
    {
        return $this->container['double_preendorsing_lost_staked'];
    }

    /**
     * Sets double_preendorsing_lost_staked
     *
     * @param int|null $double_preendorsing_lost_staked **DEPRECATED**
     *
     * @return $this
     */
    public function setDoublePreendorsingLostStaked(?int $double_preendorsing_lost_staked): static
    {
        if (is_null($double_preendorsing_lost_staked)) {
            throw new InvalidArgumentException('non-nullable double_preendorsing_lost_staked cannot be null');
        }
        $this->container['double_preendorsing_lost_staked'] = $double_preendorsing_lost_staked;

        return $this;
    }

    /**
     * Gets double_preendorsing_lost_unstaked
     *
     * @return int|null
     */
    public function getDoublePreendorsingLostUnstaked(): ?int
    {
        return $this->container['double_preendorsing_lost_unstaked'];
    }

    /**
     * Sets double_preendorsing_lost_unstaked
     *
     * @param int|null $double_preendorsing_lost_unstaked **DEPRECATED**
     *
     * @return $this
     */
    public function setDoublePreendorsingLostUnstaked(?int $double_preendorsing_lost_unstaked): static
    {
        if (is_null($double_preendorsing_lost_unstaked)) {
            throw new InvalidArgumentException('non-nullable double_preendorsing_lost_unstaked cannot be null');
        }
        $this->container['double_preendorsing_lost_unstaked'] = $double_preendorsing_lost_unstaked;

        return $this;
    }

    /**
     * Gets double_preendorsing_lost_external_staked
     *
     * @return int|null
     */
    public function getDoublePreendorsingLostExternalStaked(): ?int
    {
        return $this->container['double_preendorsing_lost_external_staked'];
    }

    /**
     * Sets double_preendorsing_lost_external_staked
     *
     * @param int|null $double_preendorsing_lost_external_staked **DEPRECATED**
     *
     * @return $this
     */
    public function setDoublePreendorsingLostExternalStaked(?int $double_preendorsing_lost_external_staked): static
    {
        if (is_null($double_preendorsing_lost_external_staked)) {
            throw new InvalidArgumentException('non-nullable double_preendorsing_lost_external_staked cannot be null');
        }
        $this->container['double_preendorsing_lost_external_staked'] = $double_preendorsing_lost_external_staked;

        return $this;
    }

    /**
     * Gets double_preendorsing_lost_external_unstaked
     *
     * @return int|null
     */
    public function getDoublePreendorsingLostExternalUnstaked(): ?int
    {
        return $this->container['double_preendorsing_lost_external_unstaked'];
    }

    /**
     * Sets double_preendorsing_lost_external_unstaked
     *
     * @param int|null $double_preendorsing_lost_external_unstaked **DEPRECATED**
     *
     * @return $this
     */
    public function setDoublePreendorsingLostExternalUnstaked(?int $double_preendorsing_lost_external_unstaked): static
    {
        if (is_null($double_preendorsing_lost_external_unstaked)) {
            throw new InvalidArgumentException('non-nullable double_preendorsing_lost_external_unstaked cannot be null');
        }
        $this->container['double_preendorsing_lost_external_unstaked'] = $double_preendorsing_lost_external_unstaked;

        return $this;
    }

    /**
     * Gets vdf_revelation_rewards_delegated
     *
     * @return int|null
     */
    public function getVdfRevelationRewardsDelegated(): ?int
    {
        return $this->container['vdf_revelation_rewards_delegated'];
    }

    /**
     * Sets vdf_revelation_rewards_delegated
     *
     * @param int|null $vdf_revelation_rewards_delegated **DEPRECATED**
     *
     * @return $this
     */
    public function setVdfRevelationRewardsDelegated(?int $vdf_revelation_rewards_delegated): static
    {
        if (is_null($vdf_revelation_rewards_delegated)) {
            throw new InvalidArgumentException('non-nullable vdf_revelation_rewards_delegated cannot be null');
        }
        $this->container['vdf_revelation_rewards_delegated'] = $vdf_revelation_rewards_delegated;

        return $this;
    }

    /**
     * Gets vdf_revelation_rewards_staked_own
     *
     * @return int|null
     */
    public function getVdfRevelationRewardsStakedOwn(): ?int
    {
        return $this->container['vdf_revelation_rewards_staked_own'];
    }

    /**
     * Sets vdf_revelation_rewards_staked_own
     *
     * @param int|null $vdf_revelation_rewards_staked_own **DEPRECATED**
     *
     * @return $this
     */
    public function setVdfRevelationRewardsStakedOwn(?int $vdf_revelation_rewards_staked_own): static
    {
        if (is_null($vdf_revelation_rewards_staked_own)) {
            throw new InvalidArgumentException('non-nullable vdf_revelation_rewards_staked_own cannot be null');
        }
        $this->container['vdf_revelation_rewards_staked_own'] = $vdf_revelation_rewards_staked_own;

        return $this;
    }

    /**
     * Gets vdf_revelation_rewards_staked_edge
     *
     * @return int|null
     */
    public function getVdfRevelationRewardsStakedEdge(): ?int
    {
        return $this->container['vdf_revelation_rewards_staked_edge'];
    }

    /**
     * Sets vdf_revelation_rewards_staked_edge
     *
     * @param int|null $vdf_revelation_rewards_staked_edge **DEPRECATED**
     *
     * @return $this
     */
    public function setVdfRevelationRewardsStakedEdge(?int $vdf_revelation_rewards_staked_edge): static
    {
        if (is_null($vdf_revelation_rewards_staked_edge)) {
            throw new InvalidArgumentException('non-nullable vdf_revelation_rewards_staked_edge cannot be null');
        }
        $this->container['vdf_revelation_rewards_staked_edge'] = $vdf_revelation_rewards_staked_edge;

        return $this;
    }

    /**
     * Gets vdf_revelation_rewards_staked_shared
     *
     * @return int|null
     */
    public function getVdfRevelationRewardsStakedShared(): ?int
    {
        return $this->container['vdf_revelation_rewards_staked_shared'];
    }

    /**
     * Sets vdf_revelation_rewards_staked_shared
     *
     * @param int|null $vdf_revelation_rewards_staked_shared **DEPRECATED**
     *
     * @return $this
     */
    public function setVdfRevelationRewardsStakedShared(?int $vdf_revelation_rewards_staked_shared): static
    {
        if (is_null($vdf_revelation_rewards_staked_shared)) {
            throw new InvalidArgumentException('non-nullable vdf_revelation_rewards_staked_shared cannot be null');
        }
        $this->container['vdf_revelation_rewards_staked_shared'] = $vdf_revelation_rewards_staked_shared;

        return $this;
    }

    /**
     * Gets nonce_revelation_rewards_delegated
     *
     * @return int|null
     */
    public function getNonceRevelationRewardsDelegated(): ?int
    {
        return $this->container['nonce_revelation_rewards_delegated'];
    }

    /**
     * Sets nonce_revelation_rewards_delegated
     *
     * @param int|null $nonce_revelation_rewards_delegated **DEPRECATED**
     *
     * @return $this
     */
    public function setNonceRevelationRewardsDelegated(?int $nonce_revelation_rewards_delegated): static
    {
        if (is_null($nonce_revelation_rewards_delegated)) {
            throw new InvalidArgumentException('non-nullable nonce_revelation_rewards_delegated cannot be null');
        }
        $this->container['nonce_revelation_rewards_delegated'] = $nonce_revelation_rewards_delegated;

        return $this;
    }

    /**
     * Gets nonce_revelation_rewards_staked_own
     *
     * @return int|null
     */
    public function getNonceRevelationRewardsStakedOwn(): ?int
    {
        return $this->container['nonce_revelation_rewards_staked_own'];
    }

    /**
     * Sets nonce_revelation_rewards_staked_own
     *
     * @param int|null $nonce_revelation_rewards_staked_own **DEPRECATED**
     *
     * @return $this
     */
    public function setNonceRevelationRewardsStakedOwn(?int $nonce_revelation_rewards_staked_own): static
    {
        if (is_null($nonce_revelation_rewards_staked_own)) {
            throw new InvalidArgumentException('non-nullable nonce_revelation_rewards_staked_own cannot be null');
        }
        $this->container['nonce_revelation_rewards_staked_own'] = $nonce_revelation_rewards_staked_own;

        return $this;
    }

    /**
     * Gets nonce_revelation_rewards_staked_edge
     *
     * @return int|null
     */
    public function getNonceRevelationRewardsStakedEdge(): ?int
    {
        return $this->container['nonce_revelation_rewards_staked_edge'];
    }

    /**
     * Sets nonce_revelation_rewards_staked_edge
     *
     * @param int|null $nonce_revelation_rewards_staked_edge **DEPRECATED**
     *
     * @return $this
     */
    public function setNonceRevelationRewardsStakedEdge(?int $nonce_revelation_rewards_staked_edge): static
    {
        if (is_null($nonce_revelation_rewards_staked_edge)) {
            throw new InvalidArgumentException('non-nullable nonce_revelation_rewards_staked_edge cannot be null');
        }
        $this->container['nonce_revelation_rewards_staked_edge'] = $nonce_revelation_rewards_staked_edge;

        return $this;
    }

    /**
     * Gets nonce_revelation_rewards_staked_shared
     *
     * @return int|null
     */
    public function getNonceRevelationRewardsStakedShared(): ?int
    {
        return $this->container['nonce_revelation_rewards_staked_shared'];
    }

    /**
     * Sets nonce_revelation_rewards_staked_shared
     *
     * @param int|null $nonce_revelation_rewards_staked_shared **DEPRECATED**
     *
     * @return $this
     */
    public function setNonceRevelationRewardsStakedShared(?int $nonce_revelation_rewards_staked_shared): static
    {
        if (is_null($nonce_revelation_rewards_staked_shared)) {
            throw new InvalidArgumentException('non-nullable nonce_revelation_rewards_staked_shared cannot be null');
        }
        $this->container['nonce_revelation_rewards_staked_shared'] = $nonce_revelation_rewards_staked_shared;

        return $this;
    }

    /**
     * Gets nonce_revelation_losses
     *
     * @return int|null
     */
    public function getNonceRevelationLosses(): ?int
    {
        return $this->container['nonce_revelation_losses'];
    }

    /**
     * Sets nonce_revelation_losses
     *
     * @param int|null $nonce_revelation_losses **DEPRECATED**
     *
     * @return $this
     */
    public function setNonceRevelationLosses(?int $nonce_revelation_losses): static
    {
        if (is_null($nonce_revelation_losses)) {
            throw new InvalidArgumentException('non-nullable nonce_revelation_losses cannot be null');
        }
        $this->container['nonce_revelation_losses'] = $nonce_revelation_losses;

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


