<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DashboardSeeder extends Seeder
{
    private $courses = [
        [
            "cu_code" => "CU75001",
            "name" => "Program & Career Orientation",
            "timing" => "Quarter 1",
            "credits" => 2.5,
            "tests" => [
                ["best_grade" => 7, "credits" => 2.5, "name" => "Portfolio website (Presentation)", "weighing_factor" => 1]
            ]
        ],
        [
            "cu_code" => "CU75002",
            "name" => "Computer Science Basics",
            "timing" => "Quarter 1",
            "credits" => 5,
            "tests" => [
                ["best_grade" => 5, "credits" => 5, "name" => "Written knowledge test", "weighing_factor" => 1]
            ]
        ],
        [
            "cu_code" => "CU75003",
            "name" => "Programming Basics",
            "timing" => "Quarter 1",
            "credits" => 5,
            "tests" => [
                ["best_grade" => 0, "credits" => 5, "name" => "Written knowledge test", "weighing_factor" => 1]
            ]
        ],
        [
            "cu_code" => "Unknown",
            "name" => "IT Personality",
            "timing" => "Quarter 2 - 4",
            "credits" => 2.5,
            "tests" => [
                ["best_grade" => 0, "credits" => 2.5, "name" => "Portfolio", "weighing_factor" => 1]
            ]
        ],
        [
            "cu_code" => "CU75004",
            "name" => "Object Oriented Programming",
            "timing" => "Quarter 2",
            "credits" => 10,
            "tests" => [
                ["best_grade" => 6, "credits" => 5, "name" => "Presentation (group)", "weighing_factor" => 1],
                ["best_grade" => 0, "credits" => 5, "name" => "Written knowledge test", "weighing_factor" => 1]
            ]
        ],
        [
            "cu_code" => "CU75080",
            "name" => "Framework Project 1",
            "timing" => "Quarter 3",
            "credits" => 10,
            "tests" => [
                ["best_grade" => 0, "credits" => 4, "name" => "Written knowledge test", "weighing_factor" => 1],
                ["best_grade" => 0, "credits" => 1, "name" => "Database exam", "weighing_factor" => 1],
                ["best_grade" => 0, "credits" => 2.5, "name" => "Group presentation", "weighing_factor" => 1],
                ["best_grade" => 0, "credits" => 2.5, "name" => "Individual requirements", "weighing_factor" => 1]
            ]
        ],
        [
            "cu_code" => "CU75081",
            "name" => "Business IT Consultancy Basics",
            "timing" => "Quarter 3 - 4",
            "credits" => 2.5,
            "tests" => [
                ["best_grade" => 0, "credits" => 2.5, "name" => "Assignment", "weighing_factor" => 1]
            ]
        ],
        [
            "cu_code" => "CU75011",
            "name" => "Framework Project 2",
            "timing" => "Quarter 4",
            "credits" => 10,
            "tests" => [
                ["best_grade" => 0, "credits" => 2.5, "name" => "Final delivery", "weighing_factor" => 1],
                ["best_grade" => 0, "credits" => 2.5, "name" => "Report assessment", "weighing_factor" => 1],
                ["best_grade" => 0, "credits" => 5, "name" => "IT Dev Portfolio", "weighing_factor" => 1]
            ]
        ],
        [
            "cu_code" => "CU75068",
            "name" => "Personal Professional Development Exploration",
            "timing" => "Quarter 1 - 4",
            "credits" => 12.5,
            "tests" => [
                ["best_grade" => 0, "credits" => 12.5, "name" => "Criterion - referenced assessment", "weighing_factor" => 1]
            ]
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->courses as $courseData) {
            $tests = $courseData['tests'];
            unset($courseData['tests']);

            $course = Course::create($courseData);

            foreach ($tests as $testData) {
                $course->tests()->create($testData);
            }
        }
    }
}
