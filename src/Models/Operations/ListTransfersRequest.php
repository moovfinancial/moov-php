<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Operations;

use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Utils\SpeakeasyMetadata;
class ListTransfersRequest
{
    /**
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

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
     * Specify an API version.
     *
     *
     * API versioning follows the format `vYYYY.QQ.BB`, where 
     *   - `YYYY` is the year
     *   - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)
     *   - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. 
     *     - For example, `v2024.01.00` is the initial release of the first quarter of 2024.
     *
     * The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release.
     *
     * @var ?string $xMoovVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-moov-version')]
    public ?string $xMoovVersion = null;

    /**
     * @param  string  $accountID
     * @param  ?string  $xMoovVersion
     * @param  ?array<string>  $accountIDs
     * @param  ?Components\TransferStatus  $status
     * @param  ?\DateTime  $startDateTime
     * @param  ?\DateTime  $endDateTime
     * @param  ?string  $groupID
     * @param  ?bool  $refunded
     * @param  ?bool  $disputed
     * @param  ?int  $skip
     * @param  ?int  $count
     * @phpstan-pure
     */
    public function __construct(string $accountID, ?array $accountIDs = null, ?Components\TransferStatus $status = null, ?\DateTime $startDateTime = null, ?\DateTime $endDateTime = null, ?string $groupID = null, ?bool $refunded = null, ?bool $disputed = null, ?int $skip = null, ?int $count = null, ?string $xMoovVersion = 'v2024.01.00')
    {
        $this->accountID = $accountID;
        $this->accountIDs = $accountIDs;
        $this->status = $status;
        $this->startDateTime = $startDateTime;
        $this->endDateTime = $endDateTime;
        $this->groupID = $groupID;
        $this->refunded = $refunded;
        $this->disputed = $disputed;
        $this->skip = $skip;
        $this->count = $count;
        $this->xMoovVersion = $xMoovVersion;
    }
}