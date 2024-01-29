# This is my package settings

[![Latest Version on Packagist](https://img.shields.io/packagist/v/inu-modules/settings.svg?style=flat-square)](https://packagist.org/packages/inu-modules/settings)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/inu-modules/settings/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/inu-modules/settings/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/inu-modules/settings/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/inu-modules/settings/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/inu-modules/settings.svg?style=flat-square)](https://packagist.org/packages/inu-modules/settings)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require inu-modules/settings
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="settings-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="settings-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="settings-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$settings = new Inumodules\Settings();
echo $settings->echoPhrase('Hello, Inumodules!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Zorca Orcinus](https://github.com/inu-modules)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
