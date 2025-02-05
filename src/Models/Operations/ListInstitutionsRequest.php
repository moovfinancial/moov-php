<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class ListInstitutionsRequest
{
    /**
     * Name of the financial institution. Either `name` or `routingNumber` is required.
     *
     * @var ?string $name
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=name')]
    public ?string $name = null;

    /**
     * Routing number for a financial institution. Either `routingNumber` or `name` is required.
     *
     * @var ?string $routingNumber
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=routingNumber')]
    public ?string $routingNumber = null;

    /**
     * The state where a financial institution is based.
     *
     * @var ?string $state
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=state')]
    public ?string $state = null;

    /**
     * Maximum results returned by a search.
     *
     * @var ?int $limit
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=limit')]
    public ?int $limit = null;

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
     * @param  ?string  $xMoovVersion
     * @param  ?string  $name
     * @param  ?string  $routingNumber
     * @param  ?string  $state
     * @param  ?int  $limit
     * @phpstan-pure
     */
    public function __construct(?string $name = null, ?string $routingNumber = null, ?string $state = null, ?int $limit = null, ?string $xMoovVersion = 'v2024.01')
    {
        $this->name = $name;
        $this->routingNumber = $routingNumber;
        $this->state = $state;
        $this->limit = $limit;
        $this->xMoovVersion = $xMoovVersion;
    }
}