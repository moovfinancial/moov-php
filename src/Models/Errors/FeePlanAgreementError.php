<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Errors;

use Moov\OpenAPI\Utils;
class FeePlanAgreementError
{
    /**
     *
     * @var ?string $planID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('planID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $planID = null;

    /**
     * @param  ?string  $planID
     * @phpstan-pure
     */
    public function __construct(?string $planID = null)
    {
        $this->planID = $planID;
    }

    public function toException(): FeePlanAgreementErrorThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new FeePlanAgreementErrorThrowable($message, (int) $code, $this);
    }
}