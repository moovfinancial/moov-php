<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class TestEndToEndTokenRequest
{
    /**
     *
     * @var Components\E2EEToken $e2EEToken
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\E2EEToken $e2EEToken;

    /**
     * Specify an API version.
     *
     * @var ?Components\Versions $xMoovVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-moov-version')]
    public ?Components\Versions $xMoovVersion = null;

    /**
     * @param  Components\E2EEToken  $e2EEToken
     * @param  ?Components\Versions  $xMoovVersion
     */
    public function __construct(Components\E2EEToken $e2EEToken, ?Components\Versions $xMoovVersion = null)
    {
        $this->e2EEToken = $e2EEToken;
        $this->xMoovVersion = $xMoovVersion;
    }
}