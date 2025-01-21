<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class SweepConfig
{
    /**
     *
     * @var string $sweepConfigID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sweepConfigID')]
    public string $sweepConfigID;

    /**
     *
     * @var string $walletID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('walletID')]
    public string $walletID;

    /**
     *
     * @var SweepConfigStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\SweepConfigStatus')]
    public SweepConfigStatus $status;

    /**
     * The payment method used to push or pull funds to a bank account.
     *
     * The push payment method can only be ach-credit-standard or ach-credit-same-day. The pull payment method can only be ach-debit-fund.
     *
     * @var SweepConfigPaymentMethod $pushPaymentMethod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pushPaymentMethod')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\SweepConfigPaymentMethod')]
    public SweepConfigPaymentMethod $pushPaymentMethod;

    /**
     * The payment method used to push or pull funds to a bank account.
     *
     * The push payment method can only be ach-credit-standard or ach-credit-same-day. The pull payment method can only be ach-debit-fund.
     *
     * @var SweepConfigPaymentMethod $pullPaymentMethod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pullPaymentMethod')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\SweepConfigPaymentMethod')]
    public SweepConfigPaymentMethod $pullPaymentMethod;

    /**
     *
     * @var \DateTime $createdOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdOn')]
    public \DateTime $createdOn;

    /**
     *
     * @var \DateTime $updatedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedOn')]
    public \DateTime $updatedOn;

    /**
     * An optional field to specify an amount to maintain in the wallet. This is a decimal-formatted numerical string that represents up to 2 decimal place precision. In USD for example, 12.34 is $12.34 and 0.99 is $0.99. If not supplied, the default is 0.00.
     *
     * @var ?string $minimumBalance
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('minimumBalance')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $minimumBalance = null;

    /**
     * The text that appears on the banking statement. The default descriptor is a 10 character ID if an override is not set in the sweep configs statementDescriptor.
     *
     * @var ?string $statementDescriptor
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('statementDescriptor')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $statementDescriptor = null;

    /**
     * An array of fields that are locked. To request updates, please contact Moov support.
     *
     * @var ?array<string> $lockedFields
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lockedFields')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $lockedFields = null;

    /**
     *
     * @var ?\DateTime $disabledOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('disabledOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $disabledOn = null;

    /**
     * @param  string  $sweepConfigID
     * @param  string  $walletID
     * @param  SweepConfigStatus  $status
     * @param  SweepConfigPaymentMethod  $pushPaymentMethod
     * @param  SweepConfigPaymentMethod  $pullPaymentMethod
     * @param  \DateTime  $createdOn
     * @param  \DateTime  $updatedOn
     * @param  ?string  $minimumBalance
     * @param  ?string  $statementDescriptor
     * @param  ?array<string>  $lockedFields
     * @param  ?\DateTime  $disabledOn
     */
    public function __construct(string $sweepConfigID, string $walletID, SweepConfigStatus $status, SweepConfigPaymentMethod $pushPaymentMethod, SweepConfigPaymentMethod $pullPaymentMethod, \DateTime $createdOn, \DateTime $updatedOn, ?string $minimumBalance = null, ?string $statementDescriptor = null, ?array $lockedFields = null, ?\DateTime $disabledOn = null)
    {
        $this->sweepConfigID = $sweepConfigID;
        $this->walletID = $walletID;
        $this->status = $status;
        $this->pushPaymentMethod = $pushPaymentMethod;
        $this->pullPaymentMethod = $pullPaymentMethod;
        $this->createdOn = $createdOn;
        $this->updatedOn = $updatedOn;
        $this->minimumBalance = $minimumBalance;
        $this->statementDescriptor = $statementDescriptor;
        $this->lockedFields = $lockedFields;
        $this->disabledOn = $disabledOn;
    }
}