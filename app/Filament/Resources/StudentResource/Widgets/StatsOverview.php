<?php

namespace App\Filament\Resources\StudentResource\Widgets;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    // protected function getStats(): array
    // {
    //     return [
    //         // Stat::make('Unique views', '192.1k'),
    //         // Stat::make('Bounce rate', '21%'),
    //         // Stat::make('Average time on page', '3:12'),
    //         Stat::make('Students', Student::count())->url('coba', true),
    //         Stat::make('Teachers', Teacher::count()),
    //         Stat::make('Class Room', Classroom::count()),
    //     ];
    // }

    // protected static string $view = 'filament.resources.students.view';
}
