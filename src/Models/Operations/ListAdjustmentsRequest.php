<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class ListAdjustmentsRequest
{
    /**
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

    /**
     * Specify an API version.
     *
     * @var ?Components\Versions $xMoovVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-moov-version')]
    public ?Components\Versions $xMoovVersion = null;

    /**
     * A wallet ID to filter adjustments by.
     *
     * @var ?string $walletID
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=walletID')]
    public ?string $walletID = null;

    /**
     * @param  string  $accountID
     * @param  ?Components\Versions  $xMoovVersion
     * @param  ?string  $walletID
     */
    public function __construct(string $accountID, ?Components\Versions $xMoovVersion = null, ?string $walletID = null)
    {
        $this->accountID = $accountID;
        $this->xMoovVersion = $xMoovVersion;
        $this->walletID = $walletID;
    }
}