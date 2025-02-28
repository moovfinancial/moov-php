<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Errors;

use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Utils;
/** CreateAccountResponseBody - The request was well-formed, but the contents failed validation. Check the request for missing or invalid fields. */
class CreateAccountResponseBody
{
    /**
     *
     * @var Components\CreateAccountError $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\CreateAccountError')]
    public Components\CreateAccountError $error;

    /**
     * Raw HTTP response; suitable for custom response parsing
     *
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
    #[\Speakeasy\Serializer\Annotation\Exclude]

    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;

    /**
     * @param  Components\CreateAccountError  $error
     * @param  ?\Psr\Http\Message\ResponseInterface  $rawResponse
     * @phpstan-pure
     */
    public function __construct(Components\CreateAccountError $error, ?\Psr\Http\Message\ResponseInterface $rawResponse = null)
    {
        $this->error = $error;
        $this->rawResponse = $rawResponse;
    }

    public function toException(): CreateAccountResponseBodyThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new CreateAccountResponseBodyThrowable($message, (int) $code, $this);
    }
}