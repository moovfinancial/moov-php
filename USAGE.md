<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\OpenAPI;
use Moov\OpenAPI\Models\Components;

$sdk = OpenAPI\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$accountCountries = new Components\AccountCountries(
    countries: [
        'United States',
    ],
);

$response = $sdk->accounts->assignCountries(
    accountID: 'aa2dc19b-77dd-481f-a0a8-c76f2cfc1372',
    accountCountries: $accountCountries,
    xMoovVersion: 'v2024.01'

);

if ($response->accountCountries !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->