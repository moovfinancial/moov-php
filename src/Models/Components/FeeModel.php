<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** Specifies the pricing model used for the calculation of the final fee. */
enum FeeModel: string
{
    case Fixed = 'fixed';
    case Blended = 'blended';
    case Variable = 'variable';
}
