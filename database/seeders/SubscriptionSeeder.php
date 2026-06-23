<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    public function run(): void
    {
        $subscriptions = [
            [
                'name' => 'Пробное занятие',
                'price' => 500,
                'count' => 1,
                'description' => 'Идеальный вариант для знакомства со студией и преподавателем.',
            ],
            [
                'name' => 'Абонемент «Старт»',
                'price' => 4500,
                'count' => 4,
                'description' => 'Небольшой пакет занятий для тех, кто хочет попробовать регулярную практику.',
            ],
            [
                'name' => 'Абонемент «Базовый»',
                'price' => 8000,
                'count' => 8,
                'description' => 'Оптимальный выбор для поддержания формы и регулярной практики 2 раза в неделю.',
            ],
            [
                'name' => 'Абонемент «Премиум»',
                'price' => 11000,
                'count' => 12,
                'description' => 'Максимальная выгода для активных практиков. Включает доступ ко всем направлениям.',
            ],
            [
                'name' => 'Безлимит на месяц',
                'price' => 15000,
                'count' => 999,
                'description' => 'Свободное посещение любых занятий студии в течение 30 дней.',
            ],
        ];

        foreach ($subscriptions as $subscription) {
            Subscription::create($subscription);
        }
    }
}
