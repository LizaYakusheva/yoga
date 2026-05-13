<?php

namespace Database\Seeders;

use App\Models\Teacher\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        $teachers = [
            [
                'name' => 'Анастасия Лебедева',
                'status' => 'Преподаватель',
                'description' => 'Преподаватель хатха-йоги. Помогает развивать гибкость, дыхание и внутреннее спокойствие.',
            ],
            [
                'name' => 'Мария Орлова',
                'status' => 'Преподаватель',
                'description' => 'Инструктор виньяса-йоги. Фокус на плавных переходах и работе с телом через дыхание.',
            ],
            [
                'name' => 'Екатерина Соколова',
                'status' => 'Преподаватель',
                'description' => 'Преподаватель йога-нидры и медитации. Специализация — расслабление и восстановление.',
            ],
            [
                'name' => 'Ольга Воробьёва',
                'status' => 'Преподаватель',
                'description' => 'Инструктор для начинающих. Мягкий подход к практике и безопасное освоение асан.',
            ],
        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}
