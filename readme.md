# Laravel Bootstrap

An opinionated collection of reusable blade partials based on Bootstrap 4 components.

## Installation
Require the package using composer.
```bash
composer require code413/laravel-bootstrap
```

## Usage
### Fields
```blade
@include('bs::fields.text', ['name' => 'username'])
```

### Buttons
```blade
@include('bs::btn', ['text' => 'Submit'])
```

## Configuration
To access and modify all the partials available in this package, run:
```bash
php artisan vendor:publish --provider="Code413\LaravelBootstrap\LaravelBootstrapServiceProvider" --tag="views"
```
This will create a new vendor/bs directory where you can fully customize the survey views to your liking.

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
