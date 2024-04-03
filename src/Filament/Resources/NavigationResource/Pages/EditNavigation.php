<?php

namespace Elgafy\FilamentNavigation\Filament\Resources\NavigationResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Elgafy\FilamentNavigation\Filament\Resources\NavigationResource\Pages\Concerns\HandlesNavigationBuilder;
use Elgafy\FilamentNavigation\FilamentNavigation;

class EditNavigation extends EditRecord
{
    use HandlesNavigationBuilder;

    public static function getResource(): string
    {
        return FilamentNavigation::get()->getResource();
    }
}
