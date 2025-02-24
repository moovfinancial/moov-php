<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class EnrichedIndustries
{
    /**
     * $industries
     *
     * @var array<EnrichedIndustry> $industries
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('industries')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Moov\OpenAPI\Models\Components\EnrichedIndustry>')]
    public array $industries;

    /**
     * @param  array<EnrichedIndustry>  $industries
     * @phpstan-pure
     */
    public function __construct(array $industries)
    {
        $this->industries = $industries;
    }
}