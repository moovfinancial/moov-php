<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class BankAccountIntegration
{
    /**
     *
     * @var string $holderName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('holderName')]
    public string $holderName;

    /**
     * The type of holder on a funding source.
     *
     * @var BankAccountHolderType $holderType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('holderType')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\BankAccountHolderType')]
    public BankAccountHolderType $holderType;

    /**
     *
     * @var string $accountNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountNumber')]
    public string $accountNumber;

    /**
     * The bank account type.
     *
     * @var BankAccountType $bankAccountType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bankAccountType')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\BankAccountType')]
    public BankAccountType $bankAccountType;

    /**
     *
     * @var string $routingNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('routingNumber')]
    public string $routingNumber;

    /**
     * @param  string  $holderName
     * @param  BankAccountHolderType  $holderType
     * @param  string  $accountNumber
     * @param  BankAccountType  $bankAccountType
     * @param  string  $routingNumber
     * @phpstan-pure
     */
    public function __construct(string $holderName, BankAccountHolderType $holderType, string $accountNumber, BankAccountType $bankAccountType, string $routingNumber)
    {
        $this->holderName = $holderName;
        $this->holderType = $holderType;
        $this->accountNumber = $accountNumber;
        $this->bankAccountType = $bankAccountType;
        $this->routingNumber = $routingNumber;
    }
}