<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class PostBrandRequest
{
    /**
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

    /**
     *
     * @var Components\Brand $brand
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Components\Brand $brand;

    /**
     * Specify an API version.
     *
     * @var ?Components\Versions $xMoovVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-moov-version')]
    public ?Components\Versions $xMoovVersion = null;

    /**
     * @param  string  $accountID
     * @param  Components\Brand  $brand
     * @param  ?Components\Versions  $xMoovVersion
     */
    public function __construct(string $accountID, Components\Brand $brand, ?Components\Versions $xMoovVersion = null)
    {
        $this->accountID = $accountID;
        $this->brand = $brand;
        $this->xMoovVersion = $xMoovVersion;
    }
}