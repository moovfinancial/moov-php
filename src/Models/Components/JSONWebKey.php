<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp\Models\Components;


/** JSONWebKey - Describes an [RFC7517](https://datatracker.ietf.org/doc/html/rfc7517) web key. */
class JSONWebKey
{
    /**
     * The cryptographic algorithm family used with the key (e.g., 'RSA', 'EC', 'oct').
     *
     * @var string $kty
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('kty')]
    public string $kty;

    /**
     * The intended use of the key. 'sig' for signature, 'enc' for encryption.
     *
     * @var ?UseT $use
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('use')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\MoovPhp\Models\Components\UseT|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?UseT $use = null;

    /**
     * The permitted operations for the key, e.g., 'sign', 'verify', 'encrypt', 'decrypt'.
     *
     * @var ?array<string> $keyOps
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('key_ops')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $keyOps = null;

    /**
     * The algorithm intended for use with the key, e.g., 'RS256' or 'ES256'.
     *
     * @var ?string $alg
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('alg')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $alg = null;

    /**
     * A unique identifier for the key.
     *
     * @var ?string $kid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('kid')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $kid = null;

    /**
     * The curve for Elliptic Curve keys, e.g., 'P-256', 'P-384', or 'P-521'.
     *
     *
     * This field is required when `kty` is 'EC'.
     *
     * @var ?string $crv
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('crv')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $crv = null;

    /**
     * The x coordinate for Elliptic Curve keys.
     *
     *
     * This field is required when `kty` is 'EC'.
     *
     * @var ?string $x
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('x')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $x = null;

    /**
     * The y coordinate for Elliptic Curve keys.
     *
     *
     * This field is required when `kty` is 'EC'.
     *
     * @var ?string $y
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('y')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $y = null;

    /**
     * The modulus value for RSA keys.
     *
     *
     * This field is required when `kty` is 'RSA'.
     *
     * @var ?string $n
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('n')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $n = null;

    /**
     * The exponent value for RSA keys.
     *
     *
     * This field is required when `kty` is 'RSA'.
     *
     * @var ?string $e
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('e')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $e = null;

    /**
     * @param  string  $kty
     * @param  ?UseT  $use
     * @param  ?array<string>  $keyOps
     * @param  ?string  $alg
     * @param  ?string  $kid
     * @param  ?string  $crv
     * @param  ?string  $x
     * @param  ?string  $y
     * @param  ?string  $n
     * @param  ?string  $e
     * @phpstan-pure
     */
    public function __construct(string $kty, ?UseT $use = null, ?array $keyOps = null, ?string $alg = null, ?string $kid = null, ?string $crv = null, ?string $x = null, ?string $y = null, ?string $n = null, ?string $e = null)
    {
        $this->kty = $kty;
        $this->use = $use;
        $this->keyOps = $keyOps;
        $this->alg = $alg;
        $this->kid = $kid;
        $this->crv = $crv;
        $this->x = $x;
        $this->y = $y;
        $this->n = $n;
        $this->e = $e;
    }
}