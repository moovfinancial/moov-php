<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class ListIssuedCardTransactionsRequest
{
    /**
     * The Moov business account for which cards have been issued.
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
     * Optional ID of the issued card to filter results.
     *
     * @var ?string $issuedCardID
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=issuedCardID')]
    public ?string $issuedCardID = null;

    /**
     * Optional date-time which inclusively filters all card transactions created after this date-time.
     *
     * @var ?\DateTime $startDateTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=startDateTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $startDateTime = null;

    /**
     * Optional date-time which exclusively filters all card transactions created before this date-time.
     *
     * @var ?\DateTime $endDateTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=endDateTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $endDateTime = null;

    /**
     * Specify an API version.
     *
     *
     * API versioning follows the format `vYYYY.QQ.BB`, where 
     *   - `YYYY` is the year
     *   - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)
     *   - `BB` is an **optional** build number starting at `.01` for subsequent builds in the same quarter. 
     *     - If no build number is specified, the version refers to the initial release of the quarter.
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
     * @param  ?string  $issuedCardID
     * @param  ?\DateTime  $startDateTime
     * @param  ?\DateTime  $endDateTime
     * @phpstan-pure
     */
    public function __construct(string $accountID, ?int $skip = null, ?int $count = null, ?string $issuedCardID = null, ?\DateTime $startDateTime = null, ?\DateTime $endDateTime = null, ?string $xMoovVersion = 'v2024.01')
    {
        $this->accountID = $accountID;
        $this->skip = $skip;
        $this->count = $count;
        $this->issuedCardID = $issuedCardID;
        $this->startDateTime = $startDateTime;
        $this->endDateTime = $endDateTime;
        $this->xMoovVersion = $xMoovVersion;
    }
}