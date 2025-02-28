<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Operations;

use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Utils\SpeakeasyMetadata;
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
     * @param  ?Components\SweepStatus  $status
     * @param  ?string  $statementDescriptor
     * @phpstan-pure
     */
    public function __construct(string $accountID, string $walletID, ?int $skip = null, ?int $count = null, ?Components\SweepStatus $status = null, ?string $statementDescriptor = null, ?string $xMoovVersion = 'v2024.01.00')
    {
        $this->accountID = $accountID;
        $this->walletID = $walletID;
        $this->skip = $skip;
        $this->count = $count;
        $this->status = $status;
        $this->statementDescriptor = $statementDescriptor;
        $this->xMoovVersion = $xMoovVersion;
    }
}