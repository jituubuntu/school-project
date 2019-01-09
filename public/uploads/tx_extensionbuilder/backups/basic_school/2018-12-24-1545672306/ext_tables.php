<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Jitender.BasicSchool',
            'Student',
            'Student'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Jitender.BasicSchool',
            'Teacher',
            'Teacher Plugin'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('basic_school', 'Configuration/TypoScript', 'Basic School');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_basicschool_domain_model_student', 'EXT:basic_school/Resources/Private/Language/locallang_csh_tx_basicschool_domain_model_student.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_basicschool_domain_model_student');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_basicschool_domain_model_teacher', 'EXT:basic_school/Resources/Private/Language/locallang_csh_tx_basicschool_domain_model_teacher.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_basicschool_domain_model_teacher');

    }
);
