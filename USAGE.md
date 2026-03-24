<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Moov\MoovPhp;
use Moov\MoovPhp\Models\Components;

$sdk = MoovPhp\Moov::builder()
    ->setSecurity(
        new Components\Security(
            username: '',
            password: '',
        )
    )
    ->build();

$request = new Components\CreateAccount(
    accountType: Components\AccountType::Business,
    profile: new Components\CreateProfile(
        business: new Components\CreateBusinessProfile(
            legalBusinessName: 'Whole Body Fitness LLC',
        ),
    ),
);

$response = $sdk->accounts->create(
    request: $request
);

if ($response->account !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->