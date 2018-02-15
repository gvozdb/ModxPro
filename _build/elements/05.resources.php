<?php

return [
    'web' => [
        'index' => [
            'id' => 1,
            'pagetitle' => 'Главная',
            'hidemenu' => true,
        ],
        'blogs' => [
            'pagetitle' => 'Разделы',
            'resources' => [
                'help' => [
                    'id' => 1001,
                    'pagetitle' => 'Вопросы',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'help',
                    'uri_override' => true,
                    'description' => 'Здесь можно задавать различные вопросы про MODX, хостинги, базы данных, программирование и вообще - что угодно.',
                ],
                'news' => [
                    'pagetitle' => 'Новости и события',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'news',
                    'uri_override' => true,
                    'description' => 'Новости, объявления, ссылки на интересные заметки с других сайтов.',
                ],
                'hosting' => [
                    'pagetitle' => 'Хостинг',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'hosting',
                    'uri_override' => true,
                    'description' => 'Новости и заметки, касающиеся разного вида хостингов: shared, vps, cloud и какие там еще бывают?',
                ],
                'solutions' => [
                    'pagetitle' => 'Готовые решения',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'solutions',
                    'uri_override' => true,
                    'description' => 'Готовые решения каких-то распространённых проблем. Например, переключение контекстов на мультиязычном сайте.',
                ],
                'work' => [
                    'pagetitle' => 'Объявления о работе',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'work',
                    'uri_override' => true,
                    'description' => 'Понятные и подробные объявления о работе, с указанием требований, цен, сроков и контактов. Комментарии в этом разделе отключены!',
                ],
                'crowdfunding' => [
                    'pagetitle' => 'Краудфандинг',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'crowdfunding',
                    'uri_override' => true,
                    'description' => 'Специальный раздел со сбором средств для разработки чего-либо для сообщества. Исправление ошибок компонентов, написание нового функционала.',
                ],
                'howto' => [
                    'pagetitle' => 'Пошаговые инструкции',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'howto',
                    'uri_override' => true,
                    'description' => 'Понятные пошаговые инструкции по работе с MODX и не только.',
                ],
                'store' => [
                    'pagetitle' => 'Магазин дополнений',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'store',
                    'uri_override' => true,
                    'description' => 'Новости и заметки, касающиеся магазина дополнений.',
                ],
                'components' => [
                    'pagetitle' => 'Новые дополнения и их версии',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'components',
                    'uri_override' => true,
                    'description' => 'Анонсы новых дополнений для MODX или их версий.',
                ],
                'security' => [
                    'pagetitle' => 'Безопасность',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'security',
                    'uri_override' => true,
                    'description' => 'Раздел посвящен разным вопросам безопасности: движков, сайтов и хостингов.',
                ],
                'development' => [
                    'pagetitle' => 'Для разработчиков',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'development',
                    'uri_override' => true,
                    'description' => 'Раздел для разработчиков: javascript, php, xpdo и другие непонятные слова.',
                ],
                'sites' => [
                    'pagetitle' => 'Сайты на MODX',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'sites',
                    'uri_override' => true,
                    'description' => 'Готовые сайты, созданные с применением нашей любимой системы. Рассказы о создании.',
                ],
            ],
        ],
        'comments' => [
            'id' => 3,
            'pagetitle' => 'Комментарии',
        ],
        'topics' => [
            'pagetitle' => 'Публикации',
        ],
        'users' => [
            'pagetitle' => 'Пользователи',
            'cacheable' => false,
        ],
        'chat' => [
            'pagetitle' => 'Чат',
        ],
        'service' => [
            'id' => 100,
            'pagetitle' => 'Служебное',
            'template' => 0,
            'hidemenu' => true,
            'published' => false,
            'resources' => [
                'search' => [
                    'pagetitle' => 'Поиск',
                    'hidemenu' => true,
                    'uri' => 'search',
                    'uri_override' => true,
                ],
                '401' => [
                    'pagetitle' => '401 - Требуется авторизация',
                    'hidemenu' => true,
                    'uri' => '401',
                ],
                '403' => [
                    'pagetitle' => '403 - Доступ запрещён',
                    'hidemenu' => true,
                    'uri' => '403',
                ],
                '404' => [
                    'pagetitle' => '404 - Страница не найдена',
                    'hidemenu' => true,
                    'uri' => '404',
                ],
                'sitemap.xml' => [
                    'pagetitle' => 'Sitemap',
                    'template' => 0,
                    'hidemenu' => true,
                    'content_type' => 'text/xml',
                    'uri' => 'sitemap.xml',
                    'uri_override' => true,
                ],
                'robots.txt' => [
                    'pagetitle' => 'Robots.txt',
                    'template' => 0,
                    'hidemenu' => true,
                    'content_type' => 'text/plain',
                    'uri' => 'robots.txt',
                    'uri_override' => true,
                ],
                'rss' => [
                    'pagetitle' => 'RSS',
                    'template' => 0,
                    'hidemenu' => true,
                    'content_type' => 'application/rss+xml',
                    'uri' => 'rss',
                    'uri_override' => true,
                ],
            ],
        ],
    ],
    'en' => [
        'index' => [
            'id' => 501,
            'pagetitle' => 'Main',
            'hidemenu' => true,
        ],
        'blogs' => [
            'pagetitle' => 'Sections',
            'resources' => [
                'help' => [
                    'id' => 2001,
                    'pagetitle' => 'Questions',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'help',
                    'uri_override' => true,
                    'description' => 'Here you can ask any questions about MODX, web hosting, databases, programming, and anything else.',
                ],
                'news' => [
                    'pagetitle' => 'News and announcements',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'news',
                    'uri_override' => true,
                    'description' => 'News, announcements, links to interesting posts from other sites.',
                ],
                'hosting' => [
                    'pagetitle' => 'Hosting',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'hosting',
                    'uri_override' => true,
                    'description' => 'News and notes about the different types of hosting: shared, vps, cloud and what else they can be?',
                ],
                'solutions' => [
                    'pagetitle' => 'Solutions',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'solutions',
                    'uri_override' => true,
                    'description' => 'Ready solutions for common problems. For example, context switching in a multilingual website.',
                ],
                'work' => [
                    'pagetitle' => 'Jobs',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'work',
                    'uri_override' => true,
                    'description' => 'Clear and detailed listings of jobs, specifying requirements, prices, deadlines and contacts. Comments in this section are disabled!',
                ],
                'crowdfunding' => [
                    'pagetitle' => 'Crowdfunding',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'crowdfunding',
                    'uri_override' => true,
                    'description' => 'Special section with a collection of tools for developing something for the community. Error correction components, writing new functionality.',
                ],
                'howto' => [
                    'pagetitle' => 'How to',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'howto',
                    'uri_override' => true,
                    'description' => 'Clear step by step instructions for working with MODX.',
                ],
                'store' => [
                    'pagetitle' => 'Extras store',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'store',
                    'uri_override' => true,
                    'description' => 'News and notes about components from modstore.pro.',
                ],
                'components' => [
                    'pagetitle' => 'New extras and updates',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'components',
                    'uri_override' => true,
                    'description' => 'Announcements about updates and new versions of components for MODX.',
                ],
                'security' => [
                    'pagetitle' => 'Security',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'security',
                    'uri_override' => true,
                    'description' => 'Section focuses on different safety issues: engines, websites and hosting.',
                ],
                'development' => [
                    'pagetitle' => 'For developers',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'development',
                    'uri_override' => true,
                    'description' => 'Section for developers: javascript, php, xpdo, and other incomprehensible words.',
                ],
                'sites' => [
                    'pagetitle' => 'MODX sites',
                    'template' => 3,
                    'class_key' => 'modDocument',
                    'uri' => 'sites',
                    'uri_override' => true,
                    'description' => 'The stories about the creation of sites made using our favorite system.',
                ],
            ],
        ],
        'comments' => [
            'id' => 503,
            'pagetitle' => 'Comments',
        ],
        'topics' => [
            'pagetitle' => 'Topics',
        ],
        'users' => [
            'pagetitle' => 'Users',
            'cacheable' => false,
        ],
        'chat' => [
            'pagetitle' => 'Chat',
        ],
        'service' => [
            'id' => 600,
            'pagetitle' => 'Service',
            'template' => 0,
            'hidemenu' => true,
            'published' => false,
            'resources' => [
                'search' => [
                    'pagetitle' => 'Search',
                    'hidemenu' => true,
                    'uri' => 'search',
                    'uri_override' => true,
                ],
                '401' => [
                    'pagetitle' => '401 - Authorization required',
                    'hidemenu' => true,
                    'uri' => '401',
                ],
                '403' => [
                    'pagetitle' => '403 - Access denied',
                    'hidemenu' => true,
                    'uri' => '403',
                ],
                '404' => [
                    'pagetitle' => '404 - Page not found',
                    'hidemenu' => true,
                    'uri' => '404',
                ],
                'sitemap.xml' => [
                    'pagetitle' => 'Sitemap',
                    'template' => 0,
                    'hidemenu' => true,
                    'content_type' => 'text/xml',
                    'uri' => 'sitemap.xml',
                    'uri_override' => true,
                ],
                'robots.txt' => [
                    'pagetitle' => 'Robots.txt',
                    'template' => 0,
                    'hidemenu' => true,
                    'content_type' => 'text/plain',
                    'uri' => 'robots.txt',
                    'uri_override' => true,
                ],
                'rss' => [
                    'pagetitle' => 'RSS',
                    'template' => 0,
                    'hidemenu' => true,
                    'content_type' => 'application/rss+xml',
                    'uri' => 'rss',
                    'uri_override' => true,
                ],
            ],
        ],
    ],
    'id' => [
        'index' => [
            'id' => 10001,
            'pagetitle' => 'ID',
            'hidemenu' => true,
            'cacheable' => false,
            'template' => 2,
        ],
    ]
];