<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** ACHTransactionDetails - ACH specific details about the transaction. */
class ACHTransactionDetails
{
    /**
     * Status of a transaction within the ACH lifecycle.
     *
     * @var ACHTransactionStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\ACHTransactionStatus')]
    public ACHTransactionStatus $status;

    /**
     *
     * @var string $traceNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('traceNumber')]
    public string $traceNumber;

    /**
     *
     * @var ?ACHException $return
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('return')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\ACHException|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ACHException $return = null;

    /**
     *
     * @var ?ACHException $correction
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('correction')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\ACHException|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?ACHException $correction = null;

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
     * Code used to identify the ACH authorization method.
     *
     * @var ?SECCode $secCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('secCode')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\SECCode|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?SECCode $secCode = null;

    /**
     *
     * @var ?\DateTime $canceledOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('canceledOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $canceledOn = null;

    /**
     *
     * @var ?\DateTime $initiatedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('initiatedOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $initiatedOn = null;

    /**
     *
     * @var ?\DateTime $originatedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('originatedOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $originatedOn = null;

    /**
     *
     * @var ?\DateTime $correctedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('correctedOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $correctedOn = null;

    /**
     *
     * @var ?\DateTime $returnedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('returnedOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $returnedOn = null;

    /**
     *
     * @var ?\DateTime $failedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('failedOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $failedOn = null;

    /**
     *
     * @var ?\DateTime $completedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('completedOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $completedOn = null;

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
     * @param  ACHTransactionStatus  $status
     * @param  string  $traceNumber
     * @param  ?ACHException  $return
     * @param  ?ACHException  $correction
     * @param  ?string  $companyEntryDescription
     * @param  ?string  $originatingCompanyName
     * @param  ?SECCode  $secCode
     * @param  ?\DateTime  $canceledOn
     * @param  ?\DateTime  $initiatedOn
     * @param  ?\DateTime  $originatedOn
     * @param  ?\DateTime  $correctedOn
     * @param  ?\DateTime  $returnedOn
     * @param  ?\DateTime  $failedOn
     * @param  ?\DateTime  $completedOn
     * @param  ?DebitHoldPeriod  $debitHoldPeriod
     * @phpstan-pure
     */
    public function __construct(ACHTransactionStatus $status, string $traceNumber, ?ACHException $return = null, ?ACHException $correction = null, ?string $companyEntryDescription = null, ?string $originatingCompanyName = null, ?SECCode $secCode = null, ?\DateTime $canceledOn = null, ?\DateTime $initiatedOn = null, ?\DateTime $originatedOn = null, ?\DateTime $correctedOn = null, ?\DateTime $returnedOn = null, ?\DateTime $failedOn = null, ?\DateTime $completedOn = null, ?DebitHoldPeriod $debitHoldPeriod = null)
    {
        $this->status = $status;
        $this->traceNumber = $traceNumber;
        $this->return = $return;
        $this->correction = $correction;
        $this->companyEntryDescription = $companyEntryDescription;
        $this->originatingCompanyName = $originatingCompanyName;
        $this->secCode = $secCode;
        $this->canceledOn = $canceledOn;
        $this->initiatedOn = $initiatedOn;
        $this->originatedOn = $originatedOn;
        $this->correctedOn = $correctedOn;
        $this->returnedOn = $returnedOn;
        $this->failedOn = $failedOn;
        $this->completedOn = $completedOn;
        $this->debitHoldPeriod = $debitHoldPeriod;
    }
}