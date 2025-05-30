<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


class WebhookDataNetworkIDUpdated
{
    /**
     *
     * @var string $accountID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('accountID')]
    public string $accountID;

    /**
     *
     * @var ?string $visaMid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('visaMid')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $visaMid = null;

    /**
     *
     * @var ?string $mastercardMid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mastercardMid')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $mastercardMid = null;

    /**
     *
     * @var ?string $discoverMid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discoverMid')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $discoverMid = null;

    /**
     *
     * @var ?string $amexMid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amexMid')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $amexMid = null;

    /**
     *
     * @var ?\DateTime $updatedOn
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updatedOn')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedOn = null;

    /**
     * @param  string  $accountID
     * @param  ?string  $visaMid
     * @param  ?string  $mastercardMid
     * @param  ?string  $discoverMid
     * @param  ?string  $amexMid
     * @param  ?\DateTime  $updatedOn
     * @phpstan-pure
     */
    public function __construct(string $accountID, ?string $visaMid = null, ?string $mastercardMid = null, ?string $discoverMid = null, ?string $amexMid = null, ?\DateTime $updatedOn = null)
    {
        $this->accountID = $accountID;
        $this->visaMid = $visaMid;
        $this->mastercardMid = $mastercardMid;
        $this->discoverMid = $discoverMid;
        $this->amexMid = $amexMid;
        $this->updatedOn = $updatedOn;
    }
}