<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Operations;

use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Utils\SpeakeasyMetadata;
class UpdateDisputeEvidenceRequest
{
    /**
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

    /**
     *
     * @var string $disputeID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=disputeID')]
    public string $disputeID;

    /**
     *
     * @var string $evidenceID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=evidenceID')]
    public string $evidenceID;

    /**
     *
     * @var Components\UpdateEvidence $updateEvidence
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\UpdateEvidence $updateEvidence;

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
     * @param  string  $disputeID
     * @param  string  $evidenceID
     * @param  Components\UpdateEvidence  $updateEvidence
     * @param  ?string  $xMoovVersion
     * @phpstan-pure
     */
    public function __construct(string $accountID, string $disputeID, string $evidenceID, Components\UpdateEvidence $updateEvidence, ?string $xMoovVersion = 'v2024.01.00')
    {
        $this->accountID = $accountID;
        $this->disputeID = $disputeID;
        $this->evidenceID = $evidenceID;
        $this->updateEvidence = $updateEvidence;
        $this->xMoovVersion = $xMoovVersion;
    }
}