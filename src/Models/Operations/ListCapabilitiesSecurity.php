<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class ListCapabilitiesSecurity
{
    /**
     *
     * @var ?Components\SchemeBasicAuth $basicAuth
     */
    #[SpeakeasyMetadata('security:scheme=true,type=http,subtype=basic')]
    public ?Components\SchemeBasicAuth $basicAuth = null;

    /**
     *
     * @var ?string $oAuth2Auth
     */
    #[SpeakeasyMetadata('security:scheme=true,type=oauth2,name=Authorization')]
    public ?string $oAuth2Auth = null;

    /**
     * @param  ?Components\SchemeBasicAuth  $basicAuth
     * @param  ?string  $oAuth2Auth
     */
    public function __construct(?Components\SchemeBasicAuth $basicAuth = null, ?string $oAuth2Auth = null)
    {
        $this->basicAuth = $basicAuth;
        $this->oAuth2Auth = $oAuth2Auth;
    }
}