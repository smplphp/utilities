<img src="smpl-logo.png" alt="SMPL" align="left">

# Utilities

A simple, modern PHP 8 utilities library, providing support and general useful features to support development.

![Packagist Version](https://img.shields.io/packagist/v/smplphp/utilities)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/smplphp/utilities)
![GitHub](https://img.shields.io/github/license/smplphp/utilities)
![Psalm Level](https://shepherd.dev/github/smplphp/utilities/level.svg)

Main:

[![codecov](https://codecov.io/gh/smplphp/utilities/branch/main/graph/badge.svg?token=FHJ41NQMTA)](https://codecov.io/gh/smplphp/utilities)
[![CircleCI](https://circleci.com/gh/smplphp/utilities/tree/main.svg?style=shield)](https://circleci.com/gh/smplphp/utilities/tree/main)
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fsmplphp%2Futilities%2Fmain)](https://dashboard.stryker-mutator.io/reports/github.com/smplphp/utilities/main)

Develop:

[![codecov](https://codecov.io/gh/smplphp/utilities/branch/develop/graph/badge.svg?token=FHJ41NQMTA)](https://codecov.io/gh/smplphp/utilities)
[![CircleCI](https://circleci.com/gh/smplphp/utilities/tree/develop.svg?style=shield)](https://circleci.com/gh/smplphp/utilities/tree/develop)
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fsmplphp%2Futilities%2Fdevelop)](https://dashboard.stryker-mutator.io/reports/github.com/smplphp/utilities/develop)

## Install

Install via composer.

```bash
composer require smplphp/utilities
```

## Usage

TBW

## Testing

The full test suite of PHPUnit, Infection, PHPStan and Psalm can be run using the following command.

```bash
make test
```

### PHPUnit

To run PHPUnit alone, you can run the following.

```bash
make phpunit
```

Or if you want code-coverage

```bash
make phpunit-coverage
```

### Infection

To run Infection alone, you can run the following.

```bash
make infection
```

Or if you want a report

```bash
make infection-report
```

### PHPStan

To run PHPStan alone, you can run the following.

```bash
make phpstan
```

### Psalm

To run Psalm alone, you can run the following.

```bash
make psalm
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](https://github.com/smplphp/utilities/blob/master/LICENSE.md) for more information.