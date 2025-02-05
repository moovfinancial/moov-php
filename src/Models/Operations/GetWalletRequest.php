<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class GetWalletRequest
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
     * @param  string  $walletID
     * @param  ?string  $xMoovVersion
     * @phpstan-pure
     */
    public function __construct(string $accountID, string $walletID, ?string $xMoovVersion = 'v2024.01')
    {
        $this->accountID = $accountID;
        $this->walletID = $walletID;
        $this->xMoovVersion = $xMoovVersion;
    }
}