<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** Specifies the card processing pricing model */
enum CardAcquiringModel: string
{
    case CostPlus = 'cost-plus';
    case FlatRate = 'flat-rate';
}
