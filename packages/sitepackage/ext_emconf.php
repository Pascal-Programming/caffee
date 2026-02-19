<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'SitePackage',
    'description' => 'Site Package for smal caffee website form Red Hat',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'RedHat\\Sitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Pascal Roth',
    'author_email' => 'pascal-programming@gmx.de',
    'author_company' => 'Red Hat',
    'version' => '1.0.0',
];
