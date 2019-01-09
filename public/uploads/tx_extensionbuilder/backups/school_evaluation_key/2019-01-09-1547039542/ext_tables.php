<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('school_evaluation_key', 'Configuration/TypoScript', 'school_evaluation');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_schoolevaluationkey_domain_model_teacher', 'EXT:school_evaluation_key/Resources/Private/Language/locallang_csh_tx_schoolevaluationkey_domain_model_teacher.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_schoolevaluationkey_domain_model_teacher');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_schoolevaluationkey_domain_model_student', 'EXT:school_evaluation_key/Resources/Private/Language/locallang_csh_tx_schoolevaluationkey_domain_model_student.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_schoolevaluationkey_domain_model_student');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_schoolevaluationkey_domain_model_evaluation', 'EXT:school_evaluation_key/Resources/Private/Language/locallang_csh_tx_schoolevaluationkey_domain_model_evaluation.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_schoolevaluationkey_domain_model_evaluation');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_schoolevaluationkey_domain_model_attendance', 'EXT:school_evaluation_key/Resources/Private/Language/locallang_csh_tx_schoolevaluationkey_domain_model_attendance.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_schoolevaluationkey_domain_model_attendance');

    }
);
