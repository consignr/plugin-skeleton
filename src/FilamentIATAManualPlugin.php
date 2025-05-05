<?php

namespace Consignr\FilamentIATAManual;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentIATAManualPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filamentiatamanual';
    }

    public function register(Panel $panel): void
    {
        //
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
