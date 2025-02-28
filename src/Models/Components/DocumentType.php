<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** Types of documents that can be uploaded. */
enum DocumentType: string
{
    case DriversLicense = 'driversLicense';
    case Passport = 'passport';
    case UtilityBill = 'utilityBill';
    case BankStatement = 'bankStatement';
}
