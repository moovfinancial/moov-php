<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class Document
{
    /**
     *
     * @var string $documentID
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('documentID')]
    public string $documentID;

    /**
     * Types of documents that can be uploaded.
     *
     * @var DocumentType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\DocumentType')]
    public DocumentType $type;

    /**
     * The document's MIME type.
     *
     * @var string $contentType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contentType')]
    public string $contentType;

    /**
     *
     * @var \DateTime $uploadedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('uploadedAt')]
    public \DateTime $uploadedAt;

    /**
     * Optional array of errors encountered during automated parsing.
     *
     * @var ?array<string> $parseErrors
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parseErrors')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $parseErrors = null;

    /**
     * @param  string  $documentID
     * @param  DocumentType  $type
     * @param  string  $contentType
     * @param  \DateTime  $uploadedAt
     * @param  ?array<string>  $parseErrors
     * @phpstan-pure
     */
    public function __construct(string $documentID, DocumentType $type, string $contentType, \DateTime $uploadedAt, ?array $parseErrors = null)
    {
        $this->documentID = $documentID;
        $this->type = $type;
        $this->contentType = $contentType;
        $this->uploadedAt = $uploadedAt;
        $this->parseErrors = $parseErrors;
    }
}