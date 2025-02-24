<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class ListDisputesRequest
{
    /**
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

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
     * Optional date-time parameter to filter all disputes created on and after the provided date and time.
     *
     * @var ?\DateTime $startDateTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=startDateTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $startDateTime = null;

    /**
     * Optional date-time parameter to filter all disputes created on and before the provided date and time.
     *
     * @var ?\DateTime $endDateTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=endDateTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $endDateTime = null;

    /**
     * Optional date-time which exclusively filters all disputes with respond by before this date-time.
     *
     * @var ?\DateTime $respondStartDateTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=respondStartDateTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $respondStartDateTime = null;

    /**
     * Optional date-time which exclusively filters all disputes with respond by before this date-time.
     *
     * @var ?\DateTime $respondEndDateTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=respondEndDateTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $respondEndDateTime = null;

    /**
     * Optional dispute status by which to filter the disputes.
     *
     * @var ?Components\DisputeStatus $status
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=status')]
    public ?Components\DisputeStatus $status = null;

    /**
     * Optional parameter to filter by merchant account ID.
     *
     * @var ?string $merchantAccountID
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=merchantAccountID')]
    public ?string $merchantAccountID = null;

    /**
     * Optional parameter to filter by cardholder account ID.
     *
     * @var ?string $cardholderAccountID
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=cardholderAccountID')]
    public ?string $cardholderAccountID = null;

    /**
     * Optional parameter to filter by a comma separated list of dispute IDs.
     *
     * @var ?array<string> $disputeIDs
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=disputeIDs')]
    public ?array $disputeIDs = null;

    /**
     * Optional parameter to filter by a comma separated list of transfer IDs.
     *
     * @var ?array<string> $transferIDs
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=transferIDs')]
    public ?array $transferIDs = null;

    /**
     *
     * @var ?string $orderBy
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=orderBy')]
    public ?string $orderBy = null;

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
     * @param  ?int  $skip
     * @param  ?int  $count
     * @param  ?\DateTime  $startDateTime
     * @param  ?\DateTime  $endDateTime
     * @param  ?\DateTime  $respondStartDateTime
     * @param  ?\DateTime  $respondEndDateTime
     * @param  ?Components\DisputeStatus  $status
     * @param  ?string  $merchantAccountID
     * @param  ?string  $cardholderAccountID
     * @param  ?array<string>  $disputeIDs
     * @param  ?array<string>  $transferIDs
     * @param  ?string  $orderBy
     * @phpstan-pure
     */
    public function __construct(string $accountID, ?int $skip = null, ?int $count = null, ?\DateTime $startDateTime = null, ?\DateTime $endDateTime = null, ?\DateTime $respondStartDateTime = null, ?\DateTime $respondEndDateTime = null, ?Components\DisputeStatus $status = null, ?string $merchantAccountID = null, ?string $cardholderAccountID = null, ?array $disputeIDs = null, ?array $transferIDs = null, ?string $orderBy = null, ?string $xMoovVersion = 'v2024.01.00')
    {
        $this->accountID = $accountID;
        $this->skip = $skip;
        $this->count = $count;
        $this->startDateTime = $startDateTime;
        $this->endDateTime = $endDateTime;
        $this->respondStartDateTime = $respondStartDateTime;
        $this->respondEndDateTime = $respondEndDateTime;
        $this->status = $status;
        $this->merchantAccountID = $merchantAccountID;
        $this->cardholderAccountID = $cardholderAccountID;
        $this->disputeIDs = $disputeIDs;
        $this->transferIDs = $transferIDs;
        $this->orderBy = $orderBy;
        $this->xMoovVersion = $xMoovVersion;
    }
}