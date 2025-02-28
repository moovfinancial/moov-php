<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** The result of an event. */
enum IssuedCardAuthorizationEventResult: string
{
    case Approved = 'approved';
    case Declined = 'declined';
    case Processed = 'processed';
}
