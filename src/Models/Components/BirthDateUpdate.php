<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class BirthDateUpdate
{
    /**
     *
     * @var ?int $day
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('day')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $day = null;

    /**
     *
     * @var ?int $month
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('month')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $month = null;

    /**
     *
     * @var ?int $year
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('year')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?int $year = null;

    /**
     * @param  ?int  $day
     * @param  ?int  $month
     * @param  ?int  $year
     */
    public function __construct(?int $day = null, ?int $month = null, ?int $year = null)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
}