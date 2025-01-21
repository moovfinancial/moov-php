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
use Speakeasy\Serializer\DeserializationContext;

class Industries
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
     *   Returns a list of all industry titles and their corresponding MCC/SIC/NAICS codes. Results are ordered by title.    
     *   
     *   To use this endpoint from the browser, you'll need to specify the `/profile-enrichment.read` scope when generating a [token](https://docs.moov.io/api/authentication/access-tokens/).
     *
     * @param  Operations\ListIndustriesSecurity  $security
     * @param  ?Components\Versions  $xMoovVersion
     * @return Operations\ListIndustriesResponse
     * @throws \Moov\OpenAPI\Models\Errors\APIException
     */
    public function listIndustries(Operations\ListIndustriesSecurity $security, ?Components\Versions $xMoovVersion = null, ?Options $options = null): Operations\ListIndustriesResponse
    {
        $request = new Operations\ListIndustriesRequest(
            xMoovVersion: $xMoovVersion,
        );
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/industries');
        $urlOverride = null;
        $httpOptions = ['http_errors' => false];
        $httpOptions = array_merge_recursive($httpOptions, Utils\Utils::getHeaders($request));
        if (! array_key_exists('headers', $httpOptions)) {
            $httpOptions['headers'] = [];
        }
        $httpOptions['headers']['Accept'] = 'application/json';
        $httpOptions['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        $httpRequest = new \GuzzleHttp\Psr7\Request('GET', $url);
        if ($security != null) {
            $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->client, $security);
        } else {
            $client = $this->sdkConfiguration->client;
        }

        $hookContext = new HookContext('listIndustries', null, fn () => $security);
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
        if ($statusCode == 401 || $statusCode == 403 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500 || $statusCode == 500 || $statusCode == 504 || $statusCode >= 500 && $statusCode < 600) {
            $res = $this->sdkConfiguration->hooks->afterError(new Hooks\AfterErrorContext($hookContext), $httpResponse, null);
            $httpResponse = $res;
        }
        if ($statusCode == 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $httpResponse = $this->sdkConfiguration->hooks->afterSuccess(new Hooks\AfterSuccessContext($hookContext), $httpResponse);

                $serializer = Utils\JSON::createSerializer();
                $responseData = (string) $httpResponse->getBody();
                $obj = $serializer->deserialize($responseData, 'array<\Moov\OpenAPI\Models\Components\EnrichedIndustry>', 'json', DeserializationContext::create()->setRequireAllRequiredProperties(true));
                $response = new Operations\ListIndustriesResponse(
                    statusCode: $statusCode,
                    contentType: $contentType,
                    rawResponse: $httpResponse,
                    enrichedIndustries: $obj);

                return $response;
            } else {
                throw new \Moov\OpenAPI\Models\Errors\APIException('Unknown content type received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
            }
        } elseif ($statusCode == 401 || $statusCode == 403 || $statusCode == 429 || $statusCode >= 400 && $statusCode < 500) {
            throw new \Moov\OpenAPI\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } elseif ($statusCode == 500 || $statusCode == 504 || $statusCode >= 500 && $statusCode < 600) {
            throw new \Moov\OpenAPI\Models\Errors\APIException('API error occurred', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        } else {
            throw new \Moov\OpenAPI\Models\Errors\APIException('Unknown status code received', $statusCode, $httpResponse->getBody()->getContents(), $httpResponse);
        }
    }

}