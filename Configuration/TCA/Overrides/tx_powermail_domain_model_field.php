<?php
/**
 * extend powermail fields tx_powermail_domain_model_field
 */
$tempColumns = [
    'data_protection_text' => [
        'exclude' => 1,
        'label' => 'DSGVO data protection text',
        'config' => [
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'rte_gdprlink',
            'fieldControl' => [
                'fullScreenRichtext' => [
                    'disabled' => false,
                ],
            ],
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_powermail_domain_model_field',
    $tempColumns
);

$GLOBALS['TCA']['tx_powermail_domain_model_field']['types']['data_protection'] = [
    'showitem' => '
        title,
        type,
        data_protection_text,
        --div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,
            mandatory,
            --palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,
        --div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,
            sys_language_uid,
            l10n_parent,
            l10n_diffsource,
            hidden,
            starttime,
            endtime
        '
];
