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
            'typo3' => '11.5.0 - 12.4.99',
            'fluid_styled_content' => '11.5.0 - 12.4.99',
            'rte_ckeditor' => '11.5.0 - 12.4.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'EpocheNapoleon\\Sitepackage\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Michael Gnessner',
    'author_email' => 'typo3-extension@epoche-napoleon.net',
    'author_company' => 'EPOCHE NAPOLEON',
    'version' => '1.0.0'
];
