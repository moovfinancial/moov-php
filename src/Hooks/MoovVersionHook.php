<?php

namespace Moov\MoovPhp\Hooks;

use Psr\Http\Message\RequestInterface;

class MoovVersionHook implements BeforeRequestHook
{
    public function beforeRequest(BeforeRequestContext $context, RequestInterface $request): RequestInterface
    {
        return $request->withHeader('X-Moov-Version', $context->config->openapiDocVersion);
    }
}
