<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class ListAccountsRequest
{
    /**
     * Filter connected accounts by name.
     *
     *
     * If provided, this query will attempt to find matches against the following Account and Profile fields:
     * <ul>
     *   <li>Account `displayName`</li>
     *   <li>Individual Profile `firstName`, `middleName`, and `lastName`</li>
     *   <li>Business Profile `legalBusinessName`</li>
     * </ul>
     *
     * @var ?string $name
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=name')]
    public ?string $name = null;

    /**
     *   Filter connected accounts by email address.
     *
     *
     *   Provide the full email address to filter by email.
     *
     * @var ?string $email
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=email')]
    public ?string $email = null;

    /**
     *   Filter connected accounts by AccountType.
     *
     *
     *   If the `type` parameter is used in combination with `name`, only the corresponding type's name fields will
     *   be searched. For example, if `type=business` and `name=moov`, the search will attempt to find matches against
     *   the display name and Business Profile name fields (`legalBusinessName`, and `doingBusinessAs`).
     *
     * @var ?Components\AccountType $type
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=type')]
    public ?Components\AccountType $type = null;

    /**
     *   Serves as an optional alias from a foreign/external system which can be used to reference this resource.
     *
     * @var ?string $foreignID
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=foreignID')]
    public ?string $foreignID = null;

    /**
     * Filter disconnected accounts.
     *
     *
     * If true, the response will include disconnected accounts.
     *
     * @var ?bool $includeDisconnected
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=includeDisconnected')]
    public ?bool $includeDisconnected = null;

    /**
     *   Filter connected accounts by the capability.
     *
     * @var ?Components\CapabilityID $capability
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=capability')]
    public ?Components\CapabilityID $capability = null;

    /**
     *   Filter connected accounts by the capability.
     *
     * @var ?Components\CapabilityStatus $capabilityStatus
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=capabilityStatus')]
    public ?Components\CapabilityStatus $capabilityStatus = null;

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
     * @param  ?string  $name
     * @param  ?string  $email
     * @param  ?Components\AccountType  $type
     * @param  ?string  $foreignID
     * @param  ?bool  $includeDisconnected
     * @param  ?Components\CapabilityID  $capability
     * @param  ?Components\CapabilityStatus  $capabilityStatus
     * @param  ?int  $skip
     * @param  ?int  $count
     * @phpstan-pure
     */
    public function __construct(?string $name = null, ?string $email = null, ?Components\AccountType $type = null, ?string $foreignID = null, ?bool $includeDisconnected = null, ?Components\CapabilityID $capability = null, ?Components\CapabilityStatus $capabilityStatus = null, ?int $skip = null, ?int $count = null, ?string $xMoovVersion = 'v2024.01.00')
    {
        $this->name = $name;
        $this->email = $email;
        $this->type = $type;
        $this->foreignID = $foreignID;
        $this->includeDisconnected = $includeDisconnected;
        $this->capability = $capability;
        $this->capabilityStatus = $capabilityStatus;
        $this->skip = $skip;
        $this->count = $count;
        $this->xMoovVersion = $xMoovVersion;
    }
}