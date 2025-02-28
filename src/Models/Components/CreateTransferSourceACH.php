<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class CreateTransferSourceACH
{
    /**
     * An optional override of the default NACHA company entry description for a transfer.
     *
     * @var ?string $companyEntryDescription
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('companyEntryDescription')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyEntryDescription = null;

    /**
     * An optional override of the default NACHA company name for a transfer.
     *
     * @var ?string $originatingCompanyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('originatingCompanyName')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $originatingCompanyName = null;

    /**
     * An optional override of your default ACH hold period in banking days. The hold period must be longer than or equal to your default setting.
     *
     * @var ?DebitHoldPeriod $debitHoldPeriod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('debitHoldPeriod')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\DebitHoldPeriod|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?DebitHoldPeriod $debitHoldPeriod = null;

    /**
     * Code used to identify the ACH authorization method.
     *
     * @var ?SECCode $secCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('secCode')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\SECCode|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SECCode $secCode = null;

    /**
     * @param  ?string  $companyEntryDescription
     * @param  ?string  $originatingCompanyName
     * @param  ?DebitHoldPeriod  $debitHoldPeriod
     * @param  ?SECCode  $secCode
     * @phpstan-pure
     */
    public function __construct(?string $companyEntryDescription = null, ?string $originatingCompanyName = null, ?DebitHoldPeriod $debitHoldPeriod = null, ?SECCode $secCode = null)
    {
        $this->companyEntryDescription = $companyEntryDescription;
        $this->originatingCompanyName = $originatingCompanyName;
        $this->debitHoldPeriod = $debitHoldPeriod;
        $this->secCode = $secCode;
    }
}