<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Errors;

use Moov\OpenAPI\Utils;
class FileUploadValidationError
{
    /**
     *
     * @var ?string $evidenceType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('evidenceType')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $evidenceType = null;

    /**
     *
     * @var ?File $file
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('file')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Errors\File|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?File $file = null;

    /**
     * @param  ?string  $evidenceType
     * @param  ?File  $file
     * @phpstan-pure
     */
    public function __construct(?string $evidenceType = null, ?File $file = null)
    {
        $this->evidenceType = $evidenceType;
        $this->file = $file;
    }

    public function toException(): FileUploadValidationErrorThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new FileUploadValidationErrorThrowable($message, (int) $code, $this);
    }
}