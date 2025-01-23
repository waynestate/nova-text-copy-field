# Nova Text Copy Field

[![Latest Stable Version](http://poser.pugx.org/waynestate/nova-text-copy-field/v)](https://packagist.org/packages/waynestate/nova-text-copy-field) [![Total Downloads](http://poser.pugx.org/waynestate/nova-text-copy-field/downloads)](https://packagist.org/packages/waynestate/nova-text-copy-field) [![License](http://poser.pugx.org/waynestate/nova-text-copy-field/license)](https://packagist.org/packages/waynestate/nova-text-copy-field) [![PHP Version Require](http://poser.pugx.org/waynestate/nova-text-copy-field/require/php)](https://packagist.org/packages/waynestate/nova-text-copy-field)

A Laravel Nova v5 text field with click to copy support. This field behaves just like a text field but adds the ability to copy the field value to your clipboard with just a click.

This package can also be found on [Nova Packages](https://novapackages.com/packages/waynestate/nova-text-copy-field).

![animated screenshot](.docs/animated.gif)

## Installation

[Nova v4 compatibility instructions](https://github.com/waynestate/nova-text-copy-field#nova-v4-compatibility)

```bash
> composer require waynestate/nova-text-copy-field
```

## Usage
Add the field to a resource.

```php
use Waynestate\Nova\TextCopy\TextCopy;

public function fields(Request $request)
{
    return [
        TextCopy::make('Example Copy Field', 'example_copy_field'),
    ];
}
```

### Truncating long strings
In some cases you may want to truncate the display of a fields value but allow still copy the full value. You can use the `truncate()` method to accomplish this.

```php
TextCopy::make('Some Long Field')
    ->truncate(100)
```

### Masking the field value
This works great for secrets like API Keys.

```php
TextCopy::make('Some Secret String', 'some_secret_string')
    ->mask('❌') // default '*'
    ->truncate(5)
```

### Copy button title
The title of the copy button defaults to the field name prefixed with 'Copy'. For example, `TextCopy::make('Some Field', 'some_field')` the button title will be "Copy Some Field".

If you would like to manually set the title you can use the `copyButtonTitle()` method.

```php
TextCopy::make('Some Field', 'some_field')
    ->copyButtonTitle('Some alternative title')
```

### Alternative copy value
You can choose to mutate and that is copied to the users clipboard. You can either pass a value or a Closure.

```php
TextCopy::make('Some Secret String', 'some_long_string')
    ->copyValue(function ($value) {
        return substr($value, -6);
    })
```

or 

```php
TextCopy::make('Some Secret String', 'some_long_string')
    ->copyValue('some fixed copy value')
```

### Only displaying the button on hover
```php
TextCopy::make('Some Secret String', 'some_long_string')
    ->showButtonOnlyOnHover()
```

## Screenshots
### Default State
![default](.docs/default.png)
![default](.docs/index.png)

### Success State
When the field value has been successfully copied to the user's clipboard.
![success](.docs/success.png)

### Error State
When there is an error adding the field value to the user's clipboard.
![error](.docs/error.png)

### Truncated Display Value
![truncated display](.docs/truncated-screenshot.png)

### Masked Display Value
![masked display](.docs/masked-screenshot.png)

## Nova v4 compatibility
If you require the use of `nova-text-copy-field` using Nova v4 you can install using version [v2.0.5](https://github.com/waynestate/nova-text-copy-field/releases/tag/v2.0.5)

```bash
composer require waynestate/nova-text-copy-field:"^2.0.5"
```

## Changelog
Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security
If you discover any security related issues, please email web@wayne.edu instead of using the issue tracker.

## Credits
- [Wayne State University](https://github/waynestate)
- [TJ Miller](https://github.com/sixlive)
- [All Contributors](../../contributors)

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
