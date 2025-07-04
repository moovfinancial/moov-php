<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Errors;

class CreateTicketErrorThrowable extends \RuntimeException
{
    public CreateTicketError $container;

    public function __construct(string $message, int $statusCode, CreateTicketError $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}