<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class BillableFee
{
    /**
     * Specifies the pricing model used for the calculation of the final fee.
     *
     * @var FeeModel $feeModel
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('feeModel')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\FeeModel')]
    public FeeModel $feeModel;

    /**
     *
     * @var FeeCategory $feeCategory
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('feeCategory')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\FeeCategory')]
    public FeeCategory $feeCategory;

    /**
     *
     * @var ?string $billableFeeID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billableFeeID')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $billableFeeID = null;

    /**
     * A unique code identifying a charge.
     *
     * @var ?string $billableEvent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billableEvent')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $billableEvent = null;

    /**
     * Specifies the name of the fee that will be billed.
     *
     * @var ?string $feeName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('feeName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $feeName = null;

    /**
     * Defines the specific parameters used for fee calculation.
     *
     * @var ?FeeProperties $feeProperties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('feeProperties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\FeeProperties|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?FeeProperties $feeProperties = null;

    /**
     * Defines the specific conditions that must be met for the fee to be applied.
     *
     * @var ?array<string, mixed> $feeConditions
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('feeConditions')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $feeConditions = null;

    /**
     * @param  FeeModel  $feeModel
     * @param  FeeCategory  $feeCategory
     * @param  ?string  $billableFeeID
     * @param  ?string  $billableEvent
     * @param  ?string  $feeName
     * @param  ?FeeProperties  $feeProperties
     * @param  ?array<string, mixed>  $feeConditions
     * @phpstan-pure
     */
    public function __construct(FeeModel $feeModel, FeeCategory $feeCategory, ?string $billableFeeID = null, ?string $billableEvent = null, ?string $feeName = null, ?FeeProperties $feeProperties = null, ?array $feeConditions = null)
    {
        $this->feeModel = $feeModel;
        $this->feeCategory = $feeCategory;
        $this->billableFeeID = $billableFeeID;
        $this->billableEvent = $billableEvent;
        $this->feeName = $feeName;
        $this->feeProperties = $feeProperties;
        $this->feeConditions = $feeConditions;
    }
}