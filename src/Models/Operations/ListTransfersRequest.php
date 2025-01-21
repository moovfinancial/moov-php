<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class ListTransfersRequest
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
     * Optional, comma-separated account IDs by which the response is filtered based on whether the account ID is the source or destination.
     *
     * @var ?array<string> $accountIDs
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=accountIDs')]
    public ?array $accountIDs = null;

    /**
     * Optional parameter for filtering transfers by status.
     *
     * @var ?Components\TransferStatus $status
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=status')]
    public ?Components\TransferStatus $status = null;

    /**
     * Optional date-time which inclusively filters all transfers created after this date-time.
     *
     * @var ?\DateTime $startDateTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=startDateTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $startDateTime = null;

    /**
     * Optional date-time which exclusively filters all transfers created before this date-time.
     *
     * @var ?\DateTime $endDateTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=endDateTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $endDateTime = null;

    /**
     * Optional ID to filter for transfers in the same group.
     *
     * @var ?string $groupID
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=groupID')]
    public ?string $groupID = null;

    /**
     * Optional parameter to only return refunded transfers.
     *
     * @var ?bool $refunded
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=refunded')]
    public ?bool $refunded = null;

    /**
     * Optional parameter to only return disputed transfers.
     *
     * @var ?bool $disputed
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=disputed')]
    public ?bool $disputed = null;

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
     * @param  string  $accountID
     * @param  ?Components\Versions  $xMoovVersion
     * @param  ?array<string>  $accountIDs
     * @param  ?Components\TransferStatus  $status
     * @param  ?\DateTime  $startDateTime
     * @param  ?\DateTime  $endDateTime
     * @param  ?string  $groupID
     * @param  ?bool  $refunded
     * @param  ?bool  $disputed
     * @param  ?int  $skip
     * @param  ?int  $count
     */
    public function __construct(string $accountID, ?Components\Versions $xMoovVersion = null, ?array $accountIDs = null, ?Components\TransferStatus $status = null, ?\DateTime $startDateTime = null, ?\DateTime $endDateTime = null, ?string $groupID = null, ?bool $refunded = null, ?bool $disputed = null, ?int $skip = null, ?int $count = null)
    {
        $this->accountID = $accountID;
        $this->xMoovVersion = $xMoovVersion;
        $this->accountIDs = $accountIDs;
        $this->status = $status;
        $this->startDateTime = $startDateTime;
        $this->endDateTime = $endDateTime;
        $this->groupID = $groupID;
        $this->refunded = $refunded;
        $this->disputed = $disputed;
        $this->skip = $skip;
        $this->count = $count;
    }
}