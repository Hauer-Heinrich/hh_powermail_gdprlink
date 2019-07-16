<?php
defined('TYPO3_MODE') || die();

call_user_func(function() {

    $extensionKey = "hh_powermail_gdprlink";

    // make PageTsConfig selectable
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        "Configuration/TsConfig/AllPage.typoscript",
        "EXT:{$extensionKey} :: Powermail GDPR Link"
    );
});
