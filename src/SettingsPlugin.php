<?php

namespace Inumodules\Settings;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Inumodules\Settings\Pages\SettingsPage;

class SettingsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'settings';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->pages([
                SettingsPage::class,
            ]);
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
