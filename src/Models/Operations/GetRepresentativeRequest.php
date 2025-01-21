<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class GetRepresentativeRequest
{
    /**
     * ID of the account.
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

    /**
     * ID of the representative.
     *
     * @var string $representativeID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=representativeID')]
    public string $representativeID;

    /**
     * Specify an API version.
     *
     * @var ?Components\Versions $xMoovVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-moov-version')]
    public ?Components\Versions $xMoovVersion = null;

    /**
     * @param  string  $accountID
     * @param  string  $representativeID
     * @param  ?Components\Versions  $xMoovVersion
     */
    public function __construct(string $accountID, string $representativeID, ?Components\Versions $xMoovVersion = null)
    {
        $this->accountID = $accountID;
        $this->representativeID = $representativeID;
        $this->xMoovVersion = $xMoovVersion;
    }
}