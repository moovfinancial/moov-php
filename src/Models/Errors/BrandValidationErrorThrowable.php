<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Errors;

class BrandValidationErrorThrowable extends \RuntimeException
{
    public BrandValidationError $container;

    public function __construct(string $message, int $statusCode, BrandValidationError $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}