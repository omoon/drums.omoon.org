<?php

return [
    'baseUrl' => 'http://localhost:3000/',
    'production' => false,
    'collections' => [
        'posts' => [
            'sort' => ['featured', 'date'],
            'path' => 'blog/{filename}',
            'author' => 'Tighten Co.',
        ],
    ],
];
