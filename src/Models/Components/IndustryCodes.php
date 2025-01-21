<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class IndustryCodes
{
    /**
     *
     * @var string $naics
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('naics')]
    public string $naics;

    /**
     *
     * @var string $sic
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('sic')]
    public string $sic;

    /**
     *
     * @var string $mcc
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('mcc')]
    public string $mcc;

    /**
     * @param  string  $naics
     * @param  string  $sic
     * @param  string  $mcc
     */
    public function __construct(string $naics, string $sic, string $mcc)
    {
        $this->naics = $naics;
        $this->sic = $sic;
        $this->mcc = $mcc;
    }
}