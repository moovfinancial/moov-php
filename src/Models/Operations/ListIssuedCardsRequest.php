<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class ListIssuedCardsRequest
{
    /**
     * The Moov business account for which the cards have been issued.
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
     * Optional, comma-separated states to filter the Moov list issued cards response. For example `active,pending-verification`
     *
     * @var ?array<Components\IssuedCardState> $states
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=states')]
    public ?array $states = null;

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
     * @param  ?array<Components\IssuedCardState>  $states
     * @phpstan-pure
     */
    public function __construct(string $accountID, ?int $skip = null, ?int $count = null, ?array $states = null, ?string $xMoovVersion = 'v2024.01.00')
    {
        $this->accountID = $accountID;
        $this->skip = $skip;
        $this->count = $count;
        $this->states = $states;
        $this->xMoovVersion = $xMoovVersion;
    }
}