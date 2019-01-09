<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Jitender.BasicSchool',
            'Student',
            [
                'Student' => 'list, show, new, create, edit, update, delete, showMarks, showAttendence',
                'Teacher' => 'list, show, new, create, edit, update, delete, addMarks, addAttendence'
            ],
            // non-cacheable actions
            [
                'Student' => 'create, update, delete, ',
                'Teacher' => 'create, update, delete, '
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Jitender.BasicSchool',
            'Teacher',
            [
                'Student' => 'list, show, new, create, edit, update, delete, showMarks, showAttendence',
                'Teacher' => 'list, show, new, create, edit, update, delete, addMarks, addAttendence'
            ],
            // non-cacheable actions
            [
                'Student' => 'create, update, delete, ',
                'Teacher' => 'create, update, delete, '
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    student {
                        iconIdentifier = basic_school-plugin-student
                        title = LLL:EXT:basic_school/Resources/Private/Language/locallang_db.xlf:tx_basic_school_student.name
                        description = LLL:EXT:basic_school/Resources/Private/Language/locallang_db.xlf:tx_basic_school_student.description
                        tt_content_defValues {
                            CType = list
                            list_type = basicschool_student
                        }
                    }
                    teacher {
                        iconIdentifier = basic_school-plugin-teacher
                        title = LLL:EXT:basic_school/Resources/Private/Language/locallang_db.xlf:tx_basic_school_teacher.name
                        description = LLL:EXT:basic_school/Resources/Private/Language/locallang_db.xlf:tx_basic_school_teacher.description
                        tt_content_defValues {
                            CType = list
                            list_type = basicschool_teacher
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'basic_school-plugin-student',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:basic_school/Resources/Public/Icons/user_plugin_student.svg']
			);
		
			$iconRegistry->registerIcon(
				'basic_school-plugin-teacher',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:basic_school/Resources/Public/Icons/user_plugin_teacher.svg']
			);
		
    }
);
