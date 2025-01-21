<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class RevokeOnboardingInviteRequest
{
    /**
     *
     * @var string $code
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=code')]
    public string $code;

    /**
     * Specify an API version.
     *
     * @var ?Components\Versions $xMoovVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-moov-version')]
    public ?Components\Versions $xMoovVersion = null;

    /**
     * @param  string  $code
     * @param  ?Components\Versions  $xMoovVersion
     */
    public function __construct(string $code, ?Components\Versions $xMoovVersion = null)
    {
        $this->code = $code;
        $this->xMoovVersion = $xMoovVersion;
    }
}