<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Errors;

class ScheduleValidationErrorThrowable extends \RuntimeException
{
    public ScheduleValidationError $container;

    public function __construct(string $message, int $statusCode, ScheduleValidationError $container)
    {
        parent::__construct($message, $statusCode);
        $this->container = $container;
    }
}