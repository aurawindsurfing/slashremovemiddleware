# SlashRemoveMiddleware

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]

It is important to remove trailing slashed from applications made with laravel and it is bad for SEO as Google will index your page twice, once with slash and once without it. The correct behaviour is to create 301 for ever page with trailing slash to avoid content duplication in search results.

Here is the source: https://developers.google.com/search/blog/2010/04/to-slash-or-not-to-slash

## Before you start

An easy way to check if your app is behaving properly is to create a test route in ``routes/web.php`` like this:

```
Route::get('/foobar', function () {
    return 'simple test';
});
```

Then visit this endpoint with trailing slash ``yourapp.test/foobar/``

If "simple test" was displayed and trailing slash did not dissapear from your url in the browser window then Google will not be happy about it and you need to fix it.

## Installation

Via Composer

``` bash
$ composer require aurawindsurfing/slashremovemiddleware
```

## Usage

This package will auto register itself in Laravel 6 and higher.

Now repeat the same test.

You should be redirected to the same url but without trailing slash ``yourapp.test/foobar`` and see the same text.

Now Google will only index every page once.

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Tomasz Lotocki][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/aurawindsurfing/slashremovemiddleware.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/aurawindsurfing/slashremovemiddleware.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/aurawindsurfing/slashremovemiddleware/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/aurawindsurfing/slashremovemiddleware
[link-downloads]: https://packagist.org/packages/aurawindsurfing/slashremovemiddleware
[link-travis]: https://travis-ci.org/aurawindsurfing/slashremovemiddleware
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/aurawindsurfing
[link-contributors]: ../../contributors
