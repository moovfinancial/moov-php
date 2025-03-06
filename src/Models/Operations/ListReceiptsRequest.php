<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Operations;

use Moov\MoovPhp\Utils\SpeakeasyMetadata;
class ListReceiptsRequest
{
    /**
     * The unique identifier to filter receipts by.
     *
     * @var ?string $id
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=id')]
    public ?string $id = null;

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
     * @param  ?string  $xMoovVersion
     * @param  ?string  $id
     * @phpstan-pure
     */
    public function __construct(?string $id = null, ?string $xMoovVersion = 'v2024.01.00')
    {
        $this->id = $id;
        $this->xMoovVersion = $xMoovVersion;
    }
}