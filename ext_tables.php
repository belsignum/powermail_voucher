<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
			tx_powermail.flexForm.type.addFieldOptions.voucher_campaign = LLL:EXT:powermail_voucher/Resources/Private/Language/locallang_db.xlf:tx_powermailvoucher_domain_model_field.voucher_campaign
		');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_powermailvoucher_domain_model_campaign', 'EXT:powermail_voucher/Resources/Private/Language/locallang_csh_tx_powermailvoucher_domain_model_campaign.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_powermailvoucher_domain_model_campaign');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_powermailvoucher_domain_model_voucher', 'EXT:powermail_voucher/Resources/Private/Language/locallang_csh_tx_powermailvoucher_domain_model_voucher.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_powermailvoucher_domain_model_voucher');



		// Module System > Backend Users
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
			'Belsignum.PowermailVoucher',
			'web',
			'voucher',
			'',
			[
				'Module' => 'list, import',
			],
			[
				'access' => 'admin',
				'icon' => 'EXT:powermail_voucher/Resources/Public/Icons/icon.svg',
				'labels' => 'LLL:EXT:powermail_voucher/Resources/Private/Language/locallang_mod.xlf',
			]
		);


    }
);
