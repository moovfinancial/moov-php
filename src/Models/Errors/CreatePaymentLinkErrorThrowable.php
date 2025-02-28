<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Errors;

class CreatePaymentLinkErrorThrowable extends \RuntimeException
{
    public CreatePaymentLinkError $container;

    public function __construct(string $message, int $statusCode, CreatePaymentLinkError $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}