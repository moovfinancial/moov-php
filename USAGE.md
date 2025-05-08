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

$createAccount = new Components\CreateAccount(
    accountType: Components\CreateAccountType::Business,
    profile: new Components\CreateProfile(
        business: new Components\CreateBusinessProfile(
            legalBusinessName: 'Whole Body Fitness LLC',
        ),
    ),
);

$response = $sdk->accounts->create(
    createAccount: $createAccount,
    xMoovVersion: 'v2024.01.00'

);

if ($response->account !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->