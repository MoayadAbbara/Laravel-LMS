<?php

namespace App\Filament\Widgets;

use App\Models\Course;
use App\Models\Role;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StudentCountWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            stat::make('Student Number', User::where('role_id', Role::STUDENT)->count()),
            stat::make('Teacher Number', User::where('role_id', Role::TEACHER)->count()),
            stat::make('Course Number', Course::count()),
        ];
    }
}
