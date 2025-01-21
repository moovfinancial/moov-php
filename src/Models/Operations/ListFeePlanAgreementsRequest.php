<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Operations;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class ListFeePlanAgreementsRequest
{
    /**
     *
     * @var string $accountID
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountID')]
    public string $accountID;

    /**
     * Specify an API version.
     *
     * @var ?Components\Versions $xMoovVersion
     */
    #[SpeakeasyMetadata('header:style=simple,explode=false,name=x-moov-version')]
    public ?Components\Versions $xMoovVersion = null;

    /**
     * A comma-separated list of agreement IDs to filter the results by.
     *
     * @var ?array<string> $agreementID
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=agreementID')]
    public ?array $agreementID = null;

    /**
     * A comma-separated list of statuses to filter the results by.
     *
     * @var ?array<Components\FeePlanAgreementStatus> $status
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=status')]
    public ?array $status = null;

    /**
     * @param  string  $accountID
     * @param  ?Components\Versions  $xMoovVersion
     * @param  ?array<string>  $agreementID
     * @param  ?array<Components\FeePlanAgreementStatus>  $status
     */
    public function __construct(string $accountID, ?Components\Versions $xMoovVersion = null, ?array $agreementID = null, ?array $status = null)
    {
        $this->accountID = $accountID;
        $this->xMoovVersion = $xMoovVersion;
        $this->agreementID = $agreementID;
        $this->status = $status;
    }
}