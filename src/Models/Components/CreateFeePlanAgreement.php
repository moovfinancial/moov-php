<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class CreateFeePlanAgreement
{
    /**
     *
     * @var string $planID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('planID')]
    public string $planID;

    /**
     * @param  string  $planID
     * @phpstan-pure
     */
    public function __construct(string $planID)
    {
        $this->planID = $planID;
    }
}