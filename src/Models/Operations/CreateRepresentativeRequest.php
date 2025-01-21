<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class CreateRepresentativeRequest
{
    /**
     * ID of the account.
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

    /**
     *
     * @var Components\CreateRepresentative $createRepresentative
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\CreateRepresentative $createRepresentative;

    /**
     * Specify an API version.
     *
     * @var ?Components\Versions $xMoovVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-moov-version')]
    public ?Components\Versions $xMoovVersion = null;

    /**
     * @param  string  $accountID
     * @param  Components\CreateRepresentative  $createRepresentative
     * @param  ?Components\Versions  $xMoovVersion
     */
    public function __construct(string $accountID, Components\CreateRepresentative $createRepresentative, ?Components\Versions $xMoovVersion = null)
    {
        $this->accountID = $accountID;
        $this->createRepresentative = $createRepresentative;
        $this->xMoovVersion = $xMoovVersion;
    }
}