<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class GetFullIssuedCardRequest
{
    /**
     * The Moov business account for which the card was issued.
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

    /**
     *
     * @var string $issuedCardID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=issuedCardID')]
    public string $issuedCardID;

    /**
     * Specify an API version.
     *
     * @var ?Components\Versions $xMoovVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-moov-version')]
    public ?Components\Versions $xMoovVersion = null;

    /**
     * @param  string  $accountID
     * @param  string  $issuedCardID
     * @param  ?Components\Versions  $xMoovVersion
     */
    public function __construct(string $accountID, string $issuedCardID, ?Components\Versions $xMoovVersion = null)
    {
        $this->accountID = $accountID;
        $this->issuedCardID = $issuedCardID;
        $this->xMoovVersion = $xMoovVersion;
    }
}