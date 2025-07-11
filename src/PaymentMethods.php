<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\MoovPhp;

use Moov\MoovPhp\Hooks\HookContext;
use Moov\MoovPhp\Models\Components;
use Moov\MoovPhp\Models\Operations;
use Moov\MoovPhp\Utils\Options;
use Speakeasy\Serializer\DeserializationContext;

class PaymentMethods
{
    private SDKConfiguration $sdkConfiguration;
    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(public SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }
    /**
     * @param  string  $baseUrl
     * @param  array<string, string>  $urlVariables
     *
     * @return string
     */
    public function getUrl(string $baseUrl, array $urlVariables): string
    {
        $serverDetails = $this->sdkConfiguration->getServerDetails();

        if ($baseUrl == null) {
            $baseUrl = $serverDetails->baseUrl;
        }

        if ($urlVariables == null) {
            $urlVariables = $serverDetails->options;
        }

        return Utils\Utils::templateUrl($baseUrl, $urlVariables);
    }

    /**
     * Get the specified payment method associated with a Moov account. Read our [payment methods guide](https://docs.moov.io/guides/money-movement/payment-methods/) to learn more.
     *
     * To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
     * you'll need to specify the `/accounts/{accountID}/payment-methods.read` scope.
     *
     * @param  string  $accountID
     * @param  string  $paymentMethodID
     * @param  ?string  $xMoovVersion
     * @return Operations\GetPaymentMethodResponse
     * @throws \Moov\MoovPhp\Models\Errors\APIException
     */
    public function get(string $accountID, string $paymentMethodID, ?string $xMoovVersion = null, ?Options $options = null): Operations\GetPaymentMethodResponse
    {
        $request = new Operations\GetPaymentMethodRequest(
            accountID: $accountID,
            paymentMethodID: $paymentMethodID,
            xMoovVersion: $xMoovVersion,
        );
        $baseUrl = $this->sdkConfiguration->getTemplatedServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounts/{accountID}/payment-methods/{paymentMethodID}', Operations\GetPaymentMethodRequest::class, $request, $this->sdkConfiguration->globals);
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];
        $httpOptions = array_merge_recursive($httpOptions, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $httpOptions)) {
            $httpOptions['headers'] = [];
        }
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $hookContext = new HookContext($this->sdkConfiguration, $baseUrl, 'getPaymentMethod', [], $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $httpOptions);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['401', '403', '404', '429', '4XX', '500', '504', '5XX'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['200'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, '\Moov\MoovPhp\Models\Components\MoovWalletPaymentMethod|\Moov\MoovPhp\Models\Components\AchDebitFundPaymentMethod|\Moov\MoovPhp\Models\Components\AchDebitCollectPaymentMethod|\Moov\MoovPhp\Models\Components\AchCreditStandardPaymentMethod|\Moov\MoovPhp\Models\Components\AchCreditSameDayPaymentMethod|\Moov\MoovPhp\Models\Components\RtpCreditPaymentMethod|\Moov\MoovPhp\Models\Components\CardPaymentPaymentMethod|\Moov\MoovPhp\Models\Components\PushToCardPaymentMethod|\Moov\MoovPhp\Models\Components\PullFromCardPaymentMethod|\Moov\MoovPhp\Models\Components\ApplePayPaymentMethod|\Moov\MoovPhp\Models\Components\CardPresentPaymentPaymentMethod', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\GetPaymentMethodResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    paymentMethod: $obj);

                return $response;
            } else {
                throw new \Moov\MoovPhp\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['401', '403', '404', '429'])) {
            throw new \Moov\MoovPhp\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['500', '504'])) {
            throw new \Moov\MoovPhp\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['4XX'])) {
            throw new \Moov\MoovPhp\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['5XX'])) {
            throw new \Moov\MoovPhp\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Moov\MoovPhp\Models\Errors\APIException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

    /**
     * Retrieve a list of payment methods associated with a Moov account. Read our [payment methods 
     * guide](https://docs.moov.io/guides/money-movement/payment-methods/) to learn more.
     *
     * To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
     * you'll need to specify the `/accounts/{accountID}/payment-methods.read` scope.
     *
     * @param  string  $accountID
     * @param  ?string  $xMoovVersion
     * @param  ?string  $sourceID
     * @param  ?Components\PaymentMethodType  $paymentMethodType
     * @return Operations\ListPaymentMethodsResponse
     * @throws \Moov\MoovPhp\Models\Errors\APIException
     */
    public function list(string $accountID, ?string $xMoovVersion = null, ?string $sourceID = null, ?Components\PaymentMethodType $paymentMethodType = null, ?Options $options = null): Operations\ListPaymentMethodsResponse
    {
        $request = new Operations\ListPaymentMethodsRequest(
            accountID: $accountID,
            xMoovVersion: $xMoovVersion,
            sourceID: $sourceID,
            paymentMethodType: $paymentMethodType,
        );
        $baseUrl = $this->sdkConfiguration->getTemplatedServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/accounts/{accountID}/payment-methods', Operations\ListPaymentMethodsRequest::class, $request, $this->sdkConfiguration->globals);
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];

        $qp = Utils\Utils::getQueryParams(Operations\ListPaymentMethodsRequest::class, $request, $urlOverride, $this->sdkConfiguration->globals);
        $httpOptions = array_merge_recursive($httpOptions, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (! array_key_exists('headers', $httpOptions)) {
            $httpOptions['headers'] = [];
        }
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        $hookContext = new HookContext($this->sdkConfiguration, $baseUrl, 'listPaymentMethods', [], $this->sdkConfiguration->securitySource);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions['query'] = Utils\QueryParameters::standardizeQueryParams($httpRequest, $qp);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $this->sdkConfiguration->client->send($httpRequest, $httpOptions);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if (Utils\Utils::matchStatusCodes($statusCode, ['401', '403', '429', '4XX', '500', '504', '5XX'])) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if (Utils\Utils::matchStatusCodes($statusCode, ['200'])) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, 'array<\Moov\MoovPhp\Models\Components\MoovWalletPaymentMethod|\Moov\MoovPhp\Models\Components\AchDebitFundPaymentMethod|\Moov\MoovPhp\Models\Components\AchDebitCollectPaymentMethod|\Moov\MoovPhp\Models\Components\AchCreditStandardPaymentMethod|\Moov\MoovPhp\Models\Components\AchCreditSameDayPaymentMethod|\Moov\MoovPhp\Models\Components\RtpCreditPaymentMethod|\Moov\MoovPhp\Models\Components\CardPaymentPaymentMethod|\Moov\MoovPhp\Models\Components\PushToCardPaymentMethod|\Moov\MoovPhp\Models\Components\PullFromCardPaymentMethod|\Moov\MoovPhp\Models\Components\ApplePayPaymentMethod|\Moov\MoovPhp\Models\Components\CardPresentPaymentPaymentMethod>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\ListPaymentMethodsResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    headers: $httpResponse->getHeaders(),
                    paymentMethods: $obj);

                return $response;
            } else {
                throw new \Moov\MoovPhp\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['401', '403', '429'])) {
            throw new \Moov\MoovPhp\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['500', '504'])) {
            throw new \Moov\MoovPhp\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['4XX'])) {
            throw new \Moov\MoovPhp\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif (Utils\Utils::matchStatusCodes($statusCode, ['5XX'])) {
            throw new \Moov\MoovPhp\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Moov\MoovPhp\Models\Errors\APIException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

}