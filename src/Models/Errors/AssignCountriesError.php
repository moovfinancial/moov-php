<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI\Models\Errors;

use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Utils;

class AssignCountriesError
{
    /**
     *
     * @var Components\CountriesErrors $error
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('error')]
    #[\Speakeasy\Serializer\Annotation\Type('\Moov\OpenAPI\Models\Components\CountriesErrors')]
    public Components\CountriesErrors $error;

    /**
     * @param  Components\CountriesErrors  $error
     */
    public function __construct(Components\CountriesErrors $error)
    {
        $this->error = $error;
    }

    public function toException(): AssignCountriesErrorThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new AssignCountriesErrorThrowable($message, (int) $code, $this);
    }
}