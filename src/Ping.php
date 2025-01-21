<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Moov\OpenAPI;

use Moov\OpenAPI\Hooks\HookContext;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;
use Moov\OpenAPI\Utils\Options;

class Ping
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
     * A simple endpoint to check auth.
     *
     * To access this endpoint using a [token](https://docs.moov.io/api/authentication/access-tokens/) you'll need 
     * to specify the `/ping.read` scope.
     *
     * @param  Operations\PingSecurity  $security
     * @param  ?Components\Versions  $xMoovVersion
     * @return Operations\PingResponse
     * @throws \Moov\OpenAPI\Models\Errors\APIException
     */
    public function ping(Operations\PingSecurity $security, ?Components\Versions $xMoovVersion = null, ?Options $options = null): Operations\PingResponse
    {
        $request = new Operations\PingRequest(
            xMoovVersion: $xMoovVersion,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/ping');
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];
        $httpOptions = array_merge_recursive($httpOptions, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $httpOptions)) {
            $httpOptions['headers'] = [];
        }
        $httpOptions['headers']['Accept'] = '*/*';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        if ($security != null) {
            $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->client, $security);
        } else {
            $client = $this->sdkConfiguration->client;
        }

        $hookContext = new HookContext('ping', null, fn () => $security);
        $httpRequest = $this->sdkConfiguration->hooks->beforeRequest(new Hooks\BeforeRequestContext($hookContext), $httpRequest);
        $httpOptions = Utils\Utils::convertHeadersToOptions($httpRequest, $httpOptions);
        $httpRequest = Utils\Utils::removeHeaders($httpRequest);
        try {
            $httpResponse = $client->send($httpRequest, $httpOptions);
        } catch (\GuzzleHttp\Exception\GuzzleException $error) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), null, $error);
            $httpResponse = $res;
        }
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();
        if ($statusCode == 401 || $statusCode == 403 || $statusCode == 404 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500 || $statusCode == 500 || $statusCode >= 500 && $statusCode < 600) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if ($statusCode == 200) {
            $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

            return new Operations\PingResponse(
                statusCode: $statusCode,
                contentType: $contentType,
                rawResponse: $httpResponse
            );
        } elseif ($statusCode == 401 || $statusCode == 403 || $statusCode == 404 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500) {
            throw new \Moov\OpenAPI\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif ($statusCode == 500 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Moov\OpenAPI\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Moov\OpenAPI\Models\Errors\APIException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

}