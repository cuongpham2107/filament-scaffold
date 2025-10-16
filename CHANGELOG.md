# Changelog

All notable changes to `filament-scaffold` will be documented in this file.

## 1.0.0 - 2025-10-16

### Added
- **Filament 4.1 Support**: Updated package to support Filament 4.1+ 
- **Laravel 11 Compatibility**: Full compatibility with Laravel 11.x
- **PHP 8.2+ Support**: Updated minimum PHP requirement to 8.2
- **Updated Dependencies**: All dependencies updated to latest stable versions
- **Namespace Change**: Changed namespace from `Solutionforest\FilamentScaffold` to `Cuongpham\FilamentScaffold`

### Changed
- Replaced deprecated `reactive()` with `live()` method in form components
- Updated `modalIconColor()` to `color()` for action buttons
- Updated PHPStan to v2.x
- Updated Pest to v3.x
- Replaced abandoned `nunomaduro/larastan` with `larastan/larastan`
- Updated Symfony components to v7.x

### Breaking Changes
- Minimum PHP version is now 8.2
- Requires Filament 4.1+
- Requires Laravel 11.x
- Package namespace changed

### Migration Guide
Update your `composer.json`:
```json
{
    "require": {
        "cuongpham2107/filament-scaffold": "^1.0"
    }
}
```

Update your Panel Provider:
```php
// Old
use Solutionforest\FilamentScaffold\FilamentScaffoldPlugin;

// New  
use Cuongpham\FilamentScaffold\FilamentScaffoldPlugin;
```

## 0.0.10 - 2025-07-28

### What's Changed

* Bump dependabot/fetch-metadata from 2.2.0 to 2.3.0 by @dependabot[bot] in https://github.com/solutionforest/filament-scaffold/pull/7
* Bump aglipanci/laravel-pint-action from 2.4 to 2.5 by @dependabot[bot] in https://github.com/solutionforest/filament-scaffold/pull/8
* Bump dependabot/fetch-metadata from 2.3.0 to 2.4.0 by @dependabot[bot] in https://github.com/solutionforest/filament-scaffold/pull/9
* Bump stefanzweifel/git-auto-commit-action from 5 to 6 by @dependabot[bot] in https://github.com/solutionforest/filament-scaffold/pull/10
* New Feature by emmanpbarrameda - 071625 by @emmanpbarrameda in https://github.com/solutionforest/filament-scaffold/pull/11

**Full Changelog**: https://github.com/solutionforest/filament-scaffold/compare/0.0.9...0.0.10

## 0.0.9 - 2025-01-23

### What's Changed

* Fix previous singular form by @hazbu in https://github.com/solutionforest/filament-scaffold/pull/6

**Full Changelog**: https://github.com/solutionforest/filament-scaffold/compare/0.0.8...0.0.9

## 0.0.8 - 2025-01-14

### What's Changed

* Model form should singular by @hazbu in https://github.com/solutionforest/filament-scaffold/pull/5

### New Contributors

* @hazbu made their first contribution in https://github.com/solutionforest/filament-scaffold/pull/5

**Full Changelog**: https://github.com/solutionforest/filament-scaffold/compare/0.0.7...0.0.8

## 0.0.7 - 2024-08-13

### What's Changed

* Update README.md by @pranab-acharya in https://github.com/solutionforest/filament-scaffold/pull/3
* Fix undefined array key by @joy2fun in https://github.com/solutionforest/filament-scaffold/pull/4
* Fix windows or linux basename path issue

### New Contributors

* @pranab-acharya made their first contribution in https://github.com/solutionforest/filament-scaffold/pull/3
* @joy2fun made their first contribution in https://github.com/solutionforest/filament-scaffold/pull/4

**Full Changelog**: https://github.com/solutionforest/filament-scaffold/compare/0.0.6...0.0.7

## 0.0.6 - 2024-08-02

### What's Changed

* Improvements by emmanpbarrameda - 080224 by @emmanpbarrameda in https://github.com/solutionforest/filament-scaffold/pull/2

### New Contributors

* @emmanpbarrameda made their first contribution in https://github.com/solutionforest/filament-scaffold/pull/2

**Full Changelog**: https://github.com/solutionforest/filament-scaffold/compare/0.0.5...0.0.6

## 0.0.5 - 2024-07-26

**Full Changelog**: https://github.com/solutionforest/filament-scaffold/compare/0.0.4...0.0.5

## 0.0.4 - 2024-07-25

**Full Changelog**: https://github.com/solutionforest/filament-scaffold/compare/0.0.3...0.0.4

## 0.0.3 - 2024-07-25

**Full Changelog**: https://github.com/solutionforest/filament-scaffold/compare/0.0.2...0.0.3

## 0.0.1 - 2024-07-24

### What's Changed

* Bump dependabot/fetch-metadata from 1.6.0 to 2.2.0 by @dependabot in https://github.com/solutionforest/filament-scaffold/pull/1

### New Contributors

* @dependabot made their first contribution in https://github.com/solutionforest/filament-scaffold/pull/1

**Full Changelog**: https://github.com/solutionforest/filament-scaffold/commits/0.0.1

## 1.0.0 - 202X-XX-XX

- initial release
