# Clears more than just default Cache driver

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tobya/clearallcache.svg?style=flat-square)](https://packagist.org/packages/tobya/clearallcache)
[![Total Downloads](https://img.shields.io/packagist/dt/tobya/clearallcache.svg?style=flat-square)](https://packagist.org/packages/tobya/clearallcache)

Most applications use a single cache, we can decide between `database`, `file`, `redis` and many more,
however, some applications require multiple caches to function correctly.  If you simply run `cache:clear` you 
will clear the default cache but not any others which can cause confusion in development and problems in production.

`cache:clearall` will clear all your caches stores that you are using.

## Installation

You can install the package via composer:

```bash
composer require tobya/clearallcache
```


## Usage

add additional caches that are in use and should be cleared to `/config/cache.php`

```php

    'stores_in_use' => ['file','database'],
```

Then call command
```bash
php artisan cache:clearall
```

This will first call `cache:clear` clearing the default cache and then clear any cache stores listed in the `stores_in_use` 
key in your cache.php config file.


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Credits

- [Toby Allen](https://github.com/tobya)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
