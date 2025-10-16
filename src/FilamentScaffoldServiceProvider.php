<?php

namespace Cuongpham\FilamentScaffold;

use Cuongpham\FilamentScaffold\Testing\TestsFilamentScaffold;
use Filament\Support\Assets\Asset;
use Filament\Support\Facades\FilamentAsset;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentScaffoldServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-scaffold';

    public static string $viewNamespace = 'filament-scaffold';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/filament-scaffold.php' => config_path('filament-scaffold.php'),
        ], 'filament-scaffold-config');

    }

    public function packageRegistered(): void {}

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        // Testing
        Testable::mixin(new TestsFilamentScaffold);
    }

    protected function getAssetPackageName(): ?string
    {
        return 'cuongpham/filament-scaffold';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
        ];
    }
}
