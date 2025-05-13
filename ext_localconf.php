<?php
defined('TYPO3') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'nsProtectSite',
    'Nsprotectsite',
    [
        \Nitsan\NsProtectSite\Controller\ProtectPagesController::class => 'form,login,load'
    ],
    // non-cacheable actions
    [
        \Nitsan\NsProtectSite\Controller\ProtectPagesController::class => 'login'
    ]
);
