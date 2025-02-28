<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Operations;

use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Utils\SpeakeasyMetadata;
class CreateTransferRequest
{
    /**
     * Prevents duplicate transfers from being created.
     *
     * @var string $xIdempotencyKey
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-idempotency-key')]
    public string $xIdempotencyKey;

    /**
     * The merchant's Moov account ID.
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

    /**
     *
     * @var Components\CreateTransfer $createTransfer
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CreateTransfer $createTransfer;

    /**
     * Optional header that indicates whether to return a synchronous response that includes full transfer and rail-specific details or an 
     *
     * asynchronous response indicating the transfer was created (this is the default response if the header is omitted).
     *
     * @var ?Components\TransferWaitFor $xWaitFor
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-wait-for')]
    public ?Components\TransferWaitFor $xWaitFor = null;

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
     * @param  string  $xIdempotencyKey
     * @param  string  $accountID
     * @param  Components\CreateTransfer  $createTransfer
     * @param  ?string  $xMoovVersion
     * @param  ?Components\TransferWaitFor  $xWaitFor
     * @phpstan-pure
     */
    public function __construct(string $xIdempotencyKey, string $accountID, Components\CreateTransfer $createTransfer, ?Components\TransferWaitFor $xWaitFor = null, ?string $xMoovVersion = 'v2024.01.00')
    {
        $this->xIdempotencyKey = $xIdempotencyKey;
        $this->accountID = $accountID;
        $this->createTransfer = $createTransfer;
        $this->xWaitFor = $xWaitFor;
        $this->xMoovVersion = $xMoovVersion;
    }
}