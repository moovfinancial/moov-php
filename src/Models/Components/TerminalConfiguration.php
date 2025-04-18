<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** TerminalConfiguration - Describes a terminal configuration. */
class TerminalConfiguration
{
    /**
     *
     * @var string $configuration
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('configuration')]
    public string $configuration;

    /**
     * @param  string  $configuration
     * @phpstan-pure
     */
    public function __construct(string $configuration)
    {
        $this->configuration = $configuration;
    }
}