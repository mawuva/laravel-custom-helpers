# Laravel Custom Helpers

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mawuekom/laravel-custom-helpers.svg?style=flat-square)](https://packagist.org/packages/mawuekom/laravel-custom-helpers)
[![Total Downloads](https://img.shields.io/packagist/dt/mawuekom/laravel-custom-helpers.svg?style=flat-square)](https://packagist.org/packages/mawuekom/laravel-custom-helpers)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require mawuekom/laravel-custom-helpers
```

## configuration

### Laravel <br/>

After register the service provider to the **`providers`** array in **`config/app.php`**

```php
'providers' =>
    ...
    Mawuekom\CustomHelpers\CustomHelpersServiceProvider::class
    ...
];
```
<br/>

Publish package config

```bash
php artisan vendor:publish --provider="Mawuekom\CustomHelpers\CustomHelpersServiceProvider"
```

## Usage

```php
// Coming soon
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Report bug
Contact me on Twitter [@ephraimseddor](https://twitter.com/ephraimseddor)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
