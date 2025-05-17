<?php

namespace Tzkt;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;

function get_client(): Client
{
    $handler = new CurlHandler();
    $stack = HandlerStack::create($handler);

    $stack->push(
        Middleware::mapRequest(function (RequestInterface $request) {
            $queryParams = \GuzzleHttp\Psr7\Query::parse($request->getUri()->getQuery());

            foreach ($queryParams as $k => $v) {
                $v = json_decode($v, true);
                if (is_array($v)) {
                    foreach ($v as $kk => $vv) {
                        $queryParams["$k.$kk"] = $vv;
                    }
                    unset($queryParams[$k]);
                }
            }

            $uri = $request->getUri()->withQuery(\GuzzleHttp\Psr7\Query::build($queryParams));

            return $request->withUri($uri);
        })
    );

    return new Client(['handler' => $stack]);
}
