<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Errors;

class UpdateIssuedCardErrorThrowable extends \RuntimeException
{
    public UpdateIssuedCardError $container;

    public function __construct(string $message, int $statusCode, UpdateIssuedCardError $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}