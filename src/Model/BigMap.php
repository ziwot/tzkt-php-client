<?php
/**
 * BigMap
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
 * BigMap Class Doc Comment
 *
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class BigMap implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BigMap';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'ptr' => 'int',
        'contract' => '\Tzkt\Model\BigMapContract',
        'path' => 'string',
        'tags' => 'string[]',
        'active' => 'bool',
        'first_level' => 'int',
        'last_level' => 'int',
        'total_keys' => 'int',
        'active_keys' => 'int',
        'updates' => 'int',
        'key_type' => 'mixed',
        'value_type' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ptr' => 'int32',
        'contract' => null,
        'path' => null,
        'tags' => null,
        'active' => null,
        'first_level' => 'int32',
        'last_level' => 'int32',
        'total_keys' => 'int32',
        'active_keys' => 'int32',
        'updates' => 'int32',
        'key_type' => null,
        'value_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'ptr' => false,
        'contract' => true,
        'path' => true,
        'tags' => true,
        'active' => false,
        'first_level' => false,
        'last_level' => false,
        'total_keys' => false,
        'active_keys' => false,
        'updates' => false,
        'key_type' => true,
        'value_type' => true
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
        'ptr' => 'ptr',
        'contract' => 'contract',
        'path' => 'path',
        'tags' => 'tags',
        'active' => 'active',
        'first_level' => 'firstLevel',
        'last_level' => 'lastLevel',
        'total_keys' => 'totalKeys',
        'active_keys' => 'activeKeys',
        'updates' => 'updates',
        'key_type' => 'keyType',
        'value_type' => 'valueType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'ptr' => 'setPtr',
        'contract' => 'setContract',
        'path' => 'setPath',
        'tags' => 'setTags',
        'active' => 'setActive',
        'first_level' => 'setFirstLevel',
        'last_level' => 'setLastLevel',
        'total_keys' => 'setTotalKeys',
        'active_keys' => 'setActiveKeys',
        'updates' => 'setUpdates',
        'key_type' => 'setKeyType',
        'value_type' => 'setValueType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'ptr' => 'getPtr',
        'contract' => 'getContract',
        'path' => 'getPath',
        'tags' => 'getTags',
        'active' => 'getActive',
        'first_level' => 'getFirstLevel',
        'last_level' => 'getLastLevel',
        'total_keys' => 'getTotalKeys',
        'active_keys' => 'getActiveKeys',
        'updates' => 'getUpdates',
        'key_type' => 'getKeyType',
        'value_type' => 'getValueType'
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
        $this->setIfExists('ptr', $data ?? [], null);
        $this->setIfExists('contract', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('first_level', $data ?? [], null);
        $this->setIfExists('last_level', $data ?? [], null);
        $this->setIfExists('total_keys', $data ?? [], null);
        $this->setIfExists('active_keys', $data ?? [], null);
        $this->setIfExists('updates', $data ?? [], null);
        $this->setIfExists('key_type', $data ?? [], null);
        $this->setIfExists('value_type', $data ?? [], null);
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
     * Gets ptr
     *
     * @return int|null
     */
    public function getPtr(): ?int
    {
        return $this->container['ptr'];
    }

    /**
     * Sets ptr
     *
     * @param int|null $ptr Bigmap pointer
     *
     * @return $this
     */
    public function setPtr(?int $ptr): static
    {
        if (is_null($ptr)) {
            throw new InvalidArgumentException('non-nullable ptr cannot be null');
        }
        $this->container['ptr'] = $ptr;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return \Tzkt\Model\BigMapContract|null
     */
    public function getContract(): ?\Tzkt\Model\BigMapContract
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param \Tzkt\Model\BigMapContract|null $contract contract
     *
     * @return $this
     */
    public function setContract(?\Tzkt\Model\BigMapContract $contract): static
    {
        if (is_null($contract)) {
            array_push($this->openAPINullablesSetToNull, 'contract');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contract', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path Path to the bigmap in the contract storage
     *
     * @return $this
     */
    public function setPath(?string $path): static
    {
        if (is_null($path)) {
            array_push($this->openAPINullablesSetToNull, 'path');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('path', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags List of tags ( `metadata`, `token_metadata`,`ledger`, or `null` if there are no tags)
     *
     * @return $this
     */
    public function setTags(?array $tags): static
    {
        if (is_null($tags)) {
            array_push($this->openAPINullablesSetToNull, 'tags');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tags', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tags'] = $tags;

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
     * @param bool|null $active Bigmap status (`true` - active, `false` - removed)
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
     * @param int|null $first_level Level of the block where the bigmap was seen first time
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
     * @param int|null $last_level Level of the block where the bigmap was seen last time
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
     * Gets total_keys
     *
     * @return int|null
     */
    public function getTotalKeys(): ?int
    {
        return $this->container['total_keys'];
    }

    /**
     * Sets total_keys
     *
     * @param int|null $total_keys Total number of keys ever added to the bigmap
     *
     * @return $this
     */
    public function setTotalKeys(?int $total_keys): static
    {
        if (is_null($total_keys)) {
            throw new InvalidArgumentException('non-nullable total_keys cannot be null');
        }
        $this->container['total_keys'] = $total_keys;

        return $this;
    }

    /**
     * Gets active_keys
     *
     * @return int|null
     */
    public function getActiveKeys(): ?int
    {
        return $this->container['active_keys'];
    }

    /**
     * Sets active_keys
     *
     * @param int|null $active_keys Total number of currently active keys
     *
     * @return $this
     */
    public function setActiveKeys(?int $active_keys): static
    {
        if (is_null($active_keys)) {
            throw new InvalidArgumentException('non-nullable active_keys cannot be null');
        }
        $this->container['active_keys'] = $active_keys;

        return $this;
    }

    /**
     * Gets updates
     *
     * @return int|null
     */
    public function getUpdates(): ?int
    {
        return $this->container['updates'];
    }

    /**
     * Sets updates
     *
     * @param int|null $updates Total number of actions with the bigmap
     *
     * @return $this
     */
    public function setUpdates(?int $updates): static
    {
        if (is_null($updates)) {
            throw new InvalidArgumentException('non-nullable updates cannot be null');
        }
        $this->container['updates'] = $updates;

        return $this;
    }

    /**
     * Gets key_type
     *
     * @return mixed|null
     */
    public function getKeyType(): mixed
    {
        return $this->container['key_type'];
    }

    /**
     * Sets key_type
     *
     * @param mixed|null $key_type Bigmap key type as JSON schema or Micheline, depending on the `micheline` query parameter.
     *
     * @return $this
     */
    public function setKeyType(mixed $key_type): static
    {
        if (is_null($key_type)) {
            array_push($this->openAPINullablesSetToNull, 'key_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('key_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['key_type'] = $key_type;

        return $this;
    }

    /**
     * Gets value_type
     *
     * @return mixed|null
     */
    public function getValueType(): mixed
    {
        return $this->container['value_type'];
    }

    /**
     * Sets value_type
     *
     * @param mixed|null $value_type Bigmap value type as JSON schema or Micheline, depending on the `micheline` query parameter.
     *
     * @return $this
     */
    public function setValueType(mixed $value_type): static
    {
        if (is_null($value_type)) {
            array_push($this->openAPINullablesSetToNull, 'value_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('value_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['value_type'] = $value_type;

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


