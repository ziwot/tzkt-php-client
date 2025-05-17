<?php
/**
 * PrimType
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
 * PrimType Class Doc Comment
 *
 * @description 
 * @package  Tzkt
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum PrimType: int
{
    case NUMBER_0 = 0;

    case NUMBER_1 = 1;

    case NUMBER_2 = 2;

    case NUMBER_3 = 3;

    case NUMBER_4 = 4;

    case NUMBER_5 = 5;

    case NUMBER_6 = 6;

    case NUMBER_7 = 7;

    case NUMBER_8 = 8;

    case NUMBER_9 = 9;

    case NUMBER_10 = 10;

    case NUMBER_11 = 11;

    case NUMBER_12 = 12;

    case NUMBER_13 = 13;

    case NUMBER_14 = 14;

    case NUMBER_15 = 15;

    case NUMBER_16 = 16;

    case NUMBER_17 = 17;

    case NUMBER_18 = 18;

    case NUMBER_19 = 19;

    case NUMBER_20 = 20;

    case NUMBER_21 = 21;

    case NUMBER_22 = 22;

    case NUMBER_23 = 23;

    case NUMBER_24 = 24;

    case NUMBER_25 = 25;

    case NUMBER_26 = 26;

    case NUMBER_27 = 27;

    case NUMBER_28 = 28;

    case NUMBER_29 = 29;

    case NUMBER_30 = 30;

    case NUMBER_31 = 31;

    case NUMBER_32 = 32;

    case NUMBER_33 = 33;

    case NUMBER_34 = 34;

    case NUMBER_35 = 35;

    case NUMBER_36 = 36;

    case NUMBER_37 = 37;

    case NUMBER_38 = 38;

    case NUMBER_39 = 39;

    case NUMBER_40 = 40;

    case NUMBER_41 = 41;

    case NUMBER_42 = 42;

    case NUMBER_43 = 43;

    case NUMBER_44 = 44;

    case NUMBER_45 = 45;

    case NUMBER_46 = 46;

    case NUMBER_47 = 47;

    case NUMBER_48 = 48;

    case NUMBER_49 = 49;

    case NUMBER_50 = 50;

    case NUMBER_51 = 51;

    case NUMBER_52 = 52;

    case NUMBER_53 = 53;

    case NUMBER_54 = 54;

    case NUMBER_55 = 55;

    case NUMBER_56 = 56;

    case NUMBER_57 = 57;

    case NUMBER_58 = 58;

    case NUMBER_59 = 59;

    case NUMBER_60 = 60;

    case NUMBER_61 = 61;

    case NUMBER_62 = 62;

    case NUMBER_63 = 63;

    case NUMBER_64 = 64;

    case NUMBER_65 = 65;

    case NUMBER_66 = 66;

    case NUMBER_67 = 67;

    case NUMBER_68 = 68;

    case NUMBER_69 = 69;

    case NUMBER_70 = 70;

    case NUMBER_71 = 71;

    case NUMBER_72 = 72;

    case NUMBER_73 = 73;

    case NUMBER_74 = 74;

    case NUMBER_75 = 75;

    case NUMBER_76 = 76;

    case NUMBER_77 = 77;

    case NUMBER_78 = 78;

    case NUMBER_79 = 79;

    case NUMBER_80 = 80;

    case NUMBER_81 = 81;

    case NUMBER_82 = 82;

    case NUMBER_83 = 83;

    case NUMBER_84 = 84;

    case NUMBER_85 = 85;

    case NUMBER_86 = 86;

    case NUMBER_87 = 87;

    case NUMBER_88 = 88;

    case NUMBER_89 = 89;

    case NUMBER_90 = 90;

    case NUMBER_91 = 91;

    case NUMBER_92 = 92;

    case NUMBER_93 = 93;

    case NUMBER_94 = 94;

    case NUMBER_95 = 95;

    case NUMBER_96 = 96;

    case NUMBER_97 = 97;

    case NUMBER_98 = 98;

    case NUMBER_99 = 99;

    case NUMBER_100 = 100;

    case NUMBER_101 = 101;

    case NUMBER_102 = 102;

    case NUMBER_103 = 103;

    case NUMBER_104 = 104;

    case NUMBER_105 = 105;

    case NUMBER_106 = 106;

    case NUMBER_107 = 107;

    case NUMBER_108 = 108;

    case NUMBER_109 = 109;

    case NUMBER_110 = 110;

    case NUMBER_111 = 111;

    case NUMBER_112 = 112;

    case NUMBER_113 = 113;

    case NUMBER_114 = 114;

    case NUMBER_115 = 115;

    case NUMBER_116 = 116;

    case NUMBER_117 = 117;

    case NUMBER_118 = 118;

    case NUMBER_119 = 119;

    case NUMBER_120 = 120;

    case NUMBER_121 = 121;

    case NUMBER_122 = 122;

    case NUMBER_123 = 123;

    case NUMBER_124 = 124;

    case NUMBER_125 = 125;

    case NUMBER_126 = 126;

    case NUMBER_127 = 127;

    case NUMBER_128 = 128;

    case NUMBER_129 = 129;

    case NUMBER_130 = 130;

    case NUMBER_131 = 131;

    case NUMBER_132 = 132;

    case NUMBER_133 = 133;

    case NUMBER_134 = 134;

    case NUMBER_135 = 135;

    case NUMBER_136 = 136;

    case NUMBER_137 = 137;

    case NUMBER_138 = 138;

    case NUMBER_139 = 139;

    case NUMBER_140 = 140;

    case NUMBER_141 = 141;

    case NUMBER_142 = 142;

    case NUMBER_143 = 143;

    case NUMBER_144 = 144;

    case NUMBER_145 = 145;

    case NUMBER_146 = 146;

    case NUMBER_147 = 147;

    case NUMBER_148 = 148;

    case NUMBER_149 = 149;

    case NUMBER_150 = 150;

    case NUMBER_151 = 151;

    case NUMBER_152 = 152;

    case NUMBER_153 = 153;

    case NUMBER_154 = 154;

    case NUMBER_155 = 155;

    case NUMBER_156 = 156;

    case NUMBER_157 = 157;
}


