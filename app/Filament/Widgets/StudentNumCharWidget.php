<?php

namespace App\Filament\Widgets;

use App\Models\Grade;
use Filament\Widgets\ChartWidget;

class StudentNumCharWidget extends ChartWidget
{
    protected static ?string $heading = 'Students|Degrees';

    protected function getData(): array
    {
        // Retrieve all grades with the count of students
        // $grades = Grade::withCount(['student'])->get();

        // // Extract the names of the grades and the number of students
        // $gradeNames = $grades->pluck('name')->toArray();
        // $studentCounts = $grades->pluck('student_count')->toArray();
        // dd(Grade::get('name')->toArray());
        return [
            'datasets' => [
                [
                    'data' => Grade::withCount(['student'])->get()->pluck('student_count')->toArray(),
                    'backgroundColor' => [
                        'rgb(255, 99, 132)',    // Red
                        'rgb(54, 162, 235)',    // Blue
                        'rgb(255, 205, 86)',    // Yellow
                        'rgb(75, 192, 192)',    // Teal
                        'rgb(153, 102, 255)',   // Purple
                        'rgb(255, 159, 64)',    // Orange
                        'rgb(255, 99, 71)',     // Tomato
                        'rgb(144, 238, 144)',   // Light Green
                        'rgb(60, 179, 113)',    // Medium Sea Green
                        'rgb(106, 90, 205)',    // Slate Blue
                        'rgb(220, 20, 60)',     // Crimson
                        'rgb(238, 130, 238)'    // Violet
                    ]


                ],
            ],
            'labels' => Grade::withCount(['student'])->get()->pluck('name')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
