<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:schoolextension/Resources/Private/Language/locallang_db.xlf:tx_schoolextension_domain_model_teacher',
        'label' => 'teacher_id',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'teacher_id,first_name,last_name,mail_id,about_me,department,classes',
        'iconfile' => 'EXT:schoolextension/Resources/Public/Icons/tx_schoolextension_domain_model_teacher.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, teacher_id, first_name, last_name, mail_id, about_me, department, classes',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, teacher_id, first_name, last_name, mail_id, about_me, department, classes, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_schoolextension_domain_model_teacher',
                'foreign_table_where' => 'AND tx_schoolextension_domain_model_teacher.pid=###CURRENT_PID### AND tx_schoolextension_domain_model_teacher.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'teacher_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:schoolextension/Resources/Private/Language/locallang_db.xlf:tx_schoolextension_domain_model_teacher.teacher_id',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'first_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:schoolextension/Resources/Private/Language/locallang_db.xlf:tx_schoolextension_domain_model_teacher.first_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'last_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:schoolextension/Resources/Private/Language/locallang_db.xlf:tx_schoolextension_domain_model_teacher.last_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'mail_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:schoolextension/Resources/Private/Language/locallang_db.xlf:tx_schoolextension_domain_model_teacher.mail_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email,required'
            ]
        ],
        'about_me' => [
            'exclude' => true,
            'label' => 'LLL:EXT:schoolextension/Resources/Private/Language/locallang_db.xlf:tx_schoolextension_domain_model_teacher.about_me',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'department' => [
            'exclude' => true,
            'label' => 'LLL:EXT:schoolextension/Resources/Private/Language/locallang_db.xlf:tx_schoolextension_domain_model_teacher.department',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_schoolextension_domain_model_department',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'classes' => [
            'exclude' => true,
            'label' => 'LLL:EXT:schoolextension/Resources/Private/Language/locallang_db.xlf:tx_schoolextension_domain_model_teacher.classes',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_schoolextension_domain_model_classes',
                'foreign_field' => 'teacher',
                'foreign_sortby' => 'sorting',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'useSortable' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
    
    ],
];
