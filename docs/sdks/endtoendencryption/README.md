# EndToEndEncryption
(*endToEndEncryption*)

## Overview

### Available Operations

* [testToken](#testtoken) - Allows for testing a JWE token to ensure it's acceptable by Moov. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/ping.read` scope.
* [generateKey](#generatekey) - Generates a public key used to create a JWE token for passing secure authentication data through non-PCI compliant intermediaries.

## testToken

Allows for testing a JWE token to ensure it's acceptable by Moov. 

To access this endpoint using an [access token](https://docs.moov.io/api/authentication/access-tokens/) 
you'll need to specify the `/ping.read` scope.

### Example Usage

<!-- UsageSnippet language="php" operationID="testEndToEndToken" method="post" path="/debug/end-to-end-token" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;

$sdk = MoovPhp\Moov::builder()
    ->setXMoovVersion('v2024.01.00')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$e2EEToken = new Components\E2EEToken(
    token: 'eyJhbGciOiJFQ0RILUVTK0EyNTZLVyIsImVuYyI6IkEyNTZHQ00iLCJlcGsiOnsia3R5IjoiRUMiLCJjcnYiOiJQLTUyMSIsIngiOiJBS0NYVDM1WVdvTm8wbzExNy1SU0dqUGg3alN1NjFmLUhnYkx1dW0xVG1ueTRlcW5yX2hyU0hpY0w1d3gwODRCWDBRZjVTdEtkRUoydzY2ZUJqWHprRV9OIiwieSI6IkFIMEJfT2RaYTQtbG43dGJ4M3VBdlc1NDNQRE9HUXBCTDloRFFNWjlTQXNfOW05UWN3dnhRd1hrb1VrM3VzT1FnVV9ySVFrNFRoZ1NTUzV4UlhKcm5ZaTkifSwia2lkIjoiYmRvV3pLekpKUGw0TVFIaENDa05WYTZlZ1dmYi02V1haSjZKTFZqQ0hWMD0ifQ.HalyoHsfufBJEODd2lD9ThQvvVWw3b2kgWDLHGxmHhMv8rODyLL_Ug.rpQP178t8Ed_pUU2.Sn9UFeVoegAxiMUv11q7l3M0y9YHSLYi2n_JB7n7Pc777_47-icfaxstJemT0IC81w.akkq1EBxzWkBr4vEomSpWA',
);

$response = $sdk->endToEndEncryption->testToken(
    e2EEToken: $e2EEToken
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             | Example                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `e2EEToken`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             | [Components\E2EEToken](../../Models/Components/E2EEToken.md)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            | :heavy_check_mark:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      | N/A                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | {<br/>"token": "eyJhbGciOiJFQ0RILUVTK0EyNTZLVyIsImVuYyI6IkEyNTZHQ00iLCJlcGsiOnsia3R5IjoiRUMiLCJjcnYiOiJQLTUyMSIsIngiOiJBS0NYVDM1WVdvTm8wbzExNy1SU0dqUGg3alN1NjFmLUhnYkx1dW0xVG1ueTRlcW5yX2hyU0hpY0w1d3gwODRCWDBRZjVTdEtkRUoydzY2ZUJqWHprRV9OIiwieSI6IkFIMEJfT2RaYTQtbG43dGJ4M3VBdlc1NDNQRE9HUXBCTDloRFFNWjlTQXNfOW05UWN3dnhRd1hrb1VrM3VzT1FnVV9ySVFrNFRoZ1NTUzV4UlhKcm5ZaTkifSwia2lkIjoiYmRvV3pLekpKUGw0TVFIaENDa05WYTZlZ1dmYi02V1haSjZKTFZqQ0hWMD0ifQ.HalyoHsfufBJEODd2lD9ThQvvVWw3b2kgWDLHGxmHhMv8rODyLL_Ug.rpQP178t8Ed_pUU2.Sn9UFeVoegAxiMUv11q7l3M0y9YHSLYi2n_JB7n7Pc777_47-icfaxstJemT0IC81w.akkq1EBxzWkBr4vEomSpWA"<br/>} |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release.<br/>When no version is specified, the API defaults to `v2024.01.00`. |                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |

### Response

**[?Operations\TestEndToEndTokenResponse](../../Models/Operations/TestEndToEndTokenResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\GenericError | 400                 | application/json    |
| Errors\APIException | 4XX, 5XX            | \*/\*               |

## generateKey

Generates a public key used to create a JWE token for passing secure authentication data through non-PCI compliant intermediaries.

### Example Usage

<!-- UsageSnippet language="php" operationID="generateEndToEndKey" method="post" path="/end-to-end-keys" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;

$sdk = MoovPhp\Moov::builder()
    ->setXMoovVersion('v2024.01.00')
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();



$response = $sdk->endToEndEncryption->generateKey(

);

if ($response->jsonWebKey !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `xMoovVersion`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 | Specify an API version.<br/><br/>API versioning follows the format `vYYYY.QQ.BB`, where <br/>  - `YYYY` is the year<br/>  - `QQ` is the two-digit month for the first month of the quarter (e.g., 01, 04, 07, 10)<br/>  - `BB` is the build number, starting at `.01`, for subsequent builds in the same quarter. <br/>    - For example, `v2024.01.00` is the initial release of the first quarter of 2024.<br/><br/>The `latest` version represents the most recent development state. It may include breaking changes and should be treated as a beta release.<br/>When no version is specified, the API defaults to `v2024.01.00`. |

### Response

**[?Operations\GenerateEndToEndKeyResponse](../../Models/Operations/GenerateEndToEndKeyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\APIException | 4XX, 5XX            | \*/\*               |