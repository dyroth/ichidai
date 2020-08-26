<?php

return [
    'title' => 'Leden beheer',
    'icon' => 'fa fa-users',
    'items' => [
        'Leden' => [
            'route' => 'admin.members.index',
            'icon' => 'fa fa-user',
        ],
        'Graden' => [
            'route' => 'admin.grades.index',
            'icon' => 'fa fa-star',
        ],
    ]
];
