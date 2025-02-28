<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** Wallet - A Moov wallet to store funds for transfers. */
class Wallet
{
    /**
     *
     * @var string $walletID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('walletID')]
    public string $walletID;

    /**
     *
     * @var WalletAvailableBalance $availableBalance
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('availableBalance')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\WalletAvailableBalance')]
    public WalletAvailableBalance $availableBalance;

    /**
     * @param  string  $walletID
     * @param  WalletAvailableBalance  $availableBalance
     * @phpstan-pure
     */
    public function __construct(string $walletID, WalletAvailableBalance $availableBalance)
    {
        $this->walletID = $walletID;
        $this->availableBalance = $availableBalance;
    }
}