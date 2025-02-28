<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class ListWalletTransactionsRequest
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
     * Optional parameter to filter by transaction type.
     *
     * @var ?Components\WalletTransactionType $transactionType
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=transactionType')]
    public ?Components\WalletTransactionType $transactionType = null;

    /**
     * Optional, comma-separated parameter to filter by transaction types.
     *
     * @var ?array<Components\WalletTransactionType> $transactionTypes
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=transactionTypes')]
    public ?array $transactionTypes = null;

    /**
     * Optional parameter to filter by source type (i.e. transfer, dispute, issuing-transaction).
     *
     * @var ?Components\WalletTransactionSourceType $sourceType
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=sourceType')]
    public ?Components\WalletTransactionSourceType $sourceType = null;

    /**
     * Optional parameter to filter by source ID.
     *
     * @var ?string $sourceID
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=sourceID')]
    public ?string $sourceID = null;

    /**
     * Optional parameter to filter by status (`pending` or `completed`).
     *
     * @var ?Components\WalletTransactionStatus $status
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=status')]
    public ?Components\WalletTransactionStatus $status = null;

    /**
     * Optional date-time which inclusively filters all transactions created after this date-time.
     *
     * @var ?\DateTime $createdStartDateTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=createdStartDateTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $createdStartDateTime = null;

    /**
     * Optional date-time which exclusively filters all transactions created before this date-time.
     *
     * @var ?\DateTime $createdEndDateTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=createdEndDateTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $createdEndDateTime = null;

    /**
     * Optional date-time which inclusively filters all transactions completed after this date-time.
     *
     * @var ?\DateTime $completedStartDateTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=completedStartDateTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $completedStartDateTime = null;

    /**
     * Optional date-time which exclusively filters all transactions completed before this date-time.
     *
     * @var ?\DateTime $completedEndDateTime
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=completedEndDateTime,dateTimeFormat=Y-m-d\TH:i:s.up')]
    public ?\DateTime $completedEndDateTime = null;

    /**
     * Optional ID to filter for transactions accrued in a sweep.
     *
     * @var ?string $sweepID
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=sweepID')]
    public ?string $sweepID = null;

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
     * @param  string  $walletID
     * @param  ?string  $xMoovVersion
     * @param  ?int  $skip
     * @param  ?int  $count
     * @param  ?Components\WalletTransactionType  $transactionType
     * @param  ?array<Components\WalletTransactionType>  $transactionTypes
     * @param  ?Components\WalletTransactionSourceType  $sourceType
     * @param  ?string  $sourceID
     * @param  ?Components\WalletTransactionStatus  $status
     * @param  ?\DateTime  $createdStartDateTime
     * @param  ?\DateTime  $createdEndDateTime
     * @param  ?\DateTime  $completedStartDateTime
     * @param  ?\DateTime  $completedEndDateTime
     * @param  ?string  $sweepID
     * @phpstan-pure
     */
    public function __construct(string $accountID, string $walletID, ?int $skip = null, ?int $count = null, ?Components\WalletTransactionType $transactionType = null, ?array $transactionTypes = null, ?Components\WalletTransactionSourceType $sourceType = null, ?string $sourceID = null, ?Components\WalletTransactionStatus $status = null, ?\DateTime $createdStartDateTime = null, ?\DateTime $createdEndDateTime = null, ?\DateTime $completedStartDateTime = null, ?\DateTime $completedEndDateTime = null, ?string $sweepID = null, ?string $xMoovVersion = 'v2024.01.00')
    {
        $this->accountID = $accountID;
        $this->walletID = $walletID;
        $this->skip = $skip;
        $this->count = $count;
        $this->transactionType = $transactionType;
        $this->transactionTypes = $transactionTypes;
        $this->sourceType = $sourceType;
        $this->sourceID = $sourceID;
        $this->status = $status;
        $this->createdStartDateTime = $createdStartDateTime;
        $this->createdEndDateTime = $createdEndDateTime;
        $this->completedStartDateTime = $completedStartDateTime;
        $this->completedEndDateTime = $completedEndDateTime;
        $this->sweepID = $sweepID;
        $this->xMoovVersion = $xMoovVersion;
    }
}