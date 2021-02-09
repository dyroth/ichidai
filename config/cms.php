<?php

return [
    'title' => 'Inhoud',
    'icon' => 'fa fa-files-o',
    'items' => [
        'Algemene info' => [
            'route' => 'admin.general_info.edit',
            'icon' => 'fa fa-info',
        ],
        'Introductie' =>
            [
                'route' => 'admin.introduction.edit',
                'icon' => 'fa fa-info',
            ],
        'Lesgevers' =>
            [
                'route' => 'admin.coaches.index',
                'icon' => 'fa fa-graduation-cap',
            ],
        'Lessen' =>
            [
                'route' => 'admin.lessons.index',
                'icon' => 'fa fa-book',
            ],
        'Lestijden' =>
            [
                'route' => 'admin.lesson_times.index',
                'icon' => 'fa fa-clock-o',
            ],
        'Graden' => [
            'route' => 'admin.grades.index',
            'icon' => 'fa fa-star',
        ],
    ]
];
