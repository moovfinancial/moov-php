<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class ListSweepsRequest
{
    /**
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

    /**
     *
     * @var string $walletID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=walletID')]
    public string $walletID;

    /**
     * Specify an API version.
     *
     * @var ?Components\Versions $xMoovVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-moov-version')]
    public ?Components\Versions $xMoovVersion = null;

    /**
     *
     * @var ?int $skip
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=skip')]
    public ?int $skip = null;

    /**
     *
     * @var ?int $count
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=count')]
    public ?int $count = null;

    /**
     * Optional parameter to filter by sweep status.
     *
     * @var ?Components\SweepStatus $status
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=status')]
    public ?Components\SweepStatus $status = null;

    /**
     * Optional string to filter by statement descriptor.
     *
     * @var ?string $statementDescriptor
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=statementDescriptor')]
    public ?string $statementDescriptor = null;

    /**
     * @param  string  $accountID
     * @param  string  $walletID
     * @param  ?Components\Versions  $xMoovVersion
     * @param  ?int  $skip
     * @param  ?int  $count
     * @param  ?Components\SweepStatus  $status
     * @param  ?string  $statementDescriptor
     */
    public function __construct(string $accountID, string $walletID, ?Components\Versions $xMoovVersion = null, ?int $skip = null, ?int $count = null, ?Components\SweepStatus $status = null, ?string $statementDescriptor = null)
    {
        $this->accountID = $accountID;
        $this->walletID = $walletID;
        $this->xMoovVersion = $xMoovVersion;
        $this->skip = $skip;
        $this->count = $count;
        $this->status = $status;
        $this->statementDescriptor = $statementDescriptor;
    }
}