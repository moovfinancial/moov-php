<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Errors;

class PatchSweepConfigErrorThrowable extends \RuntimeException
{
    public PatchSweepConfigError $container;

    public function __construct(string $message, int $statusCode, PatchSweepConfigError $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}