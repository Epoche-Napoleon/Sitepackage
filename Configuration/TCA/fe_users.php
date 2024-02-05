<?php

defined('TYPO3_MODE') || die();

$tca = array(
  'columns' => array(
    'CHANGE_ME' => array(
        'config' => array(
            'type' => 'select',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 9999,
            'autoSizeMax' => 30,
            'multiple' => 0,
            'foreign_table' => 'fe_users',
            'MM' => 'CHANGE_ME',
            'MM_opposite_field' => 'image',
      ),
    ),
  ),
);
/*
if (!empty($GLOBALS['TCA']['image'])) {
    return \TYPO3\CMS\Core\Utility\GeneralUtility::array_merge_recursive_overrule($GLOBALS['TCA']['image'], $tca);
};
*/


