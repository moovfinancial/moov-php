<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** Recur - Defines configuration for recurring transfers. */
class Recur
{
    /**
     *   RRule as defined by RFC 5545 (https://www.rfc-editor.org/rfc/rfc5545#section-3.3.10). 
     *
     *   Generators available online at the following sites - https://freetools.textmagic.com/rrule-generator, https://jkbrzt.github.io/rrule/
     *
     * @var string $recurrenceRule
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('recurrenceRule')]
    public string $recurrenceRule;

    /**
     * Defines the attributes of a transfer.
     *
     * @var RunTransfer $runTransfer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('runTransfer')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\RunTransfer')]
    public RunTransfer $runTransfer;

    /**
     * True if the RRule set runs indefinitely.
     *
     * @var ?bool $indefinite
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('indefinite')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $indefinite = null;

    /**
     *
     * @var ?\DateTime $start
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $start = null;

    /**
     * @param  string  $recurrenceRule
     * @param  RunTransfer  $runTransfer
     * @param  ?bool  $indefinite
     * @param  ?\DateTime  $start
     * @phpstan-pure
     */
    public function __construct(string $recurrenceRule, RunTransfer $runTransfer, ?bool $indefinite = null, ?\DateTime $start = null)
    {
        $this->recurrenceRule = $recurrenceRule;
        $this->runTransfer = $runTransfer;
        $this->indefinite = $indefinite;
        $this->start = $start;
    }
}