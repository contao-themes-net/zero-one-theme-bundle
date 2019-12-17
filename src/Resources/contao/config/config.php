<?php

// Insert the zero one theme category
array_insert($GLOBALS['TL_CTE'], 1, ['zeroOneTheme' => []]);

/**
 * Add content elements
 */


/**
 * Available tags for Zero One Theme
 */
$GLOBALS['tl_config']['theme_tags'] = [
    '-',
    'ZeroOne01/01',
    'ZeroOne01/02',
    'ZeroOne01/03',
    'ZeroOne01/04',
    'ZeroOne01/05',
    'ZeroOne02/01',
    'ZeroOne02/02',
    'ZeroOne02/03',
    'ZeroOne02/04',
    'ZeroOne02/05',
    'ZeroOne03/01',
    'ZeroOne03/02',
    'ZeroOne03/03',
    'ZeroOne03/04',
    'ZeroOne03/05',
];

/**
 * Load default styles for every page
 */
if($GLOBALS['ZERO_ONE_STYLES'])
    $GLOBALS['ZERO_ONE_STYLES'] = [];

$GLOBALS['ZERO_ONE_STYLES'][] = 'variables';
$GLOBALS['ZERO_ONE_STYLES'][] = 'mixins';
$GLOBALS['ZERO_ONE_STYLES'][] = 'normalize';
$GLOBALS['ZERO_ONE_STYLES'][] = 'base';
$GLOBALS['ZERO_ONE_STYLES'][] = 'layout';
// $GLOBALS['ZERO_ONE_STYLES'][] = '';
// $GLOBALS['ZERO_ONE_STYLES'][] = '';
// $GLOBALS['ZERO_ONE_STYLES'][] = '';
// $GLOBALS['ZERO_ONE_STYLES'][] = '';
// $GLOBALS['ZERO_ONE_STYLES'][] = '';
