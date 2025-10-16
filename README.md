# Filament Scaffold

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cuongpham2107/filament-scaffold.svg?style=flat-square)](https://packagist.org/packages/cuongpham2107/filament-scaffold)
[![Total Downloads](https://img.shields.io/packagist/dt/cuongpham2107/filament-scaffold.svg?style=flat-square)](https://packagist.org/packages/cuongpham2107/filament-scaffold)

## Description
Filament scaffold is a toolkit for Filament Admin v4.x that simplifies the generation of resources. It can automatically generate models, resources, migration files, and more, creating corresponding forms and table views based on the database table. This updated version supports Filament 4.1+ and Laravel 11.

## Features
- Automatic Filament Resource Generation: Generates Filament resource files, including forms and table views, based on specified table names.

- Support for Multiple Resource Types: Can generate models, migration files, factories, controllers, and more.

- Dynamic Form Generation: Automatically generates form fields based on database table structure.

- Seamless Integration with Laravel and Filament: Utilizes Laravel's Artisan commands and Filament's extension mechanism for efficient resource management.

## Requirements
- PHP 8.2+
- Laravel 11.x
- Filament 4.1+

## Installation
You can install the package via composer:
```bash
composer require cuongpham2107/filament-scaffold
```

Then, you need to connect to the database in the .env file.

In your project, app\Providers\Filament\xxxPanelProvider.php add this code:
```php
use Cuongpham\FilamentScaffold\FilamentScaffoldPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        // ... other configurations
        ->plugin(FilamentScaffoldPlugin::make());
}
```

## Publishing Configuration file
To publish the configuration file, use:
```bash
php artisan vendor:publish --provider="Cuongpham\FilamentScaffold\FilamentScaffoldServiceProvider" --tag="filament-scaffold-config"
```
You can set to false to disable the scaffold form.
```php
return [
    'enabled' => false,
];
```

## Usage
In your admin page will have a Scaffolds from. You can choose the table from the connected database or create other table in the form. Then, you can click the "Create" button to create the reesource, model or migration.

> [!NOTE]
> In the resource file, for the table, the table column type default is TextColumn. For the form, the type defualt is TextInput.

## Preview

https://github.com/user-attachments/assets/adb41e0c-df7c-48cf-8d33-d5e7d985efb7

![image](https://github.com/user-attachments/assets/48aaee63-f46c-4d9f-b6d1-0539384b2538)

![image](https://github.com/user-attachments/assets/6c8cdc4b-1330-487a-acab-17cf94f93f82)
![image](https://github.com/user-attachments/assets/c5f6a10f-139d-4344-b135-59f3d18acb30)
![image](https://github.com/user-attachments/assets/37872ba4-00f8-414f-a041-f7ab10cef1a8)
![image](https://github.com/user-attachments/assets/af177dd6-8382-42d7-b5cd-b5b1e97ed753)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## What's New in v4.x
- Updated to support Filament 4.1+
- Compatible with Laravel 11.x
- Updated all dependencies to latest versions
- Fixed deprecated APIs and methods
- Improved PHP 8.2+ compatibility

## Credits

- [cuongpham2107](https://github.com/cuongpham2107) - Filament 4.x update
- [celia514](https://github.com/solutionforest) - Original package author
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
