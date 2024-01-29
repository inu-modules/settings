<?php

namespace Inumodules\Settings\Pages;

use Filament\Pages\Page;

class SettingsPage extends Page
{
    protected static ?string $title = 'Settings';

    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $navigationIcon = 'heroicon-o-adjustments-vertical';

    protected static ?string $navigationLabel = 'Settings';

    protected static string $view = 'filament.pages.settings';

    protected static ?int $navigationSort = 999;
}
