<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Errors;

use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Utils;
class CreateTicketError
{
    /**
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     *
     * @var ?string $body
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('body')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $body = null;

    /**
     *
     * @var ?Components\CreateTicketContactError $contact
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contact')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CreateTicketContactError|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Components\CreateTicketContactError $contact = null;

    /**
     * @param  ?string  $title
     * @param  ?string  $body
     * @param  ?Components\CreateTicketContactError  $contact
     * @phpstan-pure
     */
    public function __construct(?string $title = null, ?string $body = null, ?Components\CreateTicketContactError $contact = null)
    {
        $this->title = $title;
        $this->body = $body;
        $this->contact = $contact;
    }

    public function toException(): CreateTicketErrorThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new CreateTicketErrorThrowable($message, (int) $code, $this);
    }
}