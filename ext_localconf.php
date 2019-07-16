<?php
defined('TYPO3_MODE') || die();

call_user_func(function() {
    $extensionKey = "hh_powermail_gdprlink";

    // Typo3 extension manager gearwheel icon (ext_conf_template.txt)
    $extensionConfiguration = $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS'][$extensionKey];
    $rtePresets = $extensionConfiguration['rtePresets'];

    // Register own rte ckeditor config which comes from lines above
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['rte_gdprlink'] = $rtePresets;
});
