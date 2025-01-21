<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class UploadDisputeEvidenceFileRequest
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
     * @var Components\CreateEvidenceFileMultiPart $createEvidenceFileMultiPart
     */
    #[SpeakeasyMetadata('request:mediaType=multipart/form-data')]
    public Components\CreateEvidenceFileMultiPart $createEvidenceFileMultiPart;

    /**
     * Specify an API version.
     *
     * @var ?Components\Versions $xMoovVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-moov-version')]
    public ?Components\Versions $xMoovVersion = null;

    /**
     * @param  string  $accountID
     * @param  string  $disputeID
     * @param  Components\CreateEvidenceFileMultiPart  $createEvidenceFileMultiPart
     * @param  ?Components\Versions  $xMoovVersion
     */
    public function __construct(string $accountID, string $disputeID, Components\CreateEvidenceFileMultiPart $createEvidenceFileMultiPart, ?Components\Versions $xMoovVersion = null)
    {
        $this->accountID = $accountID;
        $this->disputeID = $disputeID;
        $this->createEvidenceFileMultiPart = $createEvidenceFileMultiPart;
        $this->xMoovVersion = $xMoovVersion;
    }
}