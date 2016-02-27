# table

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Table is a highly extensible library for creating tables in PHP. 
Tables can either be rendered or exported to different formats using [the extensions](#related-packages) made for this library.

## Install

Via Composer

``` bash
$ composer require cleentfaar/table
```

## Usage

``` php
$table = new Table([['foo' => 'bar']]);

// or...

$table = new Table();
$row = new Row(['foo' => 'bar']);
$table->addRow($row);
```

## Available extensions

The following extensions are currently available for this library:

| Package | Description |
|-----------------------|
| [cleentfaar/table-renderer-ascii](https://packagist.org/packages/cleentfaar/table-renderer-ascii) | For rendering your tables in ASCII format. |
| [cleentfaar/table-exporter-csv](https://packagist.org/packages/cleentfaar/table-exporter-csv) | For exporting your tables to a CSV file. |

If you would like to create an extension check out the [contribution](#contributing) guide for guidelines.

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

[ico-version]: https://img.shields.io/packagist/v/cleentfaar/table.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/cleentfaar/table/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/cleentfaar/table.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/cleentfaar/table.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/cleentfaar/table.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/cleentfaar/table
[link-travis]: https://travis-ci.org/cleentfaar/table
[link-scrutinizer]: https://scrutinizer-ci.com/g/cleentfaar/table/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/cleentfaar/table
[link-downloads]: https://packagist.org/packages/cleentfaar/table
[link-author]: https://github.com/cleentfaar
[link-contributors]: ../../contributors
