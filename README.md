# table-renderer-ascii

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Extension of the table library that can render your tables in ASCII format.

## Install

Via Composer

``` bash
$ composer require cleentfaar/table-renderer-ascii
```

## Usage

``` php
$table = new Table([['foo' => 'bar']]);

// ... add more rows

$renderer = new AsciiRenderer();
$renderer->render($table);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email info@casleentfaar.com instead of using the issue tracker.

## Credits

- [Cas Leentfaar][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/cleentfaar/table-renderer-ascii.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/cleentfaar/table-renderer-ascii/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/cleentfaar/table-renderer-ascii.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/cleentfaar/table-renderer-ascii.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/cleentfaar/table-renderer-ascii.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/cleentfaar/table-renderer-ascii
[link-travis]: https://travis-ci.org/cleentfaar/table-renderer-ascii
[link-scrutinizer]: https://scrutinizer-ci.com/g/cleentfaar/table-renderer-ascii/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/cleentfaar/table-renderer-ascii
[link-downloads]: https://packagist.org/packages/cleentfaar/table-renderer-ascii
[link-author]: https://github.com/cleentfaar
[link-contributors]: ../../contributors
