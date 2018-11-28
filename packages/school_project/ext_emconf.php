<?php

/**
 * Extension Manager/Repository config file for ext "school_project".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'School Project',
    'description' => 'This is a school project for Independent Course Work',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HofUniversity\\SchoolProject\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Jitender Sharma',
    'author_email' => 'capitol2221@gmail.com',
    'author_company' => 'Hof University',
    'version' => '1.0.0',
];
