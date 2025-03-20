<?php

namespace App\Filament\Resources\PropertyResource\Widgets;

use App\Enums\PropertyStatus;
use App\Models\Property;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PropertyStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('All Properties', Property::count()),
            Stat::make('Approved Properties', Property::query()->where('status', PropertyStatus::APPROVED)->count()),
            Stat::make('Pending Properties', Property::query()->where('status', PropertyStatus::APPROVED)->count()),
        ];
    }
}
