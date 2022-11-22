<?php

return [
    'user-groups' => [
        'title' => 'Пользователи',
        'route' => 'admin.user-groups.users.index',
        'primary_navigation' => [
            'users' => [
                'title' => 'Пользователи',
                'module' => true,
            ],
            'workers' => [
                'title' => 'Сотрудники',
                'module' => true,
            ],
            'ourClients' => [
                'title' => 'Отзывы',
                'module' => true,
            ],

        ],
    ],
    'products' => [
        'title' => 'Каталог',
        'route' => 'admin.products.categories.index',
        'primary_navigation' => [
            'categories' => [
                'title' => 'Категории',
                'module' => true,
            ],
            'fabricators' => [
                'title' => 'Производители',
                'module' => true,
            ],
            'devices' => [
                'title' => 'Устройства',
                'module' => true,
            ],
            'services' => [
                'title' => 'Услуги',
                'module' => true,
            ],
            'orderServices' => [
                'title' => 'Прайс-лист',
                'module' => true,
            ],
        ],
    ],

    'requests' => [
        'title' => 'Заявки',
        'module' => true,
    ],

    'promotions' => [
        'title' => 'Акции',
        'module' => true,
    ],
    'news' => [
        'title' => 'Новости',
        'module' => true,
    ],

    'orders' => [
        'title' => 'Заказы',
        'module' => true,
    ],
    'jobSteps' => [
        'title' => 'Этапы',
        'module' => true,
    ],

];
