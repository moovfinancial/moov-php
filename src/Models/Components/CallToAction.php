<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/**
 * The text to be displayed on web form's submit button.
 *
 *
 * If set to "auto" the UI will automatically select between 
 * "pay" and "confirm" for payments and payouts respectively.
 */
enum CallToAction: string
{
    case Pay = 'pay';
    case Book = 'book';
    case Subscribe = 'subscribe';
    case Donate = 'donate';
    case Confirm = 'confirm';
    case Auto = 'auto';
}
