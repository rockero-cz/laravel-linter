# Laravel TLINT wrapper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rockero-cz/ci.svg?style=flat-square)](https://packagist.org/packages/rockero-cz/ci)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/rockero-cz/ci/run-tests?label=tests)](https://github.com/rockero-cz/ci/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/rockero-cz/ci/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/rockero-cz/ci/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rockero-cz/ci.svg?style=flat-square)](https://packagist.org/packages/spatie/ci)

## Installation

You can install the package via composer:

```bash
composer require rockero-cz/laravel-linter
```

You can publish config files with:

```bash
php artisan vendor:publish --tag="linter-config"
```

## List of commands

- `php artisan lint`

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
