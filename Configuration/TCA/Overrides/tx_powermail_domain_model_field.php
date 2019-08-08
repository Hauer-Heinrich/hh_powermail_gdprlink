<?php
/**
 * extend powermail fields tx_powermail_domain_model_field
 */
$tempColumns = [
    'data_protection_text' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:hh_powermail_gdprlink/Resources/Private/Language/locallang.xlf:data_protection_text.label',
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
    'data_protection_value' => [
        'label' => 'LLL:EXT:hh_powermail_gdprlink/Resources/Private/Language/locallang.xlf:data_protection_value.label',
        'description' => 'LLL:EXT:hh_powermail_gdprlink/Resources/Private/Language/locallang.xlf:data_protection_value.description',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'max' => 255,
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
        data_protection_value,
        --div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,
            mandatory,
            --palette--;Layout;43,
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
