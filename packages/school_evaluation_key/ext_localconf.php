<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SchoolEvaluation.SchoolEvaluationKey',
            'Teacher',
            [
                'TeacherManagement' => 'index, manageStudents, '
                    . 'listAttendances, newAttendance, createAttendance, editAttendance, updateAttendance, deleteAttendance, '
                    . 'listMarks',
                'Teacher' => 'list, show, new, create, edit, update, delete',
                'Student' => 'list, show, new, create, edit, update, delete',
                'Evaluation' => 'list, show, new, create, edit, update, delete',
                'Attendance' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'TeacherManagement' => 'index, '
                    . 'showStudents, newAttendance, createAttendance, editAttendance, updateAttendance, deleteAttendance, '
                    . 'showMarks',
                'Teacher' => 'create, update, delete',
                'Student' => 'create, update, delete',
                'Evaluation' => 'create, update, delete',
                'Attendance' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SchoolEvaluation.SchoolEvaluationKey',
            'Student',
            [
                //'Teacher' => 'list, show, new, create, edit, update, delete',
                'Student' => 'list, show, new, create, edit, update, delete',
                'Evaluation' => 'list, show, new, create, edit, update, delete',
                'Attendance' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
               // 'Teacher' => 'create, update, delete',
                'Student' => 'create, update, delete',
                'Evaluation' => 'create, update, delete',
                'Attendance' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    teacher {
                        iconIdentifier = school_evaluation_key-plugin-teacher
                        title = LLL:EXT:school_evaluation_key/Resources/Private/Language/locallang_db.xlf:tx_school_evaluation_key_teacher.name
                        description = LLL:EXT:school_evaluation_key/Resources/Private/Language/locallang_db.xlf:tx_school_evaluation_key_teacher.description
                        tt_content_defValues {
                            CType = list
                            list_type = schoolevaluationkey_teacher
                        }
                    }
                    student {
                        iconIdentifier = school_evaluation_key-plugin-student
                        title = LLL:EXT:school_evaluation_key/Resources/Private/Language/locallang_db.xlf:tx_school_evaluation_key_student.name
                        description = LLL:EXT:school_evaluation_key/Resources/Private/Language/locallang_db.xlf:tx_school_evaluation_key_student.description
                        tt_content_defValues {
                            CType = list
                            list_type = schoolevaluationkey_student
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'school_evaluation_key-plugin-teacher',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:school_evaluation_key/Resources/Public/Icons/user_plugin_teacher.svg']
			);
		
			$iconRegistry->registerIcon(
				'school_evaluation_key-plugin-student',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:school_evaluation_key/Resources/Public/Icons/user_plugin_student.svg']
			);
		
    }
);
