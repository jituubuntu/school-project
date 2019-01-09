<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
   'schoolextension',
   'tx_schoolextension_domain_model_department'
);
