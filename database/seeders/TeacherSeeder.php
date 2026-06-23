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
                'name' => 'Александр Тохтобин',
                'status' => 'Преподаватель',
                'description' => 'Преподаватель хатха-йоги. Помогает развивать гибкость, дыхание и внутреннее спокойствие.',
                'image' => '/teachers/teacher1.jpg',
            ],
            [
                'name' => 'Надежда Тохтобина',
                'status' => 'Преподаватель',
                'description' => 'Инструктор виньяса-йоги. Фокус на плавных переходах и работе с телом через дыхание.',
                'image' => '/teachers/teacher2.jpg',
            ],
            [
                'name' => 'Ирина Смирнова',
                'status' => 'Преподаватель',
                'description' => 'Преподаватель йога-нидры и медитации. Специализация — расслабление и восстановление.',
                'image' => '/teachers/teacher3.jpg',
            ],
        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}
