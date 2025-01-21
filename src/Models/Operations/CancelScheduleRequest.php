<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class CancelScheduleRequest
{
    /**
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

    /**
     *
     * @var string $scheduleID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=scheduleID')]
    public string $scheduleID;

    /**
     * Specify an API version.
     *
     * @var ?Components\Versions $xMoovVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-moov-version')]
    public ?Components\Versions $xMoovVersion = null;

    /**
     * @param  string  $accountID
     * @param  string  $scheduleID
     * @param  ?Components\Versions  $xMoovVersion
     */
    public function __construct(string $accountID, string $scheduleID, ?Components\Versions $xMoovVersion = null)
    {
        $this->accountID = $accountID;
        $this->scheduleID = $scheduleID;
        $this->xMoovVersion = $xMoovVersion;
    }
}