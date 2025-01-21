<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
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
     * @param  string  $accountID
     * @param  ?Components\Versions  $xMoovVersion
     * @param  ?int  $skip
     * @param  ?int  $count
     * @param  ?string  $issuedCardID
     * @param  ?\DateTime  $startDateTime
     * @param  ?\DateTime  $endDateTime
     */
    public function __construct(string $accountID, ?Components\Versions $xMoovVersion = null, ?int $skip = null, ?int $count = null, ?string $issuedCardID = null, ?\DateTime $startDateTime = null, ?\DateTime $endDateTime = null)
    {
        $this->accountID = $accountID;
        $this->xMoovVersion = $xMoovVersion;
        $this->skip = $skip;
        $this->count = $count;
        $this->issuedCardID = $issuedCardID;
        $this->startDateTime = $startDateTime;
        $this->endDateTime = $endDateTime;
    }
}