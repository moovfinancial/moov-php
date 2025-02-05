<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;

use Moov\OpenAPI\Utils\SpeakeasyMetadata;
class RevokeTokenRequest
{
    /**
     * The access or refresh token to revoke.
     *
     * @var string $token
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token')]
    #[SpeakeasyMetadata('form:name=token')]
    public string $token;

    /**
     * The type of token being revoked.
     *
     * @var ?TokenTypeHint $tokenTypeHint
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('token_type_hint')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\TokenTypeHint|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    #[SpeakeasyMetadata('form:name=token_type_hint')]
    public ?TokenTypeHint $tokenTypeHint = null;

    /**
     * Client ID can be provided here in the body, or as the Username in HTTP Basic Auth.
     *
     * @var ?string $clientId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('client_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    #[SpeakeasyMetadata('form:name=client_id')]
    public ?string $clientId = null;

    /**
     * Client secret can be provided here in the body, or as the Password in HTTP Basic Auth.
     *
     * @var ?string $clientSecret
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('client_secret')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    #[SpeakeasyMetadata('form:name=client_secret')]
    public ?string $clientSecret = null;

    /**
     * @param  string  $token
     * @param  ?TokenTypeHint  $tokenTypeHint
     * @param  ?string  $clientId
     * @param  ?string  $clientSecret
     * @phpstan-pure
     */
    public function __construct(string $token, ?TokenTypeHint $tokenTypeHint = null, ?string $clientId = null, ?string $clientSecret = null)
    {
        $this->token = $token;
        $this->tokenTypeHint = $tokenTypeHint;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }
}