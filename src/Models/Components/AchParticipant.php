<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Components;


class AchParticipant
{
    /**
     *
     * @var AchLocation $achLocation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('achLocation')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\AchLocation')]
    public AchLocation $achLocation;

    /**
     *
     * @var string $customerName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customerName')]
    public string $customerName;

    /**
     *
     * @var string $newRoutingNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('newRoutingNumber')]
    public string $newRoutingNumber;

    /**
     *
     * @var string $officeCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('officeCode')]
    public string $officeCode;

    /**
     *
     * @var string $phoneNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phoneNumber')]
    public string $phoneNumber;

    /**
     *
     * @var string $recordTypeCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('recordTypeCode')]
    public string $recordTypeCode;

    /**
     *
     * @var string $revised
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('revised')]
    public string $revised;

    /**
     *
     * @var string $routingNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('routingNumber')]
    public string $routingNumber;

    /**
     *
     * @var string $servicingFRBNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('servicingFRBNumber')]
    public string $servicingFRBNumber;

    /**
     *
     * @var string $statusCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('statusCode')]
    public string $statusCode;

    /**
     *
     * @var string $viewCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('viewCode')]
    public string $viewCode;

    /**
     *
     * @var string $cleanName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cleanName')]
    public string $cleanName;

    /**
     *
     * @var ?Logo $logo
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('logo')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\Logo|null')]
    public ?Logo $logo;

    /**
     * @param  AchLocation  $achLocation
     * @param  string  $customerName
     * @param  string  $newRoutingNumber
     * @param  string  $officeCode
     * @param  string  $phoneNumber
     * @param  string  $recordTypeCode
     * @param  string  $revised
     * @param  string  $routingNumber
     * @param  string  $servicingFRBNumber
     * @param  string  $statusCode
     * @param  string  $viewCode
     * @param  string  $cleanName
     * @param  ?Logo  $logo
     * @phpstan-pure
     */
    public function __construct(AchLocation $achLocation, string $customerName, string $newRoutingNumber, string $officeCode, string $phoneNumber, string $recordTypeCode, string $revised, string $routingNumber, string $servicingFRBNumber, string $statusCode, string $viewCode, string $cleanName, ?Logo $logo = null)
    {
        $this->achLocation = $achLocation;
        $this->customerName = $customerName;
        $this->newRoutingNumber = $newRoutingNumber;
        $this->officeCode = $officeCode;
        $this->phoneNumber = $phoneNumber;
        $this->recordTypeCode = $recordTypeCode;
        $this->revised = $revised;
        $this->routingNumber = $routingNumber;
        $this->servicingFRBNumber = $servicingFRBNumber;
        $this->statusCode = $statusCode;
        $this->viewCode = $viewCode;
        $this->cleanName = $cleanName;
        $this->logo = $logo;
    }
}