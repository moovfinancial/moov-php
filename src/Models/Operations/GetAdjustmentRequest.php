<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class GetAdjustmentRequest
{
    /**
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

    /**
     *
     * @var string $adjustmentID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=adjustmentID')]
    public string $adjustmentID;

    /**
     * Specify an API version.
     *
     * @var ?Components\Versions $xMoovVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-moov-version')]
    public ?Components\Versions $xMoovVersion = null;

    /**
     * @param  string  $accountID
     * @param  string  $adjustmentID
     * @param  ?Components\Versions  $xMoovVersion
     */
    public function __construct(string $accountID, string $adjustmentID, ?Components\Versions $xMoovVersion = null)
    {
        $this->accountID = $accountID;
        $this->adjustmentID = $adjustmentID;
        $this->xMoovVersion = $xMoovVersion;
    }
}