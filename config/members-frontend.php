<?php

use Illuminate\Support\Facades\Auth;

$auth = app(Auth::user());

dd($auth);

return [
    'title' => 'Menu',
    'icon' => 'fa fa-user',
    'items' => [
        'Lidmaatschap' => [
            'route' => 'member.index',
            'icon' => 'fa fa-user',
        ],
    ]
];
