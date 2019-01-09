<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('schoolextension', 'Configuration/TypoScript', 'school_extension');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_schoolextension_domain_model_teacher', 'EXT:schoolextension/Resources/Private/Language/locallang_csh_tx_schoolextension_domain_model_teacher.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_schoolextension_domain_model_teacher');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_schoolextension_domain_model_department', 'EXT:schoolextension/Resources/Private/Language/locallang_csh_tx_schoolextension_domain_model_department.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_schoolextension_domain_model_department');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_schoolextension_domain_model_classes', 'EXT:schoolextension/Resources/Private/Language/locallang_csh_tx_schoolextension_domain_model_classes.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_schoolextension_domain_model_classes');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_schoolextension_domain_model_student', 'EXT:schoolextension/Resources/Private/Language/locallang_csh_tx_schoolextension_domain_model_student.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_schoolextension_domain_model_student');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_schoolextension_domain_model_mark', 'EXT:schoolextension/Resources/Private/Language/locallang_csh_tx_schoolextension_domain_model_mark.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_schoolextension_domain_model_mark');

    }
);
