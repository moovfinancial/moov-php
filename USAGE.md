<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;
use Moov\OpenAPI\Models\Operations;

$sdk = OpenAPI\Moov::builder()->build();

$accountCountries = new Components\AccountCountries(
    countries: [
        'United States',
    ],
);
$requestSecurity = new Operations\AssignAccountCountriesSecurity(
    basicAuth: new Components\SchemeBasicAuth(
        username: '',
        password: '',
    ),
);

$response = $sdk->accounts->assignAccountCountries(
    security: $requestSecurity,
    accountID: '9ba3f09c-c93c-4ca1-b68f-1dbb0841a40a',
    accountCountries: $accountCountries,
    xMoovVersion: Components\Versions::Latest

);

if ($response->accountCountries !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->