<?php

return [
    'main-page' => [
        'title' => 'Главная',
        'route' => 'admin.main-page.promotions.index',
        'primary_navigation' => [
            'promotions' => [
                'title' => 'Акции',
                'module' => true,
            ],
            'jobSteps' => [
                'title' => 'Этапы',
                'module' => true,
            ]
        ],
    ],
    'about-us' => [
        'title' => 'О нас',
        'route' => 'admin.about-us.workers.index',
        'primary_navigation' => [
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
    'news' => [
        'title' => 'Новости',
        'module' => true,
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
            'orderServices' => [
                'title' => 'Прайс-лист',
                'module' => true,
            ],
        ],
    ],
    'orders' => [
        'title' => 'Клиенты',
        'route' => 'admin.orders.orders.index',
        'primary_navigation' => [
            'orders' => [
                'title' => 'Заказы',
                'module' => true,
            ],
            'requests' => [
                'title' => 'Заявки',
                'module' => true,
            ],
            'users' => [
                'title' => 'Пользователи',
                'module' => true,
            ],
        ],
    ],
    'exports' => [
        'title' => 'Экспорт',
        'module' => true,
    ],
];
