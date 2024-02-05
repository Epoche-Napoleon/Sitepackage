<?php

use epochenapoleon\Sitepackage\Middleware\UndefinedTypeNumErrorHandling;

return [
    'frontend' => [
        'sitepackage-undefinedtypenumerrorhandling' => [
            'target' => UndefinedTypeNumErrorHandling::class,
            'before' => [
                'typo3/cms-redirects/redirecthandler'
            ],
            'after' => [
                'typo3/cms-frontend/site',
            ]
        ]
    ]
];
