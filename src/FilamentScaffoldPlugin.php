<?php

namespace Cuongpham\FilamentScaffold;

use Cuongpham\FilamentScaffold\Resources\ScaffoldResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentScaffoldPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-scaffold';
    }

    public function register(Panel $panel): void
    {
        if (config('filament-scaffold.enabled', false)) {
            $panel->resources([
                ScaffoldResource::class,
            ]);
        }
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
