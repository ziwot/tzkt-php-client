# tzkt-php-client

![tests](https://github.com/ziwot/tzkt-php-client/workflows/tests/badge.svg)
[![Latest Stable Version](https://poser.pugx.org/ziwot/tzkt-php-client/v)](https://packagist.org/packages/ziwot/tzkt-php-client)
[![Total Downloads](https://poser.pugx.org/ziwot/tzkt-php-client/downloads)](https://packagist.org/packages/ziwot/tzkt-php-client)
[![Latest Unstable Version](https://poser.pugx.org/ziwot/tzkt-php-client/v/unstable)](https://packagist.org/packages/ziwot/tzkt-php-client)
[![License](https://poser.pugx.org/ziwot/tzkt-php-client/license)](https://packagist.org/packages/ziwot/tzkt-php-client)
[![PHP Version Require](https://poser.pugx.org/ziwot/tzkt-php-client/require/php)](https://packagist.org/packages/ziwot/tzkt-php-client)

Generated OpenAPI client for TZKT

`composer require ziwot/tzkt-php-client`

## Usage 

```php
require "vendor/autoload.php";

$Protocols = new \Tzkt\Api\ProtocolsApi(\Tzkt\get_client() /*, (new \Tzkt\Configuration())->setDebug(true) */);
$proto = $Protocols->protocolsGetCurrent();

$proto->getHash();
// "PtTALLiNtPec7mE7yY4m3k26J8Qukef3E3ehzhfXgFZKGtDdAXu"
```

See [OpenApi Generated Doc](./TZKT.md)

## Dev

You need [openapi-generator-cli](https://github.com/openapitools/openapi-generator-cli)

Then, just run `make`
