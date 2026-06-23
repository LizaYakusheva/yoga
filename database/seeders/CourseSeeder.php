<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'name' => 'Основы хатха-йоги',
                'price' => 8000,
                'description' => 'Базовый курс для начинающих. Изучение основных асан, техник дыхания и принципов йоги.',
            ],
            [
                'name' => 'Виньяса-флоу продвинутый уровень',
                'price' => 12000,
                'description' => 'Интенсивный курс динамической практики для опытных практиков.',
            ],
            [
                'name' => 'Йога-терапия и восстановление',
                'price' => 10000,
                'description' => 'Терапевтический курс для работы с проблемами спины, суставов и стрессом.',
            ],
            [
                'name' => 'Медитация и осознанность',
                'price' => 7000,
                'description' => 'Курс по развитию концентрации, управлению эмоциями и внутренней гармонии.',
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
