<?php

/**
 * Extension Manager/Repository config file for ext "epoche_napoleon_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'EPOCHE NAPOLEON Sitepackage',
    'description' => 'Sitepackage of the webiste »EPOCHE NAPOLEON« von der Französischen Revolution bis Waterloo (https:,www.epoche-napoleon.net)',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '>=10.4',
            'fluid_styled_content' => '=>10.4',
            'rte_ckeditor' => '=>10.4'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'EpocheNapoleon\\EpocheNapoleonSitepackage\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Michael Gnessner',
    'author_email' => 'typo3-extension@epoche-napoleon.net',
    'author_company' => 'EPOCHE NAPOLEON',
    'version' => '1.0.0',
];
