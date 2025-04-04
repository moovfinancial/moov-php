<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Operations;

use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Utils\SpeakeasyMetadata;
class InitiateBankAccountVerificationRequest
{
    /**
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

    /**
     *
     * @var string $bankAccountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=bankAccountID')]
    public string $bankAccountID;

    /**
     * Optional header to wait for certain events, such as the rail response, to occur before returning a response.
     *
     *
     * When this header is set to `rail-response`, the endpoint will wait for a sent-credit or failed status from the payment rail.
     *
     * @var ?Components\BankAccountWaitFor $xWaitFor
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-wait-for')]
    public ?Components\BankAccountWaitFor $xWaitFor = null;

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
     * @param  string  $bankAccountID
     * @param  ?string  $xMoovVersion
     * @param  ?Components\BankAccountWaitFor  $xWaitFor
     * @phpstan-pure
     */
    public function __construct(string $accountID, string $bankAccountID, ?Components\BankAccountWaitFor $xWaitFor = null, ?string $xMoovVersion = 'v2024.01.00')
    {
        $this->accountID = $accountID;
        $this->bankAccountID = $bankAccountID;
        $this->xWaitFor = $xWaitFor;
        $this->xMoovVersion = $xMoovVersion;
    }
}