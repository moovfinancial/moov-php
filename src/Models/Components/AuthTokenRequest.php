<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;

use Moov\MoovPhp\Utils\SpeakeasyMetadata;
class AuthTokenRequest
{
    /**
     * The type of grant being requested.
     *
     *
     *   - `client_credentials`: A grant type used by clients to obtain an access token
     *   - `refresh_token`: A grant type used by clients to obtain a new access token using a refresh token
     *
     * @var GrantType $grantType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('grant_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\GrantType')]
    #[SpeakeasyMetadata('form:name=grant_type')]
    public GrantType $grantType;

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
     * A space delimited list of scopes. Required when `grant_type` is `client_credentials`.
     *
     * @var ?string $scope
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('scope')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    #[SpeakeasyMetadata('form:name=scope')]
    public ?string $scope = null;

    /**
     * The refresh_token returned alongside the access token being refreshed. Required when `grant_type` is `refresh_token`.
     *
     * @var ?string $refreshToken
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refresh_token')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    #[SpeakeasyMetadata('form:name=refresh_token')]
    public ?string $refreshToken = null;

    /**
     * @param  GrantType  $grantType
     * @param  ?string  $clientId
     * @param  ?string  $clientSecret
     * @param  ?string  $scope
     * @param  ?string  $refreshToken
     * @phpstan-pure
     */
    public function __construct(GrantType $grantType, ?string $clientId = null, ?string $clientSecret = null, ?string $scope = null, ?string $refreshToken = null)
    {
        $this->grantType = $grantType;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->scope = $scope;
        $this->refreshToken = $refreshToken;
    }
}