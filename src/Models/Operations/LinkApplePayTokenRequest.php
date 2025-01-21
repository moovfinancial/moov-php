<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class LinkApplePayTokenRequest
{
    /**
     * ID of the Moov account representing the cardholder.
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

    /**
     *
     * @var Components\LinkApplePay $linkApplePay
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\LinkApplePay $linkApplePay;

    /**
     * Specify an API version.
     *
     * @var ?Components\Versions $xMoovVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-moov-version')]
    public ?Components\Versions $xMoovVersion = null;

    /**
     * @param  string  $accountID
     * @param  Components\LinkApplePay  $linkApplePay
     * @param  ?Components\Versions  $xMoovVersion
     */
    public function __construct(string $accountID, Components\LinkApplePay $linkApplePay, ?Components\Versions $xMoovVersion = null)
    {
        $this->accountID = $accountID;
        $this->linkApplePay = $linkApplePay;
        $this->xMoovVersion = $xMoovVersion;
    }
}