<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


/**
 * The return code of an ACH transaction that caused the bank account status to change.
 *
 *
 * - R02: Account Closed
 * - R03: No Account/Unable to Locate Account
 * - R04: Invalid Account Number
 * - R05: Improper Debit to Consumer Account
 * - R07: Authorization Revoked by Customer
 * - R08: Payment Stopped
 * - R10: Customer Advises Originator is Not Known or Authorized to Receiver
 * - R11: Customer Advises Entry Not in Accordance with the Terms of the Authorization
 * - R12: Branch Sold to Another DFI
 * - R13: RDFI not qualified to participate
 * - R14: Representative payee deceased or unable to continue in that capacity
 * - R15: Beneficiary or bank account holder
 * - R16: Bank account frozen
 * - R17: Entry with Invalid Account Number Initiated Under Questionable Circumstances
 * - R20: Non-payment bank account
 * - R23: Credit entry refused by receiver
 * - R29: Corporate customer advises not authorized
 * - R34: Limited participation RDFI
 * - R38: Stop Payment on Source Document (Adjustment Entry)
 * - R39: Improper Source Document
 */
enum ACHReturnCode: string
{
    case R02 = 'R02';
    case R03 = 'R03';
    case R04 = 'R04';
    case R05 = 'R05';
    case R07 = 'R07';
    case R08 = 'R08';
    case R10 = 'R10';
    case R11 = 'R11';
    case R12 = 'R12';
    case R13 = 'R13';
    case R14 = 'R14';
    case R15 = 'R15';
    case R16 = 'R16';
    case R17 = 'R17';
    case R20 = 'R20';
    case R23 = 'R23';
    case R29 = 'R29';
    case R34 = 'R34';
    case R38 = 'R38';
    case R39 = 'R39';
}
